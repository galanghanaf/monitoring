<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/tasklist/tambahData') ?>">
        <i class="fas fa-plus"> Add Data</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('admin/tasklist') ?>" method="POST">
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
    <table style="white-space:nowrap;" class="table-responsive table table-bordered table-hover" style="overflow-y: scroll; overflow-x: auto">

        <tr>
            <th class="text-center bg-primary text-white">No</th>
            <th class="text-center bg-primary text-white">Status</th>
            <th class="text-center bg-primary text-white">Description</th>
            <th class="text-center bg-primary text-white">Requester</th>
            <th class="text-center bg-primary text-white">Start Date</th>
            <th class="text-center bg-primary text-white">Due Date</th>
            <th class="text-center bg-primary text-white">Days Remaining</th>

            <th class="text-center bg-primary text-white">Notes</th>
            <th class="text-center bg-warning text-white">Update</th>
            <th class="text-center bg-danger text-white">Delete</th>

        </tr>
        <?php if (empty($task_list)) : ?>
            <tr>
                <td colspan="13">
                    <div class="alert alert-danger" role="alert">
                        Data not found!
                    </div>
                </td>
            </tr>
        <?php endif ?>
        <?php foreach ($task_list as $t) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>
                <?php
                if ($t['status'] == 'Completed') {
                    $tdStyle = '#1cc88a';
                    echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Completed</td>";
                } elseif (date('Y-m-d') > $t['due_date']) {
                    $tdStyle = '#e74a3b';
                    echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Overdue</td>";
                } else {
                    echo "<td class='text-center'>In Progress</td>";
                }

                ?>


                <td class="text-center"><?php echo $t['description']; ?></td>
                <td class="text-center"><?php echo $t['requester']; ?></td>
                <td class="text-center"><?php echo $t['start_date']; ?></td>
                <td class="text-center"><?php echo $t['due_date']; ?></td>
                <td class="text-center">
                    <?php
                    $date1 = new DateTime(date('Y-m-d')); //current date or any date
                    $date2 = new DateTime($t['due_date']); //Future date
                    $diff = $date2->diff($date1)->format("%a"); //find difference
                    $days = intval($diff); //rounding days
                    if ($t['status'] == "Completed") {
                        echo "0";
                    } elseif (date('Y-m-d') > $t['due_date']) {

                        echo "- " . $days;
                    } else {
                        echo $days;
                    }
                    ?>
                </td>
                <td class="text-center">
                    <?php
                    if ($t['status'] == 'Completed') {
                        echo "Completed";
                    } elseif (date('Y-m-d') > $t['due_date']) {
                        echo "Overdue";
                    } else {
                        echo "In Progress";
                    }

                    ?>
                </td>
                <td class="text-center"><?php echo $t['notes']; ?></td>


                <td>
                    <center>
                        <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/tasklist/updateData/' . $t['id']) ?>">
                            <i class="fas fa-edit"></i></a>

                    </center>
                </td>
                <td>
                    <center>

                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/tasklist/deleteData/' . $t['id']) ?>">
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