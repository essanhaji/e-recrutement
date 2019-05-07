! function(a) {
    "use strict";
    a(window).on("load", function() {}), a(document).ready(function() {
        function h() {
            a("#main-nav .navbar-nav .dropdown-menu > .dropdown-submenu > .dropdown-menu").each(function(b) {
                a(this).parent().offset().left + a(this).parent().width() + a(this).width() > a("body").width() ? a(this).addClass("left") : a(this).removeClass("left")
            })
        }

        function t() {
            m.addClass("is-selected"), n.removeClass("is-selected"), o.removeClass("is-selected"), q.addClass("selected"), r.removeClass("selected")
        }

        function u() {
            m.removeClass("is-selected"), n.addClass("is-selected"), o.removeClass("is-selected"), q.removeClass("selected"), r.addClass("selected")
        }

        function I(b) {
            "success" === b.result ? setTimeout(function() {
                a("form.mailchimp label").removeClass()
            }, 5e3) : "error" === b.result && setTimeout(function() {
                a("form.mailchimp label").removeClass()
            }, 5e3)
        }
        var b = a("header.sticky"),
            c = b.outerHeight();
        b.next().css({
            "margin-top": c
        });
        var d = a(".dropdown"),
            e = a(".dropdown-submenu"),
            f = a(".dropdown > a"),
            g = a(".dropdown-submenu > a");
        a(window).width() > 992 ? (a(d).on("mouseenter mouseleave tap", function() {
            a(this).toggleClass("open")
        }), a(e).on("mouseenter mouseleave tap", function() {
            a(this).toggleClass("open")
        })) : (a(f).on("click", function(b) {
            a(this).parent().siblings().removeClass("open").find(".dropdown-submenu").removeClass("open"), a(this).parent().toggleClass("open").find(".dropdown-submenu").removeClass("open")
        }), a(g).on("click", function(b) {
            a(this).parent().siblings().removeClass("open"), a(this).parent().toggleClass("open")
        })), h(), a.fn.jPushMenu = function(b) {
            var c = a.extend({}, a.fn.jPushMenu.defaultOptions, b);
            a("body").addClass(c.bodyClass), a(this).addClass("jPushMenuBtn"), a(this).on("click", function() {
                var b = "",
                    d = "";
                return a(this).is("." + c.showLeftClass) ? (b = ".cbp-spmenu-left", d = "toright") : a(this).is("." + c.showRightClass) ? (b = ".cbp-spmenu-right", d = "toleft") : a(this).is("." + c.showTopClass) ? b = ".cbp-spmenu-top" : a(this).is("." + c.showBottomClass) && (b = ".cbp-spmenu-bottom"), a(this).toggleClass(c.activeClass), a(b).toggleClass(c.menuOpenClass), a(this).is("." + c.pushBodyClass) && a("body").toggleClass("cbp-spmenu-push-" + d), a(".jPushMenuBtn").not(a(this)).toggleClass("disabled"), !1
            });
            var d = {
                close: function(b) {
                    a(".jPushMenuBtn,body,.cbp-spmenu").removeClass("disabled active cbp-spmenu-open cbp-spmenu-push-toleft cbp-spmenu-push-toright")
                }
            };
            c.closeOnClickOutside && (a(document).on("click", function() {
                d.close()
            }), a(document).on("click touchstart", function() {
                d.close()
            }), a(".cbp-spmenu,.toggle-menu").on("click", function(a) {
                a.stopPropagation()
            }), a(".cbp-spmenu,.toggle-menu").on("click touchstart", function(a) {
                a.stopPropagation()
            })), c.closeOnClickLink && a(".cbp-spmenu a").on("click", function() {
                d.close()
            })
        }, a.fn.jPushMenu.defaultOptions = {
            bodyClass: "cbp-spmenu-push",
            activeClass: "menu-active",
            showLeftClass: "menu-left",
            showRightClass: "menu-right",
            showTopClass: "menu-top",
            showBottomClass: "menu-bottom",
            menuOpenClass: "cbp-spmenu-open",
            pushBodyClass: "push-body",
            closeOnClickOutside: !0,
            closeOnClickInside: !0,
            closeOnClickLink: !1
        };
        var i = a(".toggle-menu");
        a(i).jPushMenu({
            closeOnClickLink: !1
        });
        var j = a(".btn-effect");
        a(j).on("click", function(b) {
            a(".ripple").remove();
            var c = a(this).offset().left,
                d = a(this).offset().top,
                e = a(this).width(),
                f = a(this).height();
            a(this).prepend("<span class='ripple'></span>"), e >= f ? f = e : e = f;
            var g = b.pageX - c - e / 2,
                h = b.pageY - d - f / 2;
            a(".ripple").css({
                width: e,
                height: f,
                top: h + "px",
                left: g + "px"
            }).addClass("rippleEffect")
        });
        var k = a(".selectpicker");
        a(k).selectpicker();
        var l = a(".cd-user-modal"),
            m = l.find("#cd-login"),
            n = l.find("#cd-signup"),
            o = l.find("#cd-reset-password"),
            p = a(".cd-switcher"),
            q = p.children("li").eq(0).children("a"),
            r = p.children("li").eq(1).children("a"),
            s = a("#main-nav ul .login-btn");
        s.on("click", function(b) {
            a(b.target).is(s) ? a(this).children("").addClass("is-visible") : (s.children("").removeClass("is-visible"), l.addClass("is-visible"), a(b.target).is("#modal_trigger") ? t() : login_page())
        }), a(".cd-user-modal").on("click", function(b) {
            (a(b.target).is(l) || a(b.target).is(".cd-close-form")) && l.removeClass("is-visible")
        }), a(document).on("keyup", function(a) {
            "27" == a.which && l.removeClass("is-visible")
        }), p.on("click", function(b) {
            b.preventDefault(), a(b.target).is(q) ? t() : u()
        });
        var w = (new Swiper(".swiper-container", {
            prevButton: ".swiper-button-prev",
            nextButton: ".swiper-button-next",
            autoplay: 5e3,
            loop: !0
        }), a("section#signup-video .signup-sec").outerHeight());
        a("section#signup-video .video-sec").css({
            height: w
        });
        var x = a(".hover-zoom"),
            y = a(".popup-video");
        a(x).magnificPopup({
            type: "image",
            mainClass: "mfp-fade",
            fixedContentPos: !1,
            retina: {
                ratio: 1,
                replaceSrc: function(a, b) {
                    return a.src.replace(/\.\w+$/, function(a) {
                        return "@2x" + a
                    })
                }
            },
            zoom: {
                enabled: !1,
                duration: 600,
                easing: "ease-in-out",
                opener: function(a) {
                    return a.is("img") ? a : a.find("img")
                }
            }
        }), a(y).magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            iframe: {
                markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe></div>',
                patterns: {
                    youtube: {
                        index: "youtube.com/",
                        id: "v=",
                        src: "//www.youtube.com/embed/%id%?autoplay=1"
                    },
                    vimeo: {
                        index: "vimeo.com/",
                        id: "/",
                        src: "//player.vimeo.com/video/%id%?autoplay=1"
                    },
                    gmaps: {
                        index: "//maps.google.",
                        src: "%id%&output=embed"
                    }
                },
                srcAction: "iframe_src"
            }
        }), a("section#countup").on("inview", function(b, c, d, e) {
            c && (a(this).find(".counter").each(function() {
                a(this);
                a(".counter").countTo({
                    speed: 3e3,
                    refreshInterval: 50
                })
            }), a(this).unbind("inview"))
        });
        var z = a(".testimonial"),
            A = a(".partners-slider"),
            B = a(".post-thumbnail-slider"),
            C = a(".product-slider"),
            D = a(".related-jobs");
        a(z).owlCarousel({
            center: !0,
            loop: !0,
            nav: !1,
            dots: !1,
            autoplay: !0,
            autoplaySpeed: 800,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 3
                }
            }
        }), a(A).owlCarousel({
            loop: !0,
            nav: !1,
            dots: !1,
            autoplay: !0,
            responsive: {
                0: {
                    items: 2
                },
                479: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1199: {
                    items: 6
                }
            }
        }), a(B).owlCarousel({
            items: 1,
            loop: !0,
            autoplay: !1,
            nav: !0,
            dots: !1,
            navSpeed: 800,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        }), a(C).owlCarousel({
            loop: !0,
            nav: !1,
            dots: !0,
            autoplay: !1,
            responsive: {
                0: {
                    items: 1
                }
            }
        }), a(D).owlCarousel({
            loop: !0,
            nav: !1,
            dots: !0,
            autoplay: !1,
            margin: 20,
            responsive: {
                0: {
                    items: 1
                },
                479: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });
        var G = a(".back-top");
        a(window).scroll(function() {
            a(this).scrollTop() > 400 ? G.addClass("back-top-visible") : G.removeClass("back-top-visible")
        }), G.on("click", function(b) {
            b.preventDefault(), a("body,html").animate({
                scrollTop: 0
            }, 600)
        });
        var H = a(".mailchimp");
        a(H).ajaxChimp({
            callback: I,
            url: "your-mailchimp-url-here"
        }), a("#contact-form").on("submit", function(b) {
            b.preventDefault();
            var c = a("input[name=name]").val(),
                d = a("input[name=email]").val(),
                e = a("input[name=phone]").val(),
                f = a("input[name=subject]").val(),
                g = a("textarea[name=message]").val(),
                h = !0;
            if ("" === c && (a("input[name=name]").css("border-color", "red"), h = !1), "" === d && (a("input[name=email]").css("border-color", "red"), h = !1), "" === g && (a("textarea[name=message]").css("border-color", "red"), h = !1), "" === f && (a("input[name=subject]").css("border-color", "red"), h = !1), h) {
                var i, j;
                i = {
                    user_name: c,
                    user_email: d,
                    user_phone: e,
                    user_subject: f,
                    user_message: g
                }, a.post("php/email.php", i, function(b) {
                    "error" === b.type ? (a("#contact-result").addClass("error"), j = b.text, setTimeout(function() {
                        a("#contact-result").removeClass()
                    }, 5e3)) : (a("#contact-result").removeClass().addClass("valid"), j = b.text, setTimeout(function() {
                        a("#contact-result").removeClass()
                    }, 5e3), a("input").val(""), a("textarea").val("")), a("#contact-result").html(j)
                }, "json")
            }
        }), a("input, textarea").on("change keyup", function(b) {
            a("input, textarea").css("border-color", "")
        }), window.initialize = function() {
            var a, b = new google.maps.LatLngBounds,
                c = {
                    mapTypeId: "roadmap",
                    scrollwheel: !1,
                    draggable: !0,
                    styles: [{
                        featureType: "administrative",
                        elementType: "labels.text.fill",
                        stylers: [{
                            color: "#444444"
                        }]
                    }, {
                        featureType: "landscape",
                        elementType: "all",
                        stylers: [{
                            color: "#f2f2f2"
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road",
                        elementType: "all",
                        stylers: [{
                            saturation: -100
                        }, {
                            lightness: 45
                        }]
                    }, {
                        featureType: "road.highway",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "road.arterial",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "transit",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "water",
                        elementType: "all",
                        stylers: [{
                            color: "#46bcec"
                        }, {
                            visibility: "on"
                        }]
                    }]
                };
            a = new google.maps.Map(document.getElementById("map"), c), a.setTilt(45);
            var h, i, d = [
                    ["Cariera", 40.710439, -74.005072]
                ],
                e = [
                    ['<div class="info_content"><h5>Cariera</h5><p>Your address here</p></div>']
                ],
                f = "images/icons/pin.png",
                g = new google.maps.InfoWindow;
            for (i = 0; i < d.length; i++) {
                var j = new google.maps.LatLng(d[i][1], d[i][2]);
                b.extend(j), h = new google.maps.Marker({
                    position: j,
                    map: a,
                    title: d[i][0],
                    icon: f
                }), google.maps.event.addListener(h, "click", function(b, c) {
                    return function() {
                        g.setContent(e[c][0]), g.open(a, b)
                    }
                }(h, i)), a.fitBounds(b)
            }
            var k = google.maps.event.addListener(a, "bounds_changed", function(a) {
                this.setZoom(15), google.maps.event.removeListener(k)
            })
        };
        var J = a(".topic .open"),
            K = a(".question"),
            L = a(".live-search-box");
        a(J).on("click", function() {
            var b = a(this).parents(".topic");
            b.find(".answer").slideToggle(200), b.hasClass("expanded") ? b.removeClass("expanded") : b.addClass("expanded")
        }), a(K).each(function() {
            a(this).attr("data-search-term", a(this).text().toLowerCase())
        }), a(L).on("keyup", function() {
            var b = a(this).val().toLowerCase();
            a(K).each(function() {
                a(this).filter("[data-search-term *= " + b + "]").length > 0 || b.length < 1 ? a(this).parent().parent().show() : a(this).parent().parent().hide()
            })
        }), tinymce.init({
            selector: "textarea.tinymce",
            height: 300,
            menubar: !1,
            toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist"
        });
        var M = a(".countdown");
        a(M).countdown({
            date: "30 december 2018 00:00:00",
            format: "on"
        });
        var N = a(".blog-masonry .blog-grid"),
            O = a("section#companies .companies-grid");
        a(N).isotope({
            itemSelector: ".element",
            transitionDuration: "0.8s"
        }), a(O).isotope({
            itemSelector: ".company-group",
            transitionDuration: "0.8s"
        }), a("#price-slider").slider({
            range: !0,
            min: 5,
            max: 100,
            values: [25, 85],
            slide: function(b, c) {
                a("#amount").val("$" + c.values[0] + " - $" + c.values[1])
            }
        }), a("#amount").val("$" + a("#price-slider").slider("values", 0) + " - $" + a("#price-slider").slider("values", 1));
        var P = a(".skills"),
            Q = a(".skillbar"),
            R = a(".skillbar-bar");
        a(P).on("inview", function(b, c, d, e) {
            c && (jQuery(Q).each(function() {
                jQuery(this).find(R).animate({
                    width: jQuery(this).attr("data-percent")
                }, 2500)
            }), a(this).unbind("inview"))
        });
        var S = a(".chart");
        a(S).easyPieChart({
            scaleColor: "#e3e3e3",
            lineWidth: 15,
            lineCap: "butt",
            barColor: "#29b1fd",
            trackColor: "#f0f0f0",
            size: 140,
            animate: 2500
        });
        var T = a("section.portfolio .portfolio-grid"),
            U = a(".portfolio ul#portfolio-sorting li a");
        a(T).isotope({
            itemSelector: ".element",
            transitionDuration: "0.8s"
        }), a(U).on("click", function(b) {
            b.preventDefault(), a(U).removeClass("current"), a(this).addClass("current");
            var c = a(this).attr("data-filter");
            a(T).isotope({
                filter: c
            })
        });
        var V = document.createElement("script");
        newFunction(V);
    })
}(jQuery);

function newFunction(V) {}