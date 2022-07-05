                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>


                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="text-center">Background 1</th>
                            <th class="text-center">Background 2</th>
                            <th class="text-center">Background 3</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <!-- untuk menampilkan datanya disini kita menggunakan foreach(perulangan) berdasarkan query yang ada di data jabatan-->

                        <?php foreach ($header_background as $hb) : ?>
                            <tr>
                                <td class="text-center"><img src="<?= base_url() . 'assets/background/' . $hb['background1'] ?>" width="75px"></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/background/' . $hb['background2'] ?>" width="75px"></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/background/' . $hb['background3'] ?>" width="75px"></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataHeaderBackground/updateData/' . $hb['id']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </table>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->