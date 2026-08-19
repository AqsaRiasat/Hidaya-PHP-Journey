<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <center>
    <h1 style="color:#1a5276;">Final Checkout</h1>
    <table border="1" width="80%" cellpadding="12" style="border-collapse: collapse; font-family: Arial;">
        <tr style="background: #1a5276; color: white;">
            <th>Product Name</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Sub Total</th>
        </tr>
        <?php
        $grand = 0;
        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
            foreach($_SESSION['cart'] as $item){
                $sub = $item['p'] * $item['q'];
                $grand += $sub;
                echo "<tr align='center'>
                        <td>{$item['n']}</td>
                        <td>{$item['p']}</td>
                        <td>{$item['q']}</td>
                        <td>$sub</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4' align='center'>Cart is empty!</td></tr>";
        }
        ?>
        <tr style="background: #f1c40f; font-weight: bold; font-size: 20px;">
            <td colspan="3" align="right">GRAND TOTAL BILL:</td>
            <td align="center">Rs. <?php echo $grand; ?></td>
        </tr>
    </table>
    <br>
    <a href="12_Shopping-Store-Page3.php" style="padding:10px; background:#1a5276; color:white; text-decoration:none;">Continue Shopping</a>
    <a href="12_Shopping-Store-Page4.php" style="padding:10px; background:red; color:white; text-decoration:none;">Logout</a>
    </center>
</body>
</html>