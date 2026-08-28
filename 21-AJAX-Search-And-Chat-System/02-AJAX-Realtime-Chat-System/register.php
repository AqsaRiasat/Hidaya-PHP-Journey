<?php
require_once('general.php');
$general = new General();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - <?php echo $general->site_title(); ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 100%);
            margin: 0;
            padding: 40px 20px;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #db2777; 
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 25px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.05);
        }
        .container-box {
            width: 400px;
            background: #ffffff;
            padding: 30px;
            border-radius: 20px; 
            box-shadow: 0 10px 25px rgba(219, 39, 119, 0.08);
            border: none;
        }
        fieldset {
            border: 2px solid #fbcfe8;
            border-radius: 15px;
            padding: 20px;
        }
        legend {
            color: #db2777;
            font-weight: bold;
            font-size: 18px;
            padding: 0 10px;
        }
        .form-table {
            width: 100%;
        }
        .form-table td {
            padding: 10px 5px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 92%;
            padding: 10px;
            border: 2px solid #fbcfe8;
            border-radius: 12px;
            outline: none;
            font-family: inherit;
            transition: border-color 0.2s;
        }
        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            border-color: #ec4899;
        }
        .btn-submit {
            background: #ec4899;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 12px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(236, 72, 153, 0.15);
            transition: background 0.2s;
            margin-right: 8px;
        }
        .btn-submit:hover {
            background: #db2777;
        }
        .btn-reset {
            background: #f43f5e;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 12px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(244, 63, 94, 0.15);
            transition: background 0.2s;
        }
        .btn-reset:hover {
            background: #e11d48;
        }
        .link-text {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #db2777;
            text-decoration: none;
            font-weight: 500;
        }
        .link-text:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <center>
        <h1><i><?php echo $general->site_title(); ?></i></h1>

        <div class="container-box">
            <?php
            if (isset($_REQUEST['msg']) && isset($_REQUEST['color'])) {
                $msg_color = ($_REQUEST['color'] == 'red') ? '#f43f5e' : '#10b981';
                echo "<p style='color:" . $msg_color . "; font-weight:bold; text-align:center; margin-top:0;'>" . $_REQUEST['msg'] . "</p>";
            }
            ?>
            <form action="process.php" method="POST">
                <fieldset>
                    <legend>New Registration..!</legend>
                    <table class="form-table">
                        <tr>
                            <td><b>First Name: </b></td>    
                            <td><input type="text" name="first_name" required></td>    
                        </tr>
                        <tr>
                            <td><b>Last Name: </b></td>    
                            <td><input type="text" name="last_name" required></td>    
                        </tr>
                        <tr>
                            <td><b>Email: </b></td>    
                            <td><input type="email" name="email" required></td>    
                        </tr>
                        <tr>
                            <td><b>Password: </b></td>
                            <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" style="padding-top: 15px;">
                                <input type="submit" name="register" value="Register Now" class="btn-submit">
                                <input type="reset" value="Cancel" class="btn-reset">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
            <a href="index.php" class="link-text">Already have an account? Login here</a>
        </div>
    </center>
</body>
</html>