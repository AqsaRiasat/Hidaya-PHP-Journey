<?php
include("db.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $encoded_user = base64_encode($username);
        ?>
        <script>
            var d = new Date();
            d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = "user_login=" + "<?php echo $encoded_user; ?>" + ";" + expires + ";path=/";
            window.location.href = "welcome.php";
        </script>
        <?php
    } else {
        header("location: login_system.php?msg=Invalid Username or Password!");
    }
} else {
    header("location: login_system.php");
}
?>