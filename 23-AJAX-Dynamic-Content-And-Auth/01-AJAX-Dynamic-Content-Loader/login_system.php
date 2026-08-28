<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body { 
            background-color: white; 
            font-family: sans-serif; 
        }
        .login-box { 
            width: 400px; 
            background-color: #5b9bd5; 
            padding: 30px; 
            margin: 100px auto; 
            color: black; 
        }
        .login-box input { 
            width: 90%; 
            padding: 5px; 
            margin: 5px 0; 
        }
        .login-btn { 
            background-color: #d9d9d9; 
            padding: 5px 15px; 
            cursor: pointer; 
        }
        .error-msg {
            color: red; 
        }
    </style>
    <script>
        function checkCookie() {
            var myCookie = document.cookie;
            if (myCookie.indexOf("user_login=") != -1) {
                window.location.href = "welcome.php";
            }
        }
        window.onload = checkCookie;
    </script>
</head>
<body>
    <div class="login-box">
        <p class="error-msg">
            <?php 
            if (isset($_GET['msg'])) {
                echo $_GET['msg']; 
            }
            ?>
        </p>
        <form method="POST" action="login_process.php">
            <table cellpadding="5">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="login" value="Login" class="login-btn"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>