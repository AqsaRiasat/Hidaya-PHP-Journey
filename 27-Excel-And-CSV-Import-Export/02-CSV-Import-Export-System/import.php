<?php
// Database Connection
$connection = mysqli_connect("localhost", "root", "", "reporting");

$message = "";

// CSV UPLOAD & IMPORT
if (isset($_POST["upload_btn"])) {
    
    if ($_FILES['csv_file']['error'] == 0) {
        $fileName = $_FILES["csv_file"]["tmp_name"];
        
    
        $file = fopen($fileName, "r");
        
        
        fgetcsv($file);
        
        $count = 0;
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
        
            $name = mysqli_real_escape_string($connection, $column[0]);
            $dept = mysqli_real_escape_string($connection, $column[1]);
            
        
            $query = "INSERT INTO student (name, dept) VALUES ('$name', '$dept')";
            $result = mysqli_query($connection, $query);
            if($result) {
                $count++;
            }
        }
        fclose($file);
        $message = "<p style='color: green; font-weight: bold;'>Success! $count new records imported successfully.</p>";
    } else {
        $message = "<p style='color: red;'>Please select a valid CSV file.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CSV Importer & Exporter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        .upload-section {
            background: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 50%;
            margin-bottom: 30px;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            color: white;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .btn-csv {
            background-color: #A4373A;
        }
    </style>
</head>

<body>

    <h2>Assignment: CSV File Uploader & Database Sync</h2>


    <?php echo $message; ?>


    <div class="upload-section">
        <h3>Upload CSV File</h3>
        <form action="import.php" method="post" enctype="multipart/form-data">
            <input type="file" name="csv_file" accept=".csv" required>
            <br><br>
            <button type="submit" name="upload_btn" class="btn">Import to Database</button>
        </form>
    </div>


    <h3>Current Database Records</h3>
    <table>
        <tr>
            <th>S.NO</th>
            <th>NAME</th>
            <th>Department</th>
        </tr>
        <?php
        $query = "SELECT * FROM student ORDER BY id ASC";
        $sql = mysqli_query($connection, $query);
        $no = 1;

        if (mysqli_num_rows($sql) > 0) {
            while($data = mysqli_fetch_assoc($sql)){
                echo '<tr>
                        <td>'.$no.'</td>
                        <td>'.$data['name'].'</td>
                        <td>'.$data['dept'].'</td>
                      </tr>';
                $no++;
            }
        } else {
            echo '<tr><td colspan="3" style="text-align:center;">No records found in database.</td></tr>';
        }
        mysqli_close($connection);
        ?>
    </table>


    <a href="export.php?type=csv" class="btn btn-csv">Export Back to CSV</a>

</body>

</html>