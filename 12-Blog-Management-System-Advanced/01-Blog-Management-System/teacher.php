<?php
require_once("../require/connection.php");
require_once("../require/function.php");

session_management(2);

$user_name = $_SESSION['users']['first_name']." ".$_SESSION['users']['last_name'];


$single_post_id = $_GET['read_post'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php title(); ?></title>
	<style>
		body { 
			background-color: #ffffff; 
			color: #000000; 
			font-family: Arial, sans-serif; 
			margin: 0;
			padding: 0;
		}
		.container { 
			width: 65%; 
			margin: 0 auto; 
			padding-top: 20px;
		}
		.header-section {
			width: 100%;
			margin-bottom: 5px;
			position: relative;
		}
		.welcome-text {
			text-align: center;
			font-weight: bold;
			font-size: 16px;
			color: #000000;
			margin: 0;
		}
		.logout-link {
			position: absolute;
			right: 0;
			top: 0;
			color: #800080; 
			font-weight: bold;
			text-decoration: none;
			font-size: 15px;
		}
		.logout-link:hover {
			text-decoration: underline;
		}
		.system-title {
			text-align: center;
			font-size: 22px;
			font-weight: bold;
			color: #000000;
			margin: 25px 0;
		}
		hr {
			border: 0;
			height: 1px;
			background-color: #d3d3d3;
			margin-bottom: 20px;
		}
		
	
		.post-container {
			background-color: #add8e6; 
			border: 1px solid #b0c4de;
			padding: 25px 30px;
			margin-bottom: 20px;
			text-align: left;
			position: relative;
		}
		.post-title-link {
			color: #0000ff; 
			font-weight: bold;
			font-size: 16px;
			text-decoration: none;
			display: inline-block;
			margin-bottom: 12px;
		}
		.post-title-link:hover {
			text-decoration: underline;
		}
		.post-body-text {
			color: #333333;
			font-size: 13px;
			line-height: 1.6;
			margin: 0 0 15px 0;
		}
		.read-more-btn {
			position: absolute;
			right: 30px;
			bottom: 15px;
			color: #0000ff;
			text-decoration: underline;
			font-size: 12px;
		}
		
	
		.detail-center-title {
			text-align: center;
			font-weight: bold;
			color: #000000;
			font-size: 16px;
			margin-bottom: 15px;
		}
		.view-all-container {
			text-align: center;
			margin-top: 25px;
		}
		.view-all-posts-btn {
			background-color: #0000ff; /* Blue rounded button */
			color: #ffffff;
			padding: 8px 24px;
			border-radius: 20px;
			text-decoration: none;
			font-size: 13px;
			display: inline-block;
			border: none;
		}
		.view-all-posts-btn:hover {
			background-color: #0000cd;
		}
	</style>
</head>
<body>
<div class="container">

	<?php if(empty($single_post_id)): ?>
		<div class="header-section">
			<p class="welcome-text">Welcome User: <?= htmlspecialchars($user_name); ?></p>
			<a href="../logout.php" class="logout-link">Logout</a>
		</div>
		<hr/>

		<?php
		$query = "SELECT * FROM post ORDER BY post_id DESC";
		$result = mysqli_query($connect, $query);
		
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
			?>
				<div class="post-container">
					<a href="teacher.php?read_post=<?= $row['post_id'] ?>" class="post-title-link">Post <?= $row['post_id'] ?></a>
					<p class="post-body-text"><?= htmlspecialchars_decode($row['post_description']); ?></p>
					<a href="teacher.php?read_post=<?= $row['post_id'] ?>" class="read-more-btn">Read More</a>
				</div>
			<?php 
			}
		} else {
			echo "<p style='text-align:center;'>No posts found.</p>";
		}
		?>

	<?php else: ?>
		<div class="system-title">Blog Management System</div>
		
		<div class="header-section">
			<p class="welcome-text">Welcome User: <?= htmlspecialchars($user_name); ?></p>
			<a href="../logout.php" class="logout-link">Logout</a>
		</div>
		<hr/>

		<?php
		$query = "SELECT * FROM post WHERE post_id = " . (int)$single_post_id;
		$result = mysqli_query($connect, $query);
		
		if($row = mysqli_fetch_assoc($result)){
		?>
			<div class="post-container">
				<div class="detail-center-title"><?= htmlspecialchars_decode($row['post_title']); ?></div>
				
				<p class="post-body-text">
					<strong>Summary:</strong> <?= htmlspecialchars_decode($row['post_description']); ?>
				</p>
				<p class="post-body-text">
					<?= htmlspecialchars_decode($row['post_description']); ?>
				</p>
				
				<div class="view-all-container">
					<a href="teacher.php" class="view-all-posts-btn">View All Posts</a>
				</div>
			</div>
		<?php 
		} else {
			echo "<p style='text-align:center;'>Post not found.</p>";
		}
		?>

	<?php endif; ?>

</div>
</body>
</html>