$(document).ready(function(){

    $('.responsive-icon').click(function(){
        $('.responsive-icon').toggleClass('active');
        $('.nav-menu').toggleClass('active');
    });

    $('#start-date').Zebra_DatePicker({
        direction: 1,
        pair: $('#end-date')
    });

    $('#end-date').Zebra_DatePicker({
        direction: 1
    });

	$('.tour-slider').owlCarousel({
        loop: true,
        margin: 30,
        item: 3,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1,
                margin: 0
            },
            360: {
                items: 1,
                margin: 0
            },
            767: {
                items: 1,
                margin: 0 
            },
            768: {
                items: 2
            },
            1199: {
                items: 3
            }
        }
    });

    $('.test-slider-home-1').owlCarousel({
        loop: true,
        margin: 30,
        animateOut: 'slideOutUp',
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1
            },
            360: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.all-logo').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1
            },
            360: {
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    $('.img-nature-slider').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1
            },
            360: {
                items: 2
            },
            600: {
                items: 2
            },
            768: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('fa-chevron-circle-down fa-chevron-circle-up');
    };
        $('.faq-group').on('hidden.bs.collapse', toggleIcon);
        $('.faq-group').on('shown.bs.collapse', toggleIcon);

})