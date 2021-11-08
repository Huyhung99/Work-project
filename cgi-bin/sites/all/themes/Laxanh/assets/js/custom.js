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

				$('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();
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
						$('.header .cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
						$('.original').css('visibility','hidden');
					} else {
						// not scrolled past the menu; only show the original menu.
						$('.header .cloned').hide();
						$('.original').css('visibility','visible');
					}
				}


				// Bắt đầu làm
        $('.fa-search').click(function() {
          if($(".header-search-form").hasClass("display-none"))
          {
            $(".header-search-form").removeClass("display-none");
          }
          else{
            $(".header-search-form").addClass("display-none");
          }
        });
        $(document).on('click', '.btn-add-new-student-row', function (e){
          e.preventDefault();
          $("#form-them-sua-lop-hoc #table-block-student tbody ").append(`
          <tr class="bat-tat-nut">
            <td><input type="text" name="hoTen[]" class="form-control" ></td>
            <td><input type="date" name="ngaySinh[]" class="form-control"></td>
            <td><input type="text" name="phuHuynh[]" class="form-control"></td>
            <td><input type="text" name="dienThoai1[]" class="form-control"></td>
            <td><input type="text" name="dienThoai2[]" class="form-control"></td>
            <td><input type="text" name="diaChi[]" class="form-control"></td>
            <td><input type="email" name="Email[]" class="form-control"></td>
            <td>
                <a class="btn-xoa-hoc-sinh" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
            </tr>`)
          if(($('#form-them-sua-lop-hoc #table-block-student tr').length)>=2)
          {
            $('.hien-an').removeClass("d-none");
          }
          else {
            $('.hien-an').addClass("d-none");
          }
        });
        $(document).on('click', '.them-dong-giao-vien', function (e){
          e.preventDefault();
          if($(".form-them-giao-vien").hasClass('ktra'))
          {
            $('.form-them-giao-vien').remove();
          }
          else {
            $("#form-danh-sach-giao-vien .danh_sach_giao_vien tbody ").prepend(`
          <tr class="form-them-giao-vien ktra">
            <td></td>
            <td><input type="text" name="hotengv" class="hoten_themgv form-control" ></td>
            <td><input type="text" name="sodienThoai" class="sodienThoai_themgv form-control"></td>
            <td><input type="email" name="email" class="email_themgv form-control"></td>
            <td><input type="text" name="diachi" class="dia_chi form-control"></td>
            <td><input type="text" name="so_cmnd" class="so_cmnd form-control"></td>
            <td><input type="text" name="trinh_do" class="trinh_do form-control"></td>
            <td><select multiple="multiple" name="trangthainhansu" size="3" class="trangthai_themgv form-control"><option value="Đang công tác">Đang công tác</option><option value="Nghỉ thai sản">Nghỉ thai sản</option><option value="Nghỉ việc">Nghỉ việc</option></select></td>
            <td class="text-center"><a href="#" class="luu_them_giao_vien btn btn-primary">Lưu lại</a><a href="#" class="huy_bo btn btn-success ml-10">Hủy bỏ</a></td>
            </tr>`);
          }
        });

        $(document).on('click', '.remove-chinhno', function (e){
          e.preventDefault();
          $(this).parents('tr').remove();
        });
        $(document).on('click', '.huy_bo', function (e){
          e.preventDefault();
          setTimeout(function (){location.reload();}, 1000);
        });
        $(document).on('click','.tacdong .fa-edit',function (e){
          e.preventDefault();
          $('.ktrathu').remove();
          var idhocphi=$(this).attr('data-value');
          $('#form-them-hoc-phi .d-none-td-first tr').each(function () {
            if($(this).hasClass('d-none'))
            {
              $(this).removeClass('d-none');
            }
            if($(this).hasClass('xoa_khi_edit'))
            {
              $(this).remove();
            }
          })
          var chuoithem='them_du_lieu_'+idhocphi;
          var chuoithem1= '<tr class="xoa_khi_edit '+chuoithem+'"></tr>';
          $(this).parents("tr").after(''+chuoithem1+'');
          $.ajax({
            url: 'https://mamnonlaxanh.com/sua-hoc-phi',
            data:
              {
                idhocphi : idhocphi,
              },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $("."+chuoithem).html(data.strcanthem);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          $(this).parents("tr").addClass('d-none');
        });
        $(document).on('click', '.btn-add-new-price-row', function (e){
          var acb= $('#form-them-hoc-phi .d-none-td-first tbody tr:last-child');
          var str_tr = $('#form-them-hoc-phi .d-none-td-first tbody tr');
          str_tr.each(function () {
            if($(this).hasClass('xoa_khi_edit'))
            {
              $(this).remove();
            }
            if($(this).hasClass('d-none'))
            {
              $(this).removeClass('d-none');
            }
          })
          if(acb.hasClass('ktrathu'))
          {
            $('.ktrathu').remove();
            $('.nut_them_hoc_phi').remove();
          }
          else
          {
            var dataco="co";
            $.ajax({
              url: 'https://mamnonlaxanh.com/load-lop-hoc',
              data: {
                dataco:dataco
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $('#form-them-hoc-phi .d-none-td-first tbody').append(data.str_chuoi);
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
            $('#form-them-hoc-phi .d-none-td-first').after().append(
              '<a href="#" class="btn btn-success nut_them_hoc_phi" data-toggle="modal" data-target="#form_tiem_kiem_pop_up_4"> <i class="fa fa-plus"></i>Thêm học phí</a>'
            )
          }
        });
        $(document).on('click', '.nut_them_hoc_phi', function (e){
          e.preventDefault();
          $('.load_du_lieu').html('<div class="text-center"><div class="spinner-border text-danger" role="status">\n' +
            '<span class="sr-only">Loading...</span>\n' +
            '</div><p class="mt-15 mb-0">Dữ liệu đang được xử lý</p></div>');
          var themhocphihocsinh='Thêm học phí';
          var hocphi= $(this).closest('.table-danh-sach-hoc-sinh').find('.giatritiencandong').val();
          var namhocdongtien= $(this).closest('.table-danh-sach-hoc-sinh').find('.namhocdongtien').val();
          var lophoc= $(this).closest('.table-danh-sach-hoc-sinh').find('.lophoc').val();
          var thangdonghoc= $(this).closest('.table-danh-sach-hoc-sinh').find('.thangdonghoc').val();
          if(hocphi===""||namhocdongtien===""||lophoc===""||thangdonghoc==="")
          {
            $('.load_du_lieu').html('<p>Vui lòng nhập đầy đủ thông tin</p>')
          }
          else
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/sua-hoc-phi',
              data: {
                themhocphihocsinh:themhocphihocsinh,
                hocphi:hocphi,
                namhocdongtien:namhocdongtien,
                lophoc:lophoc,
                thangdonghoc:thangdonghoc,
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $('#form-them-hoc-phi .d-none-td-first tbody').append(data.str_chuoi);
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
            setTimeout(function (){location.reload()}, 1000);
          }
        });
        function thongbaoLoi($content){
          $.confirm({
            title: 'Thông báo!',
            content: $content,
            type: 'red',
            typeAnimated: true,
            buttons: {
              close: {
                text: '<i class="fa fa-close"></i> Đóng lại'
              }
            }
          });
        }


        //hiện thị form sửa từng học sinh đóng học phí
        $(document).on('click', '.nut-thao-tac-hoc-phi', function (e){
          e.preventDefault();
          $.ajax({
            url: 'https://mamnonlaxanh.com/hoc-sinh-dong-hoc-phi',
            data: $("#form-them-hoc-phi").serializeArray(),
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $("."+chuoithem).html(data.bientring);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          var lop=$('.change_dong_lop_hoc').val();
          var nam=$('.change_nam_dong_hoc').val();
          var thang=$('.change_thang_dong_hoc').val();
          setTimeout(function () {location.assign('https://mamnonlaxanh.com/hoc-phi?lop_dong_hoc_phi='+lop+'&nam_dong_hoc_phi='+nam+'&thang_dong_hoc_phi='+thang)},1000);
        });
        $(document).on('click', '.luu_sua_dong_hoc_phi', function (e){
          e.preventDefault();
          var id_luu_sua_hoc_phi=$(this).attr('id-donghocphi');
          var giatri_luu_sua_hoc_phi= $(this).parents('tr').find('.so_tien_da_dong').val();
          $.ajax({
            url: 'https://mamnonlaxanh.com/hoc-sinh-dong-hoc-phi',
            data: {
              id_luu_sua_hoc_phi:id_luu_sua_hoc_phi,
              giatri_luu_sua_hoc_phi:giatri_luu_sua_hoc_phi,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          var chon_lop_hoc=$('.change_dong_lop_hoc').val();
          var chon_nam_hoc=$('.change_nam_dong_hoc').val();
          var chon_thang_hoc=$('.change_thang_dong_hoc').val();
          var path='/hoc-phi?chon_lop_hoc='+chon_lop_hoc+'&chon_nam_hoc='+chon_nam_hoc+'&chon_thang_hoc='+chon_thang_hoc;
          setTimeout(function (){window.location.replace(path);}, 1000);
        });
        $('.load_xong').ready(function(e) {
          var duongdan=$(location).attr('href');
          var chuoibien=duongdan.split('?')[1];
          var lophocbien=chuoibien.split('&')[0];
          var nambien=chuoibien.split('&')[1];
          var thangbien=chuoibien.split('&')[2];
          var lophoc = lophocbien.split('=')[1];
          var nam = nambien.split('=')[1];
          var thang = thangbien.split('=')[1];
          $('.change_dong_lop_hoc').val(lophoc);
          $('.change_nam_dong_hoc').val(nam);
          $('.change_thang_dong_hoc').val(thang);
          if( lophoc && nam && thang)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/load-lop-hoc',
              data: $("#form-them-hoc-phi").serializeArray(),
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $('#form-them-hoc-phi .list-hoc-sinh-dong-hoc table tbody').html(data.bien_string);
                if(data.str_chuoi==="hienthi")
                {
                  $('.nut-thao-tac-hoc-phi').removeClass('d-none');
                  $('.tong-tien').removeClass('d-none');
                }
                if(data.thongbao==='co')
                {
                  $('.thongbao_hoc_phi').html('<i class="fa fa-check" aria-hidden="true"></i> Bản ghi này đã tồn tại');
                }
                if(data.thongbao==='khong')
                {
                  $('.thongbao_hoc_phi').html('x Bản ghi này chưa tồn tại');
                }
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
          else {
            if($('.luu_table_diem_danh_suat_an').hasClass('d-none'))
            {

            }else{
              $('.luu_table_diem_danh_suat_an').addClass('d-none');
                  $('.tong_ket_diem_danh_suat_an').addClass('d-none');

            }
            $('.table-diem-danh-suat-an table').html('<tbody>\n' +
              '<tr class="odd"><td colspan="6" class="empty message">Chọn đủ thông tin</td> </tr>\n' +
              '</tbody>');
          }
        });
        $(document).on('click','.table-diem-danh-suat-an thead tr td',function () {
          var trmot=$('.table-diem-danh-suat-an tbody tr');
          var trhe= $('.table-diem-danh-suat-an thead tr td');
          var text=$(this).text();
          var demvitri=0;
          var chay=0;
          trhe.each(function () {
            chay++;
            if($(this).text()===text)
            {
              demvitri=chay;
            }
          })
          trmot.each(function () {
            var chaytieptuc=0;
            var tdbu=$(this).find('td');
            tdbu.each(function () {
              chaytieptuc++;
              if(chaytieptuc==demvitri)
              {
                $(this).children('input').attr('checked','checked');
              }
            })
          })
        })
        $(document).on('click','#table-block-student .fa-trash',function (e) {
          e.preventDefault();
          $(this).parents("tr").remove();
          if(($('#form-them-sua-lop-hoc #table-block-student tr').length)>=2)
          {
            $('.hien-an').removeClass("d-none");
          }
          else
          {
            $('.hien-an').addClass("d-none");
          }
        })
        $(document).on('click','.dong-du-lieu',function (e) {
          e.preventDefault();
          var tiendonghoc=$(this).parents('tr').find('.gia_tri_tien_hoc').text();
          $(this).parents('tr').find('.nhap_tien').val(tiendonghoc.replace(',',''));
        })
        $(document).on('change', '#edit-chon-lop-hoc', function() {
          var namhoc = $(this).val();
          var lophoc = $('#edit-chon-lop-hoc').val();
          if( lophoc && namhoc)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/load-lop-hoc',
              data: $("#form-them-hoc-phi").serializeArray(),
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                  $('#form-them-hoc-phi .list-hoc-sinh-dong-hoc table tbody').html(data.bien_string);
                  if(data.str_chuoi==="hienthi")
                  {
                    $('.nut-thao-tac-hoc-phi').removeClass('d-none');
                  $('.tong-tien').removeClass('d-none');
                  }
                  if(data.thongbao==='co')
                  {
                    $('.thongbao_hoc_phi').html('<i class="fa fa-check" aria-hidden="true"></i> Bản ghi này đã tồn tại');
                  }
                  if(data.thongbao==='khong')
                  {
                    $('.thongbao_hoc_phi').html('x Bản ghi này chưa tồn tại');
                  }
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        });
        $(document).on('change', '#edit-chon-nam-hoc', function() {
          var namhoc = $(this).val();
          var lophoc = $('#edit-chon-lop-hoc').val();
          if( lophoc && namhoc)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/load-lop-hoc',
              data: $("#form-them-hoc-phi").serializeArray(),
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $('#form-them-hoc-phi .list-hoc-sinh-dong-hoc table tbody').html(data.bien_string);
                if(data.str_chuoi==="hienthi")
                {
                  $('.nut-thao-tac-hoc-phi').removeClass('d-none');
                  $('.tong-tien').removeClass('d-none');
                }
                if(data.thongbao==='co')
                {
                  $('.thongbao_hoc_phi').html('<i class="fa fa-check" aria-hidden="true"></i> Bản ghi này đã tồn tại');
                }
                if(data.thongbao==='khong')
                {
                  $('.thongbao_hoc_phi').html('x Bản ghi này chưa tồn tại');
                }
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        });
        $(document).on('change', '#edit-chon-thang-hoc', function() {
          var namhoc = $('#edit-chon-nam-hoc').val();
          var lophoc = $('#edit-chon-lop-hoc').val();
          var thanghoc= $('#edit-chon-thang-hoc').val();
          if( lophoc && namhoc && thanghoc)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/load-lop-hoc',
              data: $("#form-them-hoc-phi").serializeArray(),
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $('#form-them-hoc-phi .list-hoc-sinh-dong-hoc table tbody').html(data.bien_string);
                if(data.str_chuoi==="hienthi")
                {
                  $('.nut-thao-tac-hoc-phi').removeClass('d-none');
                  $('.tong-tien').removeClass('d-none');
                }
                if(data.thongbao==='co')
                {
                  $('.thongbao_hoc_phi').html('<i class="fa fa-check" aria-hidden="true"></i> Bản ghi này đã tồn tại');
                }
                if(data.thongbao==='khong')
                {
                  $('.thongbao_hoc_phi').html('x Bản ghi này chưa tồn tại');
                }
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        });
        $(document).on('click','.luu-hoc-phi',function (e) { // lưu ý
          e.preventDefault();
          $('.load_du_lieu').html('<div class="text-center"><div class="spinner-border text-danger" role="status">\n' +
            '                <span class="sr-only">Loading...</span>\n' +
            '              </div><p class="mt-15 mb-0">Dữ liệu đang được xử lý</p>');
          $.ajax({
            url: 'https://mamnonlaxanh.com/luu-hoc-phi',
            data: $("#form-them-hoc-phi").serializeArray(),
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              if(data.loi!=='')
              {
                $('.load_du_lieu').html("<p>"+data.loi+"</p>");
              }
              else
              {
                setTimeout(function (){location.reload();}, 1000);
              }
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        })
        $(document).on('click','.suahocsinh .fa-edit',function (e) {
          e.preventDefault();
          var idhocsinh = $(this).attr('data-value');
          var idlophoc=$(this).attr('data-lop');
          var chuoithem='them_du_lieu_'+idhocsinh;
          var tr_cu='tr_cu'+idhocsinh;
          var chuoithem1= '<tr class="'+chuoithem+'"></tr>';
          $(this).parents("tr").after(''+chuoithem1+'');
          $(this).parents('tr').addClass(tr_cu).addClass('d-none');
          $.ajax({
            url: 'https://mamnonlaxanh.com/sua-hoc-sinh',
            data: {
              idhocsinh:idhocsinh,
              idlophoc:idlophoc
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $("."+chuoithem).html(data.strchuoihoatdong);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        })
        $(document).on('click','.huy_bo_sua_doi',function (e) {
          e.preventDefault();
          $(this).parents('tr').remove();
          var idhs=$(this).parents('tr').find('.luu-hoc-sinh-danh-sach-lop').attr('data-value');
          $('.tr_cu'+idhs).removeClass('d-none');
        })
        $(document).on('click','.tong_ket_tien_hoc_phi',function (e) {
          e.preventDefault();
          if($('.table-expot').hasClass('mt-30'))
          {
            $('.table-expot').remove();
            $('.tong-tien .border').remove();
            $('.tong-tien p').remove();
          }
          else
          {
            var tongtien=0;
            $('input.nhap_tien').each(function () {
              if($(this).val())
              {
                tongtien=tongtien+parseInt($(this).val());
              }
            });
            var giatritiendong=0;
            $('.gia_tri_tien_hoc').each(function () {
              giatritiendong=giatritiendong+parseInt($(this).text().replace(',',''));
            })
            var hshoanthanh=0;
            $('.hs_hoan_thanh').each(function () {
              hshoanthanh=hshoanthanh+1;
            })
            var chuahoanthanh=0;
            $('.hs_chua_hoan_thanh').each(function () {
              chuahoanthanh=chuahoanthanh+1;
            })
            $('.tong-tien').append('<div class="mt-15 border pt-10 pl-10 pr-10 pb-10">' +
              '<p>Tổng tiền học sinh đã đóng : '+tongtien.toLocaleString('vi', {minimumFractionDigits: 0, maximumFractionDigits: 0})+'VND / '+giatritiendong.toLocaleString('vi', {minimumFractionDigits: 0, maximumFractionDigits: 0})+'VND</p>' +
              '<p>Số học sinh hoàn thành : '+hshoanthanh+'</p>' +
              '<p>Số học sinh chưa hoàn thành : '+chuahoanthanh+'</p></div>');
            var classcan='.list-hoc-sinh-dong-hoc table';
            var htmltable=$(classcan).html();
            $('.tong-tien').append('<table class="table-expot table mt-30 table-striped table-bordered">'+htmltable+'</table');
            $('.table-expot .nhap_tien').each(function () {
              var giatri=0;
              if($(this).val())
              {
                var giatri=$(this).val();
              }
              $(this).after(giatri.toLocaleString('vi', {minimumFractionDigits: 0, maximumFractionDigits: 0}));
              $(this).parents('tr').find(".dong-du-lieu").remove();
              $(this).remove();
            });
            $('.table-expot input').remove();
            $('.tong-tien table td:nth-child(7),.tong-tien table th:nth-child(7)').remove();
            $('.tong-tien').append('<p><a href="#" class="export-exccel-hocphi btn btn-primary">Tải xuống bằng excel</a></p>')
          }
        })
        $(document).on('click','.thay_so_phu_huynh',function (e) {
          e.preventDefault();
          $(this).parents('tr').find('.thay_doi_so_dien_thoai').prop('disabled', false);
          $(this).parents('tr').find('.thay_so_phu_huynh').addClass('d-none');
          var star_big=$(this).parents('tr').find('.luu-hoc-sinh-danh-sach-lop').attr('data-target');
          $(this).parents('tr').find('.luu-hoc-sinh-danh-sach-lop').attr('data-target','#ccccccc');
          $(this).parents('tr').find('.luu-hoc-sinh-danh-sach-lop').attr('star_big',star_big);
          $(this).parents('tr').find('.thay_so_phu_huynh').after('<a href="#" class="luu_so_phu_huynh btn btn-success" id_phu_huynh="0">Lưu lại</a><a href="#" class="khoi_phuc btn btn-primary">Khôi phục</a>');
        });
        $(document).on('click','.khoi_phuc',function (e) {
          e.preventDefault();
          $(this).parents('tr').find('.thay_doi_ten_bo').val($(this).parents('tr').find('.thay_doi_ten_bo').attr('ten_bo_cu'));
          $(this).parents('tr').find('.thay_doi_ten_me').val($(this).parents('tr').find('.thay_doi_ten_me').attr('ten_me_cu'));
          $(this).parents('tr').find('.thay_doi_so_dien_thoai').val($(this).parents('tr').find('.thay_doi_so_dien_thoai').attr('value_cu'));
        });
        $(document).on('click','.nghi_hoc_edit_moi',function () {
          if(!$('.hs-nghi-hoc').hasClass('d-none'))
          {
            $('.hs-nghi-hoc').addClass('d-none');
          }
          if(!$('.load_du_lieu_nghi_hoc').hasClass('d-none'))
          {
            $('.load_du_lieu_nghi_hoc').addClass('d-none');
            $('.load_du_lieu_nghi_hoc').html('<div class="text-center"><div class="spinner-border text-danger" role="status">\n' +
              '              <span class="sr-only">Loading...</span>\n' +
              '            </div><p class="mt-15 mb-0">Dữ liệu đang được xử lý</p></div>');
          }
          if($('.form_hs_nghi_hoc').hasClass('d-none'))
          {
            $('.form_hs_nghi_hoc').removeClass('d-none');
          }
          $('.form_hs_nghi_hoc table tbody').html('');
          var d = new Date();
          var dem=0;
          $('input[type=checkbox]').each(function () {
            if($(this).prop("checked") == true && !$(this).hasClass('vbo-table-select-all'))
            {
              dem++;
              var thang_hien_tai=d.getMonth()+1;
              var ngay_hien_tai=d.getDate();
              var ngay='';
              var thang='';
              if((d.getMonth()+1)<10)
              {
                var thang='0'+thang_hien_tai;
              }
              else {
                var thang=thang_hien_tai;
              }
              if(parseInt(ngay_hien_tai)<10)
              {
                var ngay='0'+ngay_hien_tai;
              }
              else
              {
                var ngay=ngay_hien_tai;
              }
              $('.form_hs_nghi_hoc table tbody').append('<tr><td><input class="d-none" name="id_hoc_sinh[]" value="'+$(this).val()+'">'+$(this).parents('tr').find('td:nth-child(4)').html()+'</td><td>'+$(this).parents('tr').find('td:nth-child(6)').html()+'</td><td><input type="date" name="ngay_nghi['+$(this).val()+']" class="ngay_nghi form-control" value="'+d.getFullYear()+'-'+thang+'-'+ngay_hien_tai+'"></td><td><textarea class="ly_do_nghi form-control form-group" name="ly_do_nghi['+$(this).val()+']" rows="3"></textarea></td></tr>');
            }
          })
          if(dem>0)
          {
            if($('.hs-nghi-hoc').hasClass('d-none'))
            {
              $('.hs-nghi-hoc').removeClass('d-none');
            }
          }
        });
        $(document).on('click','.chuyen_lop_edit',function () {
          $('.lop_nam_edit').html('');
          if(!$('.hs_chuyen_lop').hasClass('d-none'))
          {
            $('.hs_chuyen_lop').addClass('d-none');
          }
          $('.lop_nam').html('<div class="load_du_lieu_chuyen_lop"><div class="text-center"><div class="spinner-border text-danger" role="status">\n' +
            '                <span class="sr-only">Loading...</span>\n' +
            '              </div><p class="mt-15 mb-0">Dữ liệu đang được xử lý</p></div></div>');
          if(!$('.form_hs_chuyen_lop').hasClass('d-none'))
          {
            $('.form_hs_chuyen_lop').addClass('d-none');
          }
          $('.form_hs_chuyen_lop table tbody').html('');
          var dem=0;
          var str='';
          var tenbandau='';
          var ktra=0;
          $('input[type=checkbox]').each(function () {
            if($(this).prop("checked") == true && !$(this).hasClass('vbo-table-select-all'))
            {
              var tenlopnam='Lớp '+$(this).parents('tr').find('td:nth-child(2)').text()+' năm '+$(this).parents('tr').find('td:nth-child(3)').text();
              if(dem===0)
              {
                tenbandau=tenlopnam;
              }
              else
              {
                if(tenbandau!==tenlopnam)
                {
                  ktra=1;
                }
              }
              str=str+'<tr><td>' +
                '<input class="d-none" name="hoc_sinh_id[]" value="'+$(this).val()+'">'+$(this).parents('tr').find('td:nth-child(4)').html()+'</td><td>'+
                $(this).parents('tr').find('td:nth-child(6)').html()+
                '</td><td><input type="text" name="id_lop_hien_tai['+$(this).val()+']" class="d-none id_lop_hien_tai form-control" value="'+$(this).parents('tr').find('.suahocsinh .fa-edit').attr('data-lop')+'">' +
                ''+tenlopnam+'</td></tr>';

              dem++;
            }
          })
          if(dem>0)
          {
            if($('.hs_chuyen_lop').hasClass('d-none'))
            {
              $('.hs_chuyen_lop').removeClass('d-none');
            }
            if(ktra===0)
            {
              $('.form_hs_chuyen_lop table tbody').append(str);
              $.ajax({
                url: 'https://mamnonlaxanh.com/thao-tao-hoc-sinh-moi',
                data: {them_dong_nhap_hoc_sinh:'them',id_lop_dang_chinh_sua:$('#views-form-taxonomy-term-page-bang-danh-sach-hoc-sinh .suahocsinh .fa-edit').attr('data-lop')},
                dataType: 'json',
                type: 'post',
                success: function(data){
                  console.log(data);
                  $('.load_du_lieu_chuyen_lop').remove();
                  $('.lop_nam_edit').html(data.str);
                  $('.form_hs_chuyen_lop').removeClass('d-none');
                },
                error: function(r1, r2){
                  consoloe.log(r1);
                }
              });
            }
            else
            {
              if(!$('.form_hs_chuyen_lop').hasClass('d-none'))
              {
                $('.form_hs_chuyen_lop').addClass('d-none');
              }
              $('.lop_nam').html('<p class="text-center">Phải chọn các học sinh cùng lớp</p>');
            }
          }
          else
          {
            if(!$('.form_hs_chuyen_lop').hasClass('d-none'))
            {
              $('.form_hs_chuyen_lop').addClass('d-none');
            }
            $('.lop_nam').html('<p class="text-center">Bạn chưa chọn học sinh</p>');
          }
        });
        $(document).on('click','.hs-nghi-hoc',function () {
          if($('.form_hs_nghi_hoc table tbody').length>0)
          {
            if(!$('.form_hs_nghi_hoc').hasClass('d-none'))
            {
              $('.form_hs_nghi_hoc').addClass('d-none');
            }
            if($('.load_du_lieu_nghi_hoc').hasClass('d-none'))
            {
              $('.load_du_lieu_nghi_hoc').removeClass('d-none');
            }
            $.ajax({
              url: 'https://mamnonlaxanh.com/hoc-sinh-nghi-hoc-chinh',
              data: $('.form_hs_nghi_hoc').serializeArray(),
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $('.load_du_lieu_nghi_hoc').html('<p>Hoàn thành chỉnh sửa học sinh nghỉ học: </p>');
                if(data.khongthem!==0)
                {
                  $('.load_du_lieu_nghi_hoc').append('<p>- Học sinh : '+data.them+'</p>');
                  $('.load_du_lieu_nghi_hoc').append('<p>- Học sinh đã nghỉ : '+data.khongthem+'</p>');
                }
                else
                {
                  $('.load_du_lieu_nghi_hoc').append('<p>- Học sinh hoàn tất : '+data.them+'</p>');
                }
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        });
        $(document).on('click','.hs_chuyen_lop',function () {
          if(!$('.form_hs_chuyen_lop').hasClass('d-none'))
          {
            !$('.form_hs_chuyen_lop').addClass('d-none');
          }
          if(!$('.hs_chuyen_lop').hasClass('d-none'))
          {
            $('.hs_chuyen_lop').addClass('d-none');
          }
          $('.lop_nam').html('<div class="load_du_lieu_chuyen_lop"><div class="text-center"><div class="spinner-border text-danger" role="status">\n' +
            '                  <span class="sr-only">Loading...</span>\n' +
            '                </div><p class="mt-15 mb-0">Dữ liệu đang được xử lý</p></div></div>');
          $.ajax({
            url: 'https://mamnonlaxanh.com/luu-hoc-sinh-trong-danh-sach',
            data: $('.form_hs_chuyen_lop').serializeArray(),
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $('.load_du_lieu_chuyen_lop').html(data.thong_bao);
              setTimeout(function (){location.reload();}, 1000);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        });
        $(document).on('click', '.gui_file_excel', function (e){
          var $dataInput = new FormData($('#form-upload-file-excel')[0]);
          $.ajax({
            url: 'https://minhhien.com.vn/khu-vuc-api/api/read-excel',
            type: 'post',
            dataType: 'json',
            data: $dataInput,
            // async: false,
            contentType: false,
            // cache: false,
            processData: false
          }).success(function (data) {
            console.log(data);
            $('.load_du_lieu').remove();
          }).error(function (r1, r2) {
            alert(r1.responseText);
          });
        });
        $(document).on('click', '.gui_file_excel_nhap_hoc_sinh', function (e){
          var $dataInput = new FormData($('#form-upload-file-excel')[0]);
          $('.loading_luu').html('<div class="spinner-border text-danger" role="status">\n' +
            '            <span class="sr-only">Loading...</span>\n' +
            '          </div>');
          $.ajax({
            url: 'https://minhhien.com.vn/khu-vuc-api/api/read-excel',
            type: 'post',
            dataType: 'json',
            data: $dataInput,
            // async: false,
            contentType: false,
            // cache: false,
            processData: false
          }).success(function (data) {
            console.log(data);
            $('.loading_luu').html(data.str);
            $('.du_lieu_sau_khi_them').html(data.str);
          }).error(function (r1, r2) {
            alert(r1.responseText);
          });
        });
        $(document).on('click', '.gui_file_excel_nhap_hoc_sinh_1', function (e){
          var $dataInput = new FormData($('#form-upload-file-excel')[0]);
          $('#ket-qua-nhap-hoc-sinh').removeClass('du_lieu_sau_khi_them').html('');
          $('.loading_luu').html('<div class="spinner-border text-danger" role="status">\n' +
            '            <span class="sr-only">Loading...</span>\n' +
            '          </div>');
          var lop_hoc=$('#form-upload-file-excel .lop_hoc').val();
          var nam_hoc=$('#form-upload-file-excel .nam_hoc').val();
          var giao_vien_1=$('#form-upload-file-excel .giao_vien_1').val();
          var giao_vien_2=$('#form-upload-file-excel .giao_vien_2').val();
          if(lop_hoc!=='' && nam_hoc!=='')
          {
            $.ajax({
              url: 'https://minhhien.com.vn/khu-vuc-api/api/read-excel',
              type: 'post',
              dataType: 'json',
              data: $dataInput,
              // async: false,
              contentType: false,
              // cache: false,
              processData: false
            }).success(function (data) {
              console.log(data);
              if(data.thongbao==='')
              {
                $('.loading_luu').html('<p>Xử lý xong dữ liệu</p>');
                $('#ket-qua-nhap-hoc-sinh').append(data.tableHocSinh);
              }
              else
              {
                $('.loading_luu').html(data.thongbao);
              }
            }).error(function (r1, r2) {
              alert(r1.responseText);
            });
          }
          else {
            $('.loading_luu').html('<p>Nhập dữu liệu đầy đủ</p>');
          }
        });
        $(document).on('keypress','.thay_doi_so_dien_thoai',function (event) {
          var sodt_thay_doi=$(this).val()+String.fromCharCode(event.keyCode);
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tao-hoc-sinh-moi',
            data: {
              sodt_thay_doi:sodt_thay_doi
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              if(data.tenbo!=='')
              {
                $('.thay_doi_ten_bo').val(data.tenbo);
              }
              if(data.tenme!=='')
              {
                $('.thay_doi_ten_me').val(data.tenme);
              }
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        })
        $(document).on('change','.thay_doi_so_dien_thoai',function (event) {
          var sodt_thay_doi=$(this).val()+String.fromCharCode(event.keyCode);
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tao-hoc-sinh-moi',
            data: {
              sodt_thay_doi:sodt_thay_doi
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              if(data.tenbo!=='')
              {
                $('.thay_doi_ten_bo').val(data.tenbo);
              }
              if(data.tenme!=='')
              {
                $('.thay_doi_ten_me').val(data.tenme);
              }
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        })
        $(document).on('click','.luu_so_phu_huynh',function (e) {
          e.preventDefault()
          $(this).parents('tr').find('.thay_doi_so_dien_thoai').prop('disabled', true);
          var star_big=$(this).parents('tr').find('.luu-hoc-sinh-danh-sach-lop').attr('star_big');
          $(this).parents('tr').find('.luu-hoc-sinh-danh-sach-lop').attr('data-target',star_big);
          $('.luu_so_phu_huynh').remove();
          $('.khoi_phuc').remove();
          $('.thay_so_phu_huynh').removeClass('d-none');
          $('.thay_doi_so_dien_thoai').attr('id_phu_huynh_moi','');
          $(this).parents('tr').find('.thay_doi_so_dien_thoai').prop('disabled', true);
        })
        //
        // $(document).on('click','.edit_lop_hoc_ql_lop',function (e) {
        //   e.preventDefault();
        //   var idlophoc = $(this).attr('data-value');
        //   var chuoithem ='lop_hoc_sinh_sua'+idlophoc;
        //   var tr_cu='tr_cu'+idhocsinh;
        //   var chuoithem1= '<tr class="'+chuoithem+'"></tr>';
        //   $(this).parents("tr").after(''+chuoithem1+'');
        //   $(this).parents('tr').addClass(tr_cu).addClass('d-none');
        //   $.ajax({
        //     url: 'https://mamnonlaxanh.com/sua-lop-hoc-sinh-lon',
        //     data: {
        //       idlophoc:idlophoc,
        //     },
        //     dataType: 'json',
        //     type: 'post',
        //     success: function(data){
        //       console.log(data);
        //       $("."+chuoithem).html(data.strchuoihoatdong);
        //     },
        //     error: function(r1, r2){
        //       consoloe.log(r1);
        //     }
        //   });
        // })
        $(document).on('click','.luu-hoc-sinh-danh-sach-lop',function (e) {
          e.preventDefault();
          if($('.luu_so_phu_huynh').hasClass('btn'))
          {
            alert("Chú ý lưu lại phụ huynh")
          }
          else
          {
            var id_hoc_sinh_sua=$(this).attr('data-value');
            var id_lop_hoc_cu=$(this).attr('lop_cu');
            var id_lop_taxonomy=$(this).parents('tr').find('.lop_hoc_sua').val();
            var id_nam_hoc_taxonomy=$(this).parents('tr').find('.nam_hoc_sua').val();
            var ten_hoc_sinh_sua=$(this).parents('tr').find('.name_hoc_sinh_sua').val();
            var ngay_sinh_sua=$(this).parents('tr').find('.ngay_sinh_sua').val();
            var ten_bo_sua=$(this).parents('tr').find('.ten_bo_sua').val();
            var ten_bo_cu=$(this).parents('tr').find('.ten_bo_sua').attr('ten_bo_cu');
            var ten_me_sua=$(this).parents('tr').find('.ten_me_sua').val();
            var dia_chi_sua=$(this).parents('tr').find('.dia_chi_sua').val();
            var trang_thai_hoc=$(this).parents('tr').find('.trang_thai_hoc').val();
            var ten_me_cu=$(this).parents('tr').find('.ten_me_sua').attr('ten_me_cu');
            var so_dien_thoai_sua=$(this).parents('tr').find('.so_dien_thoai_sua').val();
            var so_dien_thoai_cu=$(this).parents('tr').find('.so_dien_thoai_sua').attr('value_cu');
            if(id_lop_taxonomy !=='' && dia_chi_sua !=='' && id_lop_taxonomy !=='' && ngay_sinh_sua !=='' && id_nam_hoc_taxonomy !=='' && ten_hoc_sinh_sua !=='' && so_dien_thoai_sua !=='')
            {
              $.ajax({
                url: 'https://mamnonlaxanh.com/luu-hoc-sinh-trong-danh-sach',
                data: {
                  id_hoc_sinh_sua:id_hoc_sinh_sua,
                  id_lop_hoc_cu:id_lop_hoc_cu,
                  id_lop_taxonomy:id_lop_taxonomy,
                  id_nam_hoc_taxonomy:id_nam_hoc_taxonomy,
                  ten_hoc_sinh_sua:ten_hoc_sinh_sua,
                  trang_thai_hoc:trang_thai_hoc,
                  ten_bo_sua:ten_bo_sua,
                  ten_bo_cu:ten_bo_cu,
                  ten_me_sua:ten_me_sua,
                  ten_me_cu:ten_me_cu,
                  dia_chi_sua:dia_chi_sua,
                  ngay_sinh_sua:ngay_sinh_sua,
                  so_dien_thoai_sua:so_dien_thoai_sua,
                  so_dien_thoai_cu:so_dien_thoai_cu
                },
                dataType: 'json',
                type: 'post',
                success: function(data){
                  console.log(data);
                },
                error: function(r1, r2){
                  consoloe.log(r1);
                }
              });
            }
            else
            {
              alert('Điền đầy đủ thông tin');
            }
            setTimeout(function (){location.reload();}, 1000);
          }
        })
        $(document).on('click','.len-lop',function (e) {
          var bienhoc=$(this).attr('data-value');
          var idlophoc=$(this).attr('id-value');
          $.ajax({
            url: 'https://mamnonlaxanh.com/len-lop',
            data:{
              bienhoc:bienhoc,
              idlophoc:idlophoc
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $(".xuat-thong-tin").html(data.bien_hien_thi);
              $(".modal-footer").html(data.nuthienthi);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        })
        $(document).on('click','.duoc_len_lop',function (e) {
          var ok_idlophoc=$(this).attr('id-value');
          var tenlopmoi=$(this).attr('ten-lop');
          var tenkhoilop=$(this).attr('tenkhoi');
          var namhocmoi=$(this).attr('nam_hoc_moi');
          $.ajax({
            url: 'https://mamnonlaxanh.com/len-lop',
            data:{
              ok_idlophoc:ok_idlophoc,
              tenlopmoi:tenlopmoi,
              namhocmoi:namhocmoi,
              tenkhoilop:tenkhoilop
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 2000);
        })
        $(document).on('click','.ket_thuc_nam_hoc',function (e) {
          var id_lop_cho_qua=$(this).attr('id-value');
          $.ajax({
            url: 'https://mamnonlaxanh.com/len-lop',
            data:{
              id_lop_cho_qua:id_lop_cho_qua,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();},3000);
        })
        var bientam=$('#table-block-class-student tbody tr td:nth-child(2n+6)');
        bientam.each(function (){
          if($(this).text()==='Đã qua')
          {
            $(this).parents('tr').addClass('nen-trang');
          }
        })
        $(document).on('click','.edit-giao-vien',function (e) {
          e.preventDefault();
          var id_giaovien_chinhsua=$(this).attr('data-value');
          $(this).parents('tr').after('<tr class="'+id_giaovien_chinhsua+'_giao_vien"></tr>');
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-giao-vien',
            data:{
              id_giaovien_chinhsua:id_giaovien_chinhsua,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $('.'+id_giaovien_chinhsua+'_giao_vien').html(data.bientring);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          $(this).parents('tr').remove();
        })
        $(document).on('click','.luu_sua_giao_vien',function (e) {
          e.preventDefault();
          var id=$(this).attr('data-value');
          var idgv=$(this).parents('tr').find('.idgv_'+id).val();
          var tengv=$(this).parents('tr').find('.tengv_'+id).val();
          var sodienthoaigv=$(this).parents('tr').find('.sodienthoaigv_'+id).val();
          var diachidv=$(this).parents('tr').find('.diachigv_'+id).val();
          var emailgv=$(this).parents('tr').find('.emailgv_'+id).val();
          var so_cmnd=$(this).parents('tr').find('.so_cmnd_'+id).val();
          var trinh_do=$(this).parents('tr').find('.trinh_do_'+id).val();
          var trangthaigv=$(this).parents('tr').find('.trangthaigv_'+id).val();
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-giao-vien',
            data:{
              idgv:idgv,
              tengv:tengv,
              sodienthoaigv:sodienthoaigv,
              diachidv:diachidv,
              emailgv:emailgv,
              so_cmnd:so_cmnd,
              trinh_do:trinh_do,
              trangthaigv:trangthaigv,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 1000);
        })
        $(document).on('click','.luu_them_giao_vien',function (e) {
          e.preventDefault();
          var ten_themgv=$(this).parents('tr').find('.hoten_themgv').val();
          var sodienthoai_themgv=$(this).parents('tr').find('.sodienThoai_themgv').val();
          var email_themgv=$(this).parents('tr').find('.email_themgv').val();
          var diachigv_them=$(this).parents('tr').find('.dia_chi').val();
          var so_cmnd=$(this).parents('tr').find('.so_cmnd').val();
          var trinh_do=$(this).parents('tr').find('.trinh_do').val();
          var trangthai_themgv=$(this).parents('tr').find('.trangthai_themgv').val();
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-giao-vien',
            data:{
              ten_themgv:ten_themgv,
              sodienthoai_themgv:sodienthoai_themgv,
              so_cmnd:so_cmnd,
              trinh_do:trinh_do,
              email_themgv:email_themgv,
              diachigv_them:diachigv_them,
              trangthai_themgv:trangthai_themgv,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 1000);
        })
        $(document).on('click','.xoa_giao_vien',function (e) {
          e.preventDefault();
          var idgiaovien_xoa=$(this).attr('data-value');
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-giao-vien',
            data:{
              idgiaovien_xoa:idgiaovien_xoa,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 1000);
        })
        $(document).on('click','.pop_up_giao_vien',function (e) {
          e.preventDefault();
          var idgiaovien_xoa=$(this).attr('data-value');
          $('.nut_xoa_pop_up_hehe').html('<a href="#" class="btn btn-primary xoa_giao_vien" data-value="'+idgiaovien_xoa+'"><span class="color-ffffff">Xóa</span></a>')
        })

        //ph
        $(document).on('click','.thong-tin-con',function (e) {
          e.preventDefault();
          var idphuhuynh_hienhocsinh=$(this).attr('data-value');
          if($('.id_'+idphuhuynh_hienhocsinh).hasClass('thunghiem_phu'))
          {
            $('.id_'+idphuhuynh_hienhocsinh).remove();
          }
          else {
            $(this).parents('tr').after('<tr class="id_'+idphuhuynh_hienhocsinh+' thunghiem_phu"></tr>');
            $.ajax({
              url: 'https://mamnonlaxanh.com/thao-tac-phu-huynh',
              data:{
                idphuhuynh_hienhocsinh:idphuhuynh_hienhocsinh,
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $('.id_'+idphuhuynh_hienhocsinh).html(data.bienhocsinh);
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        })
        $(document).on('click','.edit-phu-huynh',function (e) {
          e.preventDefault();
          var id_phuhuynh_chinhsua=$(this).attr('data-value');
          $(this).parents('tr').after('<tr class="odd '+id_phuhuynh_chinhsua+'_phu_huynh"></tr>');
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-phu-huynh',
            data:{
              id_phuhuynh_chinhsua:id_phuhuynh_chinhsua,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $('.'+id_phuhuynh_chinhsua+'_phu_huynh').html(data.bientring);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          $(this).parents('tr').remove();
        })
        $(document).on('click','.luu_sua_phu_huynh',function (e) {
          e.preventDefault();
          var id=$(this).attr('data-value');
          var idph=$(this).parents('tr').find('.idph_'+id).val();
          var tenph=$(this).parents('tr').find('.tenph_'+id).val();
          var tenme=$(this).parents('tr').find('.tenme_'+id).val();
          var sodienthoaiph=$(this).parents('tr').find('.sodienthoaiph_'+id).val();
          var emailph=$(this).parents('tr').find('.emailph_'+id).val();
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-phu-huynh',
            data:{
              idph:idph,
              tenph:tenph,
              tenme:tenme,
              sodienthoaiph:sodienthoaiph,
              emailph:emailph,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){
            setTimeout(function (){location.reload();}, 1000);
          },1000);
        })
        $(document).on('click','.pop_up_phu_huynh',function (e) {
          e.preventDefault();
          var idphuhuynh_xoa=$(this).attr('data-value');
          $('.nut_xoa_pop_up_phuhuynh_hehe').html('<a href="#" class="btn btn-primary xoa_phu_huynh" data-value="'+idphuhuynh_xoa+'"><span class="color-ffffff">Xóa</span></a>')
        })
        $(document).on('click','.xoa_phu_huynh',function (e) {
          e.preventDefault();
          var idphuhuynh_xoa=$(this).attr('data-value');
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-phu-huynh',
            data:{
              idphuhuynh_xoa:idphuhuynh_xoa,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 1000);
        })
        $(document).on('click', '.them-dong-phu-huynh', function (e){
          e.preventDefault();
          if($(".form-them-phu-huynh").hasClass('ktra'))
          {
            $('.form-them-phu-huynh').remove();
          }
          else {
            $("#form-danh-sach-phu-huynh .danh_sach_phu_huynh tbody ").prepend(`
          <tr class="form-them-phu-huynh ktra">
            <td></td>
            <td><input type="text" name="hotenph" class="hoten_themph form-control" ></td>
            <td><input type="text" name="sodienThoai" class="sodienThoai_themph form-control"></td>
            <td><input type="email" name="email" class="email_themph form-control"></td>
            <td></td>
            <td class="text-center"><a href="#" class="luu_them_phu_huynh btn btn-primary">Lưu lại</a><a href="#" class="huy_bo btn btn-success ml-10">Hủy bỏ</a></td>
            </tr>`);
          }
        });
        $(document).on('click','.luu_them_phu_huynh',function (e) {
          e.preventDefault();
          var ten_themph=$(this).parents('tr').find('.hoten_themph').val();
          var sodienthoai_themph=$(this).parents('tr').find('.sodienThoai_themph').val();
          var email_themph=$(this).parents('tr').find('.email_themph').val();
          var trangthai_themph=$(this).parents('tr').find('.trangthai_themph').val();
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-phu-huynh',
            data:{
              ten_themph:ten_themph,
              sodienthoai_themph:sodienthoai_themph,
              email_themph:email_themph,
              trangthai_themph:trangthai_themph,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 1000);
        })

        //suat-an
        $(document).on('click','.edit-suat-an',function (e) {
          e.preventDefault();
          var id_suatan_chinhsua=$(this).attr('data-value');
          $(this).parents('tr').after('<tr class="odd '+id_suatan_chinhsua+'_suat_an"></tr>');
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-suat-an',
            data:{
              id_suatan_chinhsua:id_suatan_chinhsua,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $('.'+id_suatan_chinhsua+'_suat_an').html(data.bientring);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          $(this).parents('tr').remove();
        })
        $(document).on('click','.luu_sua_suat_an',function (e) {
          e.preventDefault();
          var id_luu_sua=$(this).attr('id_value');
          var ten_suat_an=$(this).parents('tr').find('.tensuatan').val();
          var don_gia=$(this).parents('tr').find('.dongia').val();
          var mon_an=$(this).parents('tr').find('.noidungmonan').val();
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-suat-an',
            data:{
              id_luu_sua:id_luu_sua,
              ten_suat_an:ten_suat_an,
              don_gia:don_gia,
              mon_an:mon_an,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){
            setTimeout(function (){location.reload();}, 1000);
          },1000);
        })
        $(document).on('click','.xoa_popup_suat_an',function (e) {
          e.preventDefault();
          var idsuatanxoa=$(this).attr('data-value');
          $('.nut_xoa_pop_up_suatan_hehe').html('<a href="#" class="btn btn-primary xoa_suat_an" data-value="'+idsuatanxoa+'"><span class="color-ffffff">Xóa</span></a>')
        })
        $(document).on('click','.xoa_suat_an',function (e) {
          e.preventDefault();
          var idsuatan_xoa=$(this).attr('data-value');
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-suat-an',
            data:{
              idsuatan_xoa:idsuatan_xoa,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 1000);
        })

        //học phí
        // $(document).on('click','.t-hp-hs',function (e) {
        //   e.preventDefault();
        //   var id_hocsinh_donghocphi=$(this).attr('id_hocphi');// id học phí
        //   var id_hocsinh=$(this).attr('id_hocsinh');
        //   var thang_dong=$(this).attr('thang_dong');
        //   var chi_phi=$(this).parents('tr').find('.hocphi').val();
        //   $.ajax({
        //     url: 'https://mamnonlaxanh.com/load-lop-hoc',
        //     data:{
        //       id_hocsinh_donghocphi:id_hocsinh_donghocphi,
        //       id_hocsinh:id_hocsinh,
        //       thang_dong:thang_dong,
        //       chi_phi:chi_phi,
        //     },
        //     dataType: 'json',
        //     type: 'post',
        //     success: function(data){
        //       console.log(data);
        //     },
        //     error: function(r1, r2){
        //       consoloe.log(r1);
        //     }
        //   });
        //   var chon_lop_hoc=$('.change_dong_lop_hoc').val();
        //   var chon_nam_hoc=$('.change_nam_dong_hoc').val();
        //   var chon_thang_hoc=$('.change_thang_dong_hoc').val();
        //   var path='/hoc-phi?chon_lop_hoc='+chon_lop_hoc+'&chon_nam_hoc='+chon_nam_hoc+'&chon_thang_hoc='+chon_thang_hoc;
        //   setTimeout(function (){window.location.replace(path);}, 1000);
        // })
        $(document).on('change', 'select.phu_huynh', function() {
          var giatricuaphuhuynh=$(this).val();
          var idhocsinh=$(this).attr("id");
          if(giatricuaphuhuynh)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/luu-hoc-sinh-trong-danh-sach',
              data: {
                giatricuaphuhuynh : giatricuaphuhuynh,
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $("input.so_dien_thoai_table_"+idhocsinh).val(data.giatricuaph);
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        });

        //điểm danh suất ăn
        $(document).on('change', '.change_lop_diem_danh_suat_an', function() {
          var lophoc = $(this).val();
          var nam = $('.change_nam_diem_danh_suat_an').val();
          var thang = $('.change_thang_diem_danh_suat_an').val();
          if( lophoc && nam && thang)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/thao-tac-diem-danh-suat-an',
              data: {
                lophoc:lophoc,
                nam:nam,
                thang:thang
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                if(data.bienstring.length>3)
                {
                  $('.table-diem-danh-suat-an table').html(data.bienstring);
                }
                else
                {
                  $('.table-diem-danh-suat-an table').html('<tbody>\n' +
                    '<tr class="odd"><td colspan="6" class="empty message">Chưa có lớp học này hoặc lớp học chưa có học sinh</td> </tr>\n' +
                    '</tbody>');
                }
                if(data.kiemchung==='khong')
                {
                  $('.thongbaobanghi').html('Chưa có bản ghi này');
                }
                else{
                  $('.thongbaobanghi').html('Đã có bản ghi này');
                }
                if($('.luu_table_diem_danh_suat_an').hasClass('d-none'))
                {
                  $('.luu_table_diem_danh_suat_an').removeClass('d-none');
                  $('.tong_ket_diem_danh_suat_an').removeClass('d-none');
                }
                chonngay();
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
          else {
            if($('.luu_table_diem_danh_suat_an').hasClass('d-none'))
            {

            }else{
              $('.luu_table_diem_danh_suat_an').addClass('d-none');
                  $('.tong_ket_diem_danh_suat_an').addClass('d-none');
            }
            $('.table-diem-danh-suat-an table').html('<tbody>\n' +
              '<tr class="odd"><td colspan="6" class="empty message">Chọn đủ thông tin</td> </tr>\n' +
              '</tbody>');
          }
        });
        $(document).on('change', '.change_nam_diem_danh_suat_an', function() {
          var lophoc = $('.change_lop_diem_danh_suat_an').val();
          var nam = $('.change_nam_diem_danh_suat_an').val();
          var thang = $('.change_thang_diem_danh_suat_an').val();
          if( lophoc && nam && thang)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/thao-tac-diem-danh-suat-an',
              data: {
                lophoc:lophoc,
                nam:nam,
                thang:thang
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                if(data.bienstring.length>3)
                {
                  $('.table-diem-danh-suat-an table').html(data.bienstring);
                }
                else
                {
                  $('.table-diem-danh-suat-an table').html('<tbody>\n' +
                    '<tr class="odd"><td colspan="6" class="empty message">Chưa có lớp học này hoặc lớp học chưa có học sinh</td> </tr>\n' +
                    '</tbody>');
                }
                if(data.kiemchung==='khong')
                {
                  $('.thongbaobanghi').html('Chưa có bản ghi này');
                }
                else{
                  $('.thongbaobanghi').html('Đã có bản ghi này');
                }
                if($('.luu_table_diem_danh_suat_an').hasClass('d-none'))
                {
                  $('.luu_table_diem_danh_suat_an').removeClass('d-none');
                  $('.tong_ket_diem_danh_suat_an').removeClass('d-none');
                }
                chonngay();
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
          else {
            if($('.luu_table_diem_danh_suat_an').hasClass('d-none'))
            {

            }else{
              $('.luu_table_diem_danh_suat_an').addClass('d-none');
                  $('.tong_ket_diem_danh_suat_an').addClass('d-none');
            }
            $('.table-diem-danh-suat-an table').html('<tbody>\n' +
              '<tr class="odd"><td colspan="6" class="empty message">Chọn đủ thông tin</td> </tr>\n' +
              '</tbody>');
          }
        });
        $(document).on('change', '.change_thang_diem_danh_suat_an', function() {
          var lophoc = $('.change_lop_diem_danh_suat_an').val();
          var nam = $('.change_nam_diem_danh_suat_an').val();
          var thang = $('.change_thang_diem_danh_suat_an').val();
          if( lophoc && nam && thang)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/thao-tac-diem-danh-suat-an',
              data: {
                lophoc:lophoc,
                nam:nam,
                thang:thang
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                if(data.bienstring.length>3)
                {
                  $('.table-diem-danh-suat-an table').html(data.bienstring);
                }
                else
                {
                  $('.table-diem-danh-suat-an table').html('<tbody>\n' +
                    '<tr class="odd"><td colspan="6" class="empty message">Chưa có lớp học này hoặc lớp học chưa có học sinh</td> </tr>\n' +
                    '</tbody>');
                }
                if(data.kiemchung==='khong')
                {
                  $('.thongbaobanghi').html('Chưa có bản ghi này');
                }
                else{
                  $('.thongbaobanghi').html('Đã có bản ghi này');
                }
                if($('.luu_table_diem_danh_suat_an').hasClass('d-none'))
                {
                  $('.luu_table_diem_danh_suat_an').removeClass('d-none');
                  $('.tong_ket_diem_danh_suat_an').removeClass('d-none');
                }
                chonngay();
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
          else {
            if($('.luu_table_diem_danh_suat_an').hasClass('d-none'))
            {

            }else{
              $('.luu_table_diem_danh_suat_an').addClass('d-none');
                  $('.tong_ket_diem_danh_suat_an').addClass('d-none');
            }
            $('.table-diem-danh-suat-an table').html('<tbody>\n' +
              '<tr class="odd"><td colspan="6" class="empty message">Chọn đủ thông tin</td> </tr>\n' +
              '</tbody>');
          }
        });
        $(document).on('click','.luu_table_diem_danh_suat_an',function (e) {
          var lophoc = $('.change_lop_diem_danh_suat_an').val();
          var nam = $('.change_nam_diem_danh_suat_an').val();
          var thang = $('.change_thang_diem_danh_suat_an').val();
          e.preventDefault();
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-diem-danh-suat-an',
            data:$('#bang-diem-danh-suat-an').serializeArray(),
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.assign('https://mamnonlaxanh.com/bang-dien-danh-suat-an?lophoc='+lophoc+'&nam='+nam+'&thang='+thang);}, 1000);
        })
        $('#bang-diem-danh-suat-an h4').ready(function(e) {
          var duongdan=$(location).attr('href');
          var chuoibien=duongdan.split('?')[1];
          var lophocbien=chuoibien.split('&')[0];
          var nambien=chuoibien.split('&')[1];
          var thangbien=chuoibien.split('&')[2];
          var lophoc = lophocbien.split('=')[1];
          var nam = nambien.split('=')[1];
          var thang = thangbien.split('=')[1];
          if( lophoc && nam && thang)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/thao-tac-diem-danh-suat-an',
              data: {
                lophoc:lophoc,
                nam:nam,
                thang:thang
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                if(data.bienstring.length>3)
                {
                  $('.table-diem-danh-suat-an table').html(data.bienstring);
                }
                else
                {
                  $('.table-diem-danh-suat-an table').html('<tbody>\n' +
                    '<tr class="odd"><td colspan="6" class="empty message">Chưa có lớp học này hoặc lớp học chưa có học sinh</td> </tr>\n' +
                    '</tbody>');
                }
                if(data.kiemchung==='khong')
                {
                  $('.thongbaobanghi').html('Chưa có bản ghi này');
                }
                else{
                  $('.thongbaobanghi').html('Đã có bản ghi này');
                }
                if($('.luu_table_diem_danh_suat_an').hasClass('d-none'))
                {
                  $('.luu_table_diem_danh_suat_an').removeClass('d-none');
                  $('.tong_ket_diem_danh_suat_an').removeClass('d-none');
                }
                chonngay();
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
          else {
            if($('.luu_table_diem_danh_suat_an').hasClass('d-none'))
            {

            }else{
              $('.luu_table_diem_danh_suat_an').addClass('d-none');
              $('.tong_ket_diem_danh_suat_an').addClass('d-none');
            }
            $('.table-diem-danh-suat-an table').html('<tbody>\n' +
              '<tr class="odd"><td colspan="6" class="empty message">Chọn đủ thông tin</td> </tr>\n' +
              '</tbody>');
          }
        });
        function chonngay(){
          var date = new Date();
          var ngay=date.getDate();
          var sukien=$('.table-diem-danh-suat-an table thead tr td');
          var dem=0;
          var su_kientinh=0
          sukien.each(function () {
            dem=dem+1;
            if($(this).text()===ngay)
            {
              su_kientinh=dem;
            }
          });
          if(su_kientinh==0)
          {
            $('.thongbaobanghi').after(' - <span>Hôm nay là chủ nhật nên sẽ không có tự tích</span>')
          }
          else
          {
            var tunglua=$('.table-diem-danh-suat-an tbody tr');
            tunglua.each(function () {
              var tamthoicot=$(this).children('td');
              var tudau=0;
              tamthoicot.each(function () {
                tudau=tudau+1;
                if(tudau==su_kientinh)
                {
                  $(this).children('input').attr('checked','checked');
                }
              })
            });
          }
        }
        $(document).on('click','.nut_tong_diem_danh_suat_an_chinh',function (e) {
          e.preventDefault();
          if($('.tong_ket_diem_danh_suat_an .xuat_excel').hasClass('btn'))
          {
            $('.tong_ket_diem_danh_suat_an p').remove();
            $('.table_tong_ket_diem_danh_suat_an').html('');
          }
          else
          {
            var tunghocsinh=$('.table-diem-danh-suat-an').find('tbody tr');
            var tongsobuoi=0;
            var lengthsoluongbuoi=0;
            var lop=$('.lop_hoc_hoc_phi :selected').text();
            var nam=$('.change_nam_diem_danh_suat_an :selected').text();
            var thang=$('.change_thang_diem_danh_suat_an :selected').text();
            var sobuoi=$('.table-diem-danh-suat-an').find('tr:first-child').find('input[type="checkbox"]');
            sobuoi.each(function () {
              tongsobuoi=tongsobuoi+1;
            })
            var htmlchinh='<tr><td>Tên học sinh</td><td>Số buổi ăn trong tháng này</td><td>Còn thừa số buổi ăn</td><td>Tiền ăn nộp tháng sau</td><td>Năm</td><td>Lớp học khối</td><td>Tháng</td></tr>';
            tunghocsinh.each(function () {
              var namehs=$(this).find('td:first-child').text();
              var lengthsoluongbuoi=$(this).find('input[type="checkbox"]:checked').length;
              htmlchinh=htmlchinh+'<tr><td>'+namehs+'</td><td>'+lengthsoluongbuoi+'</td><td>'+(tongsobuoi-lengthsoluongbuoi)+'</td><td>'+lengthsoluongbuoi/2*25000+'</td><td>'+nam+'</td><td>'+lop+'</td><td>'+thang+'</td></tr>'
            })
            $('.tong_ket_diem_danh_suat_an').append('<br><a href="#" class="btn btn-primary xuat_excel">Xuất file</a>');
            $('.table_tong_ket_diem_danh_suat_an').before('<p class="mt-50">Tổng số buổi trong tháng : '+tongsobuoi+ '/ '+tongsobuoi/2 + ' Ngày</p><p>1 ngày = 2 buổi (25k/2 buổi)</p>')
            $('.table_tong_ket_diem_danh_suat_an').append(htmlchinh);
          }
        })
        //phụ thu
        $(document).on('click', '.them-dong-phu-thu', function (e){
          e.preventDefault();
          if($(".form-them-phu-thu").hasClass('ktra'))
          {
            $('.form-them-phu-thu').remove();
          }
          else {
            $("#form-quan-ly-phu-thu .bang_danh_sach_phu_thu tbody ").prepend(`
                  <tr class="form-them-phu-thu ktra"></tr>`);
            var hienthiform='them';
            $.ajax({
              url: 'https://mamnonlaxanh.com/thao-tac-phu-thu',
              data:{
                hienthiform:hienthiform,
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                var chuoi=data.bientring;
                $(".form-them-phu-thu").html('<td></td>' +
                  '<td><input type="text" name="ten_phu_thu" class="ten_phu_thu form-control" ></td>' +
                  '<td><input type="text" name="gia_thanh" class="gia_thanh form-control"></td>' + chuoi+'' +
                  '<td class="text-center"><a href="#" class="luu_them_phu_thu btn btn-primary">Lưu lại</a><a href="#" class="huy_bo btn btn-success ml-10">Hủy bỏ</a></td>');
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        });
        $(document).on('click', '.luu_them_phu_thu', function (e){
          e.preventDefault();
          var tenphuthu_them=$(this).parents('tr').find('.ten_phu_thu').val();
          var giathanhphuthu_them=$(this).parents('tr').find('.gia_thanh').val();
          var namhocphuthu_them=$(this).parents('tr').find('.nam_hoc').val();
          var lopphuthu_them=$(this).parents('tr').find('.lop_hoc').val();
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-phu-thu',
            data:{
              tenphuthu_them:tenphuthu_them,
              giathanhphuthu_them:giathanhphuthu_them,
              namhocphuthu_them:namhocphuthu_them,
              lopphuthu_them:lopphuthu_them,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 1000);
        });
        $(document).on('click', '.luu_sua_phuthu', function (e){
          e.preventDefault();
          var id_luu_sua_phu_thu=$(this).attr('data-value');
          var tenphuthu_sua=$(this).parents('tr').find('.ten_phu_thu').val();
          var giathanhphuthu_them=$(this).parents('tr').find('.gia_thanh').val();
          var namhocphuthu_them=$(this).parents('tr').find('.nam_hoc').val();
          var lopphuthu_them=$(this).parents('tr').find('.lop_hoc').val();
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-phu-thu',
            data:{
              id_luu_sua_phu_thu:id_luu_sua_phu_thu,
              tenphuthu_sua:tenphuthu_sua,
              giathanhphuthu_them:giathanhphuthu_them,
              namhocphuthu_them:namhocphuthu_them,
              lopphuthu_them:lopphuthu_them,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 1000);
        });
        $(document).on('change', '.change_lop_phu_thu', function() {
          var lophocchange = $(this).val();
          var namchange = $('.change_nam_phu_thu').val();
          if( lophocchange && namchange)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/thao-tac-phu-thu',
              data: {
                lophocchange:lophocchange,
                namchange:namchange,
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $('.phu_thu_list').html(data.bienstring);
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
          else
          {
            $('.phu_thu_list').html('<option value="" selected="selected">- Chọn lớp và năm -</option>');
          }
          $('.list-hoc-sinh-dong-phu-thu table tbody').html('<tr><td colspan="6">Chọn Đầy đủ thông tin</td></tr>');
          $('.thong_bao_chi_tiet_phu_thu').html('');
        });
        $(document).on('change', '.change_nam_phu_thu', function() {
          var lophocchange = $('.change_lop_phu_thu').val();
          var namchange = $(this).val();
          if( lophocchange && namchange)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/thao-tac-phu-thu',
              data: {
                lophocchange:lophocchange,
                namchange:namchange,
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                $('.phu_thu_list').html(data.bienstring);
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
          else
          {
            $('.phu_thu_list').html('<option value="" selected="selected">- Chọn lớp và năm -</option>');
          }
          $('.list-hoc-sinh-dong-phu-thu table tbody').html('<tr><td colspan="6">Chọn Đầy đủ thông tin</td></tr>');
          $('.thong_bao_chi_tiet_phu_thu').html('');
        });
        $(document).on('click','.edit-phu-thu',function (e) {
          e.preventDefault();
          var id_phuthu_chinhsua=$(this).attr('data-value');
          $(this).parents('tr').after('<tr class="'+id_phuthu_chinhsua+'_phu_thu"></tr>');
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-phu-thu',
            data:{
              id_phuthu_chinhsua:id_phuthu_chinhsua,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $('.'+id_phuthu_chinhsua+'_phu_thu').html(data.bientring);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          $(this).parents('tr').remove();
        })

        //phụ thu lấy dữ liệu bảng
        $(document).on('change', '.change_phu_thu_list', function() {
          var idphuthu_chon = $(this).val();
          var lophoc = $('.lop_phu_thu').val();
          var nam = $('.nam_hoc_phu_thu').val();
          if( lophoc && nam && idphuthu_chon)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/thao-tac-phu-thu',
              data: {
                lophoc:lophoc,
                nam:nam,
                idphuthu_chon:idphuthu_chon
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                  $('.list-hoc-sinh-dong-phu-thu table tbody').html(data.bienstring);
                  if(data.hienthi==='co')
                  {
                    $('.nutthemphuthuchitiet').removeClass('d-none');
                    $('.xuat_file_excel').removeClass('d-none');
                  }
                  else
                  {
                    if($('.nutthemphuthuchitiet').hasClass('d-none'))
                    {

                    }
                    else
                    {
                      $('.nutthemphuthuchitiet').addClass('d-none');
                      $('.xuat_file_excel').removeClass('d-none');
                      $('.room-hot').prepend('');
                    }

                  }

                  if(data.tinhtrang==='co')
                  {
                    $('.thong_bao_chi_tiet_phu_thu').html('<i class="fa fa-check" aria-hidden="true"></i>Bản ghi đã tồn tại');
                  }
                  else
                  {
                    $('.thong_bao_chi_tiet_phu_thu').html('x Bản ghi chưa tồn tại');
                  }
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        });
        $(document).on('click', '.nutthemphuthuchitiet', function (e){
          e.preventDefault();
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tac-phu-thu',
            data:$('#form-quan-ly-phu-thu').serializeArray(),
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
          setTimeout(function (){location.reload();}, 1000);
        });
        $(document).on('click', '.xuat_file_excel', function (e){
          e.preventDefault();
          var classcan='.list-hoc-sinh-dong-phu-thu table';
          $('.xuat_file_phu_thu').remove();
          var htmlcan=$(classcan).html();
          $('#form-quan-ly-phu-thu').append('<table class="d-none xuat_file_phu_thu">'+htmlcan+'</table>')
          var giatri=$('.xuat_file_phu_thu input');
          giatri.each(function () {
            var sotien=$(this).val();
            $(this).parents('td').append(sotien);
            $(this).remove();
          });
          $('.xuat_file_phu_thu th:nth-child(4)').after('<th>Họ và tên bố mẹ</th><th>Số điện thoại bố mẹ</th>')
          var phuhunh=$('.xuat_file_phu_thu .ten_phu_huynh');
          phuhunh.each(function () {
            var tenphuhuynhs=$(this).attr('tenph');
            var sodt=$(this).attr('sodienthoai')+' ';
            $(this).parents('tr').find('td:nth-child(4)').after('<td>'+sodt+'</td>');
            $(this).parents('tr').find('td:nth-child(4)').after('<td>'+tenphuhuynhs+'</td>');
          })
          classcan='.xuat_file_phu_thu';
          var lop=$('.change_lop_phu_thu :selected').text();
          var nam=$('.change_nam_phu_thu :selected').text();
          var loaiphuthu=$('.change_phu_thu_list :selected').text();
          var nam1=nam.split(' - ')[0];
          var nam2=nam.split(' - ')[1];
          var namefile="lop_"+lop+"_nam_"+nam1+"_"+nam2+"_thu_tien_phu_thu_"+loaiphuthu;
          exportToExcel(classcan,namefile);
        });
        $(document).on('click', '.xuat_excel', function (e){
          e.preventDefault();
          var classcan='.table_tong_ket_diem_danh_suat_an';
          var lop=$('.lop_hoc_hoc_phi :selected').text();
          var nam=$('.change_nam_diem_danh_suat_an :selected').text();
          var thang=$('.change_thang_diem_danh_suat_an :selected').text();
          var nam1=nam.split(' - ')[0];
          var nam2=nam.split(' - ')[1];
          var namefile="lop_"+lop+"_nam_"+nam1+"_"+nam2+"_diem_danh_suat_an_thang_"+thang;
          exportToExcel(classcan,namefile);
        });
        $(document).on('click', '.export-exccel-hocphi', function (e){
          e.preventDefault();
          var classcan='.table-expot';
          var lop=$('.change_dong_lop_hoc :selected').text();
          var nam=$('.change_nam_dong_hoc :selected').text();
          var thang=$('.change_thang_dong_hoc :selected').text();
          var nam1=nam.split(' - ')[0];
          var nam2=nam.split(' - ')[1];
          var namefile="lop_"+lop+"_nam_"+nam1+"_"+nam2+"_dong_hoc_phi_thang_"+thang;
          exportToExcel(classcan,namefile);
        });
        $(document).on('change', '#form-them-sua-lop-hoc #edit-lop-hoc', function (e){
          var nam=$('#edit-nam-hoc').val();
          var lop=$('#edit-lop-hoc').val();
          if(nam && lop)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/thay-doi-lop-hoc',
              data: {
                tuong:'thay_doi_nam_lop',
                lop:lop,
                nam:nam,
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                if(data.giao_vien_1 && data.giao_vien_2)
                {
                  if(data.giao_vien_1!=='')
                  {
                    var options=$('#edit-giao-vien-1 option');
                    options.each(function () {
                      if($(this).val()===data.giao_vien_1)
                      {
                        $(this).attr('selected','selected');
                      }
                    })
                  }
                  if(data.giao_vien_2!=='')
                  {
                    var options1=$('#edit-giao-vien-2 option');
                    options1.each(function () {
                      if($(this).val()===data.giao_vien_2)
                      {
                        $(this).attr('selected','selected');
                      }
                    })
                  }
                }
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        });
        $(document).on('change', '#form-them-sua-lop-hoc #edit-nam-hoc', function (e){
          var nam=$('#edit-nam-hoc').val();
          var lop=$('#edit-lop-hoc').val();
          if(nam && lop)
          {
            $.ajax({
              url: 'https://mamnonlaxanh.com/thay-doi-lop-hoc',
              data: {
                tuong:'thay_doi_nam_lop',
                lop:lop,
                nam:nam,
              },
              dataType: 'json',
              type: 'post',
              success: function(data){
                console.log(data);
                if(data.giao_vien_1 && data.giao_vien_2)
                {
                  if(data.giao_vien_1!=='')
                  {
                    var options=$('#edit-giao-vien-1 option');
                    options.each(function () {
                      if($(this).val()===data.giao_vien_1)
                      {
                        $(this).attr('selected','selected');
                      }
                    })
                  }
                  if(data.giao_vien_2!=='')
                  {
                    var options1=$('#edit-giao-vien-2 option');
                    options1.each(function () {
                      if($(this).val()===data.giao_vien_2)
                      {
                        $(this).attr('selected','selected');
                      }
                    })
                  }
                }
              },
              error: function(r1, r2){
                consoloe.log(r1);
              }
            });
          }
        });
        $(document).on('change', '#form-them-sua-lop-hoc #edit-giao-vien-1', function (e){
          var giaovien=$(this).val();
          var danhsachoption=$('#edit-giao-vien-2 option')
          danhsachoption.each(function () {
            if($(this).val()===giaovien)
            {
              $(this).remove();
            }
          });
        });
        $(document).on('change', '#form-them-sua-lop-hoc #edit-giao-vien-2', function (e){
          var giaovien=$(this).val();
          var danhsachoption=$('#edit-giao-vien-1 option')
          danhsachoption.each(function () {
            if($(this).val()===giaovien)
            {
              $(this).remove();
            }
          });
        });
        function exportToExcel(mytblId,name){
          var htmls = "";
          var uri = 'data:application/vnd.ms-excel;base64,';
          var template = '<html xmlns:o="urn:schemas-Microsoft-com:office:office" xmlns:x="urn:schemas-Microsoft-com:office:Excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>';
          var base64 = function(s) {
            return window.btoa(unescape(encodeURIComponent(s)))
          };

          var format = function(s, c) {
            return s.replace(/{(\w+)}/g, function(m, p) {
              return c[p];
            })
          };

          htmls = $(mytblId).html();

          var ctx = {
            worksheet : 'Worksheet',
            table : htmls
          }


          var link = document.createElement("a");
          link.download = name+".xls";
          link.href = uri + base64(format(template, ctx));
          link.click();
        }
        $(document).on('click', '.popup_id_delete', function (e){
          e.preventDefault();
          var id=$(this).attr('id_edit');
          var idlop=$(this).attr('id_lop');
          $('.vi_tri_nut_xoa_hoc_sinh').html();
          $('.vi_tri_nut_xoa_hoc_sinh').html('<span><a href="#" class="id_delete_xoa_han btn btn-success mr-10" id_edit="'+id+'">Xóa hẳn</a><a href="#" class="btn btn-primary id_delete_ra_khoi_lop" id_edit="'+id+'" idlop="'+idlop+'">Xóa ra khỏi lớp</a></span>')
        });
        $(document).on('click', '.id_delete_ra_khoi_lop', function (e){
          e.preventDefault();
          var id=$(this).attr('id_edit');
          var xoa_han_ra_khoi_lop=$(this).attr('idlop');
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tao-hoc-sinh-moi',
            data: {
              xoa_han_ra_khoi_lop:xoa_han_ra_khoi_lop,
              id:id,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $('.loadding_test_wait').remove();
              setTimeout(function (){location.reload();}, 1000);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        });
        $(document).on('click', '.btn-xoa-hoc-sinh-moi', function (e){
          e.preventDefault();
          $(this).parents('tr').remove();
          if(!$('.them_hoc_sinh').hasClass('ktra'))
          {
            $('.nut_them_hoc_sinh_moi').remove();
          }
        });
        $(document).on('click', '.id_delete_xoa_han', function (e){
          e.preventDefault();
          var id=$(this).attr('id_edit');
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tao-hoc-sinh-moi',
            data: {
              xoahan:'xoa_han',
              id:id,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              setTimeout(function (){location.reload();}, 1000);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        });
        $(document).on('click', '.gui_file_excel', function (e){
          $('.du_lieu_can').addClass('d-none');
          $('.thong-tin').append('<div class="load_du_lieu"><div class="text-center"><div class="spinner-border text-danger" role="status">\n' +
            '  <span class="sr-only">Loading...</span>\n' +
            '</div>' +
            '<p class="mt-15 mb-0">Dữ liệu đang được xử lý</p></div></div>')
        });
        $(document).on('click', '.them_dong_nhap_hoc_sinh_moi', function (e){
          if($('.du_lieu_can').hasClass('d-none'))
          {
            $('.du_lieu_can').removeClass('d-none');
          }
          if(!$('.load_du_lieu').hasClass('d-none'))
          {
            $('.load_du_lieu').remove();
          }
          $.ajax({
            url: 'https://mamnonlaxanh.com/thao-tao-hoc-sinh-moi',
            data: {them_dong_nhap_hoc_sinh:'them'},
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $('.loading_luu').remove();
              $('.lop_nam').html(data.str);
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        });
        $(document).on('click', '.xuat_ex', function (e){
          var classcan='.table_bep';
          var namefile="code_bep";
          exportToExcel(classcan,namefile);
        });
			});
		}
	};
})(jQuery);
