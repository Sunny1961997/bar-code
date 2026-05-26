@include('layouts.header')


<div class="container mt-5 ">
    <div class="row text-dark">
        <div class="col-12">
            <h4 class="mb-4 text-primary text-center border-bottom pb-2">Our Services</h4>
            
            <!-- Row 1 Tabs -->
            <div class="row justify-content-center mb-3">
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center ">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm active" 
                            data-row="1" data-content="content-go-aml">
                        <i class="fas fa-check-circle me-2"></i>
                        <span>Go AML Registration</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="1" data-content="content-enoc">
                        <i class="fas fa-file-contract me-2"></i>
                        <span>ENOC Subscriptions and TFS Registration</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="1" data-content="content-policy">
                        <i class="fas fa-shield-alt me-2"></i>
                        <span>AML/CFT Compliance Policy</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="1" data-content="content-service">
                        <i class="fas fa-cogs me-2"></i>
                        <span>AML Compliance Service</span>
                    </button>
                </div>
            </div>
            
            <!-- Row 1 Content -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="tab-content-container p-4 border rounded shadow-sm" id="row-1-content">
                        <div class="tab-content-item active" id="content-go-aml">
                            <p>GoAML is an electronic anti-money laundering (AML) reporting platform used in the UAE. It was developed by the United Nations Office on Drugs and Crime (UNODC) and is used by the UAE Financial Intelligence Unit (FIU) to collect, analyze, and share suspicious financial activity reports.</p>
                            <p>According to the Ministry of Economy's Circular No. 5 2021, it is mandatory for all DNFBPs in relation to reporting SAR, STR REAR, PNMR DPMSR HRC, FFR through goAML Portal and register immediately.</p>
                        </div>
                        <div class="tab-content-item" id="content-enoc">
                            <p>In the UAE, businesses involved in financial and non-financial activities must comply with Targeted Financial Sanctions (TFS) and register with the Executive Office for Control and Non-Proliferation (EOCN) to ensure compliance. EOCN oversees the implementation of international sanctions and proliferation financing measures, ensuring businesses comply with UN Security Council resolutions and UAE regulations.</p>
                            <p><strong>Penalties for Non-Compliance:</strong><br>
                            Failure to register with EOCN or implement TFS measures can result in:</p>
                            <ul>
                                <li>Heavy fines (up to AED 5 million)</li>
                                <li>Business suspension or license revocation</li>
                                <li>Criminal liability in serious cases</li>
                            </ul>
                        </div>
                        <div class="tab-content-item" id="content-policy">
                            <p>The Go AML Compliance service provides a customized AML/CFT compliance policy and procedures framework which ensures that a business aligns with regulatory requirements and industry-specific risks. By customizing policies, businesses enhance compliance effectiveness, mitigate financial crime risks, and meet UAE regulatory standards, including those set by the Financial Action Task Force (FATF) and UAE authorities such as the Central Bank, Ministry of Economy, and Financial Intelligence Unit (FIU).</p>
                        </div>
                        <div class="tab-content-item" id="content-service">
                            <p>The Go AML compliance services provide ongoing support to ensure businesses meet regulatory requirements and mitigate financial crime risks.</p>
                            <p>
                                Monthly servicesinclude KYC Verification, Clients on boarding transaction monitoring, Business risk assessments, staff training, and regulatory reporting to maintain real-time compliance.
                            </p>
                            <p>
                                Yearly services involve comprehensive audits, policy reviews Gap Analysis, and regulatory filings to ensure long-term adherence to UAE AML/CFT laws and FATF guidelines. These services help your businesses stay compliant, avoid penalties, and enhance their financial crime prevention measures.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Row 2 Tabs -->
            <div class="row justify-content-center mb-3">
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="2" data-content="content-onboarding">
                        <i class="fas fa-user-plus me-2"></i>
                        <span>Customer Onboarding Process</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="2" data-content="content-gap">
                        <i class="fas fa-search me-2"></i>
                        <span>AML GAP Analysis</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="2" data-content="content-risk">
                        <i class="fas fa-chart-line me-2"></i>
                        <span>Business Risk Assessment</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="2" data-content="content-audit">
                        <i class="fas fa-clipboard-check me-2"></i>
                        <span>AML Internal Audit</span>
                    </button>
                </div>
            </div>
            
            <!-- Row 2 Content -->
            <div class="row justify-content-center mb-4">
                <div class="col-12">
                    <div class="tab-content-container p-4 border rounded shadow-sm" id="row-2-content" style="display: none;">
                        <div class="tab-content-item" id="content-onboarding">
                            <p>The Go AML Compliance Service ensures B2B customer onboarding process for gold and real estate sectors in the UAE focuses on AML/CFT compliance, risk mitigation, and regulatory adherence. It involves Know Your Business (KYB), Know Your Customer (KYC), Ultimate Beneficial Owner (UBO) verification, enhanced due diligence (EDD), and sanction screening to prevent financial crime.</p>
                            <p>Businesses must comply with UAE regulations from the Ministry of Economy, Central Bank, and FIU, ensuring transparency in gold trading and real estate transactions. Proper onboarding safeguards against money laundering, terrorist financing, and fraudulent activities, promoting a secure and compliant business environment.</p>
                        </div>
                        <div class="tab-content-item" id="content-gap">
                            <p>
                                The Go AML COMPLIANCE Services provide AML Gap Analysis for comprehensive review of your business's anti-money laundering (AML) compliance framework to identify weaknesses and ensure alignment with UAE regulations and FATF standards. We review and assess policies, procedures, transaction monitoring, customer due diligence (CDD), reporting obligations, and staff training.
                            </p>
                            <p>
                                The analysis helps your businesses detect compliance gaps, mitigate risks, and implement corrective measures to avoid regulatory penalties and enhance AML/CFT controls. This is crucial for high-risk sectors like gold trading and real estate to maintain financial integrity and regulatory compliance in the UAE.
                            </p>
                        </div>
                        <div class="tab-content-item" id="content-risk">
                            <p>
                                The Go-AML Compliance service evaluates customer profiles, transaction patterns, geographic risks, and regulatory compliance based on UAE AML/CFT laws and FATF guidelines to mitigate money laundering (ML) and terrorist financing (TF) risks. DNFBPs—including gold traders, real estate agents, auditors, and corporate service providers—must conduct periodic risk assessments to strengthen internal controls, enhance due diligence, and prevent financial crime, ensuring compliance with the Ministry of Economy and Financial Intelligence Unit (FIU) requirements.
                            </p>
                        </div>
                        <div class="tab-content-item" id="content-audit">
                            <p>
                                The Go AML Compliance Services offer and assist with AML Internal Audit and systematic review of a business's anti-money laundering (AML) framework to ensure compliance with UAE AML/CFT regulations and FATF Standards.
                            </p>
                            <p>
                                We help identify gaps, weaknesses, and areas for improvement to mitigate financial crime risks of your Business. Sectors like gold trading, real estate, and other DNFBPs must conduct regular AML audits to ensure adherence to regulations set by the Ministry of Economy, Central Bank, and Financial Intelligence Unit (FIU), reducing the risk of penalties and enhancing compliance effectiveness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Row 3 Tabs -->
            <div class="row justify-content-center mb-3">
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="3" data-content="content-training">
                        <i class="fas fa-graduation-cap me-2"></i>
                        <span>AML Training</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="3" data-content="content-screening">
                        <i class="fas fa-user-shield me-2"></i>
                        <span>Name Screening</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="3" data-content="content-kyc">
                        <i class="fas fa-id-card me-2"></i>
                        <span>KYC/CDD/EDD Services</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="3" data-content="content-monitoring">
                        <i class="fas fa-chart-bar me-2"></i>
                        <span>Transaction Monitoring</span>
                    </button>
                </div>
            </div>
            
            <!-- Row 3 Content -->
            <div class="row justify-content-center mb-4">
                <div class="col-12">
                    <div class="tab-content-container p-4 border rounded shadow-sm" id="row-3-content" style="display: none;">
                        <div class="tab-content-item" id="content-training">
                            <p>
                                The Go AML Compliance service provides AML training for staff and senior management which is essential to ensure compliance with UAE AML/CFT regulations and FATF guidelines. This training educates employees on money laundering risks, suspicious transaction identification, customer due diligence (CDD), risk assessment, and regulatory reporting.
                            </p>
                            <p>
                                Regular training sessions help reinforce internal controls, enhance awareness, and ensure effective implementation of AML policies, reducing financial crime risks in high-risk sectors like gold trading, real estate, and other DNFBPs.
                            </p>
                        </div>
                        <div class="tab-content-item" id="content-screening">
                            <p>
                                The Go AML Compliance Service helps to do Name screening on behalf of clients, identifying high-risk individuals, entities, and sanctioned parties. These solutions use advanced databases, AI-driven screening, and real-time monitoring to check names against sanctions lists, politically exposed persons (PEPs), and adverse media sources as well as UAE Local Terrorist list and UNSC List.
                            </p>
                            <p>
                                DNFBPs, including gold traders, real estate firms, auditors, and corporate service providers, must implement name screening to prevent financial crime, ensure regulatory compliance with the Ministry of Economy and FIU, and mitigate reputational risks.
                            </p>
                        </div>
                        <div class="tab-content-item" id="content-kyc">
                            <p>
                                The Go AML Compliance services assist businesses in reviewing and strengthening Know Your Customer (KYC), Customer Due Diligence (CDD), and Enhanced Due Diligence (EDD) processes to ensure compliance with regulatory requirements. These services include:
                            </p>
                            <ul>
                                <li>KYC/CDD/EDD Reviews – Assessing existing customer verification procedures, risk profiling, and documentation.</li>
                                <li>Remediation Action Plan – Developing corrective measures to address compliance gaps, improve risk management, and enhance due diligence processes.</li>
                            </ul>
                            <p>
                                This ensures businesses meet AML/CFT obligations, mitigate financial crime risks, and maintain regulatory compliance.
                            </p>
                        </div>
                        <div class="tab-content-item" id="content-monitoring">
                            <p>
                                DPMS (Dealers in Precious Metals and Stones) is a regulatory requirement in the UAE under AML/CFT laws. DPMS entities must register on the GoAML platform, developed by the UAE Financial Intelligence Unit (FIU), to report suspicious transactions (STRs), large cash transactions AED 55K and other relevant financial activities.
                            </p>
                            <p>
                                The Go AML Compliance services help DNFBPS sector by ensuring timely and accurate reporting of high-risk transactions for Business Entities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Row 4 Tabs -->
            <div class="row justify-content-center mb-3">
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="4" data-content="content-reporting">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <span>Suspicious Transaction Reporting</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="4" data-content="content-consulting">
                        <i class="fas fa-comments me-2"></i>
                        <span>AML Compliance Consultation</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="4" data-content="content-regulatory">
                        <i class="fas fa-balance-scale me-2"></i>
                        <span>Regulatory Compliance Advisory</span>
                    </button>
                </div>
                <div class="col-md-3 col-sm-6 mb-2 d-flex align-items-center">
                    <button class="tab-btn w-100 p-3 rounded shadow-sm" 
                            data-row="4" data-content="content-automation">
                        <i class="fas fa-robot me-2"></i>
                        <span>UAE Vat Tax Accounting Bookkeeping</span>
                    </button>
                </div>
            </div>
            
            <!-- Row 4 Content -->
            <div class="row justify-content-center mb-4">
                <div class="col-12">
                    <div class="tab-content-container p-4 border rounded shadow-sm" id="row-4-content" style="display: none;">
                        <div class="tab-content-item" id="content-reporting">
                            <p>
                                The Go AML Compliance service helps to detect and prevent money laundering, terrorist financing, and financial crimes. Effective reporting ensures businesses meet regulatory obligations and avoid penalties from the Ministry of Economy and other UAE authorities.
                            </p>
                            <p>
                                DNFBPs, including gold traders, real estate firms, auditors, and corporate service providers, must report suspicious transactions (STRs/SARs), threshold transactions, and high-risk activities to the Financial Intelligence Unit (FIU) via the goAML platform.
                            </p>
                        </div>
                        <div class="tab-content-item" id="content-consulting">
                            <p>
                                The Go AML Compliance service provides expert support to businesses undergoing inspections by supervisory bodies such as the UAE Financial Intelligence Unit (FIU), the Ministry of Economy (MoE), the Central Bank, and other regulators. These services include:
                            </p>
                            <ul>
                                <li><strong>Pre-Inspection Readiness</strong> – Conducting internal audits, gap assessments, and mock inspections to prepare for regulatory reviews.</li>
                                <li><strong>Regulatory Compliance Review</strong> – Ensuring AML/CFT policies, procedures, and records align with UAE laws and supervisory expectations.</li>
                                <li><strong>On-Site & Off-Site Inspection Support</strong> – Assisting businesses in responding to regulatory queries, compiling required documentation, and addressing findings.</li>
                                <li><strong>Remediation & Action Plan</strong> – Developing corrective measures to resolve identified compliance gaps and enhance AML frameworks.</li>
                            </ul>
                            <p>
                                We guide and help businesses navigate inspections smoothly, avoid penalties, and strengthen their AML compliance posture.
                            </p>
                        </div>
                        <div class="tab-content-item" id="content-regulatory">
                            <p>
                                The Go AML consultancy services assist businesses in fulfilling regulatory obligations related to annual surveys and outreach sessions required by UAE supervisory authorities like MOE. These services include:
                            </p>
                            <ul>
                                <li><strong>Annual AML/CFT Compliance Survey Support</strong> – Assisting businesses in completing and submitting regulatory surveys to assess compliance status, risk exposure, and AML controls.</li>
                                <li><strong>Regulatory Outreach Sessions Guidance</strong> – Preparing businesses for engagement with regulatory bodies, including the Ministry of Economy (MoE), Central Bank, FIU, and other authorities.</li>
                                <li><strong>Training & Awareness</strong> – Conducting tailored AML/CFT awareness sessions for compliance teams to ensure alignment with the latest regulatory expectations.</li>
                                <li><strong>Follow-up & Compliance Enhancements</strong> – Assisting in implementing best practices based on survey outcomes and regulatory feedback.</li>
                            </ul>
                            <p>
                                We ensure businesses stay compliant, proactively engage with regulators, and strengthen their AML frameworks.
                            </p>
                        </div>
                        <div class="tab-content-item" id="content-automation">
                            <p>
                                The GO AML Compliance services assist to Register UAE VAT, Corporate Tax Registration as per Federal tax authority Law in UAE. Also help to do Accounting and Book Keeping for registered entities in UAE. Proper registration ensures legal compliance, avoids penalties, and supports transparent financial operations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add this JavaScript to handle the custom tab functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all tab buttons
    const tabButtons = document.querySelectorAll('.tab-btn');
    
    // Add click event to each tab button
    tabButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Get row and content ID from data attributes
            const rowNumber = this.getAttribute('data-row');
            const contentId = this.getAttribute('data-content');
            const rowContentContainer = document.getElementById(`row-${rowNumber}-content`);
            
            // Check if this tab is already active
            const isAlreadyActive = this.classList.contains('active');
            
            // Remove active class from all buttons in all rows
            document.querySelectorAll('.tab-btn').forEach(function(btn) {
                btn.classList.remove('active');
            });
            
            // Hide all content containers
            document.querySelectorAll('.tab-content-container').forEach(function(container) {
                container.style.display = 'none';
            });
            
            // If the tab was already active, just close it and return
            if (isAlreadyActive) {
                return;
            }
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Show the content container for this row
            rowContentContainer.style.display = 'block';
            
            // Hide all content items in this row
            document.querySelectorAll(`#row-${rowNumber}-content .tab-content-item`).forEach(function(item) {
                item.classList.remove('active');
            });
            
            // Show the selected content item
            document.getElementById(contentId).classList.add('active');
        });
    });
});
</script>

<!-- Add this CSS for styling -->
<style>
.tab-btn {
    background-color: #d9ecff;
    border: 1px solid #dee2e6;
    transition: all 0.3s ease;
    height: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    position: relative; /* Added for arrow positioning */
}

.tab-btn.active {
    background-color: #0d6efd;
    color: white;
    border-color: #0d6efd;
}

/* Arrow indicator for active tab */
.tab-btn.active::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #0d6efd; /* Same color as active tab */
    z-index: 10;
}

.tab-btn:hover:not(.active) {
    background-color: #e9ecef;
}

.tab-content-container {
    background-color: #fdebeb;
    transition: all 0.3s ease;
    position: relative;
    z-index: 5;
}

.tab-content-item {
    display: none;
}

.tab-content-item.active {
    display: block;
}

@media (max-width: 767.98px) {
    .tab-btn {
        margin-bottom: 10px;
    }
    
    /* Adjust arrow position for mobile */
    .tab-btn.active::after {
        bottom: -5px;
    }
}
</style>



@include('layouts.footer')