<link href="<?php echo base_url() ?>/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url() ?>/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/js/jquery.min.js"></script>


<table class="table" id="data-table">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nmaa</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nama1</td>
            <td>asfd</td>
            <td>dasfw</td>
        </tr>
        <tr>
            <td>asdf</td>
            <td>asdf</td>
            <td>2sda</td>
        </tr>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#data-tables').DataTable
    })
</script>