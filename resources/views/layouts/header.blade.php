<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Brand Name - Website moto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Contact button start -->
    <div class="position-fixed end-0 top-50 translate-middle-y">
        <div class="d-flex flex-column">
            <button class="btn btn-white border-dark bg-white btn-lg d-none d-md-block">
                <i class="bi bi-telephone text-dark"></i>
            </button>
    
            <button class="btn btn-dark btn-lg d-none d-md-block">
                <i class="bi bi-envelope"></i>
            </button>
    
            <button class="btn btn-success btn-lg d-none d-md-block">
                <i class="bi bi-whatsapp"></i>
            </button>
        </div>
    </div>
    
    <!-- Contact button end -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i class="fas fa-clock text-primary me-2" aria-hidden="true"></i>Mon - Sat: 09:00 - 18:00 </a>
                    <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex justify-content-end ms-2">
                    <a class="btn btn-md-square btn-light rounded-circle me-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="#"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0 pb-3">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <!-- <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Logo</h1> -->
                <img src="{{ asset('img/nanoLogo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('/') }}"
                        class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Services</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="team.html" class="dropdown-item">Our team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="offer.html" class="dropdown-item">Our offer</a>
                            <a href="FAQ.html" class="dropdown-item">FAQs</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>

                    <!-- Sustainability link -->
                    <a href="{{ route('sustainability') }}" class="nav-item nav-link {{ request()->is('sustainability') ? 'active' : '' }}">Sustainability</a>
                    <a href="{{ route('smart-compilance') }}" class="nav-item nav-link {{ request()->is('smart-compilance') ? 'active' : '' }}">Smart GoALM Compilance</a>
                    <a href="{{ route('insights') }}" class="nav-item nav-link {{ request()->is('insights') ? 'active' : '' }}">Insights</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About GoAKW</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact GoAKW</a>

                    {{-- <a href="#company" class="nav-item nav-link">Company</a>
                    <a href="#investors" class="nav-item nav-link">Investors</a>
                    <a href="#about_us" class="nav-item nav-link">Our Company</a> --}}
                    <!-- <a href="contact.html" class="nav-item nav-link">Contact Us</a> -->
                </div>
                <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a> -->
            </div>
        </nav>


    </div>
    <!-- Navbar & Hero End -->
