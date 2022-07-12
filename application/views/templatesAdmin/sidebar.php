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
                <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Master Data Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master Data</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/assetdescription') ?>">Asset Description</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/department') ?>">Department</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/equipment') ?>">Equipment</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/location') ?>">Location</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/manufacture') ?>">Manufacture</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/modelasset') ?>">Model/Type</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/osversion') ?>">OS Version</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Laporan Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-suitcase"></i>
                    <span>Task</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Task</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/tasklist') ?>">Task List</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/logbook') ?>">Log Book IT</a>



                    </div>
                </div>
            </li>

            <!-- Nav Item - Rekap Data Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-sitemap"></i>
                    <span>Monitoring</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
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
            <!-- Nav Item - Laporan Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/myprofile') ?>">
                    <i class="fas fa-fw fa-user-cog"></i>
                    <span>My Profile</span></a>
            </li>





            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Welcome/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class=" fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
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


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small font-weight-bold">Selamat Datang, <?php echo $this->session->userdata('nama_admin') ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url('') ?>/assets/img/avatar.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('admin/profilAdmin') ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ganti Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('Welcome/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Keluar?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Silahkan pilih Logout, apabila anda yakin untuk keluar.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger" href="<?php echo base_url('Welcome/logout') ?>">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>