jQuery(function () {
  'use strict';
  $(document).ready(function (){
    $(document).on('click','.btn-danger[data-toggle=modal]',function () {
      if($('.modal-body .form_thong_tin_tu_van').hasClass('d-none'))
      {
        $('.modal-body .form_thong_tin_tu_van').removeClass('d-none');
      }
      $('.loading_form').remove();
      $('.message-success').remove();
      $('.modal-body .form_thong_tin_tu_van')[0].reset();
    })
    $(document).on('submit','.form_thong_tin_tu_van',function (e) {
      e.preventDefault();
    })
    $(document).on('click','#btn-loc-bds',function () {
      if($('.hien_thi_form').hasClass(''))
      {

      }
    });
    $(document).on('click','.form_submit_thong_tin_tu_van',function (e) {
      var ho_ten = $(this).parents('form').find('#edit-submitted-ho-ten').val();
      var so_dien_thoai = $(this).parents('form').find('#edit-submitted-ho-ten').val();
      var email = $(this).parents('form').find('#edit-submitted-email').val();
      var noi_dung = $(this).parents('form').find('#edit-submitted-noi-dung').val();

      $('.form_thong_tin_tu_van').css('display','block');
      $('.message-success').remove();
      if(ho_ten !=='' && so_dien_thoai !=='' && email !=='' && noi_dung !=='')
      {
        $(this).parent().parent().append('<div class="loader"></div>');
        $(this).parent().addClass('d-none');
        $.ajax({
          url: 'https://hpmap.vn/email-api',
          data: $('.form_thong_tin_tu_van').serializeArray(),
          dataType: 'json',
          type: 'post',
          success: (data) => {
            console.log(data);

          },
        }).error ((x, status, jqxhr) =>
        {
          console.log(x);
          if (x.status == 200) /* jQuery thinks, Status 201 means error, but it doesnt so we have to work around it here */
          {
            $(this).parent().parent().append('<p class="message-success">Gửi thông tin thành công. Chúng tôi sẽ phản hồi sớm nhất có thể</p>')
            $('.loader').remove();
            // handle success
            return;
          }

          // handle errors
        });
      }
    })

    /*$(document).on('click','.rld-main-search .btn-search',function(e){
      e.preventDefault();
      let title = $('.banner-search-wrap .tab-pane.active .rld-main-search input[name="title"]').val();
      let type_1 = $('.banner-search-wrap .tab-pane.active .rld-main-search select[name="type"]').val();
      let from_price = $('.banner-search-wrap .tab-pane.active .rld-main-search select[name="from_price"]').val();
      let to_price = $('.banner-search-wrap .tab-pane.active .rld-main-search select[name="to_price"]').val();
      let from_area = $('.banner-search-wrap .tab-pane.active .rld-main-search select[name="from_area"]').val();
      let to_area = $('.banner-search-wrap .tab-pane.active .rld-main-search select[name="to_area"]').val();
      let bedRooms = $('.banner-search-wrap .tab-pane.active .rld-main-search .bed-room').val();
      let bathRooms = $('.banner-search-wrap .tab-pane.active .rld-main-search .bath-room').val();
      let typeProperties = $('.banner-search-wrap .tab-pane.active .rld-main-search .type-properties').val();
      let locations = $('.banner-search-wrap .tab-pane.active .rld-main-search .locations').val();
      title = title.replace(' ', '+');

      let bedRoom = '';
      if (bedRooms){
        bedRoom = bedRoom.join('+');
      }
      let bathRoom = '';
      if (bathRooms){
        bathRoom = bathRoom.join('+');
      }
      let typeProperty = '';
      if (typeProperties){
        typeProperty = typeProperties.join('&khu_vuc_value[]=');
        typeProperty = '&khu_vuc_value[]=' + typeProperty;
      }
      let location = '';
      if (locations){
        location = `&loai_san_pham_value[]=${locations.join('&loai_san_pham_value[]=')}`;
      }
      // https://hpmap.vn/muc-tim-kiem?title=&field_gia_value=&field_gia_den_value=&field_dien_tich_tu_value=&field_dien_tich_den_value=&so_phong_tam_value=&so_phong_ngu_value=
      window.location = window.location.href + "muc-tim-kiem?" + `title=${title}&field_gia_value=${from_price}&field_gia_den_value=${to_price}&field_dien_tich_tu_value=${from_area}&field_dien_tich_den_value=${to_area}&so_phong_tam_value=${bedRoom}&so_phong_ngu_value=${bathRoom}${typeProperty}${location}`;
      return false;
    })*/
    $(document).on('click','.search-box .btn-search',function (e){
      e.preventDefault();
      let title = $('.search-box input[name="title"]').val();
      let type_1 = $('.search-box select[name="type"]').val();
      let from_price = $('.search-box select[name="from_price"]').val();
      let to_price = $('.search-box select[name="to_price"]').val();
      let from_area = $('.search-box select[name="from_area"]').val();
      let to_area = $('.search-box select[name="to_area"]').val();
      let bedRooms = $('.search-box .bed-room').val();
      let bathRooms = $('.search-box .bath-room').val();
      let typeProperties = $('.search-box .type-properties').val();
      let locations = $('.search-box .locations').val();
      title = title.replace(' ', '+');

      let bedRoom = '';
      if (bedRooms){
        bedRoom = bedRoom.join('+');
      }
      let bathRoom = '';
      if (bathRooms){
        bathRoom = bathRoom.join('+');
      }
      let typeProperty = '';
      if (typeProperties){
        typeProperty = typeProperties.join('&khu_vuc_value[]=');
        typeProperty = '&khu_vuc_value[]=' + typeProperty;
      }
      let location = '';
      if (locations){
        location = `&loai_san_pham_value[]=${locations.join('&loai_san_pham_value[]=')}`;
      }
      // https://hpmap.vn/muc-tim-kiem?title=&field_gia_value=&field_gia_den_value=&field_dien_tich_tu_value=&field_dien_tich_den_value=&so_phong_tam_value=&so_phong_ngu_value=
      window.location = window.location.href + "muc-tim-kiem?" + `title=${title}&field_gia_value=${from_price}&field_gia_den_value=${to_price}&field_dien_tich_tu_value=${from_area}&field_dien_tich_den_value=${to_area}&so_phong_tam_value=${bedRoom}&so_phong_ngu_value=${bathRoom}${typeProperty}${location}`;
      return false;

    });

    if($("#bed-room").length > 0)
      $('#bed-room').multiselect({
        columns: 1,
        texts: {
          placeholder: ' Phòng ngủ',
          selectedOptions: ' đã chọn'
        }
      })

    if( $("#bath-room").length > 0 )
      $('#bath-room').multiselect({
        columns: 1,
        texts: {
          placeholder: ' Phòng tắm',
          selectedOptions: ' đã chọn'
        }
      });

    if($("#type-properties").length > 0)
      $('#type-properties').multiselect({
        columns: 1,
        texts: {
          placeholder: ' Loại hình BDS',
          selectedOptions: ' đã chọn'
        }
      });

    if($("#locations").length > 0)
      $('#locations').multiselect({
        columns: 1,
        texts: {
          placeholder: ' Vị trí',
          selectedOptions: ' đã chọn'
        }
      });

    const observer = lozad();
    observer.observe();
  })
});
