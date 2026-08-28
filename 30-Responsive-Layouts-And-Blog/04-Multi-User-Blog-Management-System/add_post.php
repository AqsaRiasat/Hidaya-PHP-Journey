<?php 
include('db.php'); 

if(isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $status = $_POST['status'];
    
    // Image Upload Logic
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);
    
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO posts (title, content, image, status) VALUES ('$title', '$content', '$image', '$status')";
        if(mysqli_query($conn, $sql)) {
            header("Location: admin_dashboard.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5" style="max-width: 600px;">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-dark text-white fw-bold">Create a New Post</div>
            <div class="card-body p-4">
                <form action="add_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Post Title</label>
                        <input type="text" name="title" class="form-mix form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Content</label>
                        <textarea name="content" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Featured Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Status</label>
                        <select name="status" class="form-select">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark w-100 fw-bold">Publish Post</button>
                    <a href="admin_dashboard.php" class="btn btn-link w-100 text-muted mt-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>