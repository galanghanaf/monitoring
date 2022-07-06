<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataadmin/tambahData') ?>">
        <i class="fas fa-plus"> Tambah Data Admin</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table-responsive table table-bordered table-striped" style="overflow-y: scroll; overflow-x: auto">

        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Admin</th>
            <th class="text-center">Username</th>
            <th class="text-center">Update</th>
            <th class="text-center">Delete</th>

        </tr>

        <?php foreach ($dataadmin as $t) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>
                <td class="text-center"><?php echo $t['nama_admin']; ?></td>
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
            </tr>
        <?php endforeach; ?>
    </table>
    <?= $this->pagination->create_links(); ?>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->