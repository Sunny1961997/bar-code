@include('layouts.header')

<section class="page-hero">
    <div class="container">
        <span class="page-kicker">Compliance Solutions</span>
        <h1>Practical AML controls built around your real risk.</h1>
        <p>From initial framework design to day-to-day monitoring and reporting, we help UAE-regulated firms build compliance programmes that teams can operate and evidence.</p>
        <div class="d-flex flex-wrap gap-3 mt-4">
            <a href="#solutions" class="btn btn-light rounded-pill px-4 py-3">Explore Solutions</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light rounded-pill px-4 py-3">Discuss Your Requirements</a>
        </div>
    </div>
</section>

<section class="content-section" id="solutions">
    <div class="container">
        <div class="section-header">
            <span class="page-kicker">End-to-End Support</span>
            <h2>Structure each part of your AML/CFT programme.</h2>
            <p>Choose focused support for a specific gap or combine services into a complete implementation roadmap.</p>
        </div>
        <div class="row g-4">
            @foreach ([
                ['shield-check', 'AML/CFT Framework', 'Design or refresh policies, procedures, governance, responsibilities, and record-keeping around your sector and risk profile.', ['Policy and procedure development', 'Governance and responsibility mapping', 'Control design and implementation support']],
                ['journal-check', 'goAML Registration & Reporting', 'Prepare for registration, reporting decisions, escalation, and evidence retention with a clear internal process.', ['Registration support', 'SAR/STR process guidance', 'Reporting records and escalation workflows']],
                ['person-check', 'KYC, CDD & EDD', 'Build consistent customer onboarding and due-diligence steps for individuals, entities, beneficial owners, and higher-risk relationships.', ['Customer information requirements', 'UBO and source-of-funds checks', 'Enhanced due diligence workflows']],
                ['graph-up-arrow', 'Business Risk Assessment', 'Assess exposure across customers, geography, products, channels, and transactions using a defensible risk-based method.', ['Risk factor identification', 'Scoring and methodology', 'Control effectiveness and residual risk']],
                ['search', 'Screening & Monitoring', 'Define repeatable sanctions, PEP, adverse-media, and ongoing-monitoring processes with documented decisions.', ['Screening scope and frequency', 'Match review and disposition', 'Ongoing monitoring triggers']],
                ['exclamation-diamond', 'Audit & Remediation', 'Identify programme gaps, prioritise corrective actions, and prepare evidence for internal or regulatory review.', ['Gap assessment', 'Remediation roadmap', 'Readiness and evidence review']],
                ['mortarboard', 'Training & Awareness', 'Give directors, compliance officers, and operational teams role-specific guidance they can apply in practice.', ['Board and leadership briefings', 'Staff awareness training', 'Compliance officer support']],
                ['headset', 'Ongoing Advisory', 'Access practical support as regulations, risk exposure, and operational questions evolve.', ['Periodic programme review', 'Case and escalation guidance', 'Regulatory change support']],
            ] as [$icon, $title, $copy, $items])
                <div class="col-md-6 col-lg-4">
                    <article class="modern-card" id="{{ Str::slug($title) }}">
                        <span class="modern-card__icon"><i class="bi bi-{{ $icon }}" aria-hidden="true"></i></span>
                        <h3>{{ $title }}</h3>
                        <p>{{ $copy }}</p>
                        <ul class="small ps-3 mb-0">@foreach ($items as $item)<li class="mb-2">{{ $item }}</li>@endforeach</ul>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="content-section content-section--soft">
    <div class="container">
        <div class="section-header section-header--center">
            <span class="page-kicker">How We Work</span><h2>A clear route from gap to operating control.</h2>
        </div>
        <div class="row g-4">
            @foreach ([['01','Discover','Understand your business, regulator, operating model, and immediate concerns.'],['02','Assess','Review obligations, inherent risk, existing controls, and evidence.'],['03','Design','Create proportionate controls, documents, ownership, and escalation paths.'],['04','Embed','Support implementation, training, testing, and ongoing improvement.']] as [$number,$title,$copy])
                <div class="col-md-6 col-lg-3"><div class="modern-card"><span class="page-kicker">{{ $number }}</span><h3>{{ $title }}</h3><p>{{ $copy }}</p></div></div>
            @endforeach
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5"><span class="page-kicker">Common Questions</span><h2>Before you engage a compliance adviser.</h2><p>We tailor scope to your regulatory environment and current level of maturity.</p></div>
            <div class="col-lg-7">
                <div class="accordion" id="solutionFaq">
                    @foreach ([
                        ['Can you review an existing AML programme?', 'Yes. We can assess the current framework, controls, records, and operating practice, then prioritise gaps and corrective actions.'],
                        ['Do you support specific UAE-regulated sectors?', 'Our approach is designed for regulated businesses and DNFBPs, with the risk assessment and controls adapted to the relevant sector and supervisory expectations.'],
                        ['Can services be delivered individually?', 'Yes. You can engage us for a focused requirement or combine services into a phased compliance programme.'],
                    ] as $index => [$question,$answer])
                        <div class="accordion-item border-0 border-bottom">
                            <h3 class="accordion-header"><button class="accordion-button {{ $index ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#solution-answer-{{ $index }}" aria-expanded="{{ $index ? 'false' : 'true' }}" aria-controls="solution-answer-{{ $index }}">{{ $question }}</button></h3>
                            <div id="solution-answer-{{ $index }}" class="accordion-collapse collapse {{ $index ? '' : 'show' }}" data-bs-parent="#solutionFaq"><div class="accordion-body">{{ $answer }}</div></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-section pt-0"><div class="container"><div class="cta-band d-lg-flex align-items-center justify-content-between gap-4"><div><h2>Turn compliance requirements into an operating plan.</h2><p class="mb-lg-0">Start with a focused conversation about your current priorities.</p></div><a href="{{ route('contact') }}" class="btn btn-light rounded-pill px-4 py-3">Book a Consultation</a></div></div></section>

@include('layouts.footer')
