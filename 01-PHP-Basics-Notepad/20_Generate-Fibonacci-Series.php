<?php

echo "<h1>Fibonacci Series</h1>";
echo "<p>Each number is the sum of the two preceding ones.</p>";

$a = 0;
$b = 1;

for($i = 1; $i <= 8; $i++) {
    $c = $a + $b;
    echo $c . " ";
    $a = $b;
    $b = $c;
}


echo "<hr>";
echo "<h1>Using While Loop</h1>";

$a = 0;
$b = 1;


$i = 1; 


while ($i <= 8) {
    $c = $a + $b;
    echo $c . " ";
    
    
    $a = $b;
    $b = $c;
    
    
    $i++; 
}
?>

