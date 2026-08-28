<?php

require_once("../require/connection.php");
require_once("../require/function.php");

session_management(1);

$post_id = $_REQUEST['post_id']??'';

 $query_1 = "SELECT * FROM post WHERE post_id =".$post_id;
$result_1 = mysqli_query($connect,$query_1);
if(isset($_REQUEST['post_id'])){
$post = mysqli_fetch_assoc($result_1);
}
// var_dump($post);


$user_id = $_SESSION['users']['user_id'];

 $query = "SELECT * FROM post,users WHERE user_id =".$user_id;
$result = mysqli_query($connect,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php title(); ?></title>
	<style>
	body{
		background-color: lightgray;
		color: navy;
	}
	h1{
		background-color: yellow;
		color: navy;
		text-align: center;
		font-family: cursive;
		padding: 10px;
		margin: 10px;
		border-radius: 5px 0px 5px 0px;
	}
	h2{

		color: black;

	}
	fieldset{
		width: 400px;
		border-radius: 5px;
		border: 2px dotted; red
	}

	</style>
</head>
<body>
	<h1><?php title(); ?></h1>
<h2>Wellcome Admin -  <?php echo $_SESSION['users']['first_name']." ".$_SESSION['users']['last_name'] ?></h2>
<hr/>
<button style="float: right; margin: 10px;"><a href="../logout.php"> Logout </a></button>
<center>
<fieldset>
	<legend><?php echo isset($_REQUEST['post_id'])?'Update':'Add' ?> Post </legend>
	<p style="color: <?php echo $_GET['color']??''; ?>"><?php echo $_REQUEST['msg']??''; ?></p>
	<form method="POST" action="post_process.php">
		
<table>
	<tr>
		<th>Post Title</th>
		<td><input type="text" name="post_title" value="<?php echo $post['post_title']??''; ?>" placeholder="Enter Your Post Title"> </td>
	</tr>
	<tr>
		<th>Post Description</th>
		<td><textarea name="post_description" cols="22"> <?php echo $post['post_description']??''; ?></textarea> </td>
	</tr>
	<?php if(isset($post_id)){ ?>
	<input type="hidden" name="post_id" value="<?php echo $post_id??''; ?>">
	<?php }?>
	<tr>
		<th></th>
		<td><input type="submit" name="<?php echo isset($_REQUEST['post_id'])?'update_post':'add_post' ?>" value="<?php echo isset($_REQUEST['post_id'])?'Update':'Add' ?> POST"></td>
	</tr>
</table>
	</form>
</fieldset>	
<br /><br />
<table border="2" cellpadding="5" style="padding: 10px; margin: 10px; border-radius: 10px; background-color: lightcyan;">
	<thead>
	<tr>
		<th>POST-ID</th>
		<th>POST-Title</th>
		<th>POST-Description</th>
		<th>POST-Added-By</th>
		<th>POST-Added-On</th>
		<td>Action</td>

	</tr>
	</thead>
	<tbody>
	<?php if($result->num_rows){
	while($row = mysqli_fetch_assoc($result)){ ?>
	<tr>
		<td><?= $row['post_id'] ?></td>
		<td><?= htmlspecialchars_decode($row['post_title']); ?></td>
		<td><?= htmlspecialchars_decode($row['post_description']); ?></td>
		<td><?= $row['first_name']." ".$row['last_name']; ?></td>
		<td><?php echo date("y-m-d" ,$row['post_added_on'])??''; ?></td>
		<td><button> <a href="admin.php?post_id=<?php echo $row['post_id']; ?>"> Edit </a></button>|<button> <a href="post_process.php?action=delete&post_id=<?php echo $row['post_id']; ?>"> Delete</button></td>
	</tr>
	<?php } } ?>
	</tbody>

</table>
</center>
</body>
</html>