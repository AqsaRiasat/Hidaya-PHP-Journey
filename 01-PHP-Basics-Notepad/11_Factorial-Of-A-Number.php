<?php 


echo "<h3>Factorial of a number 5</h3>";
$n = 5; 
$fact = 1;
$i = 2;

echo "1";
while($i <= $n) {
 echo "*". $i;
 
 $fact = $fact * $i;
 $i++;
}
 echo "=". $fact; 

// initialize $fact with 1 because multiplying any number by 0 results in 0.
// manually print the first number "1", the loop starts from 2 to build the sequence.
// the current value of $i is multiplied by the previous result stored in $fact.
// concatenate the multiplication sign * before each number to display the result.

?>