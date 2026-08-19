<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci & Factorial Algorithms</title>
</head>
<body>

    <h2>1. Fibonacci Series (JavaScript & PHP)</h2>
    
    <script>
        var limit = 10; 
        var a = 0;      
        var b = 1;      
        var c;          

        document.write("<b>JS Output:</b> ");

        for (var i = 1; i <= limit; i++) {
            document.write(a + " "); 

            c = a + b;      
            a = b;          
            b = c;         
        }
        document.write("......<br><br>");
    </script>

    <?php
    $limit = 10;
    $a = 0;
    $b = 1;

    echo "<b>PHP Output:</b> ";
    for ($i = 1; $i <= $limit; $i++) {
        echo $a . " ";
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    echo "......";
    ?>

    <hr>

    <h2>2. Factorial of a Number (JavaScript & PHP)</h2>

    <script>
        var n = 5;
        var fact = 1;
        var i = 2;

        document.write("<h3>Factorial using JS (Number: " + n + ")</h3>");
        document.write("1");

        while(i <= n) {
            document.write(" * " + i);
            fact = fact * i;
            i++;
        }
        document.write(" = " + fact);
    </script>

    <br><br>

    <?php
    $n = 5;
    $fact = 1;
    $i = 2;

    echo "<h3>Factorial using PHP (Number: " . $n . ")</h3>";
    echo "1";

    while($i <= $n) {
        echo " * " . $i;
        $fact = $fact * $i;
        $i++;
    }
    echo " = " . $fact;
    ?>

</body>
</html>