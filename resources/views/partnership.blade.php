@include('layouts.header')

<section class="page-hero">
    <div class="container">
        <span class="page-kicker">Partnerships</span>
        <h1>Build stronger compliance outcomes together.</h1>
        <p>We collaborate with trusted advisers, technology providers, trainers, and professional service firms supporting UAE-regulated businesses.</p>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="section-header section-header--center">
            <span class="page-kicker">Who We Work With</span>
            <h2>Partnerships grounded in practical value.</h2>
            <p>Every collaboration should make compliance clearer, more defensible, or easier to operate for the client.</p>
        </div>
        <div class="row g-4">
            @foreach ([
                ['briefcase', 'Professional Advisers', 'Accounting, audit, legal, and corporate service firms that need reliable AML support for their clients.'],
                ['cpu', 'Technology Providers', 'Screening, onboarding, document, and workflow platforms that complement a risk-based compliance programme.'],
                ['mortarboard', 'Training Providers', 'Specialists delivering practical learning for compliance officers, leadership teams, and frontline staff.'],
                ['buildings', 'Industry Networks', 'Associations and communities helping regulated sectors understand and meet their obligations.'],
            ] as [$icon, $title, $copy])
                <div class="col-md-6 col-lg-3">
                    <article class="modern-card">
                        <span class="modern-card__icon"><i class="bi bi-{{ $icon }}" aria-hidden="true"></i></span>
                        <h3>{{ $title }}</h3><p>{{ $copy }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="content-section content-section--soft">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6"><div class="split-visual"><img src="{{ asset('img/aml-partnership.webp') }}" srcset="{{ asset('img/aml-partnership-768.webp') }} 768w, {{ asset('img/aml-partnership.webp') }} 1200w" sizes="(max-width: 991px) 92vw, 50vw" alt="A multidisciplinary UAE team discussing a shared compliance plan" width="900" height="600" loading="lazy" decoding="async"></div></div>
            <div class="col-lg-6">
                <span class="page-kicker">How We Collaborate</span>
                <h2>Clear roles. Shared standards. Better client outcomes.</h2>
                <ul class="check-list mt-4">
                    <li>Referral and specialist-support arrangements</li>
                    <li>Joint compliance assessments and implementation</li>
                    <li>Training and awareness programmes</li>
                    <li>Technology enablement and process design</li>
                    <li>Ongoing advisory for shared clients</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="content-section"><div class="container"><div class="cta-band d-lg-flex align-items-center justify-content-between gap-4"><div><h2>Explore a partnership with our team.</h2><p class="mb-lg-0">Tell us about your organisation and the clients you support.</p></div><a href="{{ route('contact') }}" class="btn btn-light rounded-pill px-4 py-3">Start a Conversation</a></div></div></section>

@include('layouts.footer')
