$(document).ready(function () {



  /**-----------------------------

   *  Navbar fix

   * ---------------------------*/

  // $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a', function (e) {

  //     e.preventDefault();

  // })
  /*-------------------------------------
      menus
  -------------------------------------*/
  $('.menu').click (function(){
    $(this).toggleClass('open');
  });



  // mobile menu
  $(".btn_pc").click(function (e) {
    if($(".menu_2_trang_chu").hasClass("open_need"))
    {
      $(".menu_2_trang_chu").removeClass("open_need");
    }
    else {
      $(".menu_2_trang_chu").addClass("open_need");
    }
  })
  $("#btn-loc-bds").click(function (e) {
    e.preventDefault();
    if($(".chuyen_vi_tri").hasClass("d-none"))
    {
      $(".chuyen_vi_tri").removeClass("d-none");
    }
    else {
      $(".chuyen_vi_tri").addClass("d-none");
    }
  })
  if ($(window).width() < 992) {

    $("#btn-loc-bds").click(function () {
      if($(".chuyen_vi_tri #TimKiemSPPC").hasClass("ktra_form"))
      {
        var html_need=$(".chuyen_vi_tri").html();
        $(".chuyen_vi_tri #TimKiemSPPC").remove();
        $(".noi_hien_thi_form").html(html_need);
      }
      else {
        var html_need=$(".noi_hien_thi_form").html();
        $(".noi_hien_thi_form #TimKiemSPPC").remove();
        $(".chuyen_vi_tri").html(html_need);
      }
    });

    $(".in-mobile").clone().appendTo(".sidebar-inner");

    $(".in-mobile ul li.menu-item-has-children").append('<i class="fas fa-chevron-right"></i>');

    $('<i class="fas fa-chevron-right"></i>').insertAfter("");

    $(".menu-item-has-children a").click(function(e) {
      // e.preventDefault();
      $(this).siblings('.sub-menu').animate({

        height: "toggle"

      }, 300);

    });

    var heightPhone = (window.innerHeight > 0) ? window.innerHeight : screen.height;
    var heightMenu = $(".menu-map").height();
    $(".menu-map").css('top',heightPhone-heightMenu);
    $(".navbar-toggler").on('click',function (){
      $("#navbarSupportedContent").toggleClass('show');
      var heightMenuChild = $(".menu-map").height();
      $(".menu-map").css('top',heightPhone-heightMenuChild);
    });
  }



  var menutoggle = $('.menu-toggle');

  var mainmenu = $('.navbar-nav');



  menutoggle.on('click', function() {

    if (menutoggle.hasClass('is-active')) {

      mainmenu.removeClass('menu-open');

    } else {

      mainmenu.addClass('menu-open');

    }

  });



  /*--------------------------------------------------

      select onput

  ---------------------------------------------------*/

  if ($('.single-select').length){

    $('.single-select').niceSelect();

  }



  /*--------------------------------------------------

      service slider

  ---------------------------------------------------*/

  var $serviceCarousel = $('.service-slider');

  if ($serviceCarousel.length > 0) {

    $serviceCarousel.slick({

      dots: false,

      slidesToScroll: 1,

      speed: 400,

      loop: true,

      slidesToShow: 4,

      autoplay: false,

      prevArrow: '<span class="slick-prev"><i class="fa fa-angle-left"></i></span>',

      nextArrow: '<span class="slick-next"><i class="fa fa-angle-right"></i></span>',

      responsive: [

        {

          breakpoint: 1100,

          settings: {

            slidesToShow: 3,

            slidesToScroll: 1

          }

        },

        {

          breakpoint: 767,

          settings: {

            slidesToShow: 2,

            slidesToScroll: 1,

          }

        },

        {

          breakpoint: 575,

          settings: {

            slidesToShow: 1,

            slidesToScroll: 1,

          }

        }

      ]

    });

  }



  /*--------------------------------------------------

      service slider

  ---------------------------------------------------*/

  var $service2Carousel = $('.service-slider-2');

  if ($service2Carousel.length > 0) {

    $service2Carousel.owlCarousel({

      loop: true,

      autoplay: false,

      autoPlayTimeout: 1000,

      dots: false,

      nav: false,

      smartSpeed: 1500,

      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

      responsive: {

        0: {

          items: 1

        },

        767: {

          items: 2,

        },

        992: {

          items: 3

        }

      }

    });

  }



  var $sliderFront = $('.slider-front');

  if ($sliderFront.length > 0) {

    $sliderFront.owlCarousel({

      loop: true,

      autoplay: false,

      autoPlayTimeout: 1000,

      dots: false,

      nav: false,

      singleItem:true,

      smartSpeed: 1500,

      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

      responsive: {

        0: {

          items: 1

        },

        767: {

          items: 1,

        },

        992: {

          items: 1

        }

      }

    });

  }



  /*--------------------------------------------------

      client slider

  ---------------------------------------------------*/

  var $clientCarousel = $('.client-slider');

  if ($clientCarousel.length > 0) {

    $clientCarousel.owlCarousel({

      loop: true,

      autoplay: false,

      autoPlayTimeout: 1000,

      dots: false,

      nav: false,

      smartSpeed: 1500,

      margin: 30,

      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

      responsive: {

        0: {

          items: 1

        },

        576: {

          items: 2

        },

        768: {

          items: 3,

        },

        992: {

          items: 4,

        }

      }

    });

  }
  var $imagesProductCarousel = $('.image-product-carousel');

  if ($imagesProductCarousel.length > 0) {

    $imagesProductCarousel.owlCarousel({

      loop: true,

      autoplay: false,

      autoPlayTimeout: 1000,

      dots: false,

      nav: false,

      smartSpeed: 1500,

      margin: 30,

      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

      responsive: {

        0: {

          items: 1

        },
        375:{
          items:5
        },
        576: {

          items: 5

        },

        768: {

          items: 5,

        },

        992: {

          items: 5,

        },
        1024: {

          items: 5,

        }

      }

    });

  }


  /*--------------------------------------------------

      client slider

  ---------------------------------------------------*/

  var $ppsliserCarousel = $('.popular-post-slider');

  if ($ppsliserCarousel.length > 0) {

    $ppsliserCarousel.owlCarousel({

      loop: true,

      autoplay: true,

      autoPlayTimeout: 1000,

      dots: false,

      nav: false,

      margin: 20,

      smartSpeed: 1500,

      responsive: {

        0: {

          items: 1

        },

        576: {

          items: 2

        },

        992: {

          items: 3,

        },

        1200: {

          items: 4,

          margin: 20,

        },

        1500: {

          items: 4,

          margin: 40,

        }

      }

    });

  }



  /*--------------------------------------------------

      client slider

  ---------------------------------------------------*/

  var $clientCarousel_2 = $('.client-slider-2');

  if ($clientCarousel_2.length > 0) {

    $clientCarousel_2.owlCarousel({

      loop: true,

      autoplay: false,

      autoPlayTimeout: 1000,

      dots: true,

      nav: true,

      smartSpeed: 1500,

      items: 3,

      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

    });

  }

  var $clientCarousel_edit = $('.slider_nhan_vien');

  if ($clientCarousel_edit.length > 0) {

    $clientCarousel_edit.owlCarousel({

      loop: true,

      autoplay: false,

      autoPlayTimeout: 1000,

      dots: true,

      nav: true,

      smartSpeed: 1500,

      responsive: {

        0: {

          items: 1

        },
        450: {

          items: 2

        },
        767: {

          items: 3,

        },

        992: {

          items: 4

        }

      },

      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

    });

  }

  /*--------------------------------------------------

      featured slider

  ---------------------------------------------------*/

  var $featuredCarousel = $('.featured-slider');

  if ($featuredCarousel.length > 0) {

    $featuredCarousel.owlCarousel({

      loop: true,

      autoplay: false,

      autoPlayTimeout: 1000,

      dots: false,

      nav: true,

      smartSpeed: 1500,

      margin: 30,

      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

      items: 3,

    });

  }



  /*--------------------------------------------------

      featured slider

  ---------------------------------------------------*/

  var $apartmentsCarousel = $('.apartments-slider');

  if ($apartmentsCarousel.length > 0) {

    $apartmentsCarousel.owlCarousel({

      loop: true,

      autoplay: false,

      autoPlayTimeout: 1000,

      dots: true,

      nav: true,

      smartSpeed: 1500,

      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

      items: 1,

    });

  }



  /*--------------------------------------------------

      featured slider

  ---------------------------------------------------*/

  var $pdsCarousel = $('.property-details-slider');

  if ($pdsCarousel.length > 0) {

    $pdsCarousel.owlCarousel({

      loop: true,

      autoplay: false,

      autoPlayTimeout: 1000,

      dots: true,

      nav: true,

      smartSpeed: 1500,

      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

      items: 1,

    });

  }



  /* -----------------------------------------------------

      apartments-slider-2

  ----------------------------------------------------- */

  var $ap2_slider = $('.apartments-slider-2');

  $ap2_slider.slick({

    slidesToShow: 1,

    dots: false,

    slidesToScroll: 1,

    speed: 400,

    loop: true,

    autoplay: false,

    prevArrow: '<span class="slick-prev"><i class="fa fa-angle-left"></i></span>',

    nextArrow: '<span class="slick-next"><i class="fa fa-angle-right"></i></span>',

    appendArrows: $('.ap2-slider-controls .slider-nav'),

  });

  //active progress

  var $progressBar = $('.ap2-list-progress');

  var $progressBarLabel = $( '.slider__label' );

  $ap2_slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

    var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;

    $progressBar

      .css('background-size', calc + '% 100%')

      .attr('aria-valuenow', calc );

    $progressBarLabel.text( calc + '% completed' );

  });

  //active count list

  $(".apartments-slider-2").on("beforeChange", function(event, slick, currentSlide, nextSlide) {

    var firstNumber = check_number(++nextSlide);

    $(".ap2-slider-controls .slider-extra .text .first").text(firstNumber);

  });

  var smSlider = $(".ap2-list-slider").slick("getSlick");

  var smSliderCount = smSlider.slideCount;

  $(".ap2-slider-controls .slider-extra .text .last").text(check_number(smSliderCount));

  function check_number(num) {

    var IsInteger = /^[0-9]+$/.test(num);

    return IsInteger ? "0" + num : null;

  }



  /* --------------------------------------------------

      city

  ---------------------------------------------------- */

  $('.video-play-btn').magnificPopup({

    type: 'video',

    removalDelay: 260,

    mainClass: 'mfp-zoom-in',

  });



  /* --------------------------------------------------

      city

  ---------------------------------------------------- */

  var $cityFilterArea = $('.city-filter-area');

  /*Grid*/

  $cityFilterArea.each(function(){

    var $this = $(this),

      $cityFilterItem = '.rld-city-item';

    $this.imagesLoaded( function() {

      $this.isotope({

        itemSelector: $cityFilterItem,

        percentPosition: true,

        masonry: {

          columnWidth: '.city-sizer',

        }

      });

    });

  });





  /* --------------------------------------------------

      property filter

  ---------------------------------------------------- */

  var $Container = $('.property-filter-area');

  if ($Container.length > 0) {

    $('.property-filter-area').imagesLoaded(function () {

      var festivarMasonry = $Container.isotope({

        itemSelector: '.rld-filter-item', // use a separate class for itemSelector, other than .col-

        masonry: {

          gutter: 0

        }

      });

      $(document).on('click', '.property-filter-menu > button', function () {

        var filterValue = $(this).attr('data-filter');

        festivarMasonry.isotope({

          filter: filterValue

        });

      });

    });

    $(document).on('click','.property-filter-menu > button' , function () {

      $(this).siblings().removeClass('active');

      $(this).addClass('active');

    });

  }



  /*--------------------------------------

      Active

  ---------------------------------------*/

  $(document).on('mouseover','.single-intro-media',function() {

    $(this).addClass('single-intro-media-active');

    $('.single-intro-media').removeClass('single-intro-media-active');

    $(this).addClass('single-intro-media-active');

  });



  /*--------------------------------------

      range slider

  ---------------------------------------*/

  $( function() {

    var handle = $( ".ui-slider-handle-price" );

    $( ".rld-price-slider" ).slider({

      range: "min",

      value: 750,

      min: 1,

      max: 3500,

      create: function() {

        handle.text( $( this ).slider( "value" ) );

      },

      slide: function( event, ui ) {

        handle.text( ui.value );

      }

    });

  } );

  $( function() {

    var handle = $( ".ui-slider-handle-size" );

    $( ".rld-size-slider" ).slider({

      range: "min",

      value: 600,

      min: 1,

      max: 6500,

      create: function() {

        handle.text( $( this ).slider( "value" ) );

      },

      slide: function( event, ui ) {

        handle.text( ui.value );

      }

    });

  } );



  /*--------------------------------------------

      News Search

  ---------------------------------------------*/

  if ($('.news-search-btn').length){

    $(".news-search-btn").on('click', function(){

      $(".news-search-box").toggleClass("news-search-box-show", "linear");

    });

    $('body').on('click', function(event) {

      if (!$(event.target).closest('.news-search-btn').length && !$(event.target).closest('.news-search-box').length) {

        $('.news-search-box').removeClass('news-search-box-show');

      }

    });

  }



  /*-------------------------------------------------

     back to top

 --------------------------------------------------*/

  $(document).on('click', '.back-to-top', function () {

    $("html,body").animate({

      scrollTop: 0

    }, 2000);

  });





  /*-------------------------------------------------

     parallax

  --------------------------------------------------*/

  if ($.fn.jarallax) {

    $('.jarallax').jarallax({

      speed: 0.5

    });

  }

  // var heightNav = $('.navbar').height();

  // console.log(heightNav);

  // $('.slider-front').css('margin-top',heightNav+'px');

  $(document).on('click','.topage .single-feature .thumb',function (e){

    window.location = $(this).attr("data-src");

    return false;

  })

  $(document).on('click','.nice-select.gia_thue_can_ho ul li',function () {

    var value=$(this).attr('data-value');

    if(value!=='1')

    {

      location.assign('/tat-ca-can-ho?sort_by=field_gia_value&sort_order='+value);

    }

  });

  $(document).on('click','.nice-select.thoi_gian_can_ho ul li',function () {

    var value=$(this).attr('data-value');

    if(value!=='1')

    {

      location.assign('/tat-ca-can-ho?sort_by=created&sort_order='+value);

    }

  });

  $(document).on('click','.nice-select.khu_vuc_vid ul li',function () {

    var value=$(this).attr('data-value');

    var duongdan=$(location).attr('href');

    var duongdan1=duongdan.split('?')[0];

    if(value!=='1')

    {

      if(value!=='all')

      {

        location.assign(duongdan1);

        location.assign(duongdan1+'?field_khu_vuc_tid='+value);

      }

      else

      {

        location.assign(duongdan1);

      }

    }

  });

  $(document).on('click','.dong_hien_thi',function (e) {

    e.preventDefault();

    if($('.support-online-show').hasClass('dong_tab_hien_thi')){

      $('.support-online-show').removeClass('dong_tab_hien_thi');

      $('.tim_kiem_pop_up').addClass('dong_tab_hien_thi');

    }

    else {

      $('.support-online-show').addClass('dong_tab_hien_thi');

      $('.tim_kiem_pop_up').removeClass('dong_tab_hien_thi');

    }

  });



  $(window).on("scroll", function() {

    /*---------------------------------------

    sticky menu activation && Sticky Icon Bar

    -----------------------------------------*/

    var mainMenuTop = $(".navbar-area");

    if ($(window).scrollTop() >= 1) {

      mainMenuTop.addClass('navbar-area-fixed');

    }

    else {

      mainMenuTop.removeClass('navbar-area-fixed');

    }



    var ScrollTop = $('.back-to-top');

    if ($(window).scrollTop() > 1000) {

      ScrollTop.fadeIn(1000);

    } else {

      ScrollTop.fadeOut(1000);

    }

  });



  $(window).on('load', function () {



    /*-----------------

        preloader

    ------------------*/

    var preLoder = $("#preloader");

    preLoder.fadeOut(0);



    /*-----------------

        back to top

    ------------------*/

    var backtoTop = $('.back-to-top')

    backtoTop.fadeOut();



    /*---------------------

        Cancel Preloader

    ----------------------*/

    $(document).on('click', '.cancel-preloader a', function (e) {

      e.preventDefault();

      $("#preloader").fadeOut(2000);

    });

    $(document).on('click','.btn-nhan-thong-tin-tu-van', function (e){

      e.preventDefault();

    })

    $(document).on('click','.close',function (e){

      {

        e.preventDefault();

        $(this).parents('#exampleModal').removeClass('show');

        $(this).parents('#exampleModal').removeAttr('style');

      }

    })

    $('#edit-pass-pass1').addClass('form-control');
    $('#edit-pass-pass2').addClass('form-control');
    $('#edit-field-ngay-sinh-und-0-value-day').addClass('form-control mt-10');
    $('#edit-field-ngay-sinh-und-0-value-month').addClass('form-control mt-10');
    $('#edit-field-ngay-sinh-und-0-value-year').addClass('form-control mt-10');
    $('.hidden_phone_contact').on('click',function (){
      $(this).addClass('d-none');
      $(this).next().removeClass('d-none');
      return false;
    })


  });

});
