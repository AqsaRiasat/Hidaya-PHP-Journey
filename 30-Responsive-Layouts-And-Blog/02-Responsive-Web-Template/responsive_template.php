<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Impact Bootstrap Template</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    <style>
        .impact-theme-bg {
            background-color: #008374;
        }

        .impact-card-bg {
            background-color: #009282;
            transition: 0.3s;
        }

        .impact-card-bg:hover {
            background-color: #00a896;
        }

        .overlap-section {
            margin-top: -100px;
            position: relative;
            z-index: 10;
        }

        .active-link {
            border-bottom: 2px solid #f96f59;
        }
    </style>

</head>

<body class="bg-light">

    <!-- 1. NAVIGATION BAR SECTION -->
    <nav class="navbar navbar-expand-lg navbar-dark impact-theme-bg py-4">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#">Impact<span class="text-warning">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item mx-2"><a class="nav-link text-white active-link" href="#">Home</a></li>
                    <li class="nav-item mx-2"><a class="nav-link text-white-50" href="#">About</a></li>
                    <li class="nav-item mx-2"><a class="nav-link text-white-50" href="#">Services</a></li>
                    <li class="nav-item mx-2"><a class="nav-link text-white-50" href="#">Portfolio</a></li>
                    <li class="nav-item mx-2"><a class="nav-link text-white-50" href="#">Team</a></li>
                    <li class="nav-item mx-2"><a class="nav-link text-white-50" href="#">Blog</a></li>
                    <li class="nav-item mx-2"><a class="nav-link text-white-50" href="#">Drop Down <i
                                class="bi bi-chevron-down small"></i></a></li>
                    <li class="nav-item mx-2"><a class="nav-link text-white-50" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <div class="impact-theme-bg text-white pt-5 pb-5">
        <div class="container pt-4 pb-5">
            <div class="row align-items-center">
                
                <div class="col-md-6 mb-5 mb-md-0">
                    <h1 class="display-4 fw-bold mb-3">Welcome to Impact</h1>
                    <p class="fs-5 text-white-70 mb-4">Sed autem laudantium dolores. Voluptatem itaque ea consequatur
                        eveniet. Eum quas beatae cumque eum quaerat.</p>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-light rounded-pill px-4 py-2 fw-semibold me-4">Get
                            Started</button>
                        <a href="#" class="text-white text-decoration-none fw-semibold fs-5">
                            <i class="bi bi-play-circle-fill text-white-50 fs-3 align-middle me-2"></i> Watch Video
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6 text-center">
                    <img src="https://bootstrapmade.com/demo/templates/Impact/assets/img/hero-img.svg"
                        alt="Impact Illustration" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </div>

    <!-- 3.CARDS SECTION -->
    <div class="container overlap-section mb-5">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="impact-card-bg text-white p-4 rounded-3 shadow text-center h-100">
                    <div class="fs-1 mb-3"><i class="bi bi-easel"></i></div>
                    <h5 class="fw-bold mb-2">Lorem Ipsum</h5>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="impact-card-bg text-white p-4 rounded-3 shadow text-center h-100">
                    <div class="fs-1 mb-3"><i class="bi bi-gem"></i></div>
                    <h5 class="fw-bold mb-2">Sed ut perspiciatis</h5>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="impact-card-bg text-white p-4 rounded-3 shadow text-center h-100">
                    <div class="fs-1 mb-3"><i class="bi bi-geo-alt"></i></div>
                    <h5 class="fw-bold mb-2">Magni Dolores</h5>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="impact-card-bg text-white p-4 rounded-3 shadow text-center h-100">
                    <div class="fs-1 mb-3"><i class="bi bi-command"></i></div>
                    <h5 class="fw-bold mb-2">Nemo Enim</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. CONTENT SECTION-->
    <div class="container py-5 text-center my-4">
        <h2 class="fw-bold text-dark mb-3">About Our Company</h2>
        <p class="text-secondary w-75 mx-auto">This responsive web template replicates the exact aesthetic layout of the
            Impact design using simple, robust Bootstrap grid components tailored perfectly for classroom evaluation.
        </p>
    </div>

    <!-- 5. FOOTER  -->
    <footer class="bg-dark text-white-50 py-5">
        <div class="container text-center">
        
            <h4 class="text-white fw-bold mb-4">Contact Us</h4>

        
            <div
                class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 gap-md-5 mb-4 fs-5">
                <!-- Email -->
                <div class="d-flex align-items-center">
                    <i class="bi bi-envelope-fill text-warning me-2"></i>
                    <span>contact@example.com</span>
                </div>

                <!-- Social Media Icons -->
                <div class="d-flex gap-3">
                    <a href="#" class="text-white-50"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white-50"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white-50"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white-50"><i class="bi bi-linkedin"></i></a>
                </div>

                <!-- Phone Number -->
                <div class="d-flex align-items-center">
                    <i class="bi bi-phone-fill text-warning me-2"></i>
                    <span>+1 5589 55488 55</span>
                </div>
            </div>

            <hr class="border-secondary my-4">
            <!-- Copyright & Subtext -->
            <div class="text-center pt-2">
                <p class="mb-0 text-white">&copy; 2026 Impact Template Assignment. All Rights Reserved.</p>
                <small>Designed with Bootstrap Grid System.</small>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>