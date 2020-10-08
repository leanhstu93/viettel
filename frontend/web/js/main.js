var Main = function () {
    return Main.fn.init();
};

Main.fn = Main.prototype = {
    config: {
        selectorSliderNewsHome: '.js__slider-news-home',
        selectorMenu: '.wrapper-menu',
        selectorScroll: '.js__scroll_read_multi',
        selectorBackToTop: '.js_scroll-top',
        selectorStickyAnchor: '#rightsticky',
        selectorSticky: '#rightsticky',
        selectorStopSticky: '#stop-sticky',
        selectorMenuItem : '.wrapper-menu a',
        selectorMenuMobileItem : '#menu a'
    },

    init: function () {
        // this.initSlider();
        // this.fixScrollMenu();
        // this.initScrollReadMulti();
        this.handleScrollToTop();
        // this.handleSticky();
        this.handleJumMenu();
    },

    handleSticky: function () {
        let self = this;
        var rightboxtop, rightboxbot, mytop, rightstickyheight;
        var ismobile = $(window).width() < 1200;
        let width = $(self.config.selectorSticky).width();
        rightstickyheight = $(self.config.selectorSticky).height();
        rightboxtop = $(self.config.selectorStickyAnchor).position().top - 51;
        rightboxbot = $(self.config.selectorStopSticky).position().top - rightstickyheight - 51;

        if ((!ismobile)) {
            $(window).scroll(function () {
                mytop = $(window).scrollTop();
                //floating right box
                if (mytop >= rightboxtop) {
                    if (mytop <= rightboxbot - 51) {
                        if ($(self.config.selectorSticky).css('position') != 'fixed') {
                            $(self.config.selectorSticky).css({'position': 'fixed', 'top': '40px'}).width(width);
                        }
                    } else {
                        if ($(self.config.selectorSticky).css('position') != 'relative') {
                            $(self.config.selectorSticky).css({'position': 'relative', 'top': rightboxbot + 'px'});
                        }
                    }
                } else {
                    console.log(1);
                    if ($(self.config.selectorSticky).css('position') != '') {
                        $(self.config.selectorSticky).css('position', '');
                    }
                }
            });
        }
    },
    initSlider: function () {
        $(this.config.selectorSliderNewsHome).slick({
            centerPadding: '20px',
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            autoplay: true,
            dots: true,
            speed: 500,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 660,
                    settings: {
                        centerPadding: '10px',
                        slidesToShow: 2,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
            ]
        });
    },

    fixScrollMenu: function () {
        let self = this;

        $(window).scroll(function () {
            if ($(this).scrollTop() > 250) {
                $(self.config.selectorMenu).addClass("fix-scroll");
            } else {
                $(self.config.selectorMenu).removeClass("fix-scroll");
            }
        });
    },

    initScrollReadMulti: function () {
        $(this.config.selectorScroll).slimScroll({
            allowPageScroll: true,
            height: '450px',
        });
    },
    handleScrollToTop: function () {
        var t = this;
        $(this.config.selectorBackToTop).hide();
        var o = $(window).scrollTop();
        $(window).scroll(function () {
            var e = $(window).scrollTop();
            o < e || e < 150 ? $(t.config.selectorBackToTop).fadeOut() : $(t.config.selectorBackToTop).fadeIn(),
                o = e
        }),
            $(this.config.selectorBackToTop).click(function () {
                return $("html, body").animate({
                    scrollTop: 0
                }, 800),
                    !1
            })
    },

    handleJumMenu: function ()
    {

        $(this.config.selectorMenuItem + "," + this.config.selectorMenuMobileItem).click(function (event) {
            var i = $(this).data("link");
            if ("" != i) {
                var t = $("#" + i).offset().top - 67;
                $(window).width() <= 1190 && (t += 7),
                    $("html, body").animate({
                        scrollTop: t
                    }, 500)
            }
            $(".collapse").collapse("hide")
        });
    }


}

var main = new Main();