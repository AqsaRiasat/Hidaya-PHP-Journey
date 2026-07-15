<?php

$i = 1;
$odd = "";    //store odd numbers
$even = "";  //store even numbers

while($i <= 100) {

  $odd = $odd. $i . " ";   // abhe $i 1 hai means odd
  $i++; //increment hue 2 hogya

  $even = $even . $i . " ";   // ab 2 even hai
  $i++;   // phr increment hue 3 hogya jo odd hai ic trha loop chlti rhegi 100 tk or chek hota rhega even odd number

}

//print krwaden ab
 
echo "<h4>Odd Numbers<h4>". $odd. "<br/>";
echo "<h4>Even Numbers</h4>". $even;

 ?>