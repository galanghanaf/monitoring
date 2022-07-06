                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php echo form_open_multipart('admin/ipstatic/tambahDataAksi') ?>
                            <form method="post" action="<?php echo base_url('admin/ipstatic/tambahDataAksi') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" name="status" class="form-control">
                                    <?php echo form_error('status', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Vlan</label>
                                    <input type="number" name="vlan" class="form-control">
                                    <?php echo form_error('vlan', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Up Link</label>
                                    <input type="number" name="up_link" class="form-control">
                                    <?php echo form_error('up_link', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Port</label>
                                    <input type="number" name="port" class="form-control">
                                    <?php echo form_error('port', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Ip Addres</label>
                                    <input type="text" name="ip_address" class="form-control">
                                    <?php echo form_error('ip_address', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Mac Address</label>
                                    <input type="text" name="mac_address" class="form-control">
                                    <?php echo form_error('mac_address', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Hostname</label>
                                    <input type="text" name="host_name" class="form-control">
                                    <?php echo form_error('host_name', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Equipment</label>
                                    <input type="text" name="equipment" class="form-control">
                                    <?php echo form_error('equipment', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Manufacture</label>
                                    <input type="text" name="manufacture" class="form-control">
                                    <?php echo form_error('manufacture', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" name="model" class="form-control">
                                    <?php echo form_error('model', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial_number" class="form-control">
                                    <?php echo form_error('serial_number', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Asset Number</label>
                                    <input type="text" name="asset_number" class="form-control">
                                    <?php echo form_error('asset_number', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Area</label>
                                    <input type="text" name="area" class="form-control">
                                    <?php echo form_error('area', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>User</label>
                                    <input type="text" name="user" class="form-control">
                                    <?php echo form_error('user', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control">
                                    <?php echo form_error('password', '<div class="text small text-danger"></div>') ?>
                                </div>


                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <?php echo form_close(); ?>

                        </div>

                    </div>
                </div>
                </div>
                <!-- End of Main Content -->