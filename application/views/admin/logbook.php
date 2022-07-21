<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/logbook/tambahData') ?>">
        <i class="fas fa-plus"> Add Data</i></a>
    <a class="btn btn-sm btn-primary mb-3 float-right" href="<?php echo base_url('admin/logbook/export_csv') ?>">
        <i class="fas fa-download"> Export CSV</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('admin/logbook') ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Log Book IT Equipment..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <h6>Result : <?= $total_rows ?></h6>
    <table style="white-space:nowrap;" class="table-responsive table-hover table table-bordered" style="overflow-y: scroll; overflow-x: auto">

        <tr>
            <th class="text-center bg-primary text-white">No</th>
            <th class="text-center bg-primary text-white">Status</th>
            <th class="text-center bg-primary text-white">Name</th>
            <th class="text-center bg-primary text-white">Department</th>
            <th class="text-center bg-primary text-white">Equipment</th>
            <th class="text-center bg-primary text-white">Asset Number</th>
            <th class="text-center bg-primary text-white">Serial Number</th>
            <th class="text-center bg-primary text-white">Ticket Show</th>
            <th class="text-center bg-primary text-white">Description</th>
            <th class="text-center bg-primary text-white">Date</th>
            <th class="text-center bg-primary text-white">Return</th>
            <th class="text-center bg-primary text-white">Signature</th>
            <th class="text-center bg-warning text-white">Update</th>
            <th class="text-center bg-danger text-white">Delete</th>


        </tr>
        <?php if (empty($logbook)) : ?>
            <tr>
                <td colspan="13">
                    <div class="alert alert-danger" role="alert">
                        Data not found!
                    </div>
                </td>
            </tr>
        <?php endif ?>

        <?php foreach ($logbook as $l) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>

                <?php
                if ($l['return'] == '') {

                    echo "<td class='text-center'>In Porgress</td>";
                } elseif ($l['return'] > '') {
                    $tdStyle = '#1cc88a';
                    echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Completed</td>";
                }

                ?>

                <td class="text-center"><?php echo $l['name']; ?></td>
                <td class="text-center"><?php echo $l['department']; ?></td>
                <td class="text-center"><?php echo $l['equipment']; ?></td>
                <td class="text-center"><?php echo $l['asset_number']; ?></td>
                <td class="text-center"><?php echo $l['serial_number']; ?></td>
                <td class="text-center"><?php echo $l['ticket_show']; ?></td>
                <td class="text-center"><?php echo $l['description']; ?></td>
                <td class="text-center"><?php echo $l['date']; ?></td>
                <td class="text-center"><?php echo $l['return']; ?></td>
                <td class="text-center"><?php echo $l['signature']; ?></td>


                <td>
                    <center>
                        <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/logbook/updateData/' . $l['id']) ?>">
                            <i class="fas fa-edit"></i></a>

                    </center>
                </td>

                <td>
                    <center>

                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/logbook/deleteData/' . $l['id']) ?>">
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