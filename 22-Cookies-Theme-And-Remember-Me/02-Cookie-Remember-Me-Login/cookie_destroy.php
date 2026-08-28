<?php
setcookie("username", "", time() - 3600, "/");
setcookie("password", "", time() - 3600, "/");

header("location: login_system.php?msg=User Logout Successfully....!");
exit();
?>