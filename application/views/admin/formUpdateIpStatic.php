                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($ipstatic as $t) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->
                                <?php echo form_open_multipart('admin/ipstatic/updateDataAksi') ?>

                                <div class="form-group">
                                    <label>Vlan</label>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $t->id ?>">
                                    <input type="text" name="vlan" class="form-control" value="<?php echo $t->vlan ?>">
                                    <?php echo form_error('vlan', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Up Link</label>
                                    <input type="text" name="up_link" class="form-control" value="<?php echo $t->up_link ?>">
                                    <?php echo form_error('up_link', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Port</label>
                                    <input type="text" name="port" class="form-control" value="<?php echo $t->port ?>">
                                    <?php echo form_error('port', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Ip Address</label>
                                    <input type="text" name="ip_address" class="form-control" value="<?php echo $t->ip_address ?>">
                                    <?php echo form_error('ip_address', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Mac Address</label>
                                    <input type="text" name="mac_address" class="form-control" value="<?php echo $t->mac_address ?>">
                                    <?php echo form_error('mac_address', '<divs class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Hostname</label>
                                    <input type="text" name="host_name" class="form-control" value="<?php echo $t->host_name ?>">
                                    <?php echo form_error('host_name', '<divs class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Equipment</label>
                                    <select name="equipment" class="form-control">
                                        <option value="<?php echo $t->equipment ?>"><?php echo $t->equipment ?></option>
                                        <?php foreach ($equipment as $e) : ?>
                                            <option value="<?php echo $e->equipment ?>">
                                                <?php echo $e->equipment ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('equipment', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Manufacture</label>
                                    <select name="manufacture" class="form-control">
                                        <option value="<?php echo $t->manufacture ?>"><?php echo $t->manufacture ?></option>
                                        <?php foreach ($manufacture as $manu) : ?>
                                            <option value="<?php echo $manu->manufacture ?>">
                                                <?php echo $manu->manufacture ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('manufacture', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Model/Type</label>
                                    <select name="model" class="form-control">
                                        <option value="<?php echo $t->model ?>"><?php echo $t->model ?></option>
                                        <?php foreach ($modelasset as $m) : ?>
                                            <option value="<?php echo $m->model ?>">
                                                <?php echo $m->model ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('model', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial_number" class="form-control" value="<?php echo $t->serial_number ?>">
                                    <?php echo form_error('serial_number', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Asset Number</label>
                                    <input type="text" name="asset_number" class="form-control" value="<?php echo $t->asset_number ?>">
                                    <?php echo form_error('asset_number', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <select name="location" class="form-control">
                                        <option value="<?php echo $t->location ?>"><?php echo $t->location ?></option>
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
                                    <input type="text" name="user" class="form-control" value="<?php echo $t->user ?>">
                                    <?php echo form_error('user', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" value="<?php echo $t->password ?>">
                                    <?php echo form_error('password', '<div class="text small text-danger"></div>') ?>
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