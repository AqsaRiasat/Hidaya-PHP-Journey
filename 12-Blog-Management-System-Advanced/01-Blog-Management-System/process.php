<?php
session_start();
require_once("require/connection.php");

if(isset($_REQUEST['register'])){
    extract($_REQUEST);
    $password_new = md5($password);

    $query = "INSERT INTO users (first_name,last_name,email,password,role_id)VALUES(?,?,?,?,?)";
    $stmt = mysqli_prepare($connect,$query);
    mysqli_stmt_bind_param($stmt,"ssssi",$first_name,$last_name,$email,$password_new,$role_id);
    $result = mysqli_stmt_execute($stmt);

    if($result){
        header("location:login_form.php?msg=Register Sucessfully.....!&color=darkgreen");
    }else{
        header("location:register_form.php?msg=Register Not Sucessfully.....!&color=red");
    }

} else if(isset($_REQUEST['login'])){
    extract($_REQUEST);
    $password_new = md5($password);

    $query = "SELECT * FROM users WHERE email=? AND password=?";
    $stmt = mysqli_prepare($connect,$query);
    mysqli_stmt_bind_param($stmt,"ss",$email,$password_new);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['users'] = $row;
        
        //  FILING LOGIC
        $email = $row['email'];
        $current_time = date("Y/m/d h:i:s A"); 
        
        // Ek simple text line banai  | ke sath
        $log_entry = $email . "|Login|" . $current_time . "\n";
        
        // logs.txt file mein data bhej diya 
        file_put_contents("logs.txt", $log_entry, FILE_APPEND);
    

        // Roles ke mutabiq redirect kya
        if($row['role_id'] == 1){
            header("location:admin/admin.php");
        }
        elseif($row['role_id'] == 2){
            header("location:teacher/teacher.php");
        }
        elseif($row['role_id'] == 3){
            header("location:student/student.php");
        }
    } else {
        header("location:login_form.php?msg=Invalid Username/Password....!");
    }
}
?>