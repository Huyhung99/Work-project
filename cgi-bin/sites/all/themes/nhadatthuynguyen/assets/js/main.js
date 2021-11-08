/*

    Template Name: Oestin
    Template URI: https://devitems.com/html/oestin-preview/
    Description: This is html5 template
    Author: HasTech
    Author URI: https://devitems.com/
    Version: 1.0

*/
/*================================================
[  Table of contents  ]
================================================
	01. Sticky Menu
	02. Owl Carousel
	03. Mail Chimp
	04. jQuery MeanMenu
	05. Counter Up
	06. Isotope
	07. Imageload
	08. Magnific Popup
	09. ScrollUp
	10. Wow js
	11. Slick Carousel

======================================
[ End table content ]
======================================*/

(function ($) {

    Drupal.behaviors.mymodule = {
        attach: function (context, settings) {
            $(document).ready(function () {
                /*------------------------------------
        01. Sticky Menu
    ------------------------------------- */
                var win = $(window);
                var stic = $(".header-area");
                win.on('scroll', function () {
                    var scroll = win.scrollTop();
                    if (scroll < 245) {
                        stic.removeClass("sticky");
                    } else {
                        stic.addClass("sticky");
                    }
                });

                /*----------------------------------------
                    02. Owl Carousel
                ---------------------------------------- */
                /*------------------------
                    Slider Carousel
                ------------------------ */
                $(".slider-wrapper").owlCarousel({
                    loop: true,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    smartSpeed: 2500,
                    items: 1,
                    nav: true,
                    navText: ["<i class='zmdi zmdi-chevron-left'></i>", "<i class='zmdi zmdi-chevron-right'></i>"],
                    dots: true,
                    responsive: {
                        0: {
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
                /*---------------------
                    Blog Carousel
                --------------------- */
                $(".blog-carousel").owlCarousel({
                    loop: true,
                    items: 3,
                    dots: false,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        }
                    }
                });
                $(".room-carousel").owlCarousel({
                    loop: true,
                    items: 3,
                    dots: false,
                    nav: true,
                    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 4,
                            margin: 30
                        }
                    }
                });
                /*------------------------
                    Client Carousel
                -------------------------- */
                $('.client-carousel').owlCarousel({
                    loop: true,
                    autoPlay: false,
                    smartSpeed: 2000,
                    fluidSpeed: true,
                    items: 5,
                    responsiveClass: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 4
                        },
                        1200: {
                            items: 5
                        }
                    }
                });
                /*----------------------------------------
                    03. Mail Chimp
                ------------------------------------------*/

                /*-------------------------------------------
                    04. jQuery MeanMenu
                --------------------------------------------- */
                jQuery('nav#dropdown').meanmenu();

                /*-------------------------------------------
                    05. Counter Up
                --------------------------------------------- */
                $('.counter').counterUp({
                    delay: 70,
                    time: 5000
                });

                /*-----------------------------------------
                    06. Isotope
                ------------------------------------------ */
                /*----------------------------
                    Homepage Activation
                ----------------------------- */
                $('.gallery-masonry').imagesLoaded(function () {
                    // filter items on button click
                    $('.gallery-filter').on('click', 'button', function () {
                        var filterValue = $(this).attr('data-filter');
                        $grid.isotope({filter: filterValue});
                    });

                    // init Isotope
                    var $grid = $('.gallery-masonry').isotope({
                        itemSelector: '.gallery-item',
                        percentPosition: true,
                        masonry: {
                            // use outer width of grid-sizer for columnWidth
                            columnWidth: '.gallery-item'
                        }
                    });
                });
                /*------------------------------
                    Event Page Activation
                -------------------------------- */
                $('.event-items').imagesLoaded(function () {
                    // filter items on button click
                    $('.event-menu').on('click', 'button', function () {
                        var filterValue = $(this).attr('data-filter');
                        $grid.isotope({filter: filterValue});
                    });

                    // init Isotope
                    var $grid = $('.event-items').isotope({
                        itemSelector: '.single-event',
                        layoutMode: 'fitRows',
                        percentPosition: true,
                    });
                });

                /*--------------------------------------
                    07. Imageload
                ---------------------------------------- */
                $('.gallery-filter button').on('click', function (event) {
                    $(this).siblings('.active').removeClass('active');
                    $(this).addClass('active');
                    event.preventDefault();
                });

                /*---------------------------------------
                    08. Magnific Popup
                ----------------------------------------- */
                /*-------------------------
                    Magnific Popup Video
                -------------------------- */
                $('.video-popup').magnificPopup({
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    zoom: {
                        enabled: true,
                    }
                });
                /*-------------------------
                    Magnific Popup Image
                -------------------------- */
                $('.image-popup').magnificPopup({
                    type: 'image',
                    mainClass: 'mfp-fade',
                    removalDelay: 100,
                    gallery: {
                        enabled: true,
                    }
                });

                /*---------------------------------------
                    09. ScrollUp
                ----------------------------------------- */
                $.scrollUp({
                    scrollText: '<i class="fa fa-angle-up"></i>',
                    easingType: 'linear',
                    scrollSpeed: 900,
                    animation: 'fade'
                });

                /*-----------------------------------------
                    10. Wow js
                ------------------------------------------ */
                new WOW().init();

                /*----------------------------------------
                    11. Slick Carousel
                ------------------------------------------*/
                $('.room-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: '.slider-nav'
                });
                $('.slider-nav').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    asNavFor: '.room-slider',
                    dots: true,
                    centerMode: true,
                    focusOnSelect: true,
                    dots: false,
                    responsive: [{
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    }]
                });


                setTimeout(function (){
                    $('#modal').removeClass('closed')
                    $('#modal-overlay').removeClass('closed');
                },5000)
                // var modal = document.querySelector("#modal");
                // var modalOverlay = document.querySelector("#modal-overlay");
                // var closeButton = document.querySelector("#close-button");
                // var openButton = document.querySelector("#open-button");
                //
                // closeButton.addEventListener("click", function() {
                //     modal.classList.toggle("closed");
                //     modalOverlay.classList.toggle("closed");
                // });
                //
                // openButton.addEventListener("click", function() {
                //     modal.classList.toggle("closed");
                //     modalOverlay.classList.toggle("closed");
                // });
                $(document).on('click','#close-button',function (e){
                    $('#modal').toggle("closed");
                    $('#modal-overlay').toggle("closed");
                })
                $(document).ready(function() {
                    $('.popup-gallery').magnificPopup({
                        delegate: 'a',
                        type: 'image',
                        tLoading: 'Loading image #%curr%...',
                        mainClass: 'mfp-with-zoom',
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                        },
                        image: {
                            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                            titleSrc: function(item) {
                                return item.el.attr('title');
                            }
                        },
                        zoom: {
                            enabled: true, // By default it's false, so don't forget to enable it

                            duration: 300, // duration of the effect, in milliseconds
                            easing: 'ease-in-out', // CSS transition easing function

                            // The "opener" function should return the element from which popup will be zoomed in
                            // and to which popup will be scaled down
                            // By defailt it looks for an image tag:
                            opener: function (openerElement) {
                                // openerElement is the element on which popup was initialized, in this case its <a> tag
                                // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                                return openerElement.is('img') ? openerElement : openerElement.find('img');
                            }
                        }
                    });
                });
            });
        }
    }
}(jQuery));

