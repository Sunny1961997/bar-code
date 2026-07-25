    </main>

    <footer class="site-footer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a href="{{ route('/') }}" class="site-footer__brand" aria-label="The GoAML Compliance Service home">
                        <img src="{{ asset('img/go-aml.png') }}" alt="The GoAML Compliance Service" width="112" height="82" loading="lazy">
                    </a>
                    <p class="mt-4 mb-0">Practical AML, CFT, and goAML compliance support for UAE-regulated businesses.</p>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="site-footer__title">Company</div>
                    <nav class="site-footer__links" aria-label="Company links">
                        <a href="{{ route('about') }}">About</a>
                        <a href="{{ route('partnership') }}">Partnerships</a>
                        <a href="{{ route('contact') }}">Contact</a>
                    </nav>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="site-footer__title">Explore</div>
                    <nav class="site-footer__links" aria-label="Resource links">
                        <a href="{{ route('compliance-solutions') }}">Solutions</a>
                        <a href="{{ route('insights') }}">Insights</a>
                        <a href="{{ route('blog') }}">Articles</a>
                        <a href="{{ route('news') }}">News</a>
                    </nav>
                </div>
                <div class="col-lg-4">
                    <div class="site-footer__title">Contact</div>
                    <address class="site-footer__contact">
                        <x-company-contact field="short_address" />
                        <x-company-contact field="primary_phone" />
                        <x-company-contact field="primary_email" />
                    </address>
                    <div class="site-footer__social mt-3">
                        <x-company-contact field="facebook" :external="true" :icon-only="true"><i class="bi bi-facebook" aria-hidden="true"></i></x-company-contact>
                        <x-company-contact field="linkedin" :external="true" :icon-only="true"><i class="bi bi-linkedin" aria-hidden="true"></i></x-company-contact>
                        <x-company-contact field="whatsapp" :external="true" :icon-only="true"><i class="bi bi-whatsapp" aria-hidden="true"></i></x-company-contact>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__legal">
            <div class="container d-flex flex-column flex-md-row justify-content-between gap-2">
                <span>&copy; {{ date('Y') }} The GoAML Compliance Service FZE. All rights reserved.</span>
                <span>Compliance Without Compromise</span>
            </div>
        </div>
    </footer>

    <a href="#main-content" class="back-to-top" aria-label="Back to top"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
