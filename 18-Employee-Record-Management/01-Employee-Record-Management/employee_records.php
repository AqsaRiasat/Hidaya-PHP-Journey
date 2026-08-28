<?php 
require_once("database_setting.php");
require_once("database_connection.php");

$database_connect  = new database(HOSTNAME,USER,PASSWORD,DATABASE);

$edit_student = null;
if(isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['user_id'])){
    $user_id = $database_connect->safeString($_GET['user_id']);
    $edit_res = $database_connect->executeQuery("SELECT * FROM student WHERE student_id = $user_id");
    if($edit_res && $edit_res->num_rows > 0){
        $edit_student = mysqli_fetch_assoc($edit_res);
    }
}

$result = $database_connect->executeQuery("SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Records</title>
	<style>
		body{ background-color: lightgray; color:black; }
		h1{ background-color: lightsalmon; color: white; padding: 5px; margin: 10px; text-align: center; border:5px double navy; font-family: cursive; }
		fieldset{ width: 400px; border-radius: 10px 6px 10px 6px; background-color: white; color: black; }
		legend{ color: navy; font-weight: bold; }
        .btn-edit { color: blue; font-weight: bold; text-decoration: none; }
        .btn-delete { color: red; text-decoration: none; }
	</style>
</head>
<body>
<h1>Student Records</h1>
<center>
	<fieldset>
		<legend><?php echo $edit_student ? "Update/Edit Student" : "Add Student"; ?></legend>
		<p style="color:<?php echo $_GET['color'] ?? ''; ?>"> <?php echo $_GET['msg'] ?? ''; ?> </p>
		
        <form method="POST" action="database_process.php">
            <?php if($edit_student){ ?>
                <input type="hidden" name="student_id" value="<?php echo $edit_student['student_id']; ?>">
            <?php } ?>

		<table>
			<tr>
				<th> First Name: </th>
				<td> <input type="text" name="first_name" value="<?php echo $edit_student['first_name'] ?? ''; ?>" placeholder="Enter Your First Name..!" required> </td>
			</tr>
			<tr>
				<th> Last Name: </th>
				<td> <input type="text" name="last_name" value="<?php echo $edit_student['last_name'] ?? ''; ?>" placeholder="Enter Your Last Name..!" required> </td>
			</tr>
			<tr>
				<th> Email: </th>
				<td> <input type="email" name="email" value="<?php echo $edit_student['email'] ?? ''; ?>" placeholder="Enter Your Email Address..!" required> </td>
			</tr>
			<tr>
				<th> Phone No: </th>
				<td> <input type="text" name="phone_number" value="<?php echo $edit_student['phone_number'] ?? ''; ?>" placeholder="Enter Your Phone Number..!" required> </td>
			</tr>
			<tr>
				<th></th>
				<td> 
                    <?php if($edit_student){ ?>
                        <input type="submit" name="updateStudent" value="Update Student Details" style="background-color: blue; color: white;">
                        <a href="employee_records.php" style="font-size:12px; margin-left:10px;">Cancel</a>
                    <?php } else { ?>
                        <input type="submit" name="addStudent" value="Add Student" style="background-color: green; color: white;">
                    <?php } ?>
                </td>
			</tr>
		</table>
		</form>
	</fieldset>
<hr />
<hr />
<?php if($result && $result->num_rows > 0){ ?>
<table border="5" bgcolor="lightgray">
	<thead>
		<tr>
			<th> Student ID 	</th>
			<th> First Name 	</th>
			<th> Last Name 		</th>
			<th> Email Address 	</th>
			<th> Phone Number 	</th>
			<th> Action 		</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$count = 0; 
	while($user = mysqli_fetch_assoc($result)){
		$count++;
	?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['phone_number']; ?></td>
			<td> 
				<a class="btn-edit" href="employee_records.php?user_id=<?php echo $user['student_id']; ?>&action=edit">Edit</a> &nbsp; | 
				<a class="btn-delete" href="database_process.php?user_id=<?php echo $user['student_id']; ?>&action=delete" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<?php } else {
	echo "Student Record Not Found....!";
} ?>
</center>
</body>
</html>