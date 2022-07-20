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
                <?php if ($this->session->userdata('username') === $t['username']) : ?>
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="<?php echo base_url('') ?>/assets/img/avatar.png" alt="avatar" class="rounded-circle img-fluid" style="width: 120px;">
                                <h5 class="my-3"><?php echo $t['nama_admin']; ?></h5>

                                <?php if ($t['hak_akses'] == '1') { ?>
                                    <p class="text-muted mb-0 ">Super Admin</p>
                                <?php } elseif ($t['hak_akses'] == '2') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Citeureup</p>
                                <?php } elseif ($t['hak_akses'] == '3') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Tanggamus</p>
                                <?php } elseif ($t['hak_akses'] == '4') { ?>
                                    <p class="text-muted mb-0 ">Admin DC Lampung</p>
                                <?php } elseif ($t['hak_akses'] == '5') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Babakanpari</p>
                                <?php } elseif ($t['hak_akses'] == '6') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Legos</p>
                                <?php } elseif ($t['hak_akses'] == '7') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Caringin</p>
                                <?php } elseif ($t['hak_akses'] == '8') { ?>
                                    <p class="text-muted mb-0 ">Admin DC Bandung</p>
                                <?php } elseif ($t['hak_akses'] == '9') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Cianjur</p>
                                <?php } elseif ($t['hak_akses'] == '10') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Mekarsari</p>
                                <?php } elseif ($t['hak_akses'] == '11') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Bekasi</p>
                                <?php } elseif ($t['hak_akses'] == '12') { ?>
                                    <p class="text-muted mb-0 ">Admin DC Cikarang</p>
                                <?php } elseif ($t['hak_akses'] == '13') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Sentul</p>
                                <?php } elseif ($t['hak_akses'] == '14') { ?>
                                    <p class="text-muted mb-0 ">Admin Plant Ciherang</p>
                                <?php } elseif ($t['hak_akses'] == '15') { ?>
                                    <p class="text-muted mb-0 ">Admin DC Cibinong</p>
                                <?php }  ?>
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
                                        <?php } elseif ($t['hak_akses'] == '2') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Citeureup</p>
                                        <?php } elseif ($t['hak_akses'] == '3') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Tanggamus</p>
                                        <?php } elseif ($t['hak_akses'] == '4') { ?>
                                            <p class="text-muted mb-0 ">Admin DC Lampung</p>
                                        <?php } elseif ($t['hak_akses'] == '5') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Babakanpari</p>
                                        <?php } elseif ($t['hak_akses'] == '6') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Legos</p>
                                        <?php } elseif ($t['hak_akses'] == '7') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Caringin</p>
                                        <?php } elseif ($t['hak_akses'] == '8') { ?>
                                            <p class="text-muted mb-0 ">Admin DC Bandung</p>
                                        <?php } elseif ($t['hak_akses'] == '9') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Cianjur</p>
                                        <?php } elseif ($t['hak_akses'] == '10') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Mekarsari</p>
                                        <?php } elseif ($t['hak_akses'] == '11') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Bekasi</p>
                                        <?php } elseif ($t['hak_akses'] == '12') { ?>
                                            <p class="text-muted mb-0 ">Admin DC Cikarang</p>
                                        <?php } elseif ($t['hak_akses'] == '13') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Sentul</p>
                                        <?php } elseif ($t['hak_akses'] == '14') { ?>
                                            <p class="text-muted mb-0 ">Admin Plant Ciherang</p>
                                        <?php } elseif ($t['hak_akses'] == '15') { ?>
                                            <p class="text-muted mb-0 ">Admin DC Cibinong</p>
                                        <?php }  ?>
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