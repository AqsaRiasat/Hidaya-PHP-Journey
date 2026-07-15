<?php
    $number1 = 20;
    $number2 = 10;

    echo "<h2>Simple Calculator</h2>";
    echo "Number 1: " . $number1 . "<br>";
    echo "Number 2: " . $number2 . "<br><br>";

    // Addition
    if ($number1 && $number2) {
        $add = $number1 + $number2;
        echo "Addition (+): " . $add . "<br>";
    }

    // Subtraction
    if ($number1 && $number2) {
        $sub = $number1 - $number2;
        echo "Subtraction (-): " . $sub . "<br>";
    }

    // Multiplication
    if ($number1 && $number2) {
        $mul = $number1 * $number2; 
        echo "Multiplication (*): " . $mul . "<br>";
    }

    // Division
    if ($number1 && $number2) {
        $div = $number1 / $number2;
        echo "Division (/): " . $div . "<br>";
    }
?>