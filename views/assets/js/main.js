(function($) {
    "use strict";
    var windowOn = $(window)
    windowOn.on('load', function() {
        $('#loading').fadeOut(500);
    });
    if ($('.header-bottom__main-menu nav > ul > li.has-dropdown > a').length) {
        $('.header-bottom__main-menu nav > ul > li.has-dropdown > a').append('<i class="fal fa-angle-down"></i>');
    }
    windowOn.on('scroll', function() {
        var scroll = windowOn.scrollTop();
        if (scroll < 500) {
            $('.scroll-to-target').removeClass('open');
        } else {
            $('.scroll-to-target').addClass('open');
        }
    });
    if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function() {
            var target = $(this).attr('data-target');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);
        });
    }
    if ($('.scroll-to-target-2').length) {
        $(".scroll-to-target-2").on('click', function() {
            var target = $(this).attr('data-target');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);
        });
    }

    function smoothSctollTop() {
        $('.smooth a').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 150
                }, 1000);
            }
        });
    }
    smoothSctollTop();
    var wow = new WOW({
        mobile: true,
    });
    wow.init();
    var windowOn = $(window);
    windowOn.on('load', function() {
        $("#loading").fadeOut(500);
    });
    windowOn.on('scroll', function() {
        var scroll = windowOn.scrollTop();
        if (scroll < 600) {
            $("#header-sticky").removeClass("header-sticky");
            $('body').removeClass('header_fixed')
        } else {
            $("#header-sticky").addClass("header-sticky");
            $('body').addClass('header_fixed')
        }
    });
    $('#mobile-menu').meanmenu({
        meanMenuContainer: '.mobile-menu',
        meanScreenWidth: "991",
        meanExpand: ['<i class="fal fa-plus"></i>'],
    });
    $(window).on('load', function() {
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    })
    $(".tp-menu-bar").on("click", function() {
        $(".tpoffcanvas").addClass("opened");
        $(".body-overlay").addClass("apply");
    });
    $(".close-btn").on("click", function() {
        $(".tpoffcanvas").removeClass("opened");
        $(".body-overlay").removeClass("apply");
    });
    $(".body-overlay").on("click", function() {
        $(".tpoffcanvas").removeClass("opened");
        $(".body-overlay").removeClass("apply");
    });
    $(".popup-video").magnificPopup({
        type: "iframe",
    });
    $("[data-background").each(function() {
        $(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
    });
    $("[data-width]").each(function() {
        $(this).css("width", $(this).attr("data-width"));
    });
    $("[data-bg-color]").each(function() {
        $(this).css("background-color", $(this).attr("data-bg-color"));
    });
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    $('.slider__active').slick({
        autoplay: true,
        slidesToShow: 1,
        fade: true,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        }, {
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 1,
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1,
            }
        }]
    });
    $('.project__slider-active').slick({
        slidesToShow: 5,
        arrows: false,
        autoplay: true,
        responsive: [{
            breakpoint: 1600,
            settings: {
                slidesToShow: 4,
                arrows: false,
            }
        }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                arrows: false,
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                arrows: false,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                arrows: false,
            }
        }, ]
    });
    $('.project-2__slider-active').slick({
        slidesToShow: 3,
        arrows: false,
        autoplay: true,
        responsive: [{
            breakpoint: 1600,
            settings: {
                slidesToShow: 3,
                arrows: false,
            }
        }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                arrows: false,
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                arrows: false,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                arrows: false,
            }
        }, ]
    });
    $('.step__slider-active').slick({
        slidesToShow: 4,
        arrows: true,
        autoplay: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
        responsive: [{
            breakpoint: 1600,
            settings: {
                slidesToShow: 4,
            }
        }, {
            breakpoint: 1400,
            settings: {
                slidesToShow: 3,
                arrows: false,
            }
        }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                arrows: false,
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                arrows: false,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                arrows: false,
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                arrows: false,
            }
        }, ]
    });
    $('.testimonial-2__slider-active').slick({
        slidesToShow: 1,
        arrows: true,
        autoplay: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="far fa-long-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="far fa-long-arrow-right"></i></button>',
        responsive: [{
            breakpoint: 1600,
            settings: {
                slidesToShow: 1,
            }
        }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                arrows: false,
            }
        }, ]
    });
    $('.brand__slider-active').slick({
        slidesToShow: 4,
        loop: true,
        arrows: false,
        autoplay: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                arrows: false,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                arrows: false,
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
                arrows: false,
            }
        }, ]
    });
    const serviceswiper = new Swiper('.testimonial__slider-active', {
        loop: true,
        slidesPerView: 2,
        spaceBetween: 30,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        breakpoints: {
            '1200': {
                slidesPerView: 2,
            },
            '992': {
                slidesPerView: 2,
            },
            '768': {
                slidesPerView: 2,
            },
            '576': {
                slidesPerView: 1,
            },
            '0': {
                slidesPerView: 1,
            },
        },
        pagination: {
            el: ".testimonial__slider-dots",
            clickable: true,
        },
    });
    $('.popup-image').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    $('#showlogin').on('click', function() {
        $('#checkout-login').slideToggle(900);
    });
    $('#showcoupon').on('click', function() {
        $('#checkout_coupon').slideToggle(900);
    });
    $('#cbox').on('click', function() {
        $('#cbox_info').slideToggle(900);
    });
    $('#ship-box').on('click', function() {
        $('#ship-box-info').slideToggle(1000);
    });
    $(".popup-video").magnificPopup({
        type: "iframe",
    });
    $('.grid').imagesLoaded(function() {
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            layoutMode: 'fitRows',
            masonry: {
                columnWidth: 1,
            },
        });
        $('.masonary-menu').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue,
                animationOptions: {
                    duration: 10000,
                    easing: "linear",
                    queue: true
                }
            });
        });
        $('.masonary-menu button').on('click', function(event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
    });
    $(".header-bottom__search").on("click", function() {
        $(".header-bottom__search-wrapper").toggleClass("search-open");
    });
    $("body > *:not(header)").on("click", function() {
        $(".header-bottom__search-wrapper").removeClass("search-open");
    });
    $('.cart-minus').on('click', function() {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.cart-plus').on('click', function() {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
    if ($("#slider-range").length) {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
        $('#filter-btn').on('click', function() {
            $('.filter-widget').slideToggle(1000);
        });
    }
    $('select').niceSelect();
})(jQuery);