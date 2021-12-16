@extends('layouts.userapp')

@section('content')

    <section class="component fp-mega-filter fp-mega-filter-sticky" data-component-name="mega-filter">
        <div class="fp-filter-bar">
            <div class="fp-bar-item fp-bar-elm-animate">
                <button class="fp-bar-button fp-trigger" data-controls="type" type="button">
                    <span class="fp-bar-button__text">All project types</span><span class="arrow-down"></span>
                </button>
            </div>
            <div class="fp-bar-item fp-bar-elm-animate">
                <button class="fp-bar-button fp-trigger" data-controls="location" type="button">
                    <span class="fp-bar-button__text">All locations</span><span class="arrow-down"></span>
                </button>
            </div>
            <div class="fp-bar-total fp-bar-elm-animate">368 projects</div>
        </div>
        <div class="fp-filter-selects">
            <div class="fp-filter-wrapper">
                <select class="fp-filter-select" data-controls="type">
                    <option value="/projects/type/">All project types</option>
                    <option value="/projects/type/?isnew=true">Recently Completed</option>
                    <option value="/projects/type/?onsite=true">Under Construction</option>
                    <option value="/projects/type/?projecttype=culture">Culture</option>
                    <option value="/projects/type/?projecttype=civic">Civic</option>
                    <option value="/projects/type/?projecttype=offices-and-headquarters">Offices and Headquarters
                    </option>
                    <option value="/projects/type/?projecttype=transport-and-infrastructure">Transport and
                        Infrastructure
                    </option>
                    <option value="/projects/type/?projecttype=health-and-education">Health and Education</option>
                    <option value="/projects/type/?projecttype=industrial-and-research">Industrial and Research</option>
                    <option value="/projects/type/?projecttype=industrial-design">Industrial Design</option>
                    <option value="/projects/type/?projecttype=hospitality-and-leisure">Hospitality and Leisure</option>
                    <option value="/projects/type/?projecttype=mixed-use">Mixed Use</option>
                    <option value="/projects/type/?projecttype=residential">Residential</option>
                    <option value="/projects/type/?projecttype=retail">Retail</option>
                    <option value="/projects/type/?projecttype=urban-design">Urban Design</option>
                </select><span class="arrow-down"></span>
            </div>
            <div class="fp-filter-wrapper">
                <select class="fp-filter-select" data-controls="location">

                    <option selected value="/projects/type/">All locations</option>
                    <option value="/projects/type/?location=argentina">Argentina</option>
                    <option value="/projects/type/?location=australia">Australia</option>
                    <option value="/projects/type/?location=brazil">Brazil</option>
                    <option value="/projects/type/?location=canada">Canada</option>
                    <option value="/projects/type/?location=central-african-republic">Central African Republic</option>
                    <option value="/projects/type/?location=china">China</option>
                    <option value="/projects/type/?location=denmark">Denmark</option>
                    <option value="/projects/type/?location=egypt">Egypt</option>
                    <option value="/projects/type/?location=france">France</option>
                    <option value="/projects/type/?location=germany">Germany</option>
                    <option value="/projects/type/?location=india">India</option>
                    <option value="/projects/type/?location=israel">Israel</option>
                    <option value="/projects/type/?location=italy">Italy</option>
                    <option value="/projects/type/?location=japan">Japan</option>
                    <option value="/projects/type/?location=jordan">Jordan</option>
                    <option value="/projects/type/?location=kazakhstan">Kazakhstan</option>
                    <option value="/projects/type/?location=kuwait">Kuwait</option>
                    <option value="/projects/type/?location=lebanon">Lebanon</option>
                    <option value="/projects/type/?location=luxembourg">Luxembourg</option>
                    <option value="/projects/type/?location=malaysia">Malaysia</option>
                    <option value="/projects/type/?location=mauritius">Mauritius</option>
                    <option value="/projects/type/?location=mexico">Mexico</option>
                    <option value="/projects/type/?location=monaco">Monaco</option>
                    <option value="/projects/type/?location=morocco">Morocco</option>
                    <option value="/projects/type/?location=panama">Panama</option>
                    <option value="/projects/type/?location=poland">Poland</option>
                    <option value="/projects/type/?location=russia">Russia</option>
                    <option value="/projects/type/?location=san-marino">San Marino</option>
                    <option value="/projects/type/?location=saudi-arabia">Saudi Arabia</option>
                    <option value="/projects/type/?location=singapore">Singapore</option>
                    <option value="/projects/type/?location=south-korea">South Korea</option>
                    <option value="/projects/type/?location=space">Space</option>
                    <option value="/projects/type/?location=spain">Spain</option>
                    <option value="/projects/type/?location=sweden">Sweden</option>
                    <option value="/projects/type/?location=switzerland">Switzerland</option>
                    <option value="/projects/type/?location=the-netherlands">The Netherlands</option>
                    <option value="/projects/type/?location=turkey">Turkey</option>
                    <option value="/projects/type/?location=uae">UAE</option>
                    <option value="/projects/type/?location=uk">UK</option>
                    <option value="/projects/type/?location=usa">USA</option>
                    <option value="/projects/type/?location=various">Various</option>
                    <option value="/projects/type/?location=vietnam">Vietnam</option>
                    <option value="/projects/type/?location=hungary">Hungary</option>
                </select><span class="arrow-down"></span>
            </div>
        </div>
        <div class="fp-filter-drawer" data-source="type" data-velocity="650,750">
            <ul class="fp-filter-options-list">
                <li class="fp-filter-set">
                    <ul>
                        <li class="fp-filter-option selected">
                            <a class="fp-filter-link"
                               href="/projects/type/">
                                All project types
                            </a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?isnew=true">Recently
                                Completed</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?onsite=true">Under
                                Construction</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=culture">Culture</a></li>
                    </ul>
                </li>
                <li class="fp-filter-set">
                    <ul>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=civic">Civic</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=offices-and-headquarters">Offices
                                and Headquarters</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=transport-and-infrastructure">Transport
                                and Infrastructure</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=health-and-education">Health
                                and Education</a></li>
                    </ul>
                </li>
                <li class="fp-filter-set">
                    <ul>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=industrial-and-research">Industrial
                                and Research</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=industrial-design">Industrial
                                Design</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=hospitality-and-leisure">Hospitality
                                and Leisure </a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=mixed-use">Mixed Use</a></li>
                    </ul>
                </li>
                <li class="fp-filter-set">
                    <ul>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=residential">Residential</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=retail">Retail</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?projecttype=urban-design">Urban
                                Design</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="fp-filter-drawer" data-source="location" data-velocity="1000,1100">
            <ul class="fp-filter-options-list">
                <li class="fp-filter-set">
                    <ul>
                        <li class="fp-filter-option selected">
                            <a class="fp-filter-link"
                               href="/projects/type/">
                                All locations
                            </a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=argentina">Argentina</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=australia">Australia</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=brazil">Brazil</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=canada">Canada</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=central-african-republic">Central
                                African Republic</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=china">China</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=denmark">Denmark</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=egypt">Egypt</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=france">France</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=germany">Germany</a>
                        </li>
                        <li class="fp-filter-option disabled">Hong Kong</li>
                    </ul>
                </li>
                <li class="fp-filter-set">
                    <ul>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=india">India</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=israel">Israel</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=italy">Italy</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=japan">Japan</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=jordan">Jordan</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=kazakhstan">Kazakhstan</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=kuwait">Kuwait</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=lebanon">Lebanon</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=luxembourg">Luxembourg</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=malaysia">Malaysia</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=mauritius">Mauritius</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=mexico">Mexico</a>
                        </li>
                    </ul>
                </li>
                <li class="fp-filter-set">
                    <ul>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=monaco">Monaco</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=morocco">Morocco</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=panama">Panama</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=poland">Poland</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=russia">Russia</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=san-marino">San Marino</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=saudi-arabia">Saudi Arabia</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=singapore">Singapore</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=south-korea">South Korea</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=space">Space</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=spain">Spain</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=sweden">Sweden</a>
                        </li>
                    </ul>
                </li>
                <li class="fp-filter-set">
                    <ul>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=switzerland">Switzerland</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=the-netherlands">The
                                Netherlands</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=turkey">Turkey</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=uae">UAE</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=uk">UK</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link"
                                                         href="/projects/type/?location=usa">USA</a></li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=various">Various</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=vietnam">Vietnam</a>
                        </li>
                        <li class="fp-filter-option "><a class="fp-filter-link" href="/projects/type/?location=hungary">Hungary</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </section>

    <div class="component fp-filter-loader" data-component-name="filter-loader"></div>
    <div class="fp-project-types">
        <div class="component fp-universal-grid" data-component-name="universal-grid">
            <ul class="fp-grid">

                <li class="fp-grid__item is-hidden "
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9F9D88;"></div>
                    <a href="/projects/amaravati-masterplan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637191/hero_2612_fp641289.jpg?width=768&quality=85  768w,
                                          /media/2637191/hero_2612_fp641289.jpg?width=960&quality=85  960w,
                                          /media/2637191/hero_2612_fp641289.jpg?width=1350&quality=85 1350w,
                                          /media/2637191/hero_2612_fp641289.jpg?width=1920&quality=85 1920w"
                                  alt="Amaravati masterplan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2025 - Andhra Pradesh, India</span>

                                <span class="fp-content-header__title">Amaravati masterplan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden "
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #AC967C;"></div>
                    <a href="/projects/innhub-la-punt/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639190/hero_2834_fp680419.jpg?width=768&quality=85  768w,
                                          /media/2639190/hero_2834_fp680419.jpg?width=960&quality=85  960w,
                                          /media/2639190/hero_2834_fp680419.jpg?width=1350&quality=85 1350w,
                                          /media/2639190/hero_2834_fp680419.jpg?width=1920&quality=85 1920w"
                                  alt="InnHub La Punt"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2022 - La Punt-Chamues-ch, Switzerland</span>

                                <span class="fp-content-header__title">InnHub La Punt</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden "
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #818681;"></div>
                    <a href="/projects/narbo-via/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641972/hero_2018_fp708111.jpg?width=768&quality=85  768w,
                                          /media/2641972/hero_2018_fp708111.jpg?width=960&quality=85  960w,
                                          /media/2641972/hero_2018_fp708111.jpg?width=1350&quality=85 1350w,
                                          /media/2641972/hero_2018_fp708111.jpg?width=1920&quality=85 1920w"
                                  alt="Narbo Via"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Narbonne, France</span>

                                <span class="fp-content-header__title">Narbo Via</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden "
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #86919D;"></div>
                    <a href="/projects/the-tulip/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641823/hero_2699_fp740514.jpg?width=768&quality=85  768w,
                                          /media/2641823/hero_2699_fp740514.jpg?width=960&quality=85  960w,
                                          /media/2641823/hero_2699_fp740514.jpg?width=1350&quality=85 1350w,
                                          /media/2641823/hero_2699_fp740514.jpg?width=1920&quality=85 1920w"
                                  alt="The Tulip"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - London, UK</span>

                                <span class="fp-content-header__title">The Tulip</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden "
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #807C68;"></div>
                    <a href="/projects/apple-at-the-grove/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641928/hero_2785_fp787034.jpg?width=768&quality=85  768w,
                                          /media/2641928/hero_2785_fp787034.jpg?width=960&quality=85  960w,
                                          /media/2641928/hero_2785_fp787034.jpg?width=1350&quality=85 1350w,
                                          /media/2641928/hero_2785_fp787034.jpg?width=1920&quality=85 1920w"
                                  alt="Apple at The Grove"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Los Angeles, USA</span>

                                <span class="fp-content-header__title">Apple at The Grove</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden "
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #938876;"></div>
                    <a href="/projects/le-dome-winery/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641880/hero_2698_fp776625.jpg?width=768&quality=85  768w,
                                          /media/2641880/hero_2698_fp776625.jpg?width=960&quality=85  960w,
                                          /media/2641880/hero_2698_fp776625.jpg?width=1350&quality=85 1350w,
                                          /media/2641880/hero_2698_fp776625.jpg?width=1920&quality=85 1920w"
                                  alt="Le D&#244;me Winery"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Saint-&#201;milion, France</span>

                                <span class="fp-content-header__title">Le D&#244;me Winery</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #413E42;"></div>
                    <a href="/projects/apple-bagdat-avenue/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641815/hero_2481_fp780305.jpg?width=768&quality=85  768w,
                                          /media/2641815/hero_2481_fp780305.jpg?width=960&quality=85  960w,
                                          /media/2641815/hero_2481_fp780305.jpg?width=1350&quality=85 1350w,
                                          /media/2641815/hero_2481_fp780305.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Bagdat Avenue"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Istanbul, Turkey</span>

                                <span class="fp-content-header__title">Apple Bagdat Avenue</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #726E6B;"></div>
                    <a href="/projects/alif-the-mobility-pavilion-expo-2020-dubai/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641732/2456_fp777388_hero.jpg?width=768&quality=85  768w,
                                          /media/2641732/2456_fp777388_hero.jpg?width=960&quality=85  960w,
                                          /media/2641732/2456_fp777388_hero.jpg?width=1350&quality=85 1350w,
                                          /media/2641732/2456_fp777388_hero.jpg?width=1920&quality=85 1920w"
                                  alt="Alif - The Mobility Pavilion, Expo 2020 Dubai"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Dubai, UAE</span>

                                <span class="fp-content-header__title">Alif - The Mobility Pavilion, Expo 2020 Dubai</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #726561;"></div>
                    <a href="/projects/artemide-takku/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641621/hero_3177_fp773203.jpg?width=768&quality=85  768w,
                                          /media/2641621/hero_3177_fp773203.jpg?width=960&quality=85  960w,
                                          /media/2641621/hero_3177_fp773203.jpg?width=1350&quality=85 1350w,
                                          /media/2641621/hero_3177_fp773203.jpg?width=1920&quality=85 1920w"
                                  alt="Artemide Takku"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - </span>

                                <span class="fp-content-header__title">Artemide Takku</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7F7E69;"></div>
                    <a href="/projects/rcc-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641169/hero_2125_fp741790.jpg?width=768&quality=85  768w,
                                          /media/2641169/hero_2125_fp741790.jpg?width=960&quality=85  960w,
                                          /media/2641169/hero_2125_fp741790.jpg?width=1350&quality=85 1350w,
                                          /media/2641169/hero_2125_fp741790.jpg?width=1920&quality=85 1920w"
                                  alt="RCC Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Ekaterinburg, Russia</span>

                                <span class="fp-content-header__title">RCC Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #9FB0AE;"></div>
                    <a href="/projects/snowdon-aviary-refurbishment/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637977/hero_2581_fp621892.jpg?width=768&quality=85  768w,
                                          /media/2637977/hero_2581_fp621892.jpg?width=960&quality=85  960w,
                                          /media/2637977/hero_2581_fp621892.jpg?width=1350&quality=85 1350w,
                                          /media/2637977/hero_2581_fp621892.jpg?width=1920&quality=85 1920w"
                                  alt="Snowdon Aviary refurbishment"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - London, UK</span>

                                <span class="fp-content-header__title">Snowdon Aviary refurbishment</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #A69682;"></div>
                    <a href="/projects/apple-tower-theatre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641505/hero_2490_fp767174.jpg?width=768&quality=85  768w,
                                          /media/2641505/hero_2490_fp767174.jpg?width=960&quality=85  960w,
                                          /media/2641505/hero_2490_fp767174.jpg?width=1350&quality=85 1350w,
                                          /media/2641505/hero_2490_fp767174.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Tower Theatre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Los Angeles, USA</span>

                                <span class="fp-content-header__title">Apple Tower Theatre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1200"
                    data-height="720">
                    <div class="fp-dominant-colour" style="background-color: #BFB6AB;"></div>
                    <a href="/projects/apple-via-del-corso/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641506/hero_2266_fp764340.jpg?width=768&quality=85  768w,
                                          /media/2641506/hero_2266_fp764340.jpg?width=960&quality=85  960w,
                                          /media/2641506/hero_2266_fp764340.jpg?width=1350&quality=85 1350w,
                                          /media/2641506/hero_2266_fp764340.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Via del Corso"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Rome, Italy</span>

                                <span class="fp-content-header__title">Apple Via del Corso</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6D717D;"></div>
                    <a href="/projects/global-home-of-the-pga-tour/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641556/hero_2600_fp764810.jpg?width=768&quality=85  768w,
                                          /media/2641556/hero_2600_fp764810.jpg?width=960&quality=85  960w,
                                          /media/2641556/hero_2600_fp764810.jpg?width=1350&quality=85 1350w,
                                          /media/2641556/hero_2600_fp764810.jpg?width=1920&quality=85 1920w"
                                  alt="Global Home of the PGA TOUR "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Ponte Vedra Beach, USA</span>

                                <span class="fp-content-header__title">Global Home of the PGA TOUR </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7199AC;"></div>
                    <a href="/projects/house-of-wisdom/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641062/hero_2731_fp756221.jpg?width=768&quality=85  768w,
                                          /media/2641062/hero_2731_fp756221.jpg?width=960&quality=85  960w,
                                          /media/2641062/hero_2731_fp756221.jpg?width=1350&quality=85 1350w,
                                          /media/2641062/hero_2731_fp756221.jpg?width=1920&quality=85 1920w"
                                  alt="House of Wisdom"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2021 - Sharjah, UAE</span>

                                <span class="fp-content-header__title">House of Wisdom</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #717E85;"></div>
                    <a href="/projects/edmond-and-lily-safra-center-for-brain-sciences/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641891/hero_1968_fp769069.jpg?width=768&quality=85  768w,
                                          /media/2641891/hero_1968_fp769069.jpg?width=960&quality=85  960w,
                                          /media/2641891/hero_1968_fp769069.jpg?width=1350&quality=85 1350w,
                                          /media/2641891/hero_1968_fp769069.jpg?width=1920&quality=85 1920w"
                                  alt="Edmond and Lily Safra Center for Brain Sciences"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - Jerusalem, Israel</span>

                                <span class="fp-content-header__title">Edmond and Lily Safra Center for Brain Sciences</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #838A8E;"></div>
                    <a href="/projects/icd-brookfield-place/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639937/hero_2390_fp739326.jpg?width=768&quality=85  768w,
                                          /media/2639937/hero_2390_fp739326.jpg?width=960&quality=85  960w,
                                          /media/2639937/hero_2390_fp739326.jpg?width=1350&quality=85 1350w,
                                          /media/2639937/hero_2390_fp739326.jpg?width=1920&quality=85 1920w"
                                  alt="ICD Brookfield Place"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - Dubai, UAE</span>

                                <span class="fp-content-header__title">ICD Brookfield Place</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #56707A;"></div>
                    <a href="/projects/snb-head-office/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634668/hero_1806_fp524924.jpg?width=768&quality=85  768w,
                                          /media/2634668/hero_1806_fp524924.jpg?width=960&quality=85  960w,
                                          /media/2634668/hero_1806_fp524924.jpg?width=1350&quality=85 1350w,
                                          /media/2634668/hero_1806_fp524924.jpg?width=1920&quality=85 1920w"
                                  alt="SNB Head Office"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - Riyadh, Saudi Arabia</span>

                                <span class="fp-content-header__title">SNB Head Office</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #3F414C;"></div>
                    <a href="/projects/apple-marina-bay-sands/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639890/hero_2268_fp736997.jpg?width=768&quality=85  768w,
                                          /media/2639890/hero_2268_fp736997.jpg?width=960&quality=85  960w,
                                          /media/2639890/hero_2268_fp736997.jpg?width=1350&quality=85 1350w,
                                          /media/2639890/hero_2268_fp736997.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Marina Bay Sands"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - Singapore</span>

                                <span class="fp-content-header__title">Apple Marina Bay Sands</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #BDAD9D;"></div>
                    <a href="/projects/hankook-technoplex/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638332/hero_2474_fp733898.jpg?width=768&quality=85  768w,
                                          /media/2638332/hero_2474_fp733898.jpg?width=960&quality=85  960w,
                                          /media/2638332/hero_2474_fp733898.jpg?width=1350&quality=85 1350w,
                                          /media/2638332/hero_2474_fp733898.jpg?width=1920&quality=85 1920w"
                                  alt="Hankook Technoplex "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - Pangyo, South Korea</span>

                                <span class="fp-content-header__title">Hankook Technoplex </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #784E2C;"></div>
                    <a href="/projects/apple-central-world/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641487/hero_2545_fp733904.jpg?width=768&quality=85  768w,
                                          /media/2641487/hero_2545_fp733904.jpg?width=960&quality=85  960w,
                                          /media/2641487/hero_2545_fp733904.jpg?width=1350&quality=85 1350w,
                                          /media/2641487/hero_2545_fp733904.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Central World"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - Bangkok, </span>

                                <span class="fp-content-header__title">Apple Central World</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #3F4044;"></div>
                    <a href="/projects/prototype-face-visor/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641777/0361_1_fp726346_hero.jpg?width=768&quality=85  768w,
                                          /media/2641777/0361_1_fp726346_hero.jpg?width=960&quality=85  960w,
                                          /media/2641777/0361_1_fp726346_hero.jpg?width=1350&quality=85 1350w,
                                          /media/2641777/0361_1_fp726346_hero.jpg?width=1920&quality=85 1920w"
                                  alt="Prototype face Visor"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - London, UK</span>

                                <span class="fp-content-header__title">Prototype face Visor</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #979190;"></div>
                    <a href="/projects/ocean-towers/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638021/hero_2533_ocean_towers_1.jpg?width=768&quality=85  768w,
                                          /media/2638021/hero_2533_ocean_towers_1.jpg?width=960&quality=85  960w,
                                          /media/2638021/hero_2533_ocean_towers_1.jpg?width=1350&quality=85 1350w,
                                          /media/2638021/hero_2533_ocean_towers_1.jpg?width=1920&quality=85 1920w"
                                  alt="Ocean Towers"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - Mumbai, India</span>

                                <span class="fp-content-header__title">Ocean Towers</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6A706B;"></div>
                    <a href="/projects/principal-place/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639282/hero_2206_fp699872.jpg?width=768&quality=85  768w,
                                          /media/2639282/hero_2206_fp699872.jpg?width=960&quality=85  960w,
                                          /media/2639282/hero_2206_fp699872.jpg?width=1350&quality=85 1350w,
                                          /media/2639282/hero_2206_fp699872.jpg?width=1920&quality=85 1920w"
                                  alt="Principal Place"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - London, UK</span>

                                <span class="fp-content-header__title">Principal Place</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7F6E6A;"></div>
                    <a href="/projects/residential-towers-al-reem-island/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634662/hero_1747_fp609956.jpg?width=768&quality=85  768w,
                                          /media/2634662/hero_1747_fp609956.jpg?width=960&quality=85  960w,
                                          /media/2634662/hero_1747_fp609956.jpg?width=1350&quality=85 1350w,
                                          /media/2634662/hero_1747_fp609956.jpg?width=1920&quality=85 1920w"
                                  alt="Residential Towers, Al Reem Island"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - Abu Dhabi, UAE</span>

                                <span class="fp-content-header__title">Residential Towers, Al Reem Island</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4F3E31;"></div>
                    <a href="/projects/shanghai-bund-riverside/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639349/hero_2008_fp715390_indesign.jpg?width=768&quality=85  768w,
                                          /media/2639349/hero_2008_fp715390_indesign.jpg?width=960&quality=85  960w,
                                          /media/2639349/hero_2008_fp715390_indesign.jpg?width=1350&quality=85 1350w,
                                          /media/2639349/hero_2008_fp715390_indesign.jpg?width=1920&quality=85 1920w"
                                  alt="Shanghai Bund Riverside "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2020 - Shanghai, China</span>

                                <span class="fp-content-header__title">Shanghai Bund Riverside </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #94A9B4;"></div>
                    <a href="/projects/galeries-lafayette/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639236/hero_1898_n12.jpg?width=768&quality=85  768w,
                                          /media/2639236/hero_1898_n12.jpg?width=960&quality=85  960w,
                                          /media/2639236/hero_1898_n12.jpg?width=1350&quality=85 1350w,
                                          /media/2639236/hero_1898_n12.jpg?width=1920&quality=85 1920w"
                                  alt=" Galeries Lafayette "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Luxembourg City, Luxembourg</span>

                                <span class="fp-content-header__title"> Galeries Lafayette </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #797678;"></div>
                    <a href="/projects/dolunay-villa/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639315/sz-private-villa-mobile-video-cover-image.jpg?width=768&quality=85  768w,
                                          /media/2639315/sz-private-villa-mobile-video-cover-image.jpg?width=960&quality=85  960w,
                                          /media/2639315/sz-private-villa-mobile-video-cover-image.jpg?width=1350&quality=85 1350w,
                                          /media/2639315/sz-private-villa-mobile-video-cover-image.jpg?width=1920&quality=85 1920w"
                                  alt="Dolunay villa"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Kaplankaya, Turkey</span>

                                <span class="fp-content-header__title">Dolunay villa</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #827D6C;"></div>
                    <a href="/projects/park-walk-primary-school-playground/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639201/hero_copyright-aaron-hargreaves_foster-partners_img_8602.jpg?width=768&quality=85  768w,
                                          /media/2639201/hero_copyright-aaron-hargreaves_foster-partners_img_8602.jpg?width=960&quality=85  960w,
                                          /media/2639201/hero_copyright-aaron-hargreaves_foster-partners_img_8602.jpg?width=1350&quality=85 1350w,
                                          /media/2639201/hero_copyright-aaron-hargreaves_foster-partners_img_8602.jpg?width=1920&quality=85 1920w"
                                  alt="Park Walk Primary School Playground"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - London, UK</span>

                                <span class="fp-content-header__title">Park Walk Primary School Playground</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #3E516C;"></div>
                    <a href="/projects/comcast-technology-center/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639117/2161_fp709898.jpg?width=768&quality=85  768w,
                                          /media/2639117/2161_fp709898.jpg?width=960&quality=85  960w,
                                          /media/2639117/2161_fp709898.jpg?width=1350&quality=85 1350w,
                                          /media/2639117/2161_fp709898.jpg?width=1920&quality=85 1920w"
                                  alt="Comcast Technology Center"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Philadelphia, USA</span>

                                <span class="fp-content-header__title">Comcast Technology Center</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6E6B6E;"></div>
                    <a href="/projects/four-seasons-hotel-at-comcast-technology-center/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639101/hero_2161_fp707477.jpg?width=768&quality=85  768w,
                                          /media/2639101/hero_2161_fp707477.jpg?width=960&quality=85  960w,
                                          /media/2639101/hero_2161_fp707477.jpg?width=1350&quality=85 1350w,
                                          /media/2639101/hero_2161_fp707477.jpg?width=1920&quality=85 1920w"
                                  alt="Four Seasons Hotel at Comcast Technology Center"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Philadelphia, USA</span>

                                <span class="fp-content-header__title">Four Seasons Hotel at Comcast Technology Center</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #68625F;"></div>
                    <a href="/projects/apple-fifth-avenue/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639138/hero_2284_fp706717.jpg?width=768&quality=85  768w,
                                          /media/2639138/hero_2284_fp706717.jpg?width=960&quality=85  960w,
                                          /media/2639138/hero_2284_fp706717.jpg?width=1350&quality=85 1350w,
                                          /media/2639138/hero_2284_fp706717.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Fifth Avenue"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - New York, USA</span>

                                <span class="fp-content-header__title">Apple Fifth Avenue</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #697A92;"></div>
                    <a href="/projects/apple-aventura/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639050/hero_2502_fp701913.jpg?width=768&quality=85  768w,
                                          /media/2639050/hero_2502_fp701913.jpg?width=960&quality=85  960w,
                                          /media/2639050/hero_2502_fp701913.jpg?width=1350&quality=85 1350w,
                                          /media/2639050/hero_2502_fp701913.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Aventura "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - USA</span>

                                <span class="fp-content-header__title">Apple Aventura </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #63594D;"></div>
                    <a href="/projects/apple-marunouchi/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639163/hero_2447_fp704896.jpg?width=768&quality=85  768w,
                                          /media/2639163/hero_2447_fp704896.jpg?width=960&quality=85  960w,
                                          /media/2639163/hero_2447_fp704896.jpg?width=1350&quality=85 1350w,
                                          /media/2639163/hero_2447_fp704896.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Marunouchi"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Tokyo, Japan</span>

                                <span class="fp-content-header__title">Apple Marunouchi</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #897461;"></div>
                    <a href="/projects/gabriela-hearst-london-flagship/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639157/hero_2878_fp706145.jpg?width=768&quality=85  768w,
                                          /media/2639157/hero_2878_fp706145.jpg?width=960&quality=85  960w,
                                          /media/2639157/hero_2878_fp706145.jpg?width=1350&quality=85 1350w,
                                          /media/2639157/hero_2878_fp706145.jpg?width=1920&quality=85 1920w"
                                  alt="Gabriela Hearst London Flagship"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - London, UK</span>

                                <span class="fp-content-header__title">Gabriela Hearst London Flagship</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A28E83;"></div>
                    <a href="/projects/gabriela-hearst-store-furniture/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639162/hero_2878_fp706159.jpg?width=768&quality=85  768w,
                                          /media/2639162/hero_2878_fp706159.jpg?width=960&quality=85  960w,
                                          /media/2639162/hero_2878_fp706159.jpg?width=1350&quality=85 1350w,
                                          /media/2639162/hero_2878_fp706159.jpg?width=1920&quality=85 1920w"
                                  alt="Gabriela Hearst store furniture"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - London, UK</span>

                                <span class="fp-content-header__title">Gabriela Hearst store furniture</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6F7270;"></div>
                    <a href="/projects/nanshan-technology-finance-city/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638857/hero_2045_fp694959.jpg?width=768&quality=85  768w,
                                          /media/2638857/hero_2045_fp694959.jpg?width=960&quality=85  960w,
                                          /media/2638857/hero_2045_fp694959.jpg?width=1350&quality=85 1350w,
                                          /media/2638857/hero_2045_fp694959.jpg?width=1920&quality=85 1920w"
                                  alt="Nanshan Technology Finance City"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Shenzhen, China</span>

                                <span class="fp-content-header__title">Nanshan Technology Finance City</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #828B98;"></div>
                    <a href="/projects/apple-carnegie-library-washington-dc/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638881/hero_2528_fp692306.jpg?width=768&quality=85  768w,
                                          /media/2638881/hero_2528_fp692306.jpg?width=960&quality=85  960w,
                                          /media/2638881/hero_2528_fp692306.jpg?width=1350&quality=85 1350w,
                                          /media/2638881/hero_2528_fp692306.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Carnegie Library, Washington DC"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Washington DC, USA</span>

                                <span class="fp-content-header__title">Apple Carnegie Library, Washington DC</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #D6D5D4;"></div>
                    <a href="/projects/leva-mattiazzi/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638781/hero_2870_fp688654.jpg?width=768&quality=85  768w,
                                          /media/2638781/hero_2870_fp688654.jpg?width=960&quality=85  960w,
                                          /media/2638781/hero_2870_fp688654.jpg?width=1350&quality=85 1350w,
                                          /media/2638781/hero_2870_fp688654.jpg?width=1920&quality=85 1920w"
                                  alt="LEVA, Mattiazzi"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Italy</span>

                                <span class="fp-content-header__title">LEVA, Mattiazzi</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #837F7C;"></div>
                    <a href="/projects/ava-molteni-c/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638733/hero_2252_fp687462.jpg?width=768&quality=85  768w,
                                          /media/2638733/hero_2252_fp687462.jpg?width=960&quality=85  960w,
                                          /media/2638733/hero_2252_fp687462.jpg?width=1350&quality=85 1350w,
                                          /media/2638733/hero_2252_fp687462.jpg?width=1920&quality=85 1920w"
                                  alt="AVA, Molteni&amp;C"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - </span>

                                <span class="fp-content-header__title">AVA, Molteni&amp;C</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #625646;"></div>
                    <a href="/projects/eve-lumina/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638727/2799_fp687608.jpg?width=768&quality=85  768w,
                                          /media/2638727/2799_fp687608.jpg?width=960&quality=85  960w,
                                          /media/2638727/2799_fp687608.jpg?width=1350&quality=85 1350w,
                                          /media/2638727/2799_fp687608.jpg?width=1920&quality=85 1920w"
                                  alt="EVE, Lumina"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - </span>

                                <span class="fp-content-header__title">EVE, Lumina</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #44321A;"></div>
                    <a href="/projects/lg-signature-oled-tv-r/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639604/hero_2636_fp689277.jpg?width=768&quality=85  768w,
                                          /media/2639604/hero_2636_fp689277.jpg?width=960&quality=85  960w,
                                          /media/2639604/hero_2636_fp689277.jpg?width=1350&quality=85 1350w,
                                          /media/2639604/hero_2636_fp689277.jpg?width=1920&quality=85 1920w"
                                  alt="LG SIGNATURE OLED TV R"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - </span>

                                <span class="fp-content-header__title">LG SIGNATURE OLED TV R</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4E4B48;"></div>
                    <a href="/projects/tia-lumina/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638713/hero_2798_fp687609.jpg?width=768&quality=85  768w,
                                          /media/2638713/hero_2798_fp687609.jpg?width=960&quality=85  960w,
                                          /media/2638713/hero_2798_fp687609.jpg?width=1350&quality=85 1350w,
                                          /media/2638713/hero_2798_fp687609.jpg?width=1920&quality=85 1920w"
                                  alt="TIA, Lumina"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - </span>

                                <span class="fp-content-header__title">TIA, Lumina</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #514F49;"></div>
                    <a href="/projects/haramain-high-speed-rail/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638836/haramain_rail_mobile_video_cover_image.jpg?width=768&quality=85  768w,
                                          /media/2638836/haramain_rail_mobile_video_cover_image.jpg?width=960&quality=85  960w,
                                          /media/2638836/haramain_rail_mobile_video_cover_image.jpg?width=1350&quality=85 1350w,
                                          /media/2638836/haramain_rail_mobile_video_cover_image.jpg?width=1920&quality=85 1920w"
                                  alt="Haramain High Speed Rail"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Riyadh, Saudi Arabia</span>

                                <span class="fp-content-header__title">Haramain High Speed Rail</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #84867F;"></div>
                    <a href="/projects/the-corniche/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638954/hero_2080_fp690865.jpg?width=768&quality=85  768w,
                                          /media/2638954/hero_2080_fp690865.jpg?width=960&quality=85  960w,
                                          /media/2638954/hero_2080_fp690865.jpg?width=1350&quality=85 1350w,
                                          /media/2638954/hero_2080_fp690865.jpg?width=1920&quality=85 1920w"
                                  alt="The Corniche"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - London, UK</span>

                                <span class="fp-content-header__title">The Corniche</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8B9CA2;"></div>
                    <a href="/projects/arcoris-mont-kiara/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638960/hero_1876_fp683520.jpg?width=768&quality=85  768w,
                                          /media/2638960/hero_1876_fp683520.jpg?width=960&quality=85  960w,
                                          /media/2638960/hero_1876_fp683520.jpg?width=1350&quality=85 1350w,
                                          /media/2638960/hero_1876_fp683520.jpg?width=1920&quality=85 1920w"
                                  alt="Arcoris Mont&#39; Kiara"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Kuala Lumpur, Malaysia</span>

                                <span class="fp-content-header__title">Arcoris Mont&#39; Kiara</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4B627D;"></div>
                    <a href="/projects/norton-museum-of-art/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638414/hero_2005_fp680722.jpg?width=768&quality=85  768w,
                                          /media/2638414/hero_2005_fp680722.jpg?width=960&quality=85  960w,
                                          /media/2638414/hero_2005_fp680722.jpg?width=1350&quality=85 1350w,
                                          /media/2638414/hero_2005_fp680722.jpg?width=1920&quality=85 1920w"
                                  alt="Norton Museum of Art"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - West Palm Beach, USA</span>

                                <span class="fp-content-header__title">Norton Museum of Art</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #564F48;"></div>
                    <a href="/projects/bbc-cymru-wales-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638968/hero_2210_fp681328.jpg?width=768&quality=85  768w,
                                          /media/2638968/hero_2210_fp681328.jpg?width=960&quality=85  960w,
                                          /media/2638968/hero_2210_fp681328.jpg?width=1350&quality=85 1350w,
                                          /media/2638968/hero_2210_fp681328.jpg?width=1920&quality=85 1920w"
                                  alt="BBC Cymru Wales Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Cardiff, UK</span>

                                <span class="fp-content-header__title">BBC Cymru Wales Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #828A71;"></div>
                    <a href="/projects/quartermile-development/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637151/hero_1108_fp549887.jpg?width=768&quality=85  768w,
                                          /media/2637151/hero_1108_fp549887.jpg?width=960&quality=85  960w,
                                          /media/2637151/hero_1108_fp549887.jpg?width=1350&quality=85 1350w,
                                          /media/2637151/hero_1108_fp549887.jpg?width=1920&quality=85 1920w"
                                  alt="Quartermile development"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Edinburgh, UK</span>

                                <span class="fp-content-header__title">Quartermile development</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #828487;"></div>
                    <a href="/projects/samson-pavilion-cwru-and-cleveland-clinic/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638726/samson_pavilion_mobile_video_cover_image.jpg?width=768&quality=85  768w,
                                          /media/2638726/samson_pavilion_mobile_video_cover_image.jpg?width=960&quality=85  960w,
                                          /media/2638726/samson_pavilion_mobile_video_cover_image.jpg?width=1350&quality=85 1350w,
                                          /media/2638726/samson_pavilion_mobile_video_cover_image.jpg?width=1920&quality=85 1920w"
                                  alt="Samson Pavilion, CWRU and Cleveland Clinic"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2019 - Ohio, USA</span>

                                <span class="fp-content-header__title">Samson Pavilion, CWRU and Cleveland Clinic</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #72744C;"></div>
                    <a href="/projects/apple-park/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639250/hero_1859_fp707753.jpg?width=768&quality=85  768w,
                                          /media/2639250/hero_1859_fp707753.jpg?width=960&quality=85  960w,
                                          /media/2639250/hero_1859_fp707753.jpg?width=1350&quality=85 1350w,
                                          /media/2639250/hero_1859_fp707753.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Park"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Cupertino, USA</span>

                                <span class="fp-content-header__title">Apple Park</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #64625C;"></div>
                    <a href="/projects/apple-champs-elysees/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638429/apple_champs_&#233;lys&#233;es_mobile_cover_image.jpg?width=768&quality=85  768w,
                                          /media/2638429/apple_champs_&#233;lys&#233;es_mobile_cover_image.jpg?width=960&quality=85  960w,
                                          /media/2638429/apple_champs_&#233;lys&#233;es_mobile_cover_image.jpg?width=1350&quality=85 1350w,
                                          /media/2638429/apple_champs_&#233;lys&#233;es_mobile_cover_image.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Champs-&#201;lys&#233;es"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Paris, France</span>

                                <span class="fp-content-header__title">Apple Champs-&#201;lys&#233;es</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9A9EA2;"></div>
                    <a href="/projects/apple-kyoto/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638233/hero_2483_fp666385.jpg?width=768&quality=85  768w,
                                          /media/2638233/hero_2483_fp666385.jpg?width=960&quality=85  960w,
                                          /media/2638233/hero_2483_fp666385.jpg?width=1350&quality=85 1350w,
                                          /media/2638233/hero_2483_fp666385.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Kyoto"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Kyoto, Japan</span>

                                <span class="fp-content-header__title">Apple Kyoto</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #ABABAB;"></div>
                    <a href="/projects/new-international-airport-mexico-city/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633893/2223_fp612809.jpg?width=768&quality=85  768w,
                                          /media/2633893/2223_fp612809.jpg?width=960&quality=85  960w,
                                          /media/2633893/2223_fp612809.jpg?width=1350&quality=85 1350w,
                                          /media/2633893/2223_fp612809.jpg?width=1920&quality=85 1920w"
                                  alt="New International Airport Mexico City"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Mexico City, Mexico</span>

                                <span class="fp-content-header__title">New International Airport Mexico City</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #ABA4A3;"></div>
                    <a href="/projects/100-east-53rd-street/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639187/hero_2059_fp706166.jpg?width=768&quality=85  768w,
                                          /media/2639187/hero_2059_fp706166.jpg?width=960&quality=85  960w,
                                          /media/2639187/hero_2059_fp706166.jpg?width=1350&quality=85 1350w,
                                          /media/2639187/hero_2059_fp706166.jpg?width=1920&quality=85 1920w"
                                  alt="100 East 53rd Street"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - New York, USA</span>

                                <span class="fp-content-header__title">100 East 53rd Street</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #737D8D;"></div>
                    <a href="/projects/3beirut/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636669/3beirut_mobile_video_cover_image.jpg?width=768&quality=85  768w,
                                          /media/2636669/3beirut_mobile_video_cover_image.jpg?width=960&quality=85  960w,
                                          /media/2636669/3beirut_mobile_video_cover_image.jpg?width=1350&quality=85 1350w,
                                          /media/2636669/3beirut_mobile_video_cover_image.jpg?width=1920&quality=85 1920w"
                                  alt="3Beirut"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Beirut, Lebanon</span>

                                <span class="fp-content-header__title">3Beirut</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1591"
                    data-height="895">
                    <div class="fp-dominant-colour" style="background-color: #8B8A7C;"></div>
                    <a href="/projects/apple-cotai-central-macau/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638057/apple_cotai_central_mobile_video_cover_image.jpg?width=768&quality=85  768w,
                                          /media/2638057/apple_cotai_central_mobile_video_cover_image.jpg?width=960&quality=85  960w,
                                          /media/2638057/apple_cotai_central_mobile_video_cover_image.jpg?width=1350&quality=85 1350w,
                                          /media/2638057/apple_cotai_central_mobile_video_cover_image.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Cotai Central, Macau"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Macau, China</span>

                                <span class="fp-content-header__title">Apple Cotai Central, Macau</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9C9D9A;"></div>
                    <a href="/projects/apple-piazza-liberty/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638075/hero_2264_fp658999.jpg?width=768&quality=85  768w,
                                          /media/2638075/hero_2264_fp658999.jpg?width=960&quality=85  960w,
                                          /media/2638075/hero_2264_fp658999.jpg?width=1350&quality=85 1350w,
                                          /media/2638075/hero_2264_fp658999.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Piazza Liberty"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Milan, Italy</span>

                                <span class="fp-content-header__title">Apple Piazza Liberty</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #606974;"></div>
                    <a href="/projects/aqwa-corporate/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637448/hero_2076_fp642731.jpg?width=768&quality=85  768w,
                                          /media/2637448/hero_2076_fp642731.jpg?width=960&quality=85  960w,
                                          /media/2637448/hero_2076_fp642731.jpg?width=1350&quality=85 1350w,
                                          /media/2637448/hero_2076_fp642731.jpg?width=1920&quality=85 1920w"
                                  alt="AQWA Corporate"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Rio de Janeiro, Brazil</span>

                                <span class="fp-content-header__title">AQWA Corporate</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #DDD8D6;"></div>
                    <a href="/projects/cove-poltrona-frau/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637279/hero_p126008_cove.jpg?width=768&quality=85  768w,
                                          /media/2637279/hero_p126008_cove.jpg?width=960&quality=85  960w,
                                          /media/2637279/hero_p126008_cove.jpg?width=1350&quality=85 1350w,
                                          /media/2637279/hero_p126008_cove.jpg?width=1920&quality=85 1920w"
                                  alt="Cove, Poltrona Frau"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - </span>

                                <span class="fp-content-header__title">Cove, Poltrona Frau</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #747787;"></div>
                    <a href="/projects/duo-central-park/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638173/hero_2094_fp664563.jpg?width=768&quality=85  768w,
                                          /media/2638173/hero_2094_fp664563.jpg?width=960&quality=85  960w,
                                          /media/2638173/hero_2094_fp664563.jpg?width=1350&quality=85 1350w,
                                          /media/2638173/hero_2094_fp664563.jpg?width=1920&quality=85 1920w"
                                  alt="DUO Central Park"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Sydney, Australia</span>

                                <span class="fp-content-header__title">DUO Central Park</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #B68E7B;"></div>
                    <a href="/projects/foster-620-walter-knoll/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638773/hero_1942_fp637627.jpg?width=768&quality=85  768w,
                                          /media/2638773/hero_1942_fp637627.jpg?width=960&quality=85  960w,
                                          /media/2638773/hero_1942_fp637627.jpg?width=1350&quality=85 1350w,
                                          /media/2638773/hero_1942_fp637627.jpg?width=1920&quality=85 1920w"
                                  alt="Foster 620, Walter Knoll"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - </span>

                                <span class="fp-content-header__title">Foster 620, Walter Knoll</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #5F7088;"></div>
                    <a href="/projects/foster-range-stelton-tableware/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637175/hero_2588_fp641309.jpg?width=768&quality=85  768w,
                                          /media/2637175/hero_2588_fp641309.jpg?width=960&quality=85  960w,
                                          /media/2637175/hero_2588_fp641309.jpg?width=1350&quality=85 1350w,
                                          /media/2637175/hero_2588_fp641309.jpg?width=1920&quality=85 1920w"
                                  alt="Foster range, Stelton tableware"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - </span>

                                <span class="fp-content-header__title">Foster range, Stelton tableware</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #AC9449;"></div>
                    <a href="/projects/hongqiao-vantone-sunnyworld-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632406/hero_2002_fp454841.jpg?width=768&quality=85  768w,
                                          /media/2632406/hero_2002_fp454841.jpg?width=960&quality=85  960w,
                                          /media/2632406/hero_2002_fp454841.jpg?width=1350&quality=85 1350w,
                                          /media/2632406/hero_2002_fp454841.jpg?width=1920&quality=85 1920w"
                                  alt="Hongqiao Vantone SunnyWorld Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Shanghai, China</span>

                                <span class="fp-content-header__title">Hongqiao Vantone SunnyWorld Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #B0A294;"></div>
                    <a href="/projects/ovo-benchmark/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637760/hero_2589_fp649620.jpg?width=768&quality=85  768w,
                                          /media/2637760/hero_2589_fp649620.jpg?width=960&quality=85  960w,
                                          /media/2637760/hero_2589_fp649620.jpg?width=1350&quality=85 1350w,
                                          /media/2637760/hero_2589_fp649620.jpg?width=1920&quality=85 1920w"
                                  alt="OVO, Benchmark"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - </span>

                                <span class="fp-content-header__title">OVO, Benchmark</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #716E6A;"></div>
                    <a href="/projects/the-murray/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637782/hero_2215_fp650417.jpg?width=768&quality=85  768w,
                                          /media/2637782/hero_2215_fp650417.jpg?width=960&quality=85  960w,
                                          /media/2637782/hero_2215_fp650417.jpg?width=1350&quality=85 1350w,
                                          /media/2637782/hero_2215_fp650417.jpg?width=1920&quality=85 1920w"
                                  alt="The Murray"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Hong Kong, China</span>

                                <span class="fp-content-header__title">The Murray</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #595C4B;"></div>
                    <a href="/projects/vatican-chapel-pavilion-of-the-holy-see/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637772/hero_9.jpg?width=768&quality=85  768w,
                                          /media/2637772/hero_9.jpg?width=960&quality=85  960w,
                                          /media/2637772/hero_9.jpg?width=1350&quality=85 1350w,
                                          /media/2637772/hero_9.jpg?width=1920&quality=85 1920w"
                                  alt="Vatican Chapel, Pavilion of the Holy See "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Venice, Italy</span>

                                <span class="fp-content-header__title">Vatican Chapel, Pavilion of the Holy See </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #31789D;"></div>
                    <a href="/projects/york-university-station-toronto-subway/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638093/hero_1782_fp660104.jpg?width=768&quality=85  768w,
                                          /media/2638093/hero_1782_fp660104.jpg?width=960&quality=85  960w,
                                          /media/2638093/hero_1782_fp660104.jpg?width=1350&quality=85 1350w,
                                          /media/2638093/hero_1782_fp660104.jpg?width=1920&quality=85 1920w"
                                  alt="York University Station, Toronto Subway"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2018 - Toronto, Canada</span>

                                <span class="fp-content-header__title">York University Station, Toronto Subway</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #7E6E5B;"></div>
                    <a href="/projects/upper-orwell-crossings/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637980/hero_2596_fp611549.jpg?width=768&quality=85  768w,
                                          /media/2637980/hero_2596_fp611549.jpg?width=960&quality=85  960w,
                                          /media/2637980/hero_2596_fp611549.jpg?width=1350&quality=85 1350w,
                                          /media/2637980/hero_2596_fp611549.jpg?width=1920&quality=85 1920w"
                                  alt="Upper Orwell Crossings"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - Ipswich, UK</span>

                                <span class="fp-content-header__title">Upper Orwell Crossings</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4A5C67;"></div>
                    <a href="/projects/551-west-21st-street/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632718/hero_2036_fp602448.jpg?width=768&quality=85  768w,
                                          /media/2632718/hero_2036_fp602448.jpg?width=960&quality=85  960w,
                                          /media/2632718/hero_2036_fp602448.jpg?width=1350&quality=85 1350w,
                                          /media/2632718/hero_2036_fp602448.jpg?width=1920&quality=85 1920w"
                                  alt="551 West 21st Street"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - New York, USA</span>

                                <span class="fp-content-header__title">551 West 21st Street</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #756F65;"></div>
                    <a href="/projects/apple-dubai-mall/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636080/appledubai.jpg?width=768&quality=85  768w,
                                          /media/2636080/appledubai.jpg?width=960&quality=85  960w,
                                          /media/2636080/appledubai.jpg?width=1350&quality=85 1350w,
                                          /media/2636080/appledubai.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Dubai Mall"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - Dubai, UAE</span>

                                <span class="fp-content-header__title">Apple Dubai Mall</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #777266;"></div>
                    <a href="/projects/apple-michigan-avenue-chicago/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636682/apple_michigan_avenue_mobile_video_cover_image.jpg?width=768&quality=85  768w,
                                          /media/2636682/apple_michigan_avenue_mobile_video_cover_image.jpg?width=960&quality=85  960w,
                                          /media/2636682/apple_michigan_avenue_mobile_video_cover_image.jpg?width=1350&quality=85 1350w,
                                          /media/2636682/apple_michigan_avenue_mobile_video_cover_image.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Michigan Avenue, Chicago"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - Chicago, USA</span>

                                <span class="fp-content-header__title">Apple Michigan Avenue, Chicago</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8C8C7C;"></div>
                    <a href="/projects/apple-orchard-road-singapore/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634264/hero_2317_fp619883.jpg?width=768&quality=85  768w,
                                          /media/2634264/hero_2317_fp619883.jpg?width=960&quality=85  960w,
                                          /media/2634264/hero_2317_fp619883.jpg?width=1350&quality=85 1350w,
                                          /media/2634264/hero_2317_fp619883.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Orchard Road, Singapore"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - Singapore, Singapore</span>

                                <span class="fp-content-header__title">Apple Orchard Road, Singapore</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9F8C76;"></div>
                    <a href="/projects/apple-park-visitor-center/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636459/hero_1859_fp633969.jpg?width=768&quality=85  768w,
                                          /media/2636459/hero_1859_fp633969.jpg?width=960&quality=85  960w,
                                          /media/2636459/hero_1859_fp633969.jpg?width=1350&quality=85 1350w,
                                          /media/2636459/hero_1859_fp633969.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Park Visitor Center"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - Cupertino, USA</span>

                                <span class="fp-content-header__title">Apple Park Visitor Center</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8A7C6C;"></div>
                    <a href="/projects/ashburnham-school-playground/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636394/hero_p12712_fp632625.jpg?width=768&quality=85  768w,
                                          /media/2636394/hero_p12712_fp632625.jpg?width=960&quality=85  960w,
                                          /media/2636394/hero_p12712_fp632625.jpg?width=1350&quality=85 1350w,
                                          /media/2636394/hero_p12712_fp632625.jpg?width=1920&quality=85 1920w"
                                  alt="Ashburnham School Playground"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - London, UK</span>

                                <span class="fp-content-header__title">Ashburnham School Playground</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #6E6458;"></div>
                    <a href="/projects/bloomberg/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636377/bloomberg_mobile_video_cover_image.jpg?width=768&quality=85  768w,
                                          /media/2636377/bloomberg_mobile_video_cover_image.jpg?width=960&quality=85  960w,
                                          /media/2636377/bloomberg_mobile_video_cover_image.jpg?width=1350&quality=85 1350w,
                                          /media/2636377/bloomberg_mobile_video_cover_image.jpg?width=1920&quality=85 1920w"
                                  alt="Bloomberg "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - London, UK</span>

                                <span class="fp-content-header__title">Bloomberg </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #7D7D83;"></div>
                    <a href="/projects/bund-finance-center/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636278/the_bund_finance_centre_mobile_video_cover_image.jpg?width=768&quality=85  768w,
                                          /media/2636278/the_bund_finance_centre_mobile_video_cover_image.jpg?width=960&quality=85  960w,
                                          /media/2636278/the_bund_finance_centre_mobile_video_cover_image.jpg?width=1350&quality=85 1350w,
                                          /media/2636278/the_bund_finance_centre_mobile_video_cover_image.jpg?width=1920&quality=85 1920w"
                                  alt="Bund Finance Center"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - Shanghai, China</span>

                                <span class="fp-content-header__title">Bund Finance Center</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #603333;"></div>
                    <a href="/projects/cartier-in-motion/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637143/2644_fp619588.jpg?width=768&quality=85  768w,
                                          /media/2637143/2644_fp619588.jpg?width=960&quality=85  960w,
                                          /media/2637143/2644_fp619588.jpg?width=1350&quality=85 1350w,
                                          /media/2637143/2644_fp619588.jpg?width=1920&quality=85 1920w"
                                  alt="Cartier in Motion"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - London, UK</span>

                                <span class="fp-content-header__title">Cartier in Motion</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #635D56;"></div>
                    <a href="/projects/citic-bank-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639336/hero_1844_fp715182_indesign.jpg?width=768&quality=85  768w,
                                          /media/2639336/hero_1844_fp715182_indesign.jpg?width=960&quality=85  960w,
                                          /media/2639336/hero_1844_fp715182_indesign.jpg?width=1350&quality=85 1350w,
                                          /media/2639336/hero_1844_fp715182_indesign.jpg?width=1920&quality=85 1920w"
                                  alt="Citic Bank Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - Hangzhou, China</span>

                                <span class="fp-content-header__title">Citic Bank Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #BFAA91;"></div>
                    <a href="/projects/node-price-industries/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637247/hero_2563_fp645204.jpg?width=768&quality=85  768w,
                                          /media/2637247/hero_2563_fp645204.jpg?width=960&quality=85  960w,
                                          /media/2637247/hero_2563_fp645204.jpg?width=1350&quality=85 1350w,
                                          /media/2637247/hero_2563_fp645204.jpg?width=1920&quality=85 1920w"
                                  alt="Node, Price Industries"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - </span>

                                <span class="fp-content-header__title">Node, Price Industries</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8F938A;"></div>
                    <a href="/projects/ocean-terminal-extension/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636447/hero_2137_fp632947.jpg?width=768&quality=85  768w,
                                          /media/2636447/hero_2137_fp632947.jpg?width=960&quality=85  960w,
                                          /media/2636447/hero_2137_fp632947.jpg?width=1350&quality=85 1350w,
                                          /media/2636447/hero_2137_fp632947.jpg?width=1920&quality=85 1920w"
                                  alt="Ocean Terminal extension"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - Hong Kong, China</span>

                                <span class="fp-content-header__title">Ocean Terminal extension</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6E6865;"></div>
                    <a href="/projects/old-spitalfields-market/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636309/hero_2517_fp631402.jpg?width=768&quality=85  768w,
                                          /media/2636309/hero_2517_fp631402.jpg?width=960&quality=85  960w,
                                          /media/2636309/hero_2517_fp631402.jpg?width=1350&quality=85 1350w,
                                          /media/2636309/hero_2517_fp631402.jpg?width=1920&quality=85 1920w"
                                  alt="Old Spitalfields Market"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - London, UK</span>

                                <span class="fp-content-header__title">Old Spitalfields Market</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A9ACAD;"></div>
                    <a href="/projects/r-ga/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637208/hero_2263_fp628264.jpg?width=768&quality=85  768w,
                                          /media/2637208/hero_2263_fp628264.jpg?width=960&quality=85  960w,
                                          /media/2637208/hero_2263_fp628264.jpg?width=1350&quality=85 1350w,
                                          /media/2637208/hero_2263_fp628264.jpg?width=1920&quality=85 1920w"
                                  alt="R/GA"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - New York, USA</span>

                                <span class="fp-content-header__title">R/GA</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7B6B64;"></div>
                    <a href="/projects/steve-jobs-theater/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636111/hero_1859_fp628241.jpg?width=768&quality=85  768w,
                                          /media/2636111/hero_1859_fp628241.jpg?width=960&quality=85  960w,
                                          /media/2636111/hero_1859_fp628241.jpg?width=1350&quality=85 1350w,
                                          /media/2636111/hero_1859_fp628241.jpg?width=1920&quality=85 1920w"
                                  alt="Steve Jobs Theater"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2017 - Cupertino, USA</span>

                                <span class="fp-content-header__title">Steve Jobs Theater</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #544435;"></div>
                    <a href="/projects/jeddah-metro/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638226/hero_2403_fp601267.jpg?width=768&quality=85  768w,
                                          /media/2638226/hero_2403_fp601267.jpg?width=960&quality=85  960w,
                                          /media/2638226/hero_2403_fp601267.jpg?width=1350&quality=85 1350w,
                                          /media/2638226/hero_2403_fp601267.jpg?width=1920&quality=85 1920w"
                                  alt="Jeddah Metro"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - Jeddah, Saudi Arabia</span>

                                <span class="fp-content-header__title">Jeddah Metro</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #B2AA9F;"></div>
                    <a href="/projects/apple-regent-street-london/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634254/hero_2278_fp605501.jpg?width=768&quality=85  768w,
                                          /media/2634254/hero_2278_fp605501.jpg?width=960&quality=85  960w,
                                          /media/2634254/hero_2278_fp605501.jpg?width=1350&quality=85 1350w,
                                          /media/2634254/hero_2278_fp605501.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Regent Street, London"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - London, UK</span>

                                <span class="fp-content-header__title">Apple Regent Street, London</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A2A09C;"></div>
                    <a href="/projects/apple-union-square-san-francisco/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632258/hero_2092_fp584233.jpg?width=768&quality=85  768w,
                                          /media/2632258/hero_2092_fp584233.jpg?width=960&quality=85  960w,
                                          /media/2632258/hero_2092_fp584233.jpg?width=1350&quality=85 1350w,
                                          /media/2632258/hero_2092_fp584233.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Union Square, San Francisco"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - San Francisco, USA</span>

                                <span class="fp-content-header__title">Apple Union Square, San Francisco</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #93908D;"></div>
                    <a href="/projects/dot-lumina/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636155/hero_2181_160307_img_0007_m.jpg?width=768&quality=85  768w,
                                          /media/2636155/hero_2181_160307_img_0007_m.jpg?width=960&quality=85  960w,
                                          /media/2636155/hero_2181_160307_img_0007_m.jpg?width=1350&quality=85 1350w,
                                          /media/2636155/hero_2181_160307_img_0007_m.jpg?width=1920&quality=85 1920w"
                                  alt="DOT, Lumina"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - </span>

                                <span class="fp-content-header__title">DOT, Lumina</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #393630;"></div>
                    <a href="/projects/eva-lumina/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636089/eva.jpg?width=768&quality=85  768w,
                                          /media/2636089/eva.jpg?width=960&quality=85  960w,
                                          /media/2636089/eva.jpg?width=1350&quality=85 1350w,
                                          /media/2636089/eva.jpg?width=1920&quality=85 1920w"
                                  alt="EVA, Lumina"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - </span>

                                <span class="fp-content-header__title">EVA, Lumina</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9D968E;"></div>
                    <a href="/projects/foster-512-walter-knoll/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633212/hero_2190_fp621520.jpg?width=768&quality=85  768w,
                                          /media/2633212/hero_2190_fp621520.jpg?width=960&quality=85  960w,
                                          /media/2633212/hero_2190_fp621520.jpg?width=1350&quality=85 1350w,
                                          /media/2633212/hero_2190_fp621520.jpg?width=1920&quality=85 1920w"
                                  alt="Foster 512, Walter Knoll "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - </span>

                                <span class="fp-content-header__title">Foster 512, Walter Knoll </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #F6F4F0;"></div>
                    <a href="/projects/foster-525-walter-knoll/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636156/hero_2077_fp573755.jpg?width=768&quality=85  768w,
                                          /media/2636156/hero_2077_fp573755.jpg?width=960&quality=85  960w,
                                          /media/2636156/hero_2077_fp573755.jpg?width=1350&quality=85 1350w,
                                          /media/2636156/hero_2077_fp573755.jpg?width=1920&quality=85 1920w"
                                  alt="Foster 525, Walter Knoll "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - </span>

                                <span class="fp-content-header__title">Foster 525, Walter Knoll </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #AAA8A5;"></div>
                    <a href="/projects/hadriana-and-hadrian-citco-stone-tables/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636150/hero_hadriana_hadrian_table.jpg?width=768&quality=85  768w,
                                          /media/2636150/hero_hadriana_hadrian_table.jpg?width=960&quality=85  960w,
                                          /media/2636150/hero_hadriana_hadrian_table.jpg?width=1350&quality=85 1350w,
                                          /media/2636150/hero_hadriana_hadrian_table.jpg?width=1920&quality=85 1920w"
                                  alt="Hadriana and Hadrian, Citco stone tables"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - </span>

                                <span class="fp-content-header__title">Hadriana and Hadrian, Citco stone tables</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #8D8C88;"></div>
                    <a href="/projects/hankook-technodome/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636090/hankook.jpg?width=768&quality=85  768w,
                                          /media/2636090/hankook.jpg?width=960&quality=85  960w,
                                          /media/2636090/hankook.jpg?width=1350&quality=85 1350w,
                                          /media/2636090/hankook.jpg?width=1920&quality=85 1920w"
                                  alt="Hankook Technodome"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - Daejeon, South Korea</span>

                                <span class="fp-content-header__title">Hankook Technodome</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #93928A;"></div>
                    <a href="/projects/ilham-tower/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632400/hero_1784_fp585079.jpg?width=768&quality=85  768w,
                                          /media/2632400/hero_1784_fp585079.jpg?width=960&quality=85  960w,
                                          /media/2632400/hero_1784_fp585079.jpg?width=1350&quality=85 1350w,
                                          /media/2632400/hero_1784_fp585079.jpg?width=1920&quality=85 1920w"
                                  alt="Ilham Tower"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - Kuala Lumpur, Malaysia</span>

                                <span class="fp-content-header__title">Ilham Tower</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9E8473;"></div>
                    <a href="/projects/jabal-omar-development/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634277/hero_2585_fp606493.jpg?width=768&quality=85  768w,
                                          /media/2634277/hero_2585_fp606493.jpg?width=960&quality=85  960w,
                                          /media/2634277/hero_2585_fp606493.jpg?width=1350&quality=85 1350w,
                                          /media/2634277/hero_2585_fp606493.jpg?width=1920&quality=85 1920w"
                                  alt="Jabal Omar development"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - Makkah, Saudi Arabia</span>

                                <span class="fp-content-header__title">Jabal Omar development</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #B59785;"></div>
                    <a href="/projects/kulm-eispavillon/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634196/hero_2516_fp605246.jpg?width=768&quality=85  768w,
                                          /media/2634196/hero_2516_fp605246.jpg?width=960&quality=85  960w,
                                          /media/2634196/hero_2516_fp605246.jpg?width=1350&quality=85 1350w,
                                          /media/2634196/hero_2516_fp605246.jpg?width=1920&quality=85 1920w"
                                  alt="Kulm Eispavillon"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - St Moritz, Switzerland</span>

                                <span class="fp-content-header__title">Kulm Eispavillon</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #282d33;"></div>
                    <a href="/projects/maggie-s-manchester/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632689/hero_2145_fp581582.jpg?width=768&quality=85  768w,
                                          /media/2632689/hero_2145_fp581582.jpg?width=960&quality=85  960w,
                                          /media/2632689/hero_2145_fp581582.jpg?width=1350&quality=85 1350w,
                                          /media/2632689/hero_2145_fp581582.jpg?width=1920&quality=85 1920w"
                                  alt="Maggie’s Manchester"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - Manchester, UK</span>

                                <span class="fp-content-header__title">Maggie’s Manchester</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #F5F5F5;"></div>
                    <a href="/projects/orsa-artemide/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636803/orsa_artemide_pendant_light_mobile_video_cover_image.jpg?width=768&quality=85  768w,
                                          /media/2636803/orsa_artemide_pendant_light_mobile_video_cover_image.jpg?width=960&quality=85  960w,
                                          /media/2636803/orsa_artemide_pendant_light_mobile_video_cover_image.jpg?width=1350&quality=85 1350w,
                                          /media/2636803/orsa_artemide_pendant_light_mobile_video_cover_image.jpg?width=1920&quality=85 1920w"
                                  alt="ORSA, Artemide"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - </span>

                                <span class="fp-content-header__title">ORSA, Artemide</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #77776D;"></div>
                    <a href="/projects/south-beach/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632394/hero_1545_fp593148.jpg?width=768&quality=85  768w,
                                          /media/2632394/hero_1545_fp593148.jpg?width=960&quality=85  960w,
                                          /media/2632394/hero_1545_fp593148.jpg?width=1350&quality=85 1350w,
                                          /media/2632394/hero_1545_fp593148.jpg?width=1920&quality=85 1920w"
                                  alt="South Beach"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - Singapore</span>

                                <span class="fp-content-header__title">South Beach</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #998E7B;"></div>
                    <a href="/projects/tono-porcelanosa/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633205/hero_2216_fp595412.jpg?width=768&quality=85  768w,
                                          /media/2633205/hero_2216_fp595412.jpg?width=960&quality=85  960w,
                                          /media/2633205/hero_2216_fp595412.jpg?width=1350&quality=85 1350w,
                                          /media/2633205/hero_2216_fp595412.jpg?width=1920&quality=85 1920w"
                                  alt="TONO, Porcelanosa"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - </span>

                                <span class="fp-content-header__title">TONO, Porcelanosa</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7D7866;"></div>
                    <a href="/projects/university-of-iowa-stead-family-children-s-hospital/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633255/hero_2011_fp601135.jpg?width=768&quality=85  768w,
                                          /media/2633255/hero_2011_fp601135.jpg?width=960&quality=85  960w,
                                          /media/2633255/hero_2011_fp601135.jpg?width=1350&quality=85 1350w,
                                          /media/2633255/hero_2011_fp601135.jpg?width=1920&quality=85 1920w"
                                  alt="University of Iowa Stead Family Children&#39;s Hospital"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - Iowa , USA</span>

                                <span class="fp-content-header__title">University of Iowa Stead Family Children&#39;s Hospital</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #BF9A81;"></div>
                    <a href="/projects/xiao-jing-wan-university/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636091/xjw.jpg?width=768&quality=85  768w,
                                          /media/2636091/xjw.jpg?width=960&quality=85  960w,
                                          /media/2636091/xjw.jpg?width=1350&quality=85 1350w,
                                          /media/2636091/xjw.jpg?width=1920&quality=85 1920w"
                                  alt="Xiao Jing Wan University"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2016 - Shenzhen, China</span>

                                <span class="fp-content-header__title">Xiao Jing Wan University</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #838D95;"></div>
                    <a href="/projects/50-united-nations-plaza/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632705/hero_1599_fp602477.jpg?width=768&quality=85  768w,
                                          /media/2632705/hero_1599_fp602477.jpg?width=960&quality=85  960w,
                                          /media/2632705/hero_1599_fp602477.jpg?width=1350&quality=85 1350w,
                                          /media/2632705/hero_1599_fp602477.jpg?width=1920&quality=85 1920w"
                                  alt="50 United Nations Plaza"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - New York, USA</span>

                                <span class="fp-content-header__title">50 United Nations Plaza</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8E94A3;"></div>
                    <a href="/projects/apple-westlake-hangzhou/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632260/hero_2023_fp530108.jpg?width=768&quality=85  768w,
                                          /media/2632260/hero_2023_fp530108.jpg?width=960&quality=85  960w,
                                          /media/2632260/hero_2023_fp530108.jpg?width=1350&quality=85 1350w,
                                          /media/2632260/hero_2023_fp530108.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Westlake, Hangzhou"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - Hangzhou, China</span>

                                <span class="fp-content-header__title">Apple Westlake, Hangzhou</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #75756F;"></div>
                    <a href="/projects/buenos-aires-ciudad-casa-de-gobierno/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632936/hero_1895_fp540279.jpg?width=768&quality=85  768w,
                                          /media/2632936/hero_1895_fp540279.jpg?width=960&quality=85  960w,
                                          /media/2632936/hero_1895_fp540279.jpg?width=1350&quality=85 1350w,
                                          /media/2632936/hero_1895_fp540279.jpg?width=1920&quality=85 1920w"
                                  alt="Buenos Aires Ciudad Casa de Gobierno"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - Buenos Aires, Argentina</span>

                                <span class="fp-content-header__title">Buenos Aires Ciudad Casa de Gobierno</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4B6267;"></div>
                    <a href="/projects/chateau-margaux/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632198/hero_1868_fp546655.jpg?width=768&quality=85  768w,
                                          /media/2632198/hero_1868_fp546655.jpg?width=960&quality=85  960w,
                                          /media/2632198/hero_1868_fp546655.jpg?width=1350&quality=85 1350w,
                                          /media/2632198/hero_1868_fp546655.jpg?width=1920&quality=85 1920w"
                                  alt="Ch&#226;teau Margaux"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - Bordeaux, France</span>

                                <span class="fp-content-header__title">Ch&#226;teau Margaux</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A7B6C8;"></div>
                    <a href="/projects/copenhagen-towers/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636791/2167_fp601407.jpg?width=768&quality=85  768w,
                                          /media/2636791/2167_fp601407.jpg?width=960&quality=85  960w,
                                          /media/2636791/2167_fp601407.jpg?width=1350&quality=85 1350w,
                                          /media/2636791/2167_fp601407.jpg?width=1920&quality=85 1920w"
                                  alt="Copenhagen Towers"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - &#216;restad, Denmark</span>

                                <span class="fp-content-header__title">Copenhagen Towers</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #76764E;"></div>
                    <a href="/projects/crossrail-place-canary-wharf/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632395/hero_1701_fp564938.jpg?width=768&quality=85  768w,
                                          /media/2632395/hero_1701_fp564938.jpg?width=960&quality=85  960w,
                                          /media/2632395/hero_1701_fp564938.jpg?width=1350&quality=85 1350w,
                                          /media/2632395/hero_1701_fp564938.jpg?width=1920&quality=85 1920w"
                                  alt="Crossrail Place Canary Wharf "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - London, UK</span>

                                <span class="fp-content-header__title">Crossrail Place Canary Wharf </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #ACB2B2;"></div>
                    <a href="/projects/droneport/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632409/hero_p12006_fp587972.jpg?width=768&quality=85  768w,
                                          /media/2632409/hero_p12006_fp587972.jpg?width=960&quality=85  960w,
                                          /media/2632409/hero_p12006_fp587972.jpg?width=1350&quality=85 1350w,
                                          /media/2632409/hero_p12006_fp587972.jpg?width=1920&quality=85 1920w"
                                  alt="Droneport"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - Multi-location, Central African Republic</span>

                                <span class="fp-content-header__title">Droneport</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A2AAAF;"></div>
                    <a href="/projects/faena-house/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633152/hero_1965_fp567168.jpg?width=768&quality=85  768w,
                                          /media/2633152/hero_1965_fp567168.jpg?width=960&quality=85  960w,
                                          /media/2633152/hero_1965_fp567168.jpg?width=1350&quality=85 1350w,
                                          /media/2633152/hero_1965_fp567168.jpg?width=1920&quality=85 1920w"
                                  alt="Faena House"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - Miami, USA</span>

                                <span class="fp-content-header__title">Faena House</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #868987;"></div>
                    <a href="/projects/fuel-station-of-the-future/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633237/hero_2518_fp583410.jpg?width=768&quality=85  768w,
                                          /media/2633237/hero_2518_fp583410.jpg?width=960&quality=85  960w,
                                          /media/2633237/hero_2518_fp583410.jpg?width=1350&quality=85 1350w,
                                          /media/2633237/hero_2518_fp583410.jpg?width=1920&quality=85 1920w"
                                  alt="Fuel Station of the Future"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - Various</span>

                                <span class="fp-content-header__title">Fuel Station of the Future</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #B2A99C;"></div>
                    <a href="/projects/la-porte-romaine/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632679/hero_1992_fp546730.jpg?width=768&quality=85  768w,
                                          /media/2632679/hero_1992_fp546730.jpg?width=960&quality=85  960w,
                                          /media/2632679/hero_1992_fp546730.jpg?width=1350&quality=85 1350w,
                                          /media/2632679/hero_1992_fp546730.jpg?width=1920&quality=85 1920w"
                                  alt="La Porte Romaine "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - N&#238;mes, France</span>

                                <span class="fp-content-header__title">La Porte Romaine </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #816E5D;"></div>
                    <a href="/projects/mars-habitat/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632874/hero_p12274_fp555542.jpg?width=768&quality=85  768w,
                                          /media/2632874/hero_p12274_fp555542.jpg?width=960&quality=85  960w,
                                          /media/2632874/hero_p12274_fp555542.jpg?width=1350&quality=85 1350w,
                                          /media/2632874/hero_p12274_fp555542.jpg?width=1920&quality=85 1920w"
                                  alt="Mars Habitat"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - Space</span>

                                <span class="fp-content-header__title">Mars Habitat</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #6E6559;"></div>
                    <a href="/projects/masdar-institute/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636100/masdar_institute.jpg?width=768&quality=85  768w,
                                          /media/2636100/masdar_institute.jpg?width=960&quality=85  960w,
                                          /media/2636100/masdar_institute.jpg?width=1350&quality=85 1350w,
                                          /media/2636100/masdar_institute.jpg?width=1920&quality=85 1920w"
                                  alt="Masdar Institute"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - Abu Dhabi, UAE</span>

                                <span class="fp-content-header__title">Masdar Institute</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #655A58;"></div>
                    <a href="/projects/plinth-for-martyrs-installation/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632680/hero_1993_fp581480.jpg?width=768&quality=85  768w,
                                          /media/2632680/hero_1993_fp581480.jpg?width=960&quality=85  960w,
                                          /media/2632680/hero_1993_fp581480.jpg?width=1350&quality=85 1350w,
                                          /media/2632680/hero_1993_fp581480.jpg?width=1920&quality=85 1920w"
                                  alt="Plinth for ‘Martyrs’ installation"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - </span>

                                <span class="fp-content-header__title">Plinth for ‘Martyrs’ installation</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #938C7F;"></div>
                    <a href="/projects/porcelanosa-new-york-flagship-store/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632686/hero_2113_fp602327.jpg?width=768&quality=85  768w,
                                          /media/2632686/hero_2113_fp602327.jpg?width=960&quality=85  960w,
                                          /media/2632686/hero_2113_fp602327.jpg?width=1350&quality=85 1350w,
                                          /media/2632686/hero_2113_fp602327.jpg?width=1920&quality=85 1920w"
                                  alt="Porcelanosa New York Flagship Store"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - New York, USA</span>

                                <span class="fp-content-header__title">Porcelanosa New York Flagship Store</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #AA8477;"></div>
                    <a href="/projects/uae-pavilion-milan-expo-2015/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632933/hero_2182_fp543098.jpg?width=768&quality=85  768w,
                                          /media/2632933/hero_2182_fp543098.jpg?width=960&quality=85  960w,
                                          /media/2632933/hero_2182_fp543098.jpg?width=1350&quality=85 1350w,
                                          /media/2632933/hero_2182_fp543098.jpg?width=1920&quality=85 1920w"
                                  alt="UAE Pavilion Milan Expo 2015"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - Milan, Italy</span>

                                <span class="fp-content-header__title">UAE Pavilion Milan Expo 2015</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #ACABAB;"></div>
                    <a href="/projects/vicino-molteni-c/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636154/hero_vicino_table.jpg?width=768&quality=85  768w,
                                          /media/2636154/hero_vicino_table.jpg?width=960&quality=85  960w,
                                          /media/2636154/hero_vicino_table.jpg?width=1350&quality=85 1350w,
                                          /media/2636154/hero_vicino_table.jpg?width=1920&quality=85 1920w"
                                  alt="Vicino, Molteni&amp;C "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2015 - </span>

                                <span class="fp-content-header__title">Vicino, Molteni&amp;C </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #B9A37F;"></div>
                    <a href="/projects/alen-yacht-68/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632140/hero_2083_fp503498.jpg?width=768&quality=85  768w,
                                          /media/2632140/hero_2083_fp503498.jpg?width=960&quality=85  960w,
                                          /media/2632140/hero_2083_fp503498.jpg?width=1350&quality=85 1350w,
                                          /media/2632140/hero_2083_fp503498.jpg?width=1920&quality=85 1920w"
                                  alt="Alen Yacht 68"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - Istanbul, Turkey</span>

                                <span class="fp-content-header__title">Alen Yacht 68</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #859086;"></div>
                    <a href="/projects/anfa-place/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633512/hero_1560_fp474450.jpg?width=768&quality=85  768w,
                                          /media/2633512/hero_1560_fp474450.jpg?width=960&quality=85  960w,
                                          /media/2633512/hero_1560_fp474450.jpg?width=1350&quality=85 1350w,
                                          /media/2633512/hero_1560_fp474450.jpg?width=1920&quality=85 1920w"
                                  alt="Anfa Place"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - Casablanca, Morocco</span>

                                <span class="fp-content-header__title">Anfa Place</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4A4847;"></div>
                    <a href="/projects/apple-zorlu-centre-istanbul/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632148/hero_2134_fp517539.jpg?width=768&quality=85  768w,
                                          /media/2632148/hero_2134_fp517539.jpg?width=960&quality=85  960w,
                                          /media/2632148/hero_2134_fp517539.jpg?width=1350&quality=85 1350w,
                                          /media/2632148/hero_2134_fp517539.jpg?width=1920&quality=85 1920w"
                                  alt="Apple Zorlu Centre, Istanbul"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - Istanbul, Turkey</span>

                                <span class="fp-content-header__title">Apple Zorlu Centre, Istanbul</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7A7F7F;"></div>
                    <a href="/projects/citycenterdc/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637478/hero_1489_fp631812.jpg?width=768&quality=85  768w,
                                          /media/2637478/hero_1489_fp631812.jpg?width=960&quality=85  960w,
                                          /media/2637478/hero_1489_fp631812.jpg?width=1350&quality=85 1350w,
                                          /media/2637478/hero_1489_fp631812.jpg?width=1920&quality=85 1920w"
                                  alt="CityCenterDC"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - Washington DC, USA</span>

                                <span class="fp-content-header__title">CityCenterDC</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #868A8B;"></div>
                    <a href="/projects/edward-p-evans-hall-yale-school-of-management/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632392/hero_1544_fp493997.jpg?width=768&quality=85  768w,
                                          /media/2632392/hero_1544_fp493997.jpg?width=960&quality=85  960w,
                                          /media/2632392/hero_1544_fp493997.jpg?width=1350&quality=85 1350w,
                                          /media/2632392/hero_1544_fp493997.jpg?width=1920&quality=85 1920w"
                                  alt="Edward P. Evans Hall, Yale School of Management"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - New Haven, USA</span>

                                <span class="fp-content-header__title">Edward P. Evans Hall, Yale School of Management</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #91877A;"></div>
                    <a href="/projects/imperial-war-museum/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633483/hero_1893_fp515044.jpg?width=768&quality=85  768w,
                                          /media/2633483/hero_1893_fp515044.jpg?width=960&quality=85  960w,
                                          /media/2633483/hero_1893_fp515044.jpg?width=1350&quality=85 1350w,
                                          /media/2633483/hero_1893_fp515044.jpg?width=1920&quality=85 1920w"
                                  alt="Imperial War Museum"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - London, UK</span>

                                <span class="fp-content-header__title">Imperial War Museum</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #757D7D;"></div>
                    <a href="/projects/la-garenne-colombes/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636262/hero_1523_fp551019.jpg?width=768&quality=85  768w,
                                          /media/2636262/hero_1523_fp551019.jpg?width=960&quality=85  960w,
                                          /media/2636262/hero_1523_fp551019.jpg?width=1350&quality=85 1350w,
                                          /media/2636262/hero_1523_fp551019.jpg?width=1920&quality=85 1920w"
                                  alt="La Garenne-Colombes"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - Paris, France</span>

                                <span class="fp-content-header__title">La Garenne-Colombes</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8F948E;"></div>
                    <a href="/projects/masdar-city/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632654/hero_1515_fp433650.jpg?width=768&quality=85  768w,
                                          /media/2632654/hero_1515_fp433650.jpg?width=960&quality=85  960w,
                                          /media/2632654/hero_1515_fp433650.jpg?width=1350&quality=85 1350w,
                                          /media/2632654/hero_1515_fp433650.jpg?width=1920&quality=85 1920w"
                                  alt="Masdar City"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - Abu Dhabi, UAE</span>

                                <span class="fp-content-header__title">Masdar City</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #768285;"></div>
                    <a href="/projects/nazarbayev-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632677/hero_1983_fp514483.jpg?width=768&quality=85  768w,
                                          /media/2632677/hero_1983_fp514483.jpg?width=960&quality=85  960w,
                                          /media/2632677/hero_1983_fp514483.jpg?width=1350&quality=85 1350w,
                                          /media/2632677/hero_1983_fp514483.jpg?width=1920&quality=85 1920w"
                                  alt="Nazarbayev Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - Astana, Kazakhstan</span>

                                <span class="fp-content-header__title">Nazarbayev Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #282D33;"></div>
                    <a href="/projects/spaceport-america/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632901/hero_1613_fp441435.jpg?width=768&quality=85  768w,
                                          /media/2632901/hero_1613_fp441435.jpg?width=960&quality=85  960w,
                                          /media/2632901/hero_1613_fp441435.jpg?width=1350&quality=85 1350w,
                                          /media/2632901/hero_1613_fp441435.jpg?width=1920&quality=85 1920w"
                                  alt="Spaceport America"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - New Mexico, USA</span>

                                <span class="fp-content-header__title">Spaceport America</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7D6854;"></div>
                    <a href="/projects/world-trade-center-souk/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636253/hero_1431_fp442241.jpg?width=768&quality=85  768w,
                                          /media/2636253/hero_1431_fp442241.jpg?width=960&quality=85  960w,
                                          /media/2636253/hero_1431_fp442241.jpg?width=1350&quality=85 1350w,
                                          /media/2636253/hero_1431_fp442241.jpg?width=1920&quality=85 1920w"
                                  alt="World Trade Center Souk"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - Abu Dhabi, UAE</span>

                                <span class="fp-content-header__title">World Trade Center Souk</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #858482;"></div>
                    <a href="/projects/yacht-club-de-monaco/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634230/hero_1529_fp509622.jpg?width=768&quality=85  768w,
                                          /media/2634230/hero_1529_fp509622.jpg?width=960&quality=85  960w,
                                          /media/2634230/hero_1529_fp509622.jpg?width=1350&quality=85 1350w,
                                          /media/2634230/hero_1529_fp509622.jpg?width=1920&quality=85 1920w"
                                  alt="Yacht Club de Monaco"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2014 - Monte Carlo, Monaco</span>

                                <span class="fp-content-header__title">Yacht Club de Monaco</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #817D64;"></div>
                    <a href="/projects/campus-biometropolis/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632174/hero_2172_fp516269.jpg?width=768&quality=85  768w,
                                          /media/2632174/hero_2172_fp516269.jpg?width=960&quality=85  960w,
                                          /media/2632174/hero_2172_fp516269.jpg?width=1350&quality=85 1350w,
                                          /media/2632174/hero_2172_fp516269.jpg?width=1920&quality=85 1920w"
                                  alt="Campus Biometr&#243;polis"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - Mexico City, Mexico</span>

                                <span class="fp-content-header__title">Campus Biometr&#243;polis</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #73777A;"></div>
                    <a href="/projects/cathay-pacific-lounges-hong-kong-international-airport/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632186/hero_1663_fp476506.jpg?width=768&quality=85  768w,
                                          /media/2632186/hero_1663_fp476506.jpg?width=960&quality=85  960w,
                                          /media/2632186/hero_1663_fp476506.jpg?width=1350&quality=85 1350w,
                                          /media/2632186/hero_1663_fp476506.jpg?width=1920&quality=85 1920w"
                                  alt="Cathay Pacific Lounges, Hong Kong International Airport"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - Hong Kong, China</span>

                                <span class="fp-content-header__title">Cathay Pacific Lounges, Hong Kong International Airport</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8AA1AE;"></div>
                    <a href="/projects/kai-tak-cruise-terminal/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632665/hero_1843_fp533616.jpg?width=768&quality=85  768w,
                                          /media/2632665/hero_1843_fp533616.jpg?width=960&quality=85  960w,
                                          /media/2632665/hero_1843_fp533616.jpg?width=1350&quality=85 1350w,
                                          /media/2632665/hero_1843_fp533616.jpg?width=1920&quality=85 1920w"
                                  alt="Kai Tak Cruise Terminal"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - Hong Kong, China</span>

                                <span class="fp-content-header__title">Kai Tak Cruise Terminal</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #73744E;"></div>
                    <a href="/projects/lenbachhaus/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632635/hero_1198_fp480534.jpg?width=768&quality=85  768w,
                                          /media/2632635/hero_1198_fp480534.jpg?width=960&quality=85  960w,
                                          /media/2632635/hero_1198_fp480534.jpg?width=1350&quality=85 1350w,
                                          /media/2632635/hero_1198_fp480534.jpg?width=1920&quality=85 1920w"
                                  alt="Lenbachhaus"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - Munich, Germany</span>

                                <span class="fp-content-header__title">Lenbachhaus</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #898B8C;"></div>
                    <a href="/projects/marseille-vieux-port/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632675/hero_1980_fp472369.jpg?width=768&quality=85  768w,
                                          /media/2632675/hero_1980_fp472369.jpg?width=960&quality=85  960w,
                                          /media/2632675/hero_1980_fp472369.jpg?width=1350&quality=85 1350w,
                                          /media/2632675/hero_1980_fp472369.jpg?width=1920&quality=85 1920w"
                                  alt="Marseille Vieux Port"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - Marseille, France</span>

                                <span class="fp-content-header__title">Marseille Vieux Port</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #766C66;"></div>
                    <a href="/projects/me-london/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632639/hero_1301_fp470914.jpg?width=768&quality=85  768w,
                                          /media/2632639/hero_1301_fp470914.jpg?width=960&quality=85  960w,
                                          /media/2632639/hero_1301_fp470914.jpg?width=1350&quality=85 1350w,
                                          /media/2632639/hero_1301_fp470914.jpg?width=1920&quality=85 1920w"
                                  alt="ME London"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - London, UK</span>

                                <span class="fp-content-header__title">ME London</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8C8584;"></div>
                    <a href="/projects/skycycle/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632894/hero_p010696_fp591763.jpg?width=768&quality=85  768w,
                                          /media/2632894/hero_p010696_fp591763.jpg?width=960&quality=85  960w,
                                          /media/2632894/hero_p010696_fp591763.jpg?width=1350&quality=85 1350w,
                                          /media/2632894/hero_p010696_fp591763.jpg?width=1920&quality=85 1920w"
                                  alt="SkyCycle"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - London, UK</span>

                                <span class="fp-content-header__title">SkyCycle</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #E0E0E1;"></div>
                    <a href="/projects/teso-molteni-c/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636138/hero_1371_fp474887.jpg?width=768&quality=85  768w,
                                          /media/2636138/hero_1371_fp474887.jpg?width=960&quality=85  960w,
                                          /media/2636138/hero_1371_fp474887.jpg?width=1350&quality=85 1350w,
                                          /media/2636138/hero_1371_fp474887.jpg?width=1920&quality=85 1920w"
                                  alt="Teso, Molteni&amp;C "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - </span>

                                <span class="fp-content-header__title">Teso, Molteni&amp;C </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9CA3A5;"></div>
                    <a href="/projects/the-bow/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632924/hero_1417_fp479243.jpg?width=768&quality=85  768w,
                                          /media/2632924/hero_1417_fp479243.jpg?width=960&quality=85  960w,
                                          /media/2632924/hero_1417_fp479243.jpg?width=1350&quality=85 1350w,
                                          /media/2632924/hero_1417_fp479243.jpg?width=1920&quality=85 1920w"
                                  alt="The Bow"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - Calgary, Canada</span>

                                <span class="fp-content-header__title">The Bow</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A0A8A9;"></div>
                    <a href="/projects/the-sse-hydro/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633178/hero_1298_fp486663.jpg?width=768&quality=85  768w,
                                          /media/2633178/hero_1298_fp486663.jpg?width=960&quality=85  960w,
                                          /media/2633178/hero_1298_fp486663.jpg?width=1350&quality=85 1350w,
                                          /media/2633178/hero_1298_fp486663.jpg?width=1920&quality=85 1920w"
                                  alt="The SSE Hydro"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - Glasgow, UK</span>

                                <span class="fp-content-header__title">The SSE Hydro</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #707E6E;"></div>
                    <a href="/projects/turin-university-campus-luigi-einaudi/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633247/hero_1212_fp479899.jpg?width=768&quality=85  768w,
                                          /media/2633247/hero_1212_fp479899.jpg?width=960&quality=85  960w,
                                          /media/2633247/hero_1212_fp479899.jpg?width=1350&quality=85 1350w,
                                          /media/2633247/hero_1212_fp479899.jpg?width=1920&quality=85 1920w"
                                  alt="Turin University, Campus Luigi Einaudi"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2013 - Turin, Italy</span>

                                <span class="fp-content-header__title">Turin University, Campus Luigi Einaudi</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #666963;"></div>
                    <a href="/projects/faena-aleph/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632862/hero_1337_fp470627.jpg?width=768&quality=85  768w,
                                          /media/2632862/hero_1337_fp470627.jpg?width=960&quality=85  960w,
                                          /media/2632862/hero_1337_fp470627.jpg?width=1350&quality=85 1350w,
                                          /media/2632862/hero_1337_fp470627.jpg?width=1920&quality=85 1920w"
                                  alt="Faena Aleph"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2012 - Buenos Aires, Argentina</span>

                                <span class="fp-content-header__title">Faena Aleph</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #F6F5F4;"></div>
                    <a href="/projects/flo-lumina/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636297/flo_lumina.jpg?width=768&quality=85  768w,
                                          /media/2636297/flo_lumina.jpg?width=960&quality=85  960w,
                                          /media/2636297/flo_lumina.jpg?width=1350&quality=85 1350w,
                                          /media/2636297/flo_lumina.jpg?width=1920&quality=85 1920w"
                                  alt="FLO, Lumina"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2012 - </span>

                                <span class="fp-content-header__title">FLO, Lumina</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #2A1D1B;"></div>
                    <a href="/projects/foster-520-walter-knoll/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633214/2077_fp466307.jpg?width=768&quality=85  768w,
                                          /media/2633214/2077_fp466307.jpg?width=960&quality=85  960w,
                                          /media/2633214/2077_fp466307.jpg?width=1350&quality=85 1350w,
                                          /media/2633214/2077_fp466307.jpg?width=1920&quality=85 1920w"
                                  alt="Foster 520, Walter Knoll"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2012 - </span>

                                <span class="fp-content-header__title">Foster 520, Walter Knoll</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4D5B5E;"></div>
                    <a href="/projects/lunar-habitation/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632872/hero_p07337_fp470839.jpg?width=768&quality=85  768w,
                                          /media/2632872/hero_p07337_fp470839.jpg?width=960&quality=85  960w,
                                          /media/2632872/hero_p07337_fp470839.jpg?width=1350&quality=85 1350w,
                                          /media/2632872/hero_p07337_fp470839.jpg?width=1920&quality=85 1920w"
                                  alt="Lunar Habitation "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2012 - Space</span>

                                <span class="fp-content-header__title">Lunar Habitation </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #939FB0;"></div>
                    <a href="/projects/modular-skylights-velux/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638809/hero_1574_fp687585.jpg?width=768&quality=85  768w,
                                          /media/2638809/hero_1574_fp687585.jpg?width=960&quality=85  960w,
                                          /media/2638809/hero_1574_fp687585.jpg?width=1350&quality=85 1350w,
                                          /media/2638809/hero_1574_fp687585.jpg?width=1920&quality=85 1920w"
                                  alt="Modular Skylights, Velux"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2012 - </span>

                                <span class="fp-content-header__title">Modular Skylights, Velux</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #869190;"></div>
                    <a href="/projects/providence-peak/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632886/hero_1554_fp496247.jpg?width=768&quality=85  768w,
                                          /media/2632886/hero_1554_fp496247.jpg?width=960&quality=85  960w,
                                          /media/2632886/hero_1554_fp496247.jpg?width=1350&quality=85 1350w,
                                          /media/2632886/hero_1554_fp496247.jpg?width=1920&quality=85 1920w"
                                  alt="Providence Peak"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2012 - Tai Po, China</span>

                                <span class="fp-content-header__title">Providence Peak</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #81786E;"></div>
                    <a href="/projects/queen-alia-international-airport/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636102/queen_alia_international_airport.jpg?width=768&quality=85  768w,
                                          /media/2636102/queen_alia_international_airport.jpg?width=960&quality=85  960w,
                                          /media/2636102/queen_alia_international_airport.jpg?width=1350&quality=85 1350w,
                                          /media/2636102/queen_alia_international_airport.jpg?width=1920&quality=85 1920w"
                                  alt="Queen Alia International Airport"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2012 - Amman, Jordan</span>

                                <span class="fp-content-header__title">Queen Alia International Airport</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #637068;"></div>
                    <a href="/projects/west-kowloon-cultural-district/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634220/hero_1823_fp436599.jpg?width=768&quality=85  768w,
                                          /media/2634220/hero_1823_fp436599.jpg?width=960&quality=85  960w,
                                          /media/2634220/hero_1823_fp436599.jpg?width=1350&quality=85 1350w,
                                          /media/2634220/hero_1823_fp436599.jpg?width=1920&quality=85 1920w"
                                  alt="West Kowloon Cultural District"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2012 - Kowloon, China</span>

                                <span class="fp-content-header__title">West Kowloon Cultural District</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #678181;"></div>
                    <a href="/projects/bmce-branches/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632170/hero_1642_fp424277.jpg?width=768&quality=85  768w,
                                          /media/2632170/hero_1642_fp424277.jpg?width=960&quality=85  960w,
                                          /media/2632170/hero_1642_fp424277.jpg?width=1350&quality=85 1350w,
                                          /media/2632170/hero_1642_fp424277.jpg?width=1920&quality=85 1920w"
                                  alt="BMCE Branches"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2011 - Casablanca, Fez, Rabat, Marrakech and Eljadida, Morocco</span>

                                <span class="fp-content-header__title">BMCE Branches</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #504139;"></div>
                    <a href="/projects/cathay-pacific-first-class-cabin/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632183/hero_2003_fp483258.jpg?width=768&quality=85  768w,
                                          /media/2632183/hero_2003_fp483258.jpg?width=960&quality=85  960w,
                                          /media/2632183/hero_2003_fp483258.jpg?width=1350&quality=85 1350w,
                                          /media/2632183/hero_2003_fp483258.jpg?width=1920&quality=85 1920w"
                                  alt="Cathay Pacific First Class Cabin"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2011 - </span>

                                <span class="fp-content-header__title">Cathay Pacific First Class Cabin</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #47708D;"></div>
                    <a href="/projects/index-tower/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633568/hero_1309_fp418243.jpg?width=768&quality=85  768w,
                                          /media/2633568/hero_1309_fp418243.jpg?width=960&quality=85  960w,
                                          /media/2633568/hero_1309_fp418243.jpg?width=1350&quality=85 1350w,
                                          /media/2633568/hero_1309_fp418243.jpg?width=1920&quality=85 1920w"
                                  alt="Index Tower"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2011 - Dubai, UAE</span>

                                <span class="fp-content-header__title">Index Tower</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6D7275;"></div>
                    <a href="/projects/jameson-house/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633859/hero_1289_fp442912.jpg?width=768&quality=85  768w,
                                          /media/2633859/hero_1289_fp442912.jpg?width=960&quality=85  960w,
                                          /media/2633859/hero_1289_fp442912.jpg?width=1350&quality=85 1350w,
                                          /media/2633859/hero_1289_fp442912.jpg?width=1920&quality=85 1920w"
                                  alt="Jameson House"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2011 - Vancouver, Canada</span>

                                <span class="fp-content-header__title">Jameson House</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #999894;"></div>
                    <a href="/projects/mclaren-production-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632663/hero_1829_fp440319.jpg?width=768&quality=85  768w,
                                          /media/2632663/hero_1829_fp440319.jpg?width=960&quality=85  960w,
                                          /media/2632663/hero_1829_fp440319.jpg?width=1350&quality=85 1350w,
                                          /media/2632663/hero_1829_fp440319.jpg?width=1920&quality=85 1920w"
                                  alt="McLaren Production Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2011 - Woking, UK</span>

                                <span class="fp-content-header__title">McLaren Production Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #85949A;"></div>
                    <a href="/projects/thames-hub/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639295/hero_2033_fp502666.jpg?width=768&quality=85  768w,
                                          /media/2639295/hero_2033_fp502666.jpg?width=960&quality=85  960w,
                                          /media/2639295/hero_2033_fp502666.jpg?width=1350&quality=85 1350w,
                                          /media/2639295/hero_2033_fp502666.jpg?width=1920&quality=85 1920w"
                                  alt="Thames Hub"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2011 - Isle of Grain, UK</span>

                                <span class="fp-content-header__title">Thames Hub</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #606359;"></div>
                    <a href="/projects/the-troika/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633181/hero_1307_fp443019.jpg?width=768&quality=85  768w,
                                          /media/2633181/hero_1307_fp443019.jpg?width=960&quality=85  960w,
                                          /media/2633181/hero_1307_fp443019.jpg?width=1350&quality=85 1350w,
                                          /media/2633181/hero_1307_fp443019.jpg?width=1920&quality=85 1920w"
                                  alt="The Troika"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2011 - Kuala Lumpur, Malaysia</span>

                                <span class="fp-content-header__title">The Troika</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7D8685;"></div>
                    <a href="/projects/florence-high-speed-railway-station/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634187/hero_1194_fp132481.jpg?width=768&quality=85  768w,
                                          /media/2634187/hero_1194_fp132481.jpg?width=960&quality=85  960w,
                                          /media/2634187/hero_1194_fp132481.jpg?width=1350&quality=85 1350w,
                                          /media/2634187/hero_1194_fp132481.jpg?width=1920&quality=85 1920w"
                                  alt="Florence High Speed Railway Station"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - Florence, Italy</span>

                                <span class="fp-content-header__title">Florence High Speed Railway Station</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #66625D;"></div>
                    <a href="/projects/annette-strauss-square/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636256/hero_1428_fp416308.jpg?width=768&quality=85  768w,
                                          /media/2636256/hero_1428_fp416308.jpg?width=960&quality=85  960w,
                                          /media/2636256/hero_1428_fp416308.jpg?width=1350&quality=85 1350w,
                                          /media/2636256/hero_1428_fp416308.jpg?width=1920&quality=85 1920w"
                                  alt="Annette Strauss Square"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - Dallas, USA</span>

                                <span class="fp-content-header__title">Annette Strauss Square</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #9C9998;"></div>
                    <a href="/projects/arc-molteni-c/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636157/hero_1371_fp408815.jpg?width=768&quality=85  768w,
                                          /media/2636157/hero_1371_fp408815.jpg?width=960&quality=85  960w,
                                          /media/2636157/hero_1371_fp408815.jpg?width=1350&quality=85 1350w,
                                          /media/2636157/hero_1371_fp408815.jpg?width=1920&quality=85 1920w"
                                  alt="Arc, Molteni&amp;C"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - </span>

                                <span class="fp-content-header__title">Arc, Molteni&amp;C</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #C1C1C1;"></div>
                    <a href="/projects/dash-steelcase-led-task-light/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636149/hero_dash_task_light.jpg?width=768&quality=85  768w,
                                          /media/2636149/hero_dash_task_light.jpg?width=960&quality=85  960w,
                                          /media/2636149/hero_dash_task_light.jpg?width=1350&quality=85 1350w,
                                          /media/2636149/hero_dash_task_light.jpg?width=1920&quality=85 1920w"
                                  alt="Dash, Steelcase LED task light"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - </span>

                                <span class="fp-content-header__title">Dash, Steelcase LED task light</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9A8B7B;"></div>
                    <a href="/projects/faustino-winery/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632375/hero_1327_fp438543.jpg?width=768&quality=85  768w,
                                          /media/2632375/hero_1327_fp438543.jpg?width=960&quality=85  960w,
                                          /media/2632375/hero_1327_fp438543.jpg?width=1350&quality=85 1350w,
                                          /media/2632375/hero_1327_fp438543.jpg?width=1920&quality=85 1920w"
                                  alt="Faustino Winery"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - Gumiel de Iz&#225;n, Spain</span>

                                <span class="fp-content-header__title">Faustino Winery</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8E8B87;"></div>
                    <a href="/projects/fortaleza-hall-and-the-commons/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632389/hero_1450_fp400857.jpg?width=768&quality=85  768w,
                                          /media/2632389/hero_1450_fp400857.jpg?width=960&quality=85  960w,
                                          /media/2632389/hero_1450_fp400857.jpg?width=1350&quality=85 1350w,
                                          /media/2632389/hero_1450_fp400857.jpg?width=1920&quality=85 1920w"
                                  alt="Fortaleza Hall and the Commons"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - Racine, USA</span>

                                <span class="fp-content-header__title">Fortaleza Hall and the Commons</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8A8C90;"></div>
                    <a href="/projects/khan-shatyr-entertainment-center/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632869/hero_1438_fp405466.jpg?width=768&quality=85  768w,
                                          /media/2632869/hero_1438_fp405466.jpg?width=960&quality=85  960w,
                                          /media/2632869/hero_1438_fp405466.jpg?width=1350&quality=85 1350w,
                                          /media/2632869/hero_1438_fp405466.jpg?width=1920&quality=85 1920w"
                                  alt="Khan Shatyr Entertainment Center"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - Astana, Kazakhstan</span>

                                <span class="fp-content-header__title">Khan Shatyr Entertainment Center</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #718C98;"></div>
                    <a href="/projects/museum-of-fine-arts/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632620/hero_1049_fp455129.jpg?width=768&quality=85  768w,
                                          /media/2632620/hero_1049_fp455129.jpg?width=960&quality=85  960w,
                                          /media/2632620/hero_1049_fp455129.jpg?width=1350&quality=85 1350w,
                                          /media/2632620/hero_1049_fp455129.jpg?width=1920&quality=85 1920w"
                                  alt="Museum of Fine Arts"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - Boston, USA</span>

                                <span class="fp-content-header__title">Museum of Fine Arts</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #50505E;"></div>
                    <a href="/projects/netjets/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632659/hero_1576_fp337155.jpg?width=768&quality=85  768w,
                                          /media/2632659/hero_1576_fp337155.jpg?width=960&quality=85  960w,
                                          /media/2632659/hero_1576_fp337155.jpg?width=1350&quality=85 1350w,
                                          /media/2632659/hero_1576_fp337155.jpg?width=1920&quality=85 1920w"
                                  alt="NetJets"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - </span>

                                <span class="fp-content-header__title">NetJets</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #918892;"></div>
                    <a href="/projects/sperone-westwater/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632903/hero_1680_fp409598.jpg?width=768&quality=85  768w,
                                          /media/2632903/hero_1680_fp409598.jpg?width=960&quality=85  960w,
                                          /media/2632903/hero_1680_fp409598.jpg?width=1350&quality=85 1350w,
                                          /media/2632903/hero_1680_fp409598.jpg?width=1920&quality=85 1920w"
                                  alt="Sperone Westwater"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - New York, USA</span>

                                <span class="fp-content-header__title">Sperone Westwater</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #58779F;"></div>
                    <a href="/projects/the-walbrook/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633180/hero_1014_fp449788.jpg?width=768&quality=85  768w,
                                          /media/2633180/hero_1014_fp449788.jpg?width=960&quality=85  960w,
                                          /media/2633180/hero_1014_fp449788.jpg?width=1350&quality=85 1350w,
                                          /media/2633180/hero_1014_fp449788.jpg?width=1920&quality=85 1920w"
                                  alt="The Walbrook"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - London, UK</span>

                                <span class="fp-content-header__title">The Walbrook</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #C0C1C3;"></div>
                    <a href="/projects/thea-poltrona-frau/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634047/img2_1086_fp394185.jpg?width=768&quality=85  768w,
                                          /media/2634047/img2_1086_fp394185.jpg?width=960&quality=85  960w,
                                          /media/2634047/img2_1086_fp394185.jpg?width=1350&quality=85 1350w,
                                          /media/2634047/img2_1086_fp394185.jpg?width=1920&quality=85 1920w"
                                  alt="Thea, Poltrona Frau"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - </span>

                                <span class="fp-content-header__title">Thea, Poltrona Frau</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #93A7A5;"></div>
                    <a href="/projects/uae-pavilion-shanghai-expo-2010/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633252/hero_p05859_fp401081.jpg?width=768&quality=85  768w,
                                          /media/2633252/hero_p05859_fp401081.jpg?width=960&quality=85  960w,
                                          /media/2633252/hero_p05859_fp401081.jpg?width=1350&quality=85 1350w,
                                          /media/2633252/hero_p05859_fp401081.jpg?width=1920&quality=85 1920w"
                                  alt="UAE Pavilion Shanghai Expo 2010"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2010 - Shanghai, China</span>

                                <span class="fp-content-header__title">UAE Pavilion Shanghai Expo 2010</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #275581;"></div>
                    <a href="/projects/capella-resort/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632178/hero_1265_fp367090.jpg?width=768&quality=85  768w,
                                          /media/2632178/hero_1265_fp367090.jpg?width=960&quality=85  960w,
                                          /media/2632178/hero_1265_fp367090.jpg?width=1350&quality=85 1350w,
                                          /media/2632178/hero_1265_fp367090.jpg?width=1920&quality=85 1920w"
                                  alt="Capella Resort"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2009 - Sentosa, Singapore</span>

                                <span class="fp-content-header__title">Capella Resort</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8B8F90;"></div>
                    <a href="/projects/circle-bath-hospital/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632206/hero_1442_fp375076.jpg?width=768&quality=85  768w,
                                          /media/2632206/hero_1442_fp375076.jpg?width=960&quality=85  960w,
                                          /media/2632206/hero_1442_fp375076.jpg?width=1350&quality=85 1350w,
                                          /media/2632206/hero_1442_fp375076.jpg?width=1920&quality=85 1920w"
                                  alt="Circle Bath Hospital"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2009 - Bath, UK</span>

                                <span class="fp-content-header__title">Circle Bath Hospital</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #666D71;"></div>
                    <a href="/projects/panthalassa-sailing-yacht/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634204/hero_1532_fp436100.jpg?width=768&quality=85  768w,
                                          /media/2634204/hero_1532_fp436100.jpg?width=960&quality=85  960w,
                                          /media/2634204/hero_1532_fp436100.jpg?width=1350&quality=85 1350w,
                                          /media/2634204/hero_1532_fp436100.jpg?width=1920&quality=85 1920w"
                                  alt="Panthalassa, sailing yacht"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2009 - </span>

                                <span class="fp-content-header__title">Panthalassa, sailing yacht</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6C7379;"></div>
                    <a href="/projects/pwc-more-london/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632127/hero_1460_fp367637.jpg?width=768&quality=85  768w,
                                          /media/2632127/hero_1460_fp367637.jpg?width=960&quality=85  960w,
                                          /media/2632127/hero_1460_fp367637.jpg?width=1350&quality=85 1350w,
                                          /media/2632127/hero_1460_fp367637.jpg?width=1920&quality=85 1920w"
                                  alt="PwC, More London"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2009 - London, UK</span>

                                <span class="fp-content-header__title">PwC, More London</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="2732">
                    <div class="fp-dominant-colour" style="background-color: #747E81;"></div>
                    <a href="/projects/the-yachtplus-fleet/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634043/img3_1362_fp355089.jpg?width=768&quality=85  768w,
                                          /media/2634043/img3_1362_fp355089.jpg?width=960&quality=85  960w,
                                          /media/2634043/img3_1362_fp355089.jpg?width=1350&quality=85 1350w,
                                          /media/2634043/img3_1362_fp355089.jpg?width=1920&quality=85 1920w"
                                  alt="The YachtPlus Fleet "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2009 - </span>

                                <span class="fp-content-header__title">The YachtPlus Fleet </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #728DA7;"></div>
                    <a href="/projects/torre-cepsa/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633206/hero_1177_fp427355.jpg?width=768&quality=85  768w,
                                          /media/2633206/hero_1177_fp427355.jpg?width=960&quality=85  960w,
                                          /media/2633206/hero_1177_fp427355.jpg?width=1350&quality=85 1350w,
                                          /media/2633206/hero_1177_fp427355.jpg?width=1920&quality=85 1920w"
                                  alt="Torre Cepsa"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2009 - Madrid, Spain</span>

                                <span class="fp-content-header__title">Torre Cepsa</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6D636D;"></div>
                    <a href="/projects/winspear-opera-house/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632627/hero_1173_fp378098.jpg?width=768&quality=85  768w,
                                          /media/2632627/hero_1173_fp378098.jpg?width=960&quality=85  960w,
                                          /media/2632627/hero_1173_fp378098.jpg?width=1350&quality=85 1350w,
                                          /media/2632627/hero_1173_fp378098.jpg?width=1920&quality=85 1920w"
                                  alt="Winspear Opera House"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2009 - Dallas, USA</span>

                                <span class="fp-content-header__title">Winspear Opera House</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #988C77;"></div>
                    <a href="/projects/beijing-capital-international-airport/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632160/hero_1235_fp273486.jpg?width=768&quality=85  768w,
                                          /media/2632160/hero_1235_fp273486.jpg?width=960&quality=85  960w,
                                          /media/2632160/hero_1235_fp273486.jpg?width=1350&quality=85 1350w,
                                          /media/2632160/hero_1235_fp273486.jpg?width=1920&quality=85 1920w"
                                  alt="Beijing Capital International Airport"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Beijing, China</span>

                                <span class="fp-content-header__title">Beijing Capital International Airport</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #626E7E;"></div>
                    <a href="/projects/california-state-university-channel-islands/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632172/hero_1081_fp276732.jpg?width=768&quality=85  768w,
                                          /media/2632172/hero_1081_fp276732.jpg?width=960&quality=85  960w,
                                          /media/2632172/hero_1081_fp276732.jpg?width=1350&quality=85 1350w,
                                          /media/2632172/hero_1081_fp276732.jpg?width=1920&quality=85 1920w"
                                  alt="California State University Channel Islands"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Camarrillo, USA</span>

                                <span class="fp-content-header__title">California State University Channel Islands</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6D6F6E;"></div>
                    <a href="/projects/chesham-place/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632203/hero_1224_fp344868.jpg?width=768&quality=85  768w,
                                          /media/2632203/hero_1224_fp344868.jpg?width=960&quality=85  960w,
                                          /media/2632203/hero_1224_fp344868.jpg?width=1350&quality=85 1350w,
                                          /media/2632203/hero_1224_fp344868.jpg?width=1920&quality=85 1920w"
                                  alt="Chesham Place"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - London, UK</span>

                                <span class="fp-content-header__title">Chesham Place</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #979E98;"></div>
                    <a href="/projects/corby-business-academy/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632419/hero_1311_fp312247.jpg?width=768&quality=85  768w,
                                          /media/2632419/hero_1311_fp312247.jpg?width=960&quality=85  960w,
                                          /media/2632419/hero_1311_fp312247.jpg?width=1350&quality=85 1350w,
                                          /media/2632419/hero_1311_fp312247.jpg?width=1920&quality=85 1920w"
                                  alt="Corby Business Academy"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Corby, UK</span>

                                <span class="fp-content-header__title">Corby Business Academy</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #AC9B87;"></div>
                    <a href="/projects/dharavi-masterplan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633087/hero_1666_fp281519.jpg?width=768&quality=85  768w,
                                          /media/2633087/hero_1666_fp281519.jpg?width=960&quality=85  960w,
                                          /media/2633087/hero_1666_fp281519.jpg?width=1350&quality=85 1350w,
                                          /media/2633087/hero_1666_fp281519.jpg?width=1920&quality=85 1920w"
                                  alt="Dharavi masterplan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Mumbai, India</span>

                                <span class="fp-content-header__title">Dharavi masterplan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #ADA189;"></div>
                    <a href="/projects/elephant-house-copenhagen-zoo/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632372/hero_1195_fp316856.jpg?width=768&quality=85  768w,
                                          /media/2632372/hero_1195_fp316856.jpg?width=960&quality=85  960w,
                                          /media/2632372/hero_1195_fp316856.jpg?width=1350&quality=85 1350w,
                                          /media/2632372/hero_1195_fp316856.jpg?width=1920&quality=85 1920w"
                                  alt="Elephant House, Copenhagen Zoo"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Copenhagen, Denmark</span>

                                <span class="fp-content-header__title">Elephant House, Copenhagen Zoo</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #71A2C0;"></div>
                    <a href="/projects/ey-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632861/hero_1218_fp370103.jpg?width=768&quality=85  768w,
                                          /media/2632861/hero_1218_fp370103.jpg?width=960&quality=85  960w,
                                          /media/2632861/hero_1218_fp370103.jpg?width=1350&quality=85 1350w,
                                          /media/2632861/hero_1218_fp370103.jpg?width=1920&quality=85 1920w"
                                  alt="EY Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Amsterdam, The Netherlands</span>

                                <span class="fp-content-header__title">EY Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #B2B3B6;"></div>
                    <a href="/projects/foster-510-walter-knoll/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2635941/hero_wk-foster_510-0002-h.jpg?width=768&quality=85  768w,
                                          /media/2635941/hero_wk-foster_510-0002-h.jpg?width=960&quality=85  960w,
                                          /media/2635941/hero_wk-foster_510-0002-h.jpg?width=1350&quality=85 1350w,
                                          /media/2635941/hero_wk-foster_510-0002-h.jpg?width=1920&quality=85 1920w"
                                  alt="Foster 510, Walter Knoll"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - </span>

                                <span class="fp-content-header__title">Foster 510, Walter Knoll</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #88817D;"></div>
                    <a href="/projects/ivorypress/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633587/hero_1627_fp350848.jpg?width=768&quality=85  768w,
                                          /media/2633587/hero_1627_fp350848.jpg?width=960&quality=85  960w,
                                          /media/2633587/hero_1627_fp350848.jpg?width=1350&quality=85 1350w,
                                          /media/2633587/hero_1627_fp350848.jpg?width=1920&quality=85 1920w"
                                  alt="Ivorypress"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Madrid, Spain</span>

                                <span class="fp-content-header__title">Ivorypress</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7A7770;"></div>
                    <a href="/projects/langley-academy/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632870/hero_1324_fp353165.jpg?width=768&quality=85  768w,
                                          /media/2632870/hero_1324_fp353165.jpg?width=960&quality=85  960w,
                                          /media/2632870/hero_1324_fp353165.jpg?width=1350&quality=85 1350w,
                                          /media/2632870/hero_1324_fp353165.jpg?width=1920&quality=85 1920w"
                                  alt="Langley Academy"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Slough, UK</span>

                                <span class="fp-content-header__title">Langley Academy</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9EA1A0;"></div>
                    <a href="/projects/residence-bel-air/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632386/hero_1399_fp442541.jpg?width=768&quality=85  768w,
                                          /media/2632386/hero_1399_fp442541.jpg?width=960&quality=85  960w,
                                          /media/2632386/hero_1399_fp442541.jpg?width=1350&quality=85 1350w,
                                          /media/2632386/hero_1399_fp442541.jpg?width=1920&quality=85 1920w"
                                  alt="Residence Bel-air"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Hong Kong, China</span>

                                <span class="fp-content-header__title">Residence Bel-air</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #97815D;"></div>
                    <a href="/projects/the-dolder-grand/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632365/hero_1171_fp272923.jpg?width=768&quality=85  768w,
                                          /media/2632365/hero_1171_fp272923.jpg?width=960&quality=85  960w,
                                          /media/2632365/hero_1171_fp272923.jpg?width=1350&quality=85 1350w,
                                          /media/2632365/hero_1171_fp272923.jpg?width=1920&quality=85 1920w"
                                  alt="The Dolder Grand"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Z&#252;rich, Switzerland</span>

                                <span class="fp-content-header__title">The Dolder Grand</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #879496;"></div>
                    <a href="/projects/zenith-de-st-etienne/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634233/hero_1299_fp329602.jpg?width=768&quality=85  768w,
                                          /media/2634233/hero_1299_fp329602.jpg?width=960&quality=85  960w,
                                          /media/2634233/hero_1299_fp329602.jpg?width=1350&quality=85 1350w,
                                          /media/2634233/hero_1299_fp329602.jpg?width=1920&quality=85 1920w"
                                  alt="Z&#233;nith de St Etienne"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2008 - Saint-&#201;tienne, France</span>

                                <span class="fp-content-header__title">Z&#233;nith de St Etienne</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #848F6E;"></div>
                    <a href="/projects/duisburg-masterplan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632421/hero_1443_fp154974.jpg?width=768&quality=85  768w,
                                          /media/2632421/hero_1443_fp154974.jpg?width=960&quality=85  960w,
                                          /media/2632421/hero_1443_fp154974.jpg?width=1350&quality=85 1350w,
                                          /media/2632421/hero_1443_fp154974.jpg?width=1920&quality=85 1920w"
                                  alt="Duisburg Masterplan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - Duisburg, Germany</span>

                                <span class="fp-content-header__title">Duisburg Masterplan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #2D558E;"></div>
                    <a href="/projects/folkestone-academy/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636252/hero_1271_fp245469.jpg?width=768&quality=85  768w,
                                          /media/2636252/hero_1271_fp245469.jpg?width=960&quality=85  960w,
                                          /media/2636252/hero_1271_fp245469.jpg?width=1350&quality=85 1350w,
                                          /media/2636252/hero_1271_fp245469.jpg?width=1920&quality=85 1920w"
                                  alt="Folkestone Academy"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - Folkestone, UK</span>

                                <span class="fp-content-header__title">Folkestone Academy</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1804">
                    <div class="fp-dominant-colour" style="background-color: #F1F1F1;"></div>
                    <a href="/projects/foster-550-louis-poulsen/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632656/1547_fp483391.jpg?width=768&quality=85  768w,
                                          /media/2632656/1547_fp483391.jpg?width=960&quality=85  960w,
                                          /media/2632656/1547_fp483391.jpg?width=1350&quality=85 1350w,
                                          /media/2632656/1547_fp483391.jpg?width=1920&quality=85 1920w"
                                  alt="Foster 550, Louis Poulsen"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - </span>

                                <span class="fp-content-header__title">Foster 550, Louis Poulsen</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #959391;"></div>
                    <a href="/projects/lumiere-apartments/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632633/hero_1197_fp352516.jpg?width=768&quality=85  768w,
                                          /media/2632633/hero_1197_fp352516.jpg?width=960&quality=85  960w,
                                          /media/2632633/hero_1197_fp352516.jpg?width=1350&quality=85 1350w,
                                          /media/2632633/hero_1197_fp352516.jpg?width=1920&quality=85 1920w"
                                  alt="Lumiere Apartments"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - Sydney, Australia</span>

                                <span class="fp-content-header__title">Lumiere Apartments</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #938976;"></div>
                    <a href="/projects/smithsonian-institution-courtyard/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632899/hero_1276_fp241149.jpg?width=768&quality=85  768w,
                                          /media/2632899/hero_1276_fp241149.jpg?width=960&quality=85  960w,
                                          /media/2632899/hero_1276_fp241149.jpg?width=1350&quality=85 1350w,
                                          /media/2632899/hero_1276_fp241149.jpg?width=1920&quality=85 1920w"
                                  alt="Smithsonian Institution Courtyard"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - Washington DC, USA</span>

                                <span class="fp-content-header__title">Smithsonian Institution Courtyard</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7A756D;"></div>
                    <a href="/projects/spinningfields/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632905/hero_1216_fp408952.jpg?width=768&quality=85  768w,
                                          /media/2632905/hero_1216_fp408952.jpg?width=960&quality=85  960w,
                                          /media/2632905/hero_1216_fp408952.jpg?width=1350&quality=85 1350w,
                                          /media/2632905/hero_1216_fp408952.jpg?width=1920&quality=85 1920w"
                                  alt="Spinningfields"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - Manchester, UK</span>

                                <span class="fp-content-header__title">Spinningfields</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7E7666;"></div>
                    <a href="/projects/the-murezzan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633169/hero_1254_fp122414.jpg?width=768&quality=85  768w,
                                          /media/2633169/hero_1254_fp122414.jpg?width=960&quality=85  960w,
                                          /media/2633169/hero_1254_fp122414.jpg?width=1350&quality=85 1350w,
                                          /media/2633169/hero_1254_fp122414.jpg?width=1920&quality=85 1920w"
                                  alt="The Murezzan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - St Moritz, Switzerland</span>

                                <span class="fp-content-header__title">The Murezzan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #85837F;"></div>
                    <a href="/projects/thomas-deacon-academy/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633194/hero_1269_fp212794.jpg?width=768&quality=85  768w,
                                          /media/2633194/hero_1269_fp212794.jpg?width=960&quality=85  960w,
                                          /media/2633194/hero_1269_fp212794.jpg?width=1350&quality=85 1350w,
                                          /media/2633194/hero_1269_fp212794.jpg?width=1920&quality=85 1920w"
                                  alt="Thomas Deacon Academy"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - Peterborough, UK</span>

                                <span class="fp-content-header__title">Thomas Deacon Academy</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #1560B7;"></div>
                    <a href="/projects/wembley-stadium/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634218/hero_1015_fp161254.jpg?width=768&quality=85  768w,
                                          /media/2634218/hero_1015_fp161254.jpg?width=960&quality=85  960w,
                                          /media/2634218/hero_1015_fp161254.jpg?width=1350&quality=85 1350w,
                                          /media/2634218/hero_1015_fp161254.jpg?width=1920&quality=85 1920w"
                                  alt="Wembley Stadium"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - London, UK</span>

                                <span class="fp-content-header__title">Wembley Stadium</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #828489;"></div>
                    <a href="/projects/willis-towers-watson/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634224/hero_1147_fp281098.jpg?width=768&quality=85  768w,
                                          /media/2634224/hero_1147_fp281098.jpg?width=960&quality=85  960w,
                                          /media/2634224/hero_1147_fp281098.jpg?width=1350&quality=85 1350w,
                                          /media/2634224/hero_1147_fp281098.jpg?width=1920&quality=85 1920w"
                                  alt="Willis Towers Watson"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2007 - London, UK</span>

                                <span class="fp-content-header__title">Willis Towers Watson</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8E8484;"></div>
                    <a href="/projects/alec-reed-academy/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2635283/hero_1178_fp96080.jpg?width=768&quality=85  768w,
                                          /media/2635283/hero_1178_fp96080.jpg?width=960&quality=85  960w,
                                          /media/2635283/hero_1178_fp96080.jpg?width=1350&quality=85 1350w,
                                          /media/2635283/hero_1178_fp96080.jpg?width=1920&quality=85 1920w"
                                  alt="Alec Reed Academy"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - Northolt, UK</span>

                                <span class="fp-content-header__title">Alec Reed Academy</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #785F62;"></div>
                    <a href="/projects/banyan-tree-corniche-bay/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632158/hero_1465_fp247961.jpg?width=768&quality=85  768w,
                                          /media/2632158/hero_1465_fp247961.jpg?width=960&quality=85  960w,
                                          /media/2632158/hero_1465_fp247961.jpg?width=1350&quality=85 1350w,
                                          /media/2632158/hero_1465_fp247961.jpg?width=1920&quality=85 1920w"
                                  alt="Banyan Tree Corniche Bay"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - La Gaulette, Mauritius</span>

                                <span class="fp-content-header__title">Banyan Tree Corniche Bay</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #ADAA9F;"></div>
                    <a href="/projects/dresden-central-station/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632334/hero_0916_fp144222.jpg?width=768&quality=85  768w,
                                          /media/2632334/hero_0916_fp144222.jpg?width=960&quality=85  960w,
                                          /media/2632334/hero_0916_fp144222.jpg?width=1350&quality=85 1350w,
                                          /media/2632334/hero_0916_fp144222.jpg?width=1920&quality=85 1920w"
                                  alt="Dresden Central Station"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - Dresden, Germany</span>

                                <span class="fp-content-header__title">Dresden Central Station</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #D9D9D9;"></div>
                    <a href="/projects/emeco-20-06-chair/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636147/hero_20-06_chair.jpg?width=768&quality=85  768w,
                                          /media/2636147/hero_20-06_chair.jpg?width=960&quality=85  960w,
                                          /media/2636147/hero_20-06_chair.jpg?width=1350&quality=85 1350w,
                                          /media/2636147/hero_20-06_chair.jpg?width=1920&quality=85 1920w"
                                  alt="Emeco 20-06 Chair"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - </span>

                                <span class="fp-content-header__title">Emeco 20-06 Chair</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #666F72;"></div>
                    <a href="/projects/hearst-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634191/hero_1124_fp129070.jpg?width=768&quality=85  768w,
                                          /media/2634191/hero_1124_fp129070.jpg?width=960&quality=85  960w,
                                          /media/2634191/hero_1124_fp129070.jpg?width=1350&quality=85 1350w,
                                          /media/2634191/hero_1124_fp129070.jpg?width=1920&quality=85 1920w"
                                  alt="Hearst Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - New York, USA</span>

                                <span class="fp-content-header__title">Hearst Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6A6962;"></div>
                    <a href="/projects/leedon-park-house/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632637/hero_1239_fp366900.jpg?width=768&quality=85  768w,
                                          /media/2632637/hero_1239_fp366900.jpg?width=960&quality=85  960w,
                                          /media/2632637/hero_1239_fp366900.jpg?width=1350&quality=85 1350w,
                                          /media/2632637/hero_1239_fp366900.jpg?width=1920&quality=85 1920w"
                                  alt="Leedon Park House"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - Singapore</span>

                                <span class="fp-content-header__title">Leedon Park House</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6F6E6A;"></div>
                    <a href="/projects/leslie-l-dan-pharmacy-building/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632629/hero_1183_fp144488.jpg?width=768&quality=85  768w,
                                          /media/2632629/hero_1183_fp144488.jpg?width=960&quality=85  960w,
                                          /media/2632629/hero_1183_fp144488.jpg?width=1350&quality=85 1350w,
                                          /media/2632629/hero_1183_fp144488.jpg?width=1920&quality=85 1920w"
                                  alt="Leslie L. Dan Pharmacy Building"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - Toronto, Canada</span>

                                <span class="fp-content-header__title">Leslie L. Dan Pharmacy Building</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #96918A;"></div>
                    <a href="/projects/london-academy/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632631/hero_1193_fp143666.jpg?width=768&quality=85  768w,
                                          /media/2632631/hero_1193_fp143666.jpg?width=960&quality=85  960w,
                                          /media/2632631/hero_1193_fp143666.jpg?width=1350&quality=85 1350w,
                                          /media/2632631/hero_1193_fp143666.jpg?width=1920&quality=85 1920w"
                                  alt="London Academy"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - London, UK</span>

                                <span class="fp-content-header__title">London Academy</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #768770;"></div>
                    <a href="/projects/palace-of-peace-and-reconciliation/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632640/hero_1322_fp143384.jpg?width=768&quality=85  768w,
                                          /media/2632640/hero_1322_fp143384.jpg?width=960&quality=85  960w,
                                          /media/2632640/hero_1322_fp143384.jpg?width=1350&quality=85 1350w,
                                          /media/2632640/hero_1322_fp143384.jpg?width=1920&quality=85 1920w"
                                  alt="Palace of Peace and Reconciliation"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - Astana, Kazakhstan</span>

                                <span class="fp-content-header__title">Palace of Peace and Reconciliation</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #776B62;"></div>
                    <a href="/projects/post-haus-restaurant/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632652/hero_1390_fp123237.jpg?width=768&quality=85  768w,
                                          /media/2632652/hero_1390_fp123237.jpg?width=960&quality=85  960w,
                                          /media/2632652/hero_1390_fp123237.jpg?width=1350&quality=85 1350w,
                                          /media/2632652/hero_1390_fp123237.jpg?width=1920&quality=85 1920w"
                                  alt="Post Haus restaurant"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - St Moritz, Switzerland</span>

                                <span class="fp-content-header__title">Post Haus restaurant</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8BA2B4;"></div>
                    <a href="/projects/russia-tower/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2635279/hero_1405_fp209837.jpg?width=768&quality=85  768w,
                                          /media/2635279/hero_1405_fp209837.jpg?width=960&quality=85  960w,
                                          /media/2635279/hero_1405_fp209837.jpg?width=1350&quality=85 1350w,
                                          /media/2635279/hero_1405_fp209837.jpg?width=1920&quality=85 1920w"
                                  alt="Russia Tower"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - Moscow, Russia</span>

                                <span class="fp-content-header__title">Russia Tower</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #CCC6BD;"></div>
                    <a href="/projects/still-molteni-c/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636160/hero_1370_fp144714.jpg?width=768&quality=85  768w,
                                          /media/2636160/hero_1370_fp144714.jpg?width=960&quality=85  960w,
                                          /media/2636160/hero_1370_fp144714.jpg?width=1350&quality=85 1350w,
                                          /media/2636160/hero_1370_fp144714.jpg?width=1920&quality=85 1920w"
                                  alt="Still, Molteni&amp;C"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2006 - </span>

                                <span class="fp-content-header__title">Still, Molteni&amp;C</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A1989E;"></div>
                    <a href="/projects/baths-for-hoesch/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632357/hero_1105_fp82391.jpg?width=768&quality=85  768w,
                                          /media/2632357/hero_1105_fp82391.jpg?width=960&quality=85  960w,
                                          /media/2632357/hero_1105_fp82391.jpg?width=1350&quality=85 1350w,
                                          /media/2632357/hero_1105_fp82391.jpg?width=1920&quality=85 1920w"
                                  alt="Baths for Hoesch"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - </span>

                                <span class="fp-content-header__title">Baths for Hoesch</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #74736F;"></div>
                    <a href="/projects/bishops-square/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632166/hero_1146_fp368810.jpg?width=768&quality=85  768w,
                                          /media/2632166/hero_1146_fp368810.jpg?width=960&quality=85  960w,
                                          /media/2632166/hero_1146_fp368810.jpg?width=1350&quality=85 1350w,
                                          /media/2632166/hero_1146_fp368810.jpg?width=1920&quality=85 1920w"
                                  alt="Bishops Square"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - London, UK</span>

                                <span class="fp-content-header__title">Bishops Square</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #687278;"></div>
                    <a href="/projects/budenberg-haus-urban-splash/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637238/hero_1113_fp159251.jpg?width=768&quality=85  768w,
                                          /media/2637238/hero_1113_fp159251.jpg?width=960&quality=85  960w,
                                          /media/2637238/hero_1113_fp159251.jpg?width=1350&quality=85 1350w,
                                          /media/2637238/hero_1113_fp159251.jpg?width=1920&quality=85 1920w"
                                  alt="Budenberg Haus, Urban Splash"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - Manchester, UK</span>

                                <span class="fp-content-header__title">Budenberg Haus, Urban Splash</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8199AF;"></div>
                    <a href="/projects/deutsche-bank-place/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632362/hero_1157_fp155043.jpg?width=768&quality=85  768w,
                                          /media/2632362/hero_1157_fp155043.jpg?width=960&quality=85  960w,
                                          /media/2632362/hero_1157_fp155043.jpg?width=1350&quality=85 1350w,
                                          /media/2632362/hero_1157_fp155043.jpg?width=1920&quality=85 1920w"
                                  alt="Deutsche Bank Place"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - Sydney, Australia</span>

                                <span class="fp-content-header__title">Deutsche Bank Place</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #666C68;"></div>
                    <a href="/projects/djanogly-city-academy/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632370/hero_1192_fp83890.jpg?width=768&quality=85  768w,
                                          /media/2632370/hero_1192_fp83890.jpg?width=960&quality=85  960w,
                                          /media/2632370/hero_1192_fp83890.jpg?width=1350&quality=85 1350w,
                                          /media/2632370/hero_1192_fp83890.jpg?width=1920&quality=85 1920w"
                                  alt="Djanogly City Academy"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - Nottingham, UK</span>

                                <span class="fp-content-header__title">Djanogly City Academy</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #BEBFC4;"></div>
                    <a href="/projects/free-university/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632349/hero_0980_fp85221.jpg?width=768&quality=85  768w,
                                          /media/2632349/hero_0980_fp85221.jpg?width=960&quality=85  960w,
                                          /media/2632349/hero_0980_fp85221.jpg?width=1350&quality=85 1350w,
                                          /media/2632349/hero_0980_fp85221.jpg?width=1920&quality=85 1920w"
                                  alt="Free University"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - Berlin, Germany</span>

                                <span class="fp-content-header__title">Free University</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #939378;"></div>
                    <a href="/projects/hotel-silken-puerta-america/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632865/hero_1292_fp136786.jpg?width=768&quality=85  768w,
                                          /media/2632865/hero_1292_fp136786.jpg?width=960&quality=85  960w,
                                          /media/2632865/hero_1292_fp136786.jpg?width=1350&quality=85 1350w,
                                          /media/2632865/hero_1292_fp136786.jpg?width=1920&quality=85 1920w"
                                  alt="Hotel Silken Puerta Am&#233;rica"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - Madrid, Spain</span>

                                <span class="fp-content-header__title">Hotel Silken Puerta Am&#233;rica</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #3E4863;"></div>
                    <a href="/projects/moor-house/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632616/hero_0996_fp100240.jpg?width=768&quality=85  768w,
                                          /media/2632616/hero_0996_fp100240.jpg?width=960&quality=85  960w,
                                          /media/2632616/hero_0996_fp100240.jpg?width=1350&quality=85 1350w,
                                          /media/2632616/hero_0996_fp100240.jpg?width=1920&quality=85 1920w"
                                  alt="Moor House "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - London, UK</span>

                                <span class="fp-content-header__title">Moor House </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #626965;"></div>
                    <a href="/projects/national-police-memorial/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632600/hero_0890_fp76966.jpg?width=768&quality=85  768w,
                                          /media/2632600/hero_0890_fp76966.jpg?width=960&quality=85  960w,
                                          /media/2632600/hero_0890_fp76966.jpg?width=1350&quality=85 1350w,
                                          /media/2632600/hero_0890_fp76966.jpg?width=1920&quality=85 1920w"
                                  alt="National Police Memorial"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - London, UK</span>

                                <span class="fp-content-header__title">National Police Memorial</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #575340;"></div>
                    <a href="/projects/supreme-court-of-singapore/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632917/hero_1095_fp118716.jpg?width=768&quality=85  768w,
                                          /media/2632917/hero_1095_fp118716.jpg?width=960&quality=85  960w,
                                          /media/2632917/hero_1095_fp118716.jpg?width=1350&quality=85 1350w,
                                          /media/2632917/hero_1095_fp118716.jpg?width=1920&quality=85 1920w"
                                  alt="Supreme Court of Singapore"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - Singapore</span>

                                <span class="fp-content-header__title">Supreme Court of Singapore</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6F7B88;"></div>
                    <a href="/projects/arsta-bridge/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632150/hero_0801_fp334614.jpg?width=768&quality=85  768w,
                                          /media/2632150/hero_0801_fp334614.jpg?width=960&quality=85  960w,
                                          /media/2632150/hero_0801_fp334614.jpg?width=1350&quality=85 1350w,
                                          /media/2632150/hero_0801_fp334614.jpg?width=1920&quality=85 1920w"
                                  alt="&#197;rsta Bridge"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2005 - Stockholm, Sweden</span>

                                <span class="fp-content-header__title">&#197;rsta Bridge</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #657A8A;"></div>
                    <a href="/projects/30-st-mary-axe/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638211/hero_1004_fp64703.jpg?width=768&quality=85  768w,
                                          /media/2638211/hero_1004_fp64703.jpg?width=960&quality=85  960w,
                                          /media/2638211/hero_1004_fp64703.jpg?width=1350&quality=85 1350w,
                                          /media/2638211/hero_1004_fp64703.jpg?width=1920&quality=85 1920w"
                                  alt="30 St Mary Axe"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - London, UK</span>

                                <span class="fp-content-header__title">30 St Mary Axe</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #856443;"></div>
                    <a href="/projects/asprey-store-london/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632156/hero_1151_fp50868.jpg?width=768&quality=85  768w,
                                          /media/2632156/hero_1151_fp50868.jpg?width=960&quality=85  960w,
                                          /media/2632156/hero_1151_fp50868.jpg?width=1350&quality=85 1350w,
                                          /media/2632156/hero_1151_fp50868.jpg?width=1920&quality=85 1920w"
                                  alt="Asprey Store London"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - London, UK</span>

                                <span class="fp-content-header__title">Asprey Store London</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7F6D54;"></div>
                    <a href="/projects/asprey-store-new-york/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2635280/hero_1191_fp61239.jpg?width=768&quality=85  768w,
                                          /media/2635280/hero_1191_fp61239.jpg?width=960&quality=85  960w,
                                          /media/2635280/hero_1191_fp61239.jpg?width=1350&quality=85 1350w,
                                          /media/2635280/hero_1191_fp61239.jpg?width=1920&quality=85 1920w"
                                  alt="Asprey Store New York"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - New York, USA</span>

                                <span class="fp-content-header__title">Asprey Store New York</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #787171;"></div>
                    <a href="/projects/chesa-futura/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632202/hero_1085_fp205749.jpg?width=768&quality=85  768w,
                                          /media/2632202/hero_1085_fp205749.jpg?width=960&quality=85  960w,
                                          /media/2632202/hero_1085_fp205749.jpg?width=1350&quality=85 1350w,
                                          /media/2632202/hero_1085_fp205749.jpg?width=1920&quality=85 1920w"
                                  alt="Chesa Futura"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - St Moritz, Switzerland</span>

                                <span class="fp-content-header__title">Chesa Futura</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #DEDEDE;"></div>
                    <a href="/projects/ft-trapex-door-furniture/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636143/hero_1161_fp60544.jpg?width=768&quality=85  768w,
                                          /media/2636143/hero_1161_fp60544.jpg?width=960&quality=85  960w,
                                          /media/2636143/hero_1161_fp60544.jpg?width=1350&quality=85 1350w,
                                          /media/2636143/hero_1161_fp60544.jpg?width=1920&quality=85 1920w"
                                  alt="FT, Trapex door furniture"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - </span>

                                <span class="fp-content-header__title">FT, Trapex door furniture</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #929388;"></div>
                    <a href="/projects/imperial-college-business-school/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632361/hero_1122_fp50119.jpg?width=768&quality=85  768w,
                                          /media/2632361/hero_1122_fp50119.jpg?width=960&quality=85  960w,
                                          /media/2632361/hero_1122_fp50119.jpg?width=1350&quality=85 1350w,
                                          /media/2632361/hero_1122_fp50119.jpg?width=1920&quality=85 1920w"
                                  alt="Imperial College Business School"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - London, UK</span>

                                <span class="fp-content-header__title">Imperial College Business School</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #696770;"></div>
                    <a href="/projects/imperial-college-faculty-building/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634193/hero_1165_fp60568.jpg?width=768&quality=85  768w,
                                          /media/2634193/hero_1165_fp60568.jpg?width=960&quality=85  960w,
                                          /media/2634193/hero_1165_fp60568.jpg?width=1350&quality=85 1350w,
                                          /media/2634193/hero_1165_fp60568.jpg?width=1920&quality=85 1920w"
                                  alt="Imperial College Faculty Building"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - London, UK</span>

                                <span class="fp-content-header__title">Imperial College Faculty Building</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #626160;"></div>
                    <a href="/projects/kamakura-house/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632608/hero_0932_fp62907.jpg?width=768&quality=85  768w,
                                          /media/2632608/hero_0932_fp62907.jpg?width=960&quality=85  960w,
                                          /media/2632608/hero_0932_fp62907.jpg?width=1350&quality=85 1350w,
                                          /media/2632608/hero_0932_fp62907.jpg?width=1920&quality=85 1920w"
                                  alt="Kamakura House"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - Kamakura, Japan</span>

                                <span class="fp-content-header__title">Kamakura House</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #384140;"></div>
                    <a href="/projects/mclaren-technology-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632614/hero_0995_fp205674.jpg?width=768&quality=85  768w,
                                          /media/2632614/hero_0995_fp205674.jpg?width=960&quality=85  960w,
                                          /media/2632614/hero_0995_fp205674.jpg?width=1350&quality=85 1350w,
                                          /media/2632614/hero_0995_fp205674.jpg?width=1920&quality=85 1920w"
                                  alt="McLaren Technology Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - Woking, UK</span>

                                <span class="fp-content-header__title">McLaren Technology Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #ABB2B9;"></div>
                    <a href="/projects/millau-viaduct/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632625/hero_1158_fp444722_v2.jpg?width=768&quality=85  768w,
                                          /media/2632625/hero_1158_fp444722_v2.jpg?width=960&quality=85  960w,
                                          /media/2632625/hero_1158_fp444722_v2.jpg?width=1350&quality=85 1350w,
                                          /media/2632625/hero_1158_fp444722_v2.jpg?width=1920&quality=85 1920w"
                                  alt="Millau Viaduct"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - Millau, France</span>

                                <span class="fp-content-header__title">Millau Viaduct</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #55544E;"></div>
                    <a href="/projects/petronas-university-of-technology/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632618/hero_1028_fp66771.jpg?width=768&quality=85  768w,
                                          /media/2632618/hero_1028_fp66771.jpg?width=960&quality=85  960w,
                                          /media/2632618/hero_1028_fp66771.jpg?width=1350&quality=85 1350w,
                                          /media/2632618/hero_1028_fp66771.jpg?width=1920&quality=85 1920w"
                                  alt="Petronas University of Technology"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - Seri Iskandar, Malaysia</span>

                                <span class="fp-content-header__title">Petronas University of Technology</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A8A59C;"></div>
                    <a href="/projects/place-kitchen-furniture-for-dada/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632934/hero_1253_fp327234.jpg?width=768&quality=85  768w,
                                          /media/2632934/hero_1253_fp327234.jpg?width=960&quality=85  960w,
                                          /media/2632934/hero_1253_fp327234.jpg?width=1350&quality=85 1350w,
                                          /media/2632934/hero_1253_fp327234.jpg?width=1920&quality=85 1920w"
                                  alt="Place Kitchen Furniture for Dada "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - </span>

                                <span class="fp-content-header__title">Place Kitchen Furniture for Dada </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A1A29D;"></div>
                    <a href="/projects/sage-gateshead/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632893/hero_0984_fp519497.jpg?width=768&quality=85  768w,
                                          /media/2632893/hero_0984_fp519497.jpg?width=960&quality=85  960w,
                                          /media/2632893/hero_0984_fp519497.jpg?width=1350&quality=85 1350w,
                                          /media/2632893/hero_0984_fp519497.jpg?width=1920&quality=85 1920w"
                                  alt="Sage Gateshead"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - Gateshead, UK</span>

                                <span class="fp-content-header__title">Sage Gateshead</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8F959E;"></div>
                    <a href="/projects/world-trade-center-san-marino/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632890/hero_0974_fp384429.jpg?width=768&quality=85  768w,
                                          /media/2632890/hero_0974_fp384429.jpg?width=960&quality=85  960w,
                                          /media/2632890/hero_0974_fp384429.jpg?width=1350&quality=85 1350w,
                                          /media/2632890/hero_0974_fp384429.jpg?width=1920&quality=85 1920w"
                                  alt="World Trade Center San Marino"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - Dogana, San Marino</span>

                                <span class="fp-content-header__title">World Trade Center San Marino</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #EFF0F0;"></div>
                    <a href="/projects/soft-cells-wall-and-ceiling-system/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641768/2752_fp778514_hero.jpg?width=768&quality=85  768w,
                                          /media/2641768/2752_fp778514_hero.jpg?width=960&quality=85  960w,
                                          /media/2641768/2752_fp778514_hero.jpg?width=1350&quality=85 1350w,
                                          /media/2641768/2752_fp778514_hero.jpg?width=1920&quality=85 1920w"
                                  alt="Soft Cells Wall and Ceiling System"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2004 - London, UK</span>

                                <span class="fp-content-header__title">Soft Cells Wall and Ceiling System</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #3B4D4A;"></div>
                    <a href="/projects/10-gresham-street/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2635249/hero_0909_fp396105.jpg?width=768&quality=85  768w,
                                          /media/2635249/hero_0909_fp396105.jpg?width=960&quality=85  960w,
                                          /media/2635249/hero_0909_fp396105.jpg?width=1350&quality=85 1350w,
                                          /media/2635249/hero_0909_fp396105.jpg?width=1920&quality=85 1920w"
                                  alt="10 Gresham Street"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - London, UK</span>

                                <span class="fp-content-header__title">10 Gresham Street</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #718EAB;"></div>
                    <a href="/projects/albion-riverside/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632138/hero_1001_fp75477.jpg?width=768&quality=85  768w,
                                          /media/2632138/hero_1001_fp75477.jpg?width=960&quality=85  960w,
                                          /media/2632138/hero_1001_fp75477.jpg?width=1350&quality=85 1350w,
                                          /media/2632138/hero_1001_fp75477.jpg?width=1920&quality=85 1920w"
                                  alt="Albion Riverside"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - London, UK</span>

                                <span class="fp-content-header__title">Albion Riverside</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #858475;"></div>
                    <a href="/projects/capital-city-academy/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632180/hero_1128_fp50278.jpg?width=768&quality=85  768w,
                                          /media/2632180/hero_1128_fp50278.jpg?width=960&quality=85  960w,
                                          /media/2632180/hero_1128_fp50278.jpg?width=1350&quality=85 1350w,
                                          /media/2632180/hero_1128_fp50278.jpg?width=1920&quality=85 1920w"
                                  alt="Capital City Academy"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - London, UK</span>

                                <span class="fp-content-header__title">Capital City Academy</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4F717D;"></div>
                    <a href="/projects/dark-shadow-sailing-yacht/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632622/hero_1155_fp252882.jpg?width=768&quality=85  768w,
                                          /media/2632622/hero_1155_fp252882.jpg?width=960&quality=85  960w,
                                          /media/2632622/hero_1155_fp252882.jpg?width=1350&quality=85 1350w,
                                          /media/2632622/hero_1155_fp252882.jpg?width=1920&quality=85 1920w"
                                  alt="Dark Shadow, sailing yacht"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - </span>

                                <span class="fp-content-header__title">Dark Shadow, sailing yacht</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7C878C;"></div>
                    <a href="/projects/duisburg-inner-harbour-masterplan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632310/hero_0576_fp232705.jpg?width=768&quality=85  768w,
                                          /media/2632310/hero_0576_fp232705.jpg?width=960&quality=85  960w,
                                          /media/2632310/hero_0576_fp232705.jpg?width=1350&quality=85 1350w,
                                          /media/2632310/hero_0576_fp232705.jpg?width=1920&quality=85 1920w"
                                  alt="Duisburg Inner Harbour Masterplan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - Duisburg, Germany</span>

                                <span class="fp-content-header__title">Duisburg Inner Harbour Masterplan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9696A1;"></div>
                    <a href="/projects/ernst-young-headquarters-more-london/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632354/hero_1099_fp71856.jpg?width=768&quality=85  768w,
                                          /media/2632354/hero_1099_fp71856.jpg?width=960&quality=85  960w,
                                          /media/2632354/hero_1099_fp71856.jpg?width=1350&quality=85 1350w,
                                          /media/2632354/hero_1099_fp71856.jpg?width=1920&quality=85 1920w"
                                  alt="Ernst &amp; Young Headquarters, More London"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - London, UK</span>

                                <span class="fp-content-header__title">Ernst &amp; Young Headquarters, More London</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #797567;"></div>
                    <a href="/projects/james-h-clark-center-stanford-university/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632415/hero_1076_fp205753.jpg?width=768&quality=85  768w,
                                          /media/2632415/hero_1076_fp205753.jpg?width=960&quality=85  960w,
                                          /media/2632415/hero_1076_fp205753.jpg?width=1350&quality=85 1350w,
                                          /media/2632415/hero_1076_fp205753.jpg?width=1920&quality=85 1920w"
                                  alt="James H. Clark Center, Stanford University"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - Stanford, USA</span>

                                <span class="fp-content-header__title">James H. Clark Center, Stanford University</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #585A59;"></div>
                    <a href="/projects/metropolitan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634206/hero_0986_fp205666.jpg?width=768&quality=85  768w,
                                          /media/2634206/hero_0986_fp205666.jpg?width=960&quality=85  960w,
                                          /media/2634206/hero_0986_fp205666.jpg?width=1350&quality=85 1350w,
                                          /media/2634206/hero_0986_fp205666.jpg?width=1920&quality=85 1920w"
                                  alt="Metropolitan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - Warsaw, Poland</span>

                                <span class="fp-content-header__title">Metropolitan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #838077;"></div>
                    <a href="/projects/more-london/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2635276/hero_1011_fp129345.jpg?width=768&quality=85  768w,
                                          /media/2635276/hero_1011_fp129345.jpg?width=960&quality=85  960w,
                                          /media/2635276/hero_1011_fp129345.jpg?width=1350&quality=85 1350w,
                                          /media/2635276/hero_1011_fp129345.jpg?width=1920&quality=85 1920w"
                                  alt="More London "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - London, UK</span>

                                <span class="fp-content-header__title">More London </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7E98A5;"></div>
                    <a href="/projects/scottish-gas-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632194/hero_1141_fp68759.jpg?width=768&quality=85  768w,
                                          /media/2632194/hero_1141_fp68759.jpg?width=960&quality=85  960w,
                                          /media/2632194/hero_1141_fp68759.jpg?width=1350&quality=85 1350w,
                                          /media/2632194/hero_1141_fp68759.jpg?width=1920&quality=85 1920w"
                                  alt="Scottish Gas Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - Edinburgh, UK</span>

                                <span class="fp-content-header__title">Scottish Gas Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #586F72;"></div>
                    <a href="/projects/the-business-academy-bexley/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632162/hero_1154_fp205780.jpg?width=768&quality=85  768w,
                                          /media/2632162/hero_1154_fp205780.jpg?width=960&quality=85  960w,
                                          /media/2632162/hero_1154_fp205780.jpg?width=1350&quality=85 1350w,
                                          /media/2632162/hero_1154_fp205780.jpg?width=1920&quality=85 1920w"
                                  alt="The Business Academy Bexley"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - London, UK</span>

                                <span class="fp-content-header__title">The Business Academy Bexley</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A4A3B1;"></div>
                    <a href="/projects/trafalgar-square/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638219/hero_1046_fp248894.jpg?width=768&quality=85  768w,
                                          /media/2638219/hero_1046_fp248894.jpg?width=960&quality=85  960w,
                                          /media/2638219/hero_1046_fp248894.jpg?width=1350&quality=85 1350w,
                                          /media/2638219/hero_1046_fp248894.jpg?width=1920&quality=85 1920w"
                                  alt="Trafalgar Square"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2003 - London, UK</span>

                                <span class="fp-content-header__title">Trafalgar Square</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8693A9;"></div>
                    <a href="/projects/city-hall/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632214/hero_1027_fp205702.jpg?width=768&quality=85  768w,
                                          /media/2632214/hero_1027_fp205702.jpg?width=960&quality=85  960w,
                                          /media/2632214/hero_1027_fp205702.jpg?width=1350&quality=85 1350w,
                                          /media/2632214/hero_1027_fp205702.jpg?width=1920&quality=85 1920w"
                                  alt="City Hall"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2002 - London, UK</span>

                                <span class="fp-content-header__title">City Hall</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #9B979C;"></div>
                    <a href="/projects/foster-500-505-series-walter-knoll/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636144/hero_foster500_505.jpg?width=768&quality=85  768w,
                                          /media/2636144/hero_foster500_505.jpg?width=960&quality=85  960w,
                                          /media/2636144/hero_foster500_505.jpg?width=1350&quality=85 1350w,
                                          /media/2636144/hero_foster500_505.jpg?width=1920&quality=85 1920w"
                                  alt="Foster 500/505 series, Walter Knoll"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2002 - </span>

                                <span class="fp-content-header__title">Foster 500/505 series, Walter Knoll</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7A7162;"></div>
                    <a href="/projects/hm-treasury/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632332/hero_0898_fp398199.jpg?width=768&quality=85  768w,
                                          /media/2632332/hero_0898_fp398199.jpg?width=960&quality=85  960w,
                                          /media/2632332/hero_0898_fp398199.jpg?width=1350&quality=85 1350w,
                                          /media/2632332/hero_0898_fp398199.jpg?width=1920&quality=85 1920w"
                                  alt="HM Treasury "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2002 - London, UK</span>

                                <span class="fp-content-header__title">HM Treasury </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #282d33;"></div>
                    <a href="/projects/hsbc-uk-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634192/hero_1009_fp374817.jpg?width=768&quality=85  768w,
                                          /media/2634192/hero_1009_fp374817.jpg?width=960&quality=85  960w,
                                          /media/2634192/hero_1009_fp374817.jpg?width=1350&quality=85 1350w,
                                          /media/2634192/hero_1009_fp374817.jpg?width=1920&quality=85 1920w"
                                  alt="HSBC UK Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2002 - London, UK</span>

                                <span class="fp-content-header__title">HSBC UK Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #627388;"></div>
                    <a href="/projects/tower-place-west/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633239/hero_0642_fp357055.jpg?width=768&quality=85  768w,
                                          /media/2633239/hero_0642_fp357055.jpg?width=960&quality=85  960w,
                                          /media/2633239/hero_0642_fp357055.jpg?width=1350&quality=85 1350w,
                                          /media/2633239/hero_0642_fp357055.jpg?width=1920&quality=85 1920w"
                                  alt="Tower Place West"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2002 - London, UK</span>

                                <span class="fp-content-header__title">Tower Place West</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #61666B;"></div>
                    <a href="/projects/arag-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632802/hero_0918_fp396259.jpg?width=768&quality=85  768w,
                                          /media/2632802/hero_0918_fp396259.jpg?width=960&quality=85  960w,
                                          /media/2632802/hero_0918_fp396259.jpg?width=1350&quality=85 1350w,
                                          /media/2632802/hero_0918_fp396259.jpg?width=1920&quality=85 1920w"
                                  alt="Arag Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2001 - D&#252;sseldorf, Germany</span>

                                <span class="fp-content-header__title">Arag Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #9B9E97;"></div>
                    <a href="/projects/bathroom-fittings-for-duravit-and-hoesch/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636148/hero_bathroom_foster.jpg?width=768&quality=85  768w,
                                          /media/2636148/hero_bathroom_foster.jpg?width=960&quality=85  960w,
                                          /media/2636148/hero_bathroom_foster.jpg?width=1350&quality=85 1350w,
                                          /media/2636148/hero_bathroom_foster.jpg?width=1920&quality=85 1920w"
                                  alt="Bathroom Fittings for Duravit and Hoesch "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2001 - </span>

                                <span class="fp-content-header__title">Bathroom Fittings for Duravit and Hoesch </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #9499A2;"></div>
                    <a href="/projects/duisburg-housing/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634184/hero_0956_fp18948.jpg?width=768&quality=85  768w,
                                          /media/2634184/hero_0956_fp18948.jpg?width=960&quality=85  960w,
                                          /media/2634184/hero_0956_fp18948.jpg?width=1350&quality=85 1350w,
                                          /media/2634184/hero_0956_fp18948.jpg?width=1920&quality=85 1920w"
                                  alt="Duisburg Housing"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2001 - Duisburg, Germany</span>

                                <span class="fp-content-header__title">Duisburg Housing</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #72808E;"></div>
                    <a href="/projects/gerling-ring/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636261/hero_0856_fp391045.jpg?width=768&quality=85  768w,
                                          /media/2636261/hero_0856_fp391045.jpg?width=960&quality=85  960w,
                                          /media/2636261/hero_0856_fp391045.jpg?width=1350&quality=85 1350w,
                                          /media/2636261/hero_0856_fp391045.jpg?width=1920&quality=85 1920w"
                                  alt="Gerling Ring"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2001 - Cologne, Germany</span>

                                <span class="fp-content-header__title">Gerling Ring</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #716C5A;"></div>
                    <a href="/projects/imperial-college-flowers-building/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632330/hero_0871_fp205587.jpg?width=768&quality=85  768w,
                                          /media/2632330/hero_0871_fp205587.jpg?width=960&quality=85  960w,
                                          /media/2632330/hero_0871_fp205587.jpg?width=1350&quality=85 1350w,
                                          /media/2632330/hero_0871_fp205587.jpg?width=1920&quality=85 1920w"
                                  alt="Imperial College Flowers Building"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2001 - London, UK</span>

                                <span class="fp-content-header__title">Imperial College Flowers Building</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #AFADAE;"></div>
                    <a href="/projects/lse-library/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633276/hero_1023_fp442137.jpg?width=768&quality=85  768w,
                                          /media/2633276/hero_1023_fp442137.jpg?width=960&quality=85  960w,
                                          /media/2633276/hero_1023_fp442137.jpg?width=1350&quality=85 1350w,
                                          /media/2633276/hero_1023_fp442137.jpg?width=1920&quality=85 1920w"
                                  alt="LSE Library"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2001 - London, UK</span>

                                <span class="fp-content-header__title">LSE Library</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4e555c;"></div>
                    <a href="/projects/musee-de-prehistoire-des-gorges-du-verdon/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632585/hero_0651_fp383414.jpg?width=768&quality=85  768w,
                                          /media/2632585/hero_0651_fp383414.jpg?width=960&quality=85  960w,
                                          /media/2632585/hero_0651_fp383414.jpg?width=1350&quality=85 1350w,
                                          /media/2632585/hero_0651_fp383414.jpg?width=1920&quality=85 1920w"
                                  alt="Mus&#233;e de Pr&#233;histoire des Gorges du Verdon "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2001 - Quinson, France</span>

                                <span class="fp-content-header__title">Mus&#233;e de Pr&#233;histoire des Gorges du Verdon </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #71868E;"></div>
                    <a href="/projects/shanghai-jiushi-corporation/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632596/hero_0810_fp388297.jpg?width=768&quality=85  768w,
                                          /media/2632596/hero_0810_fp388297.jpg?width=960&quality=85  960w,
                                          /media/2632596/hero_0810_fp388297.jpg?width=1350&quality=85 1350w,
                                          /media/2632596/hero_0810_fp388297.jpg?width=1920&quality=85 1920w"
                                  alt="Shanghai Jiushi Corporation"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2001 - Shanghai, China</span>

                                <span class="fp-content-header__title">Shanghai Jiushi Corporation</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #60656B;"></div>
                    <a href="/projects/50-finsbury-square/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632167/hero_0976_fp427184.jpg?width=768&quality=85  768w,
                                          /media/2632167/hero_0976_fp427184.jpg?width=960&quality=85  960w,
                                          /media/2632167/hero_0976_fp427184.jpg?width=1350&quality=85 1350w,
                                          /media/2632167/hero_0976_fp427184.jpg?width=1920&quality=85 1920w"
                                  alt="50 Finsbury Square"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - London, UK</span>

                                <span class="fp-content-header__title">50 Finsbury Square</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #282d33;"></div>
                    <a href="/projects/al-faisaliah-center/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632132/hero_0768_fp387847.jpg?width=768&quality=85  768w,
                                          /media/2632132/hero_0768_fp387847.jpg?width=960&quality=85  960w,
                                          /media/2632132/hero_0768_fp387847.jpg?width=1350&quality=85 1350w,
                                          /media/2632132/hero_0768_fp387847.jpg?width=1920&quality=85 1920w"
                                  alt="Al Faisaliah Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - Riyadh, Saudi Arabia</span>

                                <span class="fp-content-header__title">Al Faisaliah Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #707577;"></div>
                    <a href="/projects/center-for-clinical-science-research-stanford-university/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632191/hero_0886_fp394724.jpg?width=768&quality=85  768w,
                                          /media/2632191/hero_0886_fp394724.jpg?width=960&quality=85  960w,
                                          /media/2632191/hero_0886_fp394724.jpg?width=1350&quality=85 1350w,
                                          /media/2632191/hero_0886_fp394724.jpg?width=1920&quality=85 1920w"
                                  alt="Center for Clinical Science Research, Stanford University"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - Stanford, USA</span>

                                <span class="fp-content-header__title">Center for Clinical Science Research, Stanford University</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #617681;"></div>
                    <a href="/projects/citibank-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632208/hero_0923_fp398475.jpg?width=768&quality=85  768w,
                                          /media/2632208/hero_0923_fp398475.jpg?width=960&quality=85  960w,
                                          /media/2632208/hero_0923_fp398475.jpg?width=1350&quality=85 1350w,
                                          /media/2632208/hero_0923_fp398475.jpg?width=1920&quality=85 1920w"
                                  alt="Citibank Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - London, UK</span>

                                <span class="fp-content-header__title">Citibank Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #99A2AD;"></div>
                    <a href="/projects/electronic-arts-european-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632345/hero_0958_fp415066.jpg?width=768&quality=85  768w,
                                          /media/2632345/hero_0958_fp415066.jpg?width=960&quality=85  960w,
                                          /media/2632345/hero_0958_fp415066.jpg?width=1350&quality=85 1350w,
                                          /media/2632345/hero_0958_fp415066.jpg?width=1920&quality=85 1920w"
                                  alt="Electronic Arts European Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - Chertsey, UK</span>

                                <span class="fp-content-header__title">Electronic Arts European Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #B7C4CA;"></div>
                    <a href="/projects/enel-power-pylons/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632353/hero_1033_fp485550.jpg?width=768&quality=85  768w,
                                          /media/2632353/hero_1033_fp485550.jpg?width=960&quality=85  960w,
                                          /media/2632353/hero_1033_fp485550.jpg?width=1350&quality=85 1350w,
                                          /media/2632353/hero_1033_fp485550.jpg?width=1920&quality=85 1920w"
                                  alt="ENEL Power Pylons"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - </span>

                                <span class="fp-content-header__title">ENEL Power Pylons</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7A8F9F;"></div>
                    <a href="/projects/expo-station/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632347/hero_0966_fp205648.jpg?width=768&quality=85  768w,
                                          /media/2632347/hero_0966_fp205648.jpg?width=960&quality=85  960w,
                                          /media/2632347/hero_0966_fp205648.jpg?width=1350&quality=85 1350w,
                                          /media/2632347/hero_0966_fp205648.jpg?width=1920&quality=85 1920w"
                                  alt="EXPO Station"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - Singapore</span>

                                <span class="fp-content-header__title">EXPO Station</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7A9BA0;"></div>
                    <a href="/projects/great-court-at-the-british-museum/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632341/hero_0793_fp276124.jpg?width=768&quality=85  768w,
                                          /media/2632341/hero_0793_fp276124.jpg?width=960&quality=85  960w,
                                          /media/2632341/hero_0793_fp276124.jpg?width=1350&quality=85 1350w,
                                          /media/2632341/hero_0793_fp276124.jpg?width=1920&quality=85 1920w"
                                  alt="Great Court at the British Museum"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - London, UK</span>

                                <span class="fp-content-header__title">Great Court at the British Museum</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #AFC1CE;"></div>
                    <a href="/projects/great-glasshouse/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638922/great_glasshouse.jpg?width=768&quality=85  768w,
                                          /media/2638922/great_glasshouse.jpg?width=960&quality=85  960w,
                                          /media/2638922/great_glasshouse.jpg?width=1350&quality=85 1350w,
                                          /media/2638922/great_glasshouse.jpg?width=1920&quality=85 1920w"
                                  alt="Great Glasshouse"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - Carmarthenshire, UK</span>

                                <span class="fp-content-header__title">Great Glasshouse</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #C5C5C5;"></div>
                    <a href="/projects/helit-desktop-range/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636141/hero_helit_desktop_range.jpg?width=768&quality=85  768w,
                                          /media/2636141/hero_helit_desktop_range.jpg?width=960&quality=85  960w,
                                          /media/2636141/hero_helit_desktop_range.jpg?width=1350&quality=85 1350w,
                                          /media/2636141/hero_helit_desktop_range.jpg?width=1920&quality=85 1920w"
                                  alt="Helit Desktop Range"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - </span>

                                <span class="fp-content-header__title">Helit Desktop Range</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #758381;"></div>
                    <a href="/projects/j-sainsbury-plc/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632316/hero_0765_fp371547.jpg?width=768&quality=85  768w,
                                          /media/2632316/hero_0765_fp371547.jpg?width=960&quality=85  960w,
                                          /media/2632316/hero_0765_fp371547.jpg?width=1350&quality=85 1350w,
                                          /media/2632316/hero_0765_fp371547.jpg?width=1920&quality=85 1920w"
                                  alt="J Sainsbury plc"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - London, UK</span>

                                <span class="fp-content-header__title">J Sainsbury plc</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #282D33;"></div>
                    <a href="/projects/jcdecaux-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634194/hero_0987_fp432211.jpg?width=768&quality=85  768w,
                                          /media/2634194/hero_0987_fp432211.jpg?width=960&quality=85  960w,
                                          /media/2634194/hero_0987_fp432211.jpg?width=1350&quality=85 1350w,
                                          /media/2634194/hero_0987_fp432211.jpg?width=1920&quality=85 1920w"
                                  alt="JCDecaux Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - London, UK</span>

                                <span class="fp-content-header__title">JCDecaux Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #49566C;"></div>
                    <a href="/projects/millennium-bridge/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632612/hero_0953_fp205629.jpg?width=768&quality=85  768w,
                                          /media/2632612/hero_0953_fp205629.jpg?width=960&quality=85  960w,
                                          /media/2632612/hero_0953_fp205629.jpg?width=1350&quality=85 1350w,
                                          /media/2632612/hero_0953_fp205629.jpg?width=1920&quality=85 1920w"
                                  alt="Millennium Bridge"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - London, UK</span>

                                <span class="fp-content-header__title">Millennium Bridge</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #68778B;"></div>
                    <a href="/projects/world-port-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634228/hero_0879_fp12156.jpg?width=768&quality=85  768w,
                                          /media/2634228/hero_0879_fp12156.jpg?width=960&quality=85  960w,
                                          /media/2634228/hero_0879_fp12156.jpg?width=1350&quality=85 1350w,
                                          /media/2634228/hero_0879_fp12156.jpg?width=1920&quality=85 1920w"
                                  alt="World Port Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">2000 - Rotterdam, The Netherlands</span>

                                <span class="fp-content-header__title">World Port Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #AEB7BD;"></div>
                    <a href="/projects/airline-seating-system-vitra/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632706/0913_fp44302.jpg?width=768&quality=85  768w,
                                          /media/2632706/0913_fp44302.jpg?width=960&quality=85  960w,
                                          /media/2632706/0913_fp44302.jpg?width=1350&quality=85 1350w,
                                          /media/2632706/0913_fp44302.jpg?width=1920&quality=85 1920w"
                                  alt="Airline Seating System, Vitra "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1999 - </span>

                                <span class="fp-content-header__title">Airline Seating System, Vitra </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #657276;"></div>
                    <a href="/projects/canary-wharf-underground-station/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632176/hero_0579_fp205469.jpg?width=768&quality=85  768w,
                                          /media/2632176/hero_0579_fp205469.jpg?width=960&quality=85  960w,
                                          /media/2632176/hero_0579_fp205469.jpg?width=1350&quality=85 1350w,
                                          /media/2632176/hero_0579_fp205469.jpg?width=1920&quality=85 1920w"
                                  alt="Canary Wharf Underground Station"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1999 - London, UK</span>

                                <span class="fp-content-header__title">Canary Wharf Underground Station</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #78858F;"></div>
                    <a href="/projects/multimedia-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632602/hero_0893_fp12691_v2.jpg?width=768&quality=85  768w,
                                          /media/2632602/hero_0893_fp12691_v2.jpg?width=960&quality=85  960w,
                                          /media/2632602/hero_0893_fp12691_v2.jpg?width=1350&quality=85 1350w,
                                          /media/2632602/hero_0893_fp12691_v2.jpg?width=1920&quality=85 1920w"
                                  alt="Multimedia Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1999 - Hamburg, Germany</span>

                                <span class="fp-content-header__title">Multimedia Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #6E7C89;"></div>
                    <a href="/projects/reichstag-new-german-parliament/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632592/hero_0686_fp205519.jpg?width=768&quality=85  768w,
                                          /media/2632592/hero_0686_fp205519.jpg?width=960&quality=85  960w,
                                          /media/2632592/hero_0686_fp205519.jpg?width=1350&quality=85 1350w,
                                          /media/2632592/hero_0686_fp205519.jpg?width=1920&quality=85 1920w"
                                  alt="Reichstag, New German Parliament"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1999 - Berlin, Germany</span>

                                <span class="fp-content-header__title">Reichstag, New German Parliament</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #35434C;"></div>
                    <a href="/projects/aberdeen-business-school-robert-gordon-university/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632593/hero_0804_fp388285.jpg?width=768&quality=85  768w,
                                          /media/2632593/hero_0804_fp388285.jpg?width=960&quality=85  960w,
                                          /media/2632593/hero_0804_fp388285.jpg?width=1350&quality=85 1350w,
                                          /media/2632593/hero_0804_fp388285.jpg?width=1920&quality=85 1920w"
                                  alt="Aberdeen Business School, Robert Gordon University"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1998 - Aberdeen, UK</span>

                                <span class="fp-content-header__title">Aberdeen Business School, Robert Gordon University</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4B6981;"></div>
                    <a href="/projects/aspire-national-training-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632154/hero_0880_fp389886.jpg?width=768&quality=85  768w,
                                          /media/2632154/hero_0880_fp389886.jpg?width=960&quality=85  960w,
                                          /media/2632154/hero_0880_fp389886.jpg?width=1350&quality=85 1350w,
                                          /media/2632154/hero_0880_fp389886.jpg?width=1920&quality=85 1920w"
                                  alt="Aspire: National Training Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1998 - Stanmore, UK</span>

                                <span class="fp-content-header__title">Aspire: National Training Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #666D6D;"></div>
                    <a href="/projects/hactl-superterminal/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632312/hero_0734_fp368420.jpg?width=768&quality=85  768w,
                                          /media/2632312/hero_0734_fp368420.jpg?width=960&quality=85  960w,
                                          /media/2632312/hero_0734_fp368420.jpg?width=1350&quality=85 1350w,
                                          /media/2632312/hero_0734_fp368420.jpg?width=1920&quality=85 1920w"
                                  alt="HACTL Superterminal"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1998 - Hong Kong, China</span>

                                <span class="fp-content-header__title">HACTL Superterminal</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A4ABB4;"></div>
                    <a href="/projects/hong-kong-international-airport/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632200/hero_0639_fp151755.jpg?width=768&quality=85  768w,
                                          /media/2632200/hero_0639_fp151755.jpg?width=960&quality=85  960w,
                                          /media/2632200/hero_0639_fp151755.jpg?width=1350&quality=85 1350w,
                                          /media/2632200/hero_0639_fp151755.jpg?width=1920&quality=85 1920w"
                                  alt="Hong Kong International Airport"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1998 - Hong Kong, China</span>

                                <span class="fp-content-header__title">Hong Kong International Airport</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #495145;"></div>
                    <a href="/projects/imperial-college-sir-alexander-fleming-building/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632320/hero_0807_fp388286.jpg?width=768&quality=85  768w,
                                          /media/2632320/hero_0807_fp388286.jpg?width=960&quality=85  960w,
                                          /media/2632320/hero_0807_fp388286.jpg?width=1350&quality=85 1350w,
                                          /media/2632320/hero_0807_fp388286.jpg?width=1920&quality=85 1920w"
                                  alt="Imperial College Sir Alexander Fleming Building"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1998 - London, UK</span>

                                <span class="fp-content-header__title">Imperial College Sir Alexander Fleming Building</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #5B5155;"></div>
                    <a href="/projects/north-greenwich-interchange/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632604/hero_0897_fp392595.jpg?width=768&quality=85  768w,
                                          /media/2632604/hero_0897_fp392595.jpg?width=960&quality=85  960w,
                                          /media/2632604/hero_0897_fp392595.jpg?width=1350&quality=85 1350w,
                                          /media/2632604/hero_0897_fp392595.jpg?width=1920&quality=85 1920w"
                                  alt="North Greenwich Interchange "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1998 - London, UK</span>

                                <span class="fp-content-header__title">North Greenwich Interchange </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #272024;"></div>
                    <a href="/projects/repsol-service-stations/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632610/hero_0935_fp205625.jpg?width=768&quality=85  768w,
                                          /media/2632610/hero_0935_fp205625.jpg?width=960&quality=85  960w,
                                          /media/2632610/hero_0935_fp205625.jpg?width=1350&quality=85 1350w,
                                          /media/2632610/hero_0935_fp205625.jpg?width=1920&quality=85 1920w"
                                  alt="Repsol service stations"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1998 - Spain</span>

                                <span class="fp-content-header__title">Repsol service stations</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7A8991;"></div>
                    <a href="/projects/valencia-congress-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633257/hero_0693_fp366470.jpg?width=768&quality=85  768w,
                                          /media/2633257/hero_0693_fp366470.jpg?width=960&quality=85  960w,
                                          /media/2633257/hero_0693_fp366470.jpg?width=1350&quality=85 1350w,
                                          /media/2633257/hero_0693_fp366470.jpg?width=1920&quality=85 1920w"
                                  alt="Valencia Congress Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1998 - Valencia, Spain</span>

                                <span class="fp-content-header__title">Valencia Congress Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #282d33;"></div>
                    <a href="/projects/american-air-museum/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638684/hero_0413_fp42714.jpg?width=768&quality=85  768w,
                                          /media/2638684/hero_0413_fp42714.jpg?width=960&quality=85  960w,
                                          /media/2638684/hero_0413_fp42714.jpg?width=1350&quality=85 1350w,
                                          /media/2638684/hero_0413_fp42714.jpg?width=1920&quality=85 1920w"
                                  alt="American Air Museum"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1997 - Cambridge, UK</span>

                                <span class="fp-content-header__title">American Air Museum</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #437C9F;"></div>
                    <a href="/projects/commerzbank-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636082/commerzbank.jpg?width=768&quality=85  768w,
                                          /media/2636082/commerzbank.jpg?width=960&quality=85  960w,
                                          /media/2636082/commerzbank.jpg?width=1350&quality=85 1350w,
                                          /media/2636082/commerzbank.jpg?width=1920&quality=85 1920w"
                                  alt="Commerzbank Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1997 - Frankfurt, Germany</span>

                                <span class="fp-content-header__title">Commerzbank Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #53493F;"></div>
                    <a href="/projects/red-dot-design-museum/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632271/hero_0495_fp6353.jpg?width=768&quality=85  768w,
                                          /media/2632271/hero_0495_fp6353.jpg?width=960&quality=85  960w,
                                          /media/2632271/hero_0495_fp6353.jpg?width=1350&quality=85 1350w,
                                          /media/2632271/hero_0495_fp6353.jpg?width=1920&quality=85 1920w"
                                  alt="Red Dot Design Museum"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1997 - Essen, Germany</span>

                                <span class="fp-content-header__title">Red Dot Design Museum</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #556D85;"></div>
                    <a href="/projects/sec-armadillo/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632598/hero_0854_fp205574.jpg?width=768&quality=85  768w,
                                          /media/2632598/hero_0854_fp205574.jpg?width=960&quality=85  960w,
                                          /media/2632598/hero_0854_fp205574.jpg?width=1350&quality=85 1350w,
                                          /media/2632598/hero_0854_fp205574.jpg?width=1920&quality=85 1920w"
                                  alt="SEC Armadillo"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1997 - Glasgow, UK</span>

                                <span class="fp-content-header__title">SEC Armadillo</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8A8F97;"></div>
                    <a href="/projects/duisburg-hafenforum/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632318/hero_0796_fp292185.jpg?width=768&quality=85  768w,
                                          /media/2632318/hero_0796_fp292185.jpg?width=960&quality=85  960w,
                                          /media/2632318/hero_0796_fp292185.jpg?width=1350&quality=85 1350w,
                                          /media/2632318/hero_0796_fp292185.jpg?width=1920&quality=85 1920w"
                                  alt="Duisburg Hafenforum"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1996 - Duisburg, Germany</span>

                                <span class="fp-content-header__title">Duisburg Hafenforum</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #5A6C82;"></div>
                    <a href="/projects/electricite-de-france-regional-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632314/hero_0753_fp368236.jpg?width=768&quality=85  768w,
                                          /media/2632314/hero_0753_fp368236.jpg?width=960&quality=85  960w,
                                          /media/2632314/hero_0753_fp368236.jpg?width=1350&quality=85 1350w,
                                          /media/2632314/hero_0753_fp368236.jpg?width=1920&quality=85 1920w"
                                  alt="Electricit&#233; de France Regional Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1996 - Bordeaux, France</span>

                                <span class="fp-content-header__title">Electricit&#233; de France Regional Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #73777E;"></div>
                    <a href="/projects/microelectronic-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634198/hero_0703_fp9521.jpg?width=768&quality=85  768w,
                                          /media/2634198/hero_0703_fp9521.jpg?width=960&quality=85  960w,
                                          /media/2634198/hero_0703_fp9521.jpg?width=1350&quality=85 1350w,
                                          /media/2634198/hero_0703_fp9521.jpg?width=1920&quality=85 1920w"
                                  alt="Microelectronic Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1996 - Duisburg, Germany</span>

                                <span class="fp-content-header__title">Microelectronic Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #625A48;"></div>
                    <a href="/projects/bilbao-metro/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632164/hero_0445_fp205058.jpg?width=768&quality=85  768w,
                                          /media/2632164/hero_0445_fp205058.jpg?width=960&quality=85  960w,
                                          /media/2632164/hero_0445_fp205058.jpg?width=1350&quality=85 1350w,
                                          /media/2632164/hero_0445_fp205058.jpg?width=1920&quality=85 1920w"
                                  alt="Bilbao Metro"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1995 - Bilbao, Spain</span>

                                <span class="fp-content-header__title">Bilbao Metro</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #282D33;"></div>
                    <a href="/projects/faculty-of-law-university-of-cambridge/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634302/hero_0541_fp337380.jpg?width=768&quality=85  768w,
                                          /media/2634302/hero_0541_fp337380.jpg?width=960&quality=85  960w,
                                          /media/2634302/hero_0541_fp337380.jpg?width=1350&quality=85 1350w,
                                          /media/2634302/hero_0541_fp337380.jpg?width=1920&quality=85 1920w"
                                  alt="Faculty of Law, University of Cambridge"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1995 - Cambridge, UK</span>

                                <span class="fp-content-header__title">Faculty of Law, University of Cambridge</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #3E4551;"></div>
                    <a href="/projects/izanami-motor-yacht/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632583/hero_0555_fp252559.jpg?width=768&quality=85  768w,
                                          /media/2632583/hero_0555_fp252559.jpg?width=960&quality=85  960w,
                                          /media/2632583/hero_0555_fp252559.jpg?width=1350&quality=85 1350w,
                                          /media/2632583/hero_0555_fp252559.jpg?width=1920&quality=85 1920w"
                                  alt="Izanami Motor Yacht"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1995 - </span>

                                <span class="fp-content-header__title">Izanami Motor Yacht</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #E0DDDB;"></div>
                    <a href="/projects/nf-novantotto-valli-valli-door-furniture/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633900/0836_fp11730.jpg?width=768&quality=85  768w,
                                          /media/2633900/0836_fp11730.jpg?width=960&quality=85  960w,
                                          /media/2633900/0836_fp11730.jpg?width=1350&quality=85 1350w,
                                          /media/2633900/0836_fp11730.jpg?width=1920&quality=85 1920w"
                                  alt="NF Novantotto, Valli&amp;Valli door furniture"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1995 - </span>

                                <span class="fp-content-header__title">NF Novantotto, Valli&amp;Valli door furniture</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #959AB2;"></div>
                    <a href="/projects/wind-turbine/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634226/hero_0735_fp367818.jpg?width=768&quality=85  768w,
                                          /media/2634226/hero_0735_fp367818.jpg?width=960&quality=85  960w,
                                          /media/2634226/hero_0735_fp367818.jpg?width=1350&quality=85 1350w,
                                          /media/2634226/hero_0735_fp367818.jpg?width=1920&quality=85 1920w"
                                  alt="Wind Turbine"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1995 - </span>

                                <span class="fp-content-header__title">Wind Turbine</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #686868;"></div>
                    <a href="/projects/addition-to-joslyn-art-museum/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632130/hero_0683_fp430580.jpg?width=768&quality=85  768w,
                                          /media/2632130/hero_0683_fp430580.jpg?width=960&quality=85  960w,
                                          /media/2632130/hero_0683_fp430580.jpg?width=1350&quality=85 1350w,
                                          /media/2632130/hero_0683_fp430580.jpg?width=1920&quality=85 1920w"
                                  alt="Addition to Joslyn Art Museum"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1994 - Omaha, USA</span>

                                <span class="fp-content-header__title">Addition to Joslyn Art Museum</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4e555c;"></div>
                    <a href="/projects/maack-schreiter-house/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632587/hero_0659_fp253004.jpg?width=768&quality=85  768w,
                                          /media/2632587/hero_0659_fp253004.jpg?width=960&quality=85  960w,
                                          /media/2632587/hero_0659_fp253004.jpg?width=1350&quality=85 1350w,
                                          /media/2632587/hero_0659_fp253004.jpg?width=1920&quality=85 1920w"
                                  alt="Maack Schreiter House"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1994 - L&#252;denscheid, Germany</span>

                                <span class="fp-content-header__title">Maack Schreiter House</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #5C71A1;"></div>
                    <a href="/projects/business-promotion-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634609/hero_0459_fp6238.jpg?width=768&quality=85  768w,
                                          /media/2634609/hero_0459_fp6238.jpg?width=960&quality=85  960w,
                                          /media/2634609/hero_0459_fp6238.jpg?width=1350&quality=85 1350w,
                                          /media/2634609/hero_0459_fp6238.jpg?width=1920&quality=85 1920w"
                                  alt="Business Promotion Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1993 - Duisburg, Germany</span>

                                <span class="fp-content-header__title">Business Promotion Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #666163;"></div>
                    <a href="/projects/carre-d-art/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632182/hero_0344_fp205189.jpg?width=768&quality=85  768w,
                                          /media/2632182/hero_0344_fp205189.jpg?width=960&quality=85  960w,
                                          /media/2632182/hero_0344_fp205189.jpg?width=1350&quality=85 1350w,
                                          /media/2632182/hero_0344_fp205189.jpg?width=1920&quality=85 1920w"
                                  alt="Carr&#233; d&#39;Art"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1993 - N&#238;mes, France</span>

                                <span class="fp-content-header__title">Carr&#233; d&#39;Art</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #808787;"></div>
                    <a href="/projects/house-in-corsica/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632309/hero_0546_fp205446.jpg?width=768&quality=85  768w,
                                          /media/2632309/hero_0546_fp205446.jpg?width=960&quality=85  960w,
                                          /media/2632309/hero_0546_fp205446.jpg?width=1350&quality=85 1350w,
                                          /media/2632309/hero_0546_fp205446.jpg?width=1920&quality=85 1920w"
                                  alt="House in Corsica"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1993 - Corsica, France</span>

                                <span class="fp-content-header__title">House in Corsica</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #5F645E;"></div>
                    <a href="/projects/lycee-albert-camus/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632581/hero_0528_fp252421.jpg?width=768&quality=85  768w,
                                          /media/2632581/hero_0528_fp252421.jpg?width=960&quality=85  960w,
                                          /media/2632581/hero_0528_fp252421.jpg?width=1350&quality=85 1350w,
                                          /media/2632581/hero_0528_fp252421.jpg?width=1920&quality=85 1920w"
                                  alt="Lyc&#233;e Albert Camus"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1993 - Fr&#233;jus, France</span>

                                <span class="fp-content-header__title">Lyc&#233;e Albert Camus</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #282d33;"></div>
                    <a href="/projects/marine-simulator-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632590/hero_0682_fp370865.jpg?width=768&quality=85  768w,
                                          /media/2632590/hero_0682_fp370865.jpg?width=960&quality=85  960w,
                                          /media/2632590/hero_0682_fp370865.jpg?width=1350&quality=85 1350w,
                                          /media/2632590/hero_0682_fp370865.jpg?width=1920&quality=85 1920w"
                                  alt="Marine Simulator Centre "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1993 - Rotterdam, The Netherlands</span>

                                <span class="fp-content-header__title">Marine Simulator Centre </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A18B6C;"></div>
                    <a href="/projects/tabula-table-system-tecno/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632922/hero_0843_fp275461.jpg?width=768&quality=85  768w,
                                          /media/2632922/hero_0843_fp275461.jpg?width=960&quality=85  960w,
                                          /media/2632922/hero_0843_fp275461.jpg?width=1350&quality=85 1350w,
                                          /media/2632922/hero_0843_fp275461.jpg?width=1920&quality=85 1920w"
                                  alt="Tabula Table System, Tecno"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1993 - </span>

                                <span class="fp-content-header__title">Tabula Table System, Tecno</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #385386;"></div>
                    <a href="/projects/cranfield-university-library/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632412/hero_0506_fp337254.jpg?width=768&quality=85  768w,
                                          /media/2632412/hero_0506_fp337254.jpg?width=960&quality=85  960w,
                                          /media/2632412/hero_0506_fp337254.jpg?width=1350&quality=85 1350w,
                                          /media/2632412/hero_0506_fp337254.jpg?width=1920&quality=85 1920w"
                                  alt="Cranfield University Library"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1992 - Cranfield, UK</span>

                                <span class="fp-content-header__title">Cranfield University Library</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4e555c;"></div>
                    <a href="/projects/house-in-japan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632268/hero_0411_fp452881.jpg?width=768&quality=85  768w,
                                          /media/2632268/hero_0411_fp452881.jpg?width=960&quality=85  960w,
                                          /media/2632268/hero_0411_fp452881.jpg?width=1350&quality=85 1350w,
                                          /media/2632268/hero_0411_fp452881.jpg?width=1920&quality=85 1920w"
                                  alt="House in Japan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1992 - Tokyo, Japan</span>

                                <span class="fp-content-header__title">House in Japan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #698AA0;"></div>
                    <a href="/projects/torre-de-collserola/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634216/hero_0454_fp205279.jpg?width=768&quality=85  768w,
                                          /media/2634216/hero_0454_fp205279.jpg?width=960&quality=85  960w,
                                          /media/2634216/hero_0454_fp205279.jpg?width=1350&quality=85 1350w,
                                          /media/2634216/hero_0454_fp205279.jpg?width=1920&quality=85 1920w"
                                  alt="Torre de Collserola"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1992 - Barcelona, Spain</span>

                                <span class="fp-content-header__title">Torre de Collserola</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1536">
                    <div class="fp-dominant-colour" style="background-color: #8C928F;"></div>
                    <a href="/projects/century-tower/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632196/hero_0409_fp205400.jpg?width=768&quality=85  768w,
                                          /media/2632196/hero_0409_fp205400.jpg?width=960&quality=85  960w,
                                          /media/2632196/hero_0409_fp205400.jpg?width=1350&quality=85 1350w,
                                          /media/2632196/hero_0409_fp205400.jpg?width=1920&quality=85 1920w"
                                  alt="Century Tower"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1991 - Tokyo, Japan</span>

                                <span class="fp-content-header__title">Century Tower</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #94ACAD;"></div>
                    <a href="/projects/crescent-wing-sainsbury-centre-for-visual-arts/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632269/hero_0441_fp419787.jpg?width=768&quality=85  768w,
                                          /media/2632269/hero_0441_fp419787.jpg?width=960&quality=85  960w,
                                          /media/2632269/hero_0441_fp419787.jpg?width=1350&quality=85 1350w,
                                          /media/2632269/hero_0441_fp419787.jpg?width=1920&quality=85 1920w"
                                  alt="Crescent Wing, Sainsbury Centre for Visual Arts"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1991 - Norwich, UK</span>

                                <span class="fp-content-header__title">Crescent Wing, Sainsbury Centre for Visual Arts</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #494D4D;"></div>
                    <a href="/projects/itn-productions/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637232/hero_0460_fp323987.jpg?width=768&quality=85  768w,
                                          /media/2637232/hero_0460_fp323987.jpg?width=960&quality=85  960w,
                                          /media/2637232/hero_0460_fp323987.jpg?width=1350&quality=85 1350w,
                                          /media/2637232/hero_0460_fp323987.jpg?width=1920&quality=85 1920w"
                                  alt="ITN Productions"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1991 - London, UK</span>

                                <span class="fp-content-header__title">ITN Productions</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #A5B0BC;"></div>
                    <a href="/projects/sackler-galleries-royal-academy-of-arts/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632577/hero_0356_fp205203.jpg?width=768&quality=85  768w,
                                          /media/2632577/hero_0356_fp205203.jpg?width=960&quality=85  960w,
                                          /media/2632577/hero_0356_fp205203.jpg?width=1350&quality=85 1350w,
                                          /media/2632577/hero_0356_fp205203.jpg?width=1920&quality=85 1920w"
                                  alt="Sackler Galleries, Royal Academy of Arts"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1991 - London, UK</span>

                                <span class="fp-content-header__title">Sackler Galleries, Royal Academy of Arts</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8F8987;"></div>
                    <a href="/projects/stansted-airport/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632910/hero_0300_fp159036.jpg?width=768&quality=85  768w,
                                          /media/2632910/hero_0300_fp159036.jpg?width=960&quality=85  960w,
                                          /media/2632910/hero_0300_fp159036.jpg?width=1350&quality=85 1350w,
                                          /media/2632910/hero_0300_fp159036.jpg?width=1920&quality=85 1920w"
                                  alt="Stansted Airport"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1991 - Stansted , UK</span>

                                <span class="fp-content-header__title">Stansted Airport</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #64737B;"></div>
                    <a href="/projects/riverside-apartments-and-studio/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2635278/hero_0361_fp132563.jpg?width=768&quality=85  768w,
                                          /media/2635278/hero_0361_fp132563.jpg?width=960&quality=85  960w,
                                          /media/2635278/hero_0361_fp132563.jpg?width=1350&quality=85 1350w,
                                          /media/2635278/hero_0361_fp132563.jpg?width=1920&quality=85 1920w"
                                  alt="Riverside Apartments and Studio"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1990 - London, UK</span>

                                <span class="fp-content-header__title">Riverside Apartments and Studio</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7A857B;"></div>
                    <a href="/projects/esprit-london/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632265/hero_0410_fp162732.jpg?width=768&quality=85  768w,
                                          /media/2632265/hero_0410_fp162732.jpg?width=960&quality=85  960w,
                                          /media/2632265/hero_0410_fp162732.jpg?width=1350&quality=85 1350w,
                                          /media/2632265/hero_0410_fp162732.jpg?width=1920&quality=85 1920w"
                                  alt="Esprit London"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1988 - London, UK</span>

                                <span class="fp-content-header__title">Esprit London</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #8E938B;"></div>
                    <a href="/projects/katharine-hamnett-london/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632579/hero_0379_fp273072.jpg?width=768&quality=85  768w,
                                          /media/2632579/hero_0379_fp273072.jpg?width=960&quality=85  960w,
                                          /media/2632579/hero_0379_fp273072.jpg?width=1350&quality=85 1350w,
                                          /media/2632579/hero_0379_fp273072.jpg?width=1920&quality=85 1920w"
                                  alt=" Katharine Hamnett London"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1987 - London, UK</span>

                                <span class="fp-content-header__title"> Katharine Hamnett London</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #B4BBC0;"></div>
                    <a href="/projects/nomos-desking-system-tecno/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636237/hero_0350_fp330108.jpg?width=768&quality=85  768w,
                                          /media/2636237/hero_0350_fp330108.jpg?width=960&quality=85  960w,
                                          /media/2636237/hero_0350_fp330108.jpg?width=1350&quality=85 1350w,
                                          /media/2636237/hero_0350_fp330108.jpg?width=1920&quality=85 1920w"
                                  alt="Nomos Desking System, Tecno "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1987 - </span>

                                <span class="fp-content-header__title">Nomos Desking System, Tecno </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="1920"
                    data-height="1080">
                    <div class="fp-dominant-colour" style="background-color: #BFBEBE;"></div>
                    <a href="/projects/nomos-table-tecno/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636296/nomos_table.jpg?width=768&quality=85  768w,
                                          /media/2636296/nomos_table.jpg?width=960&quality=85  960w,
                                          /media/2636296/nomos_table.jpg?width=1350&quality=85 1350w,
                                          /media/2636296/nomos_table.jpg?width=1920&quality=85 1920w"
                                  alt="Nomos Table, Tecno "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1987 - </span>

                                <span class="fp-content-header__title">Nomos Table, Tecno </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #5187A6;"></div>
                    <a href="/projects/hongkong-and-shanghai-bank-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632382/hero_0501_fp42799.jpg?width=768&quality=85  768w,
                                          /media/2632382/hero_0501_fp42799.jpg?width=960&quality=85  960w,
                                          /media/2632382/hero_0501_fp42799.jpg?width=1350&quality=85 1350w,
                                          /media/2632382/hero_0501_fp42799.jpg?width=1920&quality=85 1920w"
                                  alt="Hongkong and Shanghai Bank Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1986 - Hong Kong, China</span>

                                <span class="fp-content-header__title">Hongkong and Shanghai Bank Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #5B8BA5;"></div>
                    <a href="/projects/renault-distribution-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632575/hero_0295_fp260895.jpg?width=768&quality=85  768w,
                                          /media/2632575/hero_0295_fp260895.jpg?width=960&quality=85  960w,
                                          /media/2632575/hero_0295_fp260895.jpg?width=1350&quality=85 1350w,
                                          /media/2632575/hero_0295_fp260895.jpg?width=1920&quality=85 1920w"
                                  alt="Renault Distribution Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1982 - Swindon, UK</span>

                                <span class="fp-content-header__title">Renault Distribution Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #4C7E86;"></div>
                    <a href="/projects/sainsbury-centre-for-visual-arts/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632573/hero_0188_fp259606.jpg?width=768&quality=85  768w,
                                          /media/2632573/hero_0188_fp259606.jpg?width=960&quality=85  960w,
                                          /media/2632573/hero_0188_fp259606.jpg?width=1350&quality=85 1350w,
                                          /media/2632573/hero_0188_fp259606.jpg?width=1920&quality=85 1920w"
                                  alt="Sainsbury Centre for Visual Arts"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1978 - Norwich, UK</span>

                                <span class="fp-content-header__title">Sainsbury Centre for Visual Arts</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #88886C;"></div>
                    <a href="/projects/willis-building/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634222/hero_0102_fp451901.jpg?width=768&quality=85  768w,
                                          /media/2634222/hero_0102_fp451901.jpg?width=960&quality=85  960w,
                                          /media/2634222/hero_0102_fp451901.jpg?width=1350&quality=85 1350w,
                                          /media/2634222/hero_0102_fp451901.jpg?width=1920&quality=85 1920w"
                                  alt=" Willis Building"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1975 - Ipswich, UK</span>

                                <span class="fp-content-header__title"> Willis Building</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #586055;"></div>
                    <a href="/projects/ibm-pilot-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632263/hero_0125_fp451237.jpg?width=768&quality=85  768w,
                                          /media/2632263/hero_0125_fp451237.jpg?width=960&quality=85  960w,
                                          /media/2632263/hero_0125_fp451237.jpg?width=1350&quality=85 1350w,
                                          /media/2632263/hero_0125_fp451237.jpg?width=1920&quality=85 1920w"
                                  alt="IBM Pilot Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1971 - Cosham, UK</span>

                                <span class="fp-content-header__title">IBM Pilot Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #415658;"></div>
                    <a href="/projects/creek-vean-house/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632262/hero_0076_fp217536.jpg?width=768&quality=85  768w,
                                          /media/2632262/hero_0076_fp217536.jpg?width=960&quality=85  960w,
                                          /media/2632262/hero_0076_fp217536.jpg?width=1350&quality=85 1350w,
                                          /media/2632262/hero_0076_fp217536.jpg?width=1920&quality=85 1920w"
                                  alt="Creek Vean House"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1966 - Feock, UK</span>

                                <span class="fp-content-header__title">Creek Vean House</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #818181;"></div>
                    <a href="/projects/murray-mews/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632569/hero_0084_fp149776.jpg?width=768&quality=85  768w,
                                          /media/2632569/hero_0084_fp149776.jpg?width=960&quality=85  960w,
                                          /media/2632569/hero_0084_fp149776.jpg?width=1350&quality=85 1350w,
                                          /media/2632569/hero_0084_fp149776.jpg?width=1920&quality=85 1920w"
                                  alt="Murray Mews"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1966 - London, UK</span>

                                <span class="fp-content-header__title">Murray Mews</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #565656;"></div>
                    <a href="/projects/reliance-controls/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632571/hero_0097_fp147297.jpg?width=768&quality=85  768w,
                                          /media/2632571/hero_0097_fp147297.jpg?width=960&quality=85  960w,
                                          /media/2632571/hero_0097_fp147297.jpg?width=1350&quality=85 1350w,
                                          /media/2632571/hero_0097_fp147297.jpg?width=1920&quality=85 1920w"
                                  alt="Reliance Controls"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1966 - Swindon, UK</span>

                                <span class="fp-content-header__title">Reliance Controls</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed"
                    data-width="2732"
                    data-height="1360">
                    <div class="fp-dominant-colour" style="background-color: #7D8985;"></div>
                    <a href="/projects/the-retreat-creek-vean-house/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634212/hero_0076_fp145234.jpg?width=768&quality=85  768w,
                                          /media/2634212/hero_0076_fp145234.jpg?width=960&quality=85  960w,
                                          /media/2634212/hero_0076_fp145234.jpg?width=1350&quality=85 1350w,
                                          /media/2634212/hero_0076_fp145234.jpg?width=1920&quality=85 1920w"
                                  alt="The Retreat, Creek Vean house"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">1966 - Feock, UK</span>

                                <span class="fp-content-header__title">The Retreat, Creek Vean house</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>

                <li class="fp-grid__separator">
                    <h3 class="fp-grid__separator-title">Under construction</h3>
                </li>

                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #B4A18A;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/south-sabah-al-ahmad-masterplan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639316/hero_2677_fp712828_indesign.jpg?width=768&quality=85  768w,
                                          /media/2639316/hero_2677_fp712828_indesign.jpg?width=960&quality=85  960w,
                                          /media/2639316/hero_2677_fp712828_indesign.jpg?width=1350&quality=85 1350w,
                                          /media/2639316/hero_2677_fp712828_indesign.jpg?width=1920&quality=85 1920w"
                                  alt="South Sabah Al-Ahmad Masterplan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Kuwait</span>

                                <span class="fp-content-header__title">South Sabah Al-Ahmad Masterplan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #848C98;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/ellinikon-masterplan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641514/hero_2199_fp714644.jpg?width=768&quality=85  768w,
                                          /media/2641514/hero_2199_fp714644.jpg?width=960&quality=85  960w,
                                          /media/2641514/hero_2199_fp714644.jpg?width=1350&quality=85 1350w,
                                          /media/2641514/hero_2199_fp714644.jpg?width=1920&quality=85 1920w"
                                  alt="Ellinikon Masterplan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle"></span>

                                <span class="fp-content-header__title">Ellinikon Masterplan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #3B3D61;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/hermitage-plaza/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632398/hero_1727_fp421920.jpg?width=768&quality=85  768w,
                                          /media/2632398/hero_1727_fp421920.jpg?width=960&quality=85  960w,
                                          /media/2632398/hero_1727_fp421920.jpg?width=1350&quality=85 1350w,
                                          /media/2632398/hero_1727_fp421920.jpg?width=1920&quality=85 1920w"
                                  alt="Hermitage Plaza"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">France</span>

                                <span class="fp-content-header__title">Hermitage Plaza</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #B6AFA9;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/new-slussen-masterplan/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636109/hero_1710_fp627915.jpg?width=768&quality=85  768w,
                                          /media/2636109/hero_1710_fp627915.jpg?width=960&quality=85  960w,
                                          /media/2636109/hero_1710_fp627915.jpg?width=1350&quality=85 1350w,
                                          /media/2636109/hero_1710_fp627915.jpg?width=1920&quality=85 1920w"
                                  alt="New Slussen Masterplan"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Sweden</span>

                                <span class="fp-content-header__title">New Slussen Masterplan</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #5D5852;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/parkline-place/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641055/hero-2963_fp755343.jpg?width=768&quality=85  768w,
                                          /media/2641055/hero-2963_fp755343.jpg?width=960&quality=85  960w,
                                          /media/2641055/hero-2963_fp755343.jpg?width=1350&quality=85 1350w,
                                          /media/2641055/hero-2963_fp755343.jpg?width=1920&quality=85 1920w"
                                  alt="Parkline Place"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Australia</span>

                                <span class="fp-content-header__title">Parkline Place</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #8F959C;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/oceanwide-center/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632700/hero_2213_fp602679.jpg?width=768&quality=85  768w,
                                          /media/2632700/hero_2213_fp602679.jpg?width=960&quality=85  960w,
                                          /media/2632700/hero_2213_fp602679.jpg?width=1350&quality=85 1350w,
                                          /media/2632700/hero_2213_fp602679.jpg?width=1920&quality=85 1920w"
                                  alt="Oceanwide Center"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">USA</span>

                                <span class="fp-content-header__title">Oceanwide Center</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #918973;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/magdi-yacoub-global-heart-center-cairo/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639780/hero_2604_fp734932.jpg?width=768&quality=85  768w,
                                          /media/2639780/hero_2604_fp734932.jpg?width=960&quality=85  960w,
                                          /media/2639780/hero_2604_fp734932.jpg?width=1350&quality=85 1350w,
                                          /media/2639780/hero_2604_fp734932.jpg?width=1920&quality=85 1920w"
                                  alt="Magdi Yacoub Global Heart Center Cairo"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Egypt</span>

                                <span class="fp-content-header__title">Magdi Yacoub Global Heart Center Cairo</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #C5BFB4;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/whiteleys-mixed-use-redevelopment/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639917/hero-2259_fp578248.jpg?width=768&quality=85  768w,
                                          /media/2639917/hero-2259_fp578248.jpg?width=960&quality=85  960w,
                                          /media/2639917/hero-2259_fp578248.jpg?width=1350&quality=85 1350w,
                                          /media/2639917/hero-2259_fp578248.jpg?width=1920&quality=85 1920w"
                                  alt="Whiteleys Mixed Use Redevelopment"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">UK</span>

                                <span class="fp-content-header__title">Whiteleys Mixed Use Redevelopment</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #97A4B2;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/250-city-road/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632216/hero_2115_fp528889.jpg?width=768&quality=85  768w,
                                          /media/2632216/hero_2115_fp528889.jpg?width=960&quality=85  960w,
                                          /media/2632216/hero_2115_fp528889.jpg?width=1350&quality=85 1350w,
                                          /media/2632216/hero_2115_fp528889.jpg?width=1920&quality=85 1920w"
                                  alt="250 City Road"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">UK</span>

                                <span class="fp-content-header__title">250 City Road</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #79614F;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/50-hudson-yards/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639126/hero_2555_fp674205.jpg?width=768&quality=85  768w,
                                          /media/2639126/hero_2555_fp674205.jpg?width=960&quality=85  960w,
                                          /media/2639126/hero_2555_fp674205.jpg?width=1350&quality=85 1350w,
                                          /media/2639126/hero_2555_fp674205.jpg?width=1920&quality=85 1920w"
                                  alt="50 Hudson Yards"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">USA</span>

                                <span class="fp-content-header__title">50 Hudson Yards</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #788271;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/battersea-power-station/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632254/hero_2205_fp499141.jpg?width=768&quality=85  768w,
                                          /media/2632254/hero_2205_fp499141.jpg?width=960&quality=85  960w,
                                          /media/2632254/hero_2205_fp499141.jpg?width=1350&quality=85 1350w,
                                          /media/2632254/hero_2205_fp499141.jpg?width=1920&quality=85 1920w"
                                  alt="Battersea Power Station"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">UK</span>

                                <span class="fp-content-header__title">Battersea Power Station</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #31566E;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/kuwait-international-airport/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638102/hero_1879_fp660622.jpg?width=768&quality=85  768w,
                                          /media/2638102/hero_1879_fp660622.jpg?width=960&quality=85  960w,
                                          /media/2638102/hero_1879_fp660622.jpg?width=1350&quality=85 1350w,
                                          /media/2638102/hero_1879_fp660622.jpg?width=1920&quality=85 1920w"
                                  alt="Kuwait International Airport"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Kuwait</span>

                                <span class="fp-content-header__title">Kuwait International Airport</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #8B6F5E;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/the-one/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2633172/hero_2304_fp621747.jpg?width=768&quality=85  768w,
                                          /media/2633172/hero_2304_fp621747.jpg?width=960&quality=85  960w,
                                          /media/2633172/hero_2304_fp621747.jpg?width=1350&quality=85 1350w,
                                          /media/2633172/hero_2304_fp621747.jpg?width=1920&quality=85 1920w"
                                  alt="The One"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Canada</span>

                                <span class="fp-content-header__title">The One</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #777664;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/vietinbank-business-center/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632925/hero_1891_fp530497.jpg?width=768&quality=85  768w,
                                          /media/2632925/hero_1891_fp530497.jpg?width=960&quality=85  960w,
                                          /media/2632925/hero_1891_fp530497.jpg?width=1350&quality=85 1350w,
                                          /media/2632925/hero_1891_fp530497.jpg?width=1920&quality=85 1920w"
                                  alt="VietinBank Business Center"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Vietnam</span>

                                <span class="fp-content-header__title">VietinBank Business Center</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #504C5A;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/suhe-centre/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639850/hero_2561_fp739482.jpg?width=768&quality=85  768w,
                                          /media/2639850/hero_2561_fp739482.jpg?width=960&quality=85  960w,
                                          /media/2639850/hero_2561_fp739482.jpg?width=1350&quality=85 1350w,
                                          /media/2639850/hero_2561_fp739482.jpg?width=1920&quality=85 1920w"
                                  alt="Suhe Centre"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">China</span>

                                <span class="fp-content-header__title">Suhe Centre</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #989CA0;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/royal-hamilius/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638120/hero_1898_fp606880.jpg?width=768&quality=85  768w,
                                          /media/2638120/hero_1898_fp606880.jpg?width=960&quality=85  960w,
                                          /media/2638120/hero_1898_fp606880.jpg?width=1350&quality=85 1350w,
                                          /media/2638120/hero_1898_fp606880.jpg?width=1920&quality=85 1920w"
                                  alt="Royal Hamilius"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Luxembourg</span>

                                <span class="fp-content-header__title">Royal Hamilius</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #54646F;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/zayed-national-museum/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634232/hero_1550_fp433644.jpg?width=768&quality=85  768w,
                                          /media/2634232/hero_1550_fp433644.jpg?width=960&quality=85  960w,
                                          /media/2634232/hero_1550_fp433644.jpg?width=1350&quality=85 1350w,
                                          /media/2634232/hero_1550_fp433644.jpg?width=1920&quality=85 1920w"
                                  alt="Zayed National Museum"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">UAE</span>

                                <span class="fp-content-header__title">Zayed National Museum</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #B2A08A;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/acciona-ombu/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2640009/hero_2772_fp729389.jpg?width=768&quality=85  768w,
                                          /media/2640009/hero_2772_fp729389.jpg?width=960&quality=85  960w,
                                          /media/2640009/hero_2772_fp729389.jpg?width=1350&quality=85 1350w,
                                          /media/2640009/hero_2772_fp729389.jpg?width=1920&quality=85 1920w"
                                  alt="Acciona Omb&#250;"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Spain</span>

                                <span class="fp-content-header__title">Acciona Omb&#250;</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #7F9599;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/varso-tower/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634297/hero_2240_fp605093.jpg?width=768&quality=85  768w,
                                          /media/2634297/hero_2240_fp605093.jpg?width=960&quality=85  960w,
                                          /media/2634297/hero_2240_fp605093.jpg?width=1350&quality=85 1350w,
                                          /media/2634297/hero_2240_fp605093.jpg?width=1920&quality=85 1920w"
                                  alt="Varso Tower"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Poland</span>

                                <span class="fp-content-header__title">Varso Tower</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #556271;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/icone/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639563/hero_2577_fp727297.jpg?width=768&quality=85  768w,
                                          /media/2639563/hero_2577_fp727297.jpg?width=960&quality=85  960w,
                                          /media/2639563/hero_2577_fp727297.jpg?width=1350&quality=85 1350w,
                                          /media/2639563/hero_2577_fp727297.jpg?width=1920&quality=85 1920w"
                                  alt="IC&#212;NE"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Luxembourg</span>

                                <span class="fp-content-header__title">IC&#212;NE</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #738F97;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/mol-campus/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641071/hero_2571_fp757131.jpg?width=768&quality=85  768w,
                                          /media/2641071/hero_2571_fp757131.jpg?width=960&quality=85  960w,
                                          /media/2641071/hero_2571_fp757131.jpg?width=1350&quality=85 1350w,
                                          /media/2641071/hero_2571_fp757131.jpg?width=1920&quality=85 1920w"
                                  alt="MOL Campus"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Hungary</span>

                                <span class="fp-content-header__title">MOL Campus</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #9E8B7D;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/salesforce-tower-at-sydney-place/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641189/hero-2576_fp756918.jpg?width=768&quality=85  768w,
                                          /media/2641189/hero-2576_fp756918.jpg?width=960&quality=85  960w,
                                          /media/2641189/hero-2576_fp756918.jpg?width=1350&quality=85 1350w,
                                          /media/2641189/hero-2576_fp756918.jpg?width=1920&quality=85 1920w"
                                  alt="Salesforce Tower at Sydney Place"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Australia</span>

                                <span class="fp-content-header__title">Salesforce Tower at Sydney Place</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #A7A59D;"
                    data-width="2732"
                    data-height="2732">
                    <a href="/projects/dji-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637629/hero_2568_fp650420.jpg?width=768&quality=85  768w,
                                          /media/2637629/hero_2568_fp650420.jpg?width=960&quality=85  960w,
                                          /media/2637629/hero_2568_fp650420.jpg?width=1350&quality=85 1350w,
                                          /media/2637629/hero_2568_fp650420.jpg?width=1920&quality=85 1920w"
                                  alt="DJI Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">China</span>

                                <span class="fp-content-header__title">DJI Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #71716F;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/south-quay-plaza/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637158/hero_2186_fp640462.jpg?width=768&quality=85  768w,
                                          /media/2637158/hero_2186_fp640462.jpg?width=960&quality=85  960w,
                                          /media/2637158/hero_2186_fp640462.jpg?width=1350&quality=85 1350w,
                                          /media/2637158/hero_2186_fp640462.jpg?width=1920&quality=85 1920w"
                                  alt="South Quay Plaza"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">UK</span>

                                <span class="fp-content-header__title">South Quay Plaza</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #61564F;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/pavilion-university-of-pennsylvania/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2635282/hero_2349_fp615892.jpg?width=768&quality=85  768w,
                                          /media/2635282/hero_2349_fp615892.jpg?width=960&quality=85  960w,
                                          /media/2635282/hero_2349_fp615892.jpg?width=1350&quality=85 1350w,
                                          /media/2635282/hero_2349_fp615892.jpg?width=1920&quality=85 1920w"
                                  alt="Pavilion, University of Pennsylvania"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">USA</span>

                                <span class="fp-content-header__title">Pavilion, University of Pennsylvania</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #767072;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/425-park-avenue/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632124/hero_2084_fp542453.jpg?width=768&quality=85  768w,
                                          /media/2632124/hero_2084_fp542453.jpg?width=960&quality=85  960w,
                                          /media/2632124/hero_2084_fp542453.jpg?width=1350&quality=85 1350w,
                                          /media/2632124/hero_2084_fp542453.jpg?width=1920&quality=85 1920w"
                                  alt="425 Park Avenue"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">USA</span>

                                <span class="fp-content-header__title">425 Park Avenue</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #ACA4A4;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/ferring-pharmaceuticals-a-s-headquarters/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2639851/hero_2222_fp592638.jpg?width=768&quality=85  768w,
                                          /media/2639851/hero_2222_fp592638.jpg?width=960&quality=85  960w,
                                          /media/2639851/hero_2222_fp592638.jpg?width=1350&quality=85 1350w,
                                          /media/2639851/hero_2222_fp592638.jpg?width=1920&quality=85 1920w"
                                  alt="Ferring Pharmaceuticals A/S Headquarters"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Denmark</span>

                                <span class="fp-content-header__title">Ferring Pharmaceuticals A/S Headquarters</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #5D4533;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/datong-art-museum/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2636298/hero_1901_fp451242.jpg?width=768&quality=85  768w,
                                          /media/2636298/hero_1901_fp451242.jpg?width=960&quality=85  960w,
                                          /media/2636298/hero_1901_fp451242.jpg?width=1350&quality=85 1350w,
                                          /media/2636298/hero_1901_fp451242.jpg?width=1920&quality=85 1920w"
                                  alt="Datong Art Museum"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">China</span>

                                <span class="fp-content-header__title">Datong Art Museum</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #636168;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/dy-patil-university-centre-of-excellence/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632667/hero_1856_fp421859.jpg?width=768&quality=85  768w,
                                          /media/2632667/hero_1856_fp421859.jpg?width=960&quality=85  960w,
                                          /media/2632667/hero_1856_fp421859.jpg?width=1350&quality=85 1350w,
                                          /media/2632667/hero_1856_fp421859.jpg?width=1920&quality=85 1920w"
                                  alt="DY Patil University Centre of Excellence"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">India</span>

                                <span class="fp-content-header__title">DY Patil University Centre of Excellence</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #475C64;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/avenida-cordoba-120/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641179/hero-2879_fp739360.jpg?width=768&quality=85  768w,
                                          /media/2641179/hero-2879_fp739360.jpg?width=960&quality=85  960w,
                                          /media/2641179/hero-2879_fp739360.jpg?width=1350&quality=85 1350w,
                                          /media/2641179/hero-2879_fp739360.jpg?width=1920&quality=85 1920w"
                                  alt="Avenida Cordoba 120"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Argentina</span>

                                <span class="fp-content-header__title">Avenida Cordoba 120</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #B8B9B7;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/axis-madrid/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641182/hero-2695_fp653766.jpg?width=768&quality=85  768w,
                                          /media/2641182/hero-2695_fp653766.jpg?width=960&quality=85  960w,
                                          /media/2641182/hero-2695_fp653766.jpg?width=1350&quality=85 1350w,
                                          /media/2641182/hero-2695_fp653766.jpg?width=1920&quality=85 1920w"
                                  alt="Axis Madrid"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Spain</span>

                                <span class="fp-content-header__title">Axis Madrid</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #AC9587;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/red-sea-airport/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2641160/hero-2886_fp713007.jpg?width=768&quality=85  768w,
                                          /media/2641160/hero-2886_fp713007.jpg?width=960&quality=85  960w,
                                          /media/2641160/hero-2886_fp713007.jpg?width=1350&quality=85 1350w,
                                          /media/2641160/hero-2886_fp713007.jpg?width=1920&quality=85 1920w"
                                  alt="Red Sea Airport "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Saudi Arabia</span>

                                <span class="fp-content-header__title">Red Sea Airport </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #939284;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/ireo-city/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634271/hero_1922_fp535344.jpg?width=768&quality=85  768w,
                                          /media/2634271/hero_1922_fp535344.jpg?width=960&quality=85  960w,
                                          /media/2634271/hero_1922_fp535344.jpg?width=1350&quality=85 1350w,
                                          /media/2634271/hero_1922_fp535344.jpg?width=1920&quality=85 1920w"
                                  alt="Ireo City "></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">India</span>

                                <span class="fp-content-header__title">Ireo City </span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #574046;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/national-bank-of-kuwait/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2632692/hero_2184_fp502454.jpg?width=768&quality=85  768w,
                                          /media/2632692/hero_2184_fp502454.jpg?width=960&quality=85  960w,
                                          /media/2632692/hero_2184_fp502454.jpg?width=1350&quality=85 1350w,
                                          /media/2632692/hero_2184_fp502454.jpg?width=1920&quality=85 1920w"
                                  alt="National Bank of Kuwait"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Kuwait</span>

                                <span class="fp-content-header__title">National Bank of Kuwait</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #848FAC;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/the-address-residence/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634293/hero_1770_fp620086.jpg?width=768&quality=85  768w,
                                          /media/2634293/hero_1770_fp620086.jpg?width=960&quality=85  960w,
                                          /media/2634293/hero_1770_fp620086.jpg?width=1350&quality=85 1350w,
                                          /media/2634293/hero_1770_fp620086.jpg?width=1920&quality=85 1920w"
                                  alt="The Address Residence"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Turkey</span>

                                <span class="fp-content-header__title">The Address Residence</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #5F5A67;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/tocumen-international-airport/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2638668/2034_fp666280.jpg?width=768&quality=85  768w,
                                          /media/2638668/2034_fp666280.jpg?width=960&quality=85  960w,
                                          /media/2638668/2034_fp666280.jpg?width=1350&quality=85 1350w,
                                          /media/2638668/2034_fp666280.jpg?width=1920&quality=85 1920w"
                                  alt="Tocumen International Airport"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Panama</span>

                                <span class="fp-content-header__title">Tocumen International Airport</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #B38B5D;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/euro-america-financial-city-efc/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2637131/hero_2189_fp539545.jpg?width=768&quality=85  768w,
                                          /media/2637131/hero_2189_fp539545.jpg?width=960&quality=85  960w,
                                          /media/2637131/hero_2189_fp539545.jpg?width=1350&quality=85 1350w,
                                          /media/2637131/hero_2189_fp539545.jpg?width=1920&quality=85 1920w"
                                  alt="Euro America Financial City (EFC)"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">China</span>

                                <span class="fp-content-header__title">Euro America Financial City (EFC)</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>
                <li class="fp-grid__item is-hidden is-collapsed" style="background-color: #A2ACB0;"
                    data-width="2732"
                    data-height="1360">
                    <a href="/projects/saqqara-residences/" class="fp-content">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  srcset="/media/2634671/hero_1967_fp449901.jpg?width=768&quality=85  768w,
                                          /media/2634671/hero_1967_fp449901.jpg?width=960&quality=85  960w,
                                          /media/2634671/hero_1967_fp449901.jpg?width=1350&quality=85 1350w,
                                          /media/2634671/hero_1967_fp449901.jpg?width=1920&quality=85 1920w"
                                  alt="Saqqara Residences"></span>
                        <div class="fp-content-header">
                            <div class="fp-content-header__wrapper">

                                <span class="fp-content-header__subtitle">Mexico</span>

                                <span class="fp-content-header__title">Saqqara Residences</span>

                            </div>

                        </div>

                    </a>

                    <div class="fp-spacer"></div>

                </li>

            </ul>
            <div class="fp-grid-loader" data-total="368">
                <div class="fp-grid-loader__label">
                    <span class="fp-gl-count">368</span> <span
                            class="fp-gl-title">more Search projects by type projects</span>
                </div>
            </div>
        </div>


        <div class="component fp-footer" data-component-name="footer">
            <div class="fp-footer-columns">

                <div class="fp-footer-column" data-index="0">
                    <div class="fp-footer-header">
                        <h4 class="fp-fh-title">Projects</h4>
                        <span class="fp-fh-chevron"></span>
                    </div>
                    <div class="fp-footer-links">
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/projects/type/?isnew=true">

                                Recently Completed
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/projects/type/?onsite=true">

                                Under Construction
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/projects/type/?projecttype=culture">

                                Culture
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/projects/type/?projecttype=civic">

                                Civic
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection"
                               href="/projects/type/?projecttype=offices-and-headquarters">

                                Offices and Headquarters
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection"
                               href="/projects/type/?projecttype=transport-and-infrastructure">

                                Transport and Infrastructure
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection"
                               href="/projects/type/?projecttype=health-and-education">

                                Health and Education
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection"
                               href="/projects/type/?projecttype=industrial-and-research">

                                Industrial and Research
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection"
                               href="/projects/type/?projecttype=industrial-design">

                                Industrial Design
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection"
                               href="/projects/type/?projecttype=hospitality-and-leisure">

                                Hospitality and Leisure
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/projects/type/?projecttype=mixed-use">

                                Mixed Use
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/projects/type/?projecttype=residential">

                                Residential
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/projects/type/?projecttype=retail">

                                Retail
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/projects/type/?projecttype=urban-design">

                                Urban Design
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fp-footer-column" data-index="1">
                    <div class="fp-footer-header">
                        <h4 class="fp-fh-title">Expertise</h4>
                        <span class="fp-fh-chevron"></span>
                    </div>
                    <div class="fp-footer-links">
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/architecture/">

                                Architecture
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/environmental-engineering/">

                                Environmental Engineering
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/structural-engineering/">

                                Structural Engineering
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/sustainability/">

                                Sustainability
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/urban-design-and-landscape/">

                                Urban Design and Landscape
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/industrial-design/">

                                Industrial Design
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/workplace-consultancy/">

                                Workplace Consultancy
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/interiors/">

                                Interiors
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/applied-research-development/">

                                Applied Research &amp; Development
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/specialist-modelling-group/">

                                Specialist Modelling Group
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/materials-research-centre/">

                                Materials Research Centre
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/design-communications/">

                                Design Communications
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/visualisation-and-film/">

                                Visualisation and Film
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/communications/">

                                Communications
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/modelmaking/">

                                Modelmaking
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/project-management/">

                                Project Management
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/construction-review/">

                                Construction Review
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/expertise/retrofit/">

                                Retrofit
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fp-footer-column" data-index="2">
                    <div class="fp-footer-header">
                        <h4 class="fp-fh-title">News</h4>
                        <span class="fp-fh-chevron"></span>
                    </div>
                    <div class="fp-footer-links">
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/news/">

                                News
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/news/videos/">

                                Videos
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fp-footer-column" data-index="3">
                    <div class="fp-footer-header">
                        <h4 class="fp-fh-title">About us</h4>
                        <span class="fp-fh-chevron"></span>
                    </div>
                    <div class="fp-footer-links">
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/studio/">

                                Studio
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/studio/people/">

                                People
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection"
                               href="https://www.fosterandpartnerscareers.com/">

                                Careers
                            </a>
                        </div>
                        <div class="fp-footer-link-container">
                            <a class="fp-footer-link no-auto-detection" href="/contact/">

                                Contact
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fp-footer-lower">
                <div class="fp-footer-hygine">
                    <span class="fp-footer-copyright">&#169; Copyright 2021 Foster + Partners. All Rights Reserved.</span>
                    <a class="fp-hygine-link" href="/privacy-notice/">Privacy Notice</a>
                    <a class="fp-hygine-link" href="/cookies-policy/">Cookies Policy</a>
                    <a class="fp-hygine-link" href="/anti-slavery-and-human-trafficking-policy/">Anti-Slavery and Human
                        Trafficking Policy</a>
                </div>
                <div class="fp-footer-social">
                    <a href="https://twitter.com/FosterPartners"
                       class="fp-ftr-social-link fp-button-icon icon-twitter track-on-click"
                       target="_blank"
                       data-track-click-sub-type="share_twitter_click"
                       data-track-click-section="footer"
                       data-track-click-detail="channel_link">
                        <span class="icon__i"></span>
                    </a>
                    <a href="https://www.linkedin.com/company/foster-&amp;-partners/"
                       class="fp-ftr-social-link fp-button-icon icon-linkedin track-on-click"
                       target="_blank"
                       data-track-click-sub-type="share_linkedin_click"
                       data-track-click-section="footer"
                       data-track-click-detail="channel_link">
                        <span class="icon__i"></span>
                    </a>
                    <a href="https://www.instagram.com/fosterandpartners"
                       class="fp-ftr-social-link fp-button-icon icon-instagram track-on-click"
                       target="_blank"
                       data-track-click-sub-type="share_instagram_click"
                       data-track-click-section="footer"
                       data-track-click-detail="channel_link">
                        <span class="icon__i"></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection