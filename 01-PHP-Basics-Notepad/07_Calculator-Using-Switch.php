
<?php 

echo "<h2>Calculator</h2>";

$number1 = 20;
$number2 = 10;
$operation = "-";

switch($operation) {

  case "+":
  $result = $number1 + $number2;
  echo "Addition: ". $result;
  break;

  case "-":
  $result = $number1 - $number2;
  echo "Subtraction: ". $result. "<br/>";
  break;

  case "*":
  $result = $number1 * $number2;
  echo "Multiplication: ". $result;
  break;

  case "/":
  if($number2 != 0) {
    $result = $number1 / $number2;
    echo "Division: ". $result;
  } else {
    echo "Errors can not divide by zero";
  }
  break;
  
  default: 
    echo "Invalid! use +, -, *, or /";
     break;
}

echo "Number 1: " . $number1 . "<br>";
echo "Number 2: " . $number2 . "<br>";
echo "Operation: " . $operation . "<br><br>";


?>