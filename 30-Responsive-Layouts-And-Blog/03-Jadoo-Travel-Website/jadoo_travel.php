<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadoo - Modern Travel Website</title>
    <!-- Pure Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN (Figma style icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Beautiful Google Fonts for Jadoo (Poppins and Volkhov for headings) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Volkhov:wght@700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #5E6282;
            background-color: #FFFDF9;
            /* Soft cream background like Figma */
        }

        h1,
        h2,
        h3,
        h4,
        .jadoo-heading {
            font-family: 'Volkhov', serif;
            color: #181E4B;
            /* Jadoo's signature deep navy color */
        }

        .text-orange-red {
            color: #DF6951;
            /* Jadoo's primary orange accent color */
        }

        .btn-orange-red {
            background-color: #DF6951;
            color: white;
            border: none;
            transition: 0.3s;
        }

        .btn-orange-red:hover {
            background-color: #c95c46;
            color: white;
            transform: translateY(-2px);
        }

        .bg-light-orange {
            background-color: #FFF1EE;
        }

        .jadoo-nav-link {
            color: #212832 !important;
            font-weight: 500;
        }

        .jadoo-nav-link:hover {
            color: #DF6951 !important;
        }

        /* Overhover effect for Travel Service Cards */
        .service-card {
            border: none;
            background: white;
            border-radius: 25px;
            transition: 0.3s ease-in-out;
        }

        .service-card:hover {
            box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.06);
            transform: translateY(-10px);
        }

        /* Top Destination Cards zoom effect */
        .destination-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }

        .destination-card:hover {
            transform: scale(1.03);
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
        }

        .destination-card img {
            height: 300px;
            object-fit: cover;
        }

        /* Custom Steps Booking graphic view */
        .booking-card-preview {
            background: white;
            border-radius: 25px;
            box-shadow: 0px 30px 60px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-light pt-4">
        <div class="container">

            <a class="navbar-brand fw-bold fs-3" href="#">
                <span class="text-dark">Jadoo</span><span class="text-orange-red">.</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-lg-4 align-items-center">
                    <li class="nav-item"><a class="nav-link jadoo-nav-link active" href="#">Destinations</a></li>
                    <li class="nav-item"><a class="nav-link jadoo-nav-link" href="#">Hotels</a></li>
                    <li class="nav-item"><a class="nav-link jadoo-nav-link" href="#">Flights</a></li>
                    <li class="nav-item"><a class="nav-link jadoo-nav-link" href="#">Bookings</a></li>
                    <li class="nav-item"><a class="nav-link jadoo-nav-link" href="#">Login</a></li>
                    <li class="nav-item">
                        <a class="btn btn-outline-dark rounded-pill px-4" href="#">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--  HERO SECTION -->
    <div class="container pt-5 pb-5">
        <div class="row align-items-center">
            <!-- Left Grid  -->
            <div class="col-md-6 mb-5 mb-md-0">
                <h5 class="text-uppercase fw-bold text-orange-red mb-3">Best Destinations around the world</h5>
                <h1 class="display-3 fw-bold mb-4" style="line-height: 1.2;">
                    Travel, enjoy <br>and live a new <br>and full life
                </h1>
                <p class="fs-6 text-secondary mb-4 w-100">
                    Built Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed
                    listening. Park gate sell they west hard for the.
                </p>
                <div class="d-flex align-items-center gap-4">
                    <button class="btn btn-orange-red rounded-3 px-4 py-3 fw-semibold shadow">Find out more</button>
                    <a href="#" class="text-dark text-decoration-none fw-semibold d-flex align-items-center">
                        <span
                            class="bg-orange-red text-white rounded-circle p-2 d-inline-flex justify-content-center align-items-center me-2 shadow-sm"
                            style="width: 45px; height: 45px;">
                            <i class="bi bi-play-fill fs-5"></i>
                        </span>
                        Play Demo
                    </a>
                </div>
            </div>
            <!-- Right Grid-->
            <div class="col-md-6 text-center">
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600&auto=format&fit=crop&q=80"
                    alt="Beautiful Travel View" class="img-fluid rounded-5 shadow-lg"
                    style="max-height: 450px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>

    <!-- SERVICES SECTION -->
    <div class="container py-5 my-3">
        <div class="text-center mb-5">
            <h5 class="text-uppercase text-secondary fw-semibold">Category</h5>
            <h2 class="fw-bold fs-1">We Offer Best Services</h2>
        </div>


        <div class="row g-4 text-center">
            <!-- Service 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="service-card p-4 h-100 border rounded">
                    <div class="text-orange-red fs-1 mb-3"><i class="bi bi-cloud-sun-fill"></i></div>
                    <h5 class="fw-bold mb-2">Calculated Weather</h5>
                    <p class="small text-muted mb-0">Built Wicket longer admire do barton vanity itself do in it.
                        Preferred to sportsmen it engrossed.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="service-card p-4 h-100 border rounded">
                    <div class="text-orange-red fs-1 mb-3"><i class="bi bi-airplane-fill"></i></div>
                    <h5 class="fw-bold mb-2">Best Flights</h5>
                    <p class="small text-muted mb-0">Engrossed listening. Park gate sell they west hard for the.
                        Preferred to sportsmen vanity.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="service-card p-4 h-100 border rounded">
                    <div class="text-orange-red fs-1 mb-3"><i class="bi bi-music-note-list"></i></div>
                    <h5 class="fw-bold mb-2">Local Events</h5>
                    <p class="small text-muted mb-0">Barton vanity itself do in it. Preferred to sportsmen it engrossed
                        listening park gate.</p>
                </div>
            </div>
            <!-- Service 4-->
            <div class="col-lg-3 col-md-6">
                <div class="service-card p-4 h-100 border rounded">
                    <div class="text-orange-red fs-1 mb-3"><i class="bi bi-gear-wide-connected"></i></div>
                    <h5 class="fw-bold mb-2">Customization</h5>
                    <p class="small text-muted mb-0">We deliver outsourced services for tourists with fully customizable
                        preferences easily.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- TOP SELLING DESTINATIONS -->
    <div class="container py-5 my-3">
        <div class="text-center mb-5">
            <h5 class="text-uppercase text-secondary fw-semibold">Top Selling</h5>
            <h2 class="fw-bold fs-1">Top Destinations</h2>
        </div>

        <div class="row g-4">
            <!-- Destination 1-->
            <div class="col-lg-4 col-md-6">
                <div class="card destination-card h-100">
                    <img src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?w=500&auto=format&fit=crop&q=80"
                        class="card-img-top" alt="Rome, Italy">
                    <div class="card-body p-4 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0">Rome, Italy</h5>
                            <span class="fw-bold text-secondary">$5,420</span>
                        </div>
                        <p class="text-muted small"><i class="bi bi-cursor-fill text-dark me-2"></i> 10 Days Trip</p>
                    </div>
                </div>
            </div>
            <!-- Destination 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card destination-card h-100">
                    <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bG9uZG9ufGVufDB8fDB8fHww"
                        class="card-img-top" alt="London, UK">
                    <div class="card-body p-4 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0">London, UK</h5>
                            <span class="fw-bold text-secondary">$4,200</span>
                        </div>
                        <p class="text-muted small"><i class="bi bi-cursor-fill text-dark me-2"></i> 12 Days Trip</p>
                    </div>
                </div>
            </div>
            <!-- Destination 3-->
            <div class="col-lg-4 col-md-6">
                <div class="card destination-card h-100">
                    <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=500&auto=format&fit=crop&q=80"
                        class="card-img-top" alt="Full Europe">
                    <div class="card-body p-4 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0">Full Europe</h5>
                            <span class="fw-bold text-secondary">$15,000</span>
                        </div>
                        <p class="text-muted small"><i class="bi bi-cursor-fill text-dark me-2"></i> 28 Days Trip</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOKING -->
    <div class="container py-5 my-5">
        <div class="row align-items-center g-5">
            <!-- Left Grid-->
            <div class="col-md-6">
                <h5 class="text-uppercase fw-semibold text-secondary mb-2">Easy and Fast</h5>
                <h2 class="fw-bold fs-1 mb-4">Book Your Next Trip<br>In 3 Easy Steps</h2>

                <!-- Step 1 -->
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-warning text-white rounded-3 p-3 me-3 d-flex justify-content-center align-items-center"
                        style="width: 50px; height: 50px;">
                        <i class="bi bi-geo-alt-fill fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1" style="color: #181E4B;">Choose Destination</h6>
                        <p class="small text-muted mb-0">Select your favorite place from our global catalogue of tour
                            plans.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-danger text-white rounded-3 p-3 me-3 d-flex justify-content-center align-items-center"
                        style="width: 50px; height: 50px;">
                        <i class="bi bi-credit-card-fill fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1" style="color: #181E4B;">Make Payment</h6>
                        <p class="small text-muted mb-0">Pay securely with online payment systems and direct booking
                            receipts.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="d-flex align-items-start">
                    <div class="bg-success text-white rounded-3 p-3 me-3 d-flex justify-content-center align-items-center"
                        style="width: 50px; height: 50px;">
                        <i class="bi bi-airplane-engines-fill fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1" style="color: #181E4B;">Reach Airport on Selected Date</h6>
                        <p class="small text-muted mb-0">Have an incredible trip ready with all local travel
                            arrangements cleared.</p>
                    </div>
                </div>
            </div>

            <!-- Right Grid-->
            <div class="col-md-6">
                <div class="p-4 booking-card-preview mx-auto" style="max-width: 370px;">
                    <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=400&auto=format&fit=crop&q=80"
                        alt="Greece Trip" class="img-fluid rounded-4 mb-3"
                        style="height: 160px; width: 100%; object-fit: cover;">
                    <h5 class="fw-bold mb-2 text-dark">Trip To Greece</h5>
                    <p class="text-muted small mb-3">14-29 June | by Robbin joseph</p>
                    <!-- Small badges inside booking card -->
                    <div class="d-flex gap-2 mb-3 fs-5">
                        <span
                            class="bg-light text-secondary rounded-circle p-2 d-inline-flex align-items-center justify-content-center"
                            style="width: 35px; height: 35px;"><i class="bi bi-leaf"></i></span>
                        <span
                            class="bg-light text-secondary rounded-circle p-2 d-inline-flex align-items-center justify-content-center"
                            style="width: 35px; height: 35px;"><i class="bi bi-map"></i></span>
                        <span
                            class="bg-light text-secondary rounded-circle p-2 d-inline-flex align-items-center justify-content-center"
                            style="width: 35px; height: 35px;"><i class="bi bi-send"></i></span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted small"><i class="bi bi-building me-1"></i> 24 people going</span>
                        <span class="text-orange-red"><i class="bi bi-heart-fill"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NEWSLETTER PANEL -->
    <div class="container py-5">
        <div class="bg-light-orange p-5 rounded-5 text-center shadow-sm">
            <h2 class="fw-bold mb-4 px-lg-5">Subscribe to get information, latest news and other interesting offers
                about Jadoo</h2>
            <form class="row justify-content-center g-3">
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted"><i
                                class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control border-start-0 py-3" placeholder="Your email" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-orange-red w-100 py-3 fw-semibold">Subscribe</button>
                </div>
            </form>
        </div>
    </div>

    <!-- FOOTER SECTION -->
    <footer class="bg-white py-5 mt-5 border-top">
        <div class="container text-center">


            <h4 class="fw-bold mb-4">Contact Us</h4>

            <div
                class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 gap-md-5 mb-4 fs-5">
                <!-- Email -->
                <div class="d-flex align-items-center text-dark">
                    <i class="bi bi-envelope-fill text-orange-red me-2"></i>
                    <span>contact@jadoo.com</span>
                </div>

                <!-- Social Icons -->
                <div class="d-flex gap-3">
                    <a href="#" class="text-secondary"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-secondary"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-secondary"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-secondary"><i class="bi bi-linkedin"></i></a>
                </div>

                <!-- Phone Number -->
                <div class="d-flex align-items-center text-dark">
                    <i class="bi bi-phone-fill text-orange-red me-2"></i>
                    <span>+1 5589 55488 55</span>
                </div>
            </div>



            <p class="mb-0 text-muted">&copy; 2026 Jadoo Travel. All rights reserved.</p>
            <small class="text-muted">Designed with Bootstrap.</small>
        </div>
    </footer>

    <!--  Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>