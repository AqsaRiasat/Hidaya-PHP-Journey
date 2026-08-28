<?php
session_start();

// Check karenge ke kya user session mein maujood hai 
if(isset($_SESSION['users']['email'])){
    $email = $_SESSION['users']['email']; // User ki email uthai
    $current_time = date("Y/m/d h:i:s A"); // Logout ka time uthaya
    
    // Ek text line banai  | ke sath (Activity: Logout)
    $log_entry = $email . "|Logout|" . $current_time . "\n";
    
    // logs.txt file mein data bhej diya
    file_put_contents("logs.txt", $log_entry, FILE_APPEND);
}

// Session ko khatam kya aur login page par redirect kya
session_destroy();
header("location:login_form.php?msg=Logout Successfully...!&color=green");
?>