(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Hero Header carousel
    $(".header-carousel").owlCarousel({
        animateOut: 'fadeOut',
        items: 1,
        margin: 0,
        stagePadding: 0,
        autoplay: true,
        smartSpeed: 500,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });


    // attractions carousel
    $(".blog-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: false,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    function openLandingIntroModal() {
        const introModalElement = document.getElementById('landingIntroModal');
        if (introModalElement && (window.location.pathname === '/' || window.location.pathname === '')) {
            setTimeout(function () {
                bootstrap.Modal.getOrCreateInstance(introModalElement).show();
            }, 300);
        }
    }

    if (document.readyState === 'complete') {
        openLandingIntroModal();
    } else {
        window.addEventListener('load', openLandingIntroModal, { once: true });
    }

    // $(document).ready(function() {
    //     // Smooth scrolling on click
    //     $('.nav-link').click(function(event) {
    //         // Prevent smooth scrolling for the sustainability link (or other specific links)
    //         if ($(this).attr('href') === "{{ route('sustainability') }}") {
    //             return;  // Don't prevent the default action for the Sustainability link
    //         }

    //         // Prevent the default action for all other links
    //         event.preventDefault();

    //         // Get the target section ID from the href attribute
    //         var target = $(this).attr('href');

    //         // Scroll smoothly to the target section
    //         $('html, body').animate({
    //             scrollTop: $(target).offset().top
    //         }, 600); // Adjust the duration (600ms) as needed

    //         // Optionally, add active class to the clicked link
    //         $('.nav-link').removeClass('active');
    //         $(this).addClass('active');
    //     });
    // });

    // Dropdown handling
    $(document).ready(function() {
        function isMobile() {
            return window.innerWidth < 992;
        }

        // Handle main dropdown toggles on mobile
        $('.dropdown-toggle').on('click', function(e) {
            if (isMobile()) {
                e.preventDefault();
                const $dropdownMenu = $(this).next('.dropdown-menu');
                
                // Close other main dropdowns
                $('.dropdown-menu').not($dropdownMenu).removeClass('show');
                $('.nested-menu').removeClass('show');
                
                $dropdownMenu.toggleClass('show');
            }
        });

        // Handle nested dropdowns on mobile
        $('.nested-dropdown .dropdown-item').on('click', function(e) {
            if (isMobile()) {
                e.preventDefault();
                e.stopPropagation();

                const $nestedMenu = $(this).siblings('.nested-menu');
                
                // Close other nested menus
                $('.nested-menu').not($nestedMenu).removeClass('show');
                
                // Toggle current nested menu
                $nestedMenu.toggleClass('show');
            }
        });

        // Close all menus when clicking outside
        $(document).on('click', function(e) {
            if (isMobile()) {
                if (!$(e.target).closest('.dropdown').length) {
                    $('.dropdown-menu').removeClass('show');
                    $('.nested-menu').removeClass('show');
                }
            }
        });

        // Close all menus when clicking navbar toggler
        $('.navbar-toggler').on('click', function() {
            $('.dropdown-menu, .nested-menu').removeClass('show');
        });

        // Handle window resize
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (!isMobile()) {
                    $('.nested-menu').removeClass('show');
                }
            }, 250);
        });
    });

    $(document).ready(function () {
        $("#quoteForm").on("submit", function (event) {
            event.preventDefault();
            
            // Collect form data as an object instead of FormData
            let formData = {
                name: $('input[name="name"]').val(),
                email: $('input[name="email"]').val(),
                phone: $('input[name="phone"]').val(),
                service: $('input[name="service"]').val(),
                message: $('textarea[name="message"]').val(),
                _token: $('input[name="_token"]').val()
            };

            $.ajax({
                url: "/send-quote", // Use direct URL instead of route helper
                type: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    alert(response.success);
                    $("#quoteForm")[0].reset();
                    const contactModalElement = document.getElementById('contactModal');
                    if (contactModalElement) {
                        bootstrap.Modal.getOrCreateInstance(contactModalElement).hide();
                    }
                },
                error: function (xhr) {
                    alert(xhr.responseJSON.error || 'An error occurred. Please try again.');
                    console.error("Error:", xhr);
                }
            });
        });
    });

    // Add this alongside your existing JavaScript
$(document).ready(function () {
    $("#consultationForm").on("submit", function (event) {
        event.preventDefault();
        
        let formData = {
            name: $('input[name="name"]').val(),
            email: $('input[name="email"]').val(),
            phone: $('input[name="phone"]').val(),
            service: $('input[name="service"]').val(),
            message: $('textarea[name="message"]').val(),
            _token: $('input[name="_token"]').val()
        };

        $.ajax({
            url: "/send-consultation",
            type: "POST",
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                alert(response.success);
                $("#consultationForm")[0].reset();
            },
            error: function (xhr) {
                alert(xhr.responseJSON.error || 'An error occurred. Please try again.');
                console.error("Error:", xhr);
            }
        });
    });
});

})(jQuery);

