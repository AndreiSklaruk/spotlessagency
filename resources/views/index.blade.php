<!DOCTYPE html>
<html lang="en-US" class=" js_active  vc_desktop  vc_transform  vc_transform ">
    <head>
        <title>@yield('title')</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="https://www.spotlessagency.com/xmlrpc.php">

        <script type="text/javascript">
            window.ga = window.ga || function () {
                (ga.q = ga.q || []).push(arguments)
            };
            ga.l = +new Date;
            ga('create', 'UA-120720634-1', 'auto');
            // Plugins

            ga('send', 'pageview');
        </script>
        <script async src="https://www.google-analytics.com/analytics.js"></script>
        <!-- /all in one seo pack -->
        <link rel="dns-prefetch" href="https://www.google.com/">
        <link rel="dns-prefetch" href="https://s.w.org/">
        <link rel="alternate" type="application/rss+xml" title="Spotless Agency » Feed"
              href="https://www.spotlessagency.com/feed/">
        <link rel="alternate" type="application/rss+xml" title="Spotless Agency » Comments Feed"
              href="https://www.spotlessagency.com/comments/feed/">

        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" media="all">
        @section('style-inline-css')
            <link rel="stylesheet" id="norebro-style-inline-css" href="{{asset('css/pages/home.css')}}" type="text/css" media="all">
        @show

        @stack('styles')

        <link rel="shortlink" href="{{ url()->current() }}">
        <style type="text/css">
            .recentcomments a {
                display: inline !important;
                padding: 0 !important;
                margin: 0 !important;
            }
        </style>

        <!--[if lte IE 9]>
            <link rel="stylesheet" type="text/css" href="/external_css/js_composer/vc_lte_ie9.min.css" media="screen">
        <![endif]-->

        <link rel="icon" href="/favicon/cropped-favicon-32x32.png" sizes="32x32">
        <link rel="icon" href="/favicon/cropped-favicon-192x192.png" sizes="192x192">
        <link rel="apple-touch-icon-precomposed" href="/favicon/cropped-favicon-180x180.png">
        <meta name="msapplication-TileImage" content="/favicon/cropped-favicon-270x270.png">
{{--        <script type="text/javascript">--}}
{{--            function setREVStartSize(e) {--}}
{{--                try {--}}
{{--                    var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;--}}
{{--                    if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {--}}
{{--                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)--}}
{{--                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {--}}
{{--                        var u = (e.c.width(), jQuery(window).height());--}}
{{--                        if (void 0 != e.fullScreenOffsetContainer) {--}}
{{--                            var c = e.fullScreenOffsetContainer.split(",");--}}
{{--                            if (c) jQuery.each(c, function (e, i) {--}}
{{--                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u--}}
{{--                            }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))--}}
{{--                        }--}}
{{--                        f = u--}}
{{--                    } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);--}}
{{--                    e.c.closest(".rev_slider_wrapper").css({height: f})--}}
{{--                } catch (d) {--}}
{{--                    console.log("Failure at Presize of Slider:" + d)--}}
{{--                }--}}
{{--            };--}}
{{--        </script>--}}
        <noscript>
            <style type="text/css">
                .wpb_animate_when_almost_visible {
                    opacity: 1;
                }
            </style>
        </noscript>

        @stack('head')
    </head>
    <body
        class="@stack('bodyClasses') norebro-theme-1-0-0 wpb-js-composer js-comp-ver-5.4.7 vc_responsive"
        data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

        <div class="page-preloader" id="page-preloader">
            <div class="loader">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
            </div>
        </div>

        <a class="scroll-top" id="page-scroll-top">
            <img src="/images/svg/scroll-top.svg" alt="Scroll to top">
        </a>

        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#main">Skip to content</a>

            <header id="masthead" class="site-header @yield('mastheadClasses')" data-header-fixed="true" style="transition-duration: 0.2s; width: 1903px;">
                <div class="header-wrap page-container">
                    <div class="site-branding">
                        <p class="site-title">
                            <a href="{{url('/')}}" rel="home">
                                <!-- diff in display none-->
                                <span class="logo with-mobile" style="display: inline;">
                                    <img src="/images/logo_grey.png"
                                         srcset="/images/logo_grey.png 2x"
                                         alt="Spotless Agency">
                                </span>
                                <span class="fixed-logo">
                                    <img src="/images/logo_grey.png"
                                         srcset="/images/logo_grey.png 2x"
                                         alt="Spotless Agency">
                                </span>
                                <span class="mobile-logo" style="display: none;">
                                    <img src="/images/logo_grey.png"
                                         class=" alt=" spotless="" agency="">
                                </span>
                                <span class="fixed-mobile-logo">
                                    <img src="/images/logo_grey.png" class=""
                                         alt="Spotless Agency">
                                </span>
                                <span class="for-onepage">
                                    <span class="dark hidden">
                                        <img src="/images/logo_grey.png"
                                             srcset="/images/logo_grey.png 2x"
                                             alt="Spotless Agency">
                                    </span>
                                    <span class="light hidden">Spotless Agency</span>
                                </span>
                            </a>
                        </p>
                    </div><!-- .site-branding -->
                    <div class="right">
                        <nav id="site-navigation" class="main-nav">
                            <div class="close">
                                <span class="icon ion-android-close"></span>
                            </div>
                            <div id="mega-menu-wrap" role="navigation">
                                <ul id="primary-menu" class="menu">
                                    <li id="nav-menu-item-13198-5e75fd3eb39f0"
                                        class="mega-menu-item nav-item menu-item-depth-0 current-menu-item"><a
                                            href="{{url('/')}}" class="menu-link main-menu-link item-title"
                                            id="accessible-megamenu-1584787256649-1"><span>Home</span></a></li>
                                    <li id="nav-menu-item-13269-5e75fd3eb3be9"
                                        class="mega-menu-item nav-item menu-item-depth-0 has-submenu"><a
                                            href="#"
                                            class="menu-link main-menu-link item-title"
                                            id="accessible-megamenu-1584787256652-2" aria-haspopup="true"
                                            aria-owns="accessible-megamenu-1584787256652-3"
                                            aria-controls="accessible-megamenu-1584787256652-3" aria-expanded="true"><span>What do we do</span></a>
                                        <div class="sub-nav" id="accessible-megamenu-1584787256652-3" role="group"
                                             aria-expanded="true" aria-hidden="false"
                                             aria-labelledby="accessible-megamenu-1584787256652-2" style="max-width: 1903px;">
                                            <ul class="menu-depth-1 sub-menu sub-nav-group" style="left: 0px;">
                                                <li id="nav-menu-item-14394-5e75fd3eb3e59"
                                                    class="mega-menu-item sub-nav-item menu-item-depth-1 "><a
                                                        href="/flor-plan-visualization/"
                                                        class="menu-link sub-menu-link"><span>Floor Plan Visualization</span></a>
                                                </li>
                                                <li id="nav-menu-item-14393-5e75fd3eb4052"
                                                    class="mega-menu-item sub-nav-item menu-item-depth-1 has-submenu "><a
                                                        href="/3d-renderings/"
                                                        class="menu-link sub-menu-link"><span>3D Renderings</span></a>
                                                    <div class="sub-sub-nav">
                                                        <ul class="menu-depth-2 sub-sub-menu">
                                                            <li id="nav-menu-item-14395-5e75fd3eb433e"
                                                                class="mega-menu-item sub-nav-item menu-item-depth-2 "><a
                                                                    href="/3d-renderings/architectural-visualization/"
                                                                    class="menu-link sub-menu-link"><span>Architectural Visualization</span></a>
                                                            </li>
                                                            <li id="nav-menu-item-13272-5e75fd3eb4609"
                                                                class="mega-menu-item sub-nav-item menu-item-depth-2 "><a
                                                                    href="/3d-renderings/furniture-renderings/"
                                                                    class="menu-link sub-menu-link"><span>Furniture Renderings</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li id="nav-menu-item-13861-5e75fd3eb4932"
                                        class="mega-menu-item nav-item menu-item-depth-0"><a
                                            href="/pricing/"
                                            class="menu-link main-menu-link item-title"
                                            id="accessible-megamenu-1584787256654-4"><span>Pricing</span></a></li>
                                    <li id="nav-menu-item-13195-5e75fd3eb4c35"
                                        class="mega-menu-item nav-item menu-item-depth-0"><a
                                            href="/virtual-staging-works/"
                                            class="menu-link main-menu-link item-title"
                                            id="accessible-megamenu-1584787256654-5"><span>Portfolio</span></a></li>
                                    <li id="nav-menu-item-13194-5e75fd3eb4f53"
                                        class="mega-menu-item nav-item menu-item-depth-0"><a
                                            href="/blog/"
                                            class="menu-link main-menu-link item-title"
                                            id="accessible-megamenu-1584787256655-6"><span>Blog</span></a></li>
                                    <li id="nav-menu-item-13259-5e75fd3eb525b"
                                        class="mega-menu-item nav-item menu-item-depth-0"><a
                                            href="/about/"
                                            class="menu-link main-menu-link item-title"
                                            id="accessible-megamenu-1584787256656-7"><span>About</span></a></li>
                                    <li id="nav-menu-item-13196-5e75fd3eb5567"
                                        class="mega-menu-item nav-item menu-item-depth-0"><a
                                            href="/contact/"
                                            class="menu-link main-menu-link item-title"
                                            id="accessible-megamenu-1584787256657-8"><span>Contact</span></a></li>
                                </ul>
                            </div>

                            <ul class="phone-menu-bottom">

                                <!-- Languages -->

                                <!-- Contact info  -->
                                <li class="contact">

                                </li>

                                <li class="socialbar small outline">
                                    <a href="https://www.facebook.com/Spotless-Virtual-Staging-Agency-1587129731551478/?ref=settings"
                                       class="facebook"><span class="icon fa fa-facebook"></span></a> <a
                                        href="http://instagram.com/spotlessagency" class="instagram"><span
                                            class="icon fa fa-instagram"></span></a> <a
                                        href="https://twitter.com/Spotless_agency" class="twitter"><span
                                            class="icon fa fa-twitter"></span></a> <a
                                        href="https://www.linkedin.com/company/spotlessagency/" class="linkedin"><span
                                            class="icon fa fa-linkedin"></span></a></li>

                            </ul>
                        </nav>

                        <ul class="menu-other">
                            <li class="social">
                                <a href="https://www.facebook.com/Spotless-Virtual-Staging-Agency-1587129731551478/?ref=settings" class="facebook">
                                    <span class="icon fa fa-facebook"></span>
                                </a>
                                <a href="http://instagram.com/spotlessagency" class="instagram">
                                    <span class="icon fa fa-instagram"></span>
                                </a>
                                <a href="https://twitter.com/Spotless_agency" class="twitter">
                                    <span class="icon fa fa-twitter"></span>
                                </a>
                                <a href="https://www.linkedin.com/company/spotlessagency/" class="linkedin">
                                    <span class="icon fa fa-linkedin"></span>
                                </a>
                            </li>
                        </ul>

                        <!-- Mobile menu -->
                        <div class="hamburger-menu" id="hamburger-menu">
                            <a class="hamburger" aria-controls="site-navigation" aria-expanded="false"></a>
                        </div>
                        <!-- Fullscreen -->
                        <div class="close-menu"></div>
                    </div>
                </div><!-- .header-wrap -->
            </header><!-- #masthead -->

            <div class="fullscreen-navigation" id="fullscreen-mega-menu">
                <div class="site-branding">
                    <p class="site-title">
                        <a href="{{url('/')}}" rel="home">
                                                        <span class="first-logo">
                                <img src="/images/logo_grey.png"
                                     srcset="/images/logo_grey.png 2x"
                                     alt="Spotless Agency">
                            </span>
                        </a>
                    </p>
                </div>
                <div class="fullscreen-menu-wrap">
                    <div id="fullscreen-mega-menu-wrap" role="navigation">
                        <ul id="secondary-menu" class="menu">
                            <li id="nav-menu-item-13198-5e75fd3ec451f"
                                class="mega-menu-item nav-item menu-item-depth-0 current-menu-item"><a
                                    href="{{url('/')}}" class="menu-link main-menu-link item-title sub-nav"
                                    id="accessible-megamenu-1584787256659-10" role="group" aria-expanded="false"
                                    aria-hidden="true"><span>Home</span></a></li>
                            <li id="nav-menu-item-13269-5e75fd3ec4bf3"
                                class="mega-menu-item nav-item menu-item-depth-0 has-submenu"><a
                                    href="#" class="menu-link main-menu-link item-title"><span>What do we do</span></a>
                                <div class="sub-nav" id="accessible-megamenu-1584787256661-12" role="group"
                                     aria-expanded="false" aria-hidden="true">
                                    <ul class="menu-depth-1 sub-menu sub-nav-group">
                                        <li id="nav-menu-item-14394-5e75fd3ec5239"
                                            class="mega-menu-item sub-nav-item menu-item-depth-1 "><a
                                                href="/flor-plan-visualization/"
                                                class="menu-link sub-menu-link"><span>Floor Plan Visualization</span></a></li>
                                        <li id="nav-menu-item-14393-5e75fd3ec5858"
                                            class="mega-menu-item sub-nav-item menu-item-depth-1 has-submenu "><a
                                                href="/3d-renderings/"
                                                class="menu-link sub-menu-link"><span>3D Renderings</span></a>
                                            <div class="sub-sub-nav">
                                                <ul class="menu-depth-2 sub-sub-menu">
                                                    <li id="nav-menu-item-14395-5e75fd3ec5e88"
                                                        class="mega-menu-item sub-nav-item menu-item-depth-2 "><a
                                                            href="/3d-renderings/architectural-visualization/"
                                                            class="menu-link sub-menu-link"><span>Architectural Visualization</span></a>
                                                    </li>
                                                    <li id="nav-menu-item-13272-5e75fd3ec648b"
                                                        class="mega-menu-item sub-nav-item menu-item-depth-2 "><a
                                                            href="/3d-renderings/furniture-renderings/"
                                                            class="menu-link sub-menu-link"><span>Furniture Renderings</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li id="nav-menu-item-13861-5e75fd3ec6b9a" class="mega-menu-item nav-item menu-item-depth-0"><a
                                    href="/pricing/"
                                    class="menu-link main-menu-link item-title sub-nav"
                                    id="accessible-megamenu-1584787256663-14" role="group" aria-expanded="false"
                                    aria-hidden="true"><span>Pricing</span></a></li>
                            <li id="nav-menu-item-13195-5e75fd3ec7245" class="mega-menu-item nav-item menu-item-depth-0"><a
                                    href="/virtual-staging-works/"
                                    class="menu-link main-menu-link item-title sub-nav"
                                    id="accessible-megamenu-1584787256664-16" role="group" aria-expanded="false"
                                    aria-hidden="true"><span>Portfolio</span></a></li>
                            <li id="nav-menu-item-13194-5e75fd3ec7904" class="mega-menu-item nav-item menu-item-depth-0"><a
                                    href="/blog/"
                                    class="menu-link main-menu-link item-title sub-nav"
                                    id="accessible-megamenu-1584787256665-18" role="group" aria-expanded="false"
                                    aria-hidden="true"><span>Blog</span></a></li>
                            <li id="nav-menu-item-13259-5e75fd3ec7fe4" class="mega-menu-item nav-item menu-item-depth-0"><a
                                    href="/about/"
                                    class="menu-link main-menu-link item-title sub-nav"
                                    id="accessible-megamenu-1584787256666-20" role="group" aria-expanded="false"
                                    aria-hidden="true"><span>About</span></a></li>
                            <li id="nav-menu-item-13196-5e75fd3ec8571" class="mega-menu-item nav-item menu-item-depth-0"><a
                                    href="/contact/"
                                    class="menu-link main-menu-link item-title sub-nav"
                                    id="accessible-megamenu-1584787256667-22" role="group" aria-expanded="false"
                                    aria-hidden="true"><span>Contact</span></a></li>
                        </ul>
                    </div>
                </div>


                <div class="copyright">
                <span class="content">
                    Spotless Creative Group, LLC | 610 West Broadway, Suite 201 Jackson, WY | +1.480.999.59.06 | Copyright © 2020
                    Spotless Creative Group, LLC. All rights reserved		</span>

                    <div class="socialbar small outline">
                        <a href="https://www.facebook.com/Spotless-Virtual-Staging-Agency-1587129731551478/?ref=settings"
                           class="facebook"><span class="icon fa fa-facebook"></span></a> <a
                            href="http://instagram.com/spotlessagency" class="instagram"><span
                                class="icon fa fa-instagram"></span></a> <a href="https://twitter.com/Spotless_agency"
                                                                            class="twitter"><span
                                class="icon fa fa-twitter"></span></a> <a
                            href="https://www.linkedin.com/company/spotlessagency/" class="linkedin"><span
                                class="icon fa fa-linkedin"></span></a></div>
                </div>
                <div class="close" id="fullscreen-menu-close">
                    <span class="ion-ios-close-empty"></span>
                </div>
            </div>

            <div id="content" class="site-content" style="margin-bottom: 477px; position: relative; z-index: 3;">

                @yield('base-content')

            </div><!-- #content -->

            <footer id="colophon" class="site-footer sticky visible" style="width: 1903px; left: 0px;">
                @yield('footer-content')

                <div class="site-info">
                    <div class="page-container">
                        <div class="wrap">
                            <div class="left">
                                Spotless Creative Group, LLC | 610 West Broadway, Suite 201 Jackson, WY | +1.480.999.59.06 |
                                Copyright © 2020
                            </div>
                            <div class="right">
                                Spotless Creative Group, LLC. All rights reserved
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div><!-- .site-info -->

            </footer><!-- #colophon -->
        </div><!-- #page -->

        @yield('bodyBottom')

        <link rel="stylesheet" id="animate-css-css"
              href="{{asset('external_css/animate.min.css')}}" type="text/css"
              media="all">
        <link rel="stylesheet" id="aos-css" href="/external_css/aos.css"
              type="text/css" media="all">
        <link rel="stylesheet" id="ionicons-css"
              href="/external_css/ionicons.min.css" type="text/css"
              media="all">
        <link rel="stylesheet" id="font-awesome-css"
              href="/external_css/font-awesome.min.css" type="text/css"
              media="all">
        <link rel="stylesheet" id="norebro-global-fonts-css"
              href="//fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700&ver=1.0.0" type="text/css" media="all">
        @yield('cssBottom')
{{-- NOT_USED --}}
{{--        <script type="text/javascript">--}}
{{--            window._wpemojiSettings = {--}}
{{--                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",--}}
{{--                "ext": ".png",--}}
{{--                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",--}}
{{--                "svgExt": ".svg",--}}
{{--                "source": {"concatemoji": "{{url('/external_js/wp-emoji-release.min.js')}}"}--}}
{{--            };--}}
{{--            !function (e, a, t) {--}}
{{--                var r, n, o, i, p = a.createElement("canvas"), s = p.getContext && p.getContext("2d");--}}

{{--                function c(e, t) {--}}
{{--                    var a = String.fromCharCode;--}}
{{--                    s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);--}}
{{--                    var r = p.toDataURL();--}}
{{--                    return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()--}}
{{--                }--}}

{{--                function l(e) {--}}
{{--                    if (!s || !s.fillText) return !1;--}}
{{--                    switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {--}}
{{--                        case"flag":--}}
{{--                            return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));--}}
{{--                        case"emoji":--}}
{{--                            return !c([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340])--}}
{{--                    }--}}
{{--                    return !1--}}
{{--                }--}}

{{--                function d(e) {--}}
{{--                    var t = a.createElement("script");--}}
{{--                    t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)--}}
{{--                }--}}

{{--                for (i = Array("flag", "emoji"), t.supports = {--}}
{{--                    everything: !0,--}}
{{--                    everythingExceptFlag: !0--}}
{{--                }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);--}}
{{--                t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {--}}
{{--                    t.DOMReady = !0--}}
{{--                }, t.supports.everything || (n = function () {--}}
{{--                    t.readyCallback()--}}
{{--                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {--}}
{{--                    "complete" === a.readyState && t.readyCallback()--}}
{{--                })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))--}}
{{--            }(window, document, window._wpemojiSettings);--}}
{{--        </script>--}}
{{--        <script src="/external_js/wp-emoji-release.min.js" type="text/javascript" defer=""></script>--}}
{{--        <style type="text/css">--}}
{{--            img.wp-smiley,--}}
{{--            img.emoji {--}}
{{--                display: inline !important;--}}
{{--                border: none !important;--}}
{{--                box-shadow: none !important;--}}
{{--                height: 1em !important;--}}
{{--                width: 1em !important;--}}
{{--                margin: 0 .07em !important;--}}
{{--                vertical-align: -0.1em !important;--}}
{{--                background: none !important;--}}
{{--                padding: 0 !important;--}}
{{--            }--}}
{{--        </style>--}}
{{--        <script type="text/javascript" src="/external_js/jquery/jquery.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/jquery/jquery-migrate.min.js"></script>--}}
{{--        NOT_USED?--}}
{{--        <script type="text/javascript" src="/external_js/revslider/jquery.themepunch.tools.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/revslider/jquery.themepunch.revolution.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/norebro/twentytwenty/jquery.event.move.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/norebro/twentytwenty/jquery.twentytwenty.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/norebro/customjs.js"></script>--}}
        <script type="text/javascript">
            /* <![CDATA[ */
            var wpcf7 = {
                "apiSettings": {
                    "root": "{{url('/send-feedback')}}",
                    "namespace": "contact-form-7\/v1"
                }, "recaptcha": {"messages": {"empty": "Please verify that you are not a robot."}}, "cached": "1"
            };
            /* ]]> */
        </script>
{{--        <script type="text/javascript" src="/external_js/contact-form-7/scripts.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/cf7-conditional-fields/scripts.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/norebro/woocommerce-hack.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/core.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/position.min.js"></script>--}}
        <script type="text/javascript">
            /* <![CDATA[ */
            var pum_vars = {
                "version": "1.7.29",
                "ajaxurl": "https:\/\/www.spotlessagency.com\/wp-admin\/admin-ajax.php",
                "restapi": "https:\/\/www.spotlessagency.com\/wp-json\/pum\/v1",
                "rest_nonce": null,
                "default_theme": "15147",
                "debug_mode": "",
                "disable_tracking": "",
                "home_url": "\/",
                "message_position": "top",
                "core_sub_forms_enabled": "1",
                "popups": []
            };
            var ajaxurl = "https:\/\/www.spotlessagency.com\/wp-admin\/admin-ajax.php";
            var pum_debug_vars = {
                "debug_mode_enabled": "Popup Maker: Debug Mode Enabled",
                "debug_started_at": "Debug started at:",
                "debug_more_info": "For more information on how to use this information visit https:\/\/docs.wppopupmaker.com\/?utm_medium=js-debug-info&utm_campaign=ContextualHelp&utm_source=browser-console&utm_content=more-info",
                "global_info": "Global Information",
                "localized_vars": "Localized variables",
                "popups_initializing": "Popups Initializing",
                "popups_initialized": "Popups Initialized",
                "single_popup_label": "Popup: #",
                "theme_id": "Theme ID: ",
                "label_method_call": "Method Call:",
                "label_method_args": "Method Arguments:",
                "label_popup_settings": "Settings",
                "label_triggers": "Triggers",
                "label_cookies": "Cookies",
                "label_delay": "Delay:",
                "label_conditions": "Conditions",
                "label_cookie": "Cookie:",
                "label_settings": "Settings:",
                "label_selector": "Selector:",
                "label_mobile_disabled": "Mobile Disabled:",
                "label_tablet_disabled": "Tablet Disabled:",
                "label_event": "Event: %s",
                "triggers": {"click_open": "Click Open", "auto_open": "Time Delay \/ Auto Open"},
                "cookies": {
                    "on_popup_close": "On Popup Close",
                    "on_popup_open": "On Popup Open",
                    "pum_sub_form_success": "Subscription Form: Successful",
                    "pum_sub_form_already_subscribed": "Subscription Form: Already Subscribed",
                    "manual": "Manual JavaScript",
                    "cf7_form_success": "Contact Form 7 Success"
                }
            };
            var pum_sub_vars = {
                "ajaxurl": "https:\/\/www.spotlessagency.com\/wp-admin\/admin-ajax.php",
                "message_position": "top"
            };
            var pum_popups = {
                "pum-15168": {
                    "disable_form_reopen": false,
                    "disable_on_mobile": false,
                    "disable_on_tablet": false,
                    "custom_height_auto": false,
                    "scrollable_content": false,
                    "position_from_trigger": false,
                    "position_fixed": false,
                    "overlay_disabled": false,
                    "stackable": false,
                    "disable_reposition": false,
                    "close_on_overlay_click": false,
                    "close_on_esc_press": false,
                    "close_on_f4_press": false,
                    "theme_id": "15148",
                    "size": "normal",
                    "responsive_min_width": "0%",
                    "responsive_max_width": "100%",
                    "custom_width": "640px",
                    "custom_height": "380px",
                    "animation_type": "fade",
                    "animation_speed": "350",
                    "animation_origin": "center top",
                    "location": "center top",
                    "position_top": "100",
                    "position_bottom": "0",
                    "position_left": "0",
                    "position_right": "0",
                    "zindex": "1999999999",
                    "close_button_delay": "0",
                    "triggers": [],
                    "cookies": [],
                    "id": 15168,
                    "slug": "pricing-professional"
                },
                "pum-15166": {
                    "disable_form_reopen": false,
                    "disable_on_mobile": false,
                    "disable_on_tablet": false,
                    "custom_height_auto": false,
                    "scrollable_content": false,
                    "position_from_trigger": false,
                    "position_fixed": false,
                    "overlay_disabled": false,
                    "stackable": false,
                    "disable_reposition": false,
                    "close_on_overlay_click": false,
                    "close_on_esc_press": false,
                    "close_on_f4_press": false,
                    "theme_id": "15148",
                    "size": "normal",
                    "responsive_min_width": "0%",
                    "responsive_max_width": "100%",
                    "custom_width": "640px",
                    "custom_height": "380px",
                    "animation_type": "fade",
                    "animation_speed": "350",
                    "animation_origin": "center top",
                    "location": "center top",
                    "position_top": "100",
                    "position_bottom": "0",
                    "position_left": "0",
                    "position_right": "0",
                    "zindex": "1999999999",
                    "close_button_delay": "0",
                    "triggers": [],
                    "cookies": [],
                    "id": 15166,
                    "slug": "pricing-standard"
                },
                "pum-15153": {
                    "disable_form_reopen": false,
                    "disable_on_mobile": false,
                    "disable_on_tablet": false,
                    "custom_height_auto": false,
                    "scrollable_content": false,
                    "position_from_trigger": false,
                    "position_fixed": false,
                    "overlay_disabled": false,
                    "stackable": false,
                    "disable_reposition": false,
                    "close_on_overlay_click": false,
                    "close_on_esc_press": false,
                    "close_on_f4_press": false,
                    "theme_id": "15148",
                    "size": "normal",
                    "responsive_min_width": "0%",
                    "responsive_max_width": "100%",
                    "custom_width": "640px",
                    "custom_height": "380px",
                    "animation_type": "fade",
                    "animation_speed": "350",
                    "animation_origin": "center top",
                    "location": "center top",
                    "position_top": "100",
                    "position_bottom": "0",
                    "position_left": "0",
                    "position_right": "0",
                    "zindex": "1999999999",
                    "close_button_delay": "0",
                    "triggers": [],
                    "cookies": [],
                    "id": 15153,
                    "slug": "pricing-light"
                }
            };
            /* ]]> */
        </script>
{{--        <script type="text/javascript" src="/external_js/site.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/wp-embed.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/js_composer_front.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/waypoints.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/imagesloaded.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/masonry.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/jquery.masonry.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/underscore.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/aos.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/isotope.pkgd.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/jquery.mega-menu.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/navigation.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/skip-link-focus-fix.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/owl.carousel.min.js"></script>--}}
{{--        <script type="text/javascript" src="/external_js/scroll-smooth.min.js"></script>--}}
        <script type="text/javascript" src="{{ asset('/js/vendors.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
        @stack('scripts')
    </body>
</html>
