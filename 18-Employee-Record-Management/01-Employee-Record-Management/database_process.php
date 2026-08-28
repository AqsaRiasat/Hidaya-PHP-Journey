<?php
require_once("database_setting.php");
require_once("database_connection.php");

$database_connect = new database(HOSTNAME, USER, PASSWORD, DATABASE);

if(isset($_POST['addStudent'])){

	$first_name   = $database_connect->safeString($_POST['first_name']);
	$last_name    = $database_connect->safeString($_POST['last_name']);
	$email        = $database_connect->safeString($_POST['email']);
	$phone_number = $database_connect->safeString($_POST['phone_number']);

	$query = "INSERT INTO student (first_name, last_name, email, phone_number) 
              VALUES ('$first_name', '$last_name', '$email', '$phone_number')";

	$result = $database_connect->executeQuery($query);

	if($result){
		header("location:employee_records.php?msg=Student Record Inserted Successfully...!&color=green");
		exit();
	} else {
		header("location:employee_records.php?msg=Error: Duplicate Email or Phone No!&color=red");
		exit();
	}
}

if(isset($_POST['updateStudent'])){
    $student_id = $database_connect->safeString($_POST['student_id']);
    
    $update_data = [
        'first_name'   => $_POST['first_name'],
        'last_name'    => $_POST['last_name'],
        'email'        => $_POST['email'],
        'phone_number' => $_POST['phone_number']
    ];
    
    $where_condition = "student_id = $student_id";
    
    $result = $database_connect->updateRecord('student', $update_data, $where_condition);
    if($result){
        header("location:employee_records.php?msg=Student Record Updated Successfully!&color=blue");
        exit();
    } else {
        header("location:employee_records.php?msg=Update Failed!&color=red");
        exit();
    }
}

if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['user_id'])){

	$user_id = $database_connect->safeString($_GET['user_id']);
	$result = $database_connect->executeQuery("DELETE FROM student WHERE student_id = " . $user_id);

	if($result){
		header("location:employee_records.php?msg=Student Record Deleted Successfully...!&color=darkred");
		exit();
	}
}
?>