                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataPegawai/tambahData') ?>"><i class="fas fa-plus"> Tambah Pegawai</i></a>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Nama Pegawai</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Tanggal Masuk</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Hak Akses</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Photo</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>
                                <td class="text-center"><?php echo ++$start; ?></td>
                                <td class="text-center"><?php echo $p['nik'] ?></td>
                                <td class="text-center"><?php echo $p['nama_pegawai']; ?></td>
                                <td class="text-center"><?php echo $p['jenis_kelamin']; ?></td>
                                <td class="text-center"><?php echo $p['jabatan']; ?></td>
                                <td class="text-center"><?php echo $p['tanggal_masuk']; ?></td>
                                <td class="text-center"><?php echo $p['status']; ?></td>

                                <?php if ($p['hak_akses'] == '1') { ?>
                                    <td class="text-center">Admin</td>
                                <?php } else { ?>
                                    <td class="text-center">User</td>
                                <?php } ?>
                                <td class="text-center"><?php echo $p['username']; ?></td>

                                <td class="text-center"><img src="<?= base_url() . 'assets/photo/' . $p['photo'] ?>" width="75px"></td>


                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPegawai/updateData/' . $p['id_pegawai']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPegawai/deleteData/' . $p['id_pegawai']) ?>">
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