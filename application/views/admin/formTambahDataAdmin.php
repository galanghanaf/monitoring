                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php echo form_open_multipart('admin/dataadmin/tambahDataAksi') ?>
                            <form method="post" action="<?php echo base_url('admin/dataadmin/tambahDataAksi') ?>" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Nama Admin</label>
                                    <input type="text" name="nama_pegawai" class="form-control">
                                    <?php echo form_error('nama_pegawai', '<div class="text small text-danger"></div>') ?>
                                    <input type="hidden" name="hak_akses" class="form-control" value="1">
                                    <?php echo form_error('hak_akses', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                    <?php echo form_error('username', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" id="myInput">
                                    <input style="margin-top: 13px;" type="checkbox" onclick="myFunction()"> Show Password
                                    <script>
                                        function myFunction() {
                                            var x = document.getElementById("myInput");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                        }
                                    </script>
                                    <?php echo form_error('password', '<div class="text small text-danger"></div>') ?>
                                </div>




                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <?php echo form_close(); ?>

                        </div>

                    </div>
                </div>
                </div>
                <!-- End of Main Content -->