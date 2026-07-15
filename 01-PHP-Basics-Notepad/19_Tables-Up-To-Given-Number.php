<?php
echo "<h1>Multiplication Tables</h1>";

$limit = 10; 


echo "<table border='1' cellpadding='20' cellspacing='0'>";
echo "<tr>"; 


for ($a = 2; $a <= $limit; $a++) {
    
    echo "<td valign='top'>"; 
    echo "<strong>Table of $a</strong><br/><br/>";
    
    
    for ($b = 1; $b <= 10; $b++) {
        $c = $a * $b;
        echo "$a &times; $b = $c <br/>";
    }
    
    echo "</td>"; 
}

echo "</tr>"; 
echo "</table>";
?>