(function ($) {

  Drupal.behaviors.mymodule = {
    attach: function (context, settings) {
      $(document).ready(function () {
        "use strict";
        $(document).on('click', '.btn-add-new-student-row', function (e){
          e.preventDefault();
          $("#form-them-sua-lop-hoc table tbody").append(`
          <tr>
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
        });
        $(document).on('click','table tbody .fa-trash',function (e) {
          e.preventDefault();
          $(this).parents("tr").remove();
        })
        // $(document).on('click', '.btn-save-new-class', function (e){
        //   e.preventDefault();
        //   $.ajax({
        //     url: 'https://laxanh.minhhien.com.vn/luu-lop-hoc',
        //     data: $("#form-them-sua-lop-hoc").serializeArray(),
        //     dataType: 'json',
        //     type: 'post',
        //     success: function(data){
        //       console.log(data);
        //     },
        //     error: function(r1, r2){
        //       consoloe.log(r1);
        //     }
        //   })
        //   location.assign("/them-lop-hoc");
        // })

        $(document).on('click','table tbody .fa-trash',function (e) {
          e.preventDefault();
          $(this).parents("tr").remove();
        })
      })
    }
  }
})(jQuery);
