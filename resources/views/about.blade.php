@include('layouts.header')

<!-- Hero Section -->
<section class="position-relative text-white d-flex align-items-center justify-content-center"
    style="height: 100vh; overflow: hidden;">
    <div class="hero-bg position-absolute top-0 start-0 w-100 h-100"
        style="background:
        url('{{ asset('img/blog/uae1.jpg') }}') no-repeat center center; 
        background-size: cover; 
        background-position: center;
        z-index: -1;">
    </div>
    <div class="w-100 text-center px-3">
        {{-- <h1 class="text-white fw-bold mb-4">Welcome to GoAML Consultants</h1> --}}
        {{-- <p class="lead fw-bold">Your trusted partner in business consulting.</p> --}}
        {{-- <a href="#services" class="btn btn-primary btn-lg">Explore Services</a> --}}
    </div>
</section>

<div class="container p-4 text-dark">
    <div class="col">
        <p>
            The Go AML Compliance Services FZE is a company duly registered by the Government of
            Ajman Free Zone Authority in January 2025 and holds a valid trade license
            number 37821. It operates in accordance with Amiri Decree No.8 of 2021
            concerning the establishment of the Free Zones Authority in Ajman. The company is legally
            registered under the laws of the United Arab Emirates, with its registered office at
            B.C. 1300531, Ajman Free Zone C1 Building, Ajman Free Zone.
        </p>

        <p>
            Go AML Compliance Services is committed to safeguarding businesses against
            financial crime by providing expert Anti-Money Laundering (AML) and
            Counter-Terrorist Financing (CFT) compliance solutions. With a deep understanding
            of regulatory frameworks and industry best practices, we assist businesses in navigating complex
            compliance requirements, mitigating risks, and maintaining regulatory adherence.
        </p>

        <p>
            We offer professional and tailored AML solutions for businesses operating in the UAE,
            particularly in financial services, real estate, gold trading, and other high-risk
            sectors. Our solutions align with UAE laws, FATF guidelines, and global compliance
            standards. Our team of compliance professionals collaborates closely with clients to:
        </p>

        <ul>
            <li>Develop effective AML policies</li>
            <li>Conduct risk assessments</li>
            <li>Enhance due diligence processes</li>
            <li>Ensure regulatory reporting compliance</li>
            <li>Implement robust compliance programs</li>
        </ul>

        <p>
            Our expert team brings deep regulatory knowledge and industry expertise, ensuring
            that businesses comply with Cabinet Decision No. (10) of 2019,
            UAE Central Bank guidelines, Ministry of Economy regulations, and
            FIU reporting requirements. We help businesses build a culture of compliance to
            prevent financial crimes effectively.
        </p>


        <p>
            Our Goal: To safeguard your business from compliance risks while fostering transparency
            and operational efficiency. We help businesses across various sectors meet their regulatory obligations
            with confidence.
        </p>
    </div>
</div>


@if (isset($mission) && $mission->image && $mission->name && $mission->content)
    <div class="container pb-4 text-dark">
        <div class="row align-items-center">
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary position-relative overflow-hidden">
                    <img src="{{ asset($mission->image) }}" class="img-fluid w-100" alt="">

                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h3 class="fw-bold mb-4">{{ $mission->name }}</h3>
                    <p>{!! $mission->content !!}</p>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container pb-4">
        <p class="text-center text-muted">Mission data is not available.</p>
    </div>
@endif


@if (isset($vision) && $vision->image && $vision->name && $vision->content)
<div class="container pb-4 text-dark">
    <div class="row align-items-stretch d-flex">
        <div class="col-xl-6 d-flex flex-column wow fadeInLeft" data-wow-delay="0.2s">
            <div class="d-flex flex-column h-100">
                <h3 class="fw-bold mb-4">{{ $vision->name }}</h3>
                <p class="flex-grow-1">{!! $vision->content !!}</p>
            </div>
        </div>
        <div class="col-xl-6 d-flex flex-column wow fadeInRight" data-wow-delay="0.2s">
            <div class="bg-primary position-relative overflow-hidden h-100">
                <img src="{{ asset($vision->image) }}" class="img-fluid w-100 h-100 object-fit-cover" alt="">
            </div>
        </div>
    </div>
</div>

@else
    <div class="container pb-4">
        <p class="text-center text-muted">Vision data is not available.</p>
    </div>
@endif


<section class="py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-4">Our Team</h1>
        </div>
        
        <!-- Horizontal Tab Navigation -->
        <ul class="nav nav-tabs justify-content-center mb-4 wow fadeInUp" data-wow-delay="0.3s" id="teamTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="team-member-1-tab" data-bs-toggle="tab" data-bs-target="#team-member-1" type="button" role="tab" aria-controls="team-member-1" aria-selected="true">
                    <div class="position-relative team-tab-img">
                        <img src="{{ asset('img/masum pic.jpeg') }}" class="img-fluid rounded" alt="Team Member 1" style="width: 150px; height: 150px; object-fit: cover;">
                        <div class="position-absolute top-50 start-50 translate-middle text-white text-center w-100 h-100 d-flex flex-column justify-content-end">
                            <h6 class="fw-bold text-white mb-0">Masum Ahmed</h6>
                        </div>
                        
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="team-member-2-tab" data-bs-toggle="tab" data-bs-target="#team-member-2" type="button" role="tab" aria-controls="team-member-2" aria-selected="false">
                    <div class="position-relative team-tab-img">
                        <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid rounded" alt="Team Member 2" style="width: 150px; height: 150px; object-fit: cover;">
                        <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
                            <h6 class="fw-bold text-white mb-0">Core Values</h6>
                        </div>
                    </div>
                </button>
            </li>
            <!-- Add more team members as needed -->
        </ul>
        
        <!-- Tab Content -->
        <div class="tab-content" id="teamTabContent">
            <!-- Team Member 1 Content -->
            <div class="tab-pane fade show active" id="team-member-1" role="tabpanel" aria-labelledby="team-member-1-tab">
                <div class="row align-items-center">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <h1>Masum Ahmed Chowdhury</h1>
                        <h4>Head of compliance</h4><br>
                        <p>
                            Masum Ahmed Chowdhury is a Certified Anti Money Laundering Specialist (CAMS) with extensive years of experience in the AML/CFT domain, regulatory compliance, and risk management. He has proven expertise in developing and overseeing AML/CFT frameworks, conducting internal audits, managing regulatory reporting, and providing compliance advisory services. His experience spans financial institutions, banks, gold & precious metals traders, real estate, and other DNFBPs in the UAE, operating under guidelines from the UAE Central Bank, Ministry of Economy, FIU, and FATF.
                        </p>
                        <p>
                            Currently, Masum serves as the Head of Compliance at The Go AML Compliance Services FZE in the United Arab Emirates. In this role, he is responsible for ensuring clients' adherence to UAE AML laws and international standards, including FATF, UAE FIU, Central Bank, DFSA DIFC, and ADGM regulations. He specializes in KYC/CDD/EDD, sanctions screening, transaction monitoring, and implementing AML technologies.
                        </p>
                        <p>
                            Masum has a strong background in liaising with regulatory authorities, conducting AML risk assessments, and designing compliance training programs to enhance corporate governance and mitigate financial crime risks for reporting entities in the UAE.
                        </p>
                        <p>
                            With a total of 18 years of UAE experience, Masum has worked with reputed financial institutions, banks, and DNFBPs, focusing on AML compliance, internal control, cross-border payments, remittance, cash management, and currency exchange. He holds a Master's degree in Social Science from a reputable university in Bangladesh.
                        </p>
                    </div>
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="position-relative shadow-lg">
                            <img src="{{ asset('img/masum.jpg') }}" class="img-fluid w-100 rounded" alt="Masum Ahmed Chowdhury">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 2 Content -->
            <div class="tab-pane fade" id="team-member-2" role="tabpanel" aria-labelledby="team-member-2-tab">
                <div class="row align-items-center">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <h4>Professional summary</h4>
                        <h1>Team Member 2</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in odio vitae justo vestibulum
                            bibendum ac vitae ipsum. Suspendisse venenatis enim at sagittis commodo. Sed commodo, ipsum
                            eget tempor scelerisque, eros neque sodales odio, eget facilisis erat magna quis est.
                        </p>
                        <p>
                            Fusce facilisis porttitor enim, id faucibus dui dictum vel. Nullam in consectetur metus.
                            Vivamus finibus est a libero laoreet, sed bibendum nunc convallis. Maecenas ac nisi in magna
                            porta volutpat a a urna.
                        </p>
                    </div>
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="position-relative">
                            <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid w-100 rounded" alt="Team Member 2">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Add more team member content panes as needed -->
        </div>
    </div>
</section>

<style>
    .nav-tabs .nav-link {
        border: none;
        background: transparent;
        padding: 10px;
        margin: 0 15px;
        transition: all 0.3s ease;
    }
    
    .nav-tabs .nav-link.active .team-tab-img::after,
    .nav-tabs .nav-link:hover .team-tab-img::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 123, 255, 0.3);
        border-radius: 0.25rem;
    }
    
    .team-tab-img {
        transition: all 0.3s ease;
    }
    
    .nav-tabs .nav-link.active .team-tab-img,
    .nav-tabs .nav-link:hover .team-tab-img {
        transform: translateY(-10px);
    }
    
    .tab-content {
        padding-top: 30px;
    }
</style>




{{-- <section class="py-5 bg-secondary bg-gradient text-white">
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
</section> --}}


{{-- <section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-4">Advisory Board</h1>
        </div>
        
        <div class="row g-4">
            <!-- Faisal Ahmed -->
            <div class="col-md-6">
                <div class="d-flex flex-column flex-md-row gap-4 align-items-start">
                    <img src="{{asset('img/team-1.jpg')}}" alt="Faisal Ahmed" class="rounded-3" width="200">
                    <div>
                        <h3 class="h4 mb-1">Faisal Ahmed</h3>
                        <p class="text-muted mb-3">CEO & Managing Partner</p>
                        <p class="mb-4">Faisal Ahmed serves as the Managing Partner & CEO of GoAML Consultants, bringing a wealth of experience and expertise to the organisation. With over 23 years of global experience in financial crime compliance, anti-money laundering, tax advisory, and auditing, Faisal is a distinguished chartered accountant.</p>
                        <button class="btn btn-info text-white rounded-pill px-4">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Kenneth Khalkho -->
            <div class="col-md-6">
                <div class="d-flex flex-column flex-md-row gap-4 align-items-start">
                    <img src="{{asset('img/team-2.jpg')}}" alt="Kenneth Khalkho" class="rounded-3" width="200">
                    <div>
                        <h3 class="h4 mb-1">Kenneth Khalkho</h3>
                        <p class="text-muted mb-3">Director</p>
                        <p class="mb-4">With a remarkable 27-year career, Kenneth is a thought leader in CSR, sustainability, and climate change, with his insights featured in notable publications. Kenneth is a thought leader in CSR, sustainability, and climate change featured in several notable publications.</p>
                        <button class="btn btn-info text-white rounded-pill px-4">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column flex-md-row gap-4 align-items-start">
                    <img src="{{asset('img/team-2.jpg')}}" alt="Kenneth Khalkho" class="rounded-3" width="200">
                    <div>
                        <h3 class="h4 mb-1">Kenneth Khalkho</h3>
                        <p class="text-muted mb-3">Director</p>
                        <p class="mb-4">With a remarkable 27-year career, Kenneth is a thought leader in CSR, sustainability, and climate change, with his insights featured in notable publications. Kenneth is a thought leader in CSR, sustainability, and climate change featured in several notable publications.</p>
                        <button class="btn btn-info text-white rounded-pill px-4">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column flex-md-row gap-4 align-items-start">
                    <img src="{{asset('img/team-2.jpg')}}" alt="Kenneth Khalkho" class="rounded-3" width="200">
                    <div>
                        <h3 class="h4 mb-1">Kenneth Khalkho</h3>
                        <p class="text-muted mb-3">Director</p>
                        <p class="mb-4">With a remarkable 27-year career, Kenneth is a thought leader in CSR, sustainability, and climate change, with his insights featured in notable publications. Kenneth is a thought leader in CSR, sustainability, and climate change featured in several notable publications.</p>
                        <button class="btn btn-info text-white rounded-pill px-4">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@include('layouts.footer')
