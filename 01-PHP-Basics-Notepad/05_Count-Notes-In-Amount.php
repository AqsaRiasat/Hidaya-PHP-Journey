<?php 

$amount = 575;
echo "Total Amount: ". $amount. "<br><br>";

// 500 ka note
$n500 = (int)($amount / 500);
$amount = $amount - ($n500 * 500);
echo "500 : " . $n500 . "<br>";

// 100 ka note
$n100 = (int)($amount / 100);
$amount = $amount - ($n100 * 100);
echo "100 : " . $n100 . "<br>";

// 50 ka note
$n50 = (int)($amount / 100);
$amount = $amount - ($n50 * 50);
echo "50 : " . $n50 . "<br>";

// 20 ka note
$n20 = (int)($amount / 20);
$amount = $amount - ($n20 * 20);
echo "20 : " . $n20 . "<br>";

// 10 ka note
$n10 = (int)($amount / 10);
$amount = $amount - ($n10 * 10);
echo "10 : " . $n10 . "<br>";

// 5 ke note
$n5 = (int)($amount / 5);
$amount = $amount - ($n5 * 5);
echo "5 : " . $n5 . "<br>";


?>