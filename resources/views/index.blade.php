@include('layouts.header')

@php
    $heroSlider = $homeSliders->first();
    $heroImagePath = $heroSlider && $heroSlider->image && file_exists(public_path($heroSlider->image)) ? $heroSlider->image : 'img/aml-compliance-team.webp';
    $heroImage = asset($heroImagePath);
    $heroImageSrcset = $heroImagePath === 'img/aml-compliance-team.webp'
        ? asset('img/aml-compliance-team-768.webp') . ' 768w, ' . asset('img/aml-compliance-team.webp') . ' 1200w'
        : null;
@endphp

<div class="landing-page-shell">
    <section class="landing-hero" id="home">
        <div class="landing-hero__backdrop">
            <div class="hero-grid-line hero-grid-line--v1"></div>
            <div class="hero-grid-line hero-grid-line--v2"></div>
            <div class="hero-grid-line hero-grid-line--v3"></div>
            <div class="hero-grid-line hero-grid-line--v4"></div>
            <div class="hero-grid-line hero-grid-line--v5"></div>
            <div class="hero-grid-line hero-grid-line--v6"></div>
            <div class="hero-grid-line hero-grid-line--v7"></div>
            <div class="hero-grid-line hero-grid-line--v8"></div>
            
            <div class="hero-grid-line hero-grid-line--h1"></div>
            <div class="hero-grid-line hero-grid-line--h2"></div>
            <div class="hero-grid-line hero-grid-line--h3"></div>
            <div class="hero-grid-line hero-grid-line--h4"></div>
            <div class="hero-grid-line hero-grid-line--h5"></div>
        </div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-kicker">UAE AML/CFT compliance consultancy</span>
                    <h1 class="landing-hero__title">
                        {{ optional($heroSlider)->title ?? 'AML Compliance, Simplified for UAE-Regulated Businesses' }}
                    </h1>
                    <p class="landing-hero__lead">
                        {{ optional($heroSlider)->subtitle ?? 'Expert, risk-based compliance support for financial institutions, DNFBPs, and other regulated businesses across the UAE.' }}
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
                            <strong>UAE-focused expertise</strong>
                            <small>Guidance shaped around local AML/CFT expectations and your regulated sector.</small>
                        </div>
                        <div class="hero-metric">
                            <span>02</span>
                            <strong>Tailored solutions</strong>
                            <small>Policies, procedures, and controls designed around your actual exposure.</small>
                        </div>
                        <div class="hero-metric">
                            <span>03</span>
                            <strong>Professional support</strong>
                            <small>Confidential advice from initial assessment through ongoing compliance.</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="hero-preview-card glass-panel">
                        <div class="hero-preview-card__image">
                            <img src="{{ $heroImage }}" @if($heroImageSrcset) srcset="{{ $heroImageSrcset }}" sizes="(max-width: 991px) 92vw, 38vw" @endif alt="{{ optional($heroSlider)->title ?? 'AML compliance overview' }}" fetchpriority="high" loading="eager" width="600" height="400">
                        </div>
                        <div class="hero-preview-card__body">
                            <div class="hero-preview-pill">Compliance without compromise</div>
                            <h2>Your AML compliance partner in the UAE</h2>
                            <p>
                                Build a practical AML/CFT framework that supports transparency, reduces financial-crime risk,
                                and strengthens regulatory confidence.
                            </p>
                            <div class="hero-preview-grid">
                                <div>
                                    <strong>Frameworks</strong>
                                    <span>tailored to risk</span>
                                </div>
                                <div>
                                    <strong>Due diligence</strong>
                                    <span>clear KYC controls</span>
                                </div>
                                <div>
                                    <strong>goAML support</strong>
                                    <span>reporting readiness</span>
                                </div>
                                <div>
                                    <strong>Training</strong>
                                    <span>role-based guidance</span>
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
                        <img src="{{ asset('img/aml-workflow.webp') }}" srcset="{{ asset('img/aml-workflow-768.webp') }} 768w, {{ asset('img/aml-workflow.webp') }} 1200w" sizes="(max-width: 991px) 92vw, 50vw" alt="A structured AML workflow shown across due-diligence documents and a secure risk dashboard" width="900" height="600" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.15s">
                    <span class="section-kicker section-kicker--dark">A proactive, risk-based approach</span>
                    <h2 class="section-title">Turn UAE AML obligations into workable controls</h2>
                    <p class="section-copy">
                        We help businesses interpret UAE AML/CFT requirements and FATF recommendations, then translate them
                        into policies, responsibilities, records, and day-to-day processes their teams can follow.
                    </p>
                    <div class="feature-list">
                        <div class="feature-list__item">
                            <strong>1. Understand your exposure</strong>
                            <span>Assess the risks linked to your sector, customers, services, and geography.</span>
                        </div>
                        <div class="feature-list__item">
                            <strong>2. Strengthen your framework</strong>
                            <span>Establish proportionate policies, due diligence, monitoring, and escalation controls.</span>
                        </div>
                        <div class="feature-list__item">
                            <strong>3. Maintain regulatory confidence</strong>
                            <span>Keep clear evidence, reporting procedures, training, and ongoing review in place.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-section regulatory-context-section" id="regulatory-context" aria-labelledby="regulatory-context-title">
        <div class="container">
            <div class="regulatory-context-panel">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-5">
                        <span class="section-kicker">UAE regulatory context</span>
                        <h2 id="regulatory-context-title">Turn supervisory expectations into an operating system.</h2>
                        <p>
                            Your obligations depend on your sector, activities, customers, and risk exposure. We help connect
                            those requirements to the controls your team performs and the evidence it retains.
                        </p>
                        <a href="{{ route('compliance-solutions') }}" class="btn btn-light rounded-pill mt-3">Explore Compliance Solutions</a>
                    </div>
                    <div class="col-lg-7">
                        <ol class="regulatory-pathway">
                            <li>
                                <span class="regulatory-pathway__number" data-number="01" aria-hidden="true"></span>
                                <div>
                                    <h3>Map the obligation</h3>
                                    <p>Identify the requirements, risk factors, ownership, and reporting responsibilities relevant to your business.</p>
                                </div>
                            </li>
                            <li>
                                <span class="regulatory-pathway__number" data-number="02" aria-hidden="true"></span>
                                <div>
                                    <h3>Operate the control</h3>
                                    <p>Embed practical onboarding, due diligence, screening, monitoring, escalation, and training workflows.</p>
                                </div>
                            </li>
                            <li>
                                <span class="regulatory-pathway__number" data-number="03" aria-hidden="true"></span>
                                <div>
                                    <h3>Evidence the decision</h3>
                                    <p>Maintain clear records, approvals, reporting rationale, and review history for internal and supervisory scrutiny.</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="regulatory-touchpoints">
                    <p class="regulatory-touchpoints__label">Common regulatory touchpoints</p>
                    <ul aria-label="UAE regulatory bodies relevant to supported businesses">
                        <li>UAE Central Bank</li>
                        <li>Ministry of Economy</li>
                        <li>Financial Intelligence Unit</li>
                        <li>Securities &amp; Commodities Authority</li>
                        <li>Dubai Multi Commodities Centre</li>
                    </ul>
                    <p class="regulatory-touchpoints__note">The relevant supervisory authority and requirements depend on your licensed activities and sector.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-section landing-card-section" id="services">
        <div class="container">
            <div class="section-heading wow fadeInUp" data-wow-delay="0.1s">
                <span class="section-kicker section-kicker--dark">Our services</span>
                <h2 class="section-title text-center">Practical support throughout your AML journey</h2>
                <p class="section-copy text-center mx-auto">
                    Tailored consultancy for regulated businesses that need clear advice and effective implementation.
                </p>
            </div>

            <div class="row g-4 mt-1">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <article class="service-card glass-panel">
                        <span class="service-card__icon"><i class="bi bi-shield-check" aria-hidden="true"></i></span>
                        <h3>AML/CFT Frameworks</h3>
                        <p>Develop or strengthen risk-based policies, procedures, governance, and internal controls.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.18s">
                    <article class="service-card glass-panel">
                        <span class="service-card__icon"><i class="bi bi-person-check" aria-hidden="true"></i></span>
                        <h3>KYC, CDD & Risk Assessment</h3>
                        <p>Apply consistent customer checks, risk classification, enhanced review, and record-keeping.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.26s">
                    <article class="service-card glass-panel">
                        <span class="service-card__icon"><i class="bi bi-journal-check" aria-hidden="true"></i></span>
                        <h3>goAML & Regulatory Reporting</h3>
                        <p>Prepare escalation, reporting, and evidence-retention processes for suspicious activity concerns.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.34s">
                    <article class="service-card glass-panel">
                        <span class="service-card__icon"><i class="bi bi-mortarboard" aria-hidden="true"></i></span>
                        <h3>Training & Ongoing Advisory</h3>
                        <p>Build staff awareness and receive practical support as risks and expectations evolve.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band">
        <div class="container">
            <div class="section-heading section-heading--light wow fadeInUp" data-wow-delay="0.1s">
                <span class="section-kicker">Sectors we support</span>
                <h2 class="section-title text-center text-white">Compliance support shaped around regulated UAE businesses</h2>
            </div>
            <div class="row g-4 mt-1">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="band-feature-card glass-panel">
                        <h3>Real Estate</h3>
                        <p>Risk-based controls for customer due diligence, ownership checks, and reportable concerns.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.18s">
                    <div class="band-feature-card glass-panel">
                        <h3>Gold & Precious Metals</h3>
                        <p>Practical AML support for dealers exposed to higher-value and cross-border transactions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.26s">
                    <div class="band-feature-card glass-panel">
                        <h3>Financial Services</h3>
                        <p>Governance, risk assessment, due diligence, monitoring, and regulatory readiness support.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.34s">
                    <div class="band-feature-card glass-panel">
                        <h3>Corporate Service Providers</h3>
                        <p>Controls for legal entities, beneficial ownership, source of funds, and ongoing review.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.42s">
                    <div class="band-feature-card glass-panel">
                        <h3>DNFBPs</h3>
                        <p>Proportionate frameworks for designated non-financial businesses and professions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.50s">
                    <div class="band-feature-card glass-panel">
                        <h3>Other Regulated Entities</h3>
                        <p>Tailored support based on your supervisory environment, services, and risk exposure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-section landing-card-section">
        <div class="container">
            <div class="section-heading wow fadeInUp" data-wow-delay="0.1s">
                <span class="section-kicker section-kicker--dark">Why choose The GoAML Compliance Service</span>
                <h2 class="section-title text-center">UAE expertise with a practical delivery approach</h2>
                <p class="section-copy text-center mx-auto">
                    Clear, confidential guidance designed around your obligations, operating model, and priorities.
                </p>
            </div>
            <div class="row g-4 mt-1">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <article class="value-card glass-panel">
                        <h3>UAE AML/CFT expertise</h3>
                        <p>Advice grounded in the expectations facing UAE-regulated businesses.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.18s">
                    <article class="value-card glass-panel">
                        <h3>Tailored solutions</h3>
                        <p>Controls and guidance proportionate to your sector, size, and actual risk.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.26s">
                    <article class="value-card glass-panel">
                        <h3>Proactive support</h3>
                        <p>Ongoing guidance to help your programme respond as risks and expectations change.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.34s">
                    <article class="value-card glass-panel">
                        <h3>Confidential & professional</h3>
                        <p>Discreet support focused on business integrity and regulatory confidence.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-section landing-faq-section bg-light">
        <div class="container">
            <div class="row g-5 align-items-start home-faq-layout">
                <div class="col-lg-5">
                    <div class="home-faq-intro">
                        <span class="section-kicker section-kicker--dark">AML compliance FAQs</span>
                        <h2 class="section-title">Clear answers before we speak</h2>
                        <p class="section-copy">
                            Understand how our UAE-focused compliance support can fit your sector, current framework, and ongoing obligations.
                        </p>
                        <div class="home-faq-assurance">
                            <span class="modern-card__icon"><i class="bi bi-shield-lock" aria-hidden="true"></i></span>
                            <div>
                                <strong>Confidential from the first conversation</strong>
                                <span>Your enquiry is handled professionally and discreetly.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion faq-accordion" id="landingFaqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqOneHeading">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                    <span class="faq-question-number" data-number="01" aria-hidden="true"></span>
                                    <span class="faq-question-text">What sectors do you support?</span>
                                </button>
                            </h3>
                            <div id="faqOne" class="accordion-collapse collapse show" aria-labelledby="faqOneHeading" data-bs-parent="#landingFaqAccordion">
                                <div class="accordion-body">
                                    <p>We support financial services, real estate, gold and precious metals, corporate service providers, DNFBPs, and other UAE-regulated entities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwoHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                    <span class="faq-question-number" data-number="02" aria-hidden="true"></span>
                                    <span class="faq-question-text">Can you help us improve our current controls?</span>
                                </button>
                            </h3>
                            <div id="faqTwo" class="accordion-collapse collapse" aria-labelledby="faqTwoHeading" data-bs-parent="#landingFaqAccordion">
                                <div class="accordion-body">
                                    <p>Yes. We can assess your existing framework, identify gaps, and provide a prioritised plan to strengthen policies, controls, records, and implementation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThreeHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                    <span class="faq-question-number" data-number="03" aria-hidden="true"></span>
                                    <span class="faq-question-text">Can you support goAML registration and reporting?</span>
                                </button>
                            </h3>
                            <div id="faqThree" class="accordion-collapse collapse" aria-labelledby="faqThreeHeading" data-bs-parent="#landingFaqAccordion">
                                <div class="accordion-body">
                                    <p>Yes. We support goAML registration readiness, internal escalation and reporting processes, and the records needed to evidence reporting decisions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqFourHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                    <span class="faq-question-number" data-number="04" aria-hidden="true"></span>
                                    <span class="faq-question-text">Do you offer ongoing support?</span>
                                </button>
                            </h3>
                            <div id="faqFour" class="accordion-collapse collapse" aria-labelledby="faqFourHeading" data-bs-parent="#landingFaqAccordion">
                                <div class="accordion-body">
                                    <p>Yes. We provide continuing advisory, policy maintenance, training, control reviews, and practical support as your risks and regulatory environment evolve.</p>
                                </div>
                            </div>
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
                    <span class="section-kicker">Your trusted AML compliance partner</span>
                    <h2>Strengthen compliance and protect your business with practical UAE-focused support.</h2>
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
                        <form id="homepage-consultation" class="row g-3" method="POST" action="{{ route('send.consultation') }}" data-ajax-form>
                            @csrf
                            <div class="col-md-6">
                                <label class="form-label" for="home-name">Full Name</label>
                                <input id="home-name" type="text" class="form-control" name="name" autocomplete="name" placeholder="e.g. Aisha Khan" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="home-email">Email Address</label>
                                <input id="home-email" type="email" class="form-control" name="email" autocomplete="email" spellcheck="false" placeholder="e.g. name@company.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="home-phone">Phone Number</label>
                                <input id="home-phone" type="tel" class="form-control" name="phone" autocomplete="tel" inputmode="tel" placeholder="e.g. +971 50 123 4567" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="home-service">Service Needed</label>
                                <input id="home-service" type="text" class="form-control" name="service" autocomplete="off" placeholder="e.g. AML framework review" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="home-message">Message</label>
                                <textarea id="home-message" class="form-control" name="message" rows="5" placeholder="Briefly describe your current challenge…" required></textarea>
                            </div>
                            <div class="col-12"><div class="form-status" data-form-status role="status" aria-live="polite" tabindex="-1"></div></div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.22s">
                    <div class="contact-info-stack">
                        <div class="contact-info-card">
                            <div class="contact-info-title">Headquarters</div>
                            <p><x-company-contact field="registered_address" /></p>
                        </div>
                        <div class="contact-info-card">
                            <div class="contact-info-title">Phone support</div>
                            <p><x-company-contact field="phones" /></p>
                        </div>
                        <div class="contact-info-card">
                            <div class="contact-info-title">Email</div>
                            <p><x-company-contact field="emails" /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('layouts.footer')
