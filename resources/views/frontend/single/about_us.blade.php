@extends('layouts.userapp')

@section('content')
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>

        body {
            font-family: "Open Sans", "Helvetica", "Arial";
            background: black;

        }

        ul li a {
            font-weight: normal;
        }

        .nav-link {
            padding: 0;
        }

        .contact.section-padding {
            background: black;
        }

        .contact.section-padding a, h2, .contact-info .contact-info-title, p, .breadcrumb-item, .breadcrumb-item a {
            color: white !important;
        }

        p a, .breadcrumb-item, .breadcrumb-item a {
            opacity: 1;
        }

        ol li::before, ol .fp-list-item::before {
            content: none;
        }

        .form-control, .form-control:focus, .form-control:hover {
            background: black;
            border: none;
            border-bottom: 1px solid white;
            box-shadow: none;
            color: white;

        }

        .section-title:before, .btn-primary {
            background: #CAA65B;
        }

        .btn-primary {
            border: none;
        }

        .contact-info .contact-info-item:before, .btn-primary:hover {
            color: #CAA65B;
        }

        .pagehead .pagehead-breadcrumb .breadcrumb .breadcrumb-item {
            color: #ccc;
            font-size: 14px;
            letter-spacing: 2px;
        }

        .breadcrumb .breadcrumb-item:first-child {
            padding-left: 0;
        }

        .pagehead-breadcrumb h1:before {
            content: "";
            position: absolute;
            width: 50px;
            height: 1px;
            bottom: 50%;
            left: calc(50% - 25px);
            border-bottom: 1px solid white;
        }

        @media screen and (min-width: 1024px) {
            .fp-navigation .fp-nav-list-wrap {
                top: 25px;
            }

            .pagehead {
                padding: 15vh 0;
            }
        }

        .fp-header {
            background-color: transparent !important;
        }

        /*tab*/
        .tab-container {
            height: 100%;
            border-right: 1px solid gray;
            padding-right: 0;
        }

        .tab-container .tab {
            padding: 20px 0;
            cursor: pointer;
        }

        .tab-container .tab.active {
            border-right: 2px solid white;
        }

        .tab-wrapper .tab-content:not(.active) {
            display: none;
        }

        .tab-wrapper .tab-content.active {
            display: block;
        }

        /* accordian overwrite*/
        .accordion-item, .accordion-button, .accordion-button:focus, .accordion-button:not(.collapsed) {
            background: black;
            color: white;
            box-shadow: none;
        }

        .accordion-item .accordion-header {
            border-style: solid;
            border-color: #cccccc;
            border-width: 1px 0;
        }


        .accordion-button {
            font-size: 35px;
            text-transform: capitalize;
            padding: 0 5%;
        }

        .accordion-button::after {
            background-image: url(./frontend/assets/img/plus-solid.svg) !important;
        }

        .accordion-button.collapsed::after {
            background-image: url(./frontend/assets/img/minus-solid.svg) !important;
        }

        .accordion-header {
            margin: 0;
        }

        /* slider footer */
        .clients {
            background: #d6ab60;
        }

        .item {
            cursor: pointer;
        }

        .item img {
            margin-top: 5px;
            margin-bottom: 0;
            /*content : "";*/
            /*width   : 150%;  !* or 100px *!*/
            /*border-bottom:1px solid white;*/
        }

        .item:hover img {
            margin-top: 0;
            margin-bottom: 5px;
        }

        .image-underline {
            position: absolute;
            bottom: 0;
            left: calc(50% - 15px);
            width: 0px;
            height: 2px;
            background: white;
            transform: translateX(50%) scaleX(0.5) translateX(-100%) scaleX(0);
            transition: transform 0.5s ease-out;
        }

        .item:hover .image-underline {
            transform: unset;
            width: 30px;
        }

        /* review section*/
        .carousel-image {
            height: 150px;
            width: 150px;
            border-radius: 150px;
            object-fit: cover;
            margin: auto;
        }

        .quote {
            width: 50%;
            margin: 50px auto 0;
        }

        .person-name {
            margin-left: 75%;
            margin-top: 20px;
        }

        /*.show-on-scroll, .show-on-scroll:not(.is-visible){*/
        /*    opacity: 0;*/
        /*    transition: opacity 2s ease-in;*/
        /*}*/

        /*.show-on-scroll.is-visible{*/
        /*    opacity: 1;*/
        /*}*/

        p.show-on-scroll {
            transform: translateX(200%) scaleX(1);
            transition: transform 2s ease-in;
        }

        p.show-on-scroll.is-visible {
            transform: unset;
        }

        img.show-on-scroll {
            transition: transform 2s ease-in;
        }

        img.show-on-scroll:not(.is-visible) {
            transform: translateX(-300%) scaleX(1);
        }

        img.show-on-scroll.is-visible {
            transform: unset;
        }

        .show-on-scroll.sotc-brown-back {
            opacity: 0;
            transition: opacity 1s ease-in;
        }

        .show-on-scroll.sotc-brown-back.is-visible {
            opacity: 0.7;
        }

        .about-heading {
            font-size: 40px;
            word-spacing: 20px;
        }

        .about-large-image {
            height: calc(25vw - 4em);
        }

        .medium-text {
            font-size: 16px;
        }

        .paragraph-text, .paragraph-text li {
            font-size: 14px;
            list-style: none;
        }

        .paragraph-text li::before {
            content: "\2022"; /* Add content: \2022 is the CSS Code/unicode for a bullet */
            color: white; /* Change the color */
            font-weight: bold; /* If you want it to be bold */
            display: inline-block; /* Needed to add space between the bullet and the text */
            width: 1em; /* Also needed for space (tweak if needed) */
            top: 0;
            font-size: 22px;
        }

        /*.work-process-section*/

        @media screen and (max-width: 729px) {
            .about-heading {
                font-size: 30px;
                word-spacing: unset;
            }

            .about-large-image {
                height: auto;
                padding: 2rem;
            }
        }

    </style>

    <!-- =======================* Section Start *======================= -->
    <section class="pagehead bg-1" style="background: black">
        <div class="container">
            <nav aria-label="breadcrumb" class="pagehead-breadcrumb">
                <h1 class="text-white text-center ">About us</h1>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <div style="color: white; background: black">
        <p style="font-size: 14px" class="text-white m-5 p-3 text-md-center text-justify">Lorem Ipsum is simply dummy
            text of the
            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
            passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
            Lorem Ipsum.</p>

        <div style="position: relative" class="sotc-wrapper">
            <img style="width: 100vw; height: 100%; opacity: 0.3" src="./frontend/assets/img/user-img-3.jpg"
                 alt="image of building"/>
            <div style="background: #876524; position: absolute; bottom: 1rem; width: 100vw;"
                 class="show-on-scroll sotc-brown-back">

            </div>
            <div style="position: absolute; top: 0; width: calc(100vw - 30px)" class="sotc-main-cotent">
                <div class="row py-md-3 py-0">
                    <div class="offset-md-2 col-md-2 offset-0 col-12 text-right">
                        <img class="about-large-image ml-3 ml-md-0 show-on-scroll w-100 mt-3"
                             src="./frontend/assets/img/user-img-3.jpg"
                             alt="image of building"/>
                    </div>
                    <div class="pl-5 ml-md-0 ml-2 pr-md-0 pr-4 col-md-6 col-12">
                        <p style="text-transform: uppercase; line-height: 1.4"
                           class="about-heading show-on-scroll text-white">
                            Story of the Company
                        </p>

                        <p class="show-on-scroll text-white mt-md-3 pt-md-5 text-justify">Lorem Ipsum is simply dummy
                            text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially
                            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                            Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of
                            Lorem Ipsum.
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <section class="work-process-section row my-5 p-3">
            <div class="offset-md-2 offset-0 col-md-5 col-12">
                <h2 class="about-heading text-white">Work Process</h2>
                <h3 class="medium-text text-white">Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut aliquip
                    ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</h3>
                <div class="row tab-wrapper">
                    <ul class="col-4 tab-container">
                        @foreach($abouts as $key=>$about)
                            <li class="tab {{$key==0? 'active': ''}} ">{{$about->about_title}}</li>
                        @endforeach
                    </ul>
                    @foreach($abouts as $key=>$about)
                        <ul class="paragraph-text col-8 tab-content {{$key==0? 'active': ''}}">
                            <?php
                            $description = $about->about_description;
                            $description = preg_replace("/\r\n|\r|\n/", '</li><li>', $description);
                            echo '<li>', $description, '</li>';
                            ?>
                            {{--                            {{'<li>'.preg_replace("/\r\n|\r|\n/", '</li><li>', $about->about_description).'</li>'}}--}}
                        </ul>
                    @endforeach
                </div>

            </div>
            <div class="col-md-3 col-12">
                <img class="about-large-image h-100 w-100" src="./frontend/assets/img/user-img-3.jpg"
                     alt="image of building"/>
            </div>
        </section>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h1 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Synopsis of the<br> Company
                    </button>
                </h1>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div style="position: relative" class="sotc-wrapper">
                            <img style="width: 100vw; height: 100%; opacity: 0.3"
                                 src="./frontend/assets/img/user-img-3.jpg"
                                 alt="image of building"/>
                            <div style="background: #876524; position: absolute; bottom: 1rem; width: 100vw;"
                                 class="show-on-scroll sotc-brown-back">
                            </div>
                            <div style="position: absolute; top: 0;" class="sotc-main-cotent">
                                <div class="row py-3">
                                    <div class="offset-md-2 offset-0 col-md-2 col-12 text-right">
                                        <img class="about-large-image show-on-scroll w-100 mt-md-3 mt-0"
                                             src="./frontend/assets/img/user-img-3.jpg"
                                             alt="image of building"/>
                                    </div>
                                    <div class="pl-5 col-md-6 col-12">
                                        <p style="text-transform: uppercase; line-height: 1.4"
                                           class="about-heading show-on-scroll text-white">
                                            Story of the Company</p>

                                        <p class="show-on-scroll text-white mt-md-3 pt-md-5 text-justify">Lorem Ipsum is
                                            simply dummy text of
                                            the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text
                                            ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type
                                            specimen book. It has
                                            survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining
                                            essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset
                                            sheets containing
                                            Lorem Ipsum
                                            passages, and more recently with desktop publishing software like Aldus
                                            PageMaker including
                                            versions of
                                            Lorem Ipsum.
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text
                                            ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type
                                            specimen book. It has
                                            survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining
                                            essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset
                                            sheets containing
                                            Lorem Ipsum
                                            passages, and more recently with desktop publishing software like Aldus
                                            PageMaker including
                                            versions of
                                            Lorem Ipsum.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h1 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Director and CEO <br> Mr. Habib Chowdhury
                    </button>
                </h1>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div style="position: relative" class="sotc-wrapper">
                            <img style="width: 100vw; height: 100%; opacity: 0.3"
                                 src="./frontend/assets/img/user-img-3.jpg"
                                 alt="image of building"/>
                            <div style="background: #876524; position: absolute; bottom: 1rem; width: 100vw;"
                                 class="show-on-scroll sotc-brown-back">
                            </div>
                            <div style="position: absolute; top: 0; width: calc(100vw - 30px)" class="sotc-main-cotent">
                                <div class="row py-3">
                                    <div class="offset-md-2 offset-0 col-md-2 col-12 text-right">
                                        <img class="about-large-image show-on-scroll w-100 mt-md-3 mt-0"
                                             src="./frontend/assets/img/user-img-3.jpg"
                                             alt="image of building"/>
                                    </div>
                                    <div class="pl-5 col-md-6 col-12">
                                        <p style="text-transform: uppercase; line-height: 1.4"
                                           class="about-heading show-on-scroll text-white">
                                            Story of the Company
                                        </p>

                                        <p class="show-on-scroll text-white mt-md-3 pt-md-5 text-justify">Lorem Ipsum is
                                            simply dummy text of
                                            the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text
                                            ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type
                                            specimen book. It has
                                            survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining
                                            essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset
                                            sheets containing
                                            Lorem Ipsum
                                            passages, and more recently with desktop publishing software like Aldus
                                            PageMaker including
                                            versions of
                                            Lorem Ipsum.
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text
                                            ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type
                                            specimen book. It has
                                            survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining
                                            essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset
                                            sheets containing
                                            Lorem Ipsum
                                            passages, and more recently with desktop publishing software like Aldus
                                            PageMaker including
                                            versions of
                                            Lorem Ipsum.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h1 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Synopsis of the<br> Company
                    </button>
                </h1>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div style="position: relative" class="sotc-wrapper">
                            <img style="width: 100vw; height: 100%; opacity: 0.3"
                                 src="./frontend/assets/img/user-img-3.jpg"
                                 alt="image of building"/>
                            <div style="background: #876524; position: absolute; bottom: 1rem; width: 100vw;"
                                 class="show-on-scroll sotc-brown-back">
                            </div>
                            <div style="position: absolute; top: 0; width: calc(100vw - 30px)" class="sotc-main-cotent">
                                <div class="row py-3">
                                    <div class="offset-md-2 offset-0 col-md-2 col-12 text-right">
                                        <img class="about-large-image show-on-scroll w-100 mt-md-3 mt-0"
                                             src="./frontend/assets/img/user-img-3.jpg"
                                             alt="image of building"/>
                                    </div>
                                    <div class="pl-5 col-md-6 col-12">
                                        <p style="text-transform: uppercase; line-height: 1.4"
                                           class="about-heading show-on-scroll text-white">
                                            Story of the Company
                                        </p>

                                        <p class="show-on-scroll text-white mt-md-3 pt-md-5 text-justify">Lorem Ipsum is
                                            simply dummy text of
                                            the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text
                                            ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type
                                            specimen book. It has
                                            survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining
                                            essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset
                                            sheets containing
                                            Lorem Ipsum
                                            passages, and more recently with desktop publishing software like Aldus
                                            PageMaker including
                                            versions of
                                            Lorem Ipsum.
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text
                                            ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type
                                            specimen book. It has
                                            survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining
                                            essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset
                                            sheets containing
                                            Lorem Ipsum
                                            passages, and more recently with desktop publishing software like Aldus
                                            PageMaker including
                                            versions of
                                            Lorem Ipsum.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5">
            <h2 class="text-white text-center">What Our Clients Say</h2>
            <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($reviews as $key=>$review)
                        <div class="carousel-item {{$key==1? 'active': ''}}">
                            <img src="{{$review->user_image}}"
                                 class="d-block carousel-image" alt="...">
                            <p class="quote">
                                {{$review->review_description}}
                            </p>
                            <p class="person-name">{{$review->user_name}}<br><span
                                        style="color: #cccccc">{{$review->user_designation}}</span></p>
                        </div>
                    @endforeach
                    <div class="carousel-item">
                        <img src="https://phantom-marca.unidadeditorial.es/c539cc91d18e6c38f9a012895541fe05/resize/660/f/webp/assets/multimedia/imagenes/2022/01/04/16412921913965.jpg"
                             class="d-block carousel-image" alt="...">
                        <p class="quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p class="person-name">Alon Mask<br><span style="color: #cccccc">CEO of Amazon</span></p>

                    </div>
                    <div class="carousel-item">
                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                             class="d-block carousel-image" alt="...">
                        <p class="quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p class="person-name">Bill Gates <br><span style="color: #cccccc">CEO of Amazon</span></p>
                    </div>
                </div>
            </div>
        </div>

        <section class="clients section-padding">
            <div class="container">
                <div id="clients" class="owl-carousel owl-theme">
                    <div class="item" style="position: relative">
                        <img src="https://ratio.qodeinteractive.com/wp-content/uploads/2016/04/client-carousel-3-light.png"
                             alt="Clients"
                             class="img-fluid saturate-animate">
                        <div class="image-underline"></div>
                    </div>
                    <div class="item">
                        <img src="https://ratio.qodeinteractive.com/wp-content/uploads/2016/04/client-carousel-2-light.png"
                             alt="Clients"
                             class="img-fluid saturate-animate">
                        <div class="image-underline"></div>

                    </div>
                    <div class="item">
                        <img src="https://ratio.qodeinteractive.com/wp-content/uploads/2016/05/client-carousel-1-light.png"
                             alt="Clients"
                             class="img-fluid saturate-animate">
                        <div class="image-underline"></div>
                    </div>

                </div>
            </div>
        </section>

    </div>

    @include('common.footer')
    <script src="{{ asset('frontend')}}/assets/js/core.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script>
        // accordionBorderManage();
        adjustingSOTCHeight();
        tabactions();
        handle_about_heading();

        // function accordionBorderManage(){
        //     document.querySelectorAll('.accordion-item .accordion-button').forEach((item, index) =>{
        //         item.addEventListener('click', ()=>{
        //             if (index>0 && document.querySelectorAll('.accordion-item .accordion-button')[index-1].classList.contains('collapsed') && item.classList.contains('collapsed')){
        //                 item.style.borderWidth = '0 0 1px 0';
        //                 item.style.borderTop = 'none';
        //             }else{
        //                 item.style.borderTop = 'none';
        //             }
        //             // if (index>0 && !item.classList.contains('collapsed')){
        //             //     item.style.borderWidth = '1px 0';
        //             //     console.log('ga');
        //             // }else if(index>0 && item.classList.contains('collapsed')){
        //             //     item.style.borderWidth = '0 0 1px 0';
        //             //     console.log('hi');
        //             // }else{
        //             //     console.log('fafd');
        //             // }
        //         });
        //     });
        // }

        document.querySelectorAll('.accordion-button').forEach((button, index) => {
            button.addEventListener('click', () => {
                adjustingSOTCHeight();
                // document.querySelectorAll('.accordion-item')[index].querySelectorAll('.show-on-scroll').forEach((ele) => {
                //     ele.style.transition = 'unset';
                // })
            })
        });

        function adjustingSOTCHeight() {
            document.querySelectorAll('.sotc-wrapper').forEach((wrapper) => {
                wrapper.style.height = "calc(" + parseInt(window.getComputedStyle(wrapper.querySelector('.sotc-main-cotent')).height) + "px" + " + 2rem)";
                wrapper.querySelector('.sotc-brown-back').style.height = "calc(" + parseInt(window.getComputedStyle(wrapper.querySelector('.sotc-main-cotent')).height) + "px" + " - 112px - 2rem)";
            })

        }


        function tabactions() {
            document.querySelectorAll('.tab-wrapper .tab-container .tab').forEach((tab, tabIndex) => {
                tab.addEventListener('click', () => {
                    document.querySelector('.tab-wrapper .tab-container .tab.active').classList.remove('active');
                    tab.classList.add('active');

                    let tabContent = document.querySelectorAll('.tab-wrapper .tab-content');
                    document.querySelector('.tab-wrapper .tab-content.active').classList.remove('active');
                    tabContent[tabIndex].classList.add('active');
                    console.log(tabIndex);
                })
            })
        }


        let scroll = window.requestAnimationFrame || function (callback) {
            window.setTimeout(callback, 1000 / 60)
        };

        let elementsToShow = document.querySelectorAll('.show-on-scroll');

        document.querySelector('body').onscroll = function () {
            loop();
        };

        function loop() {
            elementsToShow.forEach(function (element) {
                if (isElementInViewport(element)) {
                    element.classList.add('is-visible');
                } else {
                    element.classList.remove('is-visible');
                }
            });
            // scroll(loop);
        }

        function isElementInViewport(el) {
            if (typeof jQuery == 'function' && el instanceof jQuery) {
                el = el[0];
                console.log('gas');
            }
            let rect = el.getBoundingClientRect();

            return (
                (rect.top <= 0 && rect.bottom >= 0) ||
                (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) && rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
                (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
            )
        }

        function handle_about_heading() {
            if (screen.width > 729) {
                document.querySelectorAll('.about-heading').forEach((heading) => {
                    let new_heading = ""
                    let heading_texts = heading.innerHTML.split(" ").filter(text => text.length > 0)
                    heading_texts.forEach((heading_text, index) => {
                        new_heading += (heading_text + " ")
                        if (index === heading_texts.length - 2) {
                            new_heading += '<br>'
                        }
                    });
                    heading.innerHTML = new_heading
                })
            }
        }

    </script>
@endsection