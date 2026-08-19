<?php session_start(); if(!isset($_SESSION['username'])){ header("location: 12_Shopping-Store-Page1.php"); } ?>
<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        .header {
            background: #1a5276;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .container {
            display: flex;
            min-height: 500px;
        }

        .sidebar {
            width: 20%;
            background: #ebedef;
            border-right: 2px solid #ccc;
            padding: 20px;
        }

        .main {
            width: 80%;
            padding: 30px;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            background: #fff;
        }

        .cat-card {
            border: 2px solid #1a5276;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            color: black;
            width: 140px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .cat-card:hover {
            background: #f1c40f;
        }

        .cat-card img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .footer {
            background: #333;
            color: white;
            padding: 10px;
            text-align: right;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="header">
        Welcome:
        <?php echo $_SESSION['full_name']; ?> | <a href="12_Shopping-Store-Page4.php"
            style="color:red; text-decoration:none;">Logout</a>
    </div>
    <div class="container">
        <div class="sidebar">
            <h3 style="border-bottom: 2px solid #1a5276;">Categories</h3>
            <p>General Items</p>
            <p>Cosmetics</p>
            <p>Grocery</p>
            <p>Dry Fruits</p>
        </div>
        <div class="main">
            <a href="12_Shopping-Store-Page5.php?cat=General" class="cat-card">
                <img src="https://cdn-icons-png.flaticon.com/512/3081/3081840.png"><br>General
            </a>
            <a href="12_Shopping-Store-Page5.php?cat=Cosmetics" class="cat-card">
                <img src="https://cdn-icons-png.flaticon.com/512/3163/3163231.png"><br>Cosmetics
            </a>
            <a href="12_Shopping-Store-Page5.php?cat=Grocery" class="cat-card">
                <img src="https://cdn-icons-png.flaticon.com/512/3724/3724720.png"><br>Grocery
            </a>
            <a href="12_Shopping-Store-Page5.php?cat=DryFruits" class="cat-card">
                <img src="https://cdn-icons-png.flaticon.com/512/1625/1625099.png"><br>Dry Fruits
            </a>
        </div>
    </div>
    <div class="footer">
        <a href="12_Shopping-Store-Page6.php"
            style="color: white; margin-right: 40px; text-decoration: none; font-weight: bold;">VIEW CART / CHECKOUT
            &rarr;</a>
    </div>
</body>

</html>