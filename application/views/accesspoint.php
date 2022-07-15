<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/horizontal-scroll.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/leaflet/leaflet.css" />
    <script src="<?php echo base_url() ?>/assets/leaflet/leaflet.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class=" sidebar-brand-text mx-3">Monitoring App</sup>
                </div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Access Point-->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('accesspoint') ?>">
                    <i class=" fas fa-fw fa-signal"></i>
                    <span>Acces Point</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('switchpoint') ?>">
                    <i class=" fas fa-fw fa-share-alt-square"></i>
                    <span>Switch</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('ipstatic') ?>">
                    <i class="fas fa-fw fa-sitemap"></i>
                    <span>IP Static</span></a>
            </li>
            <!--
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Welcome') ?>">
                    <i class=" fas fa-fw fa-tasks"></i>
                    <span>IT/OT Asset</span></a>
            </li>
            -->
            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="#loginModal" data-bs-toggle="modal">
                    <i class=" fas fa-fw fa-sign-in-alt"></i>
                    <span>Login</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item"><a class="btn btn-success btn-md active mt-1" role="button" aria-pressed="true" href="#loginModal" data-bs-toggle="modal">Login</a></li>
                        <li class="nav-item"><a class="btn btn-secondary btn-md active mt-1 ml-2 mr-1" role="button" aria-pressed="true" href="#loginModal" data-bs-toggle="modal">Forgot Password?</a></li>











                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid ">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <?php echo $this->session->flashdata('pesan') ?>
                    <div class="row">
                        <div class="col-md">
                            <form action="<?= base_url('accesspoint') ?>" method="POST">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search Data..." name="keyword" autocomplete="off" autofocus>
                                    <div class="input-group-append">
                                        <input class="btn btn-primary" type="submit" name="submit">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <h6>Result : <?= $total_rows ?></h6>
                    <table style="white-space:nowrap;" class="table-responsive table table-bordered table-hover" style="overflow-y: scroll; overflow-x: auto">

                        <tr>
                            <th class="text-center bg-primary text-white" rowspan="2">No</th>
                            <th class="text-center bg-primary text-white" rowspan="2">Status</th>

                            <th class="text-center bg-primary text-white" rowspan="2">Asset Description</th>
                            <th class="text-center bg-primary text-white" rowspan="2">Hostname</th>
                            <th class="text-center bg-primary text-white" rowspan="2">Model</th>
                            <th class="text-center bg-primary text-white" rowspan="2">PCB Serial Number</th>
                            <th class="text-center bg-primary text-white" rowspan="2">Assembly Serial Number</th>
                            <th class="text-center bg-primary text-white" rowspan="2">IP Address</th>
                            <th class="text-center bg-primary text-white" rowspan="2">Mac Address</th>
                            <th class="text-center bg-primary text-white" colspan="2">Up Link</th>

                            <th class="text-center bg-primary text-white" rowspan="2">Location</th>

                        </tr>
                        <tr>
                            <th class="text-center bg-primary text-white">Switch</th>
                            <th class="text-center bg-primary text-white">Port</th>
                        </tr>
                        <?php if (empty($accesspoint)) : ?>
                            <tr>
                                <td colspan="17">
                                    <div class="alert alert-danger" role="alert">
                                        Data not found!
                                    </div>
                                </td>
                            </tr>
                        <?php endif ?>
                        <?php foreach ($accesspoint as $t) : ?>
                            <tr>
                                <td class="text-center"><?php echo ++$start; ?></td>

                                <?php

                                // Initialisierung der Ziele / Wenn Port leer -> ICMP (Ping), sonst Portcheck

                                $ServerList = array(
                                    "Server1" => $t['ip_address'],
                                    "Port1" => $t['port']
                                );


                                for ($i = 1; $i <= (count($ServerList) / 2); $i++) {

                                    $Server = $ServerList["Server" . $i];
                                    $Port = $ServerList["Port" . $i];



                                    // ICMP (Ping) oder Portcheck
                                    if ($Port <> "") {
                                        if (!$socket = @fsockopen($Server, $Port, $errno, $errstr, 30)) {
                                            $tdStyle = '#e74a3b';
                                            echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Offline</td>";
                                        } else {
                                            $tdStyle = '#1cc88a';
                                            echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Online</td>";
                                            fclose($socket);
                                        }
                                    } else {
                                        $str = exec("ping -n 1 -w 1 " . $Server, $input, $result);
                                        if ($result == 0) {
                                            $tdStyle = '#1cc88a';
                                            echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Online</td>";
                                        } else {
                                            $tdStyle = '#e74a3b';
                                            echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Offline</td>";
                                        }
                                    }
                                }

                                ?>


                                <td class="text-center"><?php echo $t['asset_description']; ?></td>
                                <td class="text-center"><?php echo $t['hostname']; ?></td>
                                <td class="text-center"><?php echo $t['model']; ?></td>
                                <td class="text-center"><?php echo $t['pcb']; ?></td>
                                <td class="text-center"><?php echo $t['assembly']; ?></td>
                                <td class="text-center"><?php echo $t['ip_address']; ?></td>
                                <td class="text-center"><?php echo $t['mac_address']; ?></td>
                                <td class="text-center"><?php echo $t['switch']; ?></td>
                                <td class="text-center"><?php echo $t['port']; ?></td>
                                <td class="text-center"><?php echo $t['location']; ?></td>


                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <?= $this->pagination->create_links(); ?>




                </div>
                <!-- /.container-fluid -->

            </div>
            <br><br>

            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <div class="portfolio modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <br>
                                <br>
                                <h2 class=" text-center">Login</h2>
                                <p class="item-intro text-muted text-center">Silahkan Login Terlebih Dahulu.</p>
                                <div class="row">

                                    <div class="col-lg-12 mt-3">
                                        <div class="p-10">
                                            <?php echo $this->session->flashdata('pesan') ?> <form class="user" method="POST" action="<?php echo base_url('Welcome') ?>">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Enter Username..." name="username">
                                                    <?php echo form_error('username', '<div class="text small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user" id="id_password" placeholder="Password" name="password">
                                                    <center><i class="far fa-eye mt-3 mb-2" id="togglePassword" style=" cursor: pointer;"> Show Password</i></center>
                                                    <?php echo form_error('password', '<div class="text small text-danger"></div>') ?>

                                                    <script>
                                                        const togglePassword = document.querySelector('#togglePassword');
                                                        const password = document.querySelector('#id_password');

                                                        togglePassword.addEventListener('click', function(e) {
                                                            // toggle the type attribute
                                                            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                                            password.setAttribute('type', type);
                                                            // toggle the eye slash icon
                                                            this.classList.toggle('fa-eye-slash');
                                                        });
                                                    </script>
                                                </div>





                                                <button type="submit" class="btn btn-primary btn-user btn-lgs btn-block">Login</button>
                                                <hr>

                                                <button type="button" class="btn btn-danger btn-user btn-lgs btn-block" data-bs-dismiss="modal">Close</button>



                                            </form>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>/assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/demo/chart-pie-demo.js"></script>

    <!-- Bootstrap core JS-->
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>