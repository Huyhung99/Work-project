!function(m){var a=!0;m.flexslider=function(g,e){var h=m(g);"undefined"==typeof e.rtl&&"rtl"==m("html").attr("dir")&&(e.rtl=!0),h.vars=m.extend({},m.flexslider.defaults,e);var t,c=h.vars.namespace,S=window.navigator&&window.navigator.msPointerEnabled&&window.MSGesture,u=("ontouchstart"in window||S||window.DocumentTouch&&document instanceof DocumentTouch)&&h.vars.touch,l="click touchend MSPointerUp keyup",d="",x="vertical"===h.vars.direction,y=h.vars.reverse,b=0<h.vars.itemWidth,w="fade"===h.vars.animation,v=""!==h.vars.asNavFor,p={};m.data(g,"flexslider",h),p={init:function(){h.animating=!1,h.currentSlide=parseInt(h.vars.startAt?h.vars.startAt:0,10),isNaN(h.currentSlide)&&(h.currentSlide=0),h.animatingTo=h.currentSlide,h.atEnd=0===h.currentSlide||h.currentSlide===h.last,h.containerSelector=h.vars.selector.substr(0,h.vars.selector.search(" ")),h.slides=m(h.vars.selector,h),h.container=m(h.containerSelector,h),h.count=h.slides.length,h.syncExists=0<m(h.vars.sync).length,"slide"===h.vars.animation&&(h.vars.animation="swing"),h.prop=x?"top":h.vars.rtl?"marginRight":"marginLeft",h.args={},h.manualPause=!1,h.stopped=!1,h.started=!1,h.startTimeout=null,h.transitions=!h.vars.video&&!w&&h.vars.useCSS&&function(){var e=document.createElement("div"),t=["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"];for(var a in t)if(e.style[t[a]]!==undefined)return h.pfx=t[a].replace("Perspective","").toLowerCase(),h.prop="-"+h.pfx+"-transform",!0;return!1}(),h.isFirefox=-1<navigator.userAgent.toLowerCase().indexOf("firefox"),(h.ensureAnimationEnd="")!==h.vars.controlsContainer&&(h.controlsContainer=0<m(h.vars.controlsContainer).length&&m(h.vars.controlsContainer)),""!==h.vars.manualControls&&(h.manualControls=0<m(h.vars.manualControls).length&&m(h.vars.manualControls)),""!==h.vars.customDirectionNav&&(h.customDirectionNav=2===m(h.vars.customDirectionNav).length&&m(h.vars.customDirectionNav)),h.vars.randomize&&(h.slides.sort(function(){return Math.round(Math.random())-.5}),h.container.empty().append(h.slides)),h.doMath(),h.setup("init"),h.vars.controlNav&&p.controlNav.setup(),h.vars.directionNav&&p.directionNav.setup(),h.vars.keyboard&&(1===m(h.containerSelector).length||h.vars.multipleKeyboard)&&m(document).bind("keyup",function(e){var t=e.keyCode;if(!h.animating&&(39===t||37===t)){var a=h.vars.rtl?37===t?h.getTarget("next"):39===t&&h.getTarget("prev"):39===t?h.getTarget("next"):37===t&&h.getTarget("prev");h.flexAnimate(a,h.vars.pauseOnAction)}}),h.vars.mousewheel&&h.bind("mousewheel",function(e,t,a,n){e.preventDefault();var i=t<0?h.getTarget("next"):h.getTarget("prev");h.flexAnimate(i,h.vars.pauseOnAction)}),h.vars.pausePlay&&p.pausePlay.setup(),h.vars.slideshow&&h.vars.pauseInvisible&&p.pauseInvisible.init(),h.vars.slideshow&&(h.vars.pauseOnHover&&h.hover(function(){h.manualPlay||h.manualPause||h.pause()},function(){h.manualPause||h.manualPlay||h.stopped||h.play()}),h.vars.pauseInvisible&&p.pauseInvisible.isHidden()||(0<h.vars.initDelay?h.startTimeout=setTimeout(h.play,h.vars.initDelay):h.play())),v&&p.asNav.setup(),u&&h.vars.touch&&p.touch(),(!w||w&&h.vars.smoothHeight)&&m(window).bind("resize orientationchange focus",p.resize),h.find("img").attr("draggable","false"),setTimeout(function(){h.vars.start(h)},200)},asNav:{setup:function(){h.asNav=!0,h.animatingTo=Math.floor(h.currentSlide/h.move),h.currentItem=h.currentSlide,h.slides.removeClass(c+"active-slide").eq(h.currentItem).addClass(c+"active-slide"),S?(g._slider=h).slides.each(function(){var e=this;e._gesture=new MSGesture,(e._gesture.target=e).addEventListener("MSPointerDown",function(e){e.preventDefault(),e.currentTarget._gesture&&e.currentTarget._gesture.addPointer(e.pointerId)},!1),e.addEventListener("MSGestureTap",function(e){e.preventDefault();var t=m(this),a=t.index();m(h.vars.asNavFor).data("flexslider").animating||t.hasClass("active")||(h.direction=h.currentItem<a?"next":"prev",h.flexAnimate(a,h.vars.pauseOnAction,!1,!0,!0))})}):h.slides.on(l,function(e){e.preventDefault();var t=m(this),a=t.index();(h.vars.rtl?-1*(t.offset().right-m(h).scrollLeft()):t.offset().left-m(h).scrollLeft())<=0&&t.hasClass(c+"active-slide")?h.flexAnimate(h.getTarget("prev"),!0):m(h.vars.asNavFor).data("flexslider").animating||t.hasClass(c+"active-slide")||(h.direction=h.currentItem<a?"next":"prev",h.flexAnimate(a,h.vars.pauseOnAction,!1,!0,!0))})}},controlNav:{setup:function(){h.manualControls?p.controlNav.setupManual():p.controlNav.setupPaging()},setupPaging:function(){var e,t,a="thumbnails"===h.vars.controlNav?"control-thumbs":"control-paging",n=1;if(h.controlNavScaffold=m('<ol class="'+c+"control-nav "+c+a+'"></ol>'),1<h.pagingCount)for(var i=0;i<h.pagingCount;i++){if(t=h.slides.eq(i),undefined===t.attr("data-thumb-alt")&&t.attr("data-thumb-alt",""),e=m("<a></a>").attr("href","#").text(n),"thumbnails"===h.vars.controlNav&&(e=m("<img/>").attr("src",t.attr("data-thumb"))),""!==t.attr("data-thumb-alt")&&e.attr("alt",t.attr("data-thumb-alt")),"thumbnails"===h.vars.controlNav&&!0===h.vars.thumbCaptions){var r=t.attr("data-thumbcaption");if(""!==r&&undefined!==r){var s=m("<span></span>").addClass(c+"caption").text(r);e.append(s)}}var o=m("<li>");e.appendTo(o),o.append("</li>"),h.controlNavScaffold.append(o),n++}h.controlsContainer?m(h.controlsContainer).append(h.controlNavScaffold):h.append(h.controlNavScaffold),p.controlNav.set(),p.controlNav.active(),h.controlNavScaffold.delegate("a, img",l,function(e){if(e.preventDefault(),""===d||d===e.type){var t=m(this),a=h.controlNav.index(t);t.hasClass(c+"active")||(h.direction=a>h.currentSlide?"next":"prev",h.flexAnimate(a,h.vars.pauseOnAction))}""===d&&(d=e.type),p.setToClearWatchedEvent()})},setupManual:function(){h.controlNav=h.manualControls,p.controlNav.active(),h.controlNav.bind(l,function(e){if(e.preventDefault(),""===d||d===e.type){var t=m(this),a=h.controlNav.index(t);t.hasClass(c+"active")||(a>h.currentSlide?h.direction="next":h.direction="prev",h.flexAnimate(a,h.vars.pauseOnAction))}""===d&&(d=e.type),p.setToClearWatchedEvent()})},set:function(){var e="thumbnails"===h.vars.controlNav?"img":"a";h.controlNav=m("."+c+"control-nav li "+e,h.controlsContainer?h.controlsContainer:h)},active:function(){h.controlNav.removeClass(c+"active").eq(h.animatingTo).addClass(c+"active")},update:function(e,t){1<h.pagingCount&&"add"===e?h.controlNavScaffold.append(m('<li><a href="#">'+h.count+"</a></li>")):1===h.pagingCount?h.controlNavScaffold.find("li").remove():h.controlNav.eq(t).closest("li").remove(),p.controlNav.set(),1<h.pagingCount&&h.pagingCount!==h.controlNav.length?h.update(t,e):p.controlNav.active()}},directionNav:{setup:function(){var e=m('<ul class="'+c+'direction-nav"><li class="'+c+'nav-prev"><a class="'+c+'prev" href="#">'+h.vars.prevText+'</a></li><li class="'+c+'nav-next"><a class="'+c+'next" href="#">'+h.vars.nextText+"</a></li></ul>");h.customDirectionNav?h.directionNav=h.customDirectionNav:h.controlsContainer?(m(h.controlsContainer).append(e),h.directionNav=m("."+c+"direction-nav li a",h.controlsContainer)):(h.append(e),h.directionNav=m("."+c+"direction-nav li a",h)),p.directionNav.update(),h.directionNav.bind(l,function(e){var t;e.preventDefault(),""!==d&&d!==e.type||(t=m(this).hasClass(c+"next")?h.getTarget("next"):h.getTarget("prev"),h.flexAnimate(t,h.vars.pauseOnAction)),""===d&&(d=e.type),p.setToClearWatchedEvent()})},update:function(){var e=c+"disabled";1===h.pagingCount?h.directionNav.addClass(e).attr("tabindex","-1"):h.vars.animationLoop?h.directionNav.removeClass(e).removeAttr("tabindex"):0===h.animatingTo?h.directionNav.removeClass(e).filter("."+c+"prev").addClass(e).attr("tabindex","-1"):h.animatingTo===h.last?h.directionNav.removeClass(e).filter("."+c+"next").addClass(e).attr("tabindex","-1"):h.directionNav.removeClass(e).removeAttr("tabindex")}},pausePlay:{setup:function(){var e=m('<div class="'+c+'pauseplay"><a href="#"></a></div>');h.controlsContainer?(h.controlsContainer.append(e),h.pausePlay=m("."+c+"pauseplay a",h.controlsContainer)):(h.append(e),h.pausePlay=m("."+c+"pauseplay a",h)),p.pausePlay.update(h.vars.slideshow?c+"pause":c+"play"),h.pausePlay.bind(l,function(e){e.preventDefault(),""!==d&&d!==e.type||(m(this).hasClass(c+"pause")?(h.manualPause=!0,h.manualPlay=!1,h.pause()):(h.manualPause=!1,h.manualPlay=!0,h.play())),""===d&&(d=e.type),p.setToClearWatchedEvent()})},update:function(e){"play"===e?h.pausePlay.removeClass(c+"pause").addClass(c+"play").html(h.vars.playText):h.pausePlay.removeClass(c+"play").addClass(c+"pause").html(h.vars.pauseText)}},touch:function(){var i,r,s,o,l,d,e,n,c,u=!1,t=0,a=0,v=0;if(S){g.style.msTouchAction="none",g._gesture=new MSGesture,(g._gesture.target=g).addEventListener("MSPointerDown",function p(e){e.stopPropagation(),h.animating?e.preventDefault():(h.pause(),g._gesture.addPointer(e.pointerId),v=0,o=x?h.h:h.w,d=Number(new Date),s=b&&y&&h.animatingTo===h.last?0:b&&y?h.limit-(h.itemW+h.vars.itemMargin)*h.move*h.animatingTo:b&&h.currentSlide===h.last?h.limit:b?(h.itemW+h.vars.itemMargin)*h.move*h.currentSlide:y?(h.last-h.currentSlide+h.cloneOffset)*o:(h.currentSlide+h.cloneOffset)*o)},!1),g._slider=h,g.addEventListener("MSGestureChange",function m(e){e.stopPropagation();var t=e.target._slider;if(!t)return;var a=-e.translationX,n=-e.translationY;if(v+=x?n:a,l=(t.vars.rtl?-1:1)*v,u=x?Math.abs(v)<Math.abs(-a):Math.abs(v)<Math.abs(-n),e.detail===e.MSGESTURE_FLAG_INERTIA)return void setImmediate(function(){g._gesture.stop()});(!u||500<Number(new Date)-d)&&(e.preventDefault(),!w&&t.transitions&&(t.vars.animationLoop||(l=v/(0===t.currentSlide&&v<0||t.currentSlide===t.last&&0<v?Math.abs(v)/o+2:1)),t.setProps(s+l,"setTouch")))},!1),g.addEventListener("MSGestureEnd",function f(e){e.stopPropagation();var t=e.target._slider;if(!t)return;if(t.animatingTo===t.currentSlide&&!u&&null!==l){var a=y?-l:l,n=0<a?t.getTarget("next"):t.getTarget("prev");t.canAdvance(n)&&(Number(new Date)-d<550&&50<Math.abs(a)||Math.abs(a)>o/2)?t.flexAnimate(n,t.vars.pauseOnAction):w||t.flexAnimate(t.currentSlide,t.vars.pauseOnAction,!0)}s=l=r=i=null,v=0},!1)}else e=function(e){h.animating?e.preventDefault():!window.navigator.msPointerEnabled&&1!==e.touches.length||(h.pause(),o=x?h.h:h.w,d=Number(new Date),t=e.touches[0].pageX,a=e.touches[0].pageY,s=b&&y&&h.animatingTo===h.last?0:b&&y?h.limit-(h.itemW+h.vars.itemMargin)*h.move*h.animatingTo:b&&h.currentSlide===h.last?h.limit:b?(h.itemW+h.vars.itemMargin)*h.move*h.currentSlide:y?(h.last-h.currentSlide+h.cloneOffset)*o:(h.currentSlide+h.cloneOffset)*o,i=x?a:t,r=x?t:a,g.addEventListener("touchmove",n,!1),g.addEventListener("touchend",c,!1))},n=function(e){t=e.touches[0].pageX,a=e.touches[0].pageY,l=x?i-a:(h.vars.rtl?-1:1)*(i-t);(!(u=x?Math.abs(l)<Math.abs(t-r):Math.abs(l)<Math.abs(a-r))||500<Number(new Date)-d)&&(e.preventDefault(),!w&&h.transitions&&(h.vars.animationLoop||(l/=0===h.currentSlide&&l<0||h.currentSlide===h.last&&0<l?Math.abs(l)/o+2:1),h.setProps(s+l,"setTouch")))},c=function(e){if(g.removeEventListener("touchmove",n,!1),h.animatingTo===h.currentSlide&&!u&&null!==l){var t=y?-l:l,a=0<t?h.getTarget("next"):h.getTarget("prev");h.canAdvance(a)&&(Number(new Date)-d<550&&50<Math.abs(t)||Math.abs(t)>o/2)?h.flexAnimate(a,h.vars.pauseOnAction):w||h.flexAnimate(h.currentSlide,h.vars.pauseOnAction,!0)}g.removeEventListener("touchend",c,!1),s=l=r=i=null},g.addEventListener("touchstart",e,!1)},resize:function(){!h.animating&&h.is(":visible")&&(b||h.doMath(),w?p.smoothHeight():b?(h.slides.width(h.computedW),h.update(h.pagingCount),h.setProps()):x?(h.viewport.height(h.h),h.setProps(h.h,"setTotal")):(h.vars.smoothHeight&&p.smoothHeight(),h.newSlides.width(h.computedW),h.setProps(h.computedW,"setTotal")))},smoothHeight:function(e){if(!x||w){var t=w?h:h.viewport;e?t.animate({height:h.slides.eq(h.animatingTo).innerHeight()},e):t.innerHeight(h.slides.eq(h.animatingTo).innerHeight())}},sync:function(e){var t=m(h.vars.sync).data("flexslider"),a=h.animatingTo;switch(e){case"animate":t.flexAnimate(a,h.vars.pauseOnAction,!1,!0);break;case"play":t.playing||t.asNav||t.play();break;case"pause":t.pause()}},uniqueID:function(e){return e.filter("[id]").add(e.find("[id]")).each(function(){var e=m(this);e.attr("id",e.attr("id")+"_clone")}),e},pauseInvisible:{visProp:null,init:function(){var e=p.pauseInvisible.getHiddenProp();if(e){var t=e.replace(/[H|h]idden/,"")+"visibilitychange";document.addEventListener(t,function(){p.pauseInvisible.isHidden()?h.startTimeout?clearTimeout(h.startTimeout):h.pause():h.started?h.play():0<h.vars.initDelay?setTimeout(h.play,h.vars.initDelay):h.play()})}},isHidden:function(){var e=p.pauseInvisible.getHiddenProp();return!!e&&document[e]},getHiddenProp:function(){var e=["webkit","moz","ms","o"];if("hidden"in document)return"hidden";for(var t=0;t<e.length;t++)if(e[t]+"Hidden"in document)return e[t]+"Hidden";return null}},setToClearWatchedEvent:function(){clearTimeout(t),t=setTimeout(function(){d=""},3e3)}},h.flexAnimate=function(e,t,a,n,i){if(h.vars.animationLoop||e===h.currentSlide||(h.direction=e>h.currentSlide?"next":"prev"),v&&1===h.pagingCount&&(h.direction=h.currentItem<e?"next":"prev"),!h.animating&&(h.canAdvance(e,i)||a)&&h.is(":visible")){if(v&&n){var r=m(h.vars.asNavFor).data("flexslider");if(h.atEnd=0===e||e===h.count-1,r.flexAnimate(e,!0,!1,!0,i),h.direction=h.currentItem<e?"next":"prev",r.direction=h.direction,Math.ceil((e+1)/h.visible)-1===h.currentSlide||0===e)return h.currentItem=e,h.slides.removeClass(c+"active-slide").eq(e).addClass(c+"active-slide"),!1;h.currentItem=e,h.slides.removeClass(c+"active-slide").eq(e).addClass(c+"active-slide"),e=Math.floor(e/h.visible)}if(h.animating=!0,h.animatingTo=e,t&&h.pause(),h.vars.before(h),h.syncExists&&!i&&p.sync("animate"),h.vars.controlNav&&p.controlNav.active(),b||h.slides.removeClass(c+"active-slide").eq(e).addClass(c+"active-slide"),h.atEnd=0===e||e===h.last,h.vars.directionNav&&p.directionNav.update(),e===h.last&&(h.vars.end(h),h.vars.animationLoop||h.pause()),w)u?(h.slides.eq(h.currentSlide).css({opacity:0,zIndex:1}),h.slides.eq(e).css({opacity:1,zIndex:2}),h.wrapup(d)):(h.slides.eq(h.currentSlide).css({zIndex:1}).animate({opacity:0},h.vars.animationSpeed,h.vars.easing),h.slides.eq(e).css({zIndex:2}).animate({opacity:1},h.vars.animationSpeed,h.vars.easing,h.wrapup));else{var s,o,l,d=x?h.slides.filter(":first").height():h.computedW;o=b?(s=h.vars.itemMargin,(l=(h.itemW+s)*h.move*h.animatingTo)>h.limit&&1!==h.visible?h.limit:l):0===h.currentSlide&&e===h.count-1&&h.vars.animationLoop&&"next"!==h.direction?y?(h.count+h.cloneOffset)*d:0:h.currentSlide===h.last&&0===e&&h.vars.animationLoop&&"prev"!==h.direction?y?0:(h.count+1)*d:y?(h.count-1-e+h.cloneOffset)*d:(e+h.cloneOffset)*d,h.setProps(o,"",h.vars.animationSpeed),h.transitions?(h.vars.animationLoop&&h.atEnd||(h.animating=!1,h.currentSlide=h.animatingTo),h.container.unbind("webkitTransitionEnd transitionend"),h.container.bind("webkitTransitionEnd transitionend",function(){clearTimeout(h.ensureAnimationEnd),h.wrapup(d)}),clearTimeout(h.ensureAnimationEnd),h.ensureAnimationEnd=setTimeout(function(){h.wrapup(d)},h.vars.animationSpeed+100)):h.container.animate(h.args,h.vars.animationSpeed,h.vars.easing,function(){h.wrapup(d)})}h.vars.smoothHeight&&p.smoothHeight(h.vars.animationSpeed)}},h.wrapup=function(e){w||b||(0===h.currentSlide&&h.animatingTo===h.last&&h.vars.animationLoop?h.setProps(e,"jumpEnd"):h.currentSlide===h.last&&0===h.animatingTo&&h.vars.animationLoop&&h.setProps(e,"jumpStart")),h.animating=!1,h.currentSlide=h.animatingTo,h.vars.after(h)},h.animateSlides=function(){!h.animating&&a&&h.flexAnimate(h.getTarget("next"))},h.pause=function(){clearInterval(h.animatedSlides),h.animatedSlides=null,h.playing=!1,h.vars.pausePlay&&p.pausePlay.update("play"),h.syncExists&&p.sync("pause")},h.play=function(){h.playing&&clearInterval(h.animatedSlides),h.animatedSlides=h.animatedSlides||setInterval(h.animateSlides,h.vars.slideshowSpeed),h.started=h.playing=!0,h.vars.pausePlay&&p.pausePlay.update("pause"),h.syncExists&&p.sync("play")},h.stop=function(){h.pause(),h.stopped=!0},h.canAdvance=function(e,t){var a=v?h.pagingCount-1:h.last;return!!t||(v&&h.currentItem===h.count-1&&0===e&&"prev"===h.direction||(!v||0!==h.currentItem||e!==h.pagingCount-1||"next"===h.direction)&&((e!==h.currentSlide||v)&&(!!h.vars.animationLoop||(!h.atEnd||0!==h.currentSlide||e!==a||"next"===h.direction)&&(!h.atEnd||h.currentSlide!==a||0!==e||"next"!==h.direction))))},h.getTarget=function(e){return"next"===(h.direction=e)?h.currentSlide===h.last?0:h.currentSlide+1:0===h.currentSlide?h.last:h.currentSlide-1},h.setProps=function(e,t,a){var n,i=(n=e||(h.itemW+h.vars.itemMargin)*h.move*h.animatingTo,function(){if(b)return"setTouch"===t?e:y&&h.animatingTo===h.last?0:y?h.limit-(h.itemW+h.vars.itemMargin)*h.move*h.animatingTo:h.animatingTo===h.last?h.limit:n;switch(t){case"setTotal":return y?(h.count-1-h.currentSlide+h.cloneOffset)*e:(h.currentSlide+h.cloneOffset)*e;case"setTouch":return e;case"jumpEnd":return y?e:h.count*e;case"jumpStart":return y?h.count*e:e;default:return e}}()*(h.vars.rtl?1:-1)+"px");h.transitions&&(i=x?"translate3d(0,"+i+",0)":"translate3d("+parseInt(i)+"px,0,0)",a=a!==undefined?a/1e3+"s":"0s",h.container.css("-"+h.pfx+"-transition-duration",a),h.container.css("transition-duration",a)),h.args[h.prop]=i,!h.transitions&&a!==undefined||h.container.css(h.args),h.container.css("transform",i)},h.setup=function(e){var t,a;w?(h.vars.rtl?h.slides.css({width:"100%","float":"right",marginLeft:"-100%",position:"relative"}):h.slides.css({width:"100%","float":"left",marginRight:"-100%",position:"relative"}),"init"===e&&(u?h.slides.css({opacity:0,display:"block",webkitTransition:"opacity "+h.vars.animationSpeed/1e3+"s ease",zIndex:1}).eq(h.currentSlide).css({opacity:1,zIndex:2}):0==h.vars.fadeFirstSlide?h.slides.css({opacity:0,display:"block",zIndex:1}).eq(h.currentSlide).css({zIndex:2}).css({opacity:1}):h.slides.css({opacity:0,display:"block",zIndex:1}).eq(h.currentSlide).css({zIndex:2}).animate({opacity:1},h.vars.animationSpeed,h.vars.easing)),h.vars.smoothHeight&&p.smoothHeight()):("init"===e&&(h.viewport=m('<div class="'+c+'viewport"></div>').css({overflow:"hidden",position:"relative"}).appendTo(h).append(h.container),h.cloneCount=0,h.cloneOffset=0,y&&(a=m.makeArray(h.slides).reverse(),h.slides=m(a),h.container.empty().append(h.slides))),h.vars.animationLoop&&!b&&(h.cloneCount=2,h.cloneOffset=1,"init"!==e&&h.container.find(".clone").remove(),h.container.append(p.uniqueID(h.slides.first().clone().addClass("clone")).attr("aria-hidden","true")).prepend(p.uniqueID(h.slides.last().clone().addClass("clone")).attr("aria-hidden","true"))),h.newSlides=m(h.vars.selector,h),t=y?h.count-1-h.currentSlide+h.cloneOffset:h.currentSlide+h.cloneOffset,x&&!b?(h.container.height(200*(h.count+h.cloneCount)+"%").css("position","absolute").width("100%"),setTimeout(function(){h.newSlides.css({display:"block"}),h.doMath(),h.viewport.height(h.h),h.setProps(t*h.h,"init")},"init"===e?100:0)):(h.container.width(200*(h.count+h.cloneCount)+"%"),h.setProps(t*h.computedW,"init"),setTimeout(function(){h.doMath(),h.vars.rtl?h.newSlides.css({width:h.computedW,marginRight:h.computedM,"float":"right",display:"block"}):h.newSlides.css({width:h.computedW,marginRight:h.computedM,"float":"left",display:"block"}),h.vars.smoothHeight&&p.smoothHeight()},"init"===e?100:0)));b||h.slides.removeClass(c+"active-slide").eq(h.currentSlide).addClass(c+"active-slide"),h.vars.init(h)},h.doMath=function(){var e=h.slides.first(),t=h.vars.itemMargin,a=h.vars.minItems,n=h.vars.maxItems;h.w=h.viewport===undefined?h.width():h.viewport.width(),h.isFirefox&&(h.w=h.width()),h.h=e.height(),h.boxPadding=e.outerWidth()-e.width(),b?(h.itemT=h.vars.itemWidth+t,h.itemM=t,h.minW=a?a*h.itemT:h.w,h.maxW=n?n*h.itemT-t:h.w,h.itemW=h.minW>h.w?(h.w-t*(a-1))/a:h.maxW<h.w?(h.w-t*(n-1))/n:h.vars.itemWidth>h.w?h.w:h.vars.itemWidth,h.visible=Math.floor(h.w/h.itemW),h.move=0<h.vars.move&&h.vars.move<h.visible?h.vars.move:h.visible,h.pagingCount=Math.ceil((h.count-h.visible)/h.move+1),h.last=h.pagingCount-1,h.limit=1===h.pagingCount?0:h.vars.itemWidth>h.w?h.itemW*(h.count-1)+t*(h.count-1):(h.itemW+t)*h.count-h.w-t):(h.itemW=h.w,h.itemM=t,h.pagingCount=h.count,h.last=h.count-1),h.computedW=h.itemW-h.boxPadding,h.computedM=h.itemM},h.update=function(e,t){h.doMath(),b||(e<h.currentSlide?h.currentSlide+=1:e<=h.currentSlide&&0!==e&&(h.currentSlide-=1),h.animatingTo=h.currentSlide),h.vars.controlNav&&!h.manualControls&&("add"===t&&!b||h.pagingCount>h.controlNav.length?p.controlNav.update("add"):("remove"===t&&!b||h.pagingCount<h.controlNav.length)&&(b&&h.currentSlide>h.last&&(h.currentSlide-=1,h.animatingTo-=1),p.controlNav.update("remove",h.last))),h.vars.directionNav&&p.directionNav.update()},h.addSlide=function(e,t){var a=m(e);h.count+=1,h.last=h.count-1,x&&y?t!==undefined?h.slides.eq(h.count-t).after(a):h.container.prepend(a):t!==undefined?h.slides.eq(t).before(a):h.container.append(a),h.update(t,"add"),h.slides=m(h.vars.selector+":not(.clone)",h),h.setup(),h.vars.added(h)},h.removeSlide=function(e){var t=isNaN(e)?h.slides.index(m(e)):e;h.count-=1,h.last=h.count-1,isNaN(e)?m(e,h.slides).remove():x&&y?h.slides.eq(h.last).remove():h.slides.eq(e).remove(),h.doMath(),h.update(t,"remove"),h.slides=m(h.vars.selector+":not(.clone)",h),h.setup(),h.vars.removed(h)},p.init()},m(window).blur(function(e){a=!1}).focus(function(e){a=!0}),m.flexslider.defaults={namespace:"flex-",selector:".slides > li",animation:"fade",easing:"swing",direction:"horizontal",reverse:!1,animationLoop:!0,smoothHeight:!1,startAt:0,slideshow:!0,slideshowSpeed:7e3,animationSpeed:600,initDelay:0,randomize:!1,fadeFirstSlide:!0,thumbCaptions:!1,pauseOnAction:!0,pauseOnHover:!1,pauseInvisible:!0,useCSS:!0,touch:!0,video:!1,controlNav:!0,directionNav:!0,prevText:"Previous",nextText:"Next",keyboard:!0,multipleKeyboard:!1,mousewheel:!1,pausePlay:!1,pauseText:"Pause",playText:"Play",controlsContainer:"",manualControls:"",customDirectionNav:"",sync:"",asNavFor:"",itemWidth:0,itemMargin:0,minItems:1,maxItems:0,move:0,allowOneSlide:!0,isFirefox:!1,start:function(){},before:function(){},after:function(){},end:function(){},added:function(){},removed:function(){},init:function(){},rtl:!1},m.fn.flexslider=function(n){if(n===undefined&&(n={}),"object"==typeof n)return this.each(function(){var e=m(this),t=n.selector?n.selector:".slides > li",a=e.find(t);1===a.length&&!1===n.allowOneSlide||0===a.length?(a.fadeIn(400),n.start&&n.start(e)):e.data("flexslider")===undefined&&new m.flexslider(this,n)});var e=m(this).data("flexslider");switch(n){case"play":e.play();break;case"pause":e.pause();break;case"stop":e.stop();break;case"next":e.flexAnimate(e.getTarget("next"),!0);break;case"prev":case"previous":e.flexAnimate(e.getTarget("prev"),!0);break;default:"number"==typeof n&&e.flexAnimate(n,!0)}}}(jQuery);