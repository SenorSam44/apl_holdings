@extends('layouts.userapp')

@section('content')
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.min.css">
    <style>

        body{
            font-family: "Open Sans","Helvetica","Arial";
        }

        ul li a{
            font-weight: normal;
        }
        .nav-link{
            padding: 0;
        }

        .contact.section-padding{
            background: black;
        }

        .contact.section-padding a, h2, .contact-info .contact-info-title, p, .breadcrumb-item, .breadcrumb-item a{
            color: white!important;
        }
        p a, .breadcrumb-item, .breadcrumb-item a{
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
        .section-title:before, .btn-primary{
            background: #CAA65B;
        }
        .btn-primary{
            border: none;
        }
        .contact-info .contact-info-item:before, .btn-primary:hover{
            color: #CAA65B;
        }

        @media screen and (min-width: 1024px){
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
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <div>
        <h1 class="text-danger mt-5 text-center">This page is under construction!</h1>
    </div>
@endsection