@extends('layouts.userapp')
@section('content')
    <section class="component fp-project-detail" data-component-name="project-detail">


        <section class="component fp-project-hero-video gradient-disabled fp-is-unavailable"
                 data-component-name="project-hero-video"
                 data-track-section="hero"
                 data-track-detail="narbo_via"
                 data-video-id="">
            <div class="fp-ph-image fp-grid-item__single no-zoom"
                 data-width="2732"
                 data-height="1360"
                 data-mobile-media="(orientation: portrait)"
                 data-mobile-width="1020"
                 data-mobile-height="1360">
                <div class="fp-dominant-colour" style="background-color: #818681;"></div>
                <div class="fp-content">
                    <picture>
                        <source sizes="100vw"
                                {{--                                srcset="/media/2641972/hero_2018_fp708111.jpg?quality=85&amp;height=1360&amp;crop=31.3323572474378%2C0%2C31.3323572474378%2C100&amp;stretch=false&amp;cropmode=percentage 1020w"--}}
                                srcset="{{asset($project->project_image1)}}"
                                media="(orientation: portrait)">
                        <img class="fp-content__img is-hidden is-blurred centre-centre"
                             sizes="100vw"
                             {{--                             srcset="/media/2641972/hero_2018_fp708111.jpg?width=768&quality=85 768w,--}}
                             {{--                                  /media/2641972/hero_2018_fp708111.jpg?width=1350&quality=85 1350w,--}}
                             {{--                                  /media/2641972/hero_2018_fp708111.jpg?width=1920&quality=85 1920w,--}}
                             {{--                                  /media/2641972/hero_2018_fp708111.jpg?width=3840&quality=85 3840w"--}}
                             srcset="{{asset($project->project_image1)}}"
                             alt="Narbo Via">
                    </picture>
                </div>
                <div class="fp-ph-gradient"></div>
                <div class="fp-ph-copy">
                    <h6 class="fp-ph-strapline">{{substr($project->end_date, 6)}} - {{$project->short_address}}</h6>
                    <h1 class="fp-ph-title">{{$project->project_title}}</h1>
                    <button type="button" class="fp-button-icon icon-play fp-phv-dropback__cta"><span
                                class="icon__i"></span></button>
                </div>
                <div class="fp-spacer"></div>
            </div>
            <div class="fp-ph-project-types">
                <a href="/projects/type/?projecttype={{$project->classification}}"
                   class="fp-button-primary fp-bp-white fp-ph-project-type">{{$project->classification}}</a>
            </div>
            <div class="fp-phv-video-overlay">
                <div class="fp-phv-video-overlay__wrapper">
                    <div class="fp-phv-video-overlay__holder"></div>
                </div>
                <div class="fp-phv-video-overlay__close">
                    <button type="button" class="fp-button-icon icon-close theme-grey close-drawer-btn "><span
                                class="icon__i"></span>
                    </button>
                </div>
            </div>
        </section>


        <div class="fp-pd-project-types">
            <h6 class="fp-pd-types-title">Categories</h6>
            <a href="/projects/type/?projecttype={{$project->classification}}" type="button"
               class="fp-button-primary fp-pd-project-type">{{$project->classification}}</a>
        </div>


        <section class="component fp-project-gallery  track-on-scroll" data-component-name="project-gallery"
                 data-files-widths="2732,2732,2732,2732,2732,2732,2732"
                 data-files-heights="1536,1536,1536,1534,1536,1536,1536"
                 data-gallery-files="{{$project_images_string}}"
                 data-files-colours="#83766B,#95867B,#A19993,#A7ADA5,#76604F,#AA9788,#7D6B5D"
                 data-track-section="unmasked_hero"
                 data-track-detail="narbo_via"
                 data-track-scroll-sub-type="gallery_inview"
                 data-track-scroll-section="unmasked_hero"
                 data-track-scroll-detail="narbo_via"
                 data-id="gallery">
            <div class="fp-pg-mask">
                <div class="fp-pg-mask__before"></div>
                <div class="fp-pg-mask__after"></div>
                <img sizes="100vw"
                     {{--                     srcset="/media/2641973/2018_fp708163.png?width=768&quality=85 768w,--}}
                     {{--                            /media/2641973/2018_fp708163.png?width=1350&quality=85 1350w,--}}
                     {{--                            /media/2641973/2018_fp708163.png?width=1920&quality=85 1920w,--}}
                     {{--                            /media/2641973/2018_fp708163.png?width=3840&quality=85 3840w"--}}
                     srcset="{{asset($project->project_image2)}}"
                     class="fp-pg-image__source"
                     alt="Narbo Via">
            </div>
            <div class="fp-pg-dropback">
                <div class="fp-section-title fp-pg-dropback__cta">
                    <button type="button" class="fp-button-primary gallery-btn" style="display: none">Gallery</button>
                </div>
            </div>
        </section>

        <section class="component fp-project-tabs animate-on-scroll"
                 data-animation-type="fadeUp"
                 data-component-name="project-tabs">

            <div class="fp-select-style-1">
                <select class="fp-project-tabs-select">
                    <option value="description">Description</option>
                    <option value="factsfigures">Facts and Figures</option>
                    <option value="gallery">Gallery</option>
                </select>
            </div>

            <div class="component fp-section-tab fp-st-inline"
                 data-component-name="section-tab"
                 data-content-reference="project">

                <div class="fp-st-wrap">

                    <ul class="fp-st-list">
                        <li class="fp-st-list-item">
                            <a href="#"
                               title="Description"
                               class="fp-st-link selected"
                               data-tab="description">Description</a>
                        </li>

                        <li class="fp-st-list-item">
                            <a href="#"
                               class="fp-st-link "
                               title="Facts and Figures"
                               data-tab="factsfigures">Facts and Figures</a>
                        </li>

                        <li class="fp-st-list-item">
                            <a href="#"
                               title="Gallery"
                               class="fp-st-link"
                               data-tab="team">Gallery</a>
                        </li>
                    </ul>

                    <div class="fp-st-indicator">
                        <span class="fp-st-pointer"></span>
                    </div>

                </div>

            </div>

            <div class="fp-section-slide component"
                 data-component-name="section-slide"
                 data-history-managed="false"
                 data-content-reference="project"
                 data-swipe-behaviour="true">

                <div class="fp-section-loader"></div>

                <div class="fp-section-slide-wrap">

                    <div class="fp-section-slide-item" data-tab="description">

                        <section class="fp-pd-stats">
                            <div class="fp-at-content">
                                {{$project->project_description}}
                                {{--                                <ul class="fp-pd-stats__cite-list fp-links-primary">--}}
                                {{--                                    <li class="fp-pd-list-citation fp-list-link">--}}
                                {{--                                        <a href="/description/archive/2021/12/narbo-via-narbonne-s-new-museum-of-roman-antiquities-inaugurated/"--}}
                                {{--                                           class="track-on-click"--}}
                                {{--                                           data-track-click-sub-type="press_click"--}}
                                {{--                                           data-track-click-section="main"--}}
                                {{--                                           data-track-click-detail="/description/archive/2021/12/narbo-via-narbonne-s-new-museum-of-roman-antiquities-inaugurated/">--}}
                                {{--                                            <cite class="fp-pd-list-citation__date">13 December 2021</cite>--}}
                                {{--                                            <cite class="fp-pd-list-citation__title">--}}
                                {{--                                                <span class="fp-pd-link-text">Narbo Via, Narbonne’s new museum of Roman antiquities inaugurated</span>--}}
                                {{--                                            </cite>--}}
                                {{--                                        </a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="fp-pd-list-citation fp-list-link">--}}
                                {{--                                        <a href="/description/archive/2018/01/narbonne-s-museum-of-antiquities-tops-out/"--}}
                                {{--                                           class="track-on-click"--}}
                                {{--                                           data-track-click-sub-type="press_click"--}}
                                {{--                                           data-track-click-section="main"--}}
                                {{--                                           data-track-click-detail="/description/archive/2018/01/narbonne-s-museum-of-antiquities-tops-out/">--}}
                                {{--                                            <cite class="fp-pd-list-citation__date">30 January 2018</cite>--}}
                                {{--                                            <cite class="fp-pd-list-citation__title">--}}
                                {{--                                                <span class="fp-pd-link-text">Narbonne’s museum of antiquities tops out</span>--}}
                                {{--                                            </cite>--}}
                                {{--                                        </a>--}}
                                {{--                                    </li>--}}
                                {{--                                </ul>--}}
                            </div>
                        </section>

                    </div>

                    <div class="fp-section-slide-item" data-tab="factsfigures">

                        <section class="fp-pd-stats">
                            <div class="fp-at-content">
                                <ul class="fp-pd-stats__dl-list">
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">Appointment</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->start_date}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">Completion</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->end_date}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">Area</span>
                                        {{--                                        <span class="fp-pd-stats__dl-dd">8,765m&sup2;</span>--}}
                                        <span class="fp-pd-stats__dl-dd">{{$project->land_area}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">Total apartment</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->no_of_apartment}} apartments</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">Apartment Size</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->apartment_size}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">Reserved water tank</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->water_reserve}}</span>
                                    </li>
                                </ul>
                            </div>
                        </section>

                    </div>

                    <div class="fp-section-slide-item" data-tab="team">
{{--                        <section class="fp-pd-stats">--}}
{{--                            <div class="fp-team-grid">--}}
{{--                                <div class="fp-tg-wrap">--}}
{{--                                    <ul class="fp-tg-list">--}}
{{--                                        <li class="fp-tg-list-item">--}}
{{--                                            <a class="fp-tg-link no-smoothState track-on-click"--}}
{{--                                               href="/studio/grant-brooker/"--}}
{{--                                               data-track-click-sub-type="team_click"--}}
{{--                                               data-track-click-section="main"--}}
{{--                                               data-track-click-detail="Grant Brooker">Grant Brooker</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="fp-tg-list-item">--}}
{{--                                            <a class="fp-tg-link no-smoothState track-on-click"--}}
{{--                                               href="/studio/spencer-de-grey/"--}}
{{--                                               data-track-click-sub-type="team_click"--}}
{{--                                               data-track-click-section="main"--}}
{{--                                               data-track-click-detail="Spencer de Grey">Spencer de Grey</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="fp-tg-list-item">--}}
{{--                                            <a class="fp-tg-link no-smoothState track-on-click"--}}
{{--                                               href="/studio/andy-bow/"--}}
{{--                                               data-track-click-sub-type="team_click"--}}
{{--                                               data-track-click-section="main"--}}
{{--                                               data-track-click-detail="Andy Bow">Andy Bow</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="fp-tg-list-item">--}}
{{--                                            <a class="fp-tg-link no-smoothState track-on-click"--}}
{{--                                               href="/studio/piers-heath/"--}}
{{--                                               data-track-click-sub-type="team_click"--}}
{{--                                               data-track-click-section="main"--}}
{{--                                               data-track-click-detail="Piers Heath">Piers Heath</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="fp-tg-list-item">--}}
{{--                                            <a class="fp-tg-link no-smoothState track-on-click"--}}
{{--                                               href="/studio/roger-ridsdill-smith/"--}}
{{--                                               data-track-click-sub-type="team_click"--}}
{{--                                               data-track-click-section="main"--}}
{{--                                               data-track-click-detail="Roger Ridsdill Smith">Roger Ridsdill--}}
{{--                                                Smith</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="fp-tg-list-item">--}}
{{--                                            <a class="fp-tg-link no-smoothState track-on-click"--}}
{{--                                               href="/studio/angelika-kovacic/"--}}
{{--                                               data-track-click-sub-type="team_click"--}}
{{--                                               data-track-click-section="main"--}}
{{--                                               data-track-click-detail="Angelika Kovacic">Angelika Kovacic</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="fp-tg-list-item">--}}
{{--                                            <a class="fp-tg-link no-smoothState track-on-click"--}}
{{--                                               href="/studio/francois-curato/"--}}
{{--                                               data-track-click-sub-type="team_click"--}}
{{--                                               data-track-click-section="main"--}}
{{--                                               data-track-click-detail="Fran&#231;ois Curato">Fran&#231;ois--}}
{{--                                                Curato</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="fp-tg-list-item">--}}
{{--                                            <a class="fp-tg-link no-smoothState track-on-click"--}}
{{--                                               href="/studio/hugh-stewart/"--}}
{{--                                               data-track-click-sub-type="team_click"--}}
{{--                                               data-track-click-section="main"--}}
{{--                                               data-track-click-detail="Hugh Stewart">Hugh Stewart</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="fp-tg-list-item">--}}
{{--                                            <a class="fp-tg-link no-smoothState track-on-click"--}}
{{--                                               href="/studio/jonathan-habert/"--}}
{{--                                               data-track-click-sub-type="team_click"--}}
{{--                                               data-track-click-section="main"--}}
{{--                                               data-track-click-detail="Jonathan Habert">Jonathan Habert</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </section>--}}
                    </div>

                </div>

            </div>

        </section>

        <section class="component fp-discipline-carousel animate-on-scroll"
                 data-component-name="discipline-carousel"
                 data-animation-type="fadeUp">
            <h2 class="fp-h3 fp-dc-title">More projects</h2>
            <div class="fp-dc-list-wrapper">
                <div class="fp-dc-list">
                    @foreach($more_projects as $more_project )
                        <div class="fp-dc-list__item">
                            <div data-target="/projects/{{$more_project->id}}/" class="fp-dc-content nav-link">
                                <div class="fp-dc-background-colour" style="background-color: #54646F"></div>
                                <div class="fp-dc-content__image">
                                    <img sizes="(min-width: 768px) 50vw, 100vw"
                                         srcset="/{{$more_project->project_image1}}"
                                         class="fp-content"
                                         alt="{{$more_project->project_title}}">
                                </div>
                                <div class="fp-dc-content__copy">
                                    <span class="fp-dc-content__copy-subtitle">{{explode( ',', $more_project->address)[count(explode( ',', $more_project->address))-1]}}</span>

                                    <h2 class="fp-dc-content__copy-title">{{$more_project->project_title}}</h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="fp-dc-dots"></div>
            </div>
        </section>
    </section>

    <script>
        let gallerytab = document.querySelector('.fp-st-link[data-tab="team"]');
        gallerytab.addEventListener('click', () => {
            document.querySelector('.gallery-btn').click();

        });
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector('.fp-gallery-overlay__close .fp-button-icon.icon-close').addEventListener('click', () => {
                document.querySelector('.fp-st-link[data-tab="description"]').click();
            });
        });

        document.querySelectorAll('.nav-link').forEach((link) => {
            link.addEventListener('click', () => {
                window.location.assign(link.getAttribute('data-target'));
            });
        });
    </script>
@endsection