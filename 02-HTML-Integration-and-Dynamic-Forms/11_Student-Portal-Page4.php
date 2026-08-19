<?php
session_start();
session_unset();
session_destroy();

header("location: 11_Student-Portal-Page1.php?msg=Log out ho gaye hain!");
exit();
?>