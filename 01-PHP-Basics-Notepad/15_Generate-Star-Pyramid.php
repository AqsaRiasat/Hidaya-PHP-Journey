<?php

for ($a = 1; $a <= 6; $a++) {
   
    for($b = $a; $b < 6; $b++) {
        
        echo "&nbsp;&nbsp;"; 
    } 
   
    for($c = 1; $c <= (2 * $a - 1); $c++ ) {
        echo "*";
    }
    
    echo "<br/>";
}

?>