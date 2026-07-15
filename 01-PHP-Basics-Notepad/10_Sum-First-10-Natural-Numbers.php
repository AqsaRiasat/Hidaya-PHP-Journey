<?php

echo "<h3>Sum of First 10 Natural Numbers</h3>";

$sum = 1;

$i = 2;   

echo "1"; 

while ($i <= 10) {
   
    echo "+" . $i;
    $sum = $sum + $i;
  
    $i++;
}
  echo "=" . $sum;


// Initialize outside the loop prints echo "1"; before the loop starts. This is because the first number should not have a + sign in front of it.

// Starting the loop from 2 We set the counter $i = 2;. the number 1 is already printed, the loop begins from the second natural number.

// Concatenate the Plus sign Inside the while loop, it ensures that every number is followed by a + sign.

// Once the loop finishes after $i reaches 10 it print the equal sign and the total sum using echo "=" . $sum;.

?>