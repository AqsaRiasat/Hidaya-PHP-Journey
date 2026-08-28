<?php

require_once('database_settings.php');

$database_driver = new mysqli_driver();
$database_driver->report_mode = MYSQLI_REPORT_OFF;

$connection = mysqli_connect($host,$username,$password,$database_name);

if(mysqli_connect_errno()) {
    echo "<p class='error_msg'>Connection Failed! Error No : " . mysqli_connect_errno() . "</p>";
}
?>