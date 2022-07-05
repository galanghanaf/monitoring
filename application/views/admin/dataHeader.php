                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered table-striped mx-auto">
                        <tr>
                            <th class="text-center">Judul Header 1</th>
                            <th class="text-center">Judul Header 2</th>
                            <th class="text-center">Opening Header 1</th>
                            <th class="text-center">Opening Header 2</th>
                            <th class="text-center">Opening Header 3</th>
                            <th class="text-center">Navbar 1</th>
                            <th class="text-center">Navbar 2</th>
                            <th class="text-center">Navbar 3</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <!-- untuk menampilkan datanya disini kita menggunakan foreach(perulangan) berdasarkan query yang ada di data jabatan-->

                        <?php foreach ($header as $h) : ?>
                            <tr>
                                <td class="text-center"><?php echo $h['judul_header1'] ?></td>
                                <td class="text-center"><?php echo $h['judul_header2'] ?></td>
                                <td class="text-center"><?php echo $h['opening_header1'] ?></td>
                                <td class="text-center"><?php echo $h['opening_header2'] ?></td>
                                <td class="text-center"><?php echo $h['opening_header3'] ?></td>
                                <td class="text-center"><?php echo $h['navbar1'] ?></td>
                                <td class="text-center"><?php echo $h['navbar2'] ?></td>
                                <td class="text-center"><?php echo $h['navbar3'] ?></td>

                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataHeader/updateData/' . $h['id_header']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>
                </div>

                </div>