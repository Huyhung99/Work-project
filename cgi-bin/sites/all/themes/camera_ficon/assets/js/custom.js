
(function ($) {
    Drupal.behaviors.mymodule = {
        attach: function (context, settings) {
            $(document).ready(function () {
                'use strict'; // Start of use strict


                /*--------------------------
                scrollUp
                ---------------------------- */
                $.scrollUp({
                    scrollText: '<i class="fa fa-long-arrow-up"></i>',
                    easingType: 'linear',
                    scrollSpeed: 900,
                    animation: 'fade'
                });


                if (typeof settings.fancybox.options.beforeShow == 'undefined') {
                    settings.fancybox.options.beforeShow = function() {
                        var alt = this.element.find('img').attr('alt');
                        this.inner.find('img').attr('alt', alt);
                    };
                }
                if (typeof settings.fancybox.helpers !== 'undefined') {
                    settings.fancybox.options.helpers = settings.fancybox.helpers;
                    delete settings.fancybox.helpers;
                }
                /*--------------------------
                 LightBox
                 ---------------------------- */
                 if($('.lightbox-image').length) {
                    $('.lightbox-image').fancybox({
                        openEffect  : 'fade',
                        closeEffect : 'fade',

                        youtube : {
                            controls : 0,
                            showinfo : 0
                        },

                        helpers : {
                            media : {}
                        }
                    });
                }

                /* --------------------------------------------------
                   * accordions
                   * --------------------------------------------------*/
                $('.sb-accordions').each( function () {
                    var allPanels = $(this).find('.acc-content');
                    $(this).find('.acc-toggle').on( 'click', function(){

                        var $this = $(this),
                            $target = $this.next();

                        if(!$target.hasClass('active')){
                            allPanels.removeClass('active').slideUp(300);
                            allPanels.parent().removeClass('current');
                            $target.addClass('active').slideDown(300);
                            $target.parent().addClass('current');
                        }

                        return false;
                    });
                    $(this).find('.acc-toggle:first').trigger('click');
                });

                /*--------------------------
                   header_search
                ---------------------------- */

                $(".header_search").each(function(){
                    $(".search_btn", this).on("click", function(e){

                        e.preventDefault();
                        e.stopPropagation();

                        $(".header_search_content").toggleClass("on");

                        if ($('.header_search a').hasClass('open')) {
                            $( ".header_search a i" ).removeClass('ti-close').addClass('ti-search');
                            $(this).removeClass('open').addClass('sclose');

                        }

                        else {
                            $(".header_search a").removeClass('sclose').addClass('open');
                            $( ".header_search a i" ).removeClass('ti-search').addClass('ti-close');

                        }
                    });

                });

                /*--------------------------
                   Mobile Menu
                ---------------------------- */

                var menu = {
                    initialize: function() {
                        this.Menuhover();
                    },

                    Menuhover : function(){
                        var getNav = $("nav.main-menu"),
                            getWindow = $(window).width(),
                            getHeight = $(window).height(),
                            getIn = getNav.find("ul.menu").data("in"),
                            getOut = getNav.find("ul.menu").data("out");

                        if ( matchMedia( 'only screen and (max-width: 1200px)' ).matches ) {

                            // Enable click event



                            $("nav.main-menu ul.menu").each(function(){
                                // Dropdown Fade Toggle


                                // Megamenu style
                                $(".megamenu-fw", this).each(function(){
                                    $(".col-menu", this).each(function(){
                                        $(".title", this).off("click");
                                        $(".title", this).on("click", function(){
                                            $(this).closest(".col-menu").find(".content").stop().toggleClass('active');
                                            $(this).closest(".col-menu").toggleClass("active");
                                            return false;

                                        });

                                    });
                                });

                            });
                        }
                    },
                };

                    $('a.mega-menu-link').on('click',function (e) {
                        if ($('.main-menu.menu-mobile').hasClass('show')){
                            e.preventDefault();
                            var t = $(this);
                            t.toggleClass('active').next('ul').toggleClass('active');
                        }
                    });




                $('.btn-show-menu-mobile').on('click', function(e){
                    $(this).toggleClass('is-active');
                    $('.menu-mobile').toggleClass('show');
                    return false;
                    e.preventDefault();
                });

                // Initialize
                $(document).ready(function(){
                    menu.initialize();

                });

                /*--------------------------
                    Slider Active
                 ---------------------------- */

                $('.slider_list').owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 10000,
                    dots: false,
                    nav: true,
                    navText: ["<i class='fa fa-long-arrow-left''></i>", "<i class='fa fa-long-arrow-right''></i>"],
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        992: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        },
                        1920: {
                            items: 1
                        }
                    }
                })

                // counterUp
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                $('.venobox').venobox({

                    numeratio: true,
                    infinigall: true

                });

                /* --------------------------------------------------
                  social team
                  --------------------------------------------------*/
                $('.team-social > span').on('click', function(){
                    $(this).parent().toggleClass('active');
                });

                /*------------------------------------------------------------------------------/
                 Fixed-header
                *------------------------------------------------------------------------------*/

                $(window).scroll(function(){
                    if ( matchMedia( 'only screen and (min-width: 1200px)' ).matches )
                    {
                        if ($(window).scrollTop() >= 50 ) {

                            $('.stickable-header').addClass('fixed-header');
                        }
                        else {

                            $('.stickable-header').removeClass('fixed-header');
                        }
                    }
                });


                if ($('.testimonials-one__carousel').length) {
                    $('.testimonials-one__carousel').owlCarousel({
                        loop:true,
                        nav:true,
                        smartSpeed: 500,
                        autoplay: 5000,
                        navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
                        responsive:{
                            0:{
                                items:1,
                                margin:30
                            },
                            600:{
                                items:1,
                                margin:30
                            },
                            800:{
                                items:1,
                                margin:30
                            },
                            1024:{
                                items:1,
                                margin:30
                            },
                            1200:{
                                items:6,
                            }
                        }
                    });
                }

                /*------------------------------------------------------------------
                    Year
                ------------------------------------------------------------------*/
                $(function(){
                    var theYear = new Date().getFullYear();
                    $('#year').html(theYear);
                });
            })
        }
    };
})(jQuery);

/*------------------------------------------------------------------
 Loader 
------------------------------------------------------------------*/
jQuery(window).on("load scroll", function() {
    'use strict'; // Start of use strict
    // Loader 
     $('#dvLoading').fadeOut('slow', function () {
            $(this).remove();
        });
	$('.google-map').on('click', function() {
            $('.google-map').find('iframe').css("pointer-events", "auto");
        });
	  
});
