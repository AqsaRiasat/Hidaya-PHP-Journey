<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "google_search";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>