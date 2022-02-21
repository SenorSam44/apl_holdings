@extends('layouts.userapp')

@push('head-script')

    <script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">//<![CDATA[
        var gtm4wp_datalayer_name = "dataLayer";
        var dataLayer = dataLayer || [];
        //]]>
    </script>

    <link rel='stylesheet'
          href='/static/css/dief.css' type='text/css'/>

@endpush

@section('content')
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
                                            <h1 class="qodef-page-title entry-title" style="color: #fff; max-width: 100vw">Our
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



            <script src="/static/js/dief.js"></script>
        </div>
    </div>
@endsection