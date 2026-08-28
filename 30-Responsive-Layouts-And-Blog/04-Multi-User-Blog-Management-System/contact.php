<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <a class="navbar-brand text-warning fw-bold" href="index.php">MY BLOG</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about.php">About Us</a>
                <a class="nav-link active" href="contact.php">Contact Us</a>
            </div>
        </div>
    </nav>

    <div class="container" style="max-width: 700px;">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-warning text-dark fw-bold text-center py-3">Get In Touch With Us</div>
            <div class="card-body p-4">
                <form action="#" method="POST" onsubmit="alert('Message Sent Successfully! (Demo Only)');">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Full Name</label>
                        <input type="text" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email Address</label>
                        <input type="email" class="form-control" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Your Message</label>
                        <textarea class="form-control" rows="4" placeholder="Type your message here..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 fw-bold">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>