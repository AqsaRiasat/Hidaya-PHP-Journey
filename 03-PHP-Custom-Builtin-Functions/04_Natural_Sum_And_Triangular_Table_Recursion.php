<?php

echo "<h3>Sum of First 10 Natural Numbers</h3>";

// 1. Recursive Function to Sum First 10 Natural Numbers
function sum_recursive($i, $total) {
    if ($i > 10) {
        echo " = " . $total;
        return;
    }

    if ($i == 1) {
        echo $i;
    } else {
        echo "+" . $i;
    }

    $total = $total + $i;

    // Recursive Call
    sum_recursive($i + 1, $total);
}

sum_recursive(1, 0);

echo "<hr>";


echo "<h3>Triangular Multiplication Table</h3>";
echo "Print a triangular multiplication table for 0 through 5:<br/><br/>";

// 2. Inner Recursive Function for Columns
function print_columns($a, $b) {
    if ($b > $a) {
        return;
    }
    echo ($a * $b) . " ";

    print_columns($a, $b + 1);
}

// 3. Outer Recursive Function for Rows
function print_rows($a) {
    if ($a > 5) {
        return;
    }
    
    print_columns($a, 0);
    echo "<br/>";

    print_rows($a + 1);
}

// Start Row Recursion from 0
print_rows(0);

?>