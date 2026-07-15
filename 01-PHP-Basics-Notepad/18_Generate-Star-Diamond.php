<?php

echo "<h1>Star Diamond Shape</h1>";
echo "<p>Generate a star diamond pattern using nested loops.</p>";
echo "<hr>";

echo "<h3>Star Diamond Shape using For Loop</h3>";

for($a = 1; $a <= 5; $a++) {
    for($b = 1; $b <= (5- $a); $b++) {
        echo "&nbsp;&nbsp;";
    }
    for($c = 1; $c <= $a; $c++) {
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}

for($a = 5; $a >= 1; $a--) {
    for($b = 1; $b <= (5 - $a); $b++) {
        echo "&nbsp;&nbsp;";
    }
    for($c = 1; $c <= $a; $c++) {
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}



echo "<h3>Same Star Diamond Shape using While Loop</h3>";

$a = 1; 
while($a <= 5) {
    $b = 1; 
    while($b <= (5 - $a)) {
        echo "&nbsp;&nbsp;";
        $b++;
    }
    $c = 1;
    while($c <= $a) {
        echo "*&nbsp;&nbsp;";
        $c++;
    }
    echo "<br>";
    $a++;
}

$a = 5;
while($a >= 1) {
    $b = 1;
    while($b <= (5 - $a)) {
        echo "&nbsp;&nbsp;";
        $b++;
    }
    $c = 1;
    while($c <= $a) {
        echo "*&nbsp;&nbsp;";
        $c++;
    }
    echo "<br>";
    $a--;
}
?>