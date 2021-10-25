(function ($) {
"use strict";

    var LandzaiGlobal = function ($scope, $) {

        // Js Start
            $('[data-background]').each(function() {
                $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
            });
        $(".preloader").fadeOut();
        if($('.wow').length){
            new WOW({
                offset: 100,
                mobile: true
            }).init()
        }
        jQuery(window).on('scroll', function() {
            if (jQuery(window).scrollTop() > 250) {
                jQuery('.landzai-sticky-header').addClass('sticky-on')
            } else {
                jQuery('.landzai-sticky-header').removeClass('sticky-on')
            }
        });
        $(".landzai-icon-lightbox a").magnificPopup({
            type: 'iframe',
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: '//player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: '//maps.google.',
                        src: '%id%&output=embed'
                    }
                },
                srcAction: 'iframe_src',
            }
        });
        // Js End

    };

    var LandzaiNav = function ($scope, $) {

        $scope.find('.landzai-builder-nav').each(function () {
            var settings = $(this).data('landzai');

        // Js Start
            jQuery(".menu-bar span").on("click", function () {
                jQuery('.mobile-menu').addClass('open-menu');
                jQuery('.menu-overlay').addClass('open')
            });

            jQuery('.menu-overlay').on('click', function () {
                jQuery('.mobile-menu').removeClass('open-menu')
                jQuery('.menu-overlay').removeClass('open')
            });
            /* Sub Menu Toggle*/
            if($('.mobile-menu li.menu-item-has-children ul').length){
                $('.mobile-menu li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
                $('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function() {
                    $(this).prev('ul').slideToggle(500);
                });
            }
        // Js End
        });

    };

    var LandzaiBrand = function ($scope, $) {

        $scope.find('.brands-areas').each(function () {
            var settings = $(this).data('landzai');

        // Js Start
            $(".slide-brands").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                ],
            });
        // Js End
        });

    };
    var LandzaiWork = function ($scope, $) {

        $scope.find('.work-area').each(function () {
            var settings = $(this).data('landzai');

        // Js Start
            var slider = $(".work-slide");
            var scrollCount = null;
            var scroll = null;
            slider.slick({
                dots: true,
                arrows: false,
                vertical: true,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
            });
            slider.on("wheel", function (e) {
                e.preventDefault();
                clearTimeout(scroll);
                scroll = setTimeout(function () {
                    scrollCount = 0;
                }, 200);
                if (scrollCount) return 0;
                scrollCount = 1;

                if (e.originalEvent.deltaY < 0) {
                    $(this).slick("slickNext");
                } else {
                    $(this).slick("slickPrev");
                }
            });

            // Js End
        });

    };
    var LandzaiScreenshot = function ($scope, $) {

        $scope.find('.app-screens-area').each(function () {
            var settings = $(this).data('landzai');

        // Js Start
            $(".app-screens-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });

            // Js End
        });

    };

    var LandzaiTestimonial = function ($scope, $) {

        $scope.find('.testimonial-area').each(function () {
            var settings = $(this).data('landzai');

        // Js Start
            $(".testimonial-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
            // Js End
        });

    };

    var LandzaiTestimonial2 = function ($scope, $) {

        $scope.find('.testimonial-two-area').each(function () {
            var settings = $(this).data('landzai');

        // Js Start
    $(".testimonial-slide-two").slick({
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: true,
        prevArrow: '<i class="arow-prev fas fa-chevron-left"></i>',
        nextArrow: '<i class="arow-next fas fa-chevron-right"></i>',
      });
            // Js End
        });

    };

    var LandzaiTestimonial3 = function ($scope, $) {

        $scope.find('.testimonial-three-area').each(function () {
            var settings = $(this).data('landzai');

        // Js Start
        $(".testimonial-three-active").slick({
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: false,
            responsive: [
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 2,
                },
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2,
                },
              },
              {
                breakpoint: 576,
                settings: {
                  slidesToShow: 1,
                },
              },
            ],
          });
            // Js End
        });

    };

    var LandzaiTestimonial4 = function ($scope, $) {

        $scope.find('.testimonial-four-area').each(function () {
            var settings = $(this).data('landzai');

        // Js Start
        $(".testimonial-slide-four").slick({
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: true,
            prevArrow: '<i class="arow-prev fas fa-chevron-left"></i>',
            nextArrow: '<i class="arow-next fas fa-chevron-right"></i>',
          });
            // Js End
        });

    };
    var LandzaiTestimonial5 = function ($scope, $) {

        $scope.find('.testimonial-five-area').each(function () {
            var settings = $(this).data('landzai');

            // Js Start
            /*-------------------------------------------
    testimonial-slide-five active
    --------------------------------------------- */
            $(".testimonial-slide-five").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                arrows: true,
                prevArrow: '<i class="arow-prev fas fa-chevron-left"></i>',
                nextArrow: '<i class="arow-next fas fa-chevron-right"></i>',
            });
            // Js End
        });

    };
    var Landzaisinglecounter = function ($scope, $) {

        $scope.find('.counter-area').each(function () {
            var settings = $(this).data('landzai');

            // Js Start
            jQuery(".counter-list").appear(function () {
                jQuery(".counter").counterUp({
                    delay: 10,
                    time: 1000,
                });
            });
            // Js End
        });

    };
    var LandzaiProject = function ($scope, $) {

        $scope.find('.portfolio-area').each(function () {
            var settings = $(this).data('landzai');

            // Js Start
            /*---------------------------------
    isotope activation
    -----------------------------------*/
            $('.grid').appear(function() {
                // filter items on button click
                $('.filtering-button').on('click', 'li', function () {
                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({ filter: filterValue });
                });
                var $grid = $('.grid').isotope({
                    // set itemSelector so .grid-sizer is not used in layout
                    itemSelector: '.grid-item',
                    percentPosition: true,
                    animationOptions: {
                        duration: 500,
                        easing: 'zoom-in'
                    },
                    masonry: {
                        // use element for option
                        columnWidth: '.grid-item'
                    },
                    transitionDuration: '.9s'
                })
                $('.filtering-button li').on('click',  function () {
                    $('.filtering-button li').removeClass('active');
                    $(this).addClass('active');
                });
            });

            // Js End
        });

    };


    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', LandzaiGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/nav-builder.default', LandzaiNav);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-brand.default', LandzaiBrand);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-howwork.default', LandzaiWork);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-sslider.default', LandzaiScreenshot);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial2);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial3);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial4);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial5);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-counter-step.default', Landzaisinglecounter);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-project.default', LandzaiProject);
        }
        else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', LandzaiGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-brand.default', LandzaiBrand);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-howwork.default', LandzaiWork);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-sslider.default', LandzaiScreenshot);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial2);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial3);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial4);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-testimonial.default', LandzaiTestimonial5);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-counter-step.default', Landzaisinglecounter);
            elementorFrontend.hooks.addAction('frontend/element_ready/landzai-project.default', LandzaiProject);
        }
    });
console.log('addon js loaded');
})(jQuery);