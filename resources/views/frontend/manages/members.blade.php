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
        }        </style>
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

        .qodef-container, .qodef-full-width {
            padding-bottom: 2vw;
            background: black;
        }

        .qodef-team-image img{
            height: 33vw;
        }
    </style>

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
                                        <h1 class="qodef-page-title entry-title" style="color: #ffffff">Our Team</h1>
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
                <footer class="qodef-page-footer ">
                    <div class="qodef-footer-top-holder">
                        <div class="qodef-footer-top-inner qodef-grid">
                            <div class="qodef-grid-row qodef-footer-top-alignment-left">
                                <div class="qodef-column-content qodef-grid-col-3">
                                    <div id="text-2" class="widget qodef-footer-column-1 widget_text">
                                        <div class="textwidget"><h3 style="margin: 0 0 14px 0;">Our Company<br/>
                                                Is Here 4u</h3>
                                            <p style="margin: 0 0 -20px;">Sed ut perspiciatis unde omnis iste natus
                                                error
                                                sit
                                                voluptatem</p>
                                        </div>
                                    </div>
                                    <div class="widget qodef-button-widget"><a itemprop="url"
                                                                               href="https://diefinnhutte.qodeinteractive.com/about-us/"
                                                                               target="_self"
                                                                               class="qodef-btn qodef-btn-small qodef-btn-simple qodef-btn-custom-hover-color qodef-btn-underlined">
                                            <span class="qodef-btn-text">Read More</span>
                                        </a></div>
                                </div>
                                <div class="qodef-column-content qodef-grid-col-3">
                                    <div class="widget qodef-blog-list-widget">
                                        <div class="qodef-widget-title-holder"><h5 class="qodef-widget-title">Post</h5>
                                        </div>
                                        <div class="qodef-blog-list-holder qodef-grid-list qodef-disable-bottom-space qodef-bl-minimal qodef-one-columns qodef-normal-space qodef-bl-pag-no-pagination"
                                             data-type=minimal data-number-of-posts=2 data-number-of-columns=one
                                             data-space-between-items=normal data-orderby=date data-order=ASC
                                             data-image-size=thumbnail data-title-tag=h6 data-excerpt-length=19
                                             data-post-info-section=yes data-post-info-image=yes
                                             data-post-info-author=no
                                             data-post-info-date=yes data-post-info-category=no
                                             data-post-info-comments=no
                                             data-post-info-like=no data-post-info-share=no
                                             data-pagination-type=no-pagination
                                             data-max-num-pages=15 data-next-page=2>
                                            <div class="qodef-bl-wrapper qodef-outer-space">
                                                <ul class="qodef-blog-list">
                                                    <li class="qodef-bl-item qodef-item-space clearfix">
                                                        <div class="qodef-bli-inner">
                                                            <div class="qodef-bli-content">
                                                                <div itemprop="dateCreated"
                                                                     class="qodef-post-info-date entry-date published updated">
                                                                    <a itemprop="url"
                                                                       href="https://diefinnhutte.qodeinteractive.com/2018/11/">
                                                                        22. Nov 2018 </a>
                                                                    <meta itemprop="interactionCount"
                                                                          content="UserComments: 0"/>
                                                                </div>
                                                                <h6 itemprop="name"
                                                                    class="entry-title qodef-post-title">
                                                                    <a itemprop="url"
                                                                       href="https://diefinnhutte.qodeinteractive.com/stunning-on-all-screens/"
                                                                       title="Stunning On All Screens">
                                                                        Stunning On All Screens </a>
                                                                </h6></div>
                                                        </div>
                                                    </li>
                                                    <li class="qodef-bl-item qodef-item-space clearfix">
                                                        <div class="qodef-bli-inner">
                                                            <div class="qodef-bli-content">
                                                                <div itemprop="dateCreated"
                                                                     class="qodef-post-info-date entry-date published updated">
                                                                    <a itemprop="url"
                                                                       href="https://diefinnhutte.qodeinteractive.com/2018/11/">
                                                                        22. Nov 2018 </a>
                                                                    <meta itemprop="interactionCount"
                                                                          content="UserComments: 0"/>
                                                                </div>
                                                                <h6 itemprop="name"
                                                                    class="entry-title qodef-post-title">
                                                                    <a itemprop="url"
                                                                       href="https://diefinnhutte.qodeinteractive.com/choose-your-favorite-demo/"
                                                                       title="Choose Your Favorite Demo">
                                                                        Choose Your Favorite Demo </a>
                                                                </h6></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="qodef-column-content qodef-grid-col-3">
                                    <div id="nav_menu-2" class="widget qodef-footer-column-3 widget_nav_menu">
                                        <div class="qodef-widget-title-holder"><h5 class="qodef-widget-title">
                                                Projects</h5>
                                        </div>
                                        <div class="menu-footer-menu-one-container">
                                            <ul id="menu-footer-menu-one" class="menu">
                                                <li id="menu-item-589"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589">
                                                    <a href="https://diefinnhutte.qodeinteractive.com/portfolio-item/black-and-simple/">Urban
                                                        Landscapes</a></li>
                                                <li id="menu-item-590"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-590">
                                                    <a href="https://diefinnhutte.qodeinteractive.com/portfolio-item/modern-space/">Architecture</a>
                                                </li>
                                                <li id="menu-item-591"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-591">
                                                    <a href="https://diefinnhutte.qodeinteractive.com/portfolio-item/home-architecture/">BooLedo
                                                        Mitam</a></li>
                                                <li id="menu-item-2413"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2413">
                                                    <a href="https://diefinnhutte.qodeinteractive.com/portfolio-item/work-space/">Urban
                                                        Landscapes</a></li>
                                                <li id="menu-item-2415"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2415">
                                                    <a href="https://diefinnhutte.qodeinteractive.com/portfolio-item/confotrtable-place/">Architecture</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="qodef-column-content qodef-grid-col-3">
                                    <div id="nav_menu-7" class="widget qodef-footer-column-4 widget_nav_menu">
                                        <div class="qodef-widget-title-holder"><h5 class="qodef-widget-title">
                                                Contact</h5>
                                        </div>
                                        <div class="menu-footer-menu-second-container">
                                            <ul id="menu-footer-menu-second" class="menu">
                                                <li id="menu-item-2423"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2423">
                                                    <a href="/cdn-cgi/l/email-protection#5b3f323e3d323535332e2f2f3e1b2a343f3e75383436"><span
                                                                class="__cf_email__"
                                                                data-cfemail="f195989497989f9f9984858594b1809e9594df929e9c">[email&#160;protected]</span></a>
                                                </li>
                                                <li id="menu-item-2422"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2422">
                                                    <a href="tel:+3245202345205674">+3245 2345 5674</a></li>
                                                <li id="menu-item-2419"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2419">
                                                    <a target="_blank" rel="noopener noreferrer"
                                                       href="https://www.instagram.com/qodeinteractive/">instagram</a>
                                                </li>
                                                <li id="menu-item-2420"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2420">
                                                    <a target="_blank" rel="noopener noreferrer"
                                                       href="https://twitter.com/QodeInteractive">twitter</a></li>
                                                <li id="menu-item-2421"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2421">
                                                    <a target="_blank" rel="noopener noreferrer"
                                                       href="https://www.pinterest.com/qodeinteractive/">pinterest</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
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
@endsection