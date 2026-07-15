<?php

// subjects marks
$maths = 70;
$urdu = 56;
$science = 80;
$english = 85;
$computer = 65;

// Total marks and obtained marks
$total_marks = 500;
echo "Total Marks: " . $total_marks . "<br>";

$obtained = $maths + $urdu + $science + $english + $computer;
echo "Obtained Marks: " . $obtained . "<br>";

// Percentage 
$percentage = ($obtained / $total_marks) * 100;
echo "Percentage: " . $percentage . "% <br>";

// 1st condition
if($maths < 40 || $urdu < 40 || $science < 40 || $english < 40 || $computer < 40) {
    echo "Status: Fail <br/>";
    echo "Grade: F <br/>";
}

// 2nd condition
if($maths >= 40 && $urdu >= 40 && $science >= 40 && $english >= 40 && $computer >= 40) {
    echo "Status: Pass <br/>";

    if($percentage >= 80) {
        echo "Grade: A+ <br>";
    }
    if($percentage >= 70 && $percentage < 80) {
        echo "Grade: A <br>";
    }
    if($percentage >= 60 && $percentage < 70) {
        echo "Grade: B <br>";
    }
    if($percentage >= 50 && $percentage < 60) {
        echo "Grade: C <br>";
    }
    if($percentage >= 40 && $percentage < 50) { 
        echo "Grade: D <br>";
    }
}


?>