<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login System</title>
    <style>
        body {
            background-color: skyblue;
            color: navy;
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

        fieldset {
            width: 300px;
            border: 5px solid green;
        }
    </style>
</head>

<body>
    <h1>Login System</h1>
    <center>
        <fieldset>
            <legend>Login Here...!</legend>
            <p style="color: red">
                <?php echo $_REQUEST['msg'] ?? ''; ?>
            </p>

            <form method="POST" action="login_process.php">
                <table>
                    <tr>
                        <th>Username</th>
                        <td><input type="text" name="username" placeholder="Enter Your Username" required></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name="password" placeholder="Enter Your Password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="checkbox" name="rememberMe" value="1"> Remember Me
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="login" value="Login">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>

</html>