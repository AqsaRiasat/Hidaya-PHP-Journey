<?php
echo "<h1>Dynamic List with Logical Conditons</h1>";
echo "<p>Generating mathematical sequences (Even, Odd, Squares) inside HTML lists dynamically based on type selection.</p>";
echo "<hr>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lists with Php</h1>
    <?php
    $type = "circle"; 
    ?>

    <ul type= "<?php echo $type; ?>">
        <?php
        if($type == "square" || $type == "disc" || $type == "circle") {

            for($i = 1; $i <= 10; $i++) {
                if($type == "square") {
                    $num = $i * 2;
                }

                else if($type == "circle") {
                    $num = ($i * 2) - 1;
                } 

                else if($type == "disc") {
                    $num = $i * $i;
                }
                ?>

                <li><?php echo $num;?></li>
                <?php
            } 
        }

        else {
            echo " not a valid type";
        }
        ?>
    </ul>
</body>
</html>