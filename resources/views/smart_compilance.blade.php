@include('layouts.header')

<!-- Hero Section -->
<section class="position-relative text-white d-flex align-items-center justify-content-center"
    style="height: 100vh; overflow: hidden;">
    <div class="hero-bg position-absolute top-0 start-0 w-100 h-100"
        style="background:
        url('{{ asset('img/worker.jpeg') }}') no-repeat center center; 
        background-size: cover; 
        background-position: center;
        z-index: -1;">
    </div>
    <div class="w-100 text-center px-3">
        <h1 class="text-white fw-bold mb-4">Welcome to GoAML Consultants</h1>
        <p class="lead fw-bold">Your trusted partner in business consulting.</p>
        {{-- <a href="#services" class="btn btn-primary btn-lg">Explore Services</a> --}}
    </div>
</section>



<div class="container pb-4">
    <div class="row align-items-center">
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
            <div class="bg-primary position-relative overflow-hidden">
                <img src="{{ asset('img/offer-2.jpg') }}" class="img-fluid w-100" alt="">
                <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                </div>
            </div>
        </div>
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <div>
                <h3 class="fw-bold mb-4">Smart GoAML Compliance</h3>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                    excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                    accusamus.
                </p>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="row g-4">
                    <!-- Supply Chain Review Card -->
                    <div class="col-md-6 border rounded">
                        <div class="card border-light rounded-4 h-100">
                            <div class="card-body">
                                <i class="bi bi-diagram-2 fs-3 mb-3 text-primary"></i>
                                <h3 class="h5">Supply Chain Review Mapping</h3>
                                <p class="text-muted mb-0">We meticulously map your supply chain to identify areas where
                                    responsible practices.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Policy & Compliance Card -->
                    <div class="col-md-6 border rounded">
                        <div class="card border-light rounded-4 h-100">
                            <div class="card-body">
                                <i class="bi bi-gear fs-3 mb-3 text-primary"></i>
                                <h3 class="h5">Policy, Procedure, & Compliance</h3>
                                <p class="text-muted mb-0">Our team helps develop and implement responsible policies.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Manual Development Card -->
                    <div class="col-12 border rounded">
                        <div class="card border-light rounded-4">
                            <div class="card-body">
                                <i class="bi bi-file-text fs-3 mb-3 text-primary"></i>
                                <h3 class="h5">Manual Development</h3>
                                <p class="text-muted mb-0">We assist in the creation of manuals and books that outline
                                    best practices for responsible supply chain management.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Explore More Button -->
                    <div class="col-12 text-end">
                        <button class="btn btn-info text-white rounded-pill px-4">
                            Explore More →
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="position-relative">
                    <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
                        <h2 class="display-5 fw-bold text-white">Supply Chain Compliance</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="position-relative">
                    <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
                        <h2 class="display-5 fw-bold text-white">Supply Chain Compliance</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="row g-4">
                    <!-- Supply Chain Review Card -->
                    <div class="col-md-6 border rounded">
                        <div class="card border-light rounded-4 h-100">
                            <div class="card-body">
                                <i class="bi bi-diagram-2 fs-3 mb-3 text-primary"></i>
                                <h3 class="h5">Supply Chain Review Mapping</h3>
                                <p class="text-muted mb-0">We meticulously map your supply chain to identify areas where
                                    responsible practices.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Policy & Compliance Card -->
                    <div class="col-md-6 border rounded">
                        <div class="card border-light rounded-4 h-100">
                            <div class="card-body">
                                <i class="bi bi-gear fs-3 mb-3 text-primary"></i>
                                <h3 class="h5">Policy, Procedure, & Compliance</h3>
                                <p class="text-muted mb-0">Our team helps develop and implement responsible policies.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Manual Development Card -->
                    <div class="col-12 border rounded">
                        <div class="card border-light rounded-4">
                            <div class="card-body">
                                <i class="bi bi-file-text fs-3 mb-3 text-primary"></i>
                                <h3 class="h5">Manual Development</h3>
                                <p class="text-muted mb-0">We assist in the creation of manuals and books that outline
                                    best practices for responsible supply chain management.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Explore More Button -->
                    <div class="col-12 text-end">
                        <button class="btn btn-info text-white rounded-pill px-4">
                            Explore More →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5 bg-secondary bg-gradient text-white">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-4">Industries</h1>
        </div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-4 justify-content-center text-center">
            <!-- Real Estate -->
            <div class="col">
                <div class="d-flex flex-column align-items-center">
                    <div class="bg-white rounded-circle p-3 mb-3">
                        <i class="bi bi-house-door fs-4 text-primary"></i>
                    </div>
                    <span class="small">Real Estate</span>
                </div>
            </div>


            <!-- Trading -->
            <div class="col">
                <div class="d-flex flex-column align-items-center">
                    <div class="bg-white rounded-circle p-3 mb-3">
                        <i class="bi bi-graph-up fs-4 text-primary"></i>
                    </div>
                    <span class="small">Trading</span>
                </div>
            </div>

            <!-- FMCG -->
            <div class="col">
                <div class="d-flex flex-column align-items-center">
                    <div class="bg-white rounded-circle p-3 mb-3">
                        <i class="bi bi-cart fs-4 text-primary"></i>
                    </div>
                    <span class="small">FMCG</span>
                </div>
            </div>


            <!-- Investment & Holding -->
            <div class="col">
                <div class="d-flex flex-column align-items-center">
                    <div class="bg-white rounded-circle p-3 mb-3">
                        <i class="bi bi-building fs-4 text-primary"></i>
                    </div>
                    <span class="small">Investment & Holding</span>
                </div>
            </div>


            <!-- Construction -->
            <div class="col">
                <div class="d-flex flex-column align-items-center">
                    <div class="bg-white rounded-circle p-3 mb-3">
                        <i class="bi bi-tools fs-4 text-primary"></i>
                    </div>
                    <span class="small">Construction</span>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-4">Our Experts</h1>
        </div>

        <div class="row g-4">
            <!-- Faisal Ahmed -->
            <div class="col-md-6">
                <div class="d-flex flex-column flex-md-row gap-4 align-items-start">
                    <img src="{{ asset('img/team-1.jpg') }}" alt="Faisal Ahmed" class="rounded-3" width="200">
                    <div>
                        <h3 class="h4 mb-1">Faisal Ahmed</h3>
                        <p class="text-muted mb-3">CEO & Managing Partner</p>
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                        <button class="btn btn-info text-white rounded-pill px-4">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Kenneth Khalkho -->
            <div class="col-md-6">
                <div class="d-flex flex-column flex-md-row gap-4 align-items-start">
                    <img src="{{ asset('img/team-2.jpg') }}" alt="Kenneth Khalkho" class="rounded-3" width="200">
                    <div>
                        <h3 class="h4 mb-1">Kenneth Khalkho</h3>
                        <p class="text-muted mb-3">Director</p>
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                        <button class="btn btn-info text-white rounded-pill px-4">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
