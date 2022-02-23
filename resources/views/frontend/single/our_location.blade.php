@extends('layouts.userapp')

@push('head-script')
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.min.css">
    <style>
        .nav-link{
            padding: 0;
        }

        .contact.section-padding{
            background: black;
        }

        .contact.section-padding a, h2, .contact-info .contact-info-title, p, .breadcrumb-item, .breadcrumb-item a{
            color: #CAA65B!important;
        }
        p a, .breadcrumb-item, .breadcrumb-item a{
            opacity: 1;
        }

        @media screen and (min-width: 1024px){
            .fp-navigation .fp-nav-list-wrap {
                top: 25px;
            }
        }

    </style>
@endpush

@section('content')
    <script src="{{ asset('frontend')}}/assets/js/core.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/script.js"></script>
    <div class="bg-dark" style="margin-top: 78px; height: calc(100vh - 78px)">
        <div class="map-wrapper">
        </div>

        <div class="small-footer mt-0 d-md-block d-none" style="height: 29vh;position: fixed; bottom: 0;">
            <div class="container-social  pt-0">
                <div class="box-wrapper">
                    @foreach($our_locations as $key => $our_location)
                        <div style="position: relative; cursor: pointer;" onclick="locationClicked({{$key}})">
                            <img class="location-box"
                                 src="{{strlen($our_location->logoUrl)>2 ? $our_location->logoUrl :'https://upload.wikimedia.org/wikipedia/commons/b/b6/Image_created_with_a_mobile_phone.png'}}">
                            <div class="location-box-label" style="font-size: 2vh">{{$our_location->name}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container-copyright">
                <div class="left1">
                    Copyright &copy; 2021 APL Holdings. All rights are reserved.
                </div>
                <div class="right1">
                    Developed by Aamiri E-Ccentric Services.
                </div>
            </div>
{{--            @include('common.footer')--}}
        </div>

        <!-- =======================* Section Start *===================== -->
        <section class="clients section-padding d-md-none d-block p-0" style="position: fixed; bottom: 0;">
            <div class="container" style="height: calc(100vh - 65vh - 3.125rem); display: flex; align-items: center; max-width: 100vw; width: 100vw">
                <div id="office-location-slider" class="owl-carousel owl-theme m-auto">
                    @foreach($our_locations as $key => $our_location)
                        <div class="item" style="position: relative;">
                            <img class="location-box" onclick="locationClicked({{$key}})"
                                 src="{{strlen($our_location->logoUrl)>2 ? $our_location->logoUrl :'https://upload.wikimedia.org/wikipedia/commons/b/b6/Image_created_with_a_mobile_phone.png'}}">
                            <div class="location-box-label">{{$our_location->name}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container-copyright">
                <div class="left1">
                    Copyright &copy; 2021 APL Holdings. All rights are reserved.
                </div>
                <div class="right1">
                    Developed by Aamiri E-Ccentric Services.
                </div>
            </div>
            {{--            @include('common.footer')--}}
        </section>
        <!-- =======================* Section End *======================= -->

    </div>

    <style>
        .map-wrapper {
            width: 100%;
            height: 55vh;
        }

        .box-wrapper {
            display: flex;
            justify-content: center;
        }

        .location-box {
            cursor: pointer;
            height: 15vh;
            width: 15vh;
            margin: 20px;
            border: 1px solid #d1d1d1;
            border-radius: 10px;
            box-shadow: 3px 3px 5px 0 black;
        }

        .location-box-label {
            position: absolute;
            bottom: -10%;
            transform: translateY(-50%);
            left: 0;
            width: 70%;
            /*background: #ffffff;*/
            text-align: center;
            color: #CAA65B;
            font-weight: bold;
            margin: 0 15%;
        }

        @media (max-width: 769px) {
            .map-wrapper {
                height: 50vh;
            }

            .location-box {
                width: 100px;
            }
            .location-box-label {
                width: 100%;
                top: 100%;
                margin: 0 20px;
            }
            #office-location-slider .owl-stage-outer{
                margin-top: 3vh;
            }
        }
    </style>

    <script type="text/javascript">
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        let map, infoWindow, currentLocation, marker= null, currentMarker;
        let directionsService;
        let directionsRenderer;

        // Initialize and add the map

        function initMap() {
            // const defaultLocation = {lat: 22.341900, lng: 91.815536};
            map = new google.maps.Map(document.querySelector(".map-wrapper"), {
                // center: defaultLocation,
                zoom: 12,
                mapId: 'c78daa10d5a9ecd6',
            });

            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);

            getCurrentLocation();
        }

        function locationClicked(index) {
            let locations = <?php print_r(json_encode($our_locations)) ?>;

            if (marker !== null){
                marker.setMap(null);
            }

            marker = new google.maps.Marker({
                position: {
                    lat: locations[index].latitude,
                    lng: locations[index].longitude,
                },
                map: map,
                text: {"text": locations[index].name, color: "white"},
                label: {"text": locations[index].name, color: "white"},

            });

            if (!directionsService || !directionsRenderer) {
                directionsService = new google.maps.DirectionsService();
                directionsRenderer = new google.maps.DirectionsRenderer();
                directionsRenderer.setMap(map);
            }

            var request = {
                origin: currentLocation,
                destination: {
                    lat: locations[index].latitude,
                    lng: locations[index].longitude,
                },
                travelMode: google.maps.TravelMode.DRIVING,
            };
            directionsService.route(request, function (result, status) {
                directionsRenderer.setOptions({
                    polylineOptions: {
                        strokeColor: '#CAA65B'
                    }
                })
                directionsRenderer.setDirections(result);
                if (status === "ZERO_RESULTS") {
                    window.alert("Directions not found ");
                }
            });

        }

        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };

                        currentMarker = new google.maps.Marker({
                            position: pos,
                            map: map,
                            title: {"text": "Your location", color: "white"},
                            label: {"text": "Your location", color: "white"},
                        });
                        map.setCenter(pos);
                        currentLocation = pos;
                    },
                    () => {
                        handleLocationError(true, infoWindow, map.getCenter());
                    }
                );
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(
                browserHasGeolocation
                    ? "Error: The Geolocation service failed."
                    : "Error: Your browser doesn't support geolocation."
            );
            infoWindow.open(map);
        }
    </script>

    <script src="http://maps.google.com/maps/api/js?key={{ config('services.google.map_key') }}&callback=initMap&libraries=&v=weekly"
            async>
    </script>

    <style type="text/css">

        .container-social {
            width: 100%;
            text-align: center;
            float: left;
            height: 85%;
            color: #0d103d !important;
            font-size: 14px;
            margin: 0 auto;
            /*border: red 0px solid;*/
            /*padding-top: 20px;*/
            padding-left: 25vw;
            padding-right: 25vw;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .container-copyright {
            width: 100%;
            text-align: center;
            float: left;
            height: 30%;
            background: #000;
            border: red 0px solid;
            display: flex;
        }

        .container-social ul {
            border: blue 0 solgrayid;
            display: flex;
        }

        .container-social ul li {
            padding: 20px;
            text-align: center;
            color: #CAA65B;
            border: yellow 0px solid;
            margin: 0 auto;
        }

        .container-social ul li i {
            color: #b3b3b3;
        }

        .container-social ul li i:hover {
            color: #f5b316;
        }

        .left1 {
            width: 50%;
            float: left;
            margin: 0;
            text-align: left;
        }

        .right1 {
            width: 50%;
            float: right;
            margin: 0;
            text-align: right;

        }

        .left1, .right1 {
            margin: 0 auto;
            padding: 10px;
            font-size: 14px;
            color: #CAA65B;
            background: black;
        }

        .left1 p:hover {
            color: #0d103d;
        }

        .right1 p:hover {
            color: #0d103d;
        }

        @media (max-width: 768px) {

            .container-social{
                height: 70%;
            }
            .container-copyright {
                width: 100vw;
                text-align: left;
                /*background: #dedede;*/
                border: red 0px solid;
                /*padding: 10px;*/
                justify-content: space-between;
            }

            .left1, .right1 {
                font-size: 0.5rem;
                /*padding: 0px;*/
                margin: 0;
                width: 50vw;
            }

            /** SOCIAL NETWORKING LINKS in MOBILE*/
            .container-social {
                width: 100%;
                text-align: center;
                float: left;
                height: 70%;
                color: #0d103d !important;
                font-size: 14px;
                margin: 0 auto;
                border: red 0px solid;
                padding-top: 20px;
                padding-left: 20px;
                padding-right: 20px;
            }


            .container-social ul {
                border: blue 0px solid;
                display: flex;
            }

            .container-social ul li {
                padding: 20px;
                text-align: center;
                color: #b3b3b3;
                border: yellow 0px solid;
                margin: 0 auto;
            }

            .container-social ul li i {
                color: #b3b3b3;
            }

            .container-social ul li i:hover {
                color: #f5b316;
            }

        }
    </style>
@endsection

