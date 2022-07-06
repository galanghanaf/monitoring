<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/tasklist/tambahData') ?>">
        <i class="fas fa-plus"> Tambah Task</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table-responsive table table-bordered table-striped" style="overflow-y: scroll; overflow-x: auto" >

        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Description</th>
            <th class="text-center">Requester</th>
            <th class="text-center">Start Date</th>
            <th class="text-center">Due Date</th>
            <th class="text-center">Days Remaining</th>
            <th class="text-center">Status</th>
            <th class="text-center">Notes</th>
            <th class="text-center">Update</th>
            <th class="text-center">Delete</th>

        </tr>

        <?php foreach ($task_list as $t) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>
                <td class="text-center"><?php echo $t['description']; ?></td>
                <td class="text-center"><?php echo $t['requester']; ?></td>
                <td class="text-center"><?php echo $t['start_date']; ?></td>
                <td class="text-center"><?php echo $t['due_date']; ?></td>
                <td class="text-center">
                    <?php
                    $date1 = new DateTime($t['start_date']); //current date or any date
                    $date2 = new DateTime($t['due_date']); //Future date
                    $diff = $date2->diff($date1)->format("%a"); //find difference
                    $days = intval($diff); //rounding days
                    if ($t['start_date'] > $t['due_date']) {
                        echo "0";
                    } else{
                        echo $days;
                    }      
                    ?>
                </td>
                <td class="text-center">
                    <?php
                    if ($t['start_date'] > $t['due_date']) {
                        echo "Complete";
                    } elseif ($t['start_date'] < $t['due_date'] ){
                        echo "In Progress";
                    } 
                    else {
                        echo "Complete";
                    }

                    ?>
                </td>
                <td class="text-center"><?php echo $t['notes']; ?></td>


                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/tasklist/updateData/' . $t['id']) ?>">
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