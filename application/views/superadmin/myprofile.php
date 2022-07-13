<!-- Begin Page Content -->
<div class="container-fluid ">




    <div class="container py-5">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
        </div>
        <?php echo $this->session->flashdata('pesan') ?>

        <div class="row">
            <?php foreach ($dataadmin as $t) : ?>
                <?php if ($this->session->userdata('email') === $t['email']) : ?>
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="<?php echo base_url('') ?>/assets/img/avatar.png" alt="avatar" class="rounded-circle img-fluid" style="width: 120px;">
                                <h5 class="my-3"><?php echo $t['nama_admin']; ?></h5>
                                <?php if ($t['hak_akses'] == '1') { ?>
                                    <p class="text-muted mb-0 ">Super Admin</p>
                                <?php } else { ?>
                                    <p class="text-muted mb-0 ">Admin</p>
                                <?php } ?>
                                <p class="text-muted mb-4"><?php echo $t['email']; ?></p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a class="btn btn-outline-primary mt-2" href="<?php echo base_url('superadmin/myprofile/updateData/' . $t['id']) ?>">
                                        <b>Edit My Profile</b></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama Admin</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $t['nama_admin']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <?php if ($t['hak_akses'] == '1') { ?>
                                            <p class="text-muted mb-0 ">Super Admin</p>
                                        <?php } else { ?>
                                            <p class="text-muted mb-0 ">Admin</p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $t['email']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Username</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $t['username']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Password</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="id_password" readonly value="<?php echo $t['password'] ?>">
                                            <i class="far fa-eye mt-2" id="togglePassword" style=" cursor: pointer;"> Show Password</i>

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

                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>
                <?php endif ?>
            <?php endforeach; ?>
        </div>

    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->