<?php
session_start();
require_once("../require/connection.php");
// print_r($_REQUEST);
if(isset($_REQUEST['add_post'])){

print_r($_REQUEST);


	extract($_REQUEST);
$user_id = $_SESSION['users']['user_id'];
 $time = time();

	echo $query = "INSERT INTO post (post_title,post_description,post_added_by,post_added_on)VALUES('".htmlspecialchars($post_title)."','".htmlspecialchars($post_description)."','".$user_id."','".$time."')";
// die();
	$result = mysqli_query($connect,$query);

	if($result){

		$msg 	= "Post Added Sucussfully...!";
		$color  = "green";	
	}else{

			$msg 	= "Post Not Added Sucussfully...!";
			$color  = "green";	

	}

}elseif(isset($_REQUEST['update_post'])){

	$query = "UPDATE post SET post_title= '".$_REQUEST['post_title']."',post_description= '".$_REQUEST['post_description']."'";
	$result = mysqli_query($connect,$query);

	if($result){

		$msg 	= "Post Updated Sucussfully...!";
		$color  = "green";	
	}else{

			$msg 	= "Post Not Updated Sucussfully...!";
			$color  = "green";	

	}

}
elseif(isset($_REQUEST['action']) AND $_REQUEST['action'] == "delete"){

	$post_id = $_REQUEST['post_id'];

	$query = "DELETE FROM post WHERE post_id =".$post_id;
	$result = mysqli_query($connect,$query);

	if($result){

		$msg 	= "Post DELETED Sucussfully...!";
		$color  = "green";	
	}else{

			$msg 	= "Post Not DELETED Sucussfully...!";
			$color  = "green";	

	}

}
header("location:admin.php?msg=$msg&color=$color");


?>