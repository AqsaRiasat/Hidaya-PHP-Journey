<?php

require_once("../require/connection.php");
require_once("../require/function.php");

session_management(3);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php title(); ?></title>
	<style>
	body{
		background-color: skyblue;
		color: navy;
	}
	h1{
		background-color: yellow;
		color: navy;
		text-align: center;
		font-family: cursive;
		padding: 10px;
		margin: 10px;
		border-radius: 5px 0px 5px 0px;
	}
	h2{

		color: black;

	}
	</style>
</head>
<body>
	<h1><?php title(); ?></h1>
<h2>Wellcome Student -  <?php echo $_SESSION['users']['first_name']." ".$_SESSION['users']['last_name'] ?></h2>
<hr/>
<button style="float: right; margin: 10px;"><a href="../logout.php"> Logout </a></button>
<center>
	
<table border="1" cellpadding="10" cellspacing="5">
	<tr>
		<th>First-Name</th>
		<td> <?= $_SESSION['users']['first_name']??''; ?> </td>
	</tr>
	<tr>
		<th>Last-Name</th>
		<td> <?= $_SESSION['users']['last_name']??''; ?> </td>
	</tr>
	<tr>
		<th>Email</th>
		<td> <?= $_SESSION['users']['email']??''; ?> </td>
	</tr>
</table>
</center>
</body>
</html>