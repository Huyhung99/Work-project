(function ($) {
  Drupal.behaviors.mymodule = {
    attach: function (context, settings) {
      $(document).ready(function () {
    "use strict";

  // $(document).on('click', '.block-danh-gia', function(e){
  //       e.preventDefault();
  //       var $loaiDanhGia = $(this).find('.title-rating').text();
  //
  //       $.confirm({
  //         title: 'ĐÁNH GIÁ CHẤT LƯỢNG DỊCH VỤ',
  //         content: '' +
  //         '<form action="" class="formName">' +
  //             '<div class="alert alert-info">Rất cám ơn Quý khách đã đánh giá chất lượng dịch vụ của Trung tâm. Vui lòng để lại số điện thoại</div>' +
  //             '<div class="form-group">' +
  //                 '<label>Điện thoại</label>' +
  //                 '<input type="text" placeholder="0989xxx" class="dien_thoai form-control" required />' +
  //             '</div>' +
  //         '</form>',
  //         buttons: {
  //             formSubmit: {
  //               text: 'Gửi thông tin',
  //               btnClass: 'btn-blue',
  //               action: function () {
  //                 var dien_thoai = this.$content.find('.dien_thoai').val();
  //                 if(!dien_thoai){
  //                   $.alert('Vui lòng nhập số điện thoại');
  //                   return false;
  //                 }else{
  //                   $.confirm({
  //                     content: function () {
  //                       var self = this;
  //                       return $.ajax({
  //                         url: 'https://dienchanbeauty.minhhien.com.vn/api/service/save-rating',
  //                         dataType: 'json',
  //                         method: 'post',
  //                         data: {
  //                           dien_thoai: dien_thoai,
  //                           type: $loaiDanhGia
  //                         }
  //                       }).done(function (response) {
  //                         self.setContent('<div class="text-success">'+ response.message + '</div>');
  //                         self.setTitle('Thông báo');
  //                         self.setType('success')
  //                       }).fail(function(){
  //                         self.setContent('Something went wrong.');
  //                       });
  //                     }
  //                   });
  //                 }
  //               }
  //             },
  //             cancel: function () {
  //                 //close
  //             },
  //         },
  //         onContentReady: function () {
  //             // bind to events
  //             var jc = this;
  //             this.$content.find('form').on('submit', function (e) {
  //                 // if the user submits the form by pressing enter in the field.
  //                 e.preventDefault();
  //                 jc.$$formSubmit.trigger('click'); // reference the button and click it
  //             });
  //         }
  //     });
  //   })
        // if($("#myChart").length > 0){
        //   $.ajax({
        //     url: 'https://dienchanbeauty.minhhien.com.vn/api/service/thong-ke-danh-gia',
        //     type: 'post',
        //     dataType: 'json',
        //     success: function (data){
        //       var ctx = document.getElementById('myChart').getContext('2d');
        //       var myChart = new Chart(ctx, {
        //         type: 'pie',
        //         data: {
        //           labels: data.labels,
        //           datasets: [{
        //             label: '# đánh giá',
        //             data: data.so_luong,
        //             backgroundColor: data.colors,
        //             // borderColor: [
        //             //   'rgba(255, 99, 132, 1)',
        //             //   'rgba(54, 162, 235, 1)',
        //             //   'rgba(255, 206, 86, 1)',
        //             //   'rgba(75, 192, 192, 1)',
        //             //   'rgba(153, 102, 255, 1)',
        //             //   'rgba(255, 159, 64, 1)'
        //             // ],
        //             borderWidth: 1
        //           }]
        //         },
        //         options: {
        //           scales: {
        //             yAxes: [{
        //               ticks: {
        //                 beginAtZero: true
        //               }
        //             }]
        //           }
        //         }
        //       });
        //     }
        //   })
        //
        // }
/*--
    Menu Sticky
-----------------------------------*/
    var windows = $(window);
    var sticky = $('.header-sticky');

    windows.on('scroll', function() {
        var scroll = windows.scrollTop();
        if (scroll < 300) {
            sticky.removeClass('is-sticky');
        }else{
            sticky.addClass('is-sticky');
        }
    });

/*--
    Off Canvas
-------------------------------------------*/
    $(".off-canvas-btn").on('click', function () {
        $("body").addClass('fix');
        $(".off-canvas-wrapper").addClass('open');
    });

    $(".btn-close-off-canvas,.off-canvas-overlay").on('click', function () {
        $("body").removeClass('fix');
        $(".off-canvas-wrapper").removeClass('open');
    });


/*--
    Countdown Activation
------------------------------------*/
	$('[data-countdown]').each(function () {
		var $this = $(this),
			finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function (event) {
			$this.html(event.strftime('<div class="single-countdown"><span class="single-countdown__time">%D</span><span class="single-countdown__text">Days</span></div><div class="single-countdown"><span class="single-countdown__time">%H</span><span class="single-countdown__text">Hours</span></div><div class="single-countdown"><span class="single-countdown__time">%M</span><span class="single-countdown__text">Mins</span></div><div class="single-countdown"><span class="single-countdown__time">%S</span><span class="single-countdown__text">Secs</span></div>'));
		});
	});

/*---
 Category Menu Active
---------------------------- */
    $(".categories_title").on("click", function() {
        $(this).toggleClass('active');
        $('.categories_menu_toggle').slideToggle('medium');
    });

    $('.categories-more-less').on('click', function(){
        $('.hide-child').slideToggle();
        $(this).toggleClass('rx-change');
    });

/* ---------------------
 Category menu
--------------------- */
    function categorySubMenuToggle(){
        $('.categories_menu_toggle li.menu_item_children > a').on('click', function(){
        if($(window).width() < 991){
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp();
            }
            else {
                element.addClass('open');
                element.children('ul').slideDown();
                element.siblings('li').children('ul').slideUp();
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp();
            }
        }
        });
        $('.categories_menu_toggle li.menu_item_children > a').append('<span class="expand"></span>');
    }
    categorySubMenuToggle();


/*--
    Responsive Mobile Menu
--------------------------------------------------*/
//Variables
	var $offCanvasNav = $('.mobile-menu'),
		$offCanvasNavSubMenu = $offCanvasNav.find('.dropdown');

	//Add Toggle Button With Off Canvas Sub Menu
	$offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');

	//Close Off Canvas Sub Menu
	$offCanvasNavSubMenu.slideUp();

	//Category Sub Menu Toggle
	$offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.parent('li').removeClass('active');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active');
                $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });

/*--
    Hero Slider
--------------------------------------------*/
    // var galleryThumbs = new Swiper('.gallery-thumbs', {
    //   spaceBetween: 10,
    //   slidesPerView: 4,
    //   freeMode: true,
    //   watchSlidesVisibility: true,
    //   watchSlidesProgress: true,
    //   breakpoints: {
    //     1024: {
    //       slidesPerView: 4
    //     },
    //     768: {
    //       slidesPerView: 3
    //     },
    //     640: {
    //       slidesPerView: 2
    //     },
    //     320: {
    //       slidesPerView: 1
    //     }
    //   },
    // });
    var galleryTop = new Swiper('.gallery-top', {
      autoplay: {
        delay: 5000,
      },
      spaceBetween: 10,
      dynamicBullets: true,
      pagination: {
        el: '.swiper-pagination',
          clickable: true,
      },
      // thumbs: {
      //   swiper: galleryThumbs
      // }
    });

/*--
    Hero Slider Two
--------------------------------------------*/
var heroSlider = $('.hero-slider-two');
heroSlider.slick({
    arrows: true,
    autoplay: false,
    autoplaySpeed: 5000,
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    fade: true,
    infinite: true,
    slidesToShow: 1,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icon-chevron-left"> </i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"> </i></button>',
    responsive: [
        {
          breakpoint: 767,
          settings: {
            dots: false,
          }
        }
    ]
});
/*--
    Hero Slider Three
--------------------------------------------*/
var heroSlider_three = $('.hero-slider-three');
heroSlider_three.slick({
    arrows: true,
    autoplay: false,
    autoplaySpeed: 5000,
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    fade: true,
    infinite: true,
    slidesToShow: 1,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icon-chevron-left"> </i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"> </i></button>',
    responsive: [
        {
          breakpoint: 767,
          settings: {
            dots: false,
          }
        }
    ]
});
/*--
    Hero Slider Four
--------------------------------------------*/
var heroSlider_four = $('.hero-slider-four');
heroSlider_four.slick({
    arrows: false,
    autoplay: false,
    autoplaySpeed: 5000,
    dots: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    fade: true,
    infinite: true,
    slidesToShow: 1
});

$('.product-two-row-4').each(function (index) {
  var parent4 = $(this).parent();
  var rows = 6;
  while(!parent4.hasClass('block-list-san-pham'))
    parent4 = parent4.parent();
  if(parent4.hasClass('block-2-rows'))
    rows = 2;
  else if(parent4.hasClass('block-1-rows'))
    rows = 1;

  console.log(rows);
  $(this).slick({
    dots: false,
    infinite: true,
    rows: rows,
    // arrows: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    prevArrow: false,
    nextArrow: false,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 479,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
})
// var product_two_row_4 = $('.product-two-row-4');


var product_two_row_2 = $('.product-two-row');
product_two_row_2.slick({
    dots: false,
    infinite: true,
    rows: 2,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    prevArrow: false,
    nextArrow: false,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

var product_two_row_5 = $('.product-two-row-5');
product_two_row_5.slick({
    dots: false,
    infinite: true,
    rows: 2,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: false,
    nextArrow: false,
    responsive: [
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
var product_two_row_3 = $('.product-two-row-3');
product_two_row_3.slick({
    dots: false,
    infinite: true,
    rows: 2,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: false,
    nextArrow: false,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

/*--
    Product Slider
--------------------------------------------*/
var product_4 = $('.product-active-lg-4');
product_4.slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: '<button type="button" class="slick-prev"> Prev </button>',
    nextArrow: '<button type="button" class="slick-next">Next</button>',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
/*--
    Product Slider
--------------------------------------------*/
var product_3 = $('.product-row-3-active');
product_3.slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icon-chevron-left"> </i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"> </i></button>',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
/*--
    Product Slider
--------------------------------------------*/
var product_6 = $('.product-row-6-active');
product_6.slick({
    dots: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icon-chevron-left"> </i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"> </i></button>',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
    /*--
    Product Slider
--------------------------------------------*/
var product_4 = $('.product-active--4');
product_4.slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: '<button type="button" class="slick-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

/*--
    Product Slider
--------------------------------------------*/
var product_6 = $('.product-row-4-active');
product_6.slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icon-chevron-left"> </i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"> </i></button>',
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
/*--
    Product Slider
--------------------------------------------*/
var product_One = $('.product-one-active');
product_One.slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icon-chevron-left"> </i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"> </i></button>',
});

/*--
    Product Slider
--------------------------------------------*/
var product_One = $('.product-four-active');
product_One.slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icon-chevron-left"> </i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"> </i></button>',
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

/*--
    Testimonial Slider
-----------------------------*/
var testimonialSlider = $('.testimonial-slider');
testimonialSlider.slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 7000,
    dots: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScoll: 1,
    prevArrow: false,
    nextArrow: false,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
/*--
    Testimonial Two Slider
-----------------------------*/
var testimonialSliderTwo = $('.testimonial-two');
testimonialSliderTwo.slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 7000,
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScoll: 1,
    prevArrow: false,
    nextArrow: false,
});

/*--
    Latest Blog Slider
-----------------------------*/
var latestBlog = $('.latest-blog-active');
latestBlog.slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icon-chevron-left"> </i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"> </i></button>',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
/*--
    brand Active Two
-----------------------------*/
var brandActiveTwo = $('.brand-active-two');
brandActiveTwo.slick({
    dots: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: false,
    nextArrow: false,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 5,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

var ourBrand = $('.our-brand-active');

	ourBrand.on('init afterChange', function(e){
		$(this).find('.slick-slide.slick-active').first().addClass('first-elem');
		$(this).find('.slick-slide.slick-active').last().addClass('last-elem');
		$(this).find('.slick-slide:not(.slick-active)').removeClass('first-elem last-elem');
		$(this).find('.slick-slide.slick-active.slick-current').removeClass('first-elem last-elem');
	});

	ourBrand.slick({
		arrows: false,
        autoplay: true,
        autoplaySpeed: 7000,
        dots: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScoll: 1,
        prevArrow: '<button type="button" class="slick-prev"> <i class="ion-ios-arrow-thin-left"></i> </button>',
        nextArrow: '<button type="button" class="slick-next"><i class="ion-ios-arrow-thin-right"></i></button>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 479,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
	});


/*---------------------------
	Count Down Timer
----------------------------*/
$('[data-countdown]').each(function() {
	var $this = $(this), finalDate = $(this).data('countdown');
	$this.countdown(finalDate, function(event) {
		$this.html(event.strftime('<span class="cdown day"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hours</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>mins</p></span> <span class="cdown second"><span class="time-count">%S</span> <p>secs</p></span>'));
	});
});


/*----------
    price-slider active
-------------------------------*/
$( "#price-slider" ).slider({
   range: true,
   min: 0,
   max: 120,
   values: [ 20, 115 ],
   slide: function( event, ui ) {
        $( "#min-price" ).val('$' + ui.values[ 0 ] );
        $( "#max-price" ).val('$' + ui.values[ 1 ] );
     }
  });
  $( "#min-price" ).val('$' + $( "#price-slider" ).slider( "values", 0 ));
  $( "#max-price" ).val('$' + $( "#price-slider" ).slider( "values", 1 ));

/*--
    Category menu Activation
------------------------------*/
    $('.category-sub-menu li.has-sub > a').on('click', function () {
        $(this).removeAttr('href');
        var element = $(this).parent('li');
        if (element.hasClass('open')) {
            element.removeClass('open');
            element.find('li').removeClass('open');
            element.find('ul').slideUp();
        } else {
            element.addClass('open');
            element.children('ul').slideDown();
            element.siblings('li').children('ul').slideUp();
            element.siblings('li').removeClass('open');
            element.siblings('li').find('li').removeClass('open');
            element.siblings('li').find('ul').slideUp();
        }
    });

// prodct details slider active
$('.product-large-slider').slick({
    fade: true,
    arrows: false,
    asNavFor: '.product-nav'
});


// product details slider nav active
$('.product-nav').slick({
    slidesToShow: 4,
    asNavFor: '.product-large-slider',
    centerMode: true,
    centerPadding: 0,
    focusOnSelect: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="icon-chevron-thin-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-thin-right"></i></button>',
    responsive: [{
        breakpoint: 576,
        settings: {
            slidesToShow: 3,
        }
    }]
});


// ScrollUp Active
$('.nice-select').niceSelect ();

// Image zoom effect
$('.img-zoom').zoom();

// Fancybox Active
$('[data-fancybox="images"]').fancybox({
    hash: false,
});


/*--
    showlogin toggle function
--------------------------*/
$( '#showlogin' ).on('click', function() {
    $('#checkout-login' ).slideToggle(500);
});

/*--
    showcoupon toggle function
--------------------------*/
$( '#showcoupon' ).on('click', function() {
    $('#checkout-coupon' ).slideToggle(500);
});

/*--
    Checkout
--------------------------*/
$("#chekout-box").on("change",function(){
    $(".account-create").slideToggle("100");
});

/*--
    Checkout
---------------------------*/
$("#chekout-box-2").on("change",function(){
    $(".ship-box-info").slideToggle("100");
});


/*--
    ScrollUp Active
-----------------------------------*/
$.scrollUp({
    scrollText: '<i class="fa fa-angle-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
});


setTimeout(function (){
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "160120871391880");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
},1000 * 3)
      });
    }
  }

  // $(document).on('click', '.add-to-cart', function (e) {
  //   e.preventDefault();
  //   $(this).parent().parent().find('.hide.block-add-to-cart-product-1 form').submit();
  // })


}(jQuery));


