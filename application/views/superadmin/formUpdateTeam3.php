                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($team3 as $t3) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->

                                <?php echo form_open_multipart('superadmin/dataTeam/updateDataAksi3') ?>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" name="id_team" class="form-control" value="<?php echo $t3->id_team ?>">
                                    <input type="text" name="nama" class="form-control" value="<?php echo $t3->nama ?>">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('nama', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>NPM</label>
                                    <input type="number" name="npm" class="form-control" value="<?php echo $t3->npm ?>">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('npm', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" name="photo" class="form-control" value="<?php echo $t3->photo ?>">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('photo', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <button type="submit" class="btn btn-success">Update</button>
                                <?php echo form_close(); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->