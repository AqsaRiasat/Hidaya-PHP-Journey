<?php 
include('db.php'); 
$id = $_GET['id'];
$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM posts WHERE id=$id"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $row['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="index.php">MY BLOG</a>
            <a class="btn btn-outline-warning btn-sm" href="index.php">Back to Home</a>
        </div>
    </nav>

    <!-- Blog -->
    <div class="container my-5" style="max-width: 800px;">
        <div class="card border-0 shadow-sm p-4">
            <h1 class="fw-bold mb-3 text-dark"><?php echo $row['title']; ?></h1>
            <p class="text-muted small">Published on: <?php echo $row['created_at']; ?></p>
            <img src="uploads/<?php echo $row['image']; ?>" class="img-fluid rounded mb-4" style="max-height: 400px; width: 100%; object-fit: cover;">
            <p class="lead text-secondary" style="line-height: 1.8; text-align: justify;">
                <?php echo nl2br($row['content']); ?>
            </p>
        </div>
    </div>

</body>
</html>