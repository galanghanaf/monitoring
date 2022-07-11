                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($portfolio3 as $p) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->

                                <?php echo form_open_multipart('admin/dataPortfolio/updateDataAksi3') ?>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="hidden" name="id_portfolio" class="form-control" value="<?php echo $p->id_portfolio ?>">
                                    <input type="text" name="nama_portfolio" class="form-control" value="<?php echo $p->nama_portfolio ?>">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('nama_portfolio', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" value="<?php echo $p->deskripsi ?>">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('deskripsi', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <input type="text" name="content" class="form-control" value="<?php echo $p->content ?>">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('content', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" name="photo" class="form-control" value="<?php echo $p->photo ?>">
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