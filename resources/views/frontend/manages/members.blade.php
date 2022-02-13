@extends('layouts.userapp')

@section('content')
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_column-inner {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        /*.vc_custom_1543585777887 {*/
        /*    padding-right: 0px !important;*/
        /*    padding-left: 0px !important;*/
        /*}*/

        /*.vc_custom_1543585790272 {*/
        /*    padding-right: 0px !important;*/
        /*    padding-left: 0px !important;*/
        /*}*/

        /*.vc_custom_1543585806892 {*/
        /*    padding-right: 0px !important;*/
        /*    padding-left: 0px !important;*/
        /*}*/
    </style>

    <script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">//<![CDATA[
        var gtm4wp_datalayer_name = "dataLayer";
        var dataLayer = dataLayer || [];
        //]]>
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" href="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/d6a97.css"
          media="all"/>
    <link rel='stylesheet' id='rabbit_css-css'
          href='https://export.qodethemes.com/_toolbar/assets/css/rbt-modules.css?ver=5.2.2' type='text/css'
          media='all'/>
    <link rel="stylesheet" href="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/c138f.css"
          media="all"/>

    <link rel="stylesheet" href="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/ac99c.css"
          media="all"/>
    <style id='diefinnhutte-select-woo-inline-css' type='text/css'>
        .page-id-1740 .qodef-content .qodef-content-inner > .qodef-container > .qodef-container-inner, .page-id-1740 .qodef-content .qodef-content-inner > .qodef-full-width > .qodef-full-width-inner {
            padding: 0 0;
        }

        @media only screen and (max-width: 1024px) {
            .page-id-1740 .qodef-content .qodef-content-inner > .qodef-container > .qodef-container-inner, .page-id-1740 .qodef-content .qodef-content-inner > .qodef-full-width > .qodef-full-width-inner {
                padding: 0 0;
            }
        }

        .page-id-1740 .qodef-content .qodef-content-inner > .qodef-container > .qodef-container-inner, .page-id-1740 .qodef-content .qodef-content-inner > .qodef-full-width > .qodef-full-width-inner {
            padding: 0 0;
        }

        @media only screen and (max-width: 1024px) {
            .page-id-1740 .qodef-content .qodef-content-inner > .qodef-container > .qodef-container-inner, .page-id-1740 .qodef-content .qodef-content-inner > .qodef-full-width > .qodef-full-width-inner {
                padding: 0 0;
            }
        }

        .page-id-1740 .qodef-page-header .qodef-menu-area {
            background-color: rgba(23, 23, 23, 1);
        }

        .page-id-1740 .qodef-page-footer .qodef-footer-top-holder {
            background-color: #252525;
        }

        .page-id-1740 .qodef-page-footer .qodef-footer-bottom-holder {
            background-color: #171717;
        }

        @media screen and (max-device-width: 729px) {
            .qodef-title-inner .qodef-grid{
                width: 100%;
            }

            .qodef-team-image img {
                height: auto!important;
            }
        }

    </style>
    <link rel="stylesheet" href="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/620a1.css"
          media="all"/>
    <link rel='stylesheet' id='diefinnhutte-select-google-fonts-css'
          href='https://fonts.googleapis.com/css?family=Overpass%3A100%2C200%2C300%2C400%2C600%2C700%2C800%7COswald%3A100%2C200%2C300%2C400%2C600%2C700%2C800&#038;subset=latin-ext&#038;ver=1.0.0'
          type='text/css' media='all'/>
    <!--[if lt IE 9]>
    <link rel='stylesheet' id='vc_lte_ie9-css'
          href='https://diefinnhutte.qodeinteractive.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css'
          type='text/css' media='screen'/>
    <![endif]-->
    <link rel="stylesheet" href="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/82aae.css"
          media="all"/>
    <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/e58d4.js"></script>
    <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/f1253.js"></script>
    <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/864c2.js"></script>

    <style type="text/css" id="wp-custom-css">
        .qodef-parallax-row-holder {
            background-size: cover;
        }

        .qodef-title-holder.qodef-bg-parallax {
            background-size: cover;
        }
    </style>
    <noscript>
        <style> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>

    {{--    //override--}}
    <style>
        .qodef-side-menu-slide-from-right .qodef-wrapper .qodef-cover {
            top: unset;
        }
        .qodef-side-menu-slide-from-right .qodef-wrapper {
            z-index: 0!important;
        }

        .qodef-container, .qodef-full-width {
            padding-bottom: 2vw;
            background: black;
        }

        .qodef-team-image img {
            height: 33vw;
        }
        @media screen and (min-width: 1024px){
            .fp-nav-list-wrap.higher {
                top: 12px!important;
            }
        }
    </style>
    <div style="overflow: hidden; padding-top: 74px">
        <div class="page-template page-template-full-width page-template-full-width-php page page-id-1740 diefinnhutte-core-1.0 woocommerce-no-js diefinnhutte-ver-1.0 qodef-grid-1200 qodef-wide-dropdown-menu-content-in-grid qodef-footer-light qodef-light-header qodef-no-behavior qodef-dropdown-animate-height qodef-header-standard qodef-menu-area-shadow-disable qodef-menu-area-in-grid-shadow-disable qodef-menu-area-border-disable qodef-menu-area-in-grid-border-disable qodef-logo-area-border-disable qodef-logo-area-in-grid-border-disable qodef-header-vertical-shadow-disable qodef-header-vertical-border-disable qodef-side-menu-slide-from-right qodef-woocommerce-columns-3 qodef-woo-normal-space qodef-woo-pl-info-below-image qodef-woo-single-thumb-below-image qodef-woo-single-has-pretty-photo qodef-default-mobile-header qodef-sticky-up-mobile-header qodef-fullscreen-search qodef-search-fade wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
            <div class="qodef-wrapper">
                <div class="qodef-wrapper-inner">
                    <div class="qodef-fullscreen-search-holder">
                        <a class="qodef-search-close qodef-search-close-predefined" href="javascript:void(0)">
                <span class="qodef-hm-lines"><span class="qodef-hm-line qodef-line-1"></span><span
                            class="qodef-hm-line qodef-line-2"></span></span> </a>
                        <div class="qodef-fullscreen-search-table">
                            <div class="qodef-fullscreen-search-cell">
                                <div class="qodef-fullscreen-search-inner">
                                    <form action="https://diefinnhutte.qodeinteractive.com/"
                                          class="qodef-fullscreen-search-form"
                                          method="get">
                                        <div class="qodef-form-holder">
                                            <div class="qodef-form-holder-inner">
                                                <div class="qodef-field-holder">
                                                    <input type="text" placeholder="Search for..." name="s"
                                                           class="qodef-search-field" autocomplete="off" required/>
                                                </div>
                                                <button type="submit"
                                                        class="qodef-search-submit qodef-search-submit-predefined">
                                            <span aria-hidden="true"
                                                  class="qodef-icon-font-elegant arrow_right "></span>
                                                </button>
                                                <div class="qodef-line"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qodef-content">
                        <div class="qodef-content-inner">
                            <div class="qodef-title-holder qodef-centered-type qodef-title-va-header-bottom"
                                 style="height: 358px;background-color: #171717" data-height="358">
                                <div class="qodef-title-wrapper" style="height: 358px">
                                    <div class="qodef-title-inner">
                                        <div class="qodef-grid">
                                            <h1 class="qodef-page-title entry-title" style="color: #ffffff">Our
                                                Team</h1>
                                        </div>
                                        <div class="qodef-breadcrumbs-info">
                                            <div itemprop="breadcrumb" class="qodef-breadcrumbs qodef-has-inline-style"
                                                 style="color: #ffffff"><a itemprop="url"
                                                                           href="https://diefinnhutte.qodeinteractive.com/">Home</a><span
                                                        class="qodef-delimiter">&nbsp; / &nbsp;</span><span
                                                        class="qodef-current">Our Team</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qodef-full-width">
                                <div class="qodef-full-width-inner">
                                    <div class="qodef-grid-row">
                                        <div class="qodef-page-content-holder qodef-grid-col-12">
                                            @for($i = 0; $i< ceil(count($members)/4); $i++)
                                                <div class="vc_row wpb_row vc_row-fluid">
                                                    @for($j=$i*4; $j<min($i*4+4, count($members)); $j++)
                                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="qodef-team-holder qodef-team-info-on-image">
                                                                        <div class="qodef-team-inner">
                                                                            <div class="qodef-team-image">
                                                                                <img width="800" height="1061"
                                                                                     src="{{$members[$j]->member_image}}"
                                                                                     class="attachment-full size-full"
                                                                                     alt="{{$members[$j]->member_name}}"/>
                                                                                <div class="qodef-team-social-wrapper">
                                                                                    <div class="qodef-team-social-outer">
                                                                                        <div class="qodef-team-social-inner">
                                                                                            <h5 class="qodef-team-position">
                                                                                                {{$members[$j]->member_designation}}
                                                                                            </h5>
                                                                                            <h4 class="qodef-team-name">
                                                                                                {{$members[$j]->member_name}}
                                                                                            </h4>
                                                                                            {{--                                                                                        <div class="qodef-team-social-text-holder">--}}
                                                                                            {{--                                                                                            <a href="https://www.instagram.com/qodeinteractive/"--}}
                                                                                            {{--                                                                                               target="_blank">instagram</a>--}}
                                                                                            {{--                                                                                            <a href="https://twitter.com/QodeInteractive"--}}
                                                                                            {{--                                                                                               target="_blank">twitter</a>--}}
                                                                                            {{--                                                                                            <a href="https://www.linkedin.com/company/qode-themes/"--}}
                                                                                            {{--                                                                                               target="_blank">linkedin</a>--}}
                                                                                            {{--                                                                                        </div>--}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('common.footer')
                </div>
            </div>


            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

            <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/4b6b3.js"></script>

            <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/0fef6.js"></script>

            <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/63c68.js"></script>

            <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/63a69.js"></script>

            <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/6c34b.js"></script>

            <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/be575.js"></script>

            <script src="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/13d7d.js"></script>
        </div>
    </div>
@endsection