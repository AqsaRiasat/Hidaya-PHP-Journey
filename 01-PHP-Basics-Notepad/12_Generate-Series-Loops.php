<?php

echo "<h2>Genenrate Number Series Using While Loop</h2>";

// Series 1
$i = 1;
echo "1)";
while($i <= 5) {
    echo ($i * $i) . " ";
    $i++;
}

// Series 2
$num = 1;   
$add = 2;   
$count = 1; 

echo "<br/><br/> 2) ";
while ($count <= 6) {
    echo $num . " ";
    $num = $num + $add; 
    $add++;             
    $count++;
}


// Series 3
$i = 50;
echo "<br/><br/> 3) ";

while ($i >= 10) {
    echo $i . " ";
    $i = $i - 10; // 10 ka gap kam karte jayen
}


// Series 4
$i = 2;
echo "<br><br> 4) ";
while ($i <= 6) {
    echo ($i * ($i + 1)) . " ";
    $i++;
}


echo "<h2>Using For Loop</h2>";

// Series 1
 echo "1) ";
  
 for($i = 1; $i <= 5; $i++) {
 echo ($i * $i ). " ";
}

// Series 2
 echo "<br/><br> 2) ";
 
 $num = 1;
 for($add = 2; $add <= 7; $add++) {
 echo  $num . " ";
 $num = $num + $add;
}

// Series 3 
 echo "<br/><br/> 3) ";
 
 $i = 50;
 for($i = 50; $i >= 10; $i = $i - 10) {
 echo $i . " ";
 
}

// Series 4
  echo "<br/><br/> 4) ";

 for ($i = 2; $i <= 6; $i++) {
    echo ($i * ($i + 1)) . " ";
}


?>
