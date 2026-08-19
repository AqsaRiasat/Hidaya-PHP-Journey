<!DOCTYPE html>
<html>
<head>
    <title>Calculate Power using Recursion</title>
</head>
<body>

    <h2>Calculate Power using Recursion</h2>

    <form method="POST">
        <label>Enter Base:</label>
        <input type="number" name="base" required placeholder="e.g. 2">
        <br><br>
        <label>Enter Power:</label>
        <input type="number" name="power" required placeholder="e.g. 3">
        <br><br>
        <button type="submit" name="calculate">Get Result</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['calculate'])) {
        $base = $_POST['base'];
        $power = $_POST['power'];

        // Recursive Function for Power Calculation
        function find_power($b, $p) {
            // Base Condition (To stop recursion)
            if ($p == 0) {
                return 1;
            }
            // Recursive Step
            return $b * find_power($b, $p - 1);
        }

        $result = find_power($base, $power);

        echo "<h3>Result:</h3>";
        echo "<b>Base:</b> " . $base . "<br>";
        echo "<b>Power:</b> " . $power . "<br>";
        echo "<b>Final Result:</b> " . $result;
    }
    ?>

</body>
</html>