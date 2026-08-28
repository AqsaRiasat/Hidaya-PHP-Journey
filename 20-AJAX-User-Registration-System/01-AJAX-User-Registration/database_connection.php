<?php

$connection = mysqli_connect("localhost", "root", "", "registration_form");

if(!$connection) {
    die("Connection failed!" .mysqli_connect_error());
}

?>