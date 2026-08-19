<?php
echo "<h1>Assignments using Functions</h1>";

// 1. Custom Bubble Sort Function
function my_sorting($array_data) {
    $n = count($array_data);
    for ($i = 0; $i < $n; $i++) { 
        for ($j = 0; $j < $n - 1; $j++) { 
            if ($array_data[$j] > $array_data[$j + 1]) {
                // Swapping logic
                $temp = $array_data[$j];       
                $array_data[$j] = $array_data[$j + 1];  
                $array_data[$j + 1] = $temp;  
            }
        }
    }
    return $array_data;
}

echo "<h3>1. Sorting Result:</h3>";
$my_array = [3, 5, 8, 21, 1, 8, 5];
$sorted = my_sorting($my_array);
print_r($sorted);
echo "<hr>";


// 2. Custom Calculator Function
function my_calculator($n1, $n2, $op) {
    switch($op) {
        case "+": return $n1 + $n2;
        case "-": return $n1 - $n2;
        case "*": return $n1 * $n2;
        case "/": 
            if($n2 != 0) return $n1 / $n2;
            else return "Error: Cannot divide by zero";
        default: return "Invalid Operation";
    }
}

echo "<h3>2. Calculator Result:</h3>";
echo "Subtraction: " . my_calculator(20, 10, "-");
echo "<hr>";


// 3. Marksheet Generation Function
function my_marksheet($m, $u, $s, $e, $c) {
    $total = 500;
    $obtained = $m + $u + $s + $e + $c;
    $per = ($obtained / $total) * 100;

    echo "Total Marks: $total <br>";
    echo "Obtained: $obtained <br>";
    echo "Percentage: $per % <br>";

    if($m < 40 || $u < 40 || $s < 40 || $e < 40 || $c < 40) {
        echo "Status: Fail <br> Grade: F";
    } else {
        echo "Status: Pass <br>";
        if($per >= 80) echo "Grade: A+";
        elseif($per >= 70) echo "Grade: A";
        elseif($per >= 60) echo "Grade: B";
        else echo "Grade: C";
    }
}

echo "<h3>3. Marksheet Result:</h3>";
my_marksheet(70, 56, 80, 85, 65);
echo "<hr>";


// 4. Custom Array Sum Function
function calculate_sum($list) {
    $total = 0; 
    foreach($list as $number) {
        $total = $total + $number; 
    }
    return $total; 
}

$my_numbers = [10, 20, 30, 40, 50];

echo "<h3>4. Array Sum:</h3>";
echo "The Total Sum is: " . calculate_sum($my_numbers);

?>