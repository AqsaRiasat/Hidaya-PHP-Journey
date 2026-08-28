<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Reporting Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { width: 50%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; }
        th { background-color: #f2f2f2; }
        .btn { display: inline-block; padding: 10px 15px; margin: 5px; color: white; background-color: #007BFF; text-decoration: none; border-radius: 4px; font-weight: bold;}
        .btn-excel { background-color: #1E7145; }
        .btn-word { background-color: #2B579A; }
        .btn-csv { background-color: #A4373A; }
        .btn-text { background-color: #4A4A4A; }
    </style>
</head>
<body>

    <h2>Registered Users List</h2>

    <table>
        <tr>
            <th>S.NO</th>
            <th>NAME</th>
            <th>Department</th>
        </tr>
        <?php
        $connection = mysqli_connect("localhost", "root", "", "reporting");
        if (!$connection) { die("Connection failed: " . mysqli_connect_error()); }

        $query = "SELECT * FROM student ORDER BY id ASC";
        $sql = mysqli_query($connection, $query);
        $no = 1;

        while($data = mysqli_fetch_assoc($sql)){
            echo '<tr>
                    <td>'.$no.'</td>
                    <td>'.$data['name'].'</td>
                    <td>'.$data['dept'].'</td>
                  </tr>';
            $no++;
        }
        mysqli_close($connection);
        ?>
    </table>

    <h3>Generate & Download Reports:</h3>

    <a href="export.php?type=excel_header" class="btn btn-excel">Excel Using Header</a>
    <a href="export.php?type=excel_class" class="btn btn-excel">Excel Using ExcelWriter</a>
    <a href="export.php?type=word" class="btn btn-word">MS Word File</a>
    <a href="export.php?type=csv" class="btn btn-csv">CSV File</a>
    <a href="export.php?type=text" class="btn btn-text">Text File</a>

</body>
</html>