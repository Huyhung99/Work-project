(function ($) {
  Drupal.behaviors.mymodule = {
    attach: function (context, settings) {
      $(document).ready(function () {
        "use strict";

        // Document ready function
        $(function () {
          /*-------------------------------------
           JQuery Serch Box
           -------------------------------------*/
          $('#search-button').on('click', function (e) {
            e.preventDefault();
            $(this).prev('.search-form').slideToggle('slow');
          });


          /*-------------------------------------
          On click loadmore functionality
          -------------------------------------*/
          $('.loadmore').on('click', 'a', function (e) {
            e.preventDefault();
            var _this = $(this),
                _parent = _this.parents('.menu-list-wrapper'),
                _target = _parent.find('.menu-list'),
                _set = _target.find('.menu-item.hidden').slice(0, 4); // Herre 2 is the limit
            if (_set.length) {
              _set.animate({opacity: 0});
              _set.promise().done(function () {
                _set.removeClass('hidden');
                _set.show().animate({opacity: 1}, 1000);
              });
            } else {
              _this.text('No more item to display');
            }

            return false;
          });


        });

        /*-------------------------------------
         jQuery MeanMenu initialization
         --------------------------------------*/
        $('nav#dropdown').meanmenu({siteLogo: "<a href='http://rozaluta.com/' class='logo-mobile-menu'><img src='http://rozaluta.com/sites/default/files/rozaluta-logo_0.png' /></a>"});

        /*-------------------------------------
         Wow js Initiation
         -------------------------------------*/
        new WOW().init();

        /*-------------------------------------
         Jquery Scollup Initiation
         -------------------------------------*/
        $.scrollUp({
          scrollText: '<i class="fa fa-arrow-up"></i>',
          easingType: 'linear',
          scrollSpeed: 900,
          animation: 'fade'
        });

        /*-------------------------------------
         Window load function
         -------------------------------------*/
        $(window).on('load', function () {

          // Page Preloader
          // $('#preloader').fadeOut('slow', function () {
          //   $(this).remove();
          // });

          /*-------------------------------------
           jQuery for Isotope initialization
           -------------------------------------*/
          var $container = $('#inner-isotope');

          if ($container.length > 0) {

            // Isotope initialization
            var $isotope = $container.find('.featuredContainer').isotope({
              filter: '*',
              animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
              }
            });

            // Isotope filter
            $container.find('.isotop-classes-tab').on('click', 'a', function () {

              var $this = $(this);
              $this.parent('.isotop-classes-tab').find('a').removeClass('current');
              $this.addClass('current');
              var selector = $this.attr('data-filter');
              $isotope.isotope({
                filter: selector,
                animationOptions: {
                  duration: 750,
                  easing: 'linear',
                  queue: false
                }
              });
              return false;

            });
          }

        });// end window load function

        /*-------------------------------------
         About Counter
         -------------------------------------*/
        var aboutContainer = $('.about-counter');

        if (aboutContainer.length) {

          aboutContainer.counterUp({
            delay: 50,
            time: 5000
          });

        }

        /*-------------------------------------
         Contact Form initiating
         -------------------------------------*/
        // var contactForm = $('#contact-form');
        // if (contactForm.length) {
        //
        //   contactForm.validator().on('submit', function (e) {
        //     var $this = $(this),
        //         $target = contactForm.find('.form-response');
        //     if (e.isDefaultPrevented()) {
        //       $target.html("<div class='alert alert-success'><p>Please select all required field.</p></div>");
        //     } else {
        //       // Ajax call to load php file to process mail function
        //       $.ajax({
        //         url: "vendor/php/form-process.php",
        //         type: "POST",
        //         data: contactForm.serialize(),
        //         beforeSend: function () {
        //           $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
        //         },
        //         success: function (text) {
        //           if (text == "success") {
        //             $this[0].reset();
        //             $target.html("<div class='alert alert-success'><p>Message has been sent successfully.</p></div>");
        //           } else {
        //             $target.html("<div class='alert alert-success'><p>" + text + "</p></div>");
        //           }
        //         }
        //       });
        //       return false;
        //     }
        //   });
        //
        // }

        /*-------------------------------------
         Reservation Form initiating
         -------------------------------------*/
        // var reservationForm = $('#reservation-form');
        // if (reservationForm.length) {
        //
        //   reservationForm.validator().on('submit', function (e) {
        //     var $this = $(this),
        //         $target = reservationForm.find('.form-response');
        //     if (e.isDefaultPrevented()) {
        //       $target.html("<div class='alert alert-success'><p>Please select all required field.</p></div>");
        //     } else {
        //       // Ajax call to load php file to process mail function
        //       $.ajax({
        //         url: "vendor/php/reservation-form-process.php",
        //         type: "POST",
        //         data: reservationForm.serialize(),
        //         beforeSend: function () {
        //           $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
        //         },
        //         success: function (text) {
        //           if (text == "success") {
        //             $this[0].reset();
        //             $target.html("<div class='alert alert-success'><p>Message has been sent successfully.</p></div>");
        //           } else {
        //             $target.html("<div class='alert alert-success'><p>" + text + "</p></div>");
        //           }
        //         }
        //       });
        //       return false;
        //     }
        //   });
        //
        // }

        /*-------------------------------------
         Input Quantity Up & Down initialize
         -------------------------------------*/
        $('#quantity-holder').on('click', '.quantity-plus', function () {

          var $holder = $(this).parents('.quantity-holder');
          var $target = $holder.find('input.quantity-input');
          var $quantity = parseInt($target.val(), 10);
          if ($.isNumeric($quantity) && $quantity > 0) {
            $quantity = $quantity + 1;
            $target.val($quantity);
          } else {
            $target.val($quantity);
          }

        }).on('click', '.quantity-minus', function () {

          var $holder = $(this).parents('.quantity-holder');
          var $target = $holder.find('input.quantity-input');
          var $quantity = parseInt($target.val(), 10);
          if ($.isNumeric($quantity) && $quantity >= 2) {
            $quantity = $quantity - 1;
            $target.val($quantity);
          } else {
            $target.val(1);
          }

        });

        /*-------------------------------------
         Select2 activation code
         -------------------------------------*/
        // if ($('.reservation-form-select2 select.select2').length) {
        //   $('.reservation-form-select2 select.select2').select2({
        //     theme: 'classic',
        //     dropdownAutoWidth: true,
        //     width: '100%'
        //   });
        // }

        /*-------------------------------------
         Google Map
         -------------------------------------*/
        $('#ensign-nivoslider-3').nivoSlider({
          effect: 'fade',
          slices: 15,
          boxCols: 8,
          boxRows: 4,
          animSpeed: 500,
          pauseTime: 5000,
          startSlide: 0,
          directionNav: true,
          controlNavThumbs: true,
          pauseOnHover: true,
          manualAdvance: false
        });
        /*-------------------------------------
         Carousel slider initiation
         -------------------------------------*/
        // if($("#block-tac-dung-tra-xanh").length > 0){
        //   var
        //       carousel = $("#block-tac-dung-tra-xanh"),
        //       loop = carousel.data('loop'),
        //       items = carousel.data('items'),
        //       margin = carousel.data('margin'),
        //       stagePadding = carousel.data('stage-padding'),
        //       autoplay = carousel.data('autoplay'),
        //       autoplayTimeout = carousel.data('autoplay-timeout'),
        //       smartSpeed = carousel.data('smart-speed'),
        //       dots = carousel.data('dots'),
        //       nav = carousel.data('nav'),
        //       navSpeed = carousel.data('nav-speed'),
        //       rXsmall = carousel.data('r-x-small'),
        //       rXsmallNav = carousel.data('r-x-small-nav'),
        //       rXsmallDots = carousel.data('r-x-small-dots'),
        //       rXmedium = carousel.data('r-x-medium'),
        //       rXmediumNav = carousel.data('r-x-medium-nav'),
        //       rXmediumDots = carousel.data('r-x-medium-dots'),
        //       rSmall = carousel.data('r-small'),
        //       rSmallNav = carousel.data('r-small-nav'),
        //       rSmallDots = carousel.data('r-small-dots'),
        //       rMedium = carousel.data('r-medium'),
        //       rMediumNav = carousel.data('r-medium-nav'),
        //       rMediumDots = carousel.data('r-medium-dots');
        //
        //   setTimeout(function () {
        //     $("#block-tac-dung-tra-xanh").owlCarousel({
        //       loop: (loop ? true : false),
        //       items: (items ? items : 4),
        //       lazyLoad: true,
        //       margin: (margin ? margin : 0),
        //       autoplay: (autoplay ? true : false),
        //       autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
        //       smartSpeed: (smartSpeed ? smartSpeed : 250),
        //       dots: (dots ? true : false),
        //       nav: (nav ? true : false),
        //       navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        //       navSpeed: (navSpeed ? true : false),
        //       responsiveClass: true,
        //       responsive: {
        //         0: {
        //           items: ( rXsmall ? rXsmall : 1),
        //           nav: ( rXsmallNav ? true : false),
        //           dots: ( rXsmallDots ? true : false)
        //         },
        //         480: {
        //           items: ( rXmedium ? rXmedium : 2),
        //           nav: ( rXmediumNav ? true : false),
        //           dots: ( rXmediumDots ? true : false)
        //         },
        //         768: {
        //           items: ( rSmall ? rSmall : 3),
        //           nav: ( rSmallNav ? true : false),
        //           dots: ( rSmallDots ? true : false)
        //         },
        //         992: {
        //           items: ( rMedium ? rMedium : 5),
        //           nav: ( rMediumNav ? true : false),
        //           dots: ( rMediumDots ? true : false)
        //         }
        //       }
        //     });
        //   }, 500);
        // }

        $('.rc-carousel').each(function () {

          // Declared all carousel variable
          var carousel = $(this),
            loop = carousel.data('loop'),
            items = carousel.data('items'),
            margin = carousel.data('margin'),
            stagePadding = carousel.data('stage-padding'),
            autoplay = carousel.data('autoplay'),
            autoplayTimeout = carousel.data('autoplay-timeout'),
            smartSpeed = carousel.data('smart-speed'),
            dots = carousel.data('dots'),
            nav = carousel.data('nav'),
            navSpeed = carousel.data('nav-speed'),
            rXsmall = carousel.data('r-x-small'),
            rXsmallNav = carousel.data('r-x-small-nav'),
            rXsmallDots = carousel.data('r-x-small-dots'),
            rXmedium = carousel.data('r-x-medium'),
            rXmediumNav = carousel.data('r-x-medium-nav'),
            rXmediumDots = carousel.data('r-x-medium-dots'),
            rSmall = carousel.data('r-small'),
            rSmallNav = carousel.data('r-small-nav'),
            rSmallDots = carousel.data('r-small-dots'),
            rMedium = carousel.data('r-medium'),
            rMediumNav = carousel.data('r-medium-nav'),
            rMediumDots = carousel.data('r-medium-dots');

          // Call carousel main function to load carousel layout
          carousel.owlCarousel({
            loop: (loop ? true : false),
            items: (items ? items : 4),
            lazyLoad: true,
            margin: (margin ? margin : 0),
            autoplay: (autoplay ? true : false),
            autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
            smartSpeed: (smartSpeed ? smartSpeed : 250),
            dots: (dots ? true : false),
            nav: (nav ? true : false),
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            navSpeed: (navSpeed ? true : false),
            responsiveClass: true,
            responsive: {
              0: {
                items: ( rXsmall ? rXsmall : 1),
                nav: ( rXsmallNav ? true : false),
                dots: ( rXsmallDots ? true : false)
              },
              480: {
                items: ( rXmedium ? rXmedium : 2),
                nav: ( rXmediumNav ? true : false),
                dots: ( rXmediumDots ? true : false)
              },
              768: {
                items: ( rSmall ? rSmall : 7),
                nav: ( rSmallNav ? true : false),
                dots: ( rSmallDots ? true : false)
              },
              992: {
                items: ( rMedium ? rMedium : 5),
                nav: ( rMediumNav ? true : false),
                dots: ( rMediumDots ? true : false)
              }
            }
          });

        });


        /*-------------------------------------
         Window onLoad and onResize event trigger
         -------------------------------------*/
        $(window).on('load resize', function () {

          //Define the maximum height for mobile menu
          var wHeight = $(window).height(),
              mLogoH = $('a.logo-mobile-menu').outerHeight();
          wHeight = wHeight - 50;
          $('.mean-nav > ul').css('height', wHeight + 'px');

        });


        /*-------------------------------------
         Jquery Stiky Menu at window Load
         -------------------------------------*/
        $(window).on('scroll', function () {

          var s = $('#sticker'),
              w = $('.wrapper'),
              h = s.outerHeight(),
              windowpos = $(window).scrollTop(),
              windowWidth = $(window).width(),
              h1 = s.parent('.header1-area'),
              h2 = s.parent('.header2-area'),
              h3 = s.parent('.header3-area'),
              h3H = h3.find('.header-top-area').outerHeight(),
              topBar = s.prev('.header-top-area');

          if (windowWidth > 767) {
            w.css('padding-top', '');
            var topBarH, mBottom = 0;
            if (h1.length) {
              topBarH = h = 1;
              mBottom = 0;
            } else if (h2.length) {
              mBottom = h2.find('.header-bottom-area').outerHeight();
              topBarH = topBar.outerHeight();
            } else if (h3.length) {
              topBarH = topBar.outerHeight();
            }

            if (windowpos >= topBarH) {
              s.addClass('stick');
              if (h2.length) {
                topBar.css('margin-bottom', mBottom + 'px');
              }
            } else {
              s.removeClass('stick');
              if (h2.length) {
                topBar.css('margin-bottom', 0);
              }
            }
          }

        });

        function checkLoginState() {
          FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
          });
        }

        // if($(".checkout-completion-message").length > 0)
        //   setTimeout(function () {
        //     window.location = 'https://m.me/108665850928104?ref=Chuc-mung-dat-hang-thanh-cong'
        //   }, 1000);
        $(document).on('click','.btn-view-detail-order', function (e) {
          e.preventDefault();
          var $myTr = $(this).parent().parent(),
              $myIDorder = $(this).attr('data-value');
          if ($myTr.next().hasClass('chi-tiet-dong-hang-row'))
            $myTr.next().remove();
          else {
            $.ajax({
                url: 'get-detail-order',
                data: {myOrder: $myIDorder},
                dataType: 'json',
                type: 'post',
                success: function (data) {
                    $myTr.after(
                      `<tr class="chi-tiet-dong-hang-row">
                        <td colspan="6">`+data.content+`</td>
                       </tr>`);
                },
                error: function (r1, r2) {
                  alert(r1.responseText);
                }
              }
            );
          }

        });

        //pop up
        // setTimeout(function () {
        //   if (($("#cart").length > 0)){
        //   }else {
        //     $('#myModal').modal('show');
        //
        //   }
        // },7*1000);
        // window.fbAsyncInit = function() {
        //   FB.init({
        //     appId      : '383780722630542',
        //     cookie     : true,
        //     xfbml      : true,
        //     version    : 'v8.0'
        //   });
        //
        //   FB.AppEvents.logPageView();
        //
        // };
        //
        // (function(d, s, id){
        //   var js, fjs = d.getElementsByTagName(s)[0];
        //   if (d.getElementById(id)) {return;}
        //   js = d.createElement(s); js.id = id;
        //   js.src = "https://connect.facebook.net/en_US/sdk.js";
        //   fjs.parentNode.insertBefore(js, fjs);
        // }(document, 'script', 'facebook-jssdk'));

        // $(document).on('change', '#edit-customer-profile-billing-field-thanh-pho-und', function(){
        //
        //   var $idThanhPho = $(this).val();
        //   $.ajax({
        //     url: 'https://minhhien.com.vn/khu-vuc-api/api/get-data',
        //     data: {type: 'quan_huyen', parent_id: $idThanhPho},
        //     dataType: 'json',
        //     type:'post',
        //     beforeSend: function(){
        //       $("#edit-customer-profile-billing-field-quan-huyen-und").html('');
        //     },
        //     success: function(data){
        //       $("#edit-customer-profile-billing-field-quan-huyen-und").append('<option></option>');
        //       $.each(data, function(k, item){
        //         $("#edit-customer-profile-billing-field-quan-huyen-und").append('<option value='+item.id+'>'+item.name+'</option>');
        //       });
        //     }
        //   })
        // });


        // if($("#edit-customer-profile-billing-field-thanh-pho").length > 0){
          // $("#edit-customer-profile-billing-field-thanh-pho").change();
        //   $("document").on('select', '#edit-customer-profile-billing-field-thanh-pho', function(e){
        //     e.preventDefault();
        //     console.log($(this).find('option').length);
        //     if($(this).find('option').length == 0){
        //       jQuery.ajax({
        //         url: 'https://minhhien.com.vn/khu-vuc-api/api/get-data',
        //         data: {type: 'thanh_pho', parent_id: null},
        //         dataType: 'json',
        //         type:'post',
        //         beforeSend: function(){
        //           $("#edit-customer-profile-billing-field-thanh-pho").empty();
        //         },
        //         success: function(data){
        //           $("#edit-customer-profile-billing-field-thanh-pho").append('<option></option>');
        //           $.each(data, function(k, item){
        //             $("#edit-customer-profile-billing-field-thanh-pho").append('<option value='+item.id+'>'+item.name+'</option>');
        //           });
        //         }
        //       })
        //     }
        //   })
        //
        // }
        $(document).ready(function () {
          if($('a.decrement')){
            $('a.decrement').next().addClass('d-inline p-lr10')
          }
        })


        $(document).on('click','.increment',function (e) {
          e.preventDefault();
          var t = $(this);
          var init_quantity = t.prev().children().val();
          var quantity = t.prev().children().val();
          var price = parseInt(t.parent().next().html());
          var total = parseInt(t.parent().next().next().html());
          quantity = parseInt(quantity) + 1;
          var totalprice = parseInt($('div.commerce-order-handler-area-order-total').children().children().next().children().html());
          total = (price*quantity)+'.000 đ';
          t.prev().children().val(quantity);
          t.parent().next().next().html(total);
          totalprice = parseInt(totalprice + parseInt(total) - (price*init_quantity)).toLocaleString('vi') + '.000 đ';
          $('div.commerce-order-handler-area-order-total').children().children().next().children().html(totalprice)
          // t.parentsUntil('div.cart-page-top table-responsive').next().children().children().children().html(totalprice);
        });
        $(document).on('click','.decrement',function (e) {
          e.preventDefault();
          var t = $(this);
          var quantity = t.next().children().val();
          var init_quantity = t.prev().children().val();
          var price = parseInt(t.parent().next().html());
          var total = parseInt(t.parent().next().next().html());
          var totalprice = parseInt($('div.commerce-order-handler-area-order-total').children().children().next().children().html());
          quantity = parseInt(quantity) -1;
          total = (price*quantity)+'.000 đ';
          t.next().children().val(quantity);
          t.parent().next().next().html(total);
          totalprice = (parseInt(totalprice - price)).toLocaleString('vi') + '.000 đ';
          $('div.commerce-order-handler-area-order-total').children().children().next().children().html(totalprice)
          if(quantity <=1){
            t.next().children().val(1);
            t.parent().next().next().html(price*parseInt(1)+'.000 đ')
          }
        })
      })
    }
  }
}(jQuery));




