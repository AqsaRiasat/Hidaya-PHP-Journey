<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            background-color: #1a5276;
            font-family: Arial;
            color: white;
            text-align: center;
        }

        fieldset {
            width: 350px;
            margin: 80px auto;
            border: 2px solid #f1c40f;
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            color: #f1c40f;
        }

        input[type="submit"] {
            background: #f1c40f;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>STUDENT SHOPPING STORE</h1>
    <fieldset>
        <legend style="color:white;">Login Panel</legend>
        <p style="color: #ff7675;">
            <?php echo $_GET['msg'] ?? ''; ?>
        </p>
        <form method="POST" action="12_Shopping-Store-Page2.php">
            <table align="center">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Login Now"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>