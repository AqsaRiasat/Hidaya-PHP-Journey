<?php
require_once("database_connection.php"); 
?>

<style>
	.form-container {
		width: 400px;
		height: auto;
		border: 2px solid #cbd5e1;
		background-color: #ffffff;
		border-radius: 8px;
		padding: 15px;
		text-align: left;
	}
	.form-container legend {
		font-weight: bold;
		color: #1e3a8a;
	}
	.btn-add {
		background-color: #10b981; 
		color: white;
		padding: 10px;
		border: none;
		border-radius: 6px;
		font-weight: bold;
		cursor: pointer;
	}
	.btn-cancel {
		background-color: #ef4444; 
		color: white;
		padding: 10px;
		border: none;
		border-radius: 6px;
		font-weight: bold;
		cursor: pointer;
	}
	.btn-edit {
		background-color: #0ea5e9;
		color: white;
		border: none;
		padding: 5px 10px;
		border-radius: 4px;
		cursor: pointer;
	}
	.btn-delete {
		background-color: #ef4444; 
		color: white;
		border: none;
		padding: 5px 10px;
		border-radius: 4px;
		cursor: pointer;
	}
	.data-table {
		border-collapse: collapse;
		width: 100%;
		background-color: white;
	}
	.data-table tr.header {
		background-color: #1e3a8a; 
		color: white;
	}
	.msg-success {
		background-color: #ffffff;
		color: #10b981;
		padding: 20px;
		border-radius: 8px;
		border: 1px solid #10b981;
		font-weight: bold;
		font-size: 20px;
	}
	.msg-error {
		background-color: #ffffff;
		color: #ef4444;
		padding: 20px;
		border-radius: 8px;
		border: 1px solid #ef4444;
		font-weight: bold;
		font-size: 20px;
	}
</style>

<?php
// ADD FORM 
if(isset($_REQUEST['action']) && $_REQUEST['action'] == "get_form"){
  ?>
      <fieldset class="form-container">
      	<legend>Add Post..!</legend>
      	<table cellpadding="3">
      		<tr>
      			<td>Title : </td>
      			<td><input type="text" name="title" id="title" style="width: 100%;"></td>
      		</tr>
      		<tr>
      			<td>Summary : </td>
      			<td><textarea name="summary" id="summary" style="width: 100%;"></textarea></td>
      		</tr>
      		<tr>
      			<td>Description : </td>
      			<td><textarea name="description" id="description" style="width: 100%;"></textarea></td>
      		</tr>
      		<tr>
      			<td colspan="2" align="center">
      				<button onclick="add_post()" class="btn-add">Add Post</button>
      				<button onclick="cancle()" class="btn-cancel">Cancel</button>
      			</td>
      		</tr>
      	</table>
      </fieldset>
  <?php

//  SHOW AND SEARCH POSTS 
} else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_post"){

      if(isset($_REQUEST['search']) && $_REQUEST['search'] != ""){
             $search = $_REQUEST['search'];
             $query ="SELECT * FROM post WHERE title LIKE '%$search%' OR summary LIKE '%$search%' OR description LIKE '%$search%'";
      } else {
    	     $query = "SELECT * FROM post ORDER BY post_id DESC";
      }

      $result = mysqli_query($connection, $query) or die("Query Failed..!").mysqli_connect_error($connection);

      if(mysqli_num_rows($result) > 0){
      	?>
      	<table cellpadding="5" border="1" class="data-table">
      		<tr class="header">
      				<th>ID</th>
      				<th>Title</th>
      				<th>Summary</th>
      				<th>Description</th>
                    <th>Actions</th>
      			</tr>
      			<?php
      			while ($data = mysqli_fetch_assoc($result)) {
      				?>
      				<tr align="center">
      					<td><?=$data['post_id']?></td>
      					<td><?=$data['title']?></td>
      					<td><?=$data['summary']?></td>
      					<td><?=$data['description']?></td>
      					<td>
      						<button onclick="edit_post(<?=$data['post_id']?>)" class="btn-edit">Edit</button>
      						<button onclick="delete_post(<?=$data['post_id']?>)" class="btn-delete">Delete</button>
      					</td>
      				</tr>
      				<?php
      			}
      			?>
      	</table>
      	<?php
      } else {
      	?>
      	<p class="msg-error">Record Not Found..!</p>
      	<?php
      }

// INSERT NEW POST 
} else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "add_post"){

	$query = "INSERT INTO post(title, summary, description) VALUES ('".$_REQUEST['title']."', '".$_REQUEST['summary']."', '".$_REQUEST['description']."')";
	$result = mysqli_query($connection, $query) or die("Query Failed..!").mysqli_connect_error($connection);

	if($result){
		?>
		<p class="msg-success">Post Added..!</p>
		<?php
	} else {
		?>
		<p class="msg-error">Something Went Wrong..!</p>
		<?php
	}

// EDIT FORM
} else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "get_edit_form"){
	
	$query = "SELECT * FROM post WHERE post_id = ".$_REQUEST['post_id'];
	$result = mysqli_query($connection, $query) or die("Query Failed..!").mysqli_connect_error($connection);
	$data = mysqli_fetch_assoc($result);
	?>
      <fieldset class="form-container">
      	<legend>Edit Post..!</legend>
      	<table cellpadding="3">
      		<tr>
      			<td>Title : </td>
      			<td><input type="text" id="title" value="<?=$data['title']?>" style="width: 100%;"></td>
      		</tr>
      		<tr>
      			<td>Summary : </td>
      			<td><textarea id="summary" style="width: 100%;"><?=$data['summary']?></textarea></td>
      		</tr>
      		<tr>
      			<td>Description : </td>
      			<td><textarea id="description" style="width: 100%;"><?=$data['description']?></textarea></td>
      		</tr>
      		<tr>
      			<td colspan="2" align="center">
      				<button onclick="update_post(<?=$data['post_id']?>)" class="btn-add">Update Post</button>
      				<button onclick="get_form()" class="btn-cancel">Cancel</button>
      			</td>
      		</tr>
      	</table>
      </fieldset>
	<?php

//  UPDATE DATA 
} else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "update_post"){
	
	$query = "UPDATE post SET title='".$_REQUEST['title']."', summary='".$_REQUEST['summary']."', description='".$_REQUEST['description']."' WHERE post_id=".$_REQUEST['post_id'];
	$result = mysqli_query($connection, $query) or die("Query Failed..!").mysqli_connect_error($connection);

	if($result){
		?>
		<p class="msg-success">Post Updated..!</p>
		<?php
	} else {
		?>
		<p class="msg-error">Update Failed..!</p>
		<?php
	}

// DELETE 
} else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "delete_post"){

        $query  =  "DELETE FROM post WHERE post_id=".$_REQUEST['post_id'];
        $result = mysqli_query($connection, $query) or die("Query Failed..!").mysqli_connect_error($connection);

        if($result){
			?>
			<p class="msg-success">Post Deleted..!</p>
			<?php
        } else {
			?>
			<p class="msg-error">Delete Failed..!</p>
			<?php
        }
}
?>