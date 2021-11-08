function alwaysUpdateZoom() {
}

$(document).ready(function () {
  setTimeout(function (){window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v8.0'
    });
  };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));},30*1000);
    function addItem(t) {
        $.ajax({
            type: "POST",
            url: "/cart/add.js",
            dataType: "json",
            data: $("#" + t).serialize(),
            success: Shopify.onSuccess,
            error: Shopify.onError
        })
    }

    alwaysUpdateZoom(), Shopify.onSuccess = function () {
        var o = $(".addtocart");
        o.removeAttr("disabled");
        var r = parseInt(jQuery('[name="quantity"]').val(), 10) || 1;
        $("html, body").animate({scrollTop: 0}, 250, "swing"), function () {
            $("#cart-animation").show();
            var t = o.outerWidth() / 2, e = o.outerHeight() / 2, i = o.offset().left + t, a = $(o).offset().top + e,
                n = $("#cart-target").outerWidth(), s = ($("#cart-target").outerHeight(), {
                    start: {x: i, y: a, angle: 190.012, length: .2},
                    end: {
                        x: $("#cart-target").offset().left + n / 2 - $("#cart-animation").outerWidth() / 2 - 4 - 18,
                        y: $("#cart-target").offset().top + n / 2 - $("#cart-animation").outerHeight() / 2 - 4 - 8,
                        angle: 90.012,
                        length: .5
                    }
                });
            $("#cart-animation").text(r).animate({path: new $.path.bezier(s)}, 1200, function () {
                $("#cart-animation").fadeOut(500, function () {
                    $(o).prop("disabled", !1);
                    var t = parseInt($("#cart-count").text()) + r;
                    $("#cart-count").text(t), $("#cart-target").addClass("has-items")
                })
            })
        }()
    }, Shopify.onError = function (XMLHttpRequest, textStatus) {
        var data = eval("(" + XMLHttpRequest.responseText + ")");
        data.message ? alert(data.message + "(" + data.status + "): " + data.description) : alert("Error : " + Shopify.fullMessagesFromErrors(data).join("; ") + "."), $(".addtocart").removeAttr("disabled")
    }, Shopify.fullMessagesFromErrors = function (t) {
        var a = [];
        return jQuery.each(t, function (i, t) {
            jQuery.each(t, function (t, e) {
                a.push(i + " " + e)
            })
        }), a
    }
}), jQuery(window).load(function () {
    1 < $(".slides li").size() && $(".flexslider").flexslider({
        animation: "slide",
        slideshow: !0,
        animationDuration: 700,
        slideshowSpeed: 6e3,
        animation: "fade",
        controlsContainer: ".flex-controls",
        controlNav: !1,
        keyboardNav: !0
    }).hover(function () {
        $(".flex-direction-nav").fadeIn()
    }, function () {
        $(".flex-direction-nav").fadeOut()
    }), $("select.loc_on_change").change(function () {
        if ("#" == $(this).attr("value")) return !1;
        window.location = $(this).attr("value")
    })
});
var switchImage = function (t, e, i) {
    jQuery(i).attr("src", t), 782 < $(window).width() && jQuery(i).parent().trigger("zoom.destroy").zoom({url: t.replace("_master", "")})
};

function addaffix(t) {
    992 <= $(window).innerWidth() ? 170 < t ? $("#top").hasClass("affix") || $("#top").addClass("affix").addClass("fadeInDown animated") : $("#top").hasClass("affix") && ($("#top").prev().remove(), $("#top").removeClass("affix").removeClass("fadeInDown animated")) : $("#top").removeClass("affix")
}

jQuery(document).ready(function (e) {

    if (e("#product .thumbs a").on("click", function (t) {
        t.preventDefault(), switchImage(e(this).attr("href"), null, e(".featured img")[0])
    }), e(".featured img").size() && 782 < e(window).width()) e(".featured img").attr("src").replace("_master", "");
    e(".flyout").hide(), e("#menu-toggle").on("click", function () {
        e(".flyout").slideToggle("fast")
    }), e(".sub-menu").hide(), e(".more").on("click", function () {
        e(this).nextAll("ul").slideToggle("fast"), e("i", this).toggleClass("fa-plus fa-minus")
    }), e('input[type="submit"], input.btn, button').on("click", function () {
        e(this).blur()
    }), e("li.dropdown").hover(function () {
        e(this).children(".dropdown").show(), e(this).children(".dropdown").stop(), e(this).children(".dropdown").animate({opacity: 1}, 200)
    }, function () {
        e(this).children(".dropdown").stop(), e(this).children(".dropdown").animate({opacity: 0}, 400, function () {
            e(this).hide()
        })
    }), e(window).scroll(function () {
        addaffix(e(this).scrollTop())
    }), e(window).resize(function () {
        addaffix(e(this).scrollTop())
    }), e(window).ready(function () {
        e(".navigation_mobile_1 .arrow_1").click(function () {
            "arrow_1 class_test" == e(this).attr("class") ? (e(".navigation_mobile_1 .arrow_1").removeClass("class_test"), e(".navigation_mobile_1").removeClass("active"), e(".navigation_mobile_1").find(".menu-mobile-container_1").hide("slow")) : (e(".navigation_mobile_1 .arrow_1").addClass("class_test"), e(".navigation_mobile_1").addClass("active"), e(".navigation_mobile_1").find(".menu-mobile-container_1").show("slow"))
        })
    })
  $(document).on('click','.btn-view-detail-order', function (e) {
    e.preventDefault();
    var $myTr = $(this).parent().parent(),
      $myIDorder = $(this).attr('data-value');

    if ($myTr.next().hasClass('chi-tiet-don-hang-row'))
    {
      $myTr.next().remove();
    }
    else
    {
      $.ajax({
          url: 'get-detail-order',
          data: {myOrder: $myIDorder},
          dataType: 'json',
          type: 'post',
          success: function (data) {
            $myTr.after(
              `<tr class="chi-tiet-don-hang-row"><td colspan="7">`+data.content+`</td>
                           </tr>`);
          },
          error: function (r1, r2) {
            alert(r1.responseText);
          }
        }
      );
    }
  })
}), function (s) {
    s.path = {};
    var r = function (t, e) {
        var i = e * Math.PI / 180, a = Math.cos(i), n = Math.sin(i);
        return [a * t[0] - n * t[1], n * t[0] + a * t[1]]
    }, d = function (t, e) {
        return [e * t[0], e * t[1]]
    }, h = function (t, e) {
        return [t[0] + e[0], t[1] + e[1]]
    }, l = function (t, e) {
        return [t[0] - e[0], t[1] - e[1]]
    };
    s.path.bezier = function (t, o) {
        t.start = s.extend({angle: 0, length: .3333}, t.start), t.end = s.extend({
            angle: 0,
            length: .3333
        }, t.end), this.p1 = [t.start.x, t.start.y], this.p4 = [t.end.x, t.end.y];
        var e = l(this.p4, this.p1), i = d(e, t.start.length), a = d(e, -1), n = d(a, t.end.length);
        i = r(i, t.start.angle), this.p2 = h(this.p1, i), n = r(n, t.end.angle), this.p3 = h(this.p4, n), this.f1 = function (t) {
            return t * t * t
        }, this.f2 = function (t) {
            return 3 * t * t * (1 - t)
        }, this.f3 = function (t) {
            return 3 * t * (1 - t) * (1 - t)
        }, this.f4 = function (t) {
            return (1 - t) * (1 - t) * (1 - t)
        }, this.css = function (t) {
            var e = this.f1(t), i = this.f2(t), a = this.f3(t), n = this.f4(t), s = {};
            return o && (s.prevX = this.x, s.prevY = this.y), s.x = this.x = this.p1[0] * e + this.p2[0] * i + this.p3[0] * a + this.p4[0] * n + .5 | 0, s.y = this.y = this.p1[1] * e + this.p2[1] * i + this.p3[1] * a + this.p4[1] * n + .5 | 0, s.left = s.x + "px", s.top = s.y + "px", s
        }
    }, s.path.arc = function (t, a) {
        for (var e in t) this[e] = t[e];
        for (this.dir = this.dir || 1; this.start > this.end && 0 < this.dir;) this.start -= 360;
        for (; this.start < this.end && this.dir < 0;) this.start += 360;
        this.css = function (t) {
            var e = (this.start * t + this.end * (1 - t)) * Math.PI / 180, i = {};
            return a && (i.prevX = this.x, i.prevY = this.y), i.x = this.x = Math.sin(e) * this.radius + this.center[0] + .5 | 0, i.y = this.y = Math.cos(e) * this.radius + this.center[1] + .5 | 0, i.left = i.x + "px", i.top = i.y + "px", i
        }
    }, s.fx.step.path = function (t) {
        var e = t.end.css(1 - t.pos);
        null != e.prevX && s.cssHooks.transform.set(t.elem, "rotate(" + Math.atan2(e.prevY - e.y, e.prevX - e.x) + ")"), t.elem.style.top = e.top, t.elem.style.left = e.left
    }

}(jQuery);

$(document).on('click','')


