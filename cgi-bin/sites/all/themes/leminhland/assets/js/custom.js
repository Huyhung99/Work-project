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
          url: 'https://leminhland.com/email-api',
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
    const observer = lozad();
    observer.observe();
  })
});
