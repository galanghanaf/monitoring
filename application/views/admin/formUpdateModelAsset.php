                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($modelasset as $m) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->
                                <?php echo form_open_multipart('admin/modelasset/updateDataAksi') ?>

                                <div class="form-group">
                                    <label>Model/Type</label>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $m->id ?>">
                                    <input type="text" name="model" class="form-control" value="<?php echo $m->model ?>">
                                    <?php echo form_error('model', '<div class="text small text-danger"></div>') ?>
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