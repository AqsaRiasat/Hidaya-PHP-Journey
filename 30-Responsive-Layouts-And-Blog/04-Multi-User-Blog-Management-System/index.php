<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Blog</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item img { height: 450px; object-fit: cover; }
        .card-img-top { height: 200px; object-fit: cover; }
    </style>
</head>
<body class="bg-light">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="index.php">MY BLOG</a>
            <button class="navbar-toggler" type="text/markdown" data-bs-toggle="collapse" data-bs-target="#navbarNav"></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="btn btn-warning btn-sm ms-2 mt-1 text-dark fw-bold" href="admin_dashboard.php">Admin Panel</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Image Slider (Carousel) -->
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1200" class="d-block w-100" alt="Slider 1">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <h5>Welcome to Our Blog</h5>
                    <p>Read the latest insights and amazing student articles.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1200" class="d-block w-100" alt="Slider 2">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                    <h5>Beautiful Bootstrap UI</h5>
                    <p>Clean, modern, and fully responsive layout.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Main Content (Blog Posts Grid) -->
    <div class="container my-5">
        <h2 class="text-center mb-4 fw-bold">Latest Stories</h2>
        <div class="row g-4">
            <?php
            // Sirf wahi posts aen gi jo Active hain
            $query = "SELECT * FROM posts WHERE status='active' ORDER BY id DESC";
            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark"><?php echo $row['title']; ?></h5>
                            <p class="card-text text-muted"><?php echo substr($row['content'], 0, 100); ?>...</p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="view_blog.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-warning text-dark w-100 fw-bold">Read More</a>
                        </div>
                    </div>
                </div>
            <?php 
                }
            } else {
                echo "<p class='text-center text-muted'>No active posts found.</p>";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2026 Blog Management System | Assignment 4</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>