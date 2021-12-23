$(document).ready(function () {
    $(document).on('click','.submit-gia-tien',function (e){
        e.preventDefault();
        var giaTien = [];
        $('#drop-gia-tien').find(':checkbox:checked').each(function (i){
            giaTien[i] = $(this).val();
        });
        console.log(giaTien);
    });

    //checked status in register-form-user
    $("input#edit-status-1").prop('checked',true);
    $("#edit-field-ngay-dang-und-0-value-day").addClass('form-control');
    $("#edit-field-ngay-dang-und-0-value-month").addClass('form-control');
    $("#edit-field-ngay-dang-und-0-value-year").addClass('form-control');

});