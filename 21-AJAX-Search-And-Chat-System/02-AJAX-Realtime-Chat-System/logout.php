<?php
session_start();
require_once('database_connection.php');

if (isset($_SESSION['user'])) {
    $query = "UPDATE user SET is_online = 0 WHERE user_id = '" . $_SESSION['user']['user_id'] . "' ";
    mysqli_query($connection, $query);
}

session_destroy();
header('location:index.php?msg=LoggedOut..!&color=green');
?>