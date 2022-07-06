<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/ipstatic/tambahData') ?>">
        <i class="fas fa-plus"> Tambah Data Ip Static</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table id="myTable" class="display table table-bordered table-striped">

        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Status</th>
            <th class="text-center">Vlan</th>
            <th class="text-center">Up Link</th>
            <th class="text-center">Port</th>
            <th class="text-center">Ip Address</th>
            <th class="text-center">Mac Address</th>
            <th class="text-center">Hostname</th>
            <th class="text-center">Equipment</th>
            <th class="text-center">Manufacture</th>
            <th class="text-center">Model</th>
            <th class="text-center">Serial Number</th>
            <th class="text-center">Asset Number</th>
            <th class="text-center">Area</th>
            <th class="text-center">User</th>
            <th class="text-center">Password</th>
            <th class="text-center">Action</th>


        </tr>

        <?php foreach ($ipstatic as $t) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>
                <td class="text-center"><?php echo $t['status']; ?></td>
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
                <td class="text-center"><?php echo $t['area']; ?></td>
                <td class="text-center"><?php echo $t['user']; ?></td>
                <td class="text-center"><?php echo $t['password']; ?></td>

                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/ipstatic/updateData/' . $t['id']) ?>">
                            <i class="fas fa-edit"></i></a>
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