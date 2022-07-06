
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>
                    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/logbook/tambahData') ?>">
                        <i class="fas fa-plus"> Tambah</i></a>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table-responsive table table-bordered table-striped" style="overflow-y: scroll; overflow-x: auto">

                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Department</th>
                            <th class="text-center">Equipment</th>
                            <th class="text-center">Asset Number</th>
                            <th class="text-center">Serial Number</th>
                            <th class="text-center">Ticket Show</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Return</th>
                            <th class="text-center">Signature</th>
                            <th class="text-center">Action</th>

                        </tr>

                        <?php foreach ($logbook as $l) : ?>
                            <tr>
                                <td class="text-center"><?php echo ++$start; ?></td>
                                <td class="text-center"><?php echo $l['name']; ?></td>
                                <td class="text-center"><?php echo $l['department']; ?></td>
                                <td class="text-center"><?php echo $l['equipment']; ?></td>
                                <td class="text-center"><?php echo $l['asset_number']; ?></td>
                                <td class="text-center"><?php echo $l['serial_number']; ?></td>
                                <td class="text-center"><?php echo $l['ticket_show']; ?></td>
                                <td class="text-center"><?php echo $l['description']; ?></td>
                                <td class="text-center"><?php echo $l['date']; ?></td>
                                <td class="text-center"><?php echo $l['return']; ?></td>
                                <td class="text-center"><?php echo $l['signature']; ?></td>


                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/logbook/updateData/' . $l['id']) ?>">
                                            <i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/logbook/deleteData/' . $l['id']) ?>">
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
               
