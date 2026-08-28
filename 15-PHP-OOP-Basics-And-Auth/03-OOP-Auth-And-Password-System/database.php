<?php
session_start();

class database {

	public $connection;

	public function __construct($host, $username, $password, $database){
		$this->connection = mysqli_connect($host, $username, $password, $database);
	}

	public function login($email, $password){
		$enc_password = md5($password);
		$query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$enc_password."'";
		$result = mysqli_query($this->connection, $query);

		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['user'] = $row;
			header("location:dashboard.php");
		} else {
			echo "Invalid Email or Password!";
		}
	}

	public function signup($first_name, $last_name, $email, $password){
		$enc_password = md5($password);
		$query = "INSERT INTO users (first_name, last_name, email, password) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$enc_password."')";
		$result = mysqli_query($this->connection, $query);

		if($result){
			echo "Registration Successful! <a href='login_system.php'>Login Here</a>";
		} else {
			echo "Registration Failed!";
		}
	}

	public function forgot_password($email){
		$query = "SELECT * FROM users WHERE email = '".$email."'";
		$result = mysqli_query($this->connection, $query);

		if(mysqli_num_rows($result) > 0){
			echo "Email Found! <a href='change_password_system.php'>Click here to change password</a>";
		} else {
			echo "Email does not exist in our database!";
		}
	}

	public function change_password($email, $old_password, $new_password){
		$enc_old = md5($old_password);
		$enc_new = md5($new_password);

		$check_query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$enc_old."'";
		$check_result = mysqli_query($this->connection, $check_query);

		if(mysqli_num_rows($check_result) > 0){
			$update_query = "UPDATE users SET password = '".$enc_new."' WHERE email = '".$email."'";
			mysqli_query($this->connection, $update_query);
			echo "Password Updated Successfully! <a href='login_system.php'>Login Now</a>";
		} else {
			echo "Invalid Email or Old Password!";
		}
	}
}
?>