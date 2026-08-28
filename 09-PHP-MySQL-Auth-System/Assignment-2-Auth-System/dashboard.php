<?php
// Agar koi bacha direct is page par aaye bina login kiye, toh wapis bhej do
if (!isset($_GET['user_email'])) {
    header("Location: login.php");
    exit();
}

$db = @mysqli_connect("localhost", "root", "", "assignment_db");

// URL se email uthayi
$my_email = $_GET['user_email'];

// Database se is email ka saara data nikalne ki query
$q = "SELECT * FROM staff WHERE email = '$my_email'";
$run = mysqli_query($db, $q);

// Data ko fetch kiya variable mein
$row = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body style="font-family: sans-serif; margin: 30px;">

    <h2>KhushAamdeed, <?php echo $row['name']; ?>!</h2>
    <p>Aap ka data niche table mein database se aa raha hai:</p>

    <table border="1" cellpadding="10" style="border-collapse: collapse; width: 400px; text-align: left;">
        <tr style="background-color: #f2f2f2;">
            <th>Field</th>
            <th>Database Value</th>
        </tr>
        <tr>
            <td><b>ID:</b></td>
            <td><?php echo $row['id']; ?></td>
        </tr>
        <tr>
            <td><b>Naam:</b></td>
            <td><?php echo $row['name']; ?></td>
        </tr>
        <tr>
            <td><b>Email:</b></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td><b>Password:</b></td>
            <td><?php echo $row['pass']; ?></td>
        </tr>
    </table>

    <br><br>
    <a href="login.php" style="color: red; font-weight: bold;">Logout (Wapis Login Page)</a>

</body>
</html>