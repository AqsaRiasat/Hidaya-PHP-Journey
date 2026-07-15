<?php

if(isset($_POST['submit'])) {
    $count = 0;

    if(isset($_POST['p1'])) $count++;
    if(isset($_POST['p2'])) $count++;
    if(isset($_POST['p3'])) $count++;
    if(isset($_POST['p4'])) { $count++; }

    $agree = isset($_POST['p5']);

    if ($count >= 3 && $agree == true) {
        echo "You are selected";
    }
    else {
        echo "fail";
    }
}



?>