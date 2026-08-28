<?php
if (isset($_REQUEST['login'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if ($username == "admin" && $password == "123") {
        
        if (isset($_REQUEST['rememberMe'])) {
            setcookie("username", base64_encode($username), time() + 3600, "/");
            setcookie("password", base64_encode($password), time() + 3600, "/");
        } else {
            setcookie("username", base64_encode($username), 0, "/");
            setcookie("password", base64_encode($password), 0, "/");
        }

        header("location: dashboard.php");
        exit();
    } else {
        header("location: login_system.php?msg=Invalid Username or Password....!");
        exit();
    }
} else {
    header("location: login_system.php");
    exit();
}
?>