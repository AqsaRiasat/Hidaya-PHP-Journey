<?php

require_once("require/connection.php");

$id = 1;

$query = "SELECT * FROM role_type WHERE role_id !=?";
$stmt = mysqli_prepare($connect,$query);
mysqli_stmt_bind_param($stmt,"i",$id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Form</title>
	<style>
		body{
			background-color: lightcyan;
			color: navy;
		}
		h1{
			background-color: teal;
			color: yellow;
			padding: 10px;
			margin: 10px;
			text-align: center;
			font-family: cursive;
			border-radius: 5px 0px 5px 0px;
			border: 2px dotted;
		}
		fieldset{

			width: 400px;
			color: green;

		}
		legend{
			color: black;
			text-align: center;
			font-size: 19px;
		}
	</style>
</head>
<body>
<h1>Register Form</h1>
<center>
<fieldset>
	<legend>Register Here...!</legend>
	<p style="color:<?php echo $_GET['color']??''; ?>"><?php echo $_REQUEST['msg']??''; ?></p>
	<form method="POST" action="process.php">
		<table>
			<tr>
				<th>First-name</th>
				<td> <input type="text" name="first_name" placeholder="Enter Your First Name" required> </td>
			</tr>
			<tr>
				<th>Last-name</th>
				<td> <input type="text" name="last_name" placeholder="Enter Your Last Name" required> </td>
			</tr>
			<tr>
				<th>Email</th>
				<td> <input type="email" name="email" placeholder="Enter Your Email Address" required> </td>
			</tr>
			<tr>
				<th>Password</th>
				<td> <input type="password" name="password" placeholder="Enter Your Password" required> </td>
			</tr>
			<tr>
				<th>Role-Type</th>
				<td>
				<select name = "role_id">
				<?php while($role_type = mysqli_fetch_assoc($result)){ ?> 
					<option value="<?php echo $role_type['role_id']; ?>"> <?php echo $role_type['role_type']; ?></option>

				<?php }?>
				</select>
				</td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="register" value="Register"> &nbsp;&nbsp; <button><a href="login_form.php">Login Here</a></button> </td>
			</tr>
			
		</table>

	</form>
</fieldset>
</center>
</body>
</html>