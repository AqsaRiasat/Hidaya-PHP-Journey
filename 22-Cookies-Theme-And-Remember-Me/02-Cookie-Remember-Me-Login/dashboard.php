<?php
if (!isset($_COOKIE['username']) || !isset($_COOKIE['password'])) {
    header("location: login_system.php?msg=Please Login First....!");
    exit();
}

$user = base64_decode($_COOKIE['username']);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <style>
        body {
            background-color: deepskyblue;
            color: white;
        }

        h1 {
            background-color: navy;
            color: pink;
            padding: 10px;
            margin: 10px;
            text-align: center;
            font-family: cursive;
            border-radius: 10px 7px 10px 7px;
        }

        button {
            float: right;
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
            background-color: pink;
            color: black;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Dashboard</h1>
    <button> <a href="cookie_destroy.php"> Logout </a> </button>
    <br /><br /><br />

    <h2>Welcome,
        <?php echo $user; ?>!
    </h2>
    <hr />
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.</p>
</body>

</html>