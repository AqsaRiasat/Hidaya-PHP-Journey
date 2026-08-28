<?php
// Server se connection
$db = @mysqli_connect("localhost", "root", "", "assignment_db");

$msg = "";

// Jab Register ka button dabayein
if (isset($_POST['sub'])) {
    $n = $_POST['nm'];
    $e = $_POST['em'];
    $p = $_POST['ps'];

    // Insert query jo data table mein daalegi
    $q = "INSERT INTO staff (name, email, pass) VALUES ('$n', '$e', '$p')";
    $run = mysqli_query($db, $q);

    if ($run) {
        $msg = "Registration Kamyab! Ab niche diye gaye link se login karein.";
    } else {
        $msg = "Ghalti! Data save nahi hua: " . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body style="font-family: sans-serif; margin: 30px;">

    <h3>Naya Account Banayein</h3>
    <p style="color: blue; font-weight: bold;"><?php echo $msg; ?></p>

    <form method="POST" action="">
        Naam:<br>
        <input type="text" name="nm" required><br><br>

        Email:<br>
        <input type="email" name="em" required><br><br>

        Password:<br>
        <input type="password" name="ps" required><br><br>

        <input type="submit" name="sub" value="Register">
    </form>

    <br>
    <a href="login.php">Pehle se account hai? Login karein</a>

</body>
</html>