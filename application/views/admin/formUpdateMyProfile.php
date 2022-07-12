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
                                <?php echo form_open_multipart('admin/myprofile/updateDataAksi') ?>

                                <div class="form-group">
                                    <label>Nama Admin</label>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $t->id ?>">
                                    <input type="text" name="nama_admin" class="form-control" value="<?php echo $t->nama_admin ?>">
                                    <?php echo form_error('nama_admin', '<div class="text small text-danger"></div>') ?>
                                    <input type="hidden" name="hak_akses" class="form-control" value="<?php echo $t->hak_akses ?>">
                                    <?php echo form_error('hak_akses', '<div class="text small text-danger"></div>') ?>

                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" value="<?php echo $t->jabatan ?>">
                                    <?php echo form_error('jabatan', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $t->email ?>">
                                    <?php echo form_error('email', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $t->username ?>">
                                    <?php echo form_error('username', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" id="id_password" value="<?php echo $t->password ?>">
                                    <i class="far fa-eye mt-3" id="togglePassword" style=" cursor: pointer;"> Show Password</i>
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
                                    <?php echo form_error('password', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Save</button>
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