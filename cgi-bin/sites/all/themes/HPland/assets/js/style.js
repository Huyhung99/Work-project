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
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
        }
    });
});