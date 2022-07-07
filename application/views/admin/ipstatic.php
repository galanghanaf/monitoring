<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>


    <a class="btn btn-sm btn-success mb-3 text-white" href="<?php echo base_url('admin/ipstatic/tambahData') ?>">
        <i class="fas fa-plus"> Add Data</i></a>
    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('admin/ipstatic') ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Data Ip Static..." name="keyword" autocomplete="off" autofocus>
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
            <th class="text-center bg-primary text-white">No</th>
            <th class="text-center bg-primary text-white">Vlan</th>
            <th class="text-center bg-primary text-white">Up Link</th>
            <th class="text-center bg-primary text-white">Port</th>
            <th class="text-center bg-primary text-white">Ip Address</th>
            <th class="text-center bg-primary text-white">Mac Address</th>
            <th class="text-center bg-primary text-white">Hostname</th>
            <th class="text-center bg-primary text-white">Equipment</th>
            <th class="text-center bg-primary text-white">Manufacture</th>
            <th class="text-center bg-primary text-white">Model</th>
            <th class="text-center bg-primary text-white">Serial Number</th>
            <th class="text-center bg-primary text-white">Asset Number</th>
            <th class="text-center bg-primary text-white">Location</th>
            <th class="text-center bg-primary text-white">User</th>
            <th class="text-center bg-primary text-white">Password</th>
            <th class="text-center bg-warning text-white">Update</th>
            <th class="text-center bg-danger text-white">Delete</th>

        </tr>
        <?php if (empty($ipstatic)) : ?>
            <tr>
                <td colspan="17">
                    <div class="alert alert-danger" role="alert">
                        Data not found!
                    </div>
                </td>
            </tr>
        <?php endif ?>
        <?php foreach ($ipstatic as $t) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>

                <td class="text-center"><?php echo $t['vlan']; ?></td>
                <td class="text-center"><?php echo $t['up_link']; ?></td>
                <td class="text-center"><?php echo $t['port']; ?></td>
                <td class="text-center"><?php echo $t['ip_address']; ?></td>
                <td class="text-center"><?php echo $t['mac_address']; ?></td>
                <td class="text-center"><?php echo $t['host_name']; ?></td>
                <td class="text-center"><?php echo $t['equipment']; ?></td>
                <td class="text-center"><?php echo $t['manufacture']; ?></td>
                <td class="text-center"><?php echo $t['model']; ?></td>
                <td class="text-center"><?php echo $t['serial_number']; ?></td>
                <td class="text-center"><?php echo $t['asset_number']; ?></td>
                <td class="text-center"><?php echo $t['location']; ?></td>
                <td class="text-center"><?php echo $t['user']; ?></td>
                <td class="text-center"><?php echo $t['password']; ?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/ipstatic/updateData/' . $t['id']) ?>">
                            <i class="fas fa-edit"></i></a>
                    </center>
                </td>
                <td>
                    <center>
                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/ipstatic/deleteData/' . $t['id']) ?>">
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