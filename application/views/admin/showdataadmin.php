                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">NPM</th>
                            <th class="text-center">Photo</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <!-- untuk menampilkan datanya disini kita menggunakan foreach(perulangan) berdasarkan query yang ada di data jabatan-->
                        <?php $no = 1;
                        foreach ($team1 as $t1) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $t1['nama'] ?></td>
                                <td class="text-center"><?php echo $t1['npm'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/team/' . $t1['photo'] ?>" width="75px"></td>

                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/datateam/updateData1/' . $t1['id_team']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php $no = 2;
                        foreach ($team2 as $t2) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $t2['nama'] ?></td>
                                <td class="text-center"><?php echo $t2['npm'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/team/' . $t2['photo'] ?>" width="75px"></td>

                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/datateam/updateData2/' . $t2['id_team']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php $no = 3;
                        foreach ($team3 as $t3) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $t3['nama'] ?></td>
                                <td class="text-center"><?php echo $t3['npm'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/team/' . $t3['photo'] ?>" width="75px"></td>

                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/datateam/updateData3/' . $t3['id_team']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php $no = 4;
                        foreach ($team4 as $t4) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $t4['nama'] ?></td>
                                <td class="text-center"><?php echo $t4['npm'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/team/' . $t4['photo'] ?>" width="75px"></td>


                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/datateam/updateData4/' . $t4['id_team']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php $no = 5;
                        foreach ($team5 as $t5) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $t5['nama'] ?></td>
                                <td class="text-center"><?php echo $t5['npm'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/team/' . $t5['photo'] ?>" width="75px"></td>


                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/datateam/updateData5/' . $t5['id_team']) ?>">
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