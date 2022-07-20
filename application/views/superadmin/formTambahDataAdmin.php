                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php echo form_open_multipart('superadmin/dataadmin/tambahDataAksi') ?>
                            <form method="post" action="<?php echo base_url('superadmin/dataadmin/tambahDataAksi') ?>" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Nama Admin</label>
                                    <input type="text" name="nama_admin" class="form-control">
                                    <?php echo form_error('nama_admin', '<div class="text small text-danger"></div>') ?>

                                </div>
                                <div class="form-group">
                                    <label>Hak Akses</label>
                                    <select name="hak_akses" class="form-control">
                                        <option value="">Pilih Hak Akses</option>
                                        <option value="2">Admin Plant Citeureup</option>
                                        <option value="3">Admin Plant Tanggamus</option>
                                        <option value="4">Admin DC Lampung</option>
                                        <option value="5">Admin Plant Babakanpari</option>
                                        <option value="6">Admin Plant Legos</option>
                                        <option value="7">Admin Plant Caringin</option>
                                        <option value="8">Admin DC Bandung</option>
                                        <option value="9">Admin Plant Cianjur</option>
                                        <option value="10">Admin Plant Mekarsari</option>
                                        <option value="11">Admin Plant Bekasi</option>
                                        <option value="12">Admin DC Cikarang</option>
                                        <option value="13">Admin Plant Sentul</option>
                                        <option value="14">Admin Plant Ciherang</option>
                                        <option value="15">Admin DC Cibinong</option>

                                    </select>
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




                                <button type="submit" class="btn btn-primary">Save</button>
                                <?php echo form_close(); ?>

                        </div>

                    </div>
                </div>
                </div>

                <br>
                <br>
                <br>
                <!-- End of Main Content -->