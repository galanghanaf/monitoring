<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/itotasset/tambahData') ?>">
        <i class="fas fa-plus"> Add Data</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('admin/itotasset') ?>" method="POST">
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
    <table style="white-space:nowrap;" class="table-responsive table table-bordered table-striped" style="overflow-y: scroll; overflow-x: auto">

        <tr>
            <th class="text-center bg-primary text-white">No</th>
            <th class="text-center bg-primary text-white">IT</th>
            <th class="text-center bg-primary text-white">OT</th>
            <th class="text-center bg-primary text-white">Plant Code</th>
            <th class="text-center bg-primary text-white">CBU</th>
            <th class="text-center bg-primary text-white">Cost Ctr</th>
            <th class="text-center bg-primary text-white">Asset Number</th>
            <th class="text-center bg-primary text-white">Asset Description</th>
            <th class="text-center bg-primary text-white">Serial Number</th>
            <th class="text-center bg-primary text-white">Type</th>
            <th class="text-center bg-primary text-white">Computer Name</th>
            <th class="text-center bg-primary text-white">Qty</th>
            <th class="text-center bg-primary text-white">Acquis.val</th>
            <th class="text-center bg-primary text-white">Accum.dep</th>
            <th class="text-center bg-primary text-white">Book val.</th>
            <th class="text-center bg-primary text-white">Fixed Asset 01</th>
            <th class="text-center bg-primary text-white">Fixed Asset 02</th>
            <th class="text-center bg-primary text-white">Fixed Asset 03</th>
            <th class="text-center bg-primary text-white">In Use</th>
            <th class="text-center bg-primary text-white">Idle</th>
            <th class="text-center bg-primary text-white">Damage</th>
            <th class="text-center bg-primary text-white">Label</th>
            <th class="text-center bg-primary text-white">Status</th>
            <th class="text-center bg-primary text-white">Location</th>
            <th class="text-center bg-primary text-white">User</th>
            <th class="text-center bg-primary text-white">Cap.date</th>
            <th class="text-center bg-primary text-white">Note</th>
            <th class="text-center bg-primary text-white">Network OT</th>
            <th class="text-center bg-primary text-white">Network IT</th>
            <th class="text-center bg-primary text-white">Mac Address</th>
            <th class="text-center bg-primary text-white">IP Address</th>
            <th class="text-center bg-primary text-white">NEAD</th>
            <th class="text-center bg-primary text-white">SEP</th>
            <th class="text-center bg-primary text-white">SCCM</th>
            <th class="text-center bg-primary text-white">OS Version</th>
            <th class="text-center bg-warning text-white">Update</th>
            <th class="text-center bg-danger text-white">Delete</th>

        </tr>
        <?php if (empty($itotasset)) : ?>
            <tr>
                <td colspan="37">
                    <div class="alert alert-danger" role="alert">
                        Data not found!
                    </div>
                </td>
            </tr>
        <?php endif ?>
        <?php foreach ($itotasset as $t) : ?>
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
                <td class="text-center"><?php echo $t['type']; ?></td>
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


                <td>
                    <center>
                        <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/itotasset/updateData/' . $t['id']) ?>">
                            <i class="fas fa-edit"></i></a>
                    </center>
                </td>
                <td>
                    <center>
                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/itotasset/deleteData/' . $t['id']) ?>">
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
<!-- End of Main Content -->