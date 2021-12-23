$(document).ready(function () {
  var duong = $(location).attr('href');
  var duong_dan=duong.split('/');
  var bienchay=0;
  var chay=0;
  for (var i=0; i<(duong_dan.length); i++)
  {
    if(duong_dan[bienchay].trim()==='sparktechknife.com' || duong_dan[bienchay].trim()==='sparktechknife.com#')
    {
      chay=i;
    }
    bienchay++;
  }
  var tinh=1;
  var nar=false;
  if((bienchay>chay)&&(duong_dan[chay+1].trim()!=='')&&(duong_dan[chay+1].trim()!=='node')&&(duong_dan[chay+1].trim()!=='node#'))
  {
    tinh=4;
    nar=true;
  }
  var slider = tns({
    container: '.my-slider',
    items: tinh,
    slideBy: 'page',
    nav: nar,
    autoplay: true,
    speed: 400,
    loop: true,
    autoplayButtonOutput: false,
    mouseDrag: true,
  });
  $(document).on('click','.img-product', function () {
    var data_hinhanh = $(this).find('img').attr('data-hinhdanhpopup');
    $('.anh_product a').attr('href',data_hinhanh);
    $('.anh_product a img').attr('src',data_hinhanh);
  })
  $(document).on( "click",".quantity-counter span",function() {
    var n = $("input#edit-quantity").val();
    if($(this).text() === "+"){
      var r = parseInt(n) + 1
    } else{
      if(n == 1)
        return;
      var r = parseInt(n) - 1
    }
    $('input#edit-quantity').val(r);
  });
  $(document).on('click','li.nav-item a',function (e) {
    e.preventDefault();
    if(!$(this).closest('li').hasClass('active'))
    {
      var duong_dan = $(this).attr('href');
      duong_dan=duong_dan.replace('#','');
      $('.block_product_display li.nav-item').each(function () {
        $(this).removeClass('active');
      })
      $(this).closest('li').addClass('active');
      $('.product_body').each(function () {
        if($(this).attr('data-href')===duong_dan)
        {
          if(!$(this).hasClass('d-block'))
          {
            $(this).addClass('d-block');
          }
        }
        else {
          if($(this).hasClass('d-block'))
          {
            $(this).removeClass('d-block');
          }
        }
      })
    }
  });
})

