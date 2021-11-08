var touch = !1,
  clickEv = "click";

function slider_product() {
  "use strict";
  $(".colpro_1_index-collection-product").length && $(".colpro_1_index-collection-product").owlCarousel({
    navigation: !0,
    pagination: !1,
    autoPlay: !1,
    items: 6,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    itemsDesktop: [1199, 5],
    itemsDesktopSmall: [991, 4],
    itemsTablet: [767, 3],
    itemsTabletSmall: [540, 2],
    itemsMobile: [360, 1],
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  }), $("#gallery_main_qs .qs-vertical-slider ").length && $("#gallery_main_qs .qs-vertical-slider").owlCarousel({
    navigation: !0,
    pagination: !1,
    items: 3,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 2],
    itemsTablet: [768, 2],
    itemsTabletSmall: [540, 1],
    itemsMobile: [360, 1],
    navigationText: ['<i class="fa fa-angle-left" title="Previous" data-toggle="tooltip" data-placement="top"></i>', '<i class="fa fa-angle-right" title="Next" data-toggle="tooltip" data-placement="top"></i>']
  }), $(".home1_protab2_item ").length && $(".home1_protab2_item ").owlCarousel({
    navigation: !0,
    pagination: !1,
    autoPlay: !1,
    items: 4,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [991, 3],
    itemsTablet: [767, 3],
    itemsTabletSmall: [600, 2],
    itemsMobile: [360, 1],
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  }), $(".index-galimg-content").length && $(".index-galimg-content").owlCarousel({
    navigation: !0,
    pagination: !1,
    autoPlay: !1,
    items: 2,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    itemsDesktop: [1199, 2],
    itemsDesktopSmall: [991, 2],
    itemsTablet: [767, 2],
    itemsTabletSmall: [540, 2],
    itemsMobile: [360, 2],
    itemsMobile: [292, 2],
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  }), $(".protab1_item").length && $(".protab1_item").owlCarousel({
    navigation: !0,
    pagination: !1,
    autoPlay: !1,
    items: 4,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [991, 3],
    itemsTablet: [767, 3],
    itemsTabletSmall: [600, 2],
    itemsMobile: [360, 1],
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  }), $(".related-body .related-content-inner").length && $(".related-body .related-content-inner").owlCarousel({
    navigation: !0,
    pagination: !1,
    autoPlay: !1,
    items: 6,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [991, 3],
    itemsTablet: [767, 3],
    itemsTabletSmall: [540, 2],
    itemsMobile: [360, 1],
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  }), $("#product #featuted-image").length && $("#product #featuted-image").owlCarousel({
    navigation: !0,
    pagination: !1,
    autoPlay: !1,
    items: 1,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    itemsDesktop: [1199, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [768, 1],
    itemsTabletSmall: [540, 1],
    itemsMobile: [360, 1],
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  })
}

function slider_blog() {
  "use strict";
  $(".related-article-body .related-content-inner").length && $(".related-article-body .related-content-inner").owlCarousel({
    navigation: !0,
    pagination: !1,
    autoPlay: !1,
    items: 4,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [991, 3],
    itemsTablet: [767, 3],
    itemsTabletSmall: [540, 2],
    itemsMobile: [360, 1],
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  }), $(".bansli_right .right_content").length && $(".bansli_right .right_content").owlCarousel({
    navigation: !0,
    pagination: !1,
    autoPlay: !1,
    items: 1,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    itemsDesktop: [1199, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [768, 1],
    itemsTabletSmall: [540, 1],
    itemsMobile: [360, 1],
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  })
}

function slideshow() {
  "use strict";
  $(".grid-slider").find("*").not(".owl-dots, .owl-dots button")
    .css("height", "100%"),
    $(".blog-items-front").owlCarousel({
      margin: 15,
      items: 3,
      autoplay: !0,
      loop: !0,
      dots: !1,
      nav: !1,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 2
        },
        768: {
          items: 3
        }
      }
    }),
    $(".related-products .rp-slider").owlCarousel({
      nav: !1,
      dots: !1,
      autoplay: !1,
      margin: 10,
      responsive: {
        0: {
          items: 2
        },
        500: {
          items: 4
        },
        1024: {
          items: 6
        }
      }
    }),
    $("#home_main-slider").owlCarousel({
      autoplay: !0,
      items: 1,
      loop: !0,
      dots: !0,
      nav: !1
    }), $(window).scroll(function() {
    var t = ($(document).height() - $(window).height() - $(window).scrollTop()) / 500;
    t <= .3 ? $(".hotlinefix").hide() : $(".hotlinefix ").show(), $(".hotlinefix ").css("opacity", t)
  })
}

function handleBlogGridList() {
  "use strict";
  $("#blog_goList").length && $("#blog_goList").on(clickEv, function(t) {
    $(this).parent().find("li").removeClass("active"), $(this).addClass("active"), $(".blog-items .article").removeClass("col-sm-6"), $(".blog-items .article").addClass("blog_List"), $(".blog-items .article").removeClass("blog_Grid")
  }), $("#blog_goGrid").length && $("#blog_goGrid").on(clickEv, function(t) {
    $(this).parent().find("li").removeClass("active"), $(this).addClass("active"), $(".blog-items .article").addClass("col-sm-6"), $(".blog-items .article").addClass("blog_Grid"), $(".blog-items .article").removeClass("blog_List")
  })
}

function handleDropdown() {
  "use strict";
  $(".dropdown-toggle").length && $(".dropdown-toggle").parent().on({
    mouseenter: function() {
      0 == touch && 767 < getWidthBrowser() && $(this).find(".dropdown-menu").stop(!0, !0).slideDown(300)
    },
    mouseleave: function() {
      0 == touch && 767 < getWidthBrowser() && $(this).find(".dropdown-menu").hide()
    }
  }), $("a.dropdown-toggle").on("click", function() {
    $(this).find(".dropdown-menu").slideToggle(300)
  }), $("nav .dropdown-menu").each(function() {
    $(this).find("li").last().addClass("last")
  }), $(".dropdown").on("click", function() {
    if (0 == touch && 767 < getWidthBrowser()) {
      var t = $(this).find(".dropdown-link").attr("href");
      window.location = t
    }
  }), $(".cart-link").on("click", function() {
    if (0 == touch && 767 < getWidthBrowser()) {
      var t = $(this).find(".dropdown-link").attr("href");
      window.location = t
    }
  })
}

function getWidthBrowser() {
  "use strict";
  var t;
  return "number" == typeof window.innerWidth ? t = window.innerWidth : document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight) ? t = document.documentElement.clientWidth : document.body && (document.body.clientWidth || document.body.clientHeight) && (t = document.body.clientWidth), t
}

function handleScrollTop() {
  "use strict";

  function a(t) {
    var e = $("#scroll-to-top"),
      i = $(".cart-float-right");
    "on" == t ? (i.addClass("on fadeInRight ").removeClass("off fadeOutRight"), e.addClass("on fadeInRight ").removeClass("off fadeOutRight")) : (i.addClass("off fadeOutRight animated").removeClass("on fadeInRight"), e.addClass("off fadeOutRight animated").removeClass("on fadeInRight"))
  }
  $(window).scroll(function() {
    var t = $(this).scrollTop(),
      e = $(this).height();
    if (0 < t) var i = t + e / 2;
    else i = 1;
    a(i < 1e3 && i < e ? "off" : "on")
  }), $("#scroll-to-top").on("click", function(t) {
    t.preventDefault(), $("body,html").animate({
      scrollTop: 0
    }, 800, "swing")
  })
}

function ModalNewsletter() {
  "use strict";
  $("#newsletter-popup").modal("toggle"), $(".nl-wraper-popup").addClass("animated");
  setTimeout(function() {
    $("#newsletter-popup").modal("hide")
  }, 2e4)
}

function checkcookie() {
  "use strict";
  $.cookie("mello-cookie", "deactive", {
    expires: 10
  })
}

function handleQuantity() {
  "use strict";
  $(".quantity-wrapper").length && ($(".quantity-wrapper").on(clickEv, ".qty-up", function() {
    var t = $(this).data("src");
    $(t).val(parseInt($(t).val()) + 1)
  }), $(".quantity-wrapper").on(clickEv, ".qty-down", function() {
    var t = $(this).data("src");
    1 < parseInt($(t).val()) && $(t).val(parseInt($(t).val()) - 1)
  }))
}

function colorwarches() {
  "use strict";
  jQuery(".swatch :radio").change(function() {
    var t = jQuery(this).closest(".swatch").attr("data-option-index"),
      e = jQuery(this).val();
    jQuery(this).closest("form").find(".single-option-selector").eq(t).val(e).trigger("change")
  })
}

function toggleTagsFilter() {
  "use strict";
  if (768 <= window.innerWidth) {
    var t = document.getElementById("showTagsFilter"),
      e = document.getElementById("tags-filter-content");
    null != t && (t.onclick = function() {
      classie.toggle(this, "closed"), classie.toggle(e, "tags-closed"), classie.has(this, "closed") ? $("#showTagsFilter").html("Filter <i class='fa fa-angle-down'></i>") : $("#showTagsFilter").html("Filter <i class='fa fa-angle-up'></i>")
    })
  }
}

function toggleLeftMenu() {
  "use strict";
  $("#showLeftPush").on("click", function() {
    $(".mobile-navigation").hasClass("active") ? ($(".mobile-navigation").removeClass("active"), $("#showLeftPush").html('<i class="fa fa-bars" aria-hidden="true"></i>')) : ($(".mobile-navigation").addClass("active"), $("#showLeftPush").html('<i class="fa fa-times" aria-hidden="true"></i>'))
  })
}

function showMenuMobile() {
  "use strict";
  $(".navigation_mobile .arrow").on("click", function() {
    "arrow class_test" == $(this).attr("class") ? ($(".navigation_mobile .arrow").removeClass("class_test"), $(".navigation_mobile").removeClass("active"), $(".navigation_mobile").find(".menu-mobile-container").hide("slow")) : ($(".navigation_mobile .arrow").removeClass("class_test"), $(this).addClass("class_test"), $(".navigation_mobile").each(function() {
      "arrow class_test" == $(this).find(".arrow").attr("class") ? ($(this).find(".menu-mobile-container").show("slow"), $(this).addClass("active")) : ($(this).find(".menu-mobile-container").hide("slow"), $(this).removeClass("active"))
    }))
  })
}

function show_sidebar() {
  "use strict";
  $(".collection-leftsidebar .sidebar-block").each(function(t) {
    var e = this;
    $(this).find(".show_sidebar_content").on("click", function() {
      $(this).hasClass("fa-caret-down") ? ($(this).removeClass("fa-caret-down"), $(this).addClass("fa-caret-up"), $(e).find(".sidebar-title").addClass("active"), $(e).find(".sidebar-content").show("slow")) : ($(this).addClass("fa-caret-down"), $(this).removeClass("fa-caret-up"), $(e).find(".sidebar-title").removeClass("active"), $(e).find(".sidebar-content").hide("slow"))
    })
  }), $(".filter-tag-group .tag-group").each(function(t) {
    var e = this;
    $(this).find(".show_filter_content").on("click", function() {
      "+" == $(this).html() ? ($(this).html("-"), $(e).find(".filter-title").addClass("active"), $(e).find(".filter-content").css("display", "block")) : ($(this).html("+"), $(e).find(".filter-title").removeClass("active"), $(e).find(".filter-content").css("display", "none"))
    })
  })
}

function showLightBox() {
  "use strict";
  var n = $("#lightbox");
  $('[data-target="#lightbox"]').on("click", function(t) {
    var e = $(this).find("img"),
      i = e.attr("src"),
      a = e.attr("alt"),
      o = {
        maxWidth: $(window).width() - 100,
        maxHeight: $(window).height() - 100
      };
    n.find(".close").addClass("hidden"), n.find("img").attr("src", i), n.find("img").attr("alt", a), n.find("img").css(o)
  }), n.on("shown.bs.modal", function(t) {
    var e = n.find("img");
    n.find(".modal-dialog").css({
      width: e.width()
    }), n.find(".close").removeClass("hidden")
  })
}

function clickTitleZoom() {
  "use strict";
  $(".image-title-zoom").on("click", function(t) {
    var e = $(this).attr("data-zoom");
    $("#" + e).click()
  })
}

function showTooltip() {
  "use strict";
  $('[data-toggle="tooltip"]').tooltip()
}
(function ($) {

  Drupal.behaviors.mymodule = {
    attach: function (context, settings) {
      $(window).on("ready", function(t) {
        slideshow(),
          showLightBox(),
          clickTitleZoom(),
          show_sidebar(),
          slider_product(),
          slider_blog(),
          handleDropdown(),
          handleScrollTop(),
          colorwarches(),
          showTooltip(),
          handleQuantity(),
          handleBlogGridList(),
          toggleTagsFilter(),
          toggleLeftMenu(),
          showMenuMobile()
      }), $(window).on("load", function() {
        ModalNewsletter(), $.cookie("mello-cookie", "active", {
          expires: 10
        })
      });
    }
  }
}(jQuery));
