<?php
session_start();
if(isset($_POST['add'])){
    $_SESSION['cart'][] = ["n"=>$_POST['name'], "p"=>$_POST['price'], "q"=>$_POST['qty']];
    echo "<script>alert('Added!');</script>";
}
$cat = $_GET['cat'] ?? 'General';
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        .header {
            background: #1a5276;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .item-box {
            border: 1px solid #ccc;
            width: 180px;
            padding: 15px;
            float: left;
            margin: 15px;
            text-align: center;
            border-radius: 8px;
        }

        .item-box img {
            width: 120px;
            height: 100px;
        }

        .add-btn {
            background: #1a5276;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Section:
            <?php echo $cat; ?>
        </h2>
    </div>
    <br><a href="12_Shopping-Store-Page3.php" style="margin:20px;">&larr; Back to Categories</a>
    <hr>
    <?php
    $products = [
        "Grocery" => [
            ["n"=>"Sugar", "p"=>150, "img"=>"https://cdn-icons-png.flaticon.com/512/2316/2316654.png"],
            ["n"=>"Rice", "p"=>300, "img"=>"https://cdn-icons-png.flaticon.com/512/2830/2830202.png"]
        ],
        "DryFruits" => [
            ["n"=>"Almonds", "p"=>1200, "img"=>"https://cdn-icons-png.flaticon.com/512/2909/2909774.png"]
        ]
    ];
    
    $display = $products[$cat] ?? [["n"=>"Item X", "p"=>500, "img"=>"https://cdn-icons-png.flaticon.com/512/679/679821.png"]];

    foreach($display as $i){ ?>
    <div class="item-box">
        <img src="<?php echo $i['img']; ?>"><br>
        <b>
            <?php echo $i['n']; ?>
        </b><br>
        Rs.
        <?php echo $i['p']; ?><br><br>
        <form method="POST">
            <input type="hidden" name="name" value="<?php echo $i['n']; ?>">
            <input type="hidden" name="price" value="<?php echo $i['p']; ?>">
            Qty: <input type="number" name="qty" value="1" min="1" style="width:40px;"><br><br>
            <input type="submit" name="add" value="Add to Cart" class="add-btn">
        </form>
    </div>
    <?php } ?>
</body>

</html>