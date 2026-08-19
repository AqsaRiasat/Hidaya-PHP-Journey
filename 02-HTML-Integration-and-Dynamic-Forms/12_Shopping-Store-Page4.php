<?php
session_start();
session_unset();
session_destroy();
header("location: 12_Shopping-Store-Page1.php?msg=Log out ho gaye hain!");
exit();
?>