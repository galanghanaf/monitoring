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
            <th class="text-center bg-primary text-white">Hak Akses</th>
            <th class="text-center bg-primary text-white">Username</th>
            <th class="text-center bg-primary text-white">Update</th>
            <th class="text-center bg-primary text-white">Delete</th>

        </tr>

        <?php foreach ($dataadmin as $t) : ?>
            <tr>
                <?php if ($t['hak_akses'] != '1') : ?>

                    <td class="text-center"><?php echo ++$start; ?></td>
                    <td class="text-center"><?php echo $t['nama_admin']; ?></td>
                    <?php if ($t['hak_akses'] == '1') { ?>
                        <td class="text-center">Super Admin</td>
                    <?php } elseif ($t['hak_akses'] == '2') { ?>
                        <td class="text-center">Admin Plant Citeureup</td>
                    <?php } elseif ($t['hak_akses'] == '3') { ?>
                        <td class="text-center">Admin Plant Tanggamus</td>
                    <?php } elseif ($t['hak_akses'] == '4') { ?>
                        <td class="text-center">Admin DC Lampung</td>
                    <?php } elseif ($t['hak_akses'] == '5') { ?>
                        <td class="text-center">Admin Plant Babakanpari</td>
                    <?php } elseif ($t['hak_akses'] == '6') { ?>
                        <td class="text-center">Admin Plant Legos</td>
                    <?php } elseif ($t['hak_akses'] == '7') { ?>
                        <td class="text-center">Admin Plant Caringin</td>
                    <?php } elseif ($t['hak_akses'] == '8') { ?>
                        <td class="text-center">Admin DC Bandung</td>
                    <?php } elseif ($t['hak_akses'] == '9') { ?>
                        <td class="text-center">Admin Plant Cianjur</td>
                    <?php } elseif ($t['hak_akses'] == '10') { ?>
                        <td class="text-center">Admin Plant Mekarsari</td>
                    <?php } elseif ($t['hak_akses'] == '11') { ?>
                        <td class="text-center">Admin Plant Bekasi</td>
                    <?php } elseif ($t['hak_akses'] == '12') { ?>
                        <td class="text-center">Admin DC Cikarang</td>
                    <?php } elseif ($t['hak_akses'] == '13') { ?>
                        <td class="text-center">Admin Plant Sentul</td>
                    <?php } elseif ($t['hak_akses'] == '14') { ?>
                        <td class="text-center">Admin Plant Ciherang</td>
                    <?php } elseif ($t['hak_akses'] == '15') { ?>
                        <td class="text-center">Admin DC Cibinong</td>
                    <?php }  ?>
                    <td class="text-center"><?php echo $t['username']; ?></td>

                    <td>
                        <center>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('superadmin/dataadmin/updateData/' . $t['id']) ?>">
                                <i class="fas fa-edit"></i></a>
                        </center>
                    </td>
                    <td>
                        <center>
                            <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('superadmin/dataadmin/deleteData/' . $t['id']) ?>">
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