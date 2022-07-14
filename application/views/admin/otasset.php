<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div id="map" style="height: 600px;"></div>
    <script>
        var map = L.map('map').setView([-6.434244857960943, 106.92771446855967], 18);

        var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        <?php foreach ($otasset as $t) : ?>
            L.marker([<?php echo $t['latitude']; ?>, <?php echo $t['longitude']; ?>]).addTo(map)
                .bindPopup('IT : <b><?php echo $t['it']; ?></b><br/>OT : <b><?php echo $t['ot']; ?></b><br/>Plant Code : <b><?php echo $t['plant_code']; ?></b><br/>CBU : <b><?php echo $t['cbu']; ?></b><br/>Asset Number : <b><?php echo $t['asset_number']; ?></b><br/>Asset Description : <b><?php echo $t['asset_description']; ?></b><br/>Serial Number : <b><?php echo $t['serial_number']; ?></b><br/>Model/Type : <b><?php echo $t['model']; ?></b><br/>Computer Name : <b><?php echo $t['computer_name']; ?></b><br/>Location : <b><?php echo $t['location']; ?></b><br/><br/> <center><img src="<?php echo base_url() . 'assets/team/' . $t['photo']; ?>" width="200px"></center> ');
        <?php endforeach; ?>
    </script>
    <br>
    <br>

    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/otasset/tambahData') ?>">
        <i class="fas fa-plus"> Add Data</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('admin/otasset') ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Data..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <h6> Result : <?= $total_rows ?></h6>
    <table style="white-space:nowrap;" class="table-responsive table table-bordered table-hover" style="overflow-y: scroll; overflow-x: auto">

        <tr>
            <th class="text-center bg-primary text-white" rowspan="2">No</th>
            <th class="text-center bg-primary text-white" colspan="2">Assets</th>
            <th class="text-center bg-primary text-white" rowspan="2">Plant Code</th>
            <th class="text-center bg-primary text-white" rowspan="2">CBU</th>
            <th class="text-center bg-primary text-white" rowspan="2">Cost Ctr</th>
            <th class="text-center bg-primary text-white" rowspan="2">Asset Number</th>
            <th class="text-center bg-primary text-white" rowspan="2">Asset Description</th>
            <th class="text-center bg-primary text-white" rowspan="2">Serial Number</th>
            <th class="text-center bg-primary text-white" rowspan="2">Model/Type</th>
            <th class="text-center bg-primary text-white" rowspan="2">Computer Name</th>
            <th class="text-center bg-primary text-white" rowspan="2">Qty</th>
            <th class="text-center bg-primary text-white" rowspan="2">Acquis.val</th>
            <th class="text-center bg-primary text-white" rowspan="2">Accum.dep</th>
            <th class="text-center bg-primary text-white" rowspan="2">Book val.</th>
            <th class="text-center bg-primary text-white" colspan="3">Fixed Asset</th>
            <th class="text-center bg-primary text-white" colspan="3">Codition</th>
            <th class="text-center bg-primary text-white" rowspan="2">Label</th>

            <th class="text-center bg-primary text-white" rowspan="2">Status</th>
            <th class="text-center bg-primary text-white" rowspan="2">Location</th>
            <th class="text-center bg-primary text-white" rowspan="2">Photo</th>
            <th class="text-center bg-primary text-white" rowspan="2">User</th>
            <th class="text-center bg-primary text-white" rowspan="2">Cap.date</th>
            <th class="text-center bg-primary text-white" rowspan="2">Note</th>
            <th class="text-center bg-primary text-white" rowspan="2">Network OT</th>
            <th class="text-center bg-primary text-white" rowspan="2">Network IT</th>
            <th class="text-center bg-primary text-white" rowspan="2">Mac Address</th>
            <th class="text-center bg-primary text-white" rowspan="2">IP Address</th>
            <th class="text-center bg-primary text-white" rowspan="2">NEAD</th>
            <th class="text-center bg-primary text-white" rowspan="2">SEP</th>
            <th class="text-center bg-primary text-white" rowspan="2">SCCM</th>
            <th class="text-center bg-primary text-white" rowspan="2">OS Version</th>
            <th class="text-center bg-primary text-white" rowspan="2">Latitude</th>
            <th class="text-center bg-primary text-white" rowspan="2">Longitude</th>
            <th class="text-center bg-warning text-white" rowspan="2">Update</th>
            <th class="text-center bg-danger text-white" rowspan="2">Delete</th>
        <tr>
            <th class="text-center bg-primary text-white">IT</th>
            <th class="text-center bg-primary text-white">OT</th>
            <th class="text-center bg-primary text-white">FA.01</th>
            <th class="text-center bg-primary text-white">FA.02</th>
            <th class="text-center bg-primary text-white">FA.03</th>
            <th class="text-center bg-primary text-white">In Use</th>
            <th class="text-center bg-primary text-white">Idle</th>
            <th class="text-center bg-primary text-white">Damage</th>
        </tr>

        </tr>
        <?php if (empty($otasset)) : ?>
            <tr>
                <td colspan="37">
                    <div class="alert alert-danger" role="alert">
                        Data not found!
                    </div>
                </td>
            </tr>
        <?php endif ?>
        <?php foreach ($otasset as $t) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>
                <td class="text-center"><?php echo $t['it']; ?></td>
                <td class="text-center"><?php echo $t['ot']; ?></td>
                <td class="text-center"><?php echo $t['plant_code']; ?></td>
                <td class="text-center"><?php echo $t['cbu']; ?></td>
                <td class="text-center"><?php echo $t['cost_ctr']; ?></td>
                <td class="text-center"><?php echo $t['asset_number']; ?></td>
                <td class="text-center"><?php echo $t['asset_description']; ?></td>
                <td class="text-center"><?php echo $t['serial_number']; ?></td>
                <td class="text-center"><?php echo $t['model']; ?></td>
                <td class="text-center"><?php echo $t['computer_name']; ?></td>
                <td class="text-center"><?php echo $t['qty']; ?></td>
                <td class="text-center"><?php echo $t['acquis_val']; ?></td>
                <td class="text-center"><?php echo $t['accum_dep']; ?></td>
                <td class="text-center"><?php echo $t['book_val']; ?></td>
                <td class="text-center"><?php echo $t['fixed_asset1']; ?></td>
                <td class="text-center"><?php echo $t['fixed_asset2']; ?></td>
                <td class="text-center"><?php echo $t['fixed_asset3']; ?></td>
                <td class="text-center"><?php echo $t['in_use']; ?></td>
                <td class="text-center"><?php echo $t['idle']; ?></td>
                <td class="text-center"><?php echo $t['damage']; ?></td>
                <td class="text-center"><?php echo $t['label']; ?></td>
                <td class="text-center"><?php echo $t['status']; ?></td>
                <td class="text-center"><?php echo $t['location']; ?></td>
                <td class="text-center"><img src="<?= base_url() . 'assets/team/' . $t['photo'] ?>" width="75px"></td>
                <td class="text-center"><?php echo $t['user']; ?></td>
                <td class="text-center"><?php echo $t['cap_date']; ?></td>
                <td class="text-center"><?php echo $t['note']; ?></td>
                <td class="text-center"><?php echo $t['network_ot']; ?></td>
                <td class="text-center"><?php echo $t['network_it']; ?></td>
                <td class="text-center"><?php echo $t['mac_address']; ?></td>
                <td class="text-center"><?php echo $t['ip_address']; ?></td>
                <td class="text-center"><?php echo $t['nead']; ?></td>
                <td class="text-center"><?php echo $t['sccm']; ?></td>
                <td class="text-center"><?php echo $t['sep']; ?></td>
                <td class="text-center"><?php echo $t['osversion']; ?></td>
                <td class="text-center"><?php echo $t['latitude']; ?></td>
                <td class="text-center"><?php echo $t['longitude']; ?></td>

                <td>
                    <center>
                        <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/otasset/updateData/' . $t['id']) ?>">
                            <i class="fas fa-edit"></i></a>
                    </center>
                </td>
                <td>
                    <center>
                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/otasset/deleteData/' . $t['id']) ?>">
                            <i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?= $this->pagination->create_links(); ?>


</div>
<!-- /.container-fluid -->

</div>
<br>
<br>
<br>
<!-- End of Main Content -->