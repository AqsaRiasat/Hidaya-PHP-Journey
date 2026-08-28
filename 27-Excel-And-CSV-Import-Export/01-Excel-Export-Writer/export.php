<?php
$connection = mysqli_connect("localhost", "root", "", "reporting");
$type = isset($_GET['type']) ? $_GET['type'] : '';

//  Handling EXCEL via Header
if ($type == 'excel_header') {
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=student_report.xls");
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
    
    outputHtmlTable($connection);
}

// Handling WORD via Header
if ($type == 'word') {
    header("Content-type: application/vnd-ms-word");
    header("Content-Disposition: attachment; filename=student_report.doc");
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
    
    outputHtmlTable($connection);
}

// Handling CSV Generation
if ($type == 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=student_report.csv');
    
    $output = fopen('php://output', 'w');
    fputcsv($output, array('S.NO', 'NAME', 'Department')); // Headers
    
    $query = "SELECT * FROM student ORDER BY id ASC";
    $sql = mysqli_query($connection, $query);
    $no = 1;
    while($data = mysqli_fetch_assoc($sql)){
        fputcsv($output, array($no, $data['name'], $data['dept']));
        $no++;
    }
    fclose($output);
    exit;
}

//  Handling TEXT File Generation
if ($type == 'text') {
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename=student_report.txt');
    
    $query = "SELECT * FROM student ORDER BY id ASC";
    $sql = mysqli_query($connection, $query);
    $no = 1;
    
    echo "REGISTERED USERS REPORT\r\n";
    echo "=======================\r\n\r\n";
    while($data = mysqli_fetch_assoc($sql)){
        echo "S.No: " . $no . " | Name: " . $data['name'] . " | Dept: " . $data['dept'] . "\r\n";
        $no++;
    }
    exit;
}

// Handling ExcelWriter Class
if ($type == 'excel_class') {
    include("excelwriter.inc.php");
    $fileName = "myClassExcel.xls";
    $excel = new ExcelWriter($fileName);
    
    // Headers Likhein
    $excel->writeLine(array("S.NO", "NAME", "Department"), array('text-align'=>'center', 'color'=> 'red'));
    
    $query = "SELECT * FROM student ORDER BY id ASC";
    $sql = mysqli_query($connection, $query);
    $no = 1;
    while($data = mysqli_fetch_assoc($sql)){
        $excel->writeLine(array($no, $data['name'], $data['dept']));
        $no++;
    }
    $excel->close();
    
    
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=".$fileName);
    readfile($fileName);
    unlink($fileName); 
    exit;
}


function outputHtmlTable($connection) {
    echo '<table border="1">
            <tr> 
                <th>S.NO</th> 
                <th>NAME</th> 
                <th>Department</th> 
            </tr>';
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
    echo '</table>';
    exit;
}
?>