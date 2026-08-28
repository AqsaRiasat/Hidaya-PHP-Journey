<?php
session_start();
require_once("../require/connection.php");

if(isset($_REQUEST['add_post'])){
	extract($_REQUEST);
	$user_id = $_SESSION['users']['user_id'];
	$time = time();

	$query = "INSERT INTO post (post_title,post_description,post_added_by,post_added_on)VALUES('".htmlspecialchars($post_title)."','".htmlspecialchars($post_description)."','".$user_id."','".$time."')";
	$result = mysqli_query($connect,$query);

	if($result){
		$msg 	= "Post Added Sucussfully...!";
		$color  = "green";	
	}else{
		$msg 	= "Post Not Added Sucussfully...!";
		$color  = "red";	
	}

}elseif(isset($_REQUEST['update_post'])){
	$post_id = $_REQUEST['post_id'];
	$query = "UPDATE post SET post_title= '".htmlspecialchars($_REQUEST['post_title'])."', post_description= '".htmlspecialchars($_REQUEST['post_description'])."' WHERE post_id = ".(int)$post_id;
	$result = mysqli_query($connect,$query);

	if($result){
		$msg 	= "Post Updated Sucussfully...!";
		$color  = "green";	
	}else{
		$msg 	= "Post Not Updated Sucussfully...!";
		$color  = "red";	
	}

}elseif(isset($_REQUEST['action']) AND $_REQUEST['action'] == "delete"){
	$post_id = $_REQUEST['post_id'];

	$query = "DELETE FROM post WHERE post_id =".$post_id;
	$result = mysqli_query($connect,$query);

	if($result){
		$msg 	= "Post DELETED Sucussfully...!";
		$color  = "green";	
	}else{
		$msg 	= "Post Not DELETED Sucussfully...!";
		$color  = "red";	
	}
}

header("location:admin.php?msg=$msg&color=$color");
?>