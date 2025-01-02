! function(i) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], i) : "undefined" != typeof exports ? module.exports = i(require("jquery")) : i(jQuery)
}(function(a) {
    "use strict";
    var o, r = window.Slick || {};
    o = 0, (r = function(i, e) {
        var t = this;
        t.defaults = {
            accessibility: !0,
            adaptiveHeight: !1,
            appendArrows: a(i),
            appendDots: a(i),
            arrows: !0,
            asNavFor: null,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
            autoplay: !1,
            autoplaySpeed: 3e3,
            centerMode: !1,
            centerPadding: "50px",
            cssEase: "ease",
            customPaging: function(i, e) {
                return a('<button type="button" data-role="none" role="button" tabindex="0" />').text(e + 1)
            },
            dots: !1,
            dotsClass: "slick-dots",
            draggable: !0,
            easing: "linear",
            edgeFriction: .35,
            fade: !1,
            focusOnSelect: !1,
            infinite: !0,
            initialSlide: 0,
            lazyLoad: "ondemand",
            mobileFirst: !1,
            pauseOnHover: !0,
            pauseOnFocus: !0,
            pauseOnDotsHover: !1,
            respondTo: "window",
            responsive: null,
            rows: 1,
            rtl: !1,
            slide: "",
            slidesPerRow: 1,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            swipe: !0,
            swipeToSlide: !1,
            touchMove: !0,
            touchThreshold: 5,
            useCSS: !0,
            useTransform: !0,
            variableWidth: !1,
            vertical: !1,
            verticalSwiping: !1,
            waitForAnimate: !0,
            zIndex: 1e3
        }, t.initials = {
            animating: !1,
            dragging: !1,
            autoPlayTimer: null,
            currentDirection: 0,
            currentLeft: null,
            currentSlide: 0,
            direction: 1,
            $dots: null,
            listWidth: null,
            listHeight: null,
            loadIndex: 0,
            $nextArrow: null,
            $prevArrow: null,
            slideCount: null,
            slideWidth: null,
            $slideTrack: null,
            $slides: null,
            sliding: !1,
            slideOffset: 0,
            swipeLeft: null,
            $list: null,
            touchObject: {},
            transformsEnabled: !1,
            unslicked: !1
        }, a.extend(t, t.initials), t.activeBreakpoint = null, t.animType = null, t.animProp = null, t.breakpoints = [], t.breakpointSettings = [], t.cssTransitions = !1, t.focussed = !1, t.interrupted = !1, t.hidden = "hidden", t.paused = !0, t.positionProp = null, t.respondTo = null, t.rowCount = 1, t.shouldClick = !0, t.$slider = a(i), t.$slidesCache = null, t.transformType = null, t.transitionType = null, t.visibilityChange = "visibilitychange", t.windowWidth = 0, t.windowTimer = null, i = a(i).data("slick") || {}, t.options = a.extend({}, t.defaults, e, i), t.currentSlide = t.options.initialSlide, t.originalSettings = t.options, void 0 !== document.mozHidden ? (t.hidden = "mozHidden", t.visibilityChange = "mozvisibilitychange") : void 0 !== document.webkitHidden && (t.hidden = "webkitHidden", t.visibilityChange = "webkitvisibilitychange"), t.autoPlay = a.proxy(t.autoPlay, t), t.autoPlayClear = a.proxy(t.autoPlayClear, t), t.autoPlayIterator = a.proxy(t.autoPlayIterator, t), t.changeSlide = a.proxy(t.changeSlide, t), t.clickHandler = a.proxy(t.clickHandler, t), t.selectHandler = a.proxy(t.selectHandler, t), t.setPosition = a.proxy(t.setPosition, t), t.swipeHandler = a.proxy(t.swipeHandler, t), t.dragHandler = a.proxy(t.dragHandler, t), t.keyHandler = a.proxy(t.keyHandler, t), t.instanceUid = o++, t.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, t.registerBreakpoints(), t.init(!0)
    }).prototype.activateADA = function() {
        this.$slideTrack.find(".slick-active").attr({
            "aria-hidden": "false"
        }).find("a, input, button, select").attr({
            tabindex: "0"
        })
    }, r.prototype.addSlide = r.prototype.slickAdd = function(i, e, t) {
        var o = this;
        if ("boolean" == typeof e) t = e, e = null;
        else if (e < 0 || e >= o.slideCount) return !1;
        o.unload(), "number" == typeof e ? 0 === e && 0 === o.$slides.length ? a(i).appendTo(o.$slideTrack) : t ? a(i).insertBefore(o.$slides.eq(e)) : a(i).insertAfter(o.$slides.eq(e)) : !0 === t ? a(i).prependTo(o.$slideTrack) : a(i).appendTo(o.$slideTrack), o.$slides = o.$slideTrack.children(this.options.slide), o.$slideTrack.children(this.options.slide).detach(), o.$slideTrack.append(o.$slides), o.$slides.each(function(i, e) {
            a(e).attr("data-slick-index", i)
        }), o.$slidesCache = o.$slides, o.reinit()
    }, r.prototype.animateHeight = function() {
        var i, e = this;
        1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical && (i = e.$slides.eq(e.currentSlide).outerHeight(!0), e.$list.animate({
            height: i
        }, e.options.speed))
    }, r.prototype.animateSlide = function(i, e) {
        var t = {},
            o = this;
        o.animateHeight(), !0 === o.options.rtl && !1 === o.options.vertical && (i = -i), !1 === o.transformsEnabled ? !1 === o.options.vertical ? o.$slideTrack.animate({
            left: i
        }, o.options.speed, o.options.easing, e) : o.$slideTrack.animate({
            top: i
        }, o.options.speed, o.options.easing, e) : !1 === o.cssTransitions ? (!0 === o.options.rtl && (o.currentLeft = -o.currentLeft), a({
            animStart: o.currentLeft
        }).animate({
            animStart: i
        }, {
            duration: o.options.speed,
            easing: o.options.easing,
            step: function(i) {
                i = Math.ceil(i), !1 === o.options.vertical ? t[o.animType] = "translate(" + i + "px, 0px)" : t[o.animType] = "translate(0px," + i + "px)", o.$slideTrack.css(t)
            },
            complete: function() {
                e && e.call()
            }
        })) : (o.applyTransition(), i = Math.ceil(i), !1 === o.options.vertical ? t[o.animType] = "translate3d(" + i + "px, 0px, 0px)" : t[o.animType] = "translate3d(0px," + i + "px, 0px)", o.$slideTrack.css(t), e && setTimeout(function() {
            o.disableTransition(), e.call()
        }, o.options.speed))
    }, r.prototype.getNavTarget = function() {
        var i = this.options.asNavFor;
        return i && null !== i && (i = a(i).not(this.$slider)), i
    }, r.prototype.asNavFor = function(e) {
        var i = this.getNavTarget();
        null !== i && "object" == typeof i && i.each(function() {
            var i = a(this).slick("getSlick");
            i.unslicked || i.slideHandler(e, !0)
        })
    }, r.prototype.applyTransition = function(i) {
        var e = this,
            t = {};
        !1 === e.options.fade ? t[e.transitionType] = e.transformType + " " + e.options.speed + "ms " + e.options.cssEase : t[e.transitionType] = "opacity " + e.options.speed + "ms " + e.options.cssEase, (!1 === e.options.fade ? e.$slideTrack : e.$slides.eq(i)).css(t)
    }, r.prototype.autoPlay = function() {
        var i = this;
        i.autoPlayClear(), i.slideCount > i.options.slidesToShow && (i.autoPlayTimer = setInterval(i.autoPlayIterator, i.options.autoplaySpeed))
    }, r.prototype.autoPlayClear = function() {
        this.autoPlayTimer && clearInterval(this.autoPlayTimer)
    }, r.prototype.autoPlayIterator = function() {
        var i = this,
            e = i.currentSlide + i.options.slidesToScroll;
        i.paused || i.interrupted || i.focussed || (!1 === i.options.infinite && (1 === i.direction && i.currentSlide + 1 === i.slideCount - 1 ? i.direction = 0 : 0 === i.direction && (e = i.currentSlide - i.options.slidesToScroll, i.currentSlide - 1 == 0 && (i.direction = 1))), i.slideHandler(e))
    }, r.prototype.buildArrows = function() {
        var i = this;
        !0 === i.options.arrows && (i.$prevArrow = a(i.options.prevArrow).addClass("slick-arrow"), i.$nextArrow = a(i.options.nextArrow).addClass("slick-arrow"), i.slideCount > i.options.slidesToShow ? (i.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), i.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), i.htmlExpr.test(i.options.prevArrow) && i.$prevArrow.prependTo(i.options.appendArrows), i.htmlExpr.test(i.options.nextArrow) && i.$nextArrow.appendTo(i.options.appendArrows), !0 !== i.options.infinite && i.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : i.$prevArrow.add(i.$nextArrow).addClass("slick-hidden").attr({
            "aria-disabled": "true",
            tabindex: "-1"
        }))
    }, r.prototype.buildDots = function() {
        var i, e, t = this;
        if (!0 === t.options.dots && t.slideCount > t.options.slidesToShow) {
            for (t.$slider.addClass("slick-dotted"), e = a("<ul />").addClass(t.options.dotsClass), i = 0; i <= t.getDotCount(); i += 1) e.append(a("<li />").append(t.options.customPaging.call(this, t, i)));
            t.$dots = e.appendTo(t.options.appendDots), t.$dots.find("li").first().addClass("slick-active").attr("aria-hidden", "false")
        }
    }, r.prototype.buildOut = function() {
        var i = this;
        i.$slides = i.$slider.children(i.options.slide + ":not(.slick-cloned)").addClass("slick-slide"), i.slideCount = i.$slides.length, i.$slides.each(function(i, e) {
            a(e).attr("data-slick-index", i).data("originalStyling", a(e).attr("style") || "")
        }), i.$slider.addClass("slick-slider"), i.$slideTrack = 0 === i.slideCount ? a('<div class="slick-track"/>').appendTo(i.$slider) : i.$slides.wrapAll('<div class="slick-track"/>').parent(), i.$list = i.$slideTrack.wrap('<div aria-live="polite" class="slick-list"/>').parent(), i.$slideTrack.css("opacity", 0), !0 !== i.options.centerMode && !0 !== i.options.swipeToSlide || (i.options.slidesToScroll = 1), a("img[data-lazy]", i.$slider).not("[src]").addClass("slick-loading"), i.setupInfinite(), i.buildArrows(), i.buildDots(), i.updateDots(), i.setSlideClasses("number" == typeof i.currentSlide ? i.currentSlide : 0), !0 === i.options.draggable && i.$list.addClass("draggable")
    }, r.prototype.buildRows = function() {
        var i, e, t, o = this,
            s = document.createDocumentFragment(),
            n = o.$slider.children();
        if (1 < o.options.rows) {
            for (t = o.options.slidesPerRow * o.options.rows, e = Math.ceil(n.length / t), i = 0; i < e; i++) {
                for (var r = document.createElement("div"), l = 0; l < o.options.rows; l++) {
                    for (var d = document.createElement("div"), a = 0; a < o.options.slidesPerRow; a++) {
                        var c = i * t + (l * o.options.slidesPerRow + a);
                        n.get(c) && d.appendChild(n.get(c))
                    }
                    r.appendChild(d)
                }
                s.appendChild(r)
            }
            o.$slider.empty().append(s), o.$slider.children().children().children().css({
                width: 100 / o.options.slidesPerRow + "%",
                display: "inline-block"
            })
        }
    }, r.prototype.checkResponsive = function(i, e) {
        var t, o, s, n = this,
            r = !1,
            l = n.$slider.width(),
            d = window.innerWidth || a(window).width();
        if ("window" === n.respondTo ? s = d : "slider" === n.respondTo ? s = l : "min" === n.respondTo && (s = Math.min(d, l)), n.options.responsive && n.options.responsive.length && null !== n.options.responsive) {
            for (t in o = null, n.breakpoints) n.breakpoints.hasOwnProperty(t) && (!1 === n.originalSettings.mobileFirst ? s < n.breakpoints[t] && (o = n.breakpoints[t]) : s > n.breakpoints[t] && (o = n.breakpoints[t]));
            null !== o ? null !== n.activeBreakpoint && o === n.activeBreakpoint && !e || (n.activeBreakpoint = o, "unslick" === n.breakpointSettings[o] ? n.unslick(o) : (n.options = a.extend({}, n.originalSettings, n.breakpointSettings[o]), !0 === i && (n.currentSlide = n.options.initialSlide), n.refresh(i)), r = o) : null !== n.activeBreakpoint && (n.activeBreakpoint = null, n.options = n.originalSettings, !0 === i && (n.currentSlide = n.options.initialSlide), n.refresh(i), r = o), i || !1 === r || n.$slider.trigger("breakpoint", [n, r])
        }
    }, r.prototype.changeSlide = function(i, e) {
        var t, o = this,
            s = a(i.currentTarget);
        switch (s.is("a") && i.preventDefault(), s.is("li") || (s = s.closest("li")), t = o.slideCount % o.options.slidesToScroll != 0 ? 0 : (o.slideCount - o.currentSlide) % o.options.slidesToScroll, i.data.message) {
            case "previous":
                n = 0 == t ? o.options.slidesToScroll : o.options.slidesToShow - t, o.slideCount > o.options.slidesToShow && o.slideHandler(o.currentSlide - n, !1, e);
                break;
            case "next":
                n = 0 == t ? o.options.slidesToScroll : t, o.slideCount > o.options.slidesToShow && o.slideHandler(o.currentSlide + n, !1, e);
                break;
            case "index":
                var n = 0 === i.data.index ? 0 : i.data.index || s.index() * o.options.slidesToScroll;
                o.slideHandler(o.checkNavigable(n), !1, e), s.children().trigger("focus");
                break;
            default:
                return
        }
    }, r.prototype.checkNavigable = function(i) {
        var e = this.getNavigableIndexes(),
            t = 0;
        if (i > e[e.length - 1]) i = e[e.length - 1];
        else
            for (var o in e) {
                if (i < e[o]) {
                    i = t;
                    break
                }
                t = e[o]
            }
        return i
    }, r.prototype.cleanUpEvents = function() {
        var i = this;
        i.options.dots && null !== i.$dots && a("li", i.$dots).off("click.slick", i.changeSlide).off("mouseenter.slick", a.proxy(i.interrupt, i, !0)).off("mouseleave.slick", a.proxy(i.interrupt, i, !1)), i.$slider.off("focus.slick blur.slick"), !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow && i.$prevArrow.off("click.slick", i.changeSlide), i.$nextArrow && i.$nextArrow.off("click.slick", i.changeSlide)), i.$list.off("touchstart.slick mousedown.slick", i.swipeHandler), i.$list.off("touchmove.slick mousemove.slick", i.swipeHandler), i.$list.off("touchend.slick mouseup.slick", i.swipeHandler), i.$list.off("touchcancel.slick mouseleave.slick", i.swipeHandler), i.$list.off("click.slick", i.clickHandler), a(document).off(i.visibilityChange, i.visibility), i.cleanUpSlideEvents(), !0 === i.options.accessibility && i.$list.off("keydown.slick", i.keyHandler), !0 === i.options.focusOnSelect && a(i.$slideTrack).children().off("click.slick", i.selectHandler), a(window).off("orientationchange.slick.slick-" + i.instanceUid, i.orientationChange), a(window).off("resize.slick.slick-" + i.instanceUid, i.resize), a("[draggable!=true]", i.$slideTrack).off("dragstart", i.preventDefault), a(window).off("load.slick.slick-" + i.instanceUid, i.setPosition), a(document).off("ready.slick.slick-" + i.instanceUid, i.setPosition)
    }, r.prototype.cleanUpSlideEvents = function() {
        var i = this;
        i.$list.off("mouseenter.slick", a.proxy(i.interrupt, i, !0)), i.$list.off("mouseleave.slick", a.proxy(i.interrupt, i, !1))
    }, r.prototype.cleanUpRows = function() {
        var i;
        1 < this.options.rows && ((i = this.$slides.children().children()).removeAttr("style"), this.$slider.empty().append(i))
    }, r.prototype.clickHandler = function(i) {
        !1 === this.shouldClick && (i.stopImmediatePropagation(), i.stopPropagation(), i.preventDefault())
    }, r.prototype.destroy = function(i) {
        var e = this;
        e.autoPlayClear(), e.touchObject = {}, e.cleanUpEvents(), a(".slick-cloned", e.$slider).detach(), e.$dots && e.$dots.remove(), e.$prevArrow && e.$prevArrow.length && (e.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.remove()), e.$nextArrow && e.$nextArrow.length && (e.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.remove()), e.$slides && (e.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function() {
            a(this).attr("style", a(this).data("originalStyling"))
        }), e.$slideTrack.children(this.options.slide).detach(), e.$slideTrack.detach(), e.$list.detach(), e.$slider.append(e.$slides)), e.cleanUpRows(), e.$slider.removeClass("slick-slider"), e.$slider.removeClass("slick-initialized"), e.$slider.removeClass("slick-dotted"), e.unslicked = !0, i || e.$slider.trigger("destroy", [e])
    }, r.prototype.disableTransition = function(i) {
        var e = {};
        e[this.transitionType] = "", (!1 === this.options.fade ? this.$slideTrack : this.$slides.eq(i)).css(e)
    }, r.prototype.fadeSlide = function(i, e) {
        var t = this;
        !1 === t.cssTransitions ? (t.$slides.eq(i).css({
            zIndex: t.options.zIndex
        }), t.$slides.eq(i).animate({
            opacity: 1
        }, t.options.speed, t.options.easing, e)) : (t.applyTransition(i), t.$slides.eq(i).css({
            opacity: 1,
            zIndex: t.options.zIndex
        }), e && setTimeout(function() {
            t.disableTransition(i), e.call()
        }, t.options.speed))
    }, r.prototype.fadeSlideOut = function(i) {
        var e = this;
        !1 === e.cssTransitions ? e.$slides.eq(i).animate({
            opacity: 0,
            zIndex: e.options.zIndex - 2
        }, e.options.speed, e.options.easing) : (e.applyTransition(i), e.$slides.eq(i).css({
            opacity: 0,
            zIndex: e.options.zIndex - 2
        }))
    }, r.prototype.filterSlides = r.prototype.slickFilter = function(i) {
        var e = this;
        null !== i && (e.$slidesCache = e.$slides, e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.filter(i).appendTo(e.$slideTrack), e.reinit())
    }, r.prototype.focusHandler = function() {
        var t = this;
        t.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*:not(.slick-arrow)", function(i) {
            i.stopImmediatePropagation();
            var e = a(this);
            setTimeout(function() {
                t.options.pauseOnFocus && (t.focussed = e.is(":focus"), t.autoPlay())
            }, 0)
        })
    }, r.prototype.getCurrent = r.prototype.slickCurrentSlide = function() {
        return this.currentSlide
    }, r.prototype.getDotCount = function() {
        var i = this,
            e = 0,
            t = 0,
            o = 0;
        if (!0 === i.options.infinite)
            for (; e < i.slideCount;) ++o, e = t + i.options.slidesToScroll, t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
        else if (!0 === i.options.centerMode) o = i.slideCount;
        else if (i.options.asNavFor)
            for (; e < i.slideCount;) ++o, e = t + i.options.slidesToScroll, t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
        else o = 1 + Math.ceil((i.slideCount - i.options.slidesToShow) / i.options.slidesToScroll);
        return o - 1
    }, r.prototype.getLeft = function(i) {
        var e, t = this,
            o = 0;
        return t.slideOffset = 0, e = t.$slides.first().outerHeight(!0), !0 === t.options.infinite ? (t.slideCount > t.options.slidesToShow && (t.slideOffset = t.slideWidth * t.options.slidesToShow * -1, o = e * t.options.slidesToShow * -1), t.slideCount % t.options.slidesToScroll != 0 && i + t.options.slidesToScroll > t.slideCount && t.slideCount > t.options.slidesToShow && (o = i > t.slideCount ? (t.slideOffset = (t.options.slidesToShow - (i - t.slideCount)) * t.slideWidth * -1, (t.options.slidesToShow - (i - t.slideCount)) * e * -1) : (t.slideOffset = t.slideCount % t.options.slidesToScroll * t.slideWidth * -1, t.slideCount % t.options.slidesToScroll * e * -1))) : i + t.options.slidesToShow > t.slideCount && (t.slideOffset = (i + t.options.slidesToShow - t.slideCount) * t.slideWidth, o = (i + t.options.slidesToShow - t.slideCount) * e), t.slideCount <= t.options.slidesToShow && (o = t.slideOffset = 0), !0 === t.options.centerMode && !0 === t.options.infinite ? t.slideOffset += t.slideWidth * Math.floor(t.options.slidesToShow / 2) - t.slideWidth : !0 === t.options.centerMode && (t.slideOffset = 0, t.slideOffset += t.slideWidth * Math.floor(t.options.slidesToShow / 2)), e = !1 === t.options.vertical ? i * t.slideWidth * -1 + t.slideOffset : i * e * -1 + o, !0 === t.options.variableWidth && (o = t.slideCount <= t.options.slidesToShow || !1 === t.options.infinite ? t.$slideTrack.children(".slick-slide").eq(i) : t.$slideTrack.children(".slick-slide").eq(i + t.options.slidesToShow), e = !0 === t.options.rtl ? o[0] ? -1 * (t.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, !0 === t.options.centerMode && (o = t.slideCount <= t.options.slidesToShow || !1 === t.options.infinite ? t.$slideTrack.children(".slick-slide").eq(i) : t.$slideTrack.children(".slick-slide").eq(i + t.options.slidesToShow + 1), e = !0 === t.options.rtl ? o[0] ? -1 * (t.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, e += (t.$list.width() - o.outerWidth()) / 2)), e
    }, r.prototype.getOption = r.prototype.slickGetOption = function(i) {
        return this.options[i]
    }, r.prototype.getNavigableIndexes = function() {
        for (var i = this, e = 0, t = 0, o = [], s = !1 === i.options.infinite ? i.slideCount : (e = -1 * i.options.slidesToScroll, t = -1 * i.options.slidesToScroll, 2 * i.slideCount); e < s;) o.push(e), e = t + i.options.slidesToScroll, t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
        return o
    }, r.prototype.getSlick = function() {
        return this
    }, r.prototype.getSlideCount = function() {
        var t, o = this,
            s = !0 === o.options.centerMode ? o.slideWidth * Math.floor(o.options.slidesToShow / 2) : 0;
        return !0 === o.options.swipeToSlide ? (o.$slideTrack.find(".slick-slide").each(function(i, e) {
            if (e.offsetLeft - s + a(e).outerWidth() / 2 > -1 * o.swipeLeft) return t = e, !1
        }), Math.abs(a(t).attr("data-slick-index") - o.currentSlide) || 1) : o.options.slidesToScroll
    }, r.prototype.goTo = r.prototype.slickGoTo = function(i, e) {
        this.changeSlide({
            data: {
                message: "index",
                index: parseInt(i)
            }
        }, e)
    }, r.prototype.init = function(i) {
        var e = this;
        a(e.$slider).hasClass("slick-initialized") || (a(e.$slider).addClass("slick-initialized"), e.buildRows(), e.buildOut(), e.setProps(), e.startLoad(), e.loadSlider(), e.initializeEvents(), e.updateArrows(), e.updateDots(), e.checkResponsive(!0), e.focusHandler()), i && e.$slider.trigger("init", [e]), !0 === e.options.accessibility && e.initADA(), e.options.autoplay && (e.paused = !1, e.autoPlay())
    }, r.prototype.initADA = function() {
        var e = this;
        e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({
            "aria-hidden": "true",
            tabindex: "-1"
        }).find("a, input, button, select").attr({
            tabindex: "-1"
        }), e.$slideTrack.attr("role", "listbox"), e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function(i) {
            a(this).attr({
                role: "option",
                "aria-describedby": "slick-slide" + e.instanceUid + i
            })
        }), null !== e.$dots && e.$dots.attr("role", "tablist").find("li").each(function(i) {
            a(this).attr({
                role: "presentation",
                "aria-selected": "false",
                "aria-controls": "navigation" + e.instanceUid + i,
                id: "slick-slide" + e.instanceUid + i
            })
        }).first().attr("aria-selected", "true").end().find("button").attr("role", "button").end().closest("div").attr("role", "toolbar"), e.activateADA()
    }, r.prototype.initArrowEvents = function() {
        var i = this;
        !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.off("click.slick").on("click.slick", {
            message: "previous"
        }, i.changeSlide), i.$nextArrow.off("click.slick").on("click.slick", {
            message: "next"
        }, i.changeSlide))
    }, r.prototype.initDotEvents = function() {
        var i = this;
        !0 === i.options.dots && i.slideCount > i.options.slidesToShow && a("li", i.$dots).on("click.slick", {
            message: "index"
        }, i.changeSlide), !0 === i.options.dots && !0 === i.options.pauseOnDotsHover && a("li", i.$dots).on("mouseenter.slick", a.proxy(i.interrupt, i, !0)).on("mouseleave.slick", a.proxy(i.interrupt, i, !1))
    }, r.prototype.initSlideEvents = function() {
        var i = this;
        i.options.pauseOnHover && (i.$list.on("mouseenter.slick", a.proxy(i.interrupt, i, !0)), i.$list.on("mouseleave.slick", a.proxy(i.interrupt, i, !1)))
    }, r.prototype.initializeEvents = function() {
        var i = this;
        i.initArrowEvents(), i.initDotEvents(), i.initSlideEvents(), i.$list.on("touchstart.slick mousedown.slick", {
            action: "start"
        }, i.swipeHandler), i.$list.on("touchmove.slick mousemove.slick", {
            action: "move"
        }, i.swipeHandler), i.$list.on("touchend.slick mouseup.slick", {
            action: "end"
        }, i.swipeHandler), i.$list.on("touchcancel.slick mouseleave.slick", {
            action: "end"
        }, i.swipeHandler), i.$list.on("click.slick", i.clickHandler), a(document).on(i.visibilityChange, a.proxy(i.visibility, i)), !0 === i.options.accessibility && i.$list.on("keydown.slick", i.keyHandler), !0 === i.options.focusOnSelect && a(i.$slideTrack).children().on("click.slick", i.selectHandler), a(window).on("orientationchange.slick.slick-" + i.instanceUid, a.proxy(i.orientationChange, i)), a(window).on("resize.slick.slick-" + i.instanceUid, a.proxy(i.resize, i)), a("[draggable!=true]", i.$slideTrack).on("dragstart", i.preventDefault), a(window).on("load.slick.slick-" + i.instanceUid, i.setPosition), a(document).on("ready.slick.slick-" + i.instanceUid, i.setPosition)
    }, r.prototype.initUI = function() {
        var i = this;
        !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.show(), i.$nextArrow.show()), !0 === i.options.dots && i.slideCount > i.options.slidesToShow && i.$dots.show()
    }, r.prototype.keyHandler = function(i) {
        var e = this;
        i.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === i.keyCode && !0 === e.options.accessibility ? e.changeSlide({
            data: {
                message: !0 === e.options.rtl ? "next" : "previous"
            }
        }) : 39 === i.keyCode && !0 === e.options.accessibility && e.changeSlide({
            data: {
                message: !0 === e.options.rtl ? "previous" : "next"
            }
        }))
    }, r.prototype.lazyLoad = function() {
        var i, e, o = this;

        function t(i) {
            a("img[data-lazy]", i).each(function() {
                var i = a(this),
                    e = a(this).attr("data-lazy"),
                    t = document.createElement("img");
                t.onload = function() {
                    i.animate({
                        opacity: 0
                    }, 100, function() {
                        i.attr("src", e).animate({
                            opacity: 1
                        }, 200, function() {
                            i.removeAttr("data-lazy").removeClass("slick-loading")
                        }), o.$slider.trigger("lazyLoaded", [o, i, e])
                    })
                }, t.onerror = function() {
                    i.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), o.$slider.trigger("lazyLoadError", [o, i, e])
                }, t.src = e
            })
        }!0 === o.options.centerMode ? e = !0 === o.options.infinite ? (i = o.currentSlide + (o.options.slidesToShow / 2 + 1)) + o.options.slidesToShow + 2 : (i = Math.max(0, o.currentSlide - (o.options.slidesToShow / 2 + 1)), o.options.slidesToShow / 2 + 1 + 2 + o.currentSlide) : (i = o.options.infinite ? o.options.slidesToShow + o.currentSlide : o.currentSlide, e = Math.ceil(i + o.options.slidesToShow), !0 === o.options.fade && (0 < i && i--, e <= o.slideCount && e++)), t(o.$slider.find(".slick-slide").slice(i, e)), o.slideCount <= o.options.slidesToShow ? t(o.$slider.find(".slick-slide")) : o.currentSlide >= o.slideCount - o.options.slidesToShow ? t(o.$slider.find(".slick-cloned").slice(0, o.options.slidesToShow)) : 0 === o.currentSlide && t(o.$slider.find(".slick-cloned").slice(-1 * o.options.slidesToShow))
    }, r.prototype.loadSlider = function() {
        var i = this;
        i.setPosition(), i.$slideTrack.css({
            opacity: 1
        }), i.$slider.removeClass("slick-loading"), i.initUI(), "progressive" === i.options.lazyLoad && i.progressiveLazyLoad()
    }, r.prototype.next = r.prototype.slickNext = function() {
        this.changeSlide({
            data: {
                message: "next"
            }
        })
    }, r.prototype.orientationChange = function() {
        this.checkResponsive(), this.setPosition()
    }, r.prototype.pause = r.prototype.slickPause = function() {
        this.autoPlayClear(), this.paused = !0
    }, r.prototype.play = r.prototype.slickPlay = function() {
        var i = this;
        i.autoPlay(), i.options.autoplay = !0, i.paused = !1, i.focussed = !1, i.interrupted = !1
    }, r.prototype.postSlide = function(i) {
        var e = this;
        e.unslicked || (e.$slider.trigger("afterChange", [e, i]), e.animating = !1, e.setPosition(), e.swipeLeft = null, e.options.autoplay && e.autoPlay(), !0 === e.options.accessibility && e.initADA())
    }, r.prototype.prev = r.prototype.slickPrev = function() {
        this.changeSlide({
            data: {
                message: "previous"
            }
        })
    }, r.prototype.preventDefault = function(i) {
        i.preventDefault()
    }, r.prototype.progressiveLazyLoad = function(i) {
        i = i || 1;
        var e, t, o = this,
            s = a("img[data-lazy]", o.$slider);
        s.length ? (e = s.first(), t = e.attr("data-lazy"), (s = document.createElement("img")).onload = function() {
            e.attr("src", t).removeAttr("data-lazy").removeClass("slick-loading"), !0 === o.options.adaptiveHeight && o.setPosition(), o.$slider.trigger("lazyLoaded", [o, e, t]), o.progressiveLazyLoad()
        }, s.onerror = function() {
            i < 3 ? setTimeout(function() {
                o.progressiveLazyLoad(i + 1)
            }, 500) : (e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), o.$slider.trigger("lazyLoadError", [o, e, t]), o.progressiveLazyLoad())
        }, s.src = t) : o.$slider.trigger("allImagesLoaded", [o])
    }, r.prototype.refresh = function(i) {
        var e = this,
            t = e.slideCount - e.options.slidesToShow;
        !e.options.infinite && e.currentSlide > t && (e.currentSlide = t), e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0), t = e.currentSlide, e.destroy(!0), a.extend(e, e.initials, {
            currentSlide: t
        }), e.init(), i || e.changeSlide({
            data: {
                message: "index",
                index: t
            }
        }, !1)
    }, r.prototype.registerBreakpoints = function() {
        var i, e, t, o = this,
            s = o.options.responsive || null;
        if ("array" === a.type(s) && s.length) {
            for (i in o.respondTo = o.options.respondTo || "window", s)
                if (t = o.breakpoints.length - 1, e = s[i].breakpoint, s.hasOwnProperty(i)) {
                    for (; 0 <= t;) o.breakpoints[t] && o.breakpoints[t] === e && o.breakpoints.splice(t, 1), t--;
                    o.breakpoints.push(e), o.breakpointSettings[e] = s[i].settings
                }
            o.breakpoints.sort(function(i, e) {
                return o.options.mobileFirst ? i - e : e - i
            })
        }
    }, r.prototype.reinit = function() {
        var i = this;
        i.$slides = i.$slideTrack.children(i.options.slide).addClass("slick-slide"), i.slideCount = i.$slides.length, i.currentSlide >= i.slideCount && 0 !== i.currentSlide && (i.currentSlide = i.currentSlide - i.options.slidesToScroll), i.slideCount <= i.options.slidesToShow && (i.currentSlide = 0), i.registerBreakpoints(), i.setProps(), i.setupInfinite(), i.buildArrows(), i.updateArrows(), i.initArrowEvents(), i.buildDots(), i.updateDots(), i.initDotEvents(), i.cleanUpSlideEvents(), i.initSlideEvents(), i.checkResponsive(!1, !0), !0 === i.options.focusOnSelect && a(i.$slideTrack).children().on("click.slick", i.selectHandler), i.setSlideClasses("number" == typeof i.currentSlide ? i.currentSlide : 0), i.setPosition(), i.focusHandler(), i.paused = !i.options.autoplay, i.autoPlay(), i.$slider.trigger("reInit", [i])
    }, r.prototype.resize = function() {
        var i = this;
        a(window).width() !== i.windowWidth && (clearTimeout(i.windowDelay), i.windowDelay = window.setTimeout(function() {
            i.windowWidth = a(window).width(), i.checkResponsive(), i.unslicked || i.setPosition()
        }, 50))
    }, r.prototype.removeSlide = r.prototype.slickRemove = function(i, e, t) {
        var o = this;
        if (i = "boolean" == typeof i ? !0 === (e = i) ? 0 : o.slideCount - 1 : !0 === e ? --i : i, o.slideCount < 1 || i < 0 || i > o.slideCount - 1) return !1;
        o.unload(), (!0 === t ? o.$slideTrack.children() : o.$slideTrack.children(this.options.slide).eq(i)).remove(), o.$slides = o.$slideTrack.children(this.options.slide), o.$slideTrack.children(this.options.slide).detach(), o.$slideTrack.append(o.$slides), o.$slidesCache = o.$slides, o.reinit()
    }, r.prototype.setCSS = function(i) {
        var e, t, o = this,
            s = {};
        !0 === o.options.rtl && (i = -i), e = "left" == o.positionProp ? Math.ceil(i) + "px" : "0px", t = "top" == o.positionProp ? Math.ceil(i) + "px" : "0px", s[o.positionProp] = i, !1 === o.transformsEnabled || (!(s = {}) === o.cssTransitions ? s[o.animType] = "translate(" + e + ", " + t + ")" : s[o.animType] = "translate3d(" + e + ", " + t + ", 0px)"), o.$slideTrack.css(s)
    }, r.prototype.setDimensions = function() {
        var i = this;
        !1 === i.options.vertical ? !0 === i.options.centerMode && i.$list.css({
            padding: "0px " + i.options.centerPadding
        }) : (i.$list.height(i.$slides.first().outerHeight(!0) * i.options.slidesToShow), !0 === i.options.centerMode && i.$list.css({
            padding: i.options.centerPadding + " 0px"
        })), i.listWidth = i.$list.width(), i.listHeight = i.$list.height(), !1 === i.options.vertical && !1 === i.options.variableWidth ? (i.slideWidth = Math.ceil(i.listWidth / i.options.slidesToShow), i.$slideTrack.width(Math.ceil(i.slideWidth * i.$slideTrack.children(".slick-slide").length))) : !0 === i.options.variableWidth ? i.$slideTrack.width(5e3 * i.slideCount) : (i.slideWidth = Math.ceil(i.listWidth), i.$slideTrack.height(Math.ceil(i.$slides.first().outerHeight(!0) * i.$slideTrack.children(".slick-slide").length)));
        var e = i.$slides.first().outerWidth(!0) - i.$slides.first().width();
        !1 === i.options.variableWidth && i.$slideTrack.children(".slick-slide").width(i.slideWidth - e)
    }, r.prototype.setFade = function() {
        var t, o = this;
        o.$slides.each(function(i, e) {
            t = o.slideWidth * i * -1, !0 === o.options.rtl ? a(e).css({
                position: "relative",
                right: t,
                top: 0,
                zIndex: o.options.zIndex - 2,
                opacity: 0
            }) : a(e).css({
                position: "relative",
                left: t,
                top: 0,
                zIndex: o.options.zIndex - 2,
                opacity: 0
            })
        }), o.$slides.eq(o.currentSlide).css({
            zIndex: o.options.zIndex - 1,
            opacity: 1
        })
    }, r.prototype.setHeight = function() {
        var i, e = this;
        1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical && (i = e.$slides.eq(e.currentSlide).outerHeight(!0), e.$list.css("height", i))
    }, r.prototype.setOption = r.prototype.slickSetOption = function() {
        var i, e, t, o, s, n = this,
            r = !1;
        if ("object" === a.type(arguments[0]) ? (t = arguments[0], r = arguments[1], s = "multiple") : "string" === a.type(arguments[0]) && (t = arguments[0], o = arguments[1], r = arguments[2], "responsive" === arguments[0] && "array" === a.type(arguments[1]) ? s = "responsive" : void 0 !== arguments[1] && (s = "single")), "single" === s) n.options[t] = o;
        else if ("multiple" === s) a.each(t, function(i, e) {
            n.options[i] = e
        });
        else if ("responsive" === s)
            for (e in o)
                if ("array" !== a.type(n.options.responsive)) n.options.responsive = [o[e]];
                else {
                    for (i = n.options.responsive.length - 1; 0 <= i;) n.options.responsive[i].breakpoint === o[e].breakpoint && n.options.responsive.splice(i, 1), i--;
                    n.options.responsive.push(o[e])
                }
        r && (n.unload(), n.reinit())
    }, r.prototype.setPosition = function() {
        var i = this;
        i.setDimensions(), i.setHeight(), !1 === i.options.fade ? i.setCSS(i.getLeft(i.currentSlide)) : i.setFade(), i.$slider.trigger("setPosition", [i])
    }, r.prototype.setProps = function() {
        var i = this,
            e = document.body.style;
        i.positionProp = !0 === i.options.vertical ? "top" : "left", "top" === i.positionProp ? i.$slider.addClass("slick-vertical") : i.$slider.removeClass("slick-vertical"), void 0 === e.WebkitTransition && void 0 === e.MozTransition && void 0 === e.msTransition || !0 === i.options.useCSS && (i.cssTransitions = !0), i.options.fade && ("number" == typeof i.options.zIndex ? i.options.zIndex < 3 && (i.options.zIndex = 3) : i.options.zIndex = i.defaults.zIndex), void 0 !== e.OTransform && (i.animType = "OTransform", i.transformType = "-o-transform", i.transitionType = "OTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (i.animType = !1)), void 0 !== e.MozTransform && (i.animType = "MozTransform", i.transformType = "-moz-transform", i.transitionType = "MozTransition", void 0 === e.perspectiveProperty && void 0 === e.MozPerspective && (i.animType = !1)), void 0 !== e.webkitTransform && (i.animType = "webkitTransform", i.transformType = "-webkit-transform", i.transitionType = "webkitTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (i.animType = !1)), void 0 !== e.msTransform && (i.animType = "msTransform", i.transformType = "-ms-transform", i.transitionType = "msTransition", void 0 === e.msTransform && (i.animType = !1)), void 0 !== e.transform && !1 !== i.animType && (i.animType = "transform", i.transformType = "transform", i.transitionType = "transition"), i.transformsEnabled = i.options.useTransform && null !== i.animType && !1 !== i.animType
    }, r.prototype.setSlideClasses = function(i) {
        var e, t, o = this,
            s = o.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true");
        o.$slides.eq(i).addClass("slick-current"), !0 === o.options.centerMode ? (t = Math.floor(o.options.slidesToShow / 2), !0 === o.options.infinite && (t <= i && i <= o.slideCount - 1 - t ? o.$slides.slice(i - t, i + t + 1).addClass("slick-active").attr("aria-hidden", "false") : (e = o.options.slidesToShow + i, s.slice(e - t + 1, e + t + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === i ? s.eq(s.length - 1 - o.options.slidesToShow).addClass("slick-center") : i === o.slideCount - 1 && s.eq(o.options.slidesToShow).addClass("slick-center")), o.$slides.eq(i).addClass("slick-center")) : 0 <= i && i <= o.slideCount - o.options.slidesToShow ? o.$slides.slice(i, i + o.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : s.length <= o.options.slidesToShow ? s.addClass("slick-active").attr("aria-hidden", "false") : (t = o.slideCount % o.options.slidesToShow, e = !0 === o.options.infinite ? o.options.slidesToShow + i : i, (o.options.slidesToShow == o.options.slidesToScroll && o.slideCount - i < o.options.slidesToShow ? s.slice(e - (o.options.slidesToShow - t), e + t) : s.slice(e, e + o.options.slidesToShow)).addClass("slick-active").attr("aria-hidden", "false")), "ondemand" === o.options.lazyLoad && o.lazyLoad()
    }, r.prototype.setupInfinite = function() {
        var i, e, t, o = this;
        if (!0 === o.options.fade && (o.options.centerMode = !1), !0 === o.options.infinite && !1 === o.options.fade && (e = null, o.slideCount > o.options.slidesToShow)) {
            for (t = !0 === o.options.centerMode ? o.options.slidesToShow + 1 : o.options.slidesToShow, i = o.slideCount; i > o.slideCount - t; --i) e = i - 1, a(o.$slides[e]).clone(!0).attr("id", "").attr("data-slick-index", e - o.slideCount).prependTo(o.$slideTrack).addClass("slick-cloned");
            for (i = 0; i < t; i += 1) e = i, a(o.$slides[e]).clone(!0).attr("id", "").attr("data-slick-index", e + o.slideCount).appendTo(o.$slideTrack).addClass("slick-cloned");
            o.$slideTrack.find(".slick-cloned").find("[id]").each(function() {
                a(this).attr("id", "")
            })
        }
    }, r.prototype.interrupt = function(i) {
        i || this.autoPlay(), this.interrupted = i
    }, r.prototype.selectHandler = function(i) {
        var e = this,
            i = a(i.target).is(".slick-slide") ? a(i.target) : a(i.target).parents(".slick-slide"),
            i = (i = parseInt(i.attr("data-slick-index"))) || 0;
        if (e.slideCount <= e.options.slidesToShow) return e.setSlideClasses(i), void e.asNavFor(i);
        e.slideHandler(i)
    }, r.prototype.slideHandler = function(i, e, t) {
        var o, s, n, r, l = this;
        if (e = e || !1, (!0 !== l.animating || !0 !== l.options.waitForAnimate) && !(!0 === l.options.fade && l.currentSlide === i || l.slideCount <= l.options.slidesToShow))
            if (!1 === e && l.asNavFor(i), o = i, n = l.getLeft(o), e = l.getLeft(l.currentSlide), l.currentLeft = null === l.swipeLeft ? e : l.swipeLeft, !1 === l.options.infinite && !1 === l.options.centerMode && (i < 0 || i > l.getDotCount() * l.options.slidesToScroll)) !1 === l.options.fade && (o = l.currentSlide, !0 !== t ? l.animateSlide(e, function() {
                l.postSlide(o)
            }) : l.postSlide(o));
            else if (!1 === l.options.infinite && !0 === l.options.centerMode && (i < 0 || i > l.slideCount - l.options.slidesToScroll)) !1 === l.options.fade && (o = l.currentSlide, !0 !== t ? l.animateSlide(e, function() {
            l.postSlide(o)
        }) : l.postSlide(o));
        else {
            if (l.options.autoplay && clearInterval(l.autoPlayTimer), s = o < 0 ? l.slideCount % l.options.slidesToScroll != 0 ? l.slideCount - l.slideCount % l.options.slidesToScroll : l.slideCount + o : o >= l.slideCount ? l.slideCount % l.options.slidesToScroll != 0 ? 0 : o - l.slideCount : o, l.animating = !0, l.$slider.trigger("beforeChange", [l, l.currentSlide, s]), e = l.currentSlide, l.currentSlide = s, l.setSlideClasses(l.currentSlide), l.options.asNavFor && (r = (r = l.getNavTarget()).slick("getSlick")).slideCount <= r.options.slidesToShow && r.setSlideClasses(l.currentSlide), l.updateDots(), l.updateArrows(), !0 === l.options.fade) return !0 !== t ? (l.fadeSlideOut(e), l.fadeSlide(s, function() {
                l.postSlide(s)
            })) : l.postSlide(s), void l.animateHeight();
            !0 !== t ? l.animateSlide(n, function() {
                l.postSlide(s)
            }) : l.postSlide(s)
        }
    }, r.prototype.startLoad = function() {
        var i = this;
        !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.hide(), i.$nextArrow.hide()), !0 === i.options.dots && i.slideCount > i.options.slidesToShow && i.$dots.hide(), i.$slider.addClass("slick-loading")
    }, r.prototype.swipeDirection = function() {
        var i = this,
            e = i.touchObject.startX - i.touchObject.curX,
            t = i.touchObject.startY - i.touchObject.curY,
            e = Math.atan2(t, e),
            e = Math.round(180 * e / Math.PI);
        return e < 0 && (e = 360 - Math.abs(e)), e <= 45 && 0 <= e || e <= 360 && 315 <= e ? !1 === i.options.rtl ? "left" : "right" : 135 <= e && e <= 225 ? !1 === i.options.rtl ? "right" : "left" : !0 === i.options.verticalSwiping ? 35 <= e && e <= 135 ? "down" : "up" : "vertical"
    }, r.prototype.swipeEnd = function(i) {
        var e, t, o = this;
        if (o.dragging = !1, o.interrupted = !1, o.shouldClick = !(10 < o.touchObject.swipeLength), void 0 === o.touchObject.curX) return !1;
        if (!0 === o.touchObject.edgeHit && o.$slider.trigger("edge", [o, o.swipeDirection()]), o.touchObject.swipeLength >= o.touchObject.minSwipe) {
            switch (t = o.swipeDirection()) {
                case "left":
                case "down":
                    e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide + o.getSlideCount()) : o.currentSlide + o.getSlideCount(), o.currentDirection = 0;
                    break;
                case "right":
                case "up":
                    e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide - o.getSlideCount()) : o.currentSlide - o.getSlideCount(), o.currentDirection = 1
            }
            "vertical" != t && (o.slideHandler(e), o.touchObject = {}, o.$slider.trigger("swipe", [o, t]))
        } else o.touchObject.startX !== o.touchObject.curX && (o.slideHandler(o.currentSlide), o.touchObject = {})
    }, r.prototype.swipeHandler = function(i) {
        var e = this;
        if (!(!1 === e.options.swipe || "ontouchend" in document && !1 === e.options.swipe || !1 === e.options.draggable && -1 !== i.type.indexOf("mouse"))) switch (e.touchObject.fingerCount = i.originalEvent && void 0 !== i.originalEvent.touches ? i.originalEvent.touches.length : 1, e.touchObject.minSwipe = e.listWidth / e.options.touchThreshold, !0 === e.options.verticalSwiping && (e.touchObject.minSwipe = e.listHeight / e.options.touchThreshold), i.data.action) {
            case "start":
                e.swipeStart(i);
                break;
            case "move":
                e.swipeMove(i);
                break;
            case "end":
                e.swipeEnd(i)
        }
    }, r.prototype.swipeMove = function(i) {
        var e, t, o = this,
            s = void 0 !== i.originalEvent ? i.originalEvent.touches : null;
        return !(!o.dragging || s && 1 !== s.length) && (e = o.getLeft(o.currentSlide), o.touchObject.curX = void 0 !== s ? s[0].pageX : i.clientX, o.touchObject.curY = void 0 !== s ? s[0].pageY : i.clientY, o.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(o.touchObject.curX - o.touchObject.startX, 2))), !0 === o.options.verticalSwiping && (o.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(o.touchObject.curY - o.touchObject.startY, 2)))), "vertical" !== (t = o.swipeDirection()) ? (void 0 !== i.originalEvent && 4 < o.touchObject.swipeLength && i.preventDefault(), s = (!1 === o.options.rtl ? 1 : -1) * (o.touchObject.curX > o.touchObject.startX ? 1 : -1), !0 === o.options.verticalSwiping && (s = o.touchObject.curY > o.touchObject.startY ? 1 : -1), i = o.touchObject.swipeLength, (o.touchObject.edgeHit = !1) === o.options.infinite && (0 === o.currentSlide && "right" === t || o.currentSlide >= o.getDotCount() && "left" === t) && (i = o.touchObject.swipeLength * o.options.edgeFriction, o.touchObject.edgeHit = !0), !1 === o.options.vertical ? o.swipeLeft = e + i * s : o.swipeLeft = e + i * (o.$list.height() / o.listWidth) * s, !0 === o.options.verticalSwiping && (o.swipeLeft = e + i * s), !0 !== o.options.fade && !1 !== o.options.touchMove && (!0 === o.animating ? (o.swipeLeft = null, !1) : void o.setCSS(o.swipeLeft))) : void 0)
    }, r.prototype.swipeStart = function(i) {
        var e, t = this;
        if (t.interrupted = !0, 1 !== t.touchObject.fingerCount || t.slideCount <= t.options.slidesToShow) return !(t.touchObject = {});
        void 0 !== i.originalEvent && void 0 !== i.originalEvent.touches && (e = i.originalEvent.touches[0]), t.touchObject.startX = t.touchObject.curX = void 0 !== e ? e.pageX : i.clientX, t.touchObject.startY = t.touchObject.curY = void 0 !== e ? e.pageY : i.clientY, t.dragging = !0
    }, r.prototype.unfilterSlides = r.prototype.slickUnfilter = function() {
        var i = this;
        null !== i.$slidesCache && (i.unload(), i.$slideTrack.children(this.options.slide).detach(), i.$slidesCache.appendTo(i.$slideTrack), i.reinit())
    }, r.prototype.unload = function() {
        var i = this;
        a(".slick-cloned", i.$slider).remove(), i.$dots && i.$dots.remove(), i.$prevArrow && i.htmlExpr.test(i.options.prevArrow) && i.$prevArrow.remove(), i.$nextArrow && i.htmlExpr.test(i.options.nextArrow) && i.$nextArrow.remove(), i.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
    }, r.prototype.unslick = function(i) {
        this.$slider.trigger("unslick", [this, i]), this.destroy()
    }, r.prototype.updateArrows = function() {
        var i = this;
        Math.floor(i.options.slidesToShow / 2);
        !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && !i.options.infinite && (i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === i.currentSlide ? (i.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : (i.currentSlide >= i.slideCount - i.options.slidesToShow && !1 === i.options.centerMode || i.currentSlide >= i.slideCount - 1 && !0 === i.options.centerMode) && (i.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
    }, r.prototype.updateDots = function() {
        var i = this;
        null !== i.$dots && (i.$dots.find("li").removeClass("slick-active").attr("aria-hidden", "true"), i.$dots.find("li").eq(Math.floor(i.currentSlide / i.options.slidesToScroll)).addClass("slick-active").attr("aria-hidden", "false"))
    }, r.prototype.visibility = function() {
        this.options.autoplay && (document[this.hidden] ? this.interrupted = !0 : this.interrupted = !1)
    }, a.fn.slick = function() {
        for (var i, e = this, t = arguments[0], o = Array.prototype.slice.call(arguments, 1), s = e.length, n = 0; n < s; n++)
            if ("object" == typeof t || void 0 === t ? e[n].slick = new r(e[n], t) : i = e[n].slick[t].apply(e[n].slick, o), void 0 !== i) return i;
        return e
    }
});