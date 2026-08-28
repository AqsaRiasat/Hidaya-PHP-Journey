<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<style>
		body{
			background-color: skyblue;
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
<h1>Login Form</h1>
<center>
<fieldset>
	<legend>Login Here...!</legend>
	<p style="color: <?php echo $_GET['color']??''; ?>"><?php echo $_REQUEST['msg']??''; ?> </p>
	<form method="POST" action="process.php">
		<table>
			<tr>
				<th>Email</th>
				<td> <input type="email" name="email" placeholder="Enter Your Email Address" required> </td>
			</tr>
			<tr>
				<th>Password</th>
				<td> <input type="password" name="password" placeholder="Enter Your Password" required> </td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="login" value="Login"> </td>
			</tr>
		</table>

	</form>
</fieldset>
</center>
</body>
</html>