<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class=" sidebar-brand-text mx-3">App Monitoring</sup>
                </div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>



            <!-- Nav Item - Rekap Data Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-fw fa-sitemap"></i>

                    <span>Monitoring</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Task</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/tasklist') ?>">Task List</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/logbook') ?>">Log Book IT</a>
                        <br>
                        <h6 class="collapse-header">Mapping Network</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/mappingnetworkap') ?>">Access Point</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/ipstatic') ?>">Ip Static</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/mappingnetwork') ?>">Switch</a>
                        <br>
                        <h6 class="collapse-header">Asset</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/itotasset') ?>">List IT/OT Asset</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/itotasset') ?>">List OT Asset</a>
                    </div>
                </div>
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
                    <!-- Topbar -->



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item"><a class="nav-link active bg-light text-dark rounded font-weight-bold" href="#loginModal" data-bs-toggle="modal"><?php echo $h['navbar3'] ?></a></li>
                        <button type="button" class="btn btn-primary mb-3 mt-3 ml-3">Forgot Password?</button>
                        <a href="<?php echo base_url() ?>public/login" class="btn btn-primary btn-lg active btn-hover" role="button">Primary link</a>
                        <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
                        <!-- Nav Item - User Information -->


                    </ul>

                </nav>
                <div class="portfolio modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase text-center">Login</h2>
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
                                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                                                <?php echo form_error('password', '<div class="text small text-danger"></div>') ?>
                                                            </div>

                                                            <hr>
                                                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>



                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                            <center class="mt-5 mb-3">
                                                <button class="btn btn-danger btn-user " data-bs-dismiss="modal" type="button">
                                                    <i class="fas fa-xmark me-1"></i>
                                                    Tutup
                                                </button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Topbar -->