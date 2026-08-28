<?php 
include('db.php'); 


if(isset($_GET['action']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = $_GET['action'] == 'activate' ? 'active' : 'inactive';
    mysqli_query($conn, "UPDATE posts SET status='$status' WHERE id=$id");
    header("Location: admin_dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded shadow-sm">
            <h2 class="fw-bold text-dark m-0">Admin Panel Overview</h2>
            <div>
                <a href="add_post.php" class="btn btn-success fw-bold">+ Add New Post</a>
                <a href="index.php" class="btn btn-secondary fw-bold">View Website</a>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $res = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");
                        while($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <td><img src="uploads/<?php echo $row['image']; ?>" width="60" class="rounded"></td>
                            <td class="fw-bold"><?php echo $row['title']; ?></td>
                            <td>
                                <?php if($row['status'] == 'active'): ?>
                                    <span class="badge bg-success">Active</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Inactive</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($row['status'] == 'active'): ?>
                                    <a href="admin_dashboard.php?action=deactivate&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Deactivate</a>
                                <?php else: ?>
                                    <a href="admin_dashboard.php?action=activate&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">Activate</a>
                                <?php endif; ?>
                                <a href="edit_post.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>