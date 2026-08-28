<?php
$db = @mysqli_connect("localhost", "root", "", "assignment_db");

$err = "";

if (isset($_POST['log'])) {
    $e = $_POST['em'];
    $p = $_POST['ps'];

    // Check karne ki query
    $q = "SELECT * FROM staff WHERE email = '$e' AND pass = '$p'";
    $run = mysqli_query($db, $q);

    // Agar database mein user mil gaya
    if (mysqli_num_rows($run) == 1) {
        // Dashboard par bhej do aur sath email bhej do URL mein
        header("Location: dashboard.php?user_email=" . $e);
        exit();
    } else {
        $err = "Ghalti! Email ya Password sahi nahi hai.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style="font-family: sans-serif; margin: 30px;">

    <h3>Sign In</h3>
    <p style="color: red; font-weight: bold;"><?php echo $err; ?></p>

    <form method="POST" action="">
        Email:<br>
        <input type="email" name="em" required><br><br>

        Password:<br>
        <input type="password" name="ps" required><br><br>

        <input type="submit" name="log" value="Login">
    </form>

    <br>
    <a href="register.php">Account nahi hai? Register karein</a>

</body>
</html>