<?php
session_start();

$students = [
    ["full_name" => "Ali Khan",    "user" => "ali",   "pass" => "111"],
    ["full_name" => "Saba Ahmed",  "user" => "saba",  "pass" => "222"],
    ["full_name" => "Zain Malik",  "user" => "zain",  "pass" => "333"],
    ["full_name" => "Hina Shah",   "user" => "hina",  "pass" => "444"]
];

extract($_REQUEST);

if($username == '' OR $password == ''){
    header("location: 11_Student-Portal-Page1.php?msg=fill all fields!");
    exit();
}

$found = false;

foreach($students as $st){
    if($st['user'] == $username && $st['pass'] == $password){
        $_SESSION['full_name'] = $st['full_name'];
        $_SESSION['username']  = $username;
        $_SESSION['password']  = $password;
        
        $found = true;
        break;
    }
}

if($found){
    header("location: 11_Student-Portal-Page3.php");
} else {
    header("location: 11_Student-Portal-Page1.php?msg=invalid Username/Password!");
}
?>