<?php
session_start();
require_once("require/connection.php");

if(isset($_SESSION['current_log_id'])){
    $log_id = $_SESSION['current_log_id'];
    $current_time = date("Y/m/d h:i:s A");
    
    $log_update_query = "UPDATE user_logs SET logout_time = '$current_time' WHERE log_id = '$log_id'";
    mysqli_query($connect, $log_update_query);
}

session_destroy();
header("location:login_form.php?msg=Logout Successfully...!&color=green");
?>