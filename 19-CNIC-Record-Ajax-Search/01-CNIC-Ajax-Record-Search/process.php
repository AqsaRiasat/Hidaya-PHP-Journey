<?php
require_once("database_setting.php");
require_once("database_connection.php");

$dbInstance = new database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(isset($_GET['id_number'])){
	$id_number = $dbInstance->safeString($_GET['id_number']);
	
	$sqlCommand = "SELECT * FROM registry WHERE identity_no = '$id_number'";
	$resultSet  = $dbInstance->executeQuery($sqlCommand);
	
	if($resultSet && $resultSet->num_rows > 0){
		$memberRecord = mysqli_fetch_assoc($resultSet);
		?>
		<div style="width: 480px; margin: 0 auto;">
			<table class="output-table">
				<tr>
					<td><b>Full Name:</b></td>
					<td><?php echo $memberRecord['full_name']; ?></td>
					<td rowspan="4" align="center" valign="middle" style="background: white;">
						<img src="<?php echo $memberRecord['user_pic']; ?>" class="avatar">
					</td>
				</tr>
				<tr>
					<td><b>Identity No:</b></td>
					<td><?php echo $memberRecord['identity_no']; ?></td>
				</tr>
				<tr>
					<td><b>Email Address:</b></td>
					<td><?php echo $memberRecord['user_email']; ?></td>
				</tr>
				<tr>
					<td><b>Phone Number:</b></td>
					<td><?php echo $memberRecord['user_phone']; ?></td>
				</tr>
			</table>
		</div>
		<?php
	} else {
		echo "<p class='error-alert'>Record Not Found!...</p>";
	}
}
?>