                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php echo form_open_multipart('superadmin/manufacture/tambahDataAksi') ?>
                            <form method="post" action="<?php echo base_url('superadmin/manufacture/tambahDataAksi') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Manufacure</label>
                                    <input type="text" name="manufacture" class="form-control">
                                    <?php echo form_error('manufacture', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                                <?php echo form_close(); ?>

                        </div>

                    </div>
                </div>
                </div>

                <br>
                <br>
                <br>
                <!-- End of Main Content -->