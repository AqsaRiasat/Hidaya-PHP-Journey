<?php 

class forms {

	public $method = "POST";
	public $action = "process.php";

	public function login_form(){
	?>
		<center>
		<h2>Login Form</h2>
		<form method="<?php echo $this->method; ?>" action="<?php echo $this->action; ?>">
			Email: <input type="email" name="email" required /><br /><br />
			Password: <input type="password" name="password" required /><br /><br />
			<input type="submit" name="login" value="Login" />
		</form>
		</center>
	<?php
	}

	public function signup_form(){
	?>
		<center>
		<h2>Sign-Up Form</h2>
		<form method="<?php echo $this->method; ?>" action="<?php echo $this->action; ?>">
			First Name: <input type="text" name="first_name" required /><br /><br />
			Last Name: <input type="text" name="last_name" required /><br /><br />
			Email: <input type="email" name="email" required /><br /><br />
			Password: <input type="password" name="password" required /><br /><br />
			<input type="submit" name="signup" value="Register" />
		</form>
		</center>
	<?php
	}

	public function forgot_form(){
	?>
		<center>
		<h2>Forgot Password Form</h2>
		<form method="<?php echo $this->method; ?>" action="<?php echo $this->action; ?>">
			Enter Your Email: <input type="email" name="email" required /><br /><br />
			<input type="submit" name="forgot" value="Verify Email" />
		</form>
		</center>
	<?php
	}

	public function change_password_form(){
	?>
		<center>
		<h2>Change Password Form</h2>
		<form method="<?php echo $this->method; ?>" action="<?php echo $this->action; ?>">
			Email: <input type="email" name="email" required /><br /><br />
			Old Password: <input type="password" name="old_password" required /><br /><br />
			New Password: <input type="password" name="new_password" required /><br /><br />
			<input type="submit" name="change_password" value="Update Password" />
		</form>
		</center>
	<?php
	}
}

?>