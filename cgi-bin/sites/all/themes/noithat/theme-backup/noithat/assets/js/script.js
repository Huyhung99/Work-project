$(document).ready(function () {
    "use strict";
    $(document).on('click','.close-popup',function (e){
        $(this).parent().parent().parent().parent().hide();
    })
    $(document).on('click','.link--popup__brand', function (e){
        e.preventDefault();
        const nid = $(this).attr('data-nid');
        console.log(nid);
        $.ajax({
            url: 'https://noithat.minhhien.com.vn/hien-thi-thuong-hieu',
            data: {node : nid},
            type: 'post',
            dataType: 'json',
            success:function(data) {
                console.log(data.str);
                $('body').append(data.str);
                $('.details-content').animate({opacity: 1}, 500, "linear");
                $(".details-center").addClass("fadeindown")
                $('.details-center').css('opacity',1);
                $(".overlay-dark").addClass("show");
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(thrownError);
            },
        })
    })
    $(document).on('click','.close-popup', function (e){
        $(".details-content").animate({opacity: 0}, 500, "linear", function () {
            $(".overlay-dark").removeClass("show");
                $("html, body").removeClass("no-scroll");
                $(".details-content").remove();
        })
    })
    $(document).on('click','.showrrom-visitor', function (e){
        e.preventDefault();
        $('.register-form').addClass('show');
    })
    $(document).on('click','.subscribe', function (e){
        e.preventDefault();
        $('.showroom-form').addClass('show');
    })
})

