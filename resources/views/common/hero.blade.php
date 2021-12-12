<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="wpb_revslider_element wpb_content_element">
                    <link
                            href="https://fonts.googleapis.com/css?family=Oswald:500%2C400%7COverpass:200%2C300%2C400%7COpen+Sans:400"
                            rel="stylesheet" property="stylesheet" type="text/css"
                            media="all">
                    <div id="rev_slider_2_2_wrapper"
                         class="rev_slider_wrapper fullscreen-container"
                         data-source="gallery"
                         style="background:transparent;padding:0px;">

                        <div id="rev_slider_2_2" class="rev_slider fullscreenbanner"
                             style="display:none;" data-version="5.4.8">
                            <ul>
                                @foreach($banners as $key=> $banner)
                                    <li data-index="rs-{{$key}}" data-transition="fade"
                                        data-slotamount="default" data-hideafterloop="0"
                                        data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300"
                                        data-thumb="https://diefinnhutte.qodeinteractive.com/wp-content/uploads/2018/11/Studio-home-rev-img-1-100x50.jpg"
                                        data-rotate="0" data-saveperformance="off"
                                        data-title="Slide" data-param1="1/3" data-param2=""
                                        data-param3="" data-param4="" data-param5=""
                                        data-param6="" data-param7="" data-param8=""
                                        data-param9="" data-param10="" data-description="">

                                        <img
                                                src="{{$banner->banner_image}}"
                                                alt="a" title="Studio-home-rev-img-1"
                                                width="1920" height="1100"
                                                data-bgposition="center center"
                                                data-bgfit="cover" data-bgrepeat="no-repeat"
                                                data-bgparallax="9" class="rev-slidebg"
                                                data-no-retina>


{{--                                        <div class="tp-caption  " id="slide-2-layer-1"--}}
{{--                                             data-x="['center','center','center','center']"--}}
{{--                                             data-hoffset="['0','0','0','0']"--}}
{{--                                             data-y="['middle','middle','middle','middle']"--}}
{{--                                             data-voffset="['-122','-104','-116','-144']"--}}
{{--                                             data-fontweight="['500','500','500','400']"--}}
{{--                                             data-width="none" data-height="none"--}}
{{--                                             data-whitespace="nowrap" data-type="text"--}}
{{--                                             data-basealign="slide"--}}
{{--                                             data-responsive_offset="off"--}}
{{--                                             data-responsive="off"--}}
{{--                                             data-frames='[{"delay":200,"speed":900,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Quad.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"y:-50px;opacity:0;","ease":"Quad.easeInOut"}]'--}}
{{--                                             data-textAlign="['inherit','inherit','inherit','inherit']"--}}
{{--                                             data-paddingtop="[0,0,0,0]"--}}
{{--                                             data-paddingright="[0,0,0,0]"--}}
{{--                                             data-paddingbottom="[0,0,0,0]"--}}
{{--                                             data-paddingleft="[0,0,0,0]"--}}
{{--                                             style="z-index: 5; white-space: nowrap; font-size: 13px; line-height: 19px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Oswald;text-transform:uppercase;letter-spacing:2px;">--}}
{{--                                            Architecture--}}
{{--                                        </div>--}}

                                        <div class="tp-caption  " id="slide-2-layer-9"
                                             data-x="['center','center','center','center']"
                                             data-hoffset="['0','0','0','4']"
                                             data-y="['middle','middle','middle','middle']"
                                             data-voffset="['-48','-35','-48','-95']"
                                             data-fontsize="['85','75','70','40']"
                                             data-lineheight="['85','85','85','45']"
                                             data-fontweight="['200','200','200','300']"
                                             data-letterspacing="['26','26','26','13']"
                                             data-width="none" data-height="none"
                                             data-whitespace="nowrap" data-type="text"
                                             data-basealign="slide"
                                             data-responsive_offset="off"
                                             data-responsive="off"
                                             data-frames='[{"delay":300,"speed":900,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Quad.easeInOut"},{"delay":"wait","speed":850,"frame":"999","to":"y:-50px;opacity:0;","ease":"Quad.easeInOut"}]'
                                             data-textAlign="['inherit','inherit','inherit','inherit']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,0,0,0]"
                                             style="z-index: 6; white-space: nowrap; font-size: 85px; line-height: 85px; font-weight: 200; color: #ffffff; letter-spacing: 26px;font-family:Overpass;text-transform:uppercase;">
                                            {{$banner->banner_title}}
                                        </div>

                                        <div class="tp-caption tp-shape tp-shapewrapper "
                                             id="slide-2-layer-7"
                                             data-x="['center','center','center','center']"
                                             data-hoffset="['1','0','0','1']"
                                             data-y="['middle','middle','middle','middle']"
                                             data-voffset="['5','15','0','-60']"
                                             data-width="25" data-height="2"
                                             data-whitespace="nowrap" data-type="shape"
                                             data-basealign="slide"
                                             data-responsive_offset="off"
                                             data-responsive="off"
                                             data-frames='[{"delay":500,"speed":900,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Quad.easeInOut"},{"delay":"wait","speed":650,"frame":"999","to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Quad.easeInOut"}]'
                                             data-textAlign="['inherit','inherit','inherit','inherit']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,0,0,0]"
                                             style="z-index: 7;background-color:rgb(255,255,255);"></div>

                                        <div class="tp-caption  " id="slide-2-layer-3"
                                             data-x="['center','center','center','center']"
                                             data-hoffset="['0','0','0','0']"
                                             data-y="['middle','middle','middle','middle']"
                                             data-voffset="['56','66','52','-2']"
                                             data-width="['595','595','595','323']"
                                             data-height="['55','55','55','none']"
                                             data-whitespace="normal" data-type="text"
                                             data-basealign="slide"
                                             data-responsive_offset="off"
                                             data-responsive="off"
                                             data-frames='[{"delay":700,"split":"lines","splitdelay":0.05,"speed":900,"split_direction":"forward","frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Quad.easeInOut"},{"delay":"wait","speed":950,"frame":"999","to":"y:-50px;opacity:0;","ease":"Quad.easeInOut"}]'
                                             data-textAlign="['center','center','center','center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,0,0,0]"
                                             style="z-index: 8; min-width: 595px; max-width: 595px; max-width: 55px; max-width: 55px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Overpass;">
                                            {{$banner->banner_subtitle}}
                                        </div>

                                        <div class="tp-caption  " id="slide-2-layer-4"
                                             data-x="['center','center','center','center']"
                                             data-hoffset="['0','0','0','0']"
                                             data-y="['middle','middle','middle','middle']"
                                             data-voffset="['127','137','123','77']"
                                             data-width="1140" data-height="45"
                                             data-whitespace="normal" data-type="text"
                                             data-basealign="slide"
                                             data-responsive_offset="off"
                                             data-responsive="off"
                                             data-frames='[{"delay":850,"speed":900,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Quad.easeInOut"},{"delay":"wait","speed":950,"frame":"999","to":"y:-50px;opacity:0;","ease":"Quad.easeInOut"}]'
                                             data-textAlign="['center','center','center','center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,0,0,0]"
                                             style="z-index: 9; min-width: 1140px; max-width: 1140px; max-width: 45px; max-width: 45px; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
                                            <a itemprop="url"
                                               href="https://diefinnhutte.qodeinteractive.com/portfolio-item/work-space/"
                                               target="_self" style="color: #ffffff"
                                               class="qodef-btn qodef-btn-medium qodef-btn-simple qodef-btn-custom-hover-color qodef-btn-underlined"
                                               data-hover-color="#ffffff">
                                                                            <span
                                                                                    class="qodef-btn-text">our new project</span>
                                            </a></div>
                                    </li>
                                @endforeach
                            </ul>
                            <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                var htmlDivCss = "";
                                if (htmlDiv) {
                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                } else {
                                    var htmlDiv = document.createElement("div");
                                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                }
                            </script>
                            <div class="tp-bannertimer tp-bottom"
                                 style="visibility: hidden !important;"></div>
                        </div>
                        <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                            var htmlDivCss = "";
                            if (htmlDiv) {
                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                            } else {
                                var htmlDiv = document.createElement("div");
                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                            }
                        </script>
                        <script type="text/javascript">
                            if (setREVStartSize !== undefined) setREVStartSize(
                                {
                                    c: '#rev_slider_2_2',
                                    responsiveLevels: [1920, 1620, 1025, 680],
                                    gridwidth: [1100, 800, 700, 400],
                                    gridheight: [868, 768, 960, 720],
                                    sliderLayout: 'fullscreen',
                                    fullScreenAutoWidth: 'off',
                                    fullScreenAlignForce: 'off',
                                    fullScreenOffsetContainer: '',
                                    fullScreenOffset: ''
                                });

                            var revapi2,
                                tpj;
                            (function () {
                                if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad); else onLoad();

                                function onLoad() {
                                    if (tpj === undefined) {
                                        tpj = jQuery;
                                        if ("off" == "on") tpj.noConflict();
                                    }
                                    if (tpj("#rev_slider_2_2").revolution == undefined) {
                                        revslider_showDoubleJqueryError("#rev_slider_2_2");
                                    } else {
                                        revapi2 = tpj("#rev_slider_2_2").show().revolution({
                                            sliderType: "standard",
                                            jsFileLocation: "//diefinnhutte.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/",
                                            sliderLayout: "fullscreen",
                                            dottedOverlay: "none",
                                            delay: 9000,
                                            navigation: {
                                                keyboardNavigation: "off",
                                                keyboard_direction: "horizontal",
                                                mouseScrollNavigation: "off",
                                                mouseScrollReverse: "default",
                                                onHoverStop: "off",
                                                bullets: {
                                                    enable: true,
                                                    hide_onmobile: false,
                                                    style: "custom-style",
                                                    hide_onleave: false,
                                                    direction: "vertical",
                                                    h_align: "right",
                                                    v_align: "bottom",
                                                    h_offset: 60,
                                                    v_offset: 30,
                                                    space: 20,
                                                    tmp: '<span class="tp-bullet-inner"></span>'
                                                }
                                            },
                                            responsiveLevels: [1920, 1620, 1025, 680],
                                            visibilityLevels: [1920, 1620, 1025, 680],
                                            gridwidth: [1100, 800, 700, 400],
                                            gridheight: [868, 768, 960, 720],
                                            lazyType: "none",
                                            parallax: {
                                                type: "mouse",
                                                origo: "enterpoint",
                                                speed: 400,
                                                speedbg: 0,
                                                speedls: 0,
                                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                                            },
                                            shadow: 0,
                                            spinner: "off",
                                            stopLoop: "off",
                                            stopAfterLoops: -1,
                                            stopAtSlide: -1,
                                            shuffle: "off",
                                            autoHeight: "off",
                                            fullScreenAutoWidth: "off",
                                            fullScreenAlignForce: "off",
                                            fullScreenOffsetContainer: "",
                                            fullScreenOffset: "",
                                            disableProgressBar: "on",
                                            hideThumbsOnMobile: "off",
                                            hideSliderAtLimit: 0,
                                            hideCaptionAtLimit: 0,
                                            hideAllCaptionAtLilmit: 0,
                                            debugMode: false,
                                            fallbacks: {
                                                simplifyAll: "off",
                                                nextSlideOnWindowFocus: "off",
                                                disableFocusListener: false,
                                            }
                                        });
                                    }
                                    ; /* END OF revapi call */

                                }; /* END OF ON LOAD FUNCTION */
                            }()); /* END OF WRAPPING FUNCTION */
                        </script>
                        <script>
                            var htmlDivCss = unescape("%23rev_slider_2_2%20.custom-style%20.tp-bullet%20%7B%0A%09width%3A16px%3B%0A%09height%3A6px%3B%0A%09position%3Aabsolute%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%20%20%20%20background-color%3A%20transparent%3B%0A%20%20%20%20-webkit-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20-moz-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20transition%3A%20all%20.2s%20ease%3B%0A%7D%0A%0A%23rev_slider_2_2%20.custom-style%20.tp-bullet%3A%3Aafter%20%7B%0A%0A%20%20%20%20content%3A%20%27%27%3B%0A%20%20%20%20background-color%3A%20%23fff%3B%0A%20%20%20%20position%3A%20absolute%3B%0A%20%20%20%20left%3A%200%3B%0A%20%20%20%20top%3A%202px%3B%0A%20%20%20%20height%3A%202px%3B%0A%20%20%20%20width%3A%20100%25%3B%0A%0A%7D%0A%0A%23rev_slider_2_2%20.custom-style%20.tp-bullet%3Ahover%2C%0A%23rev_slider_2_2%20.custom-style%20.tp-bullet.selected%20%7B%0A%09width%3A%2031px%3B%0A%20%20%20%20-webkit-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20-moz-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20transition%3A%20all%20.2s%20ease%3B%0A%7D%0A%0A%23rev_slider_2_2%20.custom-style%20.tp-bullet%3Ahover%3Aafter%2C%0A%23rev_slider_2_2%20.custom-style%20.tp-bullet.selected%3Aafter%20%7B%0A%09width%3A%2031px%3B%0A%20%20%20%20background-color%3A%20%23fff%3B%0A%20%20%20%20-webkit-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20-moz-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20transition%3A%20all%20.2s%20ease%3B%0A%7D%0A%23rev_slider_2_2%20.custom-style%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20-moz-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20top%3A%20-10px%3B%0A%20%20%20%20right%3A%20-26px%3B%0A%20%20%20%20cursor%3A%20pointer%3B%0A%20%20%20%20position%3A%20absolute%3B%0A%20%20%20%20font-size%3A%2013px%3B%0A%20%20%20%20font-family%3A%20%27Overpass%27%3B%0A%20%20%20%20opacity%3A%200%3B%0A%20%20%20%20color%3A%20%23fff%3B%0A%20%20%20%20font-weight%3A%20600%3B%0A%7D%0A%0A%23rev_slider_2_2%20.custom-style%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_2_2%20.custom-style%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%09opacity%3A%201%3B%0A%20%20%20%20-webkit-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20-moz-transition%3A%20all%20.2s%20ease%3B%0A%20%20%20%20transition%3A%20all%20.2s%20ease%3B%0A%7D%0A%09%0A");
                            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                            if (htmlDiv) {
                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                            } else {
                                var htmlDiv = document.createElement('div');
                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
