                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($mappingnetwork as $t) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->
                                <?php echo form_open_multipart('superadmin/mappingnetwork/updateDataAksi') ?>

                                <div class="form-group">
                                    <label>Asset Description</label>
                                    <select name="asset_description" class="form-control">
                                        <option value="<?php echo $t->asset_description ?>"><?php echo $t->asset_description ?></option>
                                        <?php foreach ($assetdescription as $ad) : ?>
                                            <option value="<?php echo $ad->asset_description ?>">
                                                <?php echo $ad->asset_description ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('model', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Hostname</label>
                                    <input type="text" name="hostname" class="form-control" value="<?php echo $t->hostname ?>">
                                    <?php echo form_error('hostname', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Model/Type</label>
                                    <select name="model" class="form-control">
                                        <option value="<?php echo $t->model ?>"><?php echo $t->model ?></option>
                                        <?php foreach ($modelasset as $am) : ?>
                                            <option value="<?php echo $am->model ?>">
                                                <?php echo $am->model ?>
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
                                    <label>Ip Address</label>
                                    <input type="text" name="ip_address" class="form-control" value="<?php echo $t->ip_address ?>">
                                    <?php echo form_error('ip_address', '<divs class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Mac Address</label>
                                    <input type="text" name="mac_address" class="form-control" value="<?php echo $t->mac_address ?>">
                                    <?php echo form_error('mac_address', '<divs class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Switch</label>
                                    <input type="text" name="switch" class="form-control" value="<?php echo $t->switch ?>">
                                    <?php echo form_error('switch', '<divs class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Port</label>
                                    <input type="text" name="port" class="form-control" value="<?php echo $t->port ?>">
                                    <?php echo form_error('port', '<div class="text small text-danger"></div>') ?>
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
                                <div id="map" style="height: 600px;"></div>
                                <br>
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" name="latitude" id="latitude" class="form-control" value="<?php echo $t->latitude ?>" readonly>
                                    <?php echo form_error('latitude', '<div class="text small text-danger"></div>') ?>
                                </div>


                                <div class=" form-group">
                                    <label>Longitude</label>
                                    <input type="text" name="longitude" id="longitude" class="form-control" value="<?php echo $t->longitude ?>" readonly>
                                    <?php echo form_error('longitude', '<div class="text small text-danger"></div>') ?>
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