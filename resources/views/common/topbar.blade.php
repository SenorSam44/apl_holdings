<style>
    .fp-header {
        background-color: black !important;
    }

    .fp-nav-list-item {
        cursor: pointer;
        color: #CAA65B;
    }

    .fp-nav-list-item .fp-nav-link {
        color: #CAA65B !important;
    }

    .fp-nav-list-item .selected {
        font-weight: bold;
    }

    .nav-link a, .fp-nav-list-item a {
        font-size: 14px;
        color: #CAA65B !important;
        font-weight: normal;
    }

    .fp-nav-list-item a:hover, .fp-nav-list-item a.selected {
        color: white !important;
    }

    .autocomplete-suggestions {
        color: #CAA65B;
    }

    .fp-header:hover{
        background-color: black!important;
    }
    @media screen and (min-width: 1024px) {
        html.theme-white .fp-header-search .fp-hs-toggle, .seniorpartner .fp-header-search .fp-hs-toggle, .partner .fp-header-search .fp-hs-toggle, .fp-header-content-over .fp-header-search .fp-hs-toggle {
            background: url(/frontend/assets/img/search-white.svg) center center no-repeat transparent;
        }

        /*html.theme-white .fp-header-search .fp-hs-term, .seniorpartner .fp-header-search .fp-hs-term, .partner .fp-header-search .fp-hs-term, .fp-header-content-over .fp-header-search .fp-hs-term{*/
        /*    color: white;*/
        /*}*/
        .fp-hs-form #fp-search-term::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white;
            opacity: 1; /* Firefox */
        }

        .fp-header-search .fp-hs-toggle {
            top: 0;
        }
    }

    @media screen and (max-device-width: 729px) {
        html.theme-white .fp-navigation .fp-pulse::after {
            background-color: white;
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

                <form action="{{url('/search')}}" class="fp-hs-form">

                    <label for="fp-search-term" class="fp-hs-label">Search APL Holdings</label>
                    <input type="search" id="fp-search-term" class="fp-hs-term" placeholder="Search APL Holdings"
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
                    <?php $projects = \App\Models\Project::orderBy('created_at', 'DESC')->take(5)->get() ?>
                    @foreach($projects as $project)
                        <li class="fp-is-list-item">
                            <a href="/projects/{{$project->id}}" target="_blank" class="fp-is-link"
                               tabindex="-1">{{$project->project_title}}</a>
                        </li>
                    @endforeach
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

                <li class="fp-nav-list-search">
                    <div class="component fp-header-search fp-hs-navigation" data-component-name="header-search"
                         data-is-navigation="true">

                        <button class="fp-hs-toggle" type="button">
                            Search
                        </button>

                        <div class="fp-hs-search-wrapper">

                            <div class="fp-hs-search-content">

                                <form action="/search" class="fp-hs-form">

                                    <label for="fp-search-term-navigation" class="fp-hs-label">Search APL Holdings</label>
                                    <input type="search" id="fp-search-term-navigation" class="fp-hs-term"
                                           placeholder="Search APL Holdings" data-original-value="" tabindex="-1"/>

                                    <input type="submit" value="Search" class="fp-hs-submit" tabindex="-1"/>
                                    <input type="reset" value="Clear" class="fp-hs-search-clear"/>

                                </form>

                            </div>

                        </div>

                        <div class="fp-instant-search">

                            <div class="fp-is-container">
                                <p class="fp-is-title">Recommended searches</p>
                                <ul class="fp-is-list">
                                    <?php $projects = \App\Models\Project::orderBy('created_at', 'DESC')->take(4)->get() ?>
                                    @foreach($projects as $project)
                                        <li class="fp-is-list-item">
                                            <a href="/projects/{{$project->id}}" target="_blank" class="fp-is-link"
                                               tabindex="-1">{{$project->project_title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>

                </li>

                <li class="fp-nav-list-item nav-link" data-target="/about">
                    <a href="/about">About Us
                    </a>
                </li>

                <li class="fp-nav-list-item nav-link" data-target="/our-team">
                    <a href="/our-team">Our Team</a>
                </li>
                <li class="fp-nav-list-item nav-link" data-target="/projects">
                    <a href="/projects">Projects
                    </a>
                </li>

                <li class="fp-nav-list-item nav-link" data-target="/news">
                    <a href="/news/">News</a>
                </li>

                <li class="fp-nav-list-item nav-link" data-target="/contacts">
                    <a href="/contacts">Contact Us</a>
                </li>

                <li class="fp-nav-list-item nav-link" data-target="/map">
                    <a href="/map">Map</a>
                </li>

                <li class="fp-nav-list-item nav-link" data-target="/map">
                    <a href="/career">Career</a>
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
    .nav-link {
        cursor: pointer;
    }
</style>

<script>
    document.querySelectorAll('.nav-link').forEach((link) => {
        link.addEventListener('click', () => {
            window.location.assign(link.getAttribute('data-target'));
        });
    });
    document.querySelector('.fp-nav-list-item[data-target=' + CSS.escape(window.location.pathname) + '] a').classList.add('selected');

</script>