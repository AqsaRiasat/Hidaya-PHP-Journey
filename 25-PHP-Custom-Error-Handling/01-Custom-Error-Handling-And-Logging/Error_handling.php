<?php

ini_set("display_errors", 0);

try {
    
    $con = mysqli_connect("localhost", "root", "", "Error_handling");
    
    if (!$con) {
        throw new Exception("Database Connection Failed...!");
    }

    $required_file = "important_config.txt";

    if (!file_exists($required_file)) {
        throw new Exception("Critical application file is missing...!");
    }

} 
catch (Exception $e) {

    $msg = $e->getMessage();


    $file = fopen("assignment_errors.txt", "w");
    fwrite($file, $msg);
    fclose($file);

    
    if ($con) {
        $sql = "INSERT INTO error_logs (message) VALUES ('$msg')";
        mysqli_query($con, $sql);
    }


    echo "Status: Assignment executed. Error handled safely!";
}
?>