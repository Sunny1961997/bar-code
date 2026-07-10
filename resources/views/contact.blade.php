@include('layouts.header')

<section class="page-hero">
    <div class="container">
        <span class="page-kicker">Speak With a Compliance Specialist</span>
        <h1>Get a clear next step for your AML obligations.</h1>
        <p>Tell us where your compliance programme stands. We’ll help you identify the practical support your UAE-regulated business needs.</p>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-7">
                <div class="modern-card">
                    <h2 class="h3 mb-2">Book a Free Consultation</h2>
                    <p class="mb-4">Complete the form and our team will respond with a suitable next step.</p>
                    <form id="contact-consultation" class="row g-3" method="POST" action="{{ route('send.consultation') }}" data-ajax-form>
                        @csrf
                        <div class="col-md-6">
                            <label class="form-label" for="contact-name">Full Name</label>
                            <input id="contact-name" type="text" name="name" class="form-control" autocomplete="name" placeholder="e.g. Aisha Khan" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="contact-email">Work Email</label>
                            <input id="contact-email" type="email" name="email" class="form-control" autocomplete="email" spellcheck="false" placeholder="e.g. name@company.com" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="contact-phone">Phone Number</label>
                            <input id="contact-phone" type="tel" name="phone" class="form-control" autocomplete="tel" inputmode="tel" placeholder="e.g. +971 50 123 4567" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="contact-service">Service Needed</label>
                            <select id="contact-service" name="service" class="form-select" autocomplete="off" required>
                                <option value="">Select a service…</option>
                                <option>AML/CFT Framework</option>
                                <option>goAML Registration & Reporting</option>
                                <option>KYC, CDD & Risk Assessment</option>
                                <option>Screening & Monitoring</option>
                                <option>Training & Advisory</option>
                                <option>Audit & Remediation</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="contact-message">How Can We Help?</label>
                            <textarea id="contact-message" name="message" class="form-control" placeholder="Briefly describe your current compliance challenge…" required></textarea>
                        </div>
                        <div class="col-12"><div class="form-status" data-form-status role="status" aria-live="polite" tabindex="-1"></div></div>
                        <div class="col-12"><button type="submit" class="btn button-primary">Send Consultation Request</button></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="d-grid gap-3">
                    <div class="modern-card">
                        <span class="modern-card__icon"><i class="bi bi-envelope" aria-hidden="true"></i></span>
                        <h2 class="h5">Email</h2>
                        <x-company-contact field="primary_email" />
                    </div>
                    <div class="modern-card">
                        <span class="modern-card__icon"><i class="bi bi-telephone" aria-hidden="true"></i></span>
                        <h2 class="h5">Call Us</h2>
                        <x-company-contact field="phones" />
                    </div>
                    <div class="modern-card">
                        <span class="modern-card__icon"><i class="bi bi-geo-alt" aria-hidden="true"></i></span>
                        <h2 class="h5">UAE Office</h2>
                        <address class="mb-0"><x-company-contact field="registered_address" /></address>
                    </div>
                    <div class="modern-card">
                        <span class="modern-card__icon"><i class="bi bi-share" aria-hidden="true"></i></span>
                        <h2 class="h5">Follow &amp; Contact</h2>
                        <p>Connect with our team through an official company channel.</p>
                        <div class="contact-social-links" aria-label="Official social and messaging channels">
                            <x-company-contact field="facebook" :external="true" :icon-only="true"><i class="bi bi-facebook" aria-hidden="true"></i></x-company-contact>
                            <x-company-contact field="linkedin" :external="true" :icon-only="true"><i class="bi bi-linkedin" aria-hidden="true"></i></x-company-contact>
                            <x-company-contact field="whatsapp" :external="true" :icon-only="true"><i class="bi bi-whatsapp" aria-hidden="true"></i></x-company-contact>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
