<?php
session_start();
require_once('database_connection.php');

if (isset($_REQUEST['login'])) {
    $query = "SELECT * FROM user WHERE email = '" . $_REQUEST['email'] . "' AND password = '" . $_REQUEST['password'] . "'";
    $result = mysqli_query($connection, $query) or die('Query Failed..!').mysqli_connect_error($connection);

    if ($result->num_rows) {
        $data = mysqli_fetch_assoc($result);

        $query = "UPDATE user SET is_online=1 WHERE user_id = " . $data['user_id'];
        $result = mysqli_query($connection, $query) or die('Query Failed..!').mysqli_connect_error($connection);

        if ($result) {
            $data['is_online'] = 1;
            $_SESSION['user'] = $data;
            header('location:chat.php');
        }
    } else {
        header('location:index.php?msg=Invalid Email or Password&color=red');
    }
}
?>