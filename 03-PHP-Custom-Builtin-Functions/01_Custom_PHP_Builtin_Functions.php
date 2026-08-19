<?php

// a) strtoupper
function my_strtoupper($word) {
    $output = "";
    for ($index = 0; isset($word[$index]); $index++) {
        $letter = $word[$index]; 
        if ($letter >= 'a' && $letter <= 'z') {
            $output .= chr(ord($letter) - 32); 
        } else {
            $output .= $letter;
        }
    }
    return $output;
}
echo "<b>a) strtoupper:</b> " . my_strtoupper("hidaya jamshoro"); 

echo "<hr>";

// b) strlen
function my_strlen($text) {
    $count = 0;
    while(isset($text[$count])) {
        $count++;
    }
    return $count;
}
echo "<b>b) strlen:</b> " . my_strlen("Hidaya Institute Of Technology"); 

echo "<hr>";

// c) strrev
function my_strrev($text) {
    $reverse = "";
    $length = my_strlen($text); 
    for($i = $length - 1; $i >= 0; $i--) {
        $reverse .= $text[$i];
    }
    return $reverse;
}
echo "<b>e) strrev:</b> " . my_strrev("hist");

echo "<hr>";

// d) range
function my_range($start, $end) {
    $list = [];
    for($i = $start; $i <= $end; $i++) {
        $list[] = $i;
    }
    return $list;
}
echo "<b>f) range:</b> ";
print_r(my_range(1, 5)); 

echo "<hr>";

// e) implode
function my_implode($joint, $array) {
    $str = "";
    foreach($array as $index => $value) {
        $str .= $value;
        if(isset($array[$index + 1])) {
            $str .= $joint;
        }
    }
    return $str;
}
$arr = ["Ali", "Saba", "Zain"];
echo "<b>b) implode:</b> " . my_implode("-", $arr); 

echo "<hr>";

// f) explode
function my_explode($delimiter, $text) {
    $result = [];
    $temp = "";
    for($i=0; isset($text[$i]); $i++) {
        if($text[$i] == $delimiter) {
            $result[] = $temp;
            $temp = "";
        } else {
            $temp .= $text[$i];
        }
    }
    $result[] = $temp; 
    return $result;
}
echo "<b>c) explode:</b> ";
print_r(my_explode(" ", "I Love PHP")); 

?>