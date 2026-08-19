<?php 
include("functions.php"); 

echo "<h2>Page 1: Login & Register</h2>";

// Displaying Login Form
my_login_form("check.php", "POST");

echo "<hr>";

// Displaying Register Form
my_register_form("save.php", "POST");
?>