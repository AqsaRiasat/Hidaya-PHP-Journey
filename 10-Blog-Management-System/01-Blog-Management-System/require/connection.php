<?php

mysqli_report(MYSQLI_REPORT_OFF);

$host_name = "localhost";
$username  = "root";
$password = "";
$database = "blog_management_system";

$connect = mysqli_connect($host_name,$username,$password,$database);

if(mysqli_connect_errno()){

	die("Database Connection Failed...!"."Error Message:-".mysqli_connect_error());
}


?>