@extends('app')

@section('title', 'Best Virtual Home Staging Company In NYC')

@section('meta')
    <meta property="og:title" content="Contact Us">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/contact/')}}">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Contact Us">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description"
          content="For more information, please contact us and we will be happy to answer your questions.">
@endsection

@push('bodyClasses', 'page-id-13148')

@section('mastheadClasses', 'dark-text header-2 no-transition')

@section('contentTitle')
    <div class="header-title without-cap text-center show">
        <div class="bg-image"></div>
        <div class="title-wrap">
            <div class="content">

                <div class="page-container">
                    <div class="wrap-container">

                        <h1 class="page-title no-transition">Contact Us</h1>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- .header-title -->
@endsection

@section('content')
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1502450761306">
                <div class="wpb_wrapper">
                    <div class="vc_empty_space  norebro-phone-space" style="height: 80px">
                        <span class="vc_empty_space_inner"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper" style="height: 100%;">
                    <div class="norebro-text-sc " id="norebro-custom-5e8b7bc2d5653">

                        <div class="page-settings"
                             data-collection-id="5754285f7c65e4f5cde8bd0c">
                            <div id="page-description">
                                <p>Our responsive customers support team is always ready to
                                    assist you. Ask questions, suggest ideas &#8211; let&#8217;s
                                    make new plans and progress together!</p>
                            </div>
                        </div>
                        <div id="page-5754285f7c65e4f5cde8bd0c"
                             class="sqs-layout sqs-grid-12 columns-12" data-type="page"
                             data-updated-on="1515711882204">
                            <div class="row sqs-row">
                                <div class="col sqs-col-12 span-12">
                                    <div id="block-yui_3_17_2_62_1477491835758_8579"
                                         class="sqs-block horizontalrule-block sqs-block-horizontalrule"
                                         data-block-type="47"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-9">
            <div class="vc_column-inner " id="norebro-custom-5e8b7bc2d76f7">
                <div class="wpb_wrapper">
                    @include('home.partial.map')
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1502450761306">
                <div class="wpb_wrapper">
                    <div class="vc_empty_space  norebro-phone-space" style="height: 80px">
                        <span class="vc_empty_space_inner"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-3">
            <div class="vc_column-inner vc_custom_1525687959401">
                @include('partials.contactAddress')
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="norebro-heading-sc heading text-left" id="norebro-custom-5e9b4f446970f">
                        <h3 class="title">Say Hello </h3>
                        <p class="subtitle">
                            If you have a project for us, or just need some help, reach out
                            to us. You're always welcome. </p>

                    </div>
                    <div class="vc_empty_space" style="height: 25px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                    @include('partials.contactForm')
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1502450761306">
                <div class="wpb_wrapper">
                    <div class="vc_empty_space  norebro-phone-space" style="height: 80px">
                        <span class="vc_empty_space_inner"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <section class="vc_section"></section>

@endsection

@section('cssBottom')
    <link rel="stylesheet" id="icon-pack-linea-basic-css"
          href="{{asset('external_css/norebro/fonts/style.css')}}" type="text/css" media="all">
    <style id="shortcodes-settings-inline-css" type="text/css">
        #norebro-custom-5e8b7bc2d5653, #norebro-custom-5e8b7bc2d5653 > * {
            font-size: 18px;
        }

        #norebro-custom-5e8b7bc2d76f7 {
            height: 400px;
            position: relative;
        }

        #norebro-custom-5e8b7bc2dc309 h3 {
            color: #404044;
            font-size: 28px;
            font-weight: 500;
        }

        #norebro-custom-5e8b7bc2dcdf7 li h4 {
            line-height: 20px;
        }

        #norebro-custom-5e8b7bc2dcdf7 li .icon {
            color: #f3b435;
        }

        #norebro-custom-5e8b7bc2deb0e h3 {
            color: #404044;
            font-size: 28px;
            font-weight: 500;
        }

        #norebro-custom-5e8b7bc2df1ed input:not([type='submit']), #norebro-custom-5e8b7bc2df1ed textarea, #norebro-custom-5e8b7bc2df1ed select {
            color: #5e646a;
        }

        #norebro-custom-5e8b7bc2df1ed input::-webkit-input-placeholder, #norebro-custom-5e8b7bc2df1ed textarea::-webkit-input-placeholder {
            color: #5e646a;
        }

        #norebro-custom-5e8b7bc2df1ed input::-moz-input-placeholder, #norebro-custom-5e8b7bc2df1ed textarea::-moz-input-placeholder {
            color: #5e646a;
        }

        #norebro-custom-5e8b7bc2df1ed input::-ms-input-placeholder, #norebro-custom-5e8b7bc2df1ed textarea::-ms-input-placeholder {
            color: #5e646a;
        }

        #norebro-custom-5e8b7bc2df1ed input::-moz-placeholder, #norebro-custom-5e8b7bc2df1ed textarea::-moz-placeholder {
            color: #5e646a;
        }

        #norebro-custom-5e8b7bc2df1ed input:focus, #norebro-custom-5e8b7bc2df1ed .focus.active, #norebro-custom-5e8b7bc2df1ed textarea:focus {
            border-color: #5e646a;
        }

        #norebro-custom-5e8b7bc2df1ed button.btn:hover {
            color: #ffffff !important;
        }

        #norebro-custom-5e8b7bc2df1ed label {
            padding-top: 10px;
            padding-right: 10px;
        }
    </style>
@endsection

@push('scripts')
    @include('partials.recaptchaScript')
    @include('partials.googleMaps')
@endpush

