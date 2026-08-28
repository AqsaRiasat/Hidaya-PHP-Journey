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

$user_id = $_SESSION['users']['user_id'];

$query = "SELECT post.*, users.first_name, users.last_name FROM post INNER JOIN users ON post.post_added_by = users.user_id";
$result = mysqli_query($connect,$query);

$users_query = "SELECT * FROM users WHERE role_id != 1";
$users_result = mysqli_query($connect, $users_query);

$view_user_id = $_GET['view_logs'] ?? '';
$selected_user_name = "";
$log_records_result = null;

if(!empty($view_user_id)){
    $u_name_q = "SELECT first_name, last_name FROM users WHERE user_id = " . (int)$view_user_id;
    $u_res = mysqli_query($connect, $u_name_q);
    if($u_row = mysqli_fetch_assoc($u_res)){
        $selected_user_name = $u_row['first_name'] . " " . $u_row['last_name'];
    }
    
    $logs_q = "SELECT * FROM user_logs WHERE user_id = " . (int)$view_user_id . " ORDER BY log_id DESC";
    $log_records_result = mysqli_query($connect, $logs_q);
}
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
		font-family: Arial, sans-serif;
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
		border: 2px dotted red;
	}
	.log-management-section {
		margin: 40px auto;
		width: 90%;
		display: flex;
		justify-content: space-around;
		align-items: flex-start;
		gap: 20px;
	}
	.records-box {
		background: white;
		border: 2px solid #000;
		padding: 20px;
		width: 45%;
		min-height: 300px;
		box-shadow: 3px 3px 10px rgba(0,0,0,0.1);
	}
	.records-title {
		text-align: center;
		font-size: 24px;
		font-weight: bold;
		text-decoration: underline;
		margin-bottom: 20px;
	}
	.user-row {
		display: flex;
		justify-content: space-between;
		align-items: center;
		margin: 10px 0;
		font-size: 18px;
		border-bottom: 1px dashed #ccc;
		padding-bottom: 5px;
	}
	.view-log-btn {
		background: lightcyan;
		border: 1px solid deepskyblue;
		padding: 3px 8px;
		border-radius: 4px;
		text-decoration: none;
		color: black;
		font-size: 12px;
	}
	.view-log-btn:hover {
		background: deepskyblue;
		color: white;
	}
	.log-table {
		width: 100%;
		border-collapse: collapse;
		margin-top: 10px;
	}
	.log-table th, .log-table td {
		border: 1px solid black;
		padding: 8px;
		text-align: left;
	}
	.page-no {
		text-align: center;
		font-weight: bold;
		margin-top: 20px;
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
	<?php if(isset($_REQUEST['post_id'])){ ?>
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

<h3>Manage Posts</h3>
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
	<?php if($result && $result->num_rows){
	while($row = mysqli_fetch_assoc($result)){ ?>
	<tr>
		<td><?= $row['post_id'] ?></td>
		<td><?= htmlspecialchars_decode($row['post_title']); ?></td>
		<td><?= htmlspecialchars_decode($row['post_description']); ?></td>
		<td><?= $row['first_name']." ".$row['last_name']; ?></td>
		<td><?php echo date("Y-m-d" ,$row['post_added_on'])??''; ?></td>
		<td><button> <a href="admin.php?post_id=<?php echo $row['post_id']; ?>"> Edit </a></button>|<button> <a href="post_process.php?action=delete&post_id=<?php echo $row['post_id']; ?>"> Delete</button></td>
	</tr>
	<?php } } ?>
	</tbody>
</table>
</center>

<div class="log-management-section">
	<div class="records-box">
		<div class="records-title">Users Records</div>
		<?php 
		$count = 1;
		if($users_result && $users_result->num_rows > 0) {
			while($u_row = mysqli_fetch_assoc($users_result)) {
		?>
			<div class="user-row">
				<span><?= $count++ . ", " . $u_row['first_name'] . " " . $u_row['last_name'] ?></span>
				<a href="admin.php?view_logs=<?= $u_row['user_id'] ?>" class="view-log-btn">view logs</a>
			</div>
		<?php 
			}
		} else {
			echo "<p style='text-align:center;'>No users registered yet.</p>";
		}
		?>
		<div class="page-no">Page No.1</div>
	</div>

	<div class="records-box" style="<?= empty($view_user_id) ? 'visibility: hidden;' : '' ?>">
		<div class="records-title" style="text-decoration: none; color: #00bfff;">
			<a href="#" style="color: #00bfff; text-decoration: underline;"><?= $selected_user_name ?>`s Log</a>
		</div>
		<table class="log-table">
			<thead>
				<tr>
					<th>Logged In</th>
					<th>Logout</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$log_count = 1;
				if($log_records_result && $log_records_result->num_rows > 0) {
					while($l_row = mysqli_fetch_assoc($log_records_result)) {
				?>
					<tr>
						<td><?= $log_count++ . ", " . $l_row['login_time'] ?></td>
						<td><?= !empty($l_row['logout_time']) ? $l_row['logout_time'] : '<span style="color:orange;">Active Session</span>' ?></td>
					</tr>
				<?php 
					}
				} else {
					echo "<tr><td colspan='2' style='text-align:center;'>No log history found.</td></tr>";
				}
				?>
			</tbody>
		</table>
		<div class="page-no">Page No.2</div>
	</div>
</div>
</body>
</html>