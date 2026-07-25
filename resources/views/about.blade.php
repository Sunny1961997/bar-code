@include('layouts.header')

<section class="page-hero">
    <div class="container">
        <span class="page-kicker">About Us</span>
        <h1>Compliance expertise translated into practical action.</h1>
        <p>We help UAE-regulated businesses understand their AML/CFT responsibilities, strengthen controls, and build a culture of financial integrity.</p>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="page-kicker">Our Approach</span>
                <h2>Structured support without unnecessary complexity.</h2>
                <p>Compliance works best when responsibilities are clear, controls match actual exposure, and teams can explain the decisions they make. Our work focuses on building that operating discipline.</p>
                <ul class="check-list mt-4">
                    <li>Risk-based controls aligned with the business</li>
                    <li>Clear ownership, escalation, and evidence</li>
                    <li>Practical guidance for day-to-day operations</li>
                    <li>Ongoing improvement as obligations evolve</li>
                </ul>
            </div>
            <div class="col-lg-6"><div class="split-visual"><img src="{{ asset('img/aml-compliance-team.webp') }}" srcset="{{ asset('img/aml-compliance-team-768.webp') }} 768w, {{ asset('img/aml-compliance-team.webp') }} 1200w" sizes="(max-width: 991px) 92vw, 50vw" alt="A UAE compliance team reviewing risk information and supporting evidence" width="900" height="600" loading="lazy" decoding="async"></div></div>
        </div>
    </div>
</section>

@php
    $missionImage = isset($mission) && $mission->image && file_exists(public_path($mission->image)) ? asset($mission->image) : asset('img/aml-mission.webp');
    $visionImage = isset($vision) && $vision->image && file_exists(public_path($vision->image)) ? asset($vision->image) : asset('img/aml-vision.webp');
@endphp
<section class="content-section content-section--soft">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <article class="modern-card">
                    <img src="{{ $missionImage }}" alt="{{ $mission->name ?? 'Our mission' }}" class="w-100 rounded-4 mb-4" width="720" height="420" loading="lazy" decoding="async">
                    <span class="page-kicker">Our Purpose</span>
                    <h2>{{ $mission->name ?? 'Mission' }}</h2>
                    <div class="rich-content">{!! $mission->content ?? '<p>To empower UAE businesses with practical AML/CFT controls that protect their operations and support regulatory compliance.</p>' !!}</div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="modern-card">
                    <img src="{{ $visionImage }}" alt="{{ $vision->name ?? 'Our vision' }}" class="w-100 rounded-4 mb-4" width="720" height="420" loading="lazy" decoding="async">
                    <span class="page-kicker">Our Direction</span>
                    <h2>{{ $vision->name ?? 'Vision' }}</h2>
                    <div class="rich-content">{!! $vision->content ?? '<p>To be a trusted UAE compliance partner recognised for clear advice, reliable implementation, and commitment to financial integrity.</p>' !!}</div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="section-header section-header--center"><span class="page-kicker">Our Values</span><h2>Principles that shape every engagement.</h2></div>
        <div class="row g-4">
            @foreach ([['shield-check','Integrity','We give clear, evidence-led guidance and treat compliance as a genuine responsibility.'],['diagram-3','Practicality','We turn obligations into controls that people can understand and consistently operate.'],['eye','Transparency','We make ownership, decisions, limitations, and next steps visible.'],['arrow-repeat','Continuous Improvement','We help programmes adapt as risks, operations, and regulatory expectations change.']] as [$icon,$title,$copy])
                <div class="col-md-6 col-lg-3"><article class="modern-card"><span class="modern-card__icon"><i class="bi bi-{{ $icon }}" aria-hidden="true"></i></span><h3>{{ $title }}</h3><p>{{ $copy }}</p></article></div>
            @endforeach
        </div>
    </div>
</section>

<section class="content-section pt-0"><div class="container"><div class="cta-band d-lg-flex align-items-center justify-content-between gap-4"><div><h2>Work with a team focused on usable compliance.</h2><p class="mb-lg-0">Tell us about your programme, priorities, and current challenges.</p></div><a href="{{ route('contact') }}" class="btn btn-light rounded-pill px-4 py-3">Meet With Our Team</a></div></div></section>

@include('layouts.footer')
