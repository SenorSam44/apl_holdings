@extends('layouts.userapp')
@section('content')
    <style>
        body{
            background: black;
            color: white;
        }
        .fp-project-detail, .fp-section-tab, .fp-project-gallery, .pswp__scroll-wrap{
            background: black!important;

        }
        .fp-st-link, .fp-pd-stats__dl-list .fp-pd-stats__dl-dt, .fp-pd-stats__dl-list .fp-pd-stats__dl-dd{
            color: white!important;
        }

        .fp-st-link.selected{
            color: #CAA65B!important;
        }

        .fp-st-pointer{
            background: #CAA65B!important;
        }
        .fp-button-icon.icon-close.theme-white>.icon__i{
            background: url(/frontend/assets/img/cross-black.svg);
        }
        @media screen and (min-width: 1366px) {
            .fp-project-tabs .fp-at-content {
                padding: 20px 10vw 0;
                font-size: 1.4rem;
            }
        }

        @media screen and (max-device-width: 729px) {
            .fp-project-tabs .fp-at-content {
                margin: 0 8vw;
            }
            .component.fp-discipline-carousel.animate-on-scroll{
                margin-top: 15vh;
            }
        }
    </style>
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
                 data-files-widths="2732,2732,2732,2732,2732,2732,2732,2732,2732,2732,2732,2732,2732,2732"
                 data-files-heights="1536,1536,1536,1534,1536,1536,1536,1536,1536,1536,1534,1536,1536,1536"
                 data-gallery-files="{{$project_images_string}}"
                 data-files-colours="#83766B,#95867B,#A19993,#A7ADA5,#76604F,#AA9788,#7D6B5D,#83766B,#95867B,#A19993,#A7ADA5,#76604F,#AA9788,#7D6B5D"
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
                <select class="fp-project-tabs-select" style="background: black; color: white">
                    <option style="background: black; color: white" value="description">Description</option>
                    <option style="background: black; color: white" value="factsfigures">Facts and Figures</option>
                    <option style="background: black; color: white" value="gallery">Gallery</option>
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

                <div class="fp-section-slide-wrap">

                    <div class="fp-section-slide-item" data-tab="description">

                        <section class="fp-pd-stats">
                            <div class="fp-at-content">
                                {{$project->project_description}}
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
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">Address</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->address}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">Occupation Type</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->occupation_type}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">Classification</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->classification}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">No of Stories</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->no_of_stories}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">No of Car Parking</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->no_of_car_parking}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">No of Lifts</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->no_of_lifts}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">No of Stairs</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->no_of_stairs}}</span>
                                    </li>
                                    <li class="fp-pd-stats__dl-item">
                                        <span class="fp-pd-stats__dl-dt">No of generators</span>
                                        <span class="fp-pd-stats__dl-dd">{{$project->no_of_generator}}</span>
                                    </li>
                                </ul>
                            </div>
                        </section>

                    </div>

                    <div class="fp-section-slide-item" data-tab="team">
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

        let gallerySelect = document.querySelector('.fp-project-tabs-select');
        gallerySelect.addEventListener('change', (e)=>{
            if (e.target.value==="gallery"){
                document.querySelector('.gallery-btn').click();
            }
        })

        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector('.fp-gallery-overlay__close .fp-button-icon.icon-close').addEventListener('click', () => {
                document.querySelector('.fp-st-link[data-tab="description"]').click();
                gallerySelect.options[0].selected = true;
            });
        });

        document.querySelectorAll('.nav-link').forEach((link) => {
            link.addEventListener('click', () => {
                window.location.assign(link.getAttribute('data-target'));
            });
        });

        document.querySelectorAll('circle:not(.arc)').forEach((circle)=>{
            circle.setAttribute('fill', '#fff')
        });

        document.querySelectorAll('circle').forEach((circle)=>{
            circle.setAttribute('stroke', '#fff')
        });

        pannellum.viewer('panorama-360-view', {
            "type": "equirectangular",
            "panorama": "https://i.ibb.co/6PGHKkT/360-image.jpg",
            "autoLoad": true
        })
    </script>
@endsection