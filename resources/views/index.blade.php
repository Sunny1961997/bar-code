@include('layouts.header')

@php
    $heroSlider = $homeSliders->first();
    $heroImage = $heroSlider && $heroSlider->image ? asset($heroSlider->image) : asset('img/default-image.webp');
@endphp

<div class="modal fade landing-intro-modal" id="landingIntroModal" tabindex="-1" aria-labelledby="landingIntroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-body p-0">
                <div class="row g-0">
                    <div class="col-lg-5 landing-intro-modal__visual">
                        <img src="{{ $heroImage }}" alt="AML compliance overview" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="col-lg-7 p-4 p-md-5 landing-intro-modal__content">
                        <button type="button" class="btn-close landing-intro-modal__close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <span class="section-kicker section-kicker--dark">Welcome</span>
                        <h2 class="mt-3">Need a clearer AML compliance setup?</h2>
                        <p class="mb-4">
                            Explore our structured AML support for regulated UAE businesses, or contact us directly for a tailored review.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#contact" class="btn btn-primary rounded-pill px-4">Contact Us</a>
                            <a href="#services" class="btn btn-outline-primary rounded-pill px-4">View Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="landing-page-shell">
    <section class="landing-hero" id="home">
        <div class="landing-hero__backdrop"></div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-kicker">AML compliance for regulated UAE businesses</span>
                    <h1 class="landing-hero__title">
                        {{ optional($heroSlider)->title ?? 'AML Compliance, Simplified for UAE-Regulated Businesses' }}
                    </h1>
                    <p class="landing-hero__lead">
                        {{ optional($heroSlider)->description ?? 'Structured AML, CFT, and regulatory support for firms that need practical controls, clear reporting, and a reliable compliance partner.' }}
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="#contact" class="btn btn-light btn-lg rounded-pill landing-btn-primary">
                            Request a Consultation
                        </a>
                        <a href="#services" class="btn btn-outline-light btn-lg rounded-pill landing-btn-secondary">
                            Explore Services
                        </a>
                    </div>

                    <div class="hero-metrics mt-5">
                        <div class="hero-metric">
                            <span>01</span>
                            <strong>Risk-based design</strong>
                            <small>Practical controls tailored to your sector and operating model.</small>
                        </div>
                        <div class="hero-metric">
                            <span>02</span>
                            <strong>Regulatory readiness</strong>
                            <small>Policies, procedures, and evidence that stand up to review.</small>
                        </div>
                        <div class="hero-metric">
                            <span>03</span>
                            <strong>End-to-end support</strong>
                            <small>From onboarding to escalation, reporting, and ongoing advice.</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="hero-preview-card">
                        <div class="hero-preview-card__image">
                            <img src="{{ $heroImage }}" alt="{{ optional($heroSlider)->title ?? 'AML compliance overview' }}">
                        </div>
                        <div class="hero-preview-card__body">
                            <div class="hero-preview-pill">UAE AML / CFT controls</div>
                            <h2>Clear structure for complex obligations</h2>
                            <p>
                                Replace ad hoc compliance with a repeatable operating framework for regulated teams,
                                oversight, screening, and reporting.
                            </p>
                            <div class="hero-preview-grid">
                                <div>
                                    <strong>Policies</strong>
                                    <span>aligned with risk</span>
                                </div>
                                <div>
                                    <strong>Screening</strong>
                                    <span>watchlist checks</span>
                                </div>
                                <div>
                                    <strong>Reporting</strong>
                                    <span>audit-ready records</span>
                                </div>
                                <div>
                                    <strong>Support</strong>
                                    <span>ongoing guidance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-section landing-split-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="split-media-card">
                        <img src="{{ $heroImage }}" alt="AML controls and compliance workflow">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.15s">
                    <span class="section-kicker section-kicker--dark">Structured compliance approach</span>
                    <h2 class="section-title">AML controls built for regulated businesses</h2>
                    <p class="section-copy">
                        We help organisations move from scattered compliance tasks to a structured workflow that can be trained,
                        monitored, and reviewed with confidence.
                    </p>
                    <div class="feature-list">
                        <div class="feature-list__item">
                            <strong>1. Onboarding clarity</strong>
                            <span>Practical customer due diligence and risk classification.</span>
                        </div>
                        <div class="feature-list__item">
                            <strong>2. Ongoing monitoring</strong>
                            <span>Screening and escalation routines that are easy to maintain.</span>
                        </div>
                        <div class="feature-list__item">
                            <strong>3. Reporting confidence</strong>
                            <span>Documentation and response readiness for internal and regulator review.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-section landing-card-section" id="services">
        <div class="container">
            <div class="section-heading wow fadeInUp" data-wow-delay="0.1s">
                <span class="section-kicker section-kicker--dark">Our services</span>
                <h2 class="section-title text-center">Compliance support that covers the full workflow</h2>
                <p class="section-copy text-center mx-auto">
                    Designed for firms that need practical implementation, not just policy templates.
                </p>
            </div>

            <div class="row g-4 mt-1">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <article class="service-card">
                        <span class="service-card__icon"><i class="bi bi-person-badge"></i></span>
                        <h3>Customer Onboarding & Due Diligence</h3>
                        <p>Build a consistent onboarding path with risk checks, evidence capture, and approval flow.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.18s">
                    <article class="service-card">
                        <span class="service-card__icon"><i class="bi bi-search"></i></span>
                        <h3>Watchlist Screening</h3>
                        <p>Reduce exposure with screening steps for customers, counterparties, and related parties.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.26s">
                    <article class="service-card">
                        <span class="service-card__icon"><i class="bi bi-journal-check"></i></span>
                        <h3>Regulatory Reporting</h3>
                        <p>Document the escalation and reporting trail so decisions are easier to review later.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.34s">
                    <article class="service-card">
                        <span class="service-card__icon"><i class="bi bi-shield-check"></i></span>
                        <h3>Advisory & Support</h3>
                        <p>Get ongoing support for governance, internal controls, and day-to-day compliance questions.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band">
        <div class="container">
            <div class="section-heading section-heading--light wow fadeInUp" data-wow-delay="0.1s">
                <span class="section-kicker">Why clients choose us</span>
                <h2 class="section-title text-center text-white">Fast structure, clear governance, lower operational friction</h2>
            </div>
            <div class="row g-4 mt-1">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="band-feature-card">
                        <h3>Designed for regulated teams</h3>
                        <p>We focus on the controls and processes teams actually use, not just static documents.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.18s">
                    <div class="band-feature-card">
                        <h3>Built for repeatability</h3>
                        <p>Create a stable operating rhythm for onboarding, screening, review, and escalation.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.26s">
                    <div class="band-feature-card">
                        <h3>Clear evidence trail</h3>
                        <p>Keep a cleaner record of decisions and supporting evidence for audits and supervision.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.34s">
                    <div class="band-feature-card">
                        <h3>Risk-based thinking</h3>
                        <p>Structure the compliance program around actual exposure, not a generic checklist.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.42s">
                    <div class="band-feature-card">
                        <h3>Practical advisory support</h3>
                        <p>When the rules move, you still need a team that can translate them into action quickly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.50s">
                    <div class="band-feature-card">
                        <h3>Built for growth</h3>
                        <p>Scale the control framework as your customer base, product set, and obligations expand.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-section landing-card-section">
        <div class="container">
            <div class="section-heading wow fadeInUp" data-wow-delay="0.1s">
                <span class="section-kicker section-kicker--dark">Value propositions</span>
                <h2 class="section-title text-center">What makes the engagement efficient</h2>
                <p class="section-copy text-center mx-auto">
                    The same compliance outcome, delivered with a clearer workflow and a better execution path.
                </p>
            </div>
            <div class="row g-4 mt-1">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <article class="value-card">
                        <h3>Integrated AML compliance</h3>
                        <p>Policies, process, and governance aligned into one working system.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.18s">
                    <article class="value-card">
                        <h3>Audit-ready reporting</h3>
                        <p>Records and outputs prepared with review and traceability in mind.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.26s">
                    <article class="value-card">
                        <h3>Risk-based approach</h3>
                        <p>Prioritise controls where exposure is highest and reduce unnecessary friction elsewhere.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.34s">
                    <article class="value-card">
                        <h3>Designed for regulated firms</h3>
                        <p>Practical support for SMEs, DNFBPs, and larger compliance-led organisations.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-section landing-faq-section bg-light">
        <div class="container">
            <div class="section-heading wow fadeInUp" data-wow-delay="0.1s">
                <span class="section-kicker section-kicker--dark">AML Meter FAQs</span>
                <h2 class="section-title text-center">A few quick answers before we speak</h2>
            </div>
            <div class="accordion faq-accordion mt-4 wow fadeInUp" data-wow-delay="0.15s" id="landingFaqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqOneHeading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                            What sectors do you support?
                        </button>
                    </h2>
                    <div id="faqOne" class="accordion-collapse collapse show" aria-labelledby="faqOneHeading" data-bs-parent="#landingFaqAccordion">
                        <div class="accordion-body">
                            We support regulated businesses across financial services, real estate, precious metals, and other UAE compliance-heavy sectors.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqTwoHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                            Can you help us improve our current controls?
                        </button>
                    </h2>
                    <div id="faqTwo" class="accordion-collapse collapse" aria-labelledby="faqTwoHeading" data-bs-parent="#landingFaqAccordion">
                        <div class="accordion-body">
                            Yes. We can review your current setup and rebuild the workflow so it is easier to maintain and easier to evidence.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqThreeHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                            Do you offer ongoing support?
                        </button>
                    </h2>
                    <div id="faqThree" class="accordion-collapse collapse" aria-labelledby="faqThreeHeading" data-bs-parent="#landingFaqAccordion">
                        <div class="accordion-body">
                            Yes. We can support the ongoing compliance cycle, including policy maintenance, controls, and advisory follow-up.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-cta">
        <div class="container">
            <div class="cta-panel wow fadeInUp" data-wow-delay="0.1s">
                <div>
                    <span class="section-kicker">Need a clearer AML workflow?</span>
                    <h2>Bring structure to compliance without adding unnecessary friction.</h2>
                </div>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#contact" class="btn btn-light btn-lg rounded-pill landing-btn-primary">Get Started</a>
                    <a href="#services" class="btn btn-outline-light btn-lg rounded-pill landing-btn-secondary">See Services</a>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-section landing-contact-section" id="contact">
        <div class="container">
            <div class="section-heading wow fadeInUp" data-wow-delay="0.1s">
                <span class="section-kicker section-kicker--dark">Contact</span>
                <h2 class="section-title text-center">Connect with our team</h2>
                <p class="section-copy text-center mx-auto">
                    Tell us what you need help with and we’ll respond with a clear next step.
                </p>
            </div>

            <div class="row g-4 align-items-start mt-2">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="contact-card">
                        <form id="consultationForm" class="row g-3" method="POST" action="{{ url('/send-consultation') }}">
                            @csrf
                            <div class="col-md-6">
                                <label class="form-label">Full name</label>
                                <input type="text" class="form-control" name="name" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="name@company.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone number</label>
                                <input type="text" class="form-control" name="phone" placeholder="+971..." required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Service needed</label>
                                <input type="text" class="form-control" name="service" placeholder="AML review, onboarding, reporting" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" name="message" rows="5" placeholder="Briefly describe your current challenge" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.22s">
                    <div class="contact-info-stack">
                        <div class="contact-info-card">
                            <h3>Headquarters</h3>
                            <p>B.C. 1300531, Ajman Free Zone C1 Building, Ajman Free Zone, United Arab Emirates</p>
                        </div>
                        <div class="contact-info-card">
                            <h3>Phone support</h3>
                            <p>+971 509627076<br>+971 562953927<br>+971 588961136</p>
                        </div>
                        <div class="contact-info-card">
                            <h3>Email</h3>
                            <p>infoamlshop@gmail.com<br>contact@thegoamlcomplianceservice.com<br>info@thegoamlcomplianceservice.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('layouts.footer')
