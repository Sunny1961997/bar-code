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
        <h1 class="text-white fw-bold mb-4">Welcome to AKW Consultants</h1>
        <p class="lead fw-bold">Your trusted partner in business consulting.</p>
        {{-- <a href="#services" class="btn btn-primary btn-lg">Explore Services</a> --}}
    </div>
</section>



<div class="container py-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
        <!-- <h4 class="text-primary">Comapany</h4> -->
        <h1 class="display-5 mb-4">Book a Free Consultation</h1>
    </div>

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
            <button type="submit" class="btn btn-primary btn-lg">Book</button>
        </div>
    </form>
</div>
</div>

<section class="py-5">
    <div class="container">
        <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid;">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div>
                            <h4 class="mb-4">Email</h4>
                            <p class="mb-4">example@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div>
                            <h4 class="mb-4">Call Us</h4>
                            <p class="mb-4">+971.......</p>
                            <p class="mb-4">+971.......</p>
                            <p class="mb-4">+971.......</p>
                            <p class="mb-4">+971.......</p>
                            <p class="mb-4">+971.......</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div>
                            <h4 class="mb-4">Visit Us</h4>
                            <p>2603A, Saba 1, Cluster E, Jumeirah Lake Towers, Dubai, UAE</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div>
                            <h4 class="mb-4">Follow Us</h4>
                            <div class="d-flex justify-content-start">
                                <a class="btn btn-light rounded-circle p-3 me-2" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-light rounded-circle p-3 mx-2" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-light rounded-circle p-3 mx-2" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-light rounded-circle p-3 ms-2" href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-4">Our Location</h2>
            </div>
            <div class="col-12">
                <div class="ratio ratio-16x9">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21761.94479022698!2d55.25932090642559!3d25.19056849424511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sbd!4v1738500070173!5m2!1sen!2sbd" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layouts.footer')
