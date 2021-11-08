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
						'scrollTop': $target.offset().top - 60 // - 200px (nav-height)
					}, 'slow', 'easeInSine', function () {
						window.location.hash = '1' + target;
					});

				});


				/*----------------------------------------------------*/
				/*	Hero Slider
                /*----------------------------------------------------*/

				$('.slider').slider({
					full_width: false,
					interval:5000,
					transition:700,
					draggable: false,
				});


				/*----------------------------------------------------*/
				/*	ScrollUp
                /*----------------------------------------------------*/

				$.scrollUp = function (options) {

					// Defaults
					var defaults = {
						scrollName: 'scrollUp', // Element ID
						topDistance: 300, // Distance from top before showing element (px)
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
					$(scrollId).css({'display':'none','position': 'fixed','z-index': '2147483647'});

					// Active point overlay
					if (o.activeOverlay) {
						$("body").append("<div id='"+ o.scrollName +"-active'></div>");
						$(scrollId+"-active").css({ 'position': 'absolute', 'top': o.topDistance+'px', 'width': '100%', 'border-top': '1px dotted '+o.activeOverlay, 'z-index': '2147483647' });
					}

					// Scroll function
					$(window).on('scroll', function(){
						switch (o.animation) {
							case "fade":
								$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).fadeIn(o.animationInSpeed) : $(scrollId).fadeOut(o.animationOutSpeed) );
								break;
							case "slide":
								$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).slideDown(o.animationInSpeed) : $(scrollId).slideUp(o.animationOutSpeed) );
								break;
							default:
								$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).show(0) : $(scrollId).hide(0) );
						}
					});

					// To the top
					$(scrollId).on('click', function(event){
						$('html, body').animate({scrollTop:0}, o.topSpeed);
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
					loop:true,
					autoplay:true,
					navBy: 1,
					autoplayTimeout: 4500,
					autoplayHoverPause: false,
					smartSpeed: 1500,
					responsive:{
						0:{
							items:1
						},
						767:{
							items:1
						},
						768:{
							items:2
						},
						991:{
							items:3
						},
						1000:{
							items:4
						}
					}
				});


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
				//
				// $('.video-popup2').magnificPopup({
				// 	type: 'iframe',
				// 	iframe: {
				// 		patterns: {
				// 			youtube: {
				// 				index: 'youtube.com',
				// 				src: 'https://www.youtube.com/embed/7e90gBu4pas'
				// 			}
				// 		}
				// 	}
				// });


				/*----------------------------------------------------*/
				/*	Statistic Counter
                /*----------------------------------------------------*/

				$('.count-element').each(function () {
					$(this).appear(function() {
						$(this).prop('Counter',0).animate({
							Counter: $(this).text()
						}, {
							duration: 4000,
							easing: 'swing',
							step: function (now) {
								$(this).text(Math.ceil(now));
							}
						});
					},{accX: 0, accY: 0});
				});


				/*----------------------------------------------------*/
				/*	Testimonials Rotator
                /*----------------------------------------------------*/

				var owl = $('.reviews-holder');
				owl.owlCarousel({
					items: 3,
					loop:true,
					autoplay:true,
					navBy: 1,
					autoplayTimeout: 4500,
					autoplayHoverPause: false,
					smartSpeed: 1500,
					responsive:{
						0:{
							items:1
						},
						767:{
							items:1
						},
						768:{
							items:2
						},
						991:{
							items:3
						},
						1000:{
							items:3
						}
					}
				});
				var owl = $('#activity_pictures');
				owl.owlCarousel({
					items: 3,
					loop:true,
					autoplay:true,
					navBy: 1,
					autoplayTimeout: 4500,
					autoplayHoverPause: false,
					smartSpeed: 1500,
					responsive:{
						0:{
							items:1
						},
						767:{
							items:1
						},
						768:{
							items:2
						},
						991:{
							items:3
						},
						1000:{
							items:5,
							margin: 30,
						}
					}
				});

				// $('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();
				// window.scrollIntervalID = setInterval(stickIt, 10);

				// function stickIt() {
				//
				// 	var orgElementPos = $('.original').offset();
				// 	var orgElementTop = orgElementPos.top;
				//
				// 	if ($(window).scrollTop() >= (orgElementTop)) {
				// 		// scrolled past the original position; now only show the cloned, sticky element.
				//
				// 		// Cloned element should always have same left position and width as original element.
				// 		var orgElement = $('.original');
				// 		var coordsOrgElement = orgElement.offset();
				// 		var leftOrgElement = coordsOrgElement.left;
				// 		var widthOrgElement = orgElement.css('width');
				// 		$('.header .cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
				// 		$('.original').css('visibility','hidden');
				// 	} else {
				// 		// not scrolled past the menu; only show the original menu.
				// 		$('.header .cloned').hide();
				// 		$('.original').css('visibility','visible');
				// 	}
				// }

				$(document).on('click', '.btn-them-lien-ket', function (e) {
				  e.preventDefault();
				  var $me = $(this);
				  var $myTable = $(this).parent().parent().parent().parent(),
				      $myTd = $(this).parent().parent().parent().parent().parent(),
              $myInput = $myTd.find('input[type="text"]').first(),
              $soLuong = parseInt($(this).attr('data-value')),
              $nameNewInput = $myInput.attr('name') + '['+$soLuong+']';

				  if($myTd.attr('id') == 'table-tree-website'){
            $nameNewInput = 'LienKet['+$soLuong+']';
          }

          $soLuong++;
          $me.attr('data-value', $soLuong);

          $myTable.find('tbody').first().append(
				    `<tr>
                  <td></td>
                  <td>
                    <input type="text" class="form-control input-lien-ket" name="`+$nameNewInput+`" placeholder="Tên liên kết">
                    <input type="hidden" class="form-control" name="`+$nameNewInput+`[parent]" placeholder="Tên liên kết">
                    <p class="hidden"></p>
                    <table class="table table-bordered text-nowrap">
                      <thead>
                          <tr>
                              <th width="1%"><a href="#" class="text-primary btn-them-lien-ket" data-value="0"><i class="fas fa-plus"></i> Thêm liên kết</a></th>
                              <th></th>
                              <th width="1%"><a href="#" class="text-danger btn-delete-node"><i class="fas fa-times"></i> Xóa</a></th>
                            </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </td>
                  <td></td>
            </tr>`
          )
        });

				$(document).on('change', '.input-lien-ket', function () {
				  var $myTd = $(this).parent(),
            $myPHidden = $myTd.find('p').first(),
            $myHiddenInput = $myTd.find('input[type="hidden"]').first();
          $myPHidden.text($(this).val());
          $myHiddenInput.val($(this).val());
        })

				$(document).on('click', '.btn-delete-node', function (e) {
				  e.preventDefault();
				  var $myGrandFather = $(this).parent().parent().parent().parent().parent().parent();
				  $myGrandFather.remove();
        });

				$(document).on('click', '.btn-save-website-link-tree', function (e) {
				  e.preventDefault();
				  var $data = $("#form-lien-ket-website").serializeArray();
				  $data.push({name: 'htmlTable', value: $("#table-tree-website").html()});

				  $.ajax({
            url: 'luu-form-lien-ket',
            type: 'post',
            dataType: 'json',
            data: $data,
            success: function (data) {
              alert(data.content);
            },
            error: function (r1, r2) {
              alert(r1.responseText);
            }
          })
        });

				setTimeout(function () {
          if($("#table-tree-website").length > 0){
            $('#table-tree-website tbody p.hidden').each(function () {
              var $myInput = $(this).parent().find('input').first();
              $myInput.val($(this).text());
            });
          }
        }, 1000);

				if($("#block-demo-tree").length > 0){
          $.ajax({
            url: 'get-data-tree-lien-ket-website',
            type: 'post',
            dataType: 'json',
            data: {type: 'get_data_tree_website'},
            success: function ($data) {
              $('#block-demo-tree').hortree({
                data: [$data.jsonData]
              });
              //
              // setTimeout(function () {
              //   $('.hortree-label').each(function () {
              //     var $text = $(this).text();
              //     if($text.indexOf('||') > 0){
              //       var $arr = $text.split('||');
              //       var $main_node = $arr[0];
              //       var $ArrJson = JSON.parse($arr[1].trim());
              //       var $strDropdownItem = '';
              //       for (var $i = 0; $i < ($ArrJson.data).length; $i++){
              //         $strDropdownItem += '<a class="dropdown-item" title="'+$ArrJson.data[$i].name+'" href="'+$ArrJson.data[$i].link+'" target="_blank">'+$ArrJson.data[$i].name+'</a>';
              //       }
              //       $(this).html(`
              //       <div class="dropdown">
              //         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              //           `+$main_node+`
              //         </button>
              //         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              //           `+$strDropdownItem+`
              //         </div>
              //       </div>
              //     `);
              //       $(this).css('padding', '0');
              //       $(this).css('border', 'none');
              //       $(this).css('background', 'transparent');
              //     }
              //     $(this).css('height', 'auto');
              //   })
              // }, 100);
            },
            error: function (r1, r2) {
              alert(r1.responseText);
            }
          })
        }

				$(document).on('click', '.hortree-label .dropdown button', function () {
				  var $hortree_label = $(this).parent().parent(),
            $dropdown_menu = $(this).parent().find('.dropdown-menu');
				  $hortree_label.css('height', $dropdown_menu.height() + $(this).parent().height());
        })

				$(document).on('change', '#select-list-doanh-nghiep', function () {
					$.ajax({
						url: 'get-data-doanh-nghiep',
						data: {tid: $("#select-list-doanh-nghiep").val()},
						dataType: 'json',
						type: 'post',
						beforeSend: function () {
							$("#block-list-doanh-nghiep-theo-tid").html('');
						},
						success: function (data){
							$("#block-list-doanh-nghiep-theo-tid").html(data.slider);
							$("#block-list-doanh-nghiep-theo-tid .item-doanh-nghiep").owlCarousel({
								items: 5,
								loop:true,
								autoplay:true,
								navBy: 1,
								margin:10,
								autoplayTimeout: 4500,
								autoplayHoverPause: false,
								smartSpeed: 2500,
								responsive:{
									0:{
										items:1
									},
									767:{
										items:1
									},
									768:{
										items:2
									},
									991:{
										items:3
									},
									1000:{
										items:5
									}
								}
							});
							$("#block-list-doanh-nghiep-theo-tid .item-doanh-nghiep").find('.owl-prev').html('<i class="far fa-arrow-alt-circle-left"></i>');
							$("#block-list-doanh-nghiep-theo-tid .item-doanh-nghiep").find('.owl-next').html('<i class="far fa-arrow-alt-circle-right"></i>');
						}
					})
				});

        $(".hortree-label .dropdown").one("hide.bs.dropdown", function(){
          console.log($(this));
          $(this).parent().css('height', 'auto');
        });

				if($("#select-list-doanh-nghiep").length > 0)
					$("#select-list-doanh-nghiep").change();
				$('#edit-title').on('keyup', function() {
					var input = $(this);
					if(input.val().length === 0) {
						input.addClass('empty');
					} else {
						input.removeClass('empty');
					}
				});
				var owl = $('#header-slider');
				owl.owlCarousel({
					items: 1,
					loop:true,
					autoplay:true,
					autoplayTimeout: 20000,
					autoplayHoverPause: false,
					nav: false,
					navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
					smartSpeed: 1500,
					responsive:{
						0:{
							items:1
						},
						767:{
							items:1
						},
						768:{
							items:1
						},
						991:{
							items:1
						},
						1000:{
							items:1
						}
					}
				});
				var owlnews = $('#latest-news');
				owlnews.owlCarousel({
					items: 1,
					loop:true,
					autoplay:true,
					autoplayTimeout: 4000,
					autoplayHoverPause: false,
					nav: false,
					navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
					smartSpeed: 1500,
					responsive:{
						0:{
							items:1
						},
						767:{
							items:1
						},
						768:{
							items:1
						},
						991:{
							items:1
						},
						1000:{
							items:1
						}
					}
				});
			});
		}
	};
})(jQuery);
