<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>
    <style type="text/css">
        body {
            font-family: Arial;
            color: black;
        }
    </style>
</head>

<body onload="print()">
    <center>

        <table>
            <tr>
                <td>
                    <img src="<?php echo base_url() ?>/assets/img/logo_rs.png" class="mb" style="width: 100px; height: 100px;">
                </td>
                <td>
                    <center>
                        <h2>RUMAH SAKIT UMUM</h2>
                        <h2>Kabupaten Bogor</h2>
                        <h5>Gedung Rumah Sakit Umum Kabupaten Bogor</h5>
                        <h5>Jl. Aries Niaga Blok A1 No 3A. Taman Aries no. telp (021) 589069.</h5>
                    </center>
                </td>
            </tr>
        </table>
        <hr style=" border-width: 5px; color: black">
        <h3><u>Slip Gaji Pegawai</u></h3>
        <?php foreach ($print_slip as $ps) : ?>
            <p>Periode Bulan <?php echo substr($ps->bulan, 0, 2) ?>, Tahun <?php echo substr($ps->bulan, 2, 4) ?></p>
        <?php endforeach; ?>
    </center>

    <?php foreach ($potongan as $p) {
        $potongan = $p->jml_potongan;
    } ?>

    <?php foreach ($print_slip as $ps) : ?>
        <?php $potongan_gaji = $ps->tanpa_keterangan * $potongan; ?>

        <table style="width: 100%">
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?php echo $ps->nik ?></td>
            </tr>
            <tr>
                <td width="20%">Nama pegawai</td>
                <td width="2%">:</td>
                <td><?php echo $ps->nama_pegawai ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $ps->nama_jabatan ?></td>
            </tr>
        </table>

        <table class="table table-striped table-bordered mt-3">
            <tr>
                <th class="text-center" width="5%">No</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Jumlah</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Gaji Pokok</td>
                <td>Rp <?php echo number_format($ps->gaji_pokok, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tunjangan Transportasi</td>
                <td>Rp <?php echo number_format($ps->tj_transport, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Uang Makan</td>
                <td>Rp <?php echo number_format($ps->uang_makan, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Potongan</td>
                <td>Rp <?php echo number_format($potongan_gaji, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: right;">Total Gaji</th>
                <th>Rp <?php echo number_format($ps->gaji_pokok + $ps->tj_transport + $ps->uang_makan - $potongan_gaji, 0, ',', '.') ?></th>
            </tr>
        </table>

        <table width="98%">
            <tr>
                <td></td>
                <td>
                    <p>Pegawai</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="font-weight-bold"><?php echo $ps->nama_pegawai ?></p>
                </td>

                <td width="200px">
                    <p> Bogor, <?php echo date("d M Y") ?>
                        <br>
                        Direktur
                    </p>
                    <img src="<?php echo base_url() ?>/assets/img/tanda_tangan.png" class="mb" style="width: 100px; height: 100px;">
                    <p>dr. Pamungkas</p>
                </td>
            </tr>
        </table>

    <?php endforeach; ?>

</body>

</html>