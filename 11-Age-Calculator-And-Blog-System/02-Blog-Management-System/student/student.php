<?php
require_once("../require/connection.php");
require_once("../require/function.php");

session_management(3);

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
			color: #0000ff;
			text-decoration: underline;
			font-size: 16px;
		}
		.system-title {
			text-align: center;
			font-size: 28px;
			font-weight: bold;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.post-box {
			border: 1px solid #000000;
			padding: 15px;
			margin-bottom: 25px;
			background-color: #ffffff;
		}
		.post-title-link {
			font-size: 20px;
			font-weight: bold;
			color: #0000ff;
			text-decoration: underline;
			display: block;
			margin-bottom: 10px;
		}
		.post-body-text {
			font-size: 15px;
			line-height: 1.5;
			margin: 0 0 15px 0;
		}
		.read-more-btn {
			display: inline-block;
			background-color: #e1e1e1;
			color: #000000;
			padding: 6px 12px;
			text-decoration: none;
			border: 1px solid #adadad;
			font-size: 14px;
		}
		.read-more-btn:hover {
			background-color: #d4d4d4;
		}
		.back-btn {
			display: inline-block;
			background-color: #e1e1e1;
			color: #000000;
			padding: 6px 12px;
			text-decoration: none;
			border: 1px solid #adadad;
			font-size: 14px;
			margin-top: 15px;
		}
		.post-container {
			border: 1px solid #000000;
			padding: 20px;
			background-color: #ffffff;
		}
		.detail-center-title {
			text-align: center;
			font-size: 22px;
			font-weight: bold;
			margin-bottom: 20px;
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
		<div class="system-title">Blog Management System</div>
		
		<?php
		$query = "SELECT * FROM post ORDER BY post_id DESC";
		$result = mysqli_query($connect, $query);
		if($result && $result->num_rows > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			?>
				<div class="post-box">
					<a href="student.php?read_post=<?= $row['post_id'] ?>" class="post-title-link">Post <?= $row['post_id'] ?></a>
					<p class="post-body-text"><?= htmlspecialchars_decode($row['post_description']); ?></p>
					<a href="student.php?read_post=<?= $row['post_id'] ?>" class="read-more-btn">Read More</a>
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
				<a href="student.php" class="back-btn">Back</a>
			</div>
		<?php } ?>
	<?php endif; ?>
</div>
</body>
</html>