<?php


echo "<h3>Prime Numbers between 2 and 15:</h3>";

for($a= 2; $a <= 15; $a++) {
    $b = 2;
    while($a % $b  != 0) {
        $b++;
    }
    
    if($a == $b) {
        echo $a . " ";
    }
}


echo "<h3>Using only for loop and if:</h3>";

for($a = 2; $a <= 15; $a++) {
    for($b = 2; $b < $a; $b++) {
        if($a % $b == 0) {
            break;
        }
    }

    if($b == $a) {
        echo $a . " ";
    }
}


?>