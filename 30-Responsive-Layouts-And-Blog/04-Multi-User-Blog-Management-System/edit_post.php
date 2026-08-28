<?php 
include('db.php'); 
$id = $_GET['id'];
$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM posts WHERE id=$id"));

if(isset($_POST['update'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $status = $_POST['status'];
    

    if($_FILES['image']['name'] != "") {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/".$image);
        mysqli_query($conn, "UPDATE posts SET title='$title', content='$content', image='$image', status='$status' WHERE id=$id");
    } else {
        mysqli_query($conn, "UPDATE posts SET title='$title', content='$content', status='$status' WHERE id=$id");
    }
    header("Location: admin_dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5" style="max-width: 600px;">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-primary text-white fw-bold">Edit Post</div>
            <div class="card-body p-4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Post Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Content</label>
                        <textarea name="content" class="form-control" rows="5" required><?php echo $row['content']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Current Image</label><br>
                        <img src="uploads/<?php echo $row['image']; ?>" width="100" class="mb-2 rounded"><br>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Status</label>
                        <select name="status" class="form-select">
                            <option value="active" <?php if($row['status']=='active') echo 'selected'; ?>>Active</option>
                            <option value="inactive" <?php if($row['status']=='inactive') echo 'selected'; ?>>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary w-100 fw-bold">Update Post</button>
                    <a href="admin_dashboard.php" class="btn btn-link w-100 text-muted mt-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>