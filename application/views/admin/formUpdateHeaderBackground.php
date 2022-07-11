                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($header_background as $hb) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->

                                <?php echo form_open_multipart('admin/dataHeaderBackground/updateDataAksi') ?>
                                <div class="form-group">
                                    <label>Background 2</label>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $hb->id ?>">
                                    <input type="file" name="background1" class="form-control" value="<?php echo $hb->background1 ?>">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('background1', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Background 2</label>
                                    <input type="file" name="background2" class="form-control" value="<?php echo $hb->background2 ?>">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('background2', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Background 3</label>
                                    <input type="file" name="background3" class="form-control" value="<?php echo $hb->background3 ?>">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('background3', '<div class="text small text-danger"></div>') ?>
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