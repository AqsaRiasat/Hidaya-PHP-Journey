<?php
echo "<h2>Marksheet</h2>"; 

$maths = 70;
$english = 85;
$urdu = 80;
$computer = 85;
$science = 65;

$total_marks = 500;
$obtained_marks = $maths + $english + $urdu + $computer + $science;
$percentage = ($obtained_marks / $total_marks) * 100;

switch(true) {
    
    case ($maths < 40 || $english < 40 || $urdu < 40 || $computer < 40 || $science < 40):
        $grade = "FAIL";
        break;

 
    case ($percentage >= 80):
        $grade = "A1";
        break;

    case ($percentage >= 70):
        $grade = "A";
        break; 

    case ($percentage >= 60):
        $grade = "B";
        break;

    case ($percentage >= 50):
        $grade = "C";
        break;

    case ($percentage >= 40):
        $grade = "D";
        break;
      
    default:
        $grade = "FAIL";
        break;
}

echo "Total Marks: " . $total_marks . "<br/>";
echo "Obtained Marks: " . $obtained_marks . "<br/>";
echo "Percentage: " . $percentage . "%<br/><br/>";
echo "<b>Final Grade: " . $grade . "</b>";
?>