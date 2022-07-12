<!-- Begin Page Content -->
<div class="container-fluid ">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('superadmin/dataadmin/tambahData') ?>">
        <i class="fas fa-plus"> Add Data</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-hover">

        <tr>
            <th class="text-center bg-primary text-white">No</th>
            <th class="text-center bg-primary text-white">Nama Admin</th>
            <th class="text-center bg-primary text-white">Email</th>
            <th class="text-center bg-primary text-white">Username</th>
            <th class="text-center bg-primary text-white">Update</th>
            <th class="text-center bg-primary text-white">Delete</th>

        </tr>

        <?php foreach ($dataadmin as $t) : ?>
            <tr>
                <?php if ($t['hak_akses'] != '1') : ?>

                    <td class="text-center"><?php echo ++$start; ?></td>
                    <td class="text-center"><?php echo $t['nama_admin']; ?></td>
                    <td class="text-center"><?php echo $t['email']; ?></td>
                    <td class="text-center"><?php echo $t['username']; ?></td>

                    <td>
                        <center>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataadmin/updateData/' . $t['id']) ?>">
                                <i class="fas fa-edit"></i></a>
                        </center>
                    </td>
                    <td>
                        <center>
                            <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataadmin/deleteData/' . $t['id']) ?>">
                                <i class="fas fa-trash"></i></a>
                        </center>
                    </td>

                <?php endif ?>
            </tr>
        <?php endforeach; ?>
    </table>
    <?= $this->pagination->create_links(); ?>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->