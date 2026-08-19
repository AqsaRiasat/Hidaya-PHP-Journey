<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: 11_Student-Portal-Page1.php?msg=Login first");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        body {
            background-color: #f4f7f6;
            font-family: Arial;
        }

        .card {
            background-color: white;
            border-top: 8px solid #d4ac0d;
            width: 50%;
            margin: 60px auto;
            padding: 25px;
            box-shadow: 0px 4px 10px #ccc;
            text-align: center;
        }

        h1 {
            color: #1a5276;
        }

        .btn-out {
            color: white;
            background: red;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="card">
        <h1>Welcome,
            <?php echo $_SESSION['full_name']; ?>!
        </h1>
        <hr>
        <p><b>Username:</b>
            <?php echo $_SESSION['username']; ?>
        </p>
        <p><b>Pass:</b>
            <?php echo $_SESSION['password']; ?>
        </p>
        <a href="11_Student-Portal-Page4.php" class="btn-out">LOGOUT</a>
    </div>

</body>

</html>