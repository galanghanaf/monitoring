<!DOCTYPE html>
<html>

<body>
    <center>

        <button type="button" onclick="tableToCSV()">
            <h1 style="color:blue">Download</h1>
        </button>
        <h2><?php echo $title ?></h2>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>IT</th>
                <th>OT</th>
                <th>Plant Code</th>
                <th>CBU</th>
                <th>Cost Ctr</th>
                <th>Asset Number</th>
                <th>Asset Description</th>
                <th>Serial Number</th>
                <th>Model/Type</th>
                <th>Computer Name</th>
                <th>Qty</th>
                <th>Acquis.val</th>
                <th>Accum.dep</th>
                <th>Book val.</th>
                <th>Fixed Asset 01</th>
                <th>Fixed Asset 02</th>
                <th>Fixed Asset 03</th>
                <th>In Use</th>
                <th>Idle</th>
                <th>Damage</th>
                <th>Label</th>
                <th>Status</th>
                <th>Location</th>
                <th>User</th>
                <th>Cap.date</th>
                <th>Note</th>
                <th>Network OT</th>
                <th>Network IT</th>
                <th>Mac Address</th>
                <th>IP Address</th>
                <th>NEAD</th>
                <th>SEP</th>
                <th>SCCM</th>
                <th>OS Version</th>
            </tr>

            <?php $no = "1";
            foreach ($itotasset as $t) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $t['it']; ?></td>
                    <td><?php echo $t['ot']; ?></td>
                    <td><?php echo $t['plant_code']; ?></td>
                    <td><?php echo $t['cbu']; ?></td>
                    <td><?php echo $t['cost_ctr']; ?></td>
                    <td><?php echo $t['asset_number']; ?></td>
                    <td><?php echo $t['asset_description']; ?></td>
                    <td><?php echo $t['serial_number']; ?></td>
                    <td><?php echo $t['model']; ?></td>
                    <td><?php echo $t['computer_name']; ?></td>
                    <td><?php echo $t['qty']; ?></td>
                    <td><?php echo $t['acquis_val']; ?></td>
                    <td><?php echo $t['accum_dep']; ?></td>
                    <td><?php echo $t['book_val']; ?></td>
                    <td><?php echo $t['fixed_asset1']; ?></td>
                    <td><?php echo $t['fixed_asset2']; ?></td>
                    <td><?php echo $t['fixed_asset3']; ?></td>
                    <td><?php echo $t['in_use']; ?></td>
                    <td><?php echo $t['idle']; ?></td>
                    <td><?php echo $t['damage']; ?></td>
                    <td><?php echo $t['label']; ?></td>
                    <td><?php echo $t['status']; ?></td>
                    <td><?php echo $t['location']; ?></td>
                    <td><?php echo $t['user']; ?></td>
                    <td><?php echo $t['cap_date']; ?></td>
                    <td><?php echo $t['note']; ?></td>
                    <td><?php echo $t['network_ot']; ?></td>
                    <td><?php echo $t['network_it']; ?></td>
                    <td><?php echo $t['mac_address']; ?></td>
                    <td><?php echo $t['ip_address']; ?></td>
                    <td><?php echo $t['nead']; ?></td>
                    <td><?php echo $t['sccm']; ?></td>
                    <td><?php echo $t['sep']; ?></td>
                    <td><?php echo $t['osversion']; ?></td>



                </tr>
            <?php endforeach; ?>
        </table>
        <br><br>

    </center>

    <script type="text/javascript">
        function tableToCSV() {

            // Variable to store the final csv data
            var csv_data = [];

            // Get each row data
            var rows = document.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {

                // Get each column data
                var cols = rows[i].querySelectorAll('td,th');

                // Stores each csv row data
                var csvrow = [];
                for (var j = 0; j < cols.length; j++) {

                    // Get the text data of each cell
                    // of a row and push it to csvrow
                    csvrow.push(cols[j].innerHTML);
                }

                // Combine each column value with comma
                csv_data.push(csvrow.join(","));
            }

            // Combine each row data with new line character
            csv_data = csv_data.join('\n');

            // Call this function to download csv file 
            downloadCSVFile(csv_data);

        }

        function downloadCSVFile(csv_data) {

            // Create CSV file object and feed
            // our csv_data into it
            CSVFile = new Blob([csv_data], {
                type: "text/csv"
            });

            // Create to temporary link to initiate
            // download process
            var temp_link = document.createElement('a');

            // Download csv file
            temp_link.download = "<?php echo $title ?>.csv";
            var url = window.URL.createObjectURL(CSVFile);
            temp_link.href = url;

            // This link should not be displayed
            temp_link.style.display = "none";
            document.body.appendChild(temp_link);

            // Automatically click the link to
            // trigger download
            temp_link.click();
            document.body.removeChild(temp_link);
        }
    </script>
</body>

</html>