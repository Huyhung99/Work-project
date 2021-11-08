$(document).ready(
    function (){
        $(document).on('click', '.upload_excel', function (e){
            var $dataInput = new FormData($('#form-upload-file-excel')[0]);
            $.ajax({
                url: 'https://minhhien.com.vn/khu-vuc-api/api/read-excel-bep',
                type: 'post',
                dataType: 'json',
                data: $dataInput,
                // async: false,
                contentType: false,
                // cache: false,
                processData: false
            }).success(function (data) {
                console.log(data);
                $('.main-container').html(data.tablebep);
            }).error(function (r1, r2) {
                alert(r1.responseText);
            });
        });
        $(document).on('click', '.edit_lop_hoc_ql_lop', function (e){
            e.preventDefault();
            $(this).removeClass('edit_lop_hoc_ql_lop');

            const node = $(this).attr('data-value');
            if ($(this).parent().parent().next().find('.change_class').length > 0 ){
                $(this).parent().parent().next().remove();

            }else {
                $(this).closest('tr').after('<tr><td colspan="7"><a class="btn btn-success change_class float-right" href="#">Lưu</a></td></tr>');
            }
            $.ajax({
                url: 'https://mamnonlaxanh.com/sua-giao-vien-trang-thai',
                data: {node: node
                },
                dataType: 'json',
                type: 'post',
                success: (data) => {
                    $(this).addClass('edit_lop_hoc_ql_lop');
                    if ($(this).parent().parent().next().find('.change_class').length > 0 ){

                        $(this).closest('td').siblings('.teacher_1').after('<td>'+ data.GiaoVien1 + '</td>');
                        $(this).closest('td').siblings('.teacher_1').next().addClass('teacher_1_1');
                        // $(this).closest('td').siblings('.teacher_1').html();

                        $(this).closest('td').siblings('.teacher_2').after('<td>'+ data.GiaoVien2 + '</td>');
                        $(this).closest('td').siblings('.teacher_2').next().addClass('teacher_2_2');

                        $(this).closest('td').siblings('.class_state').after('<td>'+ data.TrangThaiLop + '</td>');
                        $(this).closest('td').siblings('.class_state').next().addClass('class_state_1');

                        $(this).closest('td').siblings('.teacher_1').hide();
                        $(this).closest('td').siblings('.teacher_2').hide();
                        $(this).closest('td').siblings('.class_state').hide();
                    }else {
                        $(this).closest('td').siblings('.teacher_1_1').remove();
                        $(this).closest('td').siblings('.teacher_2_2').remove();
                        $(this).closest('td').siblings('.class_state_1').remove();

                        $(this).closest('td').siblings('.teacher_1').show();
                        $(this).closest('td').siblings('.teacher_2').show();
                        $(this).closest('td').siblings('.class_state').show();
                    }

                },
                error: function(r1, r2){
                    console.log(r1);
                }
            });
        });
        $(document).on('click','.change_class', function (e){
            e.preventDefault();
            const node = $(this).parent().parent().prev().find('.edit_lop_hoc_ql_lop').attr('data-value');
            const giaovien1 = $(this).parent().parent().prev().find('.value_teacher_1').find('option').filter(':selected').val();
            const giaovien2 = $(this).parent().parent().prev().find('.value_teacher_2').find('option').filter(':selected').val();
            const trang_thai_lop = $(this).parent().parent().prev().find('.value_state_class').find('option').filter(':selected').text();
            if (giaovien1 == giaovien2){
                alert('Tên hai giáo viên giống nhau.');
            }else{
                $.ajax({
                    url: 'https://mamnonlaxanh.com/luu-giao-vien-trang-thai-da-sua',
                    data: {giaovien1: giaovien1,
                        giaovien2: giaovien2,
                        trang_thai_lop: trang_thai_lop,
                        node: node},
                    dataType: 'json',
                    type: 'post',
                    success: (data) => {
                        $(this).parent().parent().prev().find('.teacher_1').html(data.info_class['giaovien1']);
                        $(this).parent().parent().prev().find('.teacher_2').html(data.info_class['giaovien2']);
                        $(this).parent().parent().prev().find('.class_state').html(data.info_class['tinh_trang_lop']);

                        $(this).parent().parent().prev().find('.teacher_1_1').hide();
                        $(this).parent().parent().prev().find('.teacher_2_2').hide();
                        $(this).parent().parent().prev().find('.class_state_1').hide();

                        $(this).parent().parent().prev().find('.teacher_1').show();
                        $(this).parent().parent().prev().find('.teacher_2').show();
                        $(this).parent().parent().prev().find('.class_state').show();

                        $(this).closest('tr').remove();
                    },
                    error: function(r1, r2){
                        console.log(r1);
                    }
                });
            }
        })
        $(document).on('click','.preventDefault', function (e){
            e.preventDefault();
        })
})
