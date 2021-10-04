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

        $scope.find('#medi-main-builder-header').each(function () {
            var settings = $(this).data('landzai');

        // Js Start
            $('.open_mobile_menu').on("click", function() {
                $('.mobile_menu_wrap').toggleClass("mobile_menu_on");
            });
            $('.open_mobile_menu').on('click', function () {
                $('body').toggleClass('mobile_menu_overlay_on');
            });
            if($('.mobile_menu li.dropdown ul').length){
                $('.mobile_menu li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
                $('.mobile_menu li.dropdown .dropdown-btn').on('click', function() {
                    $(this).prev('ul').slideToggle(500);
                });
            }
        // Js End
        });

    };


    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', LandzaiGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/nav-builder.default', LandzaiNav);
        }
        else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', LandzaiGlobal);
        }
    });
console.log('addon js loaded');
})(jQuery);