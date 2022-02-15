@extends('layouts.userapp')
@section('content')
    <style>
        .fp-header{
            background: none!important;
        }


        .fp-nav-list-item{
            cursor: pointer;
            color:white;
        }

        .nav-link a, .fp-nav-list-item a{
            font-size: 14px;
            color: white!important;
            font-weight: normal;
        }
        /*@media screen and (max-device-width: 729px){*/
        /*    .component.fp-logo{*/
        /*        width: 50vw;*/
        /*        height: auto;*/
        /*    }*/

        /*    .component.fp-logo .fp-svg-logo{*/
        /*        width: 35vw;*/
        /*        height: auto;*/
        /*    }*/

        /*    .fp-nav-list-item a{*/
        /*        font-size: 40px;*/
        /*    }*/

        /*    .fp-hp-figure__title{*/
        /*        font-size: 40px!important;*/
        /*    }*/
        /*    .fp-hp-figure__body{*/
        /*        font-size: 35px!important;*/
        /*    }*/
        /*    .fp-hp-figure .fp-hp-figure__title {*/
        /*        margin-bottom: 25px;*/
        /*    }*/
        /*}*/
    </style>
    <div class="fp-carousel-overlay"></div>
    <div class="component fp-carousel" data-component-name="carousel"
         data-video-urls="{{$bannerVideoString}}"
         data-video-urls-low="{{$bannerVideoString}}">
        <ul class="fp-slide-container">

            @foreach($banners as $key=> $banner)
                <li aria-labelledby="home-title-slide{{$key}}">
                    <a href="{{$banner->banner_redirect_link}}"
                       class="fp-carousel-slide fp-carousel-slide__image-0">
                        <picture>
                            <source sizes="100vw"
                                    srcset="{{$banner->banner_image}}?quality=85&amp;height=2160&amp;crop=28.90625%2C0%2C28.90625%2C100&amp;stretch=false&amp;cropmode=percentage 1620w"
                                    media="(orientation: portrait)">
                            <img sizes="100vw"
                                 srcset="{{$banner->banner_image}}?width=768&quality=85 768w,
                             {{$banner->banner_image}}?width=1350&quality=85 1350w,
                             {{$banner->banner_image}}?width=1920&quality=85 1920w,
                             {{$banner->banner_image}}?width=3840&quality=85 3840w"
                                 class="fp-carousel-image is-feature"
                                 alt="Apple at The Grove – a dynamic hall of illusions that captures the vitality of Los Angeles"
                                 style="object-position: 50% 50%">
                        </picture>
                        <img sizes="(min-width: 768px) 100vw, 1px"
                             srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 5w,
                         {{$banner->banner_image}}?width=768&quality=85 768w,
                         {{$banner->banner_image}}?width=1350&quality=85 1350w,
                         {{$banner->banner_image}}?width=1920&quality=85 1920w"
                             class="fp-carousel-image is-cover"
                             alt="Apple at The Grove – a dynamic hall of illusions that captures the vitality of Los Angeles">
                        <video loop muted playsinline class="fp-video"></video>
                    </a>
                </li>
            @endforeach

        </ul>
        <div class="fp-slide-arrows is-left"></div>
        <div class="fp-slide-arrows is-right"></div>
        <div class="fp-slide-labels">
            <ul class="fp-slide-labels__titles">
                @foreach($banners as $key=> $banner)
                    <li id="home-title-slide{{$key}}">
                        <figure class="fp-relative fp-hp-figure fp-news">
                            <cite class="fp-hp-figure__title">{{\Carbon\Carbon::parse($banner->banner_date)->format('jS \\of F Y')}}</cite>
                            <h3 class="fp-hp-figure__body">{{$banner->banner_title}}</h3>
                        </figure>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="fp-slide-actions">
            <ul class="fp-slide-actions__cards">
                <li>
                    @foreach($banners as $banner)
                        <a href="{{$banner->banner_redirect_link}}"
                           class="fp-relative fp-button-primary fp-bp-white" style="display: none"><span class="icon__i"></span>Read more</a>
                    @endforeach
                </li>
            </ul>
        </div>
        <div class="fp-slide-dots"></div>
    </div>


    <div class="fp-homepage-overlay component" data-component-name="homepage-overlay"></div>


    <script src="./js/app.js"></script>

    <script>
        document.querySelectorAll('.fp-nav-list-item').forEach((link) => {
            link.addEventListener('click', () => {
                window.location.assign(link.getAttribute('data-target'));
            });
        });
    </script>


@endsection