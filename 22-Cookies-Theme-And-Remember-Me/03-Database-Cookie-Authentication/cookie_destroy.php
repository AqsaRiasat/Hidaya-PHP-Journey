<?php
setcookie("user_login", "", time() - 3600, "/");
header("location: login_system.php?msg=User Logout Successfully...!");
exit();
?>