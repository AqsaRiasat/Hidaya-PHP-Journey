<?php

echo "<h2>Electercity Billing System</h2>";

$units = 450;
$total_bill = 0;

echo "Units Consumed: ". $units. "<br><br>";


switch(true){

  case ($units <= 100): 
  $total_bill = $units * 5;
  break;
  
  case ($units <= 300): 
  $total_bill = $units * 15;
  break;

  case ($units <= 200): 
  $total_bill = $units * 25;
  break;

  default:
  $total_bill = $units * 25;
  break;
}
 
 echo "Your Total Bill is R.s: ". $total_bill;

?>