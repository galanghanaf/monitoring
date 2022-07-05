                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered table-striped mx-auto">
                        <tr>
                            <th class="text-center">Judul Team</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <!-- untuk menampilkan datanya disini kita menggunakan foreach(perulangan) berdasarkan query yang ada di data jabatan-->

                        <?php foreach ($team as $t) : ?>
                            <tr>
                                <td class="text-center"><?php echo $t['judul_team'] ?></td>
                                <td class="text-center"><?php echo $t['deskripsi'] ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataJudulTeam/updateData/' . $t['id_team']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>
                </div>

                </div>