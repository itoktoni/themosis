<script>
    jQuery(document).ready(function($) {
        'use strict';
        var slider = new MasterSlider();
        slider.setup('masterslider', {
            width: 1140,
            height: 760,
            view: "scaleFlow",
            space: 0,
            speed: 150,
            layout: "fullwidth",
            centerControls: false,
            loop: true,
            autoplay: true
        });
        slider.control('arrows');

        $('#client-carousel').owlCarousel({
            items: 6,
            loop: true,
            margin: 30,
            responsiveClass: true,
            mouseDrag: true,
            dots: false,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                600: {
                    items: 3,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    mouseDrag: true
                }
            }
        });

        var width = screen.width;
        if (width < 760) {

            $('#services-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: true
            });

        } else {

            $('#services-carousel').owlCarousel({
                items: 3,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: false
                    },
                    600: {
                        items: 2,
                        nav: false,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: false
                    },
                    1000: {
                        items: 3,
                        nav: false,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        mouseDrag: true,
                        autoHeight: false
                    }
                }
            });
        }

        $('#product-carousel').owlCarousel({
            items: 2,
            loop: true,
            margin: 30,
            responsiveClass: true,
            mouseDrag: true,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                600: {
                    items: 2,
                    nav: false,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                1000: {
                    items: 3,
                    nav: false,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    mouseDrag: true
                }
            }
        });

        $('#slider-1').nivoSlider({
            controlNav: false,
            effect: "fade",
        });


    });
</script>