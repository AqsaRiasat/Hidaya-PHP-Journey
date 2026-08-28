<?php
require_once("Time.php");

echo "<h3>Test Case 1: Default Time</h3>";
$t1 = new Time();
$t1->printTime(); 

echo "<h3>Test Case 2: Custom Time (1:3:4)</h3>";
$t2 = new Time(1, 3, 4);
$t2->printTime(); 

echo "<h3>Test Case 3: Testing nextSecond() on 23:59:59</h3>";
$t3 = new Time(23, 59, 59);
echo "Before: ";
$t3->printTime();
$t3->nextSecond();
echo "After (Should be 00:00:00): <br/>";
$t3->printTime(); 

?>