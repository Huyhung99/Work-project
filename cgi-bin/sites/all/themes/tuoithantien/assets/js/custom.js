// JavaScript Document
(function ($) {
    Drupal.behaviors.mymodule = {
        attach: function (context, settings) {
            $(document).ready(function () {
                "use strict";



                /*----------------------------------------------------*/
                /*	Animated Scroll To Anchor
                /*----------------------------------------------------*/

                $('.header a[href^="#"], .page a.btn[href^="#"], .page a.internal-link[href^="#"]').on('click', function (e) {

                    e.preventDefault();

                    var target = this.hash,
                        $target = jQuery(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top-60 // - 200px (nav-height)
                    }, 'slow', 'easeInSine', function () {
                        window.location.hash = '1' + target;
                    });

                });



                /*----------------------------------------------------*/
                /*	Hero Slider
                /*----------------------------------------------------*/

                $('.slider').slider({
                    full_width: false,
                    interval: 5000,
                    transition: 700,
                    draggable: false,
                    navigate: true
                });


                /*----------------------------------------------------*/
                /*	ScrollUp
                /*----------------------------------------------------*/

                $.scrollUp = function (options) {

                    // Defaults
                    var defaults = {
                        scrollName: 'scrollUp', // Element ID
                        topDistance: 600, // Distance from top before showing element (px)
                        topSpeed: 800, // Speed back to top (ms)
                        animation: 'fade', // Fade, slide, none
                        animationInSpeed: 200, // Animation in speed (ms)
                        animationOutSpeed: 200, // Animation out speed (ms)
                        scrollText: '', // Text for element
                        scrollImg: false, // Set true to use image
                        activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
                    };

                    var o = $.extend({}, defaults, options),
                        scrollId = '#' + o.scrollName;

                    // Create element
                    $('<a/>', {
                        id: o.scrollName,
                        href: '#top',
                        title: o.scrollText
                    }).appendTo('body');

                    // If not using an image display text
                    if (!o.scrollImg) {
                        $(scrollId).text(o.scrollText);
                    }

                    // Minium CSS to make the magic happen
                    $(scrollId).css({'display': 'none', 'position': 'fixed', 'z-index': '2147483647'});

                    // Active point overlay
                    if (o.activeOverlay) {
                        $("body").append("<div id='" + o.scrollName + "-active'></div>");
                        $(scrollId + "-active").css({
                            'position': 'absolute',
                            'top': o.topDistance + 'px',
                            'width': '100%',
                            'border-top': '1px dotted ' + o.activeOverlay,
                            'z-index': '2147483647'
                        });
                    }

                    // Scroll function
                    $(window).on('scroll', function () {
                        switch (o.animation) {
                            case "fade":
                                $(($(window).scrollTop() > o.topDistance) ? $(scrollId).fadeIn(o.animationInSpeed) : $(scrollId).fadeOut(o.animationOutSpeed));
                                break;
                            case "slide":
                                $(($(window).scrollTop() > o.topDistance) ? $(scrollId).slideDown(o.animationInSpeed) : $(scrollId).slideUp(o.animationOutSpeed));
                                break;
                            default:
                                $(($(window).scrollTop() > o.topDistance) ? $(scrollId).show(0) : $(scrollId).hide(0));
                        }
                    });

                    // To the top
                    $(scrollId).on('click', function (event) {
                        $('html, body').animate({scrollTop: 0}, o.topSpeed);
                        event.preventDefault();
                    });


                };

                $.scrollUp();


                /*----------------------------------------------------*/
                /*	Services Rotator
                /*----------------------------------------------------*/

                var owl = $('.services-holder');
                owl.owlCarousel({
                    items: 4,
                    loop: true,
                    autoplay: true,
                    navBy: 1,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: false,
                    smartSpeed: 1500,
                    responsive: {
                        0: {
                            items: 1
                        },
                        767: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        991: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    }
                });

                var owl = $('.chuong-trinh-dao-tao-slider');
                owl.owlCarousel({
                    items: 3,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    navBy: 1,
                    dots: false,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: false,
                    smartSpeed: 1500,

                    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        767: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        991: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
                var owl = $('.chuong-trinh-dao-tao-front');
                owl.owlCarousel({
                    items: 3,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    navBy: 1,
                    dots: false,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: false,
                    smartSpeed: 1500,

                    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        767: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        991: {
                            items: 3
                        },
                        1000: {
                            items: 3,
                            margin: 30
                        }
                    }
                });

                var owl = $('.mystories-slider');
                owl.owlCarousel({
                    items: 1,
                    nav: false,
                    loop: true,
                    autoplay: true,
                    navBy: 1,
                    dots: false,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: false,
                    smartSpeed: 2000,
                });
                var owl = $('.su-kien-mobile');
                owl.owlCarousel({
                    items: 3,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    navBy: 1,
                    dots: false,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: false,
                    smartSpeed: 1500,
                    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        767: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        991: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
                var owl = $('.ban-co-van-mobile');
                owl.owlCarousel({
                    items: 3,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    navBy: 1,
                    dots: true,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: false,
                    smartSpeed: 1500,
                    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        767: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        991: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });


                $('.ban-giao-vien-mobile').owlCarousel({
                    items: 2,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    navBy: 1,
                    dots: true,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: false,
                    smartSpeed: 1500,
                    margin:30,
                    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
                    responsive: {
                        575:{
                            items:4
                        },
                        767: {
                            items: 4
                        },
                        768: {
                            items: 4
                        },
                        991: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }

                    }
                });
                $('.mam-non-chat-luong-cao-mobile').owlCarousel({
                    items: 1,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    navBy: 1,
                    dots: true,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: false,
                    smartSpeed: 1500,
                    margin:10,
                    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
                    responsive: {
                        575:{
                            items:1
                        },
                        767: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        991: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }

                    }
                });
                // Custom Navigation Events

                /*----------------------------------------------------*/
                /*	Portfolio Grid
                /*----------------------------------------------------*/

                $('.grid-loaded').imagesLoaded(function () {

                    // filter items on button click
                    $('.gallery-filter').on('click', 'button', function () {
                        var filterValue = $(this).attr('data-filter');
                        $grid.isotope({
                            filter: filterValue
                        });
                    });

                    // change is-checked class on buttons
                    $('.gallery-filter button').on('click', function () {
                        $('.gallery-filter button').removeClass('is-checked');
                        $(this).addClass('is-checked');
                        var selector = $(this).attr('data-filter');
                        $grid.isotope({
                            filter: selector
                        });
                        return false;
                    });

                    // init Isotope
                    var $grid = $('.masonry-wrap').isotope({
                        itemSelector: '.gallery-item',
                        percentPosition: true,
                        transitionDuration: '0.7s',
                        masonry: {
                            // use outer width of grid-sizer for columnWidth
                            columnWidth: '.gallery-item',
                        }
                    });

                });


                /*----------------------------------------------------*/
                /*	Single Image Lightbox
                /*----------------------------------------------------*/

                $('.image-link').magnificPopup({
                    type: 'image'
                });


                /*----------------------------------------------------*/
                /*	Video Link #1 Lightbox
                /*----------------------------------------------------*/

                $('.video-popup1').magnificPopup({
                    type: 'iframe',
                    iframe: {
                        patterns: {
                            youtube: {
                                index: 'youtube.com',
                                src: 'https://www.youtube.com/embed/SZEflIVnhH8'
                            }
                        }
                    }
                });


                /*----------------------------------------------------*/
                /*	Video Link #2 Lightbox
                /*----------------------------------------------------*/

                $('.video-popup2').magnificPopup({
                    type: 'iframe',
                    iframe: {
                        patterns: {
                            youtube: {
                                index: 'youtube.com',
                                src: 'https://www.youtube.com/embed/7e90gBu4pas'
                            }
                        }
                    }
                });


                /*----------------------------------------------------*/
                /*	Statistic Counter
                /*----------------------------------------------------*/

                $('.count-element').each(function () {
                    $(this).appear(function () {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 4000,
                            easing: 'swing',
                            step: function (now) {
                                $(this).text(Math.ceil(now));
                            }
                        });
                    }, {accX: 0, accY: 0});
                });


                /*----------------------------------------------------*/
                /*	Testimonials Rotator
                /*----------------------------------------------------*/

                var owl = $('.reviews-holder');
                owl.owlCarousel({
                    items: 3,
                    loop: true,
                    autoplay: true,
                    navBy: 1,
                    autoplayTimeout: 4500,
                    autoplayHoverPause: false,
                    smartSpeed: 1500,
                    responsive: {
                        0: {
                            items: 1
                        },
                        767: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        991: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });

                $('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position', 'fixed').css('top', '0').css('margin-top', '0').css('z-index', '500').removeClass('original').hide();
                window.scrollIntervalID = setInterval(stickIt, 10);

                function stickIt() {

                    var orgElementPos = $('.original').offset();
                    var orgElementTop = orgElementPos.top;

                    if ($(window).scrollTop() >= (orgElementTop)) {
                        // scrolled past the original position; now only show the cloned, sticky element.

                        // Cloned element should always have same left position and width as original element.
                        var orgElement = $('.original');
                        var coordsOrgElement = orgElement.offset();
                        var leftOrgElement = coordsOrgElement.left;
                        var widthOrgElement = orgElement.css('width');
                        $('.header .cloned').css('left', leftOrgElement + 'px').css('top', 0).css('width', widthOrgElement).show();
                        $('.original').css('visibility', 'hidden');
                        if ($('.wsmobileheader-clone').hasClass('d-none') && $(window).width < 575){
                            $('.wsmobileheader-clone').removeClass('d-none')
                        }
                        // alert('2');
                    } else {
                        // not scrolled past the menu; only show the original menu.
                        if($(window).width < 575){
                            $('.wsmobileheader-clone').addClass('d-none');
                        }
                        $('.header .cloned').hide();
                        $('.original').css('visibility', 'visible');
                    }
                }
                $('.wsmobileheader-clone').addClass('d-none');

                if ($("#type-path").length > 0) {
                    $("#link-" + $("#type-path").val())
                        .parent()
                        .removeClass('item-green')
                        .addClass($("#type-hover").val())
                }

                if (window.location.hash != '')
                    $("#link-" + window.location.hash.replaceAll('#', '')).click();

                $(document).on('click', '.item-library', function (e) {
                    e.preventDefault();
                    window.location.href = $(this).find('a:first').attr('href');
                });

                $(document).on('click', '.tab-link', function (e) {
                    e.preventDefault();
                    if ($("#nav-tab-blog").length > 0) {
                        console.log($(this).attr('href').split('#')[1]);
                        $("#link-" + $(this).attr('href').split('#')[1]).click();
                    }
                    else {
                        window.location.href = $(this).attr('href');
                    }
                    if ($("#nav-tab-lien-he").length > 0) {
                        console.log($(this).attr('href').split('#')[1]);
                        $("#" + $(this).attr('href').split('#')[1] +"-link").click();
                    }
                    else {
                        window.location.href = $(this).attr('href');
                    }

                })

                // $(window).resize(function(){
                //     if ($(window).width() < 767) {
                //         // is mobile device
                //         var secondaryNav = $('.wsmobileheader'),
                //             secondaryNavTopPosition = secondaryNav.offset().top;
                //         $(window).on('scroll', function(){
                //                 $('.wsmobileheader').height(30)
                //
                //         })
                //     }
                //
                // });
//                 $(document.body).on('touchmove', onScroll); // for mobile
//                 $(window).on('scroll', onScroll);
// // callback
//                 function onScroll(){
//                     if( $(window).scrollTop() + window.innerHeight >= document.body.scrollHeight ) {
//                         $('.wsmobileheader').css('position','static')
//                     }
//                 }
//                 $('body').bind('touchmove', function(e) {
//                     console.log($(this).scrollTop()); // Replace this with your code.
//                 });

// etc
                // Select all links with hashes

                if ($('.block-chuong-trinh-hoc').length > 0 ||$('.region-introduction').length > 0 )
                {
                    $('a[href*="#chuong-trinh"].tab-link')
                        // Remove links that don't actually link to anything
                        .not('[href="#"]')
                        .not('[href="#0"]')
                        .click(function(event) {
                            // On-page links
                            if (
                                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                                &&
                                location.hostname == this.hostname
                            ) {
                                // Figure out element to scroll to
                                var target = $(this.hash);
                                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                                // Does a scroll target exist?
                                if (target.length) {
                                    // Only prevent default if animation is actually gonna happen
                                    event.preventDefault();
                                    $('html, body').animate({
                                        scrollTop: target.offset().top - 100
                                    }, 1000, function() {
                                        // Callback after animation
                                        // Must change focus!
                                        var $target = $(target);
                                        $target.focus();
                                        if ($target.is(":focus")) { // Checking if the target was focused
                                            return false;
                                        } else {
                                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                            $target.focus(); // Set focus again
                                        };
                                    });
                                }
                            }
                        });
                    $('a[href*="#phuong-phap"].tab-link')
                        // Remove links that don't actually link to anything
                        .not('[href="#"]')
                        .not('[href="#0"]')
                        .click(function(event) {
                            // On-page links
                            if (
                                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                                &&
                                location.hostname == this.hostname
                            ) {
                                // Figure out element to scroll to
                                var target = $(this.hash);
                                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                                // Does a scroll target exist?
                                if (target.length) {
                                    // Only prevent default if animation is actually gonna happen
                                    event.preventDefault();
                                    $('html, body').animate({
                                        scrollTop: target.offset().top - 100
                                    }, 1000, function() {
                                        // Callback after animation
                                        // Must change focus!
                                        var $target = $(target);
                                        $target.focus();
                                        if ($target.is(":focus")) { // Checking if the target was focused
                                            return false;
                                        } else {
                                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                            $target.focus(); // Set focus again
                                        };
                                    });
                                }
                            }
                        });
                    $('a[href*="#"].link_chuong_trinh_hoc')
                        // Remove links that don't actually link to anything
                        .not('[href="#"]')
                        .not('[href="#0"]')
                        .click(function(event) {
                            // On-page links
                            if (
                                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                                &&
                                location.hostname == this.hostname
                            ) {
                                // Figure out element to scroll to
                                var target = $(this.hash);
                                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                                // Does a scroll target exist?
                                if (target.length) {
                                    // Only prevent default if animation is actually gonna happen
                                    event.preventDefault();
                                    $('html, body').animate({
                                        scrollTop: target.offset().top - 100
                                    }, 1000, function() {
                                        // Callback after animation
                                        // Must change focus!
                                        var $target = $(target);
                                        $target.focus();
                                        if ($target.is(":focus")) { // Checking if the target was focused
                                            return false;
                                        } else {
                                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                            $target.focus(); // Set focus again
                                        };
                                    });
                                }
                            }
                        });
                }

                // function scrollToSection(event) {
                //     event.preventDefault();
                //     var $section = $($(this).attr('href'));
                //     $('html, body').animate({
                //         scrollTop: $section.offset().top
                //     }, 500);
                // }
                // $('.link_chuong_trinh_hoc').on('click', scrollToSection);
                // if ($('#pills-tab').length >0 ){
                //     $(this).find('a.nav-link').click(function (e){
                //         $('body').on({
                //             'mousewheel': function(e) {
                //                 e.preventDefault();
                //                 e.stopPropagation();
                //             }
                //         })
                //     })
                // }

              $(document).on('click', 'a.btn-toogle-sidebar', function (e){
                e.preventDefault();
                $('body').toggleClass('wsactive');
              })
            });
        }
    };
})(jQuery);
