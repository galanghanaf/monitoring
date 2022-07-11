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
                            <th class="text-center">Sub Bab Portfolio</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">Content</th>
                            <th class="text-center">Photo</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <!-- untuk menampilkan datanya disini kita menggunakan foreach(perulangan) berdasarkan query yang ada di data jabatan-->

                        <?php $no = 1;
                        foreach ($portfolio1 as $p1) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $p1['nama_portfolio'] ?></td>
                                <td class="text-center"><?php echo $p1['deskripsi'] ?></td>
                                <td class="text-center"><?php echo $p1['content'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/portfolio/' . $p1['photo'] ?>" width="75px"></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPortfolio/updateData1/' . $p1['id_portfolio']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php $no = 2;
                        foreach ($portfolio2 as $p2) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $p2['nama_portfolio'] ?></td>
                                <td class="text-center"><?php echo $p2['deskripsi'] ?></td>
                                <td class="text-center"><?php echo $p2['content'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/portfolio/' . $p2['photo'] ?>" width="75px"></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPortfolio/updateData2/' . $p2['id_portfolio']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php $no = 3;
                        foreach ($portfolio3 as $p3) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $p3['nama_portfolio'] ?></td>
                                <td class="text-center"><?php echo $p3['deskripsi'] ?></td>
                                <td class="text-center"><?php echo $p3['content'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/portfolio/' . $p3['photo'] ?>" width="75px"></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPortfolio/updateData3/' . $p3['id_portfolio']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php $no = 4;
                        foreach ($portfolio4 as $p4) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $p4['nama_portfolio'] ?></td>
                                <td class="text-center"><?php echo $p4['deskripsi'] ?></td>
                                <td class="text-center"><?php echo $p4['content'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/portfolio/' . $p4['photo'] ?>" width="75px"></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPortfolio/updateData4/' . $p3['id_portfolio']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php $no = 5;
                        foreach ($portfolio5 as $p5) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $p5['nama_portfolio'] ?></td>
                                <td class="text-center"><?php echo $p5['deskripsi'] ?></td>
                                <td class="text-center"><?php echo $p5['content'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/portfolio/' . $p5['photo'] ?>" width="75px"></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPortfolio/updateData5/' . $p5['id_portfolio']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php $no = 6;
                        foreach ($portfolio6 as $p6) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $p6['nama_portfolio'] ?></td>
                                <td class="text-center"><?php echo $p6['deskripsi'] ?></td>
                                <td class="text-center"><?php echo $p6['content'] ?></td>
                                <td class="text-center"><img src="<?= base_url() . 'assets/portfolio/' . $p6['photo'] ?>" width="75px"></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPortfolio/updateData6/' . $p6['id_portfolio']) ?>">
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