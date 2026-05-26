<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Go AML - Compliance Without Compromise</title>
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    
    <!-- Contact button start -->
    <!-- Floating Chat Buttons -->
    <div class="position-fixed end-0 top-50 translate-middle-y p-3" style="z-index: 1050;">
        <div class="d-flex flex-column align-items-end">
            <!-- Phone Button -->
            <a href="tel:+971509627076" class="btn btn-white border-dark bg-white btn-lg mb-2 d-block">
                <i class="bi bi-telephone text-dark"></i>
            </a>

            <!-- Email Button -->
            <a href="mailto:infoamlshop@gmail.com" class="btn btn-dark btn-lg mb-2 d-block">
                <i class="bi bi-envelope"></i>
            </a>

            <!-- WhatsApp Chat Button -->
            <a href="https://wa.me/+971509627076" target="_blank" class="btn btn-success btn-lg d-block">
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>
    </div>





    <!-- Contact button end -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i class="fas fa-clock text-primary me-2"
                            aria-hidden="true"></i>Mon - Sat: 09:00 - 18:00 </a>
                    <a href="tel:+971509627076" class="text-muted small me-4"><i
                            class="fas fa-phone-alt text-primary me-2"></i>+971509627076</a>
                    <a href="tel:+971562953927" class="text-muted small me-4"></i>+971562953927</a>
                    <a href="mailto:infoamlshop@gmail.com" class="text-muted small me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>infoamlshop@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex justify-content-end ms-2">
                    <a class="btn btn-md-square btn-light rounded-circle me-2"
                        href="https://www.facebook.com/profile.php?id=61567133731825"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="#"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-md-square btn-light rounded-circle ms-2"
                        href="https://www.linkedin.com/company/goaml-consultancy/?viewAsMember=true"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0 pb-3 shadow">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <div class="d-flex align-items-center w-100">
                <a href="" class="navbar-brand p-0 m-0">
                    <img src="{{ asset('img/go-aml3.png') }}" alt="Logo">
                </a>
                <h4 class="fst-italic mb-0 mx-2" style="color: #292f60;">
                    <span class="d-none d-md-inline">Compliance Without Compromise</span>
                    <span class="d-md-none">
                        Compliance<br>
                        Without<br>
                        Compromise
                    </span>
                </h4>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('/') }}"
                        class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }} text-nowrap">Home</a>

                    
                    <a href="{{ route('compliance-solutions') }}"
                        class="nav-item nav-link {{ request()->is('compliance-solutions') ? 'active' : '' }} text-nowrap">Compliance Solutions</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }} text-nowrap">About Us</a>
                    {{-- <a href="{{ route('partnership') }}"
                        class="nav-item nav-link {{ request()->is('partnership') ? 'active' : '' }}">Partnership</a> --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link text-nowrap" data-bs-toggle="dropdown"
                            style="color: black !important;">
                            <span class="dropdown-toggle">Resources</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.html" class="dropdown-item">Case Studies</a>
                            <a href="team.html" class="dropdown-item">Certifications</a>
                            <div class="nested-dropdown">
                                <a href="#"
                                    class="dropdown-item d-flex justify-content-between align-items-center">
                                    Training
                                    <i class="fas fa-chevron-right ms-2"></i>
                                </a>
                                <div class="nested-menu">
                                    <a href="#" class="dropdown-item">Feature 1</a>
                                    <a href="#" class="dropdown-item">Feature 2</a>
                                    <a href="#" class="dropdown-item">Feature 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="{{ route('insights') }}"
                            class="nav-item nav-link {{ request()->is('blog') ? 'active' : '' }} text-nowrap"
                            style="color: black !important;">
                            <span class="dropdown-toggle">
                                Compliance Insights
                            </span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('blog') }}" class="dropdown-item">Blogs</a>
                            <a href="{{ route('news') }}" class="dropdown-item">News</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link text-nowrap">Contact Us</a>
                </div>
                <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a> -->
            </div>
        </nav>


    </div>
    <!-- Navbar & Hero End -->
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed top-50 start-50 translate-middle d-flex align-items-center justify-content-center" style="width: 100vw; height: 100vh; z-index: 1050;">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    
    <!-- Spinner End -->
