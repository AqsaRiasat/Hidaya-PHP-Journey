<?php 
session_start();
if(!isset($_SESSION['user'])){
    header("location:login_system.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<center>
		<h1>Welcome to Dashboard!</h1>
		<h2>Hello, <?php echo $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name']; ?></h2>
		<p>Your Email is: <?php echo $_SESSION['user']['email']; ?></p>
		<br />
		<a href="login_system.php">Logout</a>
	</center>
</body>
</html>