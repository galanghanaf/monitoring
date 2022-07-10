                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-body">
                            <?php echo form_open_multipart('admin/mappingnetwork/tambahDataAksi') ?>
                            <form method="post" action="<?php echo base_url('admin/mappingnetwork/tambahDataAksi') ?>" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control">
                                    <?php echo form_error('description', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Hostname</label>
                                    <input type="text" name="hostname" class="form-control">
                                    <?php echo form_error('hostname', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control">
                                    <?php echo form_error('description', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" name="model" class="form-control">
                                    <?php echo form_error('model', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>IP Address</label>
                                    <input type="text" name="ip_address" class="form-control">
                                    <?php echo form_error('ip_address', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Mac Address</label>
                                    <input type="text" name="mac_address" class="form-control">
                                    <?php echo form_error('mac_address', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Switch</label>
                                    <input type="text" name="switch" class="form-control">
                                    <?php echo form_error('switch', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Port</label>
                                    <input type="text" name="port" class="form-control">
                                    <?php echo form_error('port', '<div class="text small text-danger"></div>') ?>
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

                                <div id="map" style="height: 600px;"></div>
                                <br>

                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" name="latitude" id="latitude" class="form-control" readonly>
                                    <?php echo form_error('latitude', '<div class="text small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
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