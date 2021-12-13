<style>
    .fp-nav-list-item{
        cursor: pointer;
        color:white;
    }

    .fp-nav-list-item .selected{
        font-weight: bold;
    }
    @media screen and (min-width: 1024px){
        .fp-nav-list-wrap.higher {
            top: 12px!important;
        }
    }

</style>

<div class="component fp-header" data-component-name="header">
    <div class="fp-header__logo">
        <div data-target="/" class="component fp-logo nav-link" data-component-name="logo">
            <span class="fp-logo__text">APL Holdings</span>
            <img class="fp-svg-icon fp-svg-logo" alt="logo" src="/frontend/assets/img/logo.png"/>
        </div>
    </div>


    <div class="component fp-header-search fp-hs-header" data-component-name="header-search" data-is-navigation="false">

        <button class="fp-hs-toggle" type="button">
            Search
        </button>

        <div class="fp-hs-search-wrapper">

            <div class="fp-hs-search-content">

                <form action="/search" class="fp-hs-form">

                    <label for="fp-search-term" class="fp-hs-label">Search Foster + Partners</label>
                    <input type="search" id="fp-search-term" class="fp-hs-term" placeholder="Search Foster + Partners"
                           data-original-value="" tabindex="-1"/>

                    <input type="submit" value="Search" class="fp-hs-submit" tabindex="-1"/>
                    <input type="reset" value="Clear" class="fp-hs-search-clear"/>

                </form>

            </div>

        </div>

        <div class="fp-instant-search">

            <div class="fp-is-container">
                <p class="fp-is-title">Recommended searches</p>

                <ul class="fp-is-list">
                    <li class="fp-is-list-item">
                        <a href="/studio/commitments/sustainability-principles/" target="_blank" class="fp-is-link"
                           tabindex="-1">Sustainability Principles</a>
                    </li>
                    <li class="fp-is-list-item">
                        <a href="/studio/commitments/diversity-and-inclusion/" class="fp-is-link no-auto-detection"
                           tabindex="-1">Diversity and Inclusion</a>
                    </li>
                    <li class="fp-is-list-item">
                        <a href="https://www.fosterandpartners.com/media/2641178/tax_strategy_fpgl_2021.pdf"
                           target="_blank" class="fp-is-link" tabindex="-1">Tax Strategy 2021</a>
                    </li>
                    <li class="fp-is-list-item">
                        <a href="https://www.fosterandpartners.com/media/2641721/uk_gender_pay_gap_report_2021_foster_-_partners.pdf"
                           target="_blank" class="fp-is-link" tabindex="-1">Gender Pay Gap Report 2021</a>
                    </li>
                    <li class="fp-is-list-item">
                        <a href="/privacy-notice/" target="_blank" class="fp-is-link" tabindex="-1">Privacy Notice</a>
                    </li>
                    <li class="fp-is-list-item">
                        <a href="/anti-slavery-and-human-trafficking-policy/" target="_blank" class="fp-is-link"
                           tabindex="-1">Anti-Slavery and Human Trafficking Statement</a>
                    </li>
                </ul>

            </div>

        </div>

    </div>


    <div class="component fp-navigation" data-component-name="navigation">

        <a class="fp-nav-toggle" role="button">

        <span class="fp-toggle-content">

            <span class="fp-pulse">
                <svg class="fp-pulse-svg" width="24" height="24" viewBox="0 0 24 24">
                    <circle id="pulse" cx="12" cy="12" r="6" fill="none" stroke="#fff" stroke-width="1px"/>
                </svg>
            </span>

            <span class="fp-toggle-opened">
                <span class="fp-icon-cross-wrap"><span class="fp-icon-cross"></span></span>
                <span class="fp-icon-slide"></span>
            </span>

        </span>

        </a>

        <div class="fp-nav-list-mask"></div>

        <div class="fp-nav-list-wrap higher">

            <ul class="fp-nav-list">

                <li class="fp-nav-list-item fp-nav-list-search">


                    <div class="component fp-header-search fp-hs-navigation" data-component-name="header-search"
                         data-is-navigation="true">

                        <button class="fp-hs-toggle" type="button">
                            Search
                        </button>

                        <div class="fp-hs-search-wrapper">

                            <div class="fp-hs-search-content">

                                <form action="/search" class="fp-hs-form">

                                    <label for="fp-search-term-navigation" class="fp-hs-label">Search Foster +
                                        Partners</label>
                                    <input type="search" id="fp-search-term-navigation" class="fp-hs-term"
                                           placeholder="Search Foster + Partners" data-original-value="" tabindex="-1"/>

                                    <input type="submit" value="Search" class="fp-hs-submit" tabindex="-1"/>
                                    <input type="reset" value="Clear" class="fp-hs-search-clear"/>

                                </form>

                            </div>

                        </div>

                        <div class="fp-instant-search">

                            <div class="fp-is-container">
                                <p class="fp-is-title">Recommended searches</p>

                                <ul class="fp-is-list">
                                    <li class="fp-is-list-item">
                                        <a href="/studio/commitments/sustainability-principles/" target="_blank"
                                           class="fp-is-link" tabindex="-1">Sustainability Principles</a>
                                    </li>
                                    <li class="fp-is-list-item">
                                        <a href="/studio/commitments/diversity-and-inclusion/"
                                           class="fp-is-link no-auto-detection" tabindex="-1">Diversity and
                                            Inclusion</a>
                                    </li>
                                    <li class="fp-is-list-item">
                                        <a href="https://www.fosterandpartners.com/media/2641178/tax_strategy_fpgl_2021.pdf"
                                           target="_blank" class="fp-is-link" tabindex="-1">Tax Strategy 2021</a>
                                    </li>
                                    <li class="fp-is-list-item">
                                        <a href="https://www.fosterandpartners.com/media/2641721/uk_gender_pay_gap_report_2021_foster_-_partners.pdf"
                                           target="_blank" class="fp-is-link" tabindex="-1">Gender Pay Gap Report
                                            2021</a>
                                    </li>
                                    <li class="fp-is-list-item">
                                        <a href="/privacy-notice/" target="_blank" class="fp-is-link" tabindex="-1">Privacy
                                            Notice</a>
                                    </li>
                                    <li class="fp-is-list-item">
                                        <a href="/anti-slavery-and-human-trafficking-policy/" target="_blank"
                                           class="fp-is-link" tabindex="-1">Anti-Slavery and Human Trafficking
                                            Statement</a>
                                    </li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </li>

                <li class="fp-nav-list-item nav-link" data-target="/our-team">
                    <div class="selected">Our Team</div>
                </li>
                <li class="fp-nav-list-item">
                    <a href="/studio/" target="" title="Studio"
                       class="no-auto-detection fp-nav-link">Studio</a>
                </li>
                <li class="fp-nav-list-item">
                    <a href="/projects/" target="" title="Projects" class="no-auto-detection fp-nav-link  ">Projects</a>
                </li>
                <li class="fp-nav-list-item">
                    <a href="/news/" target="" title="News" class="no-auto-detection fp-nav-link  ">News</a>
                </li>
                <li class="fp-nav-list-item">
                    <a href="/plus/" target="" title="+Plus" class="no-auto-detection fp-nav-link  ">+Plus</a>
                </li>
                <li class="fp-nav-list-item">
                    <a href="https://www.fosterandpartnerscareers.com/" target="" title="Careers"
                       class="no-auto-detection fp-nav-link  ">Careers</a>
                </li>
                <li class="fp-nav-list-item">
                    <a href="/contact/" target="" title="Contact" class="no-auto-detection fp-nav-link  ">Contact</a>
                </li>
            </ul>

        </div>

    </div>


</div>

<div class="fp-header-top-gradient"></div>

<div class="fp-header-search-gradient"></div>

<div class="fp-search-overlay"></div>

<div class="fp-navigation-gradient"></div>

<style>
    .nav-link{
        cursor: pointer;
    }
</style>

<script>
    document.querySelectorAll('.nav-link').forEach((link) => {
        link.addEventListener('click', () => {
            window.location.assign(link.getAttribute('data-target'));
        });
    });
</script>