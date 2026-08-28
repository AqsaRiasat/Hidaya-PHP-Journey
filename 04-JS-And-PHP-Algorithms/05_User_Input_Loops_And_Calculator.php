<!DOCTYPE html>
<html>
<head>
    <title>Interactive JS Algorithms</title>
</head>
<body>

    <h2>1. Dynamic User Input Calculator</h2>
    <script>
        var number1 = parseFloat(prompt("Enter First Number"));
        var operator = prompt("Enter Operator (+, -, *, /)");
        var number2 = parseFloat(prompt("Enter Second Number"));

        if (operator == "+") {
            document.write("Result: " + (number1 + number2));
        }
        
        if (operator == "-") {
            document.write("Result: " + (number1 - number2));
        }
        
        if (operator == "*") {
            document.write("Result: " + (number1 * number2));
        }
        
        if (operator == "/") {
            if (number2 != 0) {
                document.write("Result: " + (number1 / number2));
            }
            if (number2 == 0) {
                document.write("Error: Cannot divide by zero");
            }
        }
    </script>

    <hr>

    <h2>2. Sum of Even Numbers (Stop on Odd Input)</h2>
    <script>
        var sum = 0;

        while (true) {
            var num = parseInt(prompt("Enter Even Number:"));

            if (num % 2 != 0) {
                break; 
            }

            sum = sum + num;
            document.write("Added: " + num + "<br>");
        }

        document.write("<h3>Total Sum: " + sum + "</h3>");
    </script>

    <hr>

    <h2>3. Multiplication Table with Confirmation</h2>
    <script>
        var num = prompt("Enter Number:");
        var check = confirm("Print Table?");

        if (check) {
            document.write("<h3>Table of " + num + "</h3>");

            for (var i = 1; i <= 10; i++) {
                document.write(num + " x " + i + " = " + (num * i) + "<br>");
            }
        }
    </script>

</body>
</html>