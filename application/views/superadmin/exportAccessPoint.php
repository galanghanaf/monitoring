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
                <th>Asset Description</th>
                <th>Hostname</th>
                <th>Model</th>
                <th>PCB Serial Number</th>
                <th>Assembly Serial Number</th>
                <th>IP Address</th>
                <th>Mac Address</th>
                <th>Switch</th>
                <th>Port</th>
                <th>Location</th>
            </tr>

            <?php $no = "1";
            foreach ($accesspoint as $t) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $t['asset_description']; ?></td>
                    <td><?php echo $t['hostname']; ?></td>
                    <td><?php echo $t['model']; ?></td>
                    <td><?php echo $t['pcb']; ?></td>
                    <td><?php echo $t['assembly']; ?></td>
                    <td><?php echo $t['ip_address']; ?></td>
                    <td><?php echo $t['mac_address']; ?></td>
                    <td><?php echo $t['switch']; ?></td>
                    <td><?php echo $t['port']; ?></td>
                    <td><?php echo $t['location']; ?></td>

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