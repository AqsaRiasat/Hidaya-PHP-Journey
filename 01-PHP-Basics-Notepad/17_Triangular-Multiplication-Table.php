<?php

echo "<h3>Triangular Multiplication Table</h3>";

echo "<h4>Print a triangular multiplication table for 0 through 5.</h4>";

echo "<hr>";

echo "<h4>Using for loop:</h4>";
for($a = 0; $a <= 5; $a++) {
    for ($b = 0; $b <= $a; $b++) {
        echo ($a * $b) . " ";
    }
    echo "<br>";
}


echo "<h4>Using while loop:</h4>";
$a = 0;
while($a <= 5){
    $b = 0; 
    while($b <= $a) {
        echo $a * $b . " ";
        $b++;
    }
    echo "<br>";
    $a++;
}


?>