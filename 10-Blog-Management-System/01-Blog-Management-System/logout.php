<?php

session_start();

session_destroy();

header("location:login_form.php?msg=Logout Successfully...!&color=green");



?>