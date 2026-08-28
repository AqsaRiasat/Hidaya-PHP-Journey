<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Grid System Practice</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

    
    <div class="container mt-4">
        
    
        <div class="bg-dark text-white text-center p-3 mb-4 rounded">
            <h2>Bootstrap Grid System Practice Assignment</h2>
        </div>

    
        <h4 class="mb-3">1. Equal Width Columns (3 Columns)</h4>
        <div class="row">
            <div class="col-sm-4 mb-3">
                <div class="bg-primary text-white border text-center p-4 fw-bold">.col-sm-4 (Blue)</div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="bg-success text-white border text-center p-4 fw-bold">.col-sm-4</div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="bg-warning text-dark border text-center p-4 fw-bold">.col-sm-4</div>
            </div>
        </div>

        <hr class="my-4">

    
        <h4 class="mb-3">2. Unequal Width Columns (2 Columns)</h4>
        <div class="row">
            <div class="col-sm-4 mb-3">
                <div class="bg-danger text-white border text-center p-4 fw-bold">.col-sm-4</div>
            </div>
            <div class="col-sm-8 mb-3">
                <div class="bg-info text-dark border text-center p-4 fw-bold">.col-sm-8</div>
            </div>
        </div>

        <hr class="my-4">

    
        <h4 class="mb-3">3. Full Width Column</h4>
        <div class="row">
            <div class="col-sm-12 mb-3">
                <div class="bg-secondary text-white border text-center p-4 fw-bold">.col-sm-12</div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>