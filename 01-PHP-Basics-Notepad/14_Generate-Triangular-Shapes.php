<?php 
 
echo  "a) Star Triangular Shape <br/>";

for($a = 1; $a <= 5; $a++) {
  for($b = 1; $b <= $a; $b++) {
 echo  "*";
  }
echo "<br/>";
}

echo "<br/>";
echo  "b) Alphabetical Triangular Shape <br/>";
 
for($a = 'a'; $a <= 'e'; $a++) {
  for($b = 'a'; $b <= $a; $b++) {
  echo $b;
 }
echo "<br/>";
}

echo "<br/>";
echo  "c) Numeric Triangular Shape and its Multiplication<br/>";

for($a= 1; $a <= 5; $a++) {
$numb = 1;
 for($b = 1; $b <=  $a; $b++) {
 echo  $b. " ";
 $multiplication = $numb * $b;
}
echo  "=". $multiplication;
echo "<br/>";
}

echo "<br>";
echo  "d) Numeric Triangular Shape <br/>";

for($a= 1; $a <= 5; $a++) {
$numb = 1;
 for($b = 1; $b <=  $a; $b++) {
 echo  $b. " ";
}
echo "<br/>";
}
?>