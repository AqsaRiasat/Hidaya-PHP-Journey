<?php

// Swap two variables without third variable (swap means exchange value of two variables)

// 1st example
$a = 20;
$b = 70;

echo "Before swapping: a = $a, b = $b <br/>";

$a = $a + $b; // 20 + 70 = 90
$b = $a - $b; // 90 - 70 = 20
$a = $a - $b; // 90 - 20 = 70

echo "After swapping: a = $a, b = $b <br/><br/>";


// 2nd example
$x = 40;
$y = 80;

echo "Before swapping: x = $x, y = $y <br/>";

$x = $x + $y; // 40 + 80 = 120
$y = $x - $y; // 120 - 80 = 40
$x = $x - $y; // 120 - 40 = 80

echo "After swapping: x = $x, y = $y <br/><br/>";


// 3rd example
$a = -10;
$b = 5;

echo "Before swapping: a = $a, b = $b <br/>";

$a = $a + $b; // -10 + 5 = -5
$b = $a - $b; // -5 - 5 = -10
$a = $a - $b; // -5 - (-10) = -5 + 10 = 5

echo "After swapping: a = $a, b = $b <br/><br/>";


// 5th example
$m = 10;
$n = 5;

echo "Before swapping: m = $m, n = $n <br/>";

$m = $m * $n; // 10 * 5 = 50
$n = $m / $n; // 50 / 5 = 10
$m = $m / $n; // 50 / 10 = 5

echo "After swapping: m = $m, n = $n <br/><br/>";

?>