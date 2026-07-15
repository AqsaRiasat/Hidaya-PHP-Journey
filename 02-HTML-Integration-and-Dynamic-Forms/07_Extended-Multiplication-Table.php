<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Extended Multiplication Table Grid</h1>
    <p>Generating dynamic mathematical tables in a 5-column grid layout using PHP loop control.</p>
    </center>
    
    <table border="1" cellpadding="10" align="center">
        <?php
        $a = 1;
        $b = 10;
        for($i = $a; $i <= $b; $i++) {
            ?>
            <td>
                <?php
                for($j = 1; $j <= 10; $j++) {
                    echo "$i * $j = " . ($i * $j) . "<br/>";
                }
                ?>
                </td>
                <?php
                if($i % 5 == 0 && $i != $b) {
                    echo "</tr><tr>";
                }
        }
        echo "</tr>";
        ?>
    </table>
</body>
</html>