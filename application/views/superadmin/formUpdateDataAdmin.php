                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($dataadmin as $t) : ?>
                                <?php echo form_open_multipart('superadmin/dataadmin/updateDataAksi') ?>

                                <div class="form-group">
                                    <label>Nama Admin</label>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $t->id ?>">
                                    <input type="text" name="nama_admin" class="form-control" value="<?php echo $t->nama_admin ?>">
                                    <?php echo form_error('nama_admin', '<div class="text small text-danger"></div>') ?>


                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $t->username ?>">
                                    <?php echo form_error('username', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Hak Akses</label>
                                    <select name="hak_akses" class="form-control">
                                        <option value="<?php echo $t->hak_akses ?>">
                                            <?php if ($t->hak_akses == '1') { ?>
                                                <td class="text-center">Super Admin</td>
                                            <?php } elseif ($t->hak_akses == '2') { ?>
                                                <td class="text-center">Admin Plant Citeureup</td>
                                            <?php } elseif ($t->hak_akses == '3') { ?>
                                                <td class="text-center">Admin Plant Tanggamus</td>
                                            <?php } elseif ($t->hak_akses == '4') { ?>
                                                <td class="text-center">Admin DC Lampung</td>
                                            <?php } elseif ($t->hak_akses == '5') { ?>
                                                <td class="text-center">Admin Plant Babakanpari</td>
                                            <?php } elseif ($t->hak_akses == '6') { ?>
                                                <td class="text-center">Admin Plant Legos</td>
                                            <?php } elseif ($t->hak_akses == '7') { ?>
                                                <td class="text-center">Admin Plant Caringin</td>
                                            <?php } elseif ($t->hak_akses == '8') { ?>
                                                <td class="text-center">Admin DC Bandung</td>
                                            <?php } elseif ($t->hak_akses == '9') { ?>
                                                <td class="text-center">Admin Plant Cianjur</td>
                                            <?php } elseif ($t->hak_akses == '10') { ?>
                                                <td class="text-center">Admin Plant Mekarsari</td>
                                            <?php } elseif ($t->hak_akses == '11') { ?>
                                                <td class="text-center">Admin Plant Bekasi</td>
                                            <?php } elseif ($t->hak_akses == '12') { ?>
                                                <td class="text-center">Admin DC Cikarang</td>
                                            <?php } elseif ($t->hak_akses == '13') { ?>
                                                <td class="text-center">Admin Plant Sentul</td>
                                            <?php } elseif ($t->hak_akses == '14') { ?>
                                                <td class="text-center">Admin Plant Ciherang</td>
                                            <?php } elseif ($t->hak_akses == '15') { ?>
                                                <td class="text-center">Admin DC Cibinong</td>
                                            <?php }  ?>
                                        </option>
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
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" id="myInput" value="<?php echo $t->password ?>">
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
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
                </div>

                <br>
                <br>
                <br>
                <!-- End of Main Content -->