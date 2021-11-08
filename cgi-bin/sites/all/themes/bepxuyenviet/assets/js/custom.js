$(document).ready(function (){
    "use strict";
    $(document).on('click','.link-add-to-cart',function (e){
        e.preventDefault();
        $(this).next().find('form').submit();
    })
    $(document).on('click','.link-to-delete',function (e){
        e.preventDefault();
        console.log('click')
        $(this).next().submit();
    })
$(document).on('change', '#edit-customer-profile-billing-field-thanh-pho-und', function(){
      var $idThanhPho = $(this).val();
      $.ajax({
        url: 'https://minhhien.com.vn/khu-vuc-api/api/get-data',
        data: {type: 'quan_huyen', parent_id: $idThanhPho},
        dataType: 'json',
        type:'post',
        beforeSend: function(){
          $("#edit-customer-profile-billing-field-quan-huyen-und").html('');
        },
        success: function(data){
          $("#edit-customer-profile-billing-field-quan-huyen-und").append('<option></option>');
          $.each(data, function(k, item){
            $("#edit-customer-profile-billing-field-quan-huyen-und").append('<option value='+item.id+'>'+item.name+'</option>');
          });
        }
      })
    });
    if($("#edit-customer-profile-billing-field-thanh-pho-und-0-value").length > 0){
        if($(this).find('option').length == 0){
            jQuery.ajax({
                url: 'https://minhhien.com.vn/khu-vuc-api/api/get-data',
                data: {type: 'thanh_pho', parent_id: null},
                dataType: 'json',
                type:'post',
                beforeSend: function(){
                    $("#edit-customer-profile-billing-field-thanh-pho-und-0-value").empty();
                },
                success: function(data){
                    $("#edit-customer-profile-billing-field-thanh-pho-und-0-value").append('<option></option>');
                    $.each(data, function(k, item){
                        $("#edit-customer-profile-billing-field-thanh-pho-und-0-value").append('<option value='+item.id+'>'+item.name+'</option>');
                    });
                }
            })
        }
    }
    if ($('#thanh_pho').length > 0){
        jQuery.ajax({
            url: 'https://minhhien.com.vn/khu-vuc-api/api/get-data',
            data: {type: 'thanh_pho', parent_id: null},
            dataType: 'json',
            type:'post',
            success: function(data){
                console.log(data);
                $("#thanh_pho").html('<option class="thay-doithanhpho" >- Chọn Thành Phố-</option>');
                $.each(data, function(k, item){
                    $("#thanh_pho").append('<option class="thay-doithanhpho" value='+item.id+'>'+item.name+'</option>');
                });
            }
        })
    }
    $(document).on('change', '#thanh_pho', function(){
        var $idThanhPho = $(this).val();
        $.ajax({
            url: 'https://minhhien.com.vn/khu-vuc-api/api/get-data',
            data: {type: 'quan_huyen', parent_id: $idThanhPho},
            dataType: 'json',
            type:'post',
            beforeSend: function(){
                $("#quan_huyen").html('');
            },
            success: function(data){
                $("#quan_huyen").append('<option> - Chọn Quận Huyện - </option>');
                $.each(data, function(k, item){
                    $("#quan_huyen").append('<option value='+item.id+'>'+item.name+'</option>');
                });
            }
        })
    });

    $(document).on('change', '#quan_huyen', function(){
        var $idQuanHuyen = $(this).val();
        $.ajax({
            url: 'https://minhhien.com.vn/khu-vuc-api/api/get-data',
            data: {type: 'phuong_xa', parent_id: $idQuanHuyen},
            dataType: 'json',
            type:'post',
            beforeSend: function(){
                $("#phuong_xa").html('');
            },
            success: function(data){
                $("#phuong_xa").append('<option> - Chọn Phường Xã - </option>');
                $.each(data, function(k, item){
                    $("#phuong_xa").append('<option value='+item.id+'>'+item.name+'</option>');
                });
            }
        })
    });

    $("#phone").on("keypress keyup blur",function (event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
    $(document).on('click', '#check_out',function (e){
        e.preventDefault();
        const  ho_ten = $('#ho_ten').val();
        const  phone = $('#phone').val();
        const  thanh_pho = $('#thanh_pho option').filter(':selected').text();
        const  quan_huyen = $('#quan_huyen option').filter(':selected').text();
        const  phuong_xa = $('#phuong_xa option').filter(':selected').text();
        const  dia_chi_chi_tiet = $('#dia_chi_chi_tiet').val();
        const  ghi_chu = $('#ghi_chu').val();
        const  node = $('#node').val();
        const title_product = $('#title_product').html();
        const path_image = $('#path_image').attr('src');
        if ((ho_ten != '')&&(phone != '')&&(thanh_pho != '')&&(quan_huyen != '')&&(phuong_xa != '')&&(dia_chi_chi_tiet != '')){
            $.ajax({
                url: 'https://bepxuyenviet.minhhien.com.vn/them-don-hang',
                data: {
                    ho_ten:ho_ten,
                    phone:phone,
                    thanh_pho:thanh_pho,
                    quan_huyen:quan_huyen,
                    phuong_xa:phuong_xa,
                    dia_chi_chi_tiet:dia_chi_chi_tiet,
                    ghi_chu:ghi_chu,
                    node:node,
                    title_product:title_product,
                    path_image:path_image,
                },
                dataType: 'json',
                type: 'post',
                success: function(data){
                    console.log(data);
                },
                error: function(r1, r2){
                    console.log(r1);
                }
            });
            $('#title-modal').text('Đăng kí thành công');
            $('#form-don-hang')[0].reset();
        }else{
            $('#title-modal').text('Vui lòng nhập đủ thông tin bắt buộc');
        }
    });
    $(document).on('click','.edit_state',function (e){
        e.preventDefault();
        $(this).parent().parent().empty('').html('<select id="edit_state_order" class="form-control"><option value="_none">- Không -</option><option value="dang_treo">Đang treo</option><option value="hoan_thanh">Hoàn Thành</option></select>');
    });
    $(document).on('change', '#edit_state_order',function (e){
        const state_order = $('#edit_state_order option').filter(':selected').val();
        const state_order_name = $('#edit_state_order option').filter(':selected').text();
        let nid = $(this).parent().parent('tr').find('.nid').data('nid');
        $.ajax({
            url: 'https://bepxuyenviet.minhhien.com.vn/quan-ly-trang-thai-don-hang',
            data: {
                state_order:state_order,
                nid:nid,
            },
            dataType: 'json',
            type: 'post',
            success: function(data){
                console.log(data);
            },
            error: function(r1, r2){
                console.log(r1);
            }
        });
        $(this).parent().empty().html(state_order_name+'<span class="float-right"><a href="#" class="edit_state"><i class="fas fa-pen"></i></a></span>')
    });
    $('.form-filter .chosen-container.chosen-container-single').addClass('form-control');

    $('.categories-product').owlCarousel({
        loop: true,
        autoplay: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 20,
        responsive: {
            0: {
                items: 2
            },
            360: {
                items: 2
            },
            480: {
                items: 2
            },
            768: {
                items: 4
            },
            1000: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    })

    // $('.attribute-widgets select').on('change',function(e){
    //     let id = $(this).val();
    //     console.log('before');
    //     console.log(id);
    //     $.ajax({
    //         url: Drupal.settings.basePath + '/views/ajax',
    //         type: 'post',
    //         data: {
    //             view_name: 'product_test',
    //             view_display_id: 'page_product_test_ajax', //your display id
    //             view_args: '', // your views argument(s)
    //         },
    //         dataType: 'json',
    //         success: function (response) {
    //             if (response[1] !== undefined) {
    //                 console.log(response[1].data); // do something with the view
    //             }
    //         }
    //     });
    // });
    var i;
    $('.gia-phu').on('click',function(e){
        e.preventDefault();
        var varyabale = $(location).attr('href').split('/');
        var path_str='';
        for (var i=3;i<varyabale.length;i++)
        {
          if(path_str==='')
          {
            path_str=varyabale[i];
          }
          else
          {
            path_str=path_str+'/'+varyabale[i];
          }
        }
        var tablinks = $('.gia-phu');
        let valueGiaPhu = $(this).data('value');
        let productID = $(this).data('id');
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        $(this).addClass(" active");
        let quantity = $(this).parent().next().find('.product-quantity').val();
        $(this).parent().next().next().attr("href", '/commerce/add-to-cart/'+productID+'/'+quantity+'?path='+path_str);

    });

    function handlehref(href,valueChange) {
        href = href.split('/');
        if (href.length > 4){
            href[href.length - 1] = valueChange;

        }else if(href.length == 4){
            href.push(valueChange);
        }
        console.log(href);
        return href.join('/');
    }


    $('.btn-increase').on('click', function(e){
        e.preventDefault();
        var $button = $(this);
        var oldValue = $button.prev().val();
        var newVal = parseFloat(oldValue) + 1;

        $button.prev().val(newVal);
        var href = $(this).parent().next().attr('href');

        handlehref(href,newVal);
        // if (pathAddToCart.length > 4){
        //     pathAddToCart[pathAddToCart.length - 1] = newVal;
        //
        // }else if(pathAddToCart.length == 4){
        //     pathAddToCart.push(newVal);
        // }
        // console.log(pathAddToCart);
        // $(this).parent().next().attr('href',pathAddToCart.join('/'));
        $(this).parent().next().attr('href',handlehref(href,newVal));
    });

    $('.btn-decrease').on('click', function(e){
        e.preventDefault();
        var $button = $(this);
        var oldValue = $button.next().val();
        // Don't allow decrementing below zero
        if (oldValue > 1) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 1;
        }
        $button.next().val(newVal);

        var href = $(this).parent().next().attr('href');
        $(this).parent().next().attr('href',handlehref(href,newVal));
    });

    $('.intro').css('max-height','none');
    var hIntro = $('.intro').height();
    $('.intro').css('max-height','350px');
    $('.read-more a').on('click',function(e){
        e.preventDefault();
        $('.intro').css('max-height','none');
        $('.fade-out').css('display','none');
        $(this).css('display','none');
    })
})

