<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/mappingnetwork/tambahData') ?>">
        <i class="fas fa-plus"> Tambah</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('admin/mappingnetwork') ?>" method="POST">
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
            <th class="text-center bg-primary text-white">No</th>
            <th class="text-center bg-primary text-white">Description</th>
            <th class="text-center bg-primary text-white">Hostname</th>
            <th class="text-center bg-primary text-white">Model</th>
            <th class="text-center bg-primary text-white">Serial Number</th>
            <th class="text-center bg-primary text-white">Ip Address</th>
            <th class="text-center bg-primary text-white">Mac Address</th>
            <th class="text-center bg-primary text-white">Switch</th>
            <th class="text-center bg-primary text-white">Port</th>
            <th class="text-center bg-primary text-white">Rack</th>
            <th class="text-center bg-primary text-white">Location</th>
            <th class="text-center bg-warning text-white">Update</th>
            <th class="text-center bg-danger text-white">Delete</th>


        </tr>
        <?php if (empty($mappingnetwork)) : ?>
            <tr>
                <td colspan="17">
                    <div class="alert alert-danger" role="alert">
                        Data not found!
                    </div>
                </td>
            </tr>
        <?php endif ?>
        <?php foreach ($mappingnetwork as $l) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>
                <td class="text-center"><?php echo $l['description']; ?></td>
                <td class="text-center"><?php echo $l['hostname']; ?></td>
                <td class="text-center"><?php echo $l['model']; ?></td>
                <td class="text-center"><?php echo $l['serial_number']; ?></td>
                <td class="text-center"><?php echo $l['ip_address']; ?></td>
                <td class="text-center"><?php echo $l['mac_address']; ?></td>
                <td class="text-center"><?php echo $l['switch']; ?></td>
                <td class="text-center"><?php echo $l['port']; ?></td>
                <td class="text-center"><?php echo $l['rack']; ?></td>
                <td class="text-center"><?php echo $l['location']; ?></td>
                <td class="text-center">
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/mappingnetwork/updateData/' . $l['id']) ?>">
                            <i class="fas fa-edit"></i></a>

                    </center>
                </td>
                <td class="text-center">
                    <center>

                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/mappingnetwork/deleteData/' . $l['id']) ?>">
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