<?php
/**
 * @var $backgroundImageUrl string
 * @var $fullImageUrl string
 */
?>

@extends('appWithFooter')

@push('bodyClasses', 'norebro_portfolio-template-default single single-norebro_portfolio')

@section('mastheadClasses', 'dark-text header-2 no-transition')

@section('style-inline-css')
    <style id='norebro-style-inline-css' type='text/css'>
        #masthead.site-header, #mega-menu-wrap ul li, #masthead .menu-other > li > a, #masthead.site-header .header-bottom .copyright {font-size:14px;color:#373c40;}#masthead.site-header{}#masthead.site-header{border-bottom-style:solid;}.header-title .bg-image{background-color:#f5fafd;background-image:url('https://www.spotlessagency.com/wp-content/uploads/2018/06/Michele_Living_Dining_staged_corrected.jpg');background-size:cover;}.header-title{height:450px;min-height:450px;}.header-title::after{background-color:rgba(255,255,255,0.6);}.header-title h1.page-title{font-size:62px;color:#404044;}.header-title .subtitle{font-size:18px;color:#5e646a;}.norebro-bar{background-color:#ffffff;color:#373c40;}.bar-hamburger{color:#373c40;}body .site-content{background-size:auto;background-position:center center;background-repeat: repeat;}#fullscreen-mega-menu .copyright,.fullscreen-navigation #secondary-menu li a,.fullscreen-navigation #secondary-menu li:hover > a.menu-link,.fullscreen-navigation #secondary-menu li div.sub-nav a,.fullscreen-navigation #secondary-menu li .sub-sub-menu a{color:#373c40;}.fullscreen-navigation .ion-ios-close-empty{color:#373c40;}footer.site-footer{background-color:#34373a;background-size:cover;}.site-footer .widget,.site-footer .widget p,.site-footer .widget .subtitle,.site-footer .widget a,.site-footer .widget .widget-title, .site-footer .widget a:hover, .site-footer .widget h3 a, .site-footer .widget h4 a,.site-footer .widgets .socialbar a.social.outline span,.site-footer .widgets input,.site-footer input:not([type="submit"]):hover, .site-footer .widget_recent_comments .comment-author-link,.site-footer .widgets input:focus,.site-footer .widget_norebro_widget_subscribe button.btn,.site-footer .widgets select,.site-footer .widget_tag_cloud .tagcloud a,.site-footer .widget_tag_cloud .tagcloud a:hover{}.site-footer .widget_norebro_widget_subscribe button.btn, .site-footer .widget_norebro_widget_subscribe button.btn:hover,.site-footer input:not([type="submit"]), .site-footer input:not([type="submit"]):focus,.site-footer .widgets .socialbar a.social.outline,.site-footer .widgets select,.site-footer .widget_tag_cloud .tagcloud a,.site-footer .widget_tag_cloud .tagcloud a:hover{}.site-footer .widget_norebro_widget_subscribe button.btn:hover, .site-footer .widgets .socialbar a.social.outline:hover{}footer.site-footer .site-info,footer.site-footer .site-info a,footer.site-footer .site-info a:hover{background-color:#34373a;color:#707479;}footer.site-footer .site-info a,footer.site-footer .site-info a:hover{}body, .font-main, .font-main a,p{font-family:'Poppins', sans-serif;font-size:16px;color:#5e646a;}input,select,textarea,.accordion-box .buttons h5.title,.woocommerce div.product accordion-box.outline h5{font-family:'Poppins', sans-serif;font-size:16px;}h1,h2,h3,h3.second-title,h4,h5,.counter-box .count,.counter-box .counter-box-count,h1 a,h2 a,h3 a,h4 a,h5 a{font-family:'Poppins', sans-serif;font-weight:500;color:#373c40;}.countdown-box .box-time .box-count,.chart-box-pie-content{font-family:'Poppins', sans-serif;font-weight:500;color:#373c40;}button,.btn,a.btn,input[type="submit"],.socialbar.boxed-fullwidth a .social-text, .breadcrumbs,.font-titles,h1, h2, h3, h4, h5, h6,.countdown-box .box-time .box-count,.counter-box .counter-box-count,.vc_row .vc-bg-side-text,.slider-vertical-numbers li, .slider-vertical-numbers > div, .slider-vertical-numbers > .owl-dot,.slider-vertical-dots li,.slider-vertical-dots > div,.slider-vertical-dots > .owl-dot,.socialbar.inline a,.socialbar.boxed a .social-text,.widget_calendar caption,.breadcrumbs,nav.pagination,#masthead .site-title,#masthead .site-title a,.header-search form input,#mega-menu-wrap > ul > li,#masthead .menu-other > li > a,#masthead .menu-other > li .submenu .sub-nav.languages li a,.fullscreen-navigation .languages,.portfolio-sorting li,.portfolio-item.grid-4 .more, .portfolio-item.grid-5 .more,.portfolio-grid-4 .scroll, .portfolio-grid-5 .scroll, .portfolio-grid-7 .scroll{font-family:'Poppins', sans-serif;}.portfolio-item h4,.portfolio-item h4.title,.portfolio-item h4 a,.portfolio-item-2 h4,.portfolio-item-2 h4.title,.portfolio-item-2 h4 a,.woocommerce ul.products li.product a {font-family:'Poppins', sans-serif;font-weight:500;color:#373c40;font-size:inherit;line-height:inherit;}.blog-item h3.title{font-family:'Poppins', sans-serif;font-weight:500;color:#373c40;line-height:initial;}.blog-item h3.title a{font-size: initial;}.portfolio-item-2 h4 {font-family:'Poppins', sans-serif;font-weight:500;}p.subtitle,.subtitle-font,a.category{font-family:'Poppins', sans-serif;font-size:18px;color:#718091;}span.category > a,div.category > a{font-family:'Poppins', sans-serif;color:#718091;}.portfolio-item .subtitle-font,.woocommerce ul.products li.product .subtitle-font.category,.woocommerce ul.products li.product .subtitle-font.category > a{font-family:'Poppins', sans-serif;color:#718091;font-size:inherit;line-height:inherit;}input.classic::-webkit-input-placeholder,.contact-form.classic input::-webkit-input-placeholder,.contact-form.classic textarea::-webkit-input-placeholder,input.classic::-moz-placeholder{font-family:'Poppins', sans-serif;font-size:18px;color:#718091;}.contact-form.classic input::-moz-placeholder,.contact-form.classic textarea::-moz-placeholder{font-family:'Poppins', sans-serif;font-size:18px;color:#718091;}input.classic:-ms-input-placeholder,.contact-form.classic input:-ms-input-placeholder,.contact-form.classic textarea:-ms-input-placeholder{font-family:'Poppins', sans-serif;font-size:18px;color:#718091;}.accordion-box .title:hover .control,.accordion-box .item.active .control,.accordion-box.title-brand-color .title,.accordion-box.active-brand-color .item.active .control,.accordion-box.active-brand-color .title:hover .control,.slider .owl-dot.brand,.socialbar.brand a:hover,.socialbar.brand.outline a,.socialbar.brand.flat a,.socialbar.brand.inline a:hover,.video-module .btn-play.outline.btn-brand,.video-module.boxed:hover .btn-play.btn-brand,.widget_tag_cloud .tagcloud a:hover, .widget_product_tag_cloud .tagcloud a:hover,.widget_nav_menu .menu-item a:hover,.widget_pages .menu-item a:hover,.widget_nav_menu .current-menu-item a,.widget_pages .current-menu-item a,.widget-sidebar-menu-left .menu-item a:hover,.widget_rss ul a,.widget_norebro_widget_recent_posts ul.recent-posts-list h4 a:hover,.widget_norebro_widget_login a,.widget div.star-rating:before,.widget div.star-rating span:before, .widget span.star-rating:before,.widget span.star-rating span:before,a:hover,p a,.btn-brand:hover,.btn-outline.btn-brand,a.btn-outline.btn-brand,.btn-outline.btn-brand.disabled:hover,a.btn-outline.btn-brand.disabled:hover,.btn-link.btn-brand,a.btn-link.btn-brand,a.tag:hover,.tag-wrap a:hover,a[class^="tag-link-"]:hover,nav.pagination li a.page-numbers.active,.fullscreen-navigation .copyright .content > a,.fullscreen-navigation.simple ul.menu li:hover > a,.fullscreen-navigation.centered .fullscreen-menu-wrap ul.menu > li a:hover,.post-navigation .box-wrap > a:hover h4, .post-navigation .box-wrap > a:hover .icon,.bar .content a:hover,.bar .share .links a:hover,.portfolio-sorting li a:hover,.portfolio-item h4.title a:hover, .portfolio-item .widget h4 a:hover, .widget .portfolio-item h4 a:hover,.portfolio-item .category.outline,.portfolio-item.grid-2:hover h4.title, .portfolio-item.grid-2:hover .widget h4, .widget .portfolio-item.grid-2:hover h4,.portfolio-item.grid-2.hover-2 .overlay span,.portfolio-item.grid-5 .more span,.blog-grid .tags a:hover,.blog-grid:hover h3 a,.blog-grid.grid-4:hover .tags a,.post .entry-content a,.page-links a,.entry-footer .share .title:hover,.toggle-post:hover .arrow,.toggle-post:hover .content h3,.post .comments-link a:hover,.comments-area .comment-body .comment-meta .reply a,.comments-area .comment-body .comment-meta a.comment-edit-link,.comments-area .reply a,.comments-area .reply-cancle a,.comments-area a.comment-edit-link,input.brand-color,input[type="submit"].brand-color,button.brand-color,a.brand-color,div.brand-color,span.brand-color,input.brand-color-hover:hover,input[type="submit"].brand-color-hover:hover,button.brand-color-hover:hover,a.brand-color-hover:hover,div.brand-color-hover:hover,span.brand-color-hover:hover,.brand-color,.brand-color-after:after,.brand-color-before:before,.brand-color-hover:hover,.brand-color-hover-after:after,.brand-color-hover-before:before,.woocommerce .product div.summary .woo-review-link:hover,.woocommerce .product .product_meta a,ul.woo-products li.product:hover h3 a,.woocommerce form.login a,.woocommerce #payment li.wc_payment_method a.about_paypal,.woocommerce .woo-my-nav li.is-active a,.woocommerce .woo-my-content p a:hover{color:#f3b435;}.video-module.btn-brand-color-hover:hover .btn-play .icon,.brand-color-i,.brand-color-after-i:after,.brand-color-before-i:before,.brand-color-hover-i:hover,.brand-color-hover-i-after:after,.brand-color-hover-i-before:before{color:#f3b435 !important;}.accordion-box.outline.title-brand-border-color .title,.contact-form.without-label-offset .focus.active,.contact-form.flat input:not([type="submit"]):focus, .contact-form.flat select:focus, .contact-form.flat textarea:focus,.socialbar.brand a,.video-module .btn-play.btn-brand,.widget_tag_cloud .tagcloud a:hover, .widget_product_tag_cloud .tagcloud a:hover,.widget_calendar tbody tr td#today,.btn-brand,.btn-outline.btn-brand,a.btn-outline.btn-brand,.btn-outline.btn-brand:hover,a.btn-outline.btn-brand:hover,.btn-outline.btn-brand.disabled:hover,a.btn-outline.btn-brand.disabled:hover,input:not([type="submit"]):focus,textarea:focus,select:focus,a.tag:hover,.tag-wrap a:hover,a[class^="tag-link-"]:hover,.portfolio-gallery .gallery-content .tag,.header-search form input:focus,.fullscreen-navigation.simple ul.menu li:hover > a:after, .fullscreen-navigation.simple ul.menu li:hover > a:before,.portfolio-item .category.outline,.portfolio-page.fullscreen .content .tag,.portfolio-page.portfolio-header-title.invert .tag,.entry-footer .share .title:hover,input.brand-border-color,input[type="submit"].brand-border-color,button.brand-border-color,a.brand-border-color,div.brand-border-color,span.brand-border-color,input.brand-border-color-hover:hover,input[type="submit"].brand-border-color-hover:hover,button.brand-border-color-hover:hover,a.brand-border-color-hover:hover,div.brand-border-color-hover:hover,span.brand-border-color-hover:hover,.brand-border-color,.brand-border-color-after:after,.brand-border-color-before:before,.brand-border-color-hover:hover,.brand-border-color-hover-after:after,.brand-border-color-hover-before:before{border-color:#f3b435;}.brand-border-color-i,.brand-border-color-after-i:after,.brand-border-color-before-i:before,.brand-border-color-hover-i:hover,.brand-border-color-hover-i-after:after,.brand-border-color-hover-i-before:before{border-color:#f3b435 !important;}.divider,h1.with-divider:after, h2.with-divider:after, h3.with-divider:after, h4.with-divider:after, h5.with-divider:after, h6.with-divider:after,.accordion-box.title-brand-bg-color .title,.list-box li:after, .widget_recent_comments li:after, .widget_recent_entries li:after, .widget_meta li:after, .widget_archive li:after, .widget_nav_menu li:after,.widget_pages li:after, .widget_categories li:after, .widget_rss li:after, .widget_product_categories li:after,.list-box.icon-fill li .icon, .icon-fill.widget_recent_comments li .icon, .icon-fill.widget_recent_entries li .icon, .icon-fill.widget_meta li .icon, .icon-fill.widget_archive li .icon, .icon-fill.widget_nav_menu li .icon,.icon-fill.widget_pages li .icon, .icon-fill.widget_categories li .icon, .icon-fill.widget_rss li .icon, .icon-fill.widget_product_categories li .icon,.socialbar.brand a,.socialbar.brand.outline a:hover,.socialbar.brand.flat a:hover,.video-module .btn-play.btn-brand,.video-module.boxed:hover .btn-play.outline.btn-brand,.widget_calendar caption,.widget_price_filter .ui-slider-range,.widget_price_filter .ui-slider-handle:after,a.hover-underline.underline-brand:before,.btn-brand,button[disabled].btn-brand:hover,input[type="submit"][disabled].btn-brand:hover,.btn-outline.btn-brand:hover,a.btn-outline.btn-brand:hover,.radio input:checked + .input:after,.radio:hover input:checked + .input:after,.portfolio-gallery .gallery-content .tag,nav.pagination li a.hover-underline:before,.portfolio-sorting li a:hover .name:before,.portfolio-item .category,.portfolio-page.fullscreen .content .tag,.portfolio-page.portfolio-header-title.invert .tag,input.brand-bg-color,input[type="submit"].brand-bg-color,button.brand-bg-color,a.brand-bg-color,div.brand-bg-color,span.brand-bg-color,input.brand-bg-color-hover:hover,input[type="submit"].brand-bg-color-hover:hover,button.brand-bg-color-hover:hover,a.brand-bg-color-hover:hover,div.brand-bg-color-hover:hover,span.brand-bg-color-hover:hover,.brand-bg-color,.brand-bg-color-after:after,.brand-bg-color-before:before,.brand-bg-color-hover:hover,.brand-bg-color-hover-after:after,.brand-bg-color-hover-before:before,.woocommerce .product .product_meta > span:after,.select2-dropdown .select2-results__option[aria-selected="true"],.woocommerce .woo-my-content mark{background-color:#f3b435;}.brand-bg-color-i,.brand-bg-color-after-i:after,.brand-bg-color-before-i:before,.brand-bg-color-hover-i:hover,.brand-bg-color-hover-i-after:after,.brand-bg-color-hover-i-before:before{background-color:#f3b435 !important;}
    </style>
    <style id='shortcodes-settings-inline-css' type='text/css'>
        #norebro-custom-5e9791fe6818d .gallery-image{padding:15px;}
    </style>
@endsection

@section('base-content')
    <!-- Content -->
    <div class="portfolio-page portfolio-header-title invert show" id="scroll-portfolio"
         data-norebro-bg-image="{{ $backgroundImageUrl }}"
         style="background-image: url('{{ $backgroundImageUrl }}');">
        <div class="content-center">
            <div class="wrap">
                <a href="/virtual-staging-works/" class="back font-titles hover-underline">
                    <span class="icon ion-android-arrow-back"></span>Back
                </a>
                <div class="portfolio-content">
                    @yield('portfolio-content')
                </div><!--.content-->
            </div>
            <div class="scroll font-titles">Scroll</div>
        </div><!--.content-center-->
    </div>
    <div class="page-container">
        <div class="page-content">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            @section('portfolio-container')
                                <div class="norebro-gallery-sc gallery-wrap" id="norebro-custom-5e9791fe6818d"
                                 data-gallery="norebro-custom-5e9791fe68146">
                                <div class="vc_row" data-lazy-container="true">
                                    <div
                                        class=" vc_col-lg-12 vc_col-md-12 vc_col-sm-12 vc_col-xs-12 masonry-block grid-item gallery-image"
                                        data-gallery-item="0" data-lazy-item="true">
                                        <div class="wrap">
                                            <img class="gimg" src="{{ $fullImageUrl }}" alt="">
                                            <div class="overlay">
                                                <div class="content-center text-center">
                                                    <div class="wrap">
                                                        <h4 class="inline">View Fullscreen </h4>
                                                        <div class="icon inline ion-ios-plus-empty"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gallery-description">
                                                <h3 class="title">@yield('gallery-description')</h3>
                                                <p class="subtitle small"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            @show
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bodyBottom')
    <div class="norebro-gallery-opened-sc gallery" id="norebro-custom-5e9791fe68146"
         data-options="{&quot;navClass&quot;:&quot;&quot;}">
        <div class="expand">
            <span class="ion-android-expand"></span>
        </div>
        <div class="close">
            <span class="ion-ios-close-empty"></span>
        </div>
    </div>
@endsection
