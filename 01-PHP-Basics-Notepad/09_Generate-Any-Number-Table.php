<?php

echo "<h3>Table of 9 Using ForLoop</h3>";

$numb = 9;
for($i = 1; $i <= 10; $i++) {

 $result = $numb * $i;
 echo "$numb * $i = $result <br/><br/>";

}

echo "<h3>Same Table using WhileLoop</h3>";

$numb = 9;
$i = 1;

while ($i <= 10) { 
    
    $result = $numb * $i; 
    echo "$numb * $i = $result <br/><br/>";
    
    $i++; 
}

?>