<!DOCTYPE html>
<html>
<head>
    <title>Calculator Algorithms</title>
</head>
<body>

    <!-- JavaScript Calculators -->
    <script>
        var number1 = 20;
        var number2 = 10;
        var operation = "+";
        var result;

        document.write("<h2>JS Calculator using Switch</h2>");
        document.write("Number 1: " + number1 + "<br>");
        document.write("Number 2: " + number2 + "<br><br>");

        switch(operation) {
            case "+":
                result = number1 + number2;
                document.write("Addition: " + result);
                break;
            case "-":
                result = number1 - number2;
                document.write("Subtraction: " + result);
                break;
            case "*":
                result = number1 * number2;
                document.write("Multiplication: " + result);
                break;
            case "/":
                if(number2 != 0) {
                    result = number1 / number2;
                    document.write("Division: " + result);
                } else {
                    document.write("Error: Cannot divide by zero");
                }
                break;
            default:
                document.write("Invalid Operation");
                break;
        }
    </script>

    <script>
        var number1 = 20;
        var number2 = 10;
        var operation = "-"; 
        var result;

        document.write("<h2>JS Calculator using Only If</h2>");

        if (operation == "+") { result = number1 + number2; document.write("Addition: " + result); }
        if (operation == "-") { result = number1 - number2; document.write("Subtraction: " + result); }
        if (operation == "*") { result = number1 * number2; document.write("Multiplication: " + result); }
        if (operation == "/") {
            if (number2 != 0) { result = number1 / number2; document.write("Division: " + result); }
            if (number2 == 0) { document.write("Error: Cannot divide by zero"); }
        }

        document.write("<br><br>Number 1: " + number1 + "<br>Number 2: " + number2 + "<br>Operation: " + operation);
    </script>

    <hr>

    <!-- Equivalent PHP Calculator -->
    <h2>PHP Equivalent Calculator (Switch)</h2>
    <?php
    $num1 = 20;
    $num2 = 10;
    $op = "*";

    switch($op) {
        case "+": echo "Result: " . ($num1 + $num2); break;
        case "-": echo "Result: " . ($num1 - $num2); break;
        case "*": echo "Result: " . ($num1 * $num2); break;
        case "/": 
            if($num2 != 0) echo "Result: " . ($num1 / $num2);
            else echo "Error: Divide by zero";
            break;
        default: echo "Invalid Operation"; break;
    }
    ?>

</body>
</html>