jQuery(function () {
  'use strict';
  $(document).ready(function (){
    $(document).on('change','.hoi_vien',function (e) {
      e.preventDefault();
      if($(this).val()==='tau')
      {
        if($('.chon_hoi_vien').hasClass('d-none'))
        {
          $('.chon_hoi_vien').removeClass('d-none');
        }
      }
      else
      {
        if(!$('.chon_hoi_vien').hasClass('d-none'))
        {
          $('.chon_hoi_vien').addClass('d-none');
        }
      }
    })
    // $(document).on('click','#table-danhsachhocsinh .fa-eye',function (e) {
    //   e.preventDefault();
    //   var nid=$(this).attr('data-value');
    //   var class_tr_xem_chi_tiet='xem_chi_tiet'+$(this).attr('data-value');
    //   if($('.'+class_tr_xem_chi_tiet).hasClass('ktra'))
    //   {
    //     $('.'+class_tr_xem_chi_tiet).remove();
    //   }
    //   else
    //   {
    //     $(this).parents('tr').after(
    //       '<tr class="'+class_tr_xem_chi_tiet+' ktra"><td colspan="10"><div class="text-center"><div class="lds-dual-ring"></div></div></td></tr>'
    //     );
    //     $.ajax({
    //       url: 'https://hiephoivantai.minhhien.com.vn/xem-chi-tiet',
    //       data: {
    //         nid:nid
    //       },
    //       dataType: 'json',
    //       type: 'post',
    //       success: function(data){
    //         console.log(data);
    //         $('.'+class_tr_xem_chi_tiet).html(data.thong_bao);
    //       },
    //       error: function(r1, r2){
    //         consoloe.log(r1);
    //       }
    //     });
    //   }
    // })
    $(document).on('click','.gui_file_excel',function (e) {
      e.preventDefault();
      $('.modal-footer').html();
      $('.du_lieu_xly').html('' +
        '<div class="lds-dual-ring"></div>' +
        '<p>Đang xử lý</p>');
      var gia_tri_tham_so=$('.hoi_vien').val();
      if($('.chon_hoi_vien').hasClass('d-none'))
      {
        if(gia_tri_tham_so!=='')
        {
          var $dataInput = new FormData($('#form-upload-file-excel')[0]);
          $.ajax({
            url: 'https://minhhien.com.vn/khu-vuc-api/api/read-excel-hoi-vien',
            contentType: false,
            processData: false,
            data: $dataInput,
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $('#ket-qua-nhap').html(data.table);
              $('.du_lieu_xly').html('<p>Dữ liệu xử lý xong</p>');
              $('.modal-footer').html(
                '<button type="button" class="btn btn-danger" data-dismiss="modal">Đồng ý</button>');
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        }
        else
        {
          setTimeout(function () {
          $('.du_lieu_xly').html('<p>Vui lòng chọn loại danh sách</p>');
          $('.modal-footer').html(
            '        <button type="button" class="btn btn-danger" data-dismiss="modal">Đồng ý</button>');
          },1000);
        }
      }
      else
      {
        var edit_node=$('#edit-node').val();
        if(gia_tri_tham_so!=='' && edit_node!=='')
        {
          var $dataInput = new FormData($('#form-upload-file-excel')[0]);
          $.ajax({
            url: 'https://minhhien.com.vn/khu-vuc-api/api/read-excel-hoi-vien',
            contentType: false,
            processData: false,
            data: $dataInput,
            dataType: 'json',
            type: 'post',
            success: function(data){
              console.log(data);
              $('#ket-qua-nhap').html(data.table);
              $('.du_lieu_xly').html('<p>Dữ liệu xử lý xong</p>');
              $('.modal-footer').html(
                '<button type="button" class="btn btn-danger" data-dismiss="modal">Đồng ý</button>');
            },
            error: function(r1, r2){
              consoloe.log(r1);
            }
          });
        }
        else
        {
          setTimeout(function () {
            $('.du_lieu_xly').html('<p>Vui lòng chọn đầy đủ</p>');
            $('.modal-footer').html(
              '        <button type="button" class="btn btn-danger" data-dismiss="modal">Đồng ý</button>');
          },1000);
        }
      }
    })
    $(document).on('click','.tai_excel_tau',function (e) {
      e.preventDefault();
      $('.tai_xuong_excel').html('<div class="text-center"><div class="lds-dual-ring"></div></div>');
      $.ajax({
        url: 'https://minhhien.com.vn/khu-vuc-api/api/export-excel-hoi-vien',
        data: $('#table-danhsachhocsinh').serializeArray(),
        dataType: 'json',
        type: 'post',
        success: function(data){
          console.log(data);
          $('.tai_xuong_excel').html('<div class="text-center">'+data.link_file+'</div>');
          $('.modal-footer').html('<span class="btn btn-danger" data-dismiss="modal" aria-label="Close">Đóng</span>')
          },
        error: function(r1, r2){
          consoloe.log(r1);
        }
      });
    })
  })
});
