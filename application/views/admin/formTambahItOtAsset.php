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
                                        <option value="">No</option>
                                    </select>
                                    <?php echo form_error('it', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>OT</label>
                                    <select name="ot" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="Yes">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                    <?php echo form_error('ot', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Plant Code</label>
                                    <select name="plantcode" class="form-control">
                                        <option value="">Plant Code</option>
                                        <?php foreach ($plantcode as $pc) : ?>
                                            <option value="<?php echo $pc->plantcode ?>">
                                                <?php echo $pc->plantcode ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('plantcode', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>CBU</label>
                                    <select name="cbu" class="form-control">
                                        <option value="">Pilih CBU</option>
                                        <?php foreach ($cbu as $cb) : ?>
                                            <option value="<?php echo $cb->cbu ?>">
                                                <?php echo $cb->cbu ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
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
                                    <select name="asset_description" class="form-control">
                                        <option value="">Pilih Asset Description</option>
                                        <?php foreach ($assetdescription as $ad) : ?>
                                            <option value="<?php echo $ad->asset_description ?>">
                                                <?php echo $ad->asset_description ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('asset_description', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial_number" class="form-control">
                                    <?php echo form_error('serial_number', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Model/Type</label>
                                    <select name="model" class="form-control">
                                        <option value="">Pilih Model/Type</option>
                                        <?php foreach ($modelasset as $ma) : ?>
                                            <option value="<?php echo $ma->model ?>">
                                                <?php echo $ma->model ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('model', '<div class="text small text-danger"></div>') ?>
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
                                    <select name="fixed_asset1" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="1">1</option>
                                        <option value="">0</option>
                                    </select>
                                    <?php echo form_error('fixed_asset1', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Fixed Asset 02</label>
                                    <select name="fixed_asset2" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="1">1</option>
                                        <option value="">0</option>
                                    </select>
                                    <?php echo form_error('fixed_asset2', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Fixed Asset 03</label>
                                    <select name="fixed_asset3" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="1">1</option>
                                        <option value="">0</option>
                                    </select>
                                    <?php echo form_error('fixed_asset3', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>In Use</label>
                                    <select name="in_use" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="1">1</option>
                                        <option value="">0</option>
                                    </select>
                                    <?php echo form_error('in_use', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Idle</label>
                                    <select name="idle" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="1">1</option>
                                        <option value="">0</option>
                                    </select>
                                    <?php echo form_error('idle', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Damage</label>
                                    <select name="damage" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="1">1</option>
                                        <option value="">0</option>
                                    </select>
                                    <?php echo form_error('damage', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Label</label>
                                    <select name="label" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="1">1</option>
                                        <option value="">0</option>
                                    </select>
                                    <?php echo form_error('label', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Offline">Offline</option>
                                        <option value="Broken">Broken</option>
                                    </select>
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
                                    <label>Photo Location</label>
                                    <select name="photo" class="form-control">
                                        <option value="">Pilih Photo Location</option>
                                        <?php foreach ($location as $l) : ?>
                                            <option value="<?php echo $l->photo ?>">
                                                <?php echo $l->location ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('photo', '<div class="text small text-danger"></div>') ?>
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
                                    <label>OS Version</label>
                                    <select name="osversion" class="form-control">
                                        <option value="">Pilih OS Version</option>
                                        <?php foreach ($osversion as $os) : ?>
                                            <option value="<?php echo $os->osversion ?>">
                                                <?php echo $os->osversion ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('osversion', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div id="map" style="height: 600px;"></div>
                                <br>
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" name="latitude" id="latitude" class="form-control" readonly>
                                    <?php echo form_error('latitude', '<div class="text small text-danger"></div>') ?>
                                </div>


                                <div class=" form-group">
                                    <label>Longitude</label>
                                    <input type="text" name="longitude" id="longitude" class="form-control" readonly>
                                    <?php echo form_error('longitude', '<div class="text small text-danger"></div>') ?>
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
                <script>
                    var map = L.map('map').setView([-6.434244857960943, 106.92771446855967], 18);

                    var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                    }).addTo(map);

                    var theMarker = {};

                    map.on('click', function(e) {
                        lat = e.latlng.lat;
                        lon = e.latlng.lng;

                        console.log("You clicked the map at LAT: " + lat + " and LONG: " + lon);
                        //Clear existing marker, 


                        if (theMarker != undefined) {
                            map.removeLayer(theMarker);
                        };

                        //Add a marker to show where you clicked.
                        theMarker = L.marker([lat, lon]).addTo(map);

                        document.getElementById("latitude").value =
                            lat;
                        document.getElementById("longitude").value =
                            lon;
                    });
                </script>
                <!-- End of Main Content -->