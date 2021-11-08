$(document).ready(function () {
  "use strict";
  $(document).on('click','.album-thumb_1',function (e) {
    e.preventDefault();
    var link=$(location).attr('href');
    var link_edit=link.split('//');
    var duongdan=link_edit[1].split('/');

    var tid=$(this).find('.view-album').attr('tid');
    $('.all-album').css("display", "block");
    $('.overlay-dark').addClass('show');
    $.ajax({
      url: link_edit[0]+'//'+duongdan[0]+'/quan-ly-album',
      data:
        {
          tid : tid,
        },
      dataType: 'json',
      type: 'post',
      success: function(data){
        console.log(data);
        $('.all-album').html(data.html_new);
        var ab=$('.all-album .album-center .slide-wrapper-outer > div:nth-child(1)');
        var html_anh_dau=ab.html();
        ab.after('<div thutu="1" class="selected slide-wrapper">'+html_anh_dau+'</div>');
        ab.remove();
      },
      error: function(r1, r2){
        consoloe.log(r1);
      }
    });
  })
  $(document).on('click','.clickhienthi',function (e) {
    $('.clickhienthi').removeClass('current');
    if(!$(this).hasClass('current'))
    {
      $(this).addClass('current');
    }
    var thutu=$(this).attr('thutu');
    $('.all-album .album-center .slide-wrapper-outer .slide-wrapper').removeClass('slide-wrapper').addClass('slide-item');
    $('.all-album .album-center .slide-wrapper-outer > div:nth-child('+thutu+')').addClass('slide-wrapper').removeClass('slide-item');
  })
  $(document).on('click','.close-album', function () {
    $('.all-album').html('').css('display','none');
    $('.overlay-dark').removeClass('show');
  })
});
