                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($location as $l) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->
                                <?php echo form_open_multipart('admin/location/updateDataAksi') ?>

                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $l->id ?>">
                                    <input type="text" name="location" class="form-control" value="<?php echo $l->location ?>">
                                    <?php echo form_error('location', '<div class="text small text-danger"></div>') ?>
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