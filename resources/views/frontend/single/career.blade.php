@extends('layouts.userapp')

@section('content')
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.min.css">
    <style>

        body {
            font-family: "Open Sans", "Helvetica", "Arial";
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

        @media screen and (min-width: 1024px) {
            .fp-navigation .fp-nav-list-wrap {
                top: 25px;
            }
        }

    </style>
    <!-- =======================* Section Start *======================= -->
    <section class="pagehead bg-1">
        <div class="container">
            <nav aria-label="breadcrumb" class="pagehead-breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Career</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =======================* Section End *======================= -->
    <!-- =======================* Section Start *===================== -->
    <section class="contact section-padding">
        <div class="container">
            @foreach($posts as $post)
                <div class="row mb-5" style="color: white">
                    <div class="col-lg-2" style="font-size: 20px">
                        Post Title:
                    </div>
                    <div class="col-lg-10 mb-5" style="font-size: 20px">
                        {{$post->post_name}}
                    </div>

                    <div class="col-lg-2">
                        Description:
                    </div>
                    <div class="col-lg-10  mb-5">
                        {{$post->post_description}}
                    </div>

                    <div class="col-lg-2">
                        Deadline:
                    </div>
                    <div class="col-lg-10 mb-5">
                        {{$post->deadline}}
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-lg-8">
                    <h2 style="color: #f5b316; font-size:20px  ">
                        {{ Session::get('msg') }}</h2>
                    <h2 class="section-title">Drop Your CV</h2>

                    <form method="POST" class="form-row mt-5"
                          action="{{route('drop-cv')}}"
                          enctype='multipart/form-data'>
                        @csrf
                        @method('POST')
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label for="name" class="d-none">Name</label>
                                <input type="text" class="form-control form-control-lg" name="name" id="name"
                                       required placeholder="Name">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label for="phone" class="d-none">Phone Number</label>
                                <input type="tel" class="form-control form-control-lg" name="phone" id="phone"
                                       required placeholder="Phone Number">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label for="email" class="d-none">E-mail</label>
                                <input type="email" class="form-control form-control-lg" name="email" id="email"
                                       required placeholder="E-mail">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label for="subject" class="d-none">Subject</label>
                                <input type="text" class="form-control form-control-lg" name="subject" id="subject"
                                       required placeholder="Subject">
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label for="message" class="d-none">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="5" required
                                          placeholder="Message"></textarea>
                            </fieldset>
                        </div>

                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <select class="form-control bg-dark border-left-0 border-right-0 border-top-0"
                                        required
                                        name="postID">
                                    <option selected disabled value="">Select Post</option>
                                    @foreach($posts as $post)
                                        <option value="{{$post->id}}">{{$post->post_name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <input class="form-control"
                                       name="appcv"
                                       required
                                       placeholder="Paste your CV link"/>
                            </fieldset>
                        </div>
                        <div class="col-lg-12 text-lg-right">
                            <button type="submit" class="btn btn-primary">Send CV</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <ul class="contact-info">
                        <li class="contact-info-item phone">
                            <h3 class="contact-info-title text-uppercase">Phone</h3>
                            <p><a href="tel:+88 0312 551 355">+88 0312 551 355-6</a></p>
                            <p><a href="tel:+88 0241 355 174">+88 0241 355 174-5</a></p>
                        </li>
                        <li class="contact-info-item email">
                            <h3 class="contact-info-title text-uppercase">E-Mail</h3>
                            <p><a href="mailto:info@aplholding.com">info@aplholding.com</a></p>
                            <p><a href="mailto:info@aplholding.com">info@aplholding.com</a></p>
                        </li>
                        <li class="contact-info-item address">
                            <h3 class="contact-info-title text-uppercase">Address</h3>
                            <p>APL HOLDINGS LTD.<br>
                                Ipl City Center (4th Floor)<br>
                                162,O.R.Nizam Road,Golpahar Moor,<br>
                                Chittagong - 4000
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================* Section End *======================= -->
    <!-- =======================* Section Start *===================== -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7780362837802!2d91.81968551438193!3d22.36200844630434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88f83cd223b%3A0xfb574b70944b1da0!2z4Ka44Ka-4Kao4Kau4Ka-4KawIOCmk-CmtuCmvuCmqCDgprjgpr_gpp_gpr8!5e0!3m2!1sbn!2sbd!4v1619434600691!5m2!1sbn!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- =======================* Section Start *===================== -->


    <script>
        document.querySelectorAll('.nav-link').forEach((link) => {
            link.addEventListener('click', () => {
                window.location.assign(link.getAttribute('data-target'));
            });
        });
    </script>
@endsection