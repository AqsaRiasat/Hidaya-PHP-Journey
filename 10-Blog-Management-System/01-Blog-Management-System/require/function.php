<?php
session_start();

function title(){

	echo "Blog Management System";
}

function session_management($role_id){

	if(!$_SESSION['users']['role_id']){

		header("location:../login_form.php?msg=Please Login First....!");

	}elseif($_SESSION['users']['role_id'] != $role_id){

		session_destroy();
		header("location:../login_form.php?msg=Please Register First....!");

	}

}

?>