<?php
session_start();
$students = [
    ["name" => "Ali Khan", "user" => "ali", "pass" => "111"],
    ["name" => "Saba Ahmed", "user" => "saba", "pass" => "222"],
    ["name" => "Zain Malik", "user" => "zain", "pass" => "333"],
    ["name" => "Hina Shah", "user" => "hina", "pass" => "444"]
];
$u = $_POST['username'] ?? '';
$p = $_POST['password'] ?? '';
$found = false;

foreach($students as $st){
    if($st['user'] == $u && $st['pass'] == $p){
        $_SESSION['username'] = $u;
        $_SESSION['full_name'] = $st['name'];
        if(!isset($_SESSION['cart'])) { $_SESSION['cart'] = []; }
        $found = true;
        break;
    }
}
if($found){ header("location: 12_Shopping-Store-Page3.php"); }
else { header("location: 12_Shopping-Store-Page1.php?msg=Wrong Details!"); }
?>