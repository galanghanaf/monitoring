                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php echo form_open_multipart('admin/itotasset/tambahDataAksi') ?>
                            <form method="post" action="<?php echo base_url('admin/itotasset/tambahDataAksi') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>IT</label>
                                    <select name="it" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <?php echo form_error('it', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>OT</label>
                                    <select name="ot" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <?php echo form_error('ot', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Plant Code</label>
                                    <input type="text" name="plant_code" class="form-control">
                                    <?php echo form_error('plant_code', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>CBU</label>
                                    <input type="text" name="cbu" class="form-control">
                                    <?php echo form_error('cbu', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Cost CTR</label>
                                    <input type="text" name="cost_ctr" class="form-control">
                                    <?php echo form_error('cost_ctr', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Asset Number</label>
                                    <input type="text" name="asset_number" class="form-control">
                                    <?php echo form_error('asset_number', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Asset Description</label>
                                    <input type="text" name="asset_description" class="form-control">
                                    <?php echo form_error('asset_description', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial_number" class="form-control">
                                    <?php echo form_error('serial_number', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" name="type" class="form-control">
                                    <?php echo form_error('type', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Computer Name</label>
                                    <input type="text" name="computer_name" class="form-control">
                                    <?php echo form_error('computer_name', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Qty</label>
                                    <input type="text" name="qty" class="form-control">
                                    <?php echo form_error('qty', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Acquis.val</label>
                                    <input type="text" name="acquis_val" class="form-control">
                                    <?php echo form_error('acquis_val', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Accum.dep</label>
                                    <input type="text" name="accum_dep" class="form-control">
                                    <?php echo form_error('accum_dep', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Book val.</label>
                                    <input type="text" name="book_val" class="form-control">
                                    <?php echo form_error('book_val', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Fixed Asset 01</label>
                                    <input type="text" name="fixed_asset1" class="form-control">
                                    <?php echo form_error('fixed_asset1', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Fixed Asset 02</label>
                                    <input type="text" name="fixed_asset2" class="form-control">
                                    <?php echo form_error('fixed_asset2', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Fixed Asset 03</label>
                                    <input type="text" name="fixed_asset3" class="form-control">
                                    <?php echo form_error('fixed_asset3', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>In Use</label>
                                    <input type="text" name="in_use" class="form-control">
                                    <?php echo form_error('in_use', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Idle</label>
                                    <input type="text" name="idle" class="form-control">
                                    <?php echo form_error('idle', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Damage</label>
                                    <input type="text" name="damage" class="form-control">
                                    <?php echo form_error('damage', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Label</label>
                                    <input type="text" name="label" class="form-control">
                                    <?php echo form_error('label', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" name="status" class="form-control">
                                    <?php echo form_error('status', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <select name="location" class="form-control">
                                        <option value="">Pilih Location</option>
                                        <?php foreach ($location as $l) : ?>
                                            <option value="<?php echo $l->location ?>">
                                                <?php echo $l->location ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('location', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>User</label>
                                    <input type="text" name="user" class="form-control">
                                    <?php echo form_error('user', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Cap.date</label>
                                    <input type="date" name="cap_date" class="form-control">
                                    <?php echo form_error('cap_date', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Note</label>
                                    <input type="text" name="note" class="form-control">
                                    <?php echo form_error('note', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Network OT</label>
                                    <input type="text" name="network_ot" class="form-control">
                                    <?php echo form_error('network_ot', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Network IT</label>
                                    <input type="text" name="network_it" class="form-control">
                                    <?php echo form_error('network_it', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Mac Address</label>
                                    <input type="text" name="mac_address" class="form-control">
                                    <?php echo form_error('mac_address', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>IP Address</label>
                                    <input type="text" name="ip_address" class="form-control">
                                    <?php echo form_error('ip_address', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Nead</label>
                                    <input type="text" name="nead" class="form-control">
                                    <?php echo form_error('nead', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>SCCM</label>
                                    <input type="text" name="sccm" class="form-control">
                                    <?php echo form_error('sccm', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>SEP</label>
                                    <input type="text" name="sep" class="form-control">
                                    <?php echo form_error('sep', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Os Version</label>
                                    <input type="text" name="os_version" class="form-control">
                                    <?php echo form_error('os_version', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <?php echo form_close(); ?>

                        </div>

                    </div>
                </div>
                </div>

                <br>
                <br>
                <br>
                <!-- End of Main Content -->