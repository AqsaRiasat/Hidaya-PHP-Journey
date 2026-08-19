<?php session_start(); 
    if(isset($_SESSION['username'])){
        header("location: 11_Student-Portal-Page3.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Student Login System</title>
    <style>
        body {
            background-color: #1a5276;
            font-family: 'Segoe UI';
            color: white;
        }

        h1 {
            background-color: #d4ac0d;
            color: black;
            text-align: center;
            padding: 15px;
            border-radius: 5px;
        }

        fieldset {
            width: 330px;
            border: 2px dashed #d4ac0d;
            border-radius: 10px;
            margin: auto;
            background: rgba(255, 255, 255, 0.1);
        }

        legend {
            color: #d4ac0d;
            font-size: 18px;
            padding: 5px;
        }

        p {
            color: #f1948a;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #d4ac0d;
            color: black;
            border: none;
            padding: 7px 15px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }
    </style>
</head>

<body>
    <center>
        <h1>Student Portal</h1>
        <fieldset>
            <legend>Login Area</legend>
            <p>
                <?php echo $_GET['msg'] ?? ''; ?>
            </p>
            <form method="POST" action="11_Student-Portal-Page2.php">
                <table border="0">
                    <tr>
                        <th>User:</th>
                        <td><input type="text" name="username" placeholder="Enter Username"></td>
                    </tr>
                    <tr>
                        <th>Pass:</th>
                        <td><input type="password" name="password" placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="login_btn" value="Login"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>

</html>