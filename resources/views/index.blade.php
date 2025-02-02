@include('layouts.header')

<!-- Carousel Start -->
<div id="home" class="header-carousel owl-carousel vh-100">
    @foreach ($homeSliders as $slider)
        <div class="header-carousel-item vh-100">
            @if ($slider->image)
                <img src="{{ asset($slider->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $slider->title }}">
            @else
                <img src="{{ asset('img/default-image.webp') }}" class="w-100 h-100 object-fit-cover" alt="Default Image">
            @endif
            <div class="carousel-caption d-flex align-items-center">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h1 class="text-white fw-bold mb-4">
                                    {{ $slider->title }}
                                </h1>
                                <h6 class="display-4 text-white mb-4">
                                    {{ $slider->subtitle }}
                                </h6>
                                <p class="mb-5 fs-5">
                                    {{ $slider->description }}
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    @if ($slider->url)
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                                            href="{{ $slider->url }}">
                                            <i class="fas fa-play-circle me-2"></i> Watch Video
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- Carousel End -->


<!-- About us Start -->
{{-- <div id="about_us" class="container-fluid about py-5"> --}}
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <!-- <h4 class="text-primary">Comapany</h4> -->
            <h1 class="display-5 mb-4">About Us</h1>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid rounded w-100" alt="">
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <p class="">
                        Established in 2018 and headquartered in Dubai, UAE, with a branch in London, AKW Consultants
                        has quickly gained recognition as an award-winning leader in governance, risk and compliance,
                        audit, tax advisory, financial accounting, transaction advisory, sustainability and responsible
                        business practices, and business strategy advisory services. Our team of over 70 experts serves
                        more than 1,000 clients worldwide, guided by a commitment to ethical and sustainable practices,
                        certified with ISO 9001:2015 and accredited as a DMCC-approved UAE Good Delivery Auditor for the
                        Gold and Precious Metals sector. We continuously expand our service offerings and recently we
                        have ventured into AI Governance, Software Development Solutions, and Cyber Security and IT
                        Advisory, showcasing our dedication to innovation and addressing the evolving needs of modern
                        businesses.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About us End -->

    <div class="container-fluid testimonial pb-1">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-5 mb-4">Our Expertise</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <!-- Example of a testimonial item -->
                <div class="testimonial-item" style="background-image: url('img/service-1.jpg');">
                    <div class="testimonial-img">
                        <h4>Gender</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi.</p>
                    </div>
                </div>
                <div class="testimonial-item" style="background-image: url('img/service-2.jpg');">
                    <div class="testimonial-img">
                        <h4>Sustainability</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi.</p>
                    </div>
                </div>
                <div class="testimonial-item" style="background-image: url('img/service-3.jpg');">
                    <div class="testimonial-img">
                        <h4>Mapping our Impact</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi.</p>
                    </div>
                </div>
                <div class="testimonial-item" style="background-image: url('img/service-4.jpg');">
                    <div class="testimonial-img">
                        <h4>Responsible Beauty</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi.</p>
                    </div>
                </div>
                <div class="testimonial-item" style="background-image: url('img/service-5.jpg');">
                    <div class="testimonial-img">
                        <h4>Ethics And Corporate Responsibility</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi.</p>
                    </div>
                </div>
                <div class="testimonial-item" style="background-image: url('img/service-6.jpg');">
                    <div class="testimonial-img">
                        <h4>Good Governance</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid testimonial pb-1">
        <div class="container pb-5 bg-light rounded">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-5 mb-4">Trending</h1>
                <p>Latest industry insights and event coverage</p>
            </div>
            <div class="header-carousel owl-carousel wow fadeInUp" data-wow-delay="0.2s">
                <!-- Testimonial Item 1 -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bg-primary rounded">
                                <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid rounded w-100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="text-start">
                                <h2>Establishment</h2>
                                <p class="text-dark">
                                    Established in 2018 and headquartered in Dubai, UAE, with a branch in London, AKW
                                    Consultants has quickly gained recognition...
                                </p>
                                <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Item 2 -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bg-primary rounded">
                                <img src="{{ asset('img/service-2.jpg') }}" class="img-fluid rounded w-100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="text-start">
                                <h2>Welcome</h2>
                                <p class="text-dark">
                                    We welcome you to craft your unique expression and embrace real confidence. We are
                                    the
                                    leading shop which shows authentic brands for all the beauty products and cosmetics.
                                    Here beauty isn’t just about products. We offer the best prices for our selected
                                    beauty
                                    products.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Testimonial Item 3 -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bg-primary rounded">
                                <img src="{{ asset('img/service-3.jpg') }}" class="img-fluid rounded w-100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="text-start">
                                <h2>Go AKW Consultants</h2>
                                <p class="text-dark">
                                    Go AKW Consultants had the privilege of attending CYSEC GLOBAL 2023 on 20th
                                    September, a
                                    monumental event in the world of cyber security, as a Silver Sponsor. This 7th and
                                    biggest global edition of CYSEC was held in the heart of the UAE, Abu Dhabi, and
                                    brought
                                    together a remarkable assembly of over 300 delegates representing the most
                                    prestigious
                                    organisations from across the globe.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>





    <!-- Integrated Growth Strategy Start -->
    {{-- <div id="company" class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <!-- <h4 class="text-primary">Comapany</h4> -->
                <h1 class="display-5 mb-4">Integrated Growth Strategy</h1>
                <p class="mb-0">
                    We welcome you to craft your unique expression and embrace real confidence. We are the leading shop which shows authentic brands for all the beauty products and cosmetics. Here beauty isn’t just about products. We offer the best prices for our selected beauty products. 
                </p>
            </div>

            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                @foreach ($categories as $category)
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="{{ asset($category->image) }}" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">{{ $category->name }}</a>
                        <p class="mb-4">
                            {{ $category->short_description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- Integrated Growth Strategy End -->

    <!-- Partners & Investors Start -->
    {{-- <div id="investors" class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Partners & Investors</h4>
                <h1 class="display-5 mb-4">Meet Our Investors</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/team-1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/team-2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/team-3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/team-4.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- Partners & Investors End -->

    <!-- Our company Start -->
    {{-- <div id="about_us" class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Our company</h4>
                        <h1 class="display-5 mb-4">Meet our company unless miss the opportunity</h1>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum velit
                            temporibus
                            repudiandae ipsa, eaque perspiciatis cumque incidunt tenetur sequi reiciendis.
                        </p>
                        <div class="row g-4">
                            <!-- <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Business Consuluting</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Year Of Expertise Since 2011</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover
                                    Now</a>
                            </div> -->
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Call Us</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">+⁠00971502174128</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="{{ asset('img/our-company.webp') }}" class="img-fluid rounded w-100"
                            alt="">
                        <div class=""
                            style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Our company End -->



    <!-- Anual Report Start -->
    <!-- <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-5 mb-4">2024 ANNUAL REPORT</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <h4>Brands</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <h4>Innovation</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <h4>Product Safety</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <h4>Ingredients</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <h4>Fragrance</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <h4>Be Cruelty Free</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <h4>Fragrance</h4>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Anual Report End -->


    <!-- Our Impact Start -->
    <div class="container-fluid testimonial pb-2">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <!-- <h4 class="text-primary">Testimonial</h4> -->
                <h1 class="display-5 mb-1">Our Impact</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit..
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="text-center">
                    <h4 class="text-dark">Gender</h4>
                    <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                        blanditiis
                        excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                        accusamus.
                    </p>
                </div>
                <div class="text-center">
                    <h4 class="text-dark">Sustainability</h4>
                    <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                        blanditiis
                        excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                        accusamus.
                    </p>
                </div>
                <div class="text-center">
                    <h4 class="text-dark">Mapping our Impact</h4>
                    <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                        blanditiis
                        excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                        accusamus.
                    </p>
                </div>
                <div class="text-center">
                    <h4 class="text-dark">Responsible Beauty</h4>
                    <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                        blanditiis
                        excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                        accusamus.
                    </p>
                </div>
                <div class="text-center">
                    <h4 class="text-dark">Ethics And Corporate Responsibility</h4>
                    <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                        blanditiis
                        excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                        accusamus.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- Our Impact End -->



    <!-- Services Start -->
    {{-- <div class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Story</h4>
                <h1 class="display-5 mb-4">We Services provided best offer</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4"> Strategy Consulting</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint?
                                Excepturi facilis neque nesciunt similique officiis veritatis,
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/service-2.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">Financial Advisory</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint?
                                Excepturi facilis neque nesciunt similique officiis veritatis,
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/service-3.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">Managements</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint?
                                Excepturi facilis neque nesciunt similique officiis veritatis,
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/service-4.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">Supply Optimization</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint?
                                Excepturi facilis neque nesciunt similique officiis veritatis,
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/service-5.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">Hr Consulting</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint?
                                Excepturi facilis neque nesciunt similique officiis veritatis,
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/service-6.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">Marketing Consulting</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint?
                                Excepturi facilis neque nesciunt similique officiis veritatis,
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Services End -->

    <!-- Features Start -->
    {{-- <div class="container-fluid feature pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Rewards & Offers</h4>
                <h1 class="display-5 mb-4">Connecting businesses, ideas, and people for greater impact.</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-chart-line fa-4x text-primary"></i>
                        </div>
                        <h4>Global Management</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-university fa-4x text-primary"></i>
                        </div>
                        <h4>Corporate Banking</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-file-alt fa-4x text-primary"></i>
                        </div>
                        <h4>Asset Management</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                        </div>
                        <h4>Investment Bank</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Features End -->


    <!-- Offer Start -->
    {{-- <div class="container-fluid offer-section pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Offer</h4>
                <h1 class="display-5 mb-4">Benefits We offer</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="nav nav-pills bg-light rounded p-5">
                        <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                            <h5 class="mb-0">Lending money for investment of your new projects</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                            <h5 class="mb-0">Lending money for investment of your new projects</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                            <h5 class="mb-0">Mobile payment is more flexible and easy for all investors</h5>
                        </a>
                        <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                            <h5 class="mb-0">all transaction is kept free for the member of pro traders</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="tab-content">
                        <div id="collapseOne" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="{{ asset('img/offer-1.jpg') }}" class="img-fluid w-100 rounded"
                                        alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                        amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                        dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="{{ asset('img/offer-2.jpg') }}" class="img-fluid w-100 rounded"
                                        alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                        amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                        dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="{{ asset('img/offer-3.jpg') }}" class="img-fluid w-100 rounded"
                                        alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                        amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                        dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="{{ asset('img/offer-4.jpg') }}" class="img-fluid w-100 rounded"
                                        alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                        amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                        dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Offer End -->

    <!-- FAQs Start -->
    <!-- <div class="container-fluid faq-section pb-5">
        <div class="container pb-5 overflow-hidden">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">FAQs</h4>
                <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What Does This Tool Do?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What Are The Disadvantages Of Online Trading?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Is Online Trading Safe?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    What Is Online Trading, And How Dose It Work?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Which App Is Best For Online Trading?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    How To Create A Trading Account?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded">
                        <img src="{{ asset('img/about-2.png') }}" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- FAQs End -->
    <!-- Contact Us Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h1 class="modal-title text-center w-100" id="contactModalLabel">Contact Us</h1>
                    <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control" placeholder="Email Address" required>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" class="form-control" placeholder="Contact No" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-info-circle"></i></span>
                                    <input type="text" class="form-control" placeholder="Service Details" required>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                                <textarea class="form-control" rows="3" placeholder="How can we help you? Feel free to get in touch!" required></textarea>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary btn-lg">GET QUOTE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
