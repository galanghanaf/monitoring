<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/itotasset/tambahData') ?>">
        <i class="fas fa-plus"> Tambah Data ITOT Asset</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('admin/ipstatic') ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search IT/OT Asset..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <table style="white-space:nowrap;" class="table-responsive table table-bordered table-striped" style="overflow-y: scroll; overflow-x: auto">

        <tr>
            <th class="text-center">No</th>
            <th class="text-center">IT</th>
            <th class="text-center">OT</th>
            <th class="text-center">Plant Code</th>
            <th class="text-center">CBU</th>
            <th class="text-center">Cost Ctr</th>
            <th class="text-center">Asset Number</th>
            <th class="text-center">Asset Description</th>
            <th class="text-center">Serial Number</th>
            <th class="text-center">Type</th>
            <th class="text-center">Computer Name</th>
            <th class="text-center">Qty</th>
            <th class="text-center">Acquis.val</th>
            <th class="text-center">Accum.dep</th>
            <th class="text-center">Book val.</th>
            <th class="text-center">Fixed Asset 01</th>
            <th class="text-center">Fixed Asset 02</th>
            <th class="text-center">Fixed Asset 03</th>
            <th class="text-center">In Use</th>
            <th class="text-center">Idle</th>
            <th class="text-center">Damage</th>
            <th class="text-center">Label</th>
            <th class="text-center">Status</th>
            <th class="text-center">Ruangan</th>
            <th class="text-center">User</th>
            <th class="text-center">Cap.date</th>
            <th class="text-center">Note</th>
            <th class="text-center">Network OT</th>
            <th class="text-center">Network IT</th>
            <th class="text-center">Mac Address</th>
            <th class="text-center">IP Address</th>
            <th class="text-center">NEAD</th>
            <th class="text-center">SEP</th>
            <th class="text-center">SCCM</th>
            <th class="text-center">OS Version</th>
            <th class="text-center">Update</th>
            <th class="text-center">Delete</th>

        </tr>

        <?php foreach ($itotasset as $t) : ?>
            <tr>
                <td class="text-center"><?php echo ++$start; ?></td>
                <td class="text-center">
                    <?php

                    // Initialisierung der Ziele / Wenn Port leer -> ICMP (Ping), sonst Portcheck

                    $ServerList = array(
                        "Server1" => $t['ip_address'],
                        "Port1" => $t['port']
                    );


                    for ($i = 1; $i <= (count($ServerList) / 2); $i++) {

                        $Server = $ServerList["Server" . $i];
                        $Port = $ServerList["Port" . $i];



                        // ICMP (Ping) oder Portcheck
                        if ($Port <> "") {
                            if (!$socket = @fsockopen($Server, $Port, $errno, $errstr, 30)) {
                                echo "Offline!";
                            } else {
                                echo "Online!";
                                fclose($socket);
                            }
                        } else {
                            $str = exec("ping -n 1 -w 1 " . $Server, $input, $result);
                            if ($result == 0) {
                                echo "Online!";
                            } else {
                                echo "Offline!";
                            }
                        }
                    }

                    ?>

                </td>
                <td class="text-center"><?php echo $t['vlan']; ?></td>
                <td class="text-center"><?php echo $t['up_link']; ?></td>
                <td class="text-center"><?php echo $t['port']; ?></td>
                <td class="text-center"><?php echo $t['ip_address']; ?></td>
                <td class="text-center"><?php echo $t['mac_address']; ?></td>
                <td class="text-center"><?php echo $t['host_name']; ?></td>
                <td class="text-center"><?php echo $t['equipment']; ?></td>
                <td class="text-center"><?php echo $t['manufacture']; ?></td>
                <td class="text-center"><?php echo $t['model']; ?></td>
                <td class="text-center"><?php echo $t['serial_number']; ?></td>
                <td class="text-center"><?php echo $t['asset_number']; ?></td>
                <td class="text-center"><?php echo $t['area']; ?></td>
                <td class="text-center"><?php echo $t['user']; ?></td>
                <td class="text-center"><?php echo $t['password']; ?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/itotasset/updateData/' . $t['id']) ?>">
                            <i class="fas fa-edit"></i></a>
                    </center>
                </td>
                <td>
                    <center>
                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/itotasset/deleteData/' . $t['id']) ?>">
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