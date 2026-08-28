<?php
require_once("Bank.php");
$obj = new Bank();

if (isset($_POST['btn_create'])) {
    $obj->user_information($_POST['u_name'], $_POST['u_email'], $_POST['u_phone'], $_POST['u_acc'], $_POST['u_bal']);
    echo "<p class='alert-msg'>Account Created Successfully!</p>";
}

if (isset($_POST['btn_deposit'])) {
    $obj->deposit($_POST['t_acc'], $_POST['t_amount']);
    echo "<p class='alert-msg'>Amount Deposited!</p>";
}

if (isset($_POST['btn_withdraw'])) {
    $obj->withdraw($_POST['t_acc'], $_POST['t_amount']);
    echo "<p class='alert-msg'>Amount Withdrawn!</p>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bank Assignment</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            padding: 30px;
            margin: 0;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-container {
            width: 380px;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 0 auto 25px auto;
            background-color: #ffffff;
            border-radius: 8px;
        }

        .form-container h3 {
            margin-top: 0;
            color: #444;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
        }

        .form-container label {
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="number"] {
            display: block;
            width: 93%;
            margin: 5px 0 15px 0;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fafafa;
        }

        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #333;
            color: white;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #555;
        }

        .alert-msg {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 10px;
            width: 380px;
            margin: 10px auto;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
        }

        .receipt-box {
            font-family: 'Courier New', Courier, monospace;
            font-size: 15px;
            margin: 20px auto;
            padding: 20px;
            border: 2px dashed #555;
            background-color: #ffffe0;
            width: 480px;
            border-radius: 4px;
            line-height: 1.6;
        }

        .receipt-box h4 {
            text-align: center;
            margin-top: 0;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>

    <h2>Bank Management System</h2>

    <div class="form-container">
        <h3>Open New Account</h3>
        <form method="POST">
            <label>Full Name:</label>
            <input type="text" name="u_name" required />

            <label>Email Address:</label>
            <input type="email" name="u_email" required />

            <label>Phone Number:</label>
            <input type="text" name="u_phone" required />

            <label>Account Number:</label>
            <input type="text" name="u_acc" required />

            <label>Initial Balance:</label>
            <input type="number" name="u_bal" required />

            <input type="submit" name="btn_create" value="Create Account" />
        </form>
    </div>

    <div class="form-container">
        <h3>Deposit / Withdraw</h3>
        <form method="POST">
            <label>Account Number:</label>
            <input type="text" name="t_acc" required />

            <label>Enter Amount:</label>
            <input type="number" name="t_amount" required />

            <input type="submit" name="btn_deposit" value="Deposit Money"
                style="background-color: #28a745; margin-bottom: 8px;" />
            <input type="submit" name="btn_withdraw" value="Withdraw Money" style="background-color: #dc3545;" />
        </form>
    </div>

    <div class="form-container">
        <h3>Search Account</h3>
        <form method="GET">
            <label>Account Number:</label>
            <input type="text" name="search" required />

            <input type="submit" value="Show Details" style="background-color: #ffc107; color: black;" />
        </form>
    </div>

    <?php
    if (isset($_GET['search'])) {
        $obj->show_user_account_information($_GET['search']);
    }
    ?>

</body>

</html>