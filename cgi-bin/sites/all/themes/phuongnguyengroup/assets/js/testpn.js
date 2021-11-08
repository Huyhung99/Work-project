jQuery(function () {
  'use strict';
  $(document).ready(function (){
    $( ".hien_pup_up" ).click(function() {
      $(".popup-cauhoi").removeClass("show");
      $(".modal-backdrop").removeClass("modal-backdrop").removeClass(" fade").removeClass("show");
      $(".admin-menu").removeClass("modal-open");
    });
    var giao_vien= document.getElementsByClassName("block-item-giao-vien");
    for (var i = 0; i < giao_vien.length; i++) {
      $(".block-item-giao-vien").click(function(){
          location.assign($(this).children("h3").children("a").attr('href'));
        }
      )
    }
  })
});

