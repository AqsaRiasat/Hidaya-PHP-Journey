<!DOCTYPE html>
<html>
<head>
    <title>Prime Numbers Listing</title>
</head>
<body>

    <h2>1. Prime Numbers Output (via JavaScript)</h2>
    <script>
        document.write("Prime Numbers between 1 and 50: <br><br>");
        for (var a = 2; a <= 50; a++) {
            var b = 2;

            while (a % b != 0) {
                b++;
            }

            if (a == b) {
                document.write(a + " , ");
            }
        }
    </script>

    <hr>

    <h2>2. Prime Numbers Output (via Pure PHP)</h2>
    <?php
    echo "Prime Numbers between 1 and 50: <br><br>";
    for ($a = 2; $a <= 50; $a++) {
        $b = 2;

        while ($a % $b != 0) {
            $b++;
        }

        if ($a == $b) {
            echo $a . " , ";
        }
    }
    ?>

</body>
</html>