jQuery(function () {
  'use strict';
  $(document).ready(function (){
    $( ".hien_pup_up" ).click(function() {
      $(".popup-cauhoi").removeClass("show");
      $(".modal-backdrop").removeClass("modal-backdrop").removeClass(" fade").removeClass("show");
      $(".admin-menu").removeClass("modal-open");
    });
  })
});

