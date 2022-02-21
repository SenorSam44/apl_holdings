<link rel="stylesheet" href="https://diefinnhutte.qodeinteractive.com/wp-content/cache/minify/ac99c.css"
      media="all"/>
<style>
    .qodef-page-footer .qodef-footer-top-holder {
        background: #252525;

    }

    footer h3, footer a, footer .widget .qodef-widget-title-holder .qodef-widget-title {
        color: white !important;
    }

    footer .widget.qodef-blog-list-widget .qodef-bl-minimal .qodef-post-title a, .widget ul li a {
        color: #bcbcbc !important;
    }

    @media only screen and (min-width: 1367px) {
        .qodef-grid-1200 .qodef-container-inner, .qodef-grid-1200 .qodef-grid, .qodef-grid-1200 .qodef-row-grid-section {
            width: 1200px;
        }
    }


    .qodef-page-footer .qodef-footer-top-holder .qodef-footer-top-inner.qodef-grid {
        padding: 100px 6vw;
    }

    @media screen and (max-device-width: 1024px){
        .qodef-footer-top-inner.qodef-grid{
            max-width: 100vw;
        }
        .qodef-page-footer .qodef-column-content.qodef-grid-col-3{
            float: none;
            width: 100%;
            text-align: center;
        }
    }

    @media screen and (max-device-width: 729px) {
        .qodef-footer-top-inner.qodef-grid {
            width: 80vw;
            margin-left: 10vw;
            margin-right: 10vw;
            padding: 0;
        }

        .qodef-column-content.qodef-grid-col-3 {
            text-align: center;
        }

        footer .widget.qodef-blog-list-widget .qodef-bl-minimal .qodef-bli-content {
            padding-right: 0;
        }
    }

</style>
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
                                                               href="/about"
                                                               target="_self"
                                                               class="qodef-btn qodef-btn-small qodef-btn-simple qodef-btn-custom-hover-color qodef-btn-underlined">
                            <span class="qodef-btn-text">Read More</span>
                        </a></div>
                </div>
                <div class="qodef-column-content qodef-grid-col-3">
                    <div id="nav_menu-2" class="widget qodef-footer-column-3 widget_nav_menu">
                        <div class="menu-footer-menu-one-container">
                            <ul id="menu-footer-menu-one" class="menu">
                                <li id="menu-item-589"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589">
                                    <a href="/">
                                        Home
                                    </a>
                                </li>
                                <li id="menu-item-589"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589">
                                    <a href="/about">
                                        About Us
                                    </a>
                                </li>
                                <li id="menu-item-589"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589">
                                    <a href="/our-team">
                                        Our Team
                                    </a>
                                </li>
                                <li id="menu-item-589"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589">
                                    <a href="/projects">
                                        Projects
                                    </a>
                                </li>
                                <li id="menu-item-589"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589">
                                    <a href="/news">
                                        News
                                    </a>
                                </li>
                                <li id="menu-item-589"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589">
                                    <a href="/contacts">
                                        Contact Us
                                    </a>
                                </li>
                                <li id="menu-item-589"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589">
                                    <a href="/map">
                                        Map
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="qodef-column-content qodef-grid-col-3">
                    <div id="nav_menu-2" class="widget qodef-footer-column-3 widget_nav_menu">
                        <div class="qodef-widget-title-holder">
                            <h5 class="qodef-widget-title">
                                Projects
                            </h5>
                        </div>
                        <?php $categories = \App\Models\Category::all() ?>
                        <div class="menu-footer-menu-one-container">
                            <ul id="menu-footer-menu-one" class="menu">
                                @foreach($categories as $category)
                                    <li id="menu-item-589"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589">
                                        <a href="projects?=projecttype={{$category->category_name}}">
                                            {{$category->category_name}}
                                        </a>
                                    </li>
                                @endforeach
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
                                       href="https://www.instagram.com/qodeinteractive/">Facebook</a>
                                </li>
                                <li id="menu-item-2420"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2420">
                                    <a target="_blank" rel="noopener noreferrer"
                                       href="https://twitter.com/QodeInteractive">Instagram</a></li>
                                <li id="menu-item-2421"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2421">
                                    <a target="_blank" rel="noopener noreferrer"
                                       href="https://www.pinterest.com/qodeinteractive/">LinkedIn</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

