                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($logbook as $t) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->
                                <?php echo form_open_multipart('admin/logbook/updateDataAksi') ?>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $t->id ?>">
                                    <input type="text" name="name" class="form-control" value="<?php echo $t->name ?>">
                                    <?php echo form_error('name', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <select name="department" class="form-control">
                                        <option value="<?php echo $t->department ?>"><?php echo $t->department ?></option>
                                        <?php foreach ($department as $d) : ?>
                                            <option value="<?php echo $d->department ?>">
                                                <?php echo $d->department ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('location', '<div class="text small text-danger"></div>') ?>
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
                                    <?php echo form_error('location', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Asset Number</label>
                                    <input type="text" name="asset_number" class="form-control" value="<?php echo $t->asset_number ?>">
                                    <?php echo form_error('asset_number', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial_number" class="form-control" value="<?php echo $t->serial_number ?>">
                                    <?php echo form_error('serial_number', '<divs class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Ticket Show</label>
                                    <input type="text" name="ticket_show" class="form-control" value="<?php echo $t->ticket_show ?>">
                                    <?php echo form_error('ticket_show', '<divs class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control" value="<?php echo $t->description ?>">
                                    <?php echo form_error('description', '<divs class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control" value="<?php echo $t->date ?>">
                                    <?php echo form_error('date', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Return</label>
                                    <input type="date" name="return" class="form-control" value="<?php echo $t->return ?>">
                                    <?php echo form_error('return', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Signature</label>
                                    <input type="text" name="signature" class="form-control" value="<?php echo $t->signature ?>">
                                    <?php echo form_error('signature', '<div class="text small text-danger"></div>') ?>
                                </div>


                                <button type="submit" class="btn btn-primary">Simpan</button>
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