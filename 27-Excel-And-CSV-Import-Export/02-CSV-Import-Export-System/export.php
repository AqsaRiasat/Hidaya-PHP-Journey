<?php
$connection = mysqli_connect("localhost", "root", "", "reporting");

if (isset($_GET['type']) && $_GET['type'] == 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=student_report.csv');
    
    $output = fopen('php://output', 'w');
    fputcsv($output, array('S.NO', 'NAME', 'Department')); 
    
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
?>