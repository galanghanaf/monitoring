<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('superadmin/assetdescription/tambahData') ?>">
        <i class="fas fa-plus"> Add Data</i></a>
    <a class="btn btn-sm btn-primary mb-3 float-right" href="<?php echo base_url('superadmin/assetdescription/export_csv') ?>">
        <i class="fas fa-download"> Export CSV</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('superadmin/assetdescription') ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Data..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">

                    </div>
                </div>

            </form>
        </div>
    </div>
    <h6>Result : <?= $total_rows ?></h6>
    <table class=" table-hover table table-bordered">

        <tr>
            <th class="text-center bg-primary text-white">No</th>
            <th class="text-center bg-primary text-white">Asset Description</th>

            <th class="text-center bg-warning text-white">Update</th>
            <th class="text-center bg-danger text-white">Delete</th>


        </tr>
        <?php if (empty($assetdescription)) : ?>
            <tr>
                <td colspan="13">
                    <div class="alert alert-danger" role="alert">
                        Data not found!
                    </div>
                </td>
            </tr>
        <?php endif ?>

        <?php foreach ($assetdescription as $e) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>
                <td class="text-center"><?php echo $e['asset_description']; ?></td>



                <td>
                    <center>
                        <a class="btn btn-sm btn-warning" href="<?php echo base_url('superadmin/assetdescription/updateData/' . $e['id']) ?>">
                            <i class="fas fa-edit"></i></a>

                    </center>
                </td>

                <td>
                    <center>

                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('superadmin/assetdescription/deleteData/' . $e['id']) ?>">
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