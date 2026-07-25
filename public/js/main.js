document.addEventListener('DOMContentLoaded', () => {
    const siteHeader = document.querySelector('.site-header');
    const backToTop = document.querySelector('.back-to-top');

    const updateScrollState = () => {
        siteHeader?.classList.toggle('is-sticky', window.scrollY > 45);

        if (backToTop) {
            backToTop.classList.toggle('is-visible', window.scrollY > 300);
        }
    };

    updateScrollState();
    window.addEventListener('scroll', updateScrollState, { passive: true });

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const revealTargets = document.querySelectorAll([
        '.page-hero .container > *',
        '.landing-hero .row > [class*="col-"]',
        '.section-header',
        '.section-heading',
        '.split-visual',
        '.split-media-card',
        '.modern-card',
        '.service-card',
        '.band-feature-card',
        '.value-card',
        '.feature-list__item',
        '.check-list li',
        '.faq-accordion .accordion-item',
        '.home-faq-intro',
        '.regulatory-context-panel',
        '.contact-card',
        '.contact-info-card',
        '.cta-band',
        '.cta-panel',
    ].join(','));

    revealTargets.forEach((element, index) => {
        element.classList.add('reveal-item');
        element.style.setProperty('--reveal-delay', `${Math.min(index % 6, 5) * 65}ms`);
    });

    if (reduceMotion || !('IntersectionObserver' in window)) {
        revealTargets.forEach((element) => element.classList.add('is-revealed'));
    } else {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-revealed');
                observer.unobserve(entry.target);
            });
        }, {
            rootMargin: '0px 0px -8% 0px',
            threshold: 0.12,
        });

        revealTargets.forEach((element) => revealObserver.observe(element));
    }

    document.querySelectorAll('[data-ajax-form]').forEach((form) => {
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const submitButton = form.querySelector('[type="submit"]');
            const status = form.querySelector('[data-form-status]');
            const originalLabel = submitButton?.textContent ?? '';

            status?.classList.remove('is-success', 'is-error');
            if (status) status.textContent = '';

            form.setAttribute('aria-busy', 'true');
            form.querySelectorAll('.is-invalid').forEach((field) => {
                field.classList.remove('is-invalid');
                field.removeAttribute('aria-invalid');
                field.removeAttribute('aria-describedby');
            });
            form.querySelectorAll('.field-error').forEach((error) => error.remove());

            if (submitButton) {
                submitButton.disabled = true;
                submitButton.textContent = 'Sending…';
            }

            try {
                const response = await fetch(form.action, {
                    method: (form.method || 'POST').toUpperCase(),
                    body: new FormData(form),
                    headers: {
                        Accept: 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                });
                const payload = await response.json().catch(() => ({}));

                if (!response.ok) {
                    const validationErrors = payload.errors ?? null;

                    if (validationErrors) {
                        Object.entries(validationErrors).forEach(([fieldName, messages]) => {
                            const field = form.elements.namedItem(fieldName);
                            if (!(field instanceof HTMLElement)) return;

                            const errorId = `${form.id || 'form'}-${fieldName}-error`;
                            const error = document.createElement('div');
                            error.id = errorId;
                            error.className = 'field-error';
                            error.textContent = messages[0];
                            field.insertAdjacentElement('afterend', error);
                            field.classList.add('is-invalid');
                            field.setAttribute('aria-invalid', 'true');
                            field.setAttribute('aria-describedby', errorId);
                        });

                        form.querySelector('.is-invalid')?.focus();
                    }

                    throw new Error(
                        validationErrors
                            ? Object.values(validationErrors).flat()[0]
                            : payload.error || 'We could not send your request. Please try again.'
                    );
                }

                if (status) {
                    status.classList.add('is-success');
                    status.textContent = payload.success || 'Your request has been sent successfully.';
                    status.focus();
                }
                form.reset();
            } catch (error) {
                if (status && !status.classList.contains('is-success')) {
                    status.classList.add('is-error');
                    status.textContent = error.message;
                    if (!form.querySelector('.is-invalid')) status.focus();
                }
            } finally {
                form.removeAttribute('aria-busy');
                if (submitButton) {
                    submitButton.disabled = false;
                    submitButton.textContent = originalLabel;
                }
            }
        });
    });
});
