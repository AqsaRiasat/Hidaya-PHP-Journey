<?php
session_start();
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if($username == "admin" && $password == "admin123") {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php");
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex align-items-center" style="height: 100vh;">
    <div class="container" style="max-width: 400px;">
        <div class="card border-0 shadow-lg">
            <div class="card-body p-4 text-center">
                <h3 class="fw-bold mb-3 text-uppercase text-warning">Admin Portal</h3>
                <?php if(isset($error)) { echo "<div class='alert alert-danger p-2'>$error</div>"; } ?>
                <form action="login.php" method="POST">
                    <div class="mb-3 text-start">
                        <label class="form-label fw-bold">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="e.g. admin" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="e.g. admin123" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-warning w-100 fw-bold text-dark">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>