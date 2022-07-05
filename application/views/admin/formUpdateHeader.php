                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($header as $h) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->

                                <form method="post" action="<?php echo base_url('admin/dataHeader/updateDataAksi') ?>">
                                    <div class="form-group">
                                        <label>Judul Header 1</label>
                                        <input type="hidden" name="id_header" class="form-control" value="<?php echo $h->id_header ?>">
                                        <input type="text" name="judul_header1" class="form-control" value="<?php echo $h->judul_header1 ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('judul_header1', '<div class="text small text-danger"></div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Judul Header 2</label>
                                        <input type="text" name="judul_header2" class="form-control" value="<?php echo $h->judul_header2 ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('judul_header2', '<div class="text small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Opening Header 1</label>
                                        <input type="text" name="opening_header1" class="form-control" value="<?php echo $h->opening_header1 ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('opening_header1', '<div class="text small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Opening Header 2</label>
                                        <input type="text" name="opening_header2" class="form-control" value="<?php echo $h->opening_header2 ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('opening_header2', '<div class="text small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Opening Header 3</label>
                                        <input type="text" name="opening_header3" class="form-control" value="<?php echo $h->opening_header3 ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('opening_header3', '<div class="text small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Navbar 1</label>
                                        <input type="text" name="navbar1" class="form-control" value="<?php echo $h->navbar1 ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('navbar1', '<div class="text small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Navbar 2</label>
                                        <input type="text" name="navbar2" class="form-control" value="<?php echo $h->navbar2 ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('navbar2', '<div class="text small text-danger"></div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Navbar 3</label>
                                        <input type="text" name="navbar3" class="form-control" value="<?php echo $h->navbar3 ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('navbar3', '<div class="text small text-danger"></div>') ?>
                                    </div>


                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->