<!-- Begin Page Content -->
<div class="container-fluid ">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('superadmin/switchpoint/tambahData') ?>">
        <i class="fas fa-plus"> Add Data</i></a>
    <a class="btn btn-sm btn-primary mb-3 float-right" href="<?php echo base_url('superadmin/switchpoint/export_csv') ?>">
        <i class="fas fa-download"> Export CSV</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('superadmin/switchpoint') ?>" method="POST">
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
    <table style="white-space:nowrap;" class="table-responsive table table-bordered table-hover" style="overflow-y: scroll; overflow-x: auto">

        <tr>
            <th class="text-center bg-primary text-white" rowspan="2">No</th>
            <th class="text-center bg-primary text-white" rowspan="2">Status</th>

            <th class="text-center bg-primary text-white" rowspan="2">Asset Description</th>
            <th class="text-center bg-primary text-white" rowspan="2">Hostname</th>
            <th class="text-center bg-primary text-white" rowspan="2">Model</th>
            <th class="text-center bg-primary text-white" rowspan="2">Serial Number</th>
            <th class="text-center bg-primary text-white" rowspan="2">IP Address</th>
            <th class="text-center bg-primary text-white" rowspan="2">Mac Address</th>
            <th class="text-center bg-primary text-white" colspan="2">Up Link</th>

            <th class="text-center bg-primary text-white" rowspan="2">Location</th>
            <th class="text-center bg-warning text-white" rowspan="2">Update</th>
            <th class="text-center bg-danger text-white" rowspan="2">Delete</th>

        </tr>
        <tr>
            <th class="text-center bg-primary text-white">Switch</th>
            <th class="text-center bg-primary text-white">Port</th>
        </tr>
        <?php if (empty($switchpoint)) : ?>
            <tr>
                <td colspan="17">
                    <div class="alert alert-danger" role="alert">
                        Data not found!
                    </div>
                </td>
            </tr>
        <?php endif ?>
        <?php foreach ($switchpoint as $t) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>

                <?php

                // Initialisierung der Ziele / Wenn Port leer -> ICMP (Ping), sonst Portcheck

                $ServerList = array(
                    "Server1" => $t['ip_address'],
                    "Port1" => NULL
                );


                for ($i = 1; $i <= (count($ServerList) / 2); $i++) {

                    $Server = $ServerList["Server" . $i];
                    $Port = $ServerList["Port" . $i];



                    // ICMP (Ping) oder Portcheck
                    if ($Port <> "") {
                        if (!$socket = @fsockopen($Server, $Port, $errno, $errstr, 30)) {
                            $tdStyle = '#e74a3b';
                            echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Offline</td>";
                        } else {
                            $tdStyle = '#1cc88a';
                            echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Online</td>";
                            fclose($socket);
                        }
                    } else {
                        $str = exec("ping -n 1 -w 1 " . $Server, $input, $result);
                        if ($result == 0) {
                            $tdStyle = '#1cc88a';
                            echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Online</td>";
                        } else {
                            $tdStyle = '#e74a3b';
                            echo "<td class='text-center text-white' style='background-color:{$tdStyle};'>Offline</td>";
                        }
                    }
                }

                ?>


                <td class="text-center"><?php echo $t['asset_description']; ?></td>
                <td class="text-center"><?php echo $t['hostname']; ?></td>
                <td class="text-center"><?php echo $t['model']; ?></td>
                <td class="text-center"><?php echo $t['serial_number']; ?></td>
                <td class="text-center"><?php echo $t['ip_address']; ?></td>
                <td class="text-center"><?php echo $t['mac_address']; ?></td>
                <td class="text-center"><?php echo $t['switch']; ?></td>
                <td class="text-center"><?php echo $t['port']; ?></td>
                <td class="text-center"><?php echo $t['location']; ?></td>

                <td>
                    <center>
                        <a class="btn btn-sm btn-warning" href="<?php echo base_url('superadmin/switchpoint/updateData/' . $t['id']) ?>">
                            <i class="fas fa-edit"></i></a>
                    </center>
                </td>
                <td>
                    <center>
                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('superadmin/switchpoint/deleteData/' . $t['id']) ?>">
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