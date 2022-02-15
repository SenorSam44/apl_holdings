@extends('layouts.userapp')

@section('content')
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.min.css">
    <style>
        .nav-link {
            padding: 0;
        }

        .contact.section-padding {
            background: black;
        }

        .contact.section-padding a, h2, .contact-info .contact-info-title, p, .breadcrumb-item, .breadcrumb-item a, .title-bar-primary, .media-body, .media-body .post-title a {
            color: white !important;
        }

        p a, .breadcrumb-item, .breadcrumb-item a {
            opacity: 1;
        }

        .item-content {
            background: black;
        }

        .section-title:before {
            background: #CAA65B !important;
        }

        @media screen and (min-width: 1024px) {
            .fp-navigation .fp-nav-list-wrap {
                top: 25px;
            }
        }

    </style>

    <section class="blog-detail-wrap bg-dark news-start">

        @foreach($news as $data)
        @endforeach
        <div class="row" style="margin: 0">
            <div class="offset-md-2 col-xl-7 col-lg-6 col-md-10 col-12">
                <div class="blog-detail-box">
                    <div class="blog-detail-title">
                        <div class="item-img">
                            <img src="{{asset(''.$data->news_image)}}" class="img-fluid" alt="blog">
                            <div class="post-date">
                                @if($data->created_at){{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d')}}
                                <span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('F')}}</span>
                                @else
                                    20<span>June</span>
                                @endif
                            </div>
                        </div>
                        <div class="item-content">
                            <h2 class="item-title">
                                {{$data->news_title}}
                            </h2>
                            <div class="post-actions-wrapper">
                                <ul>
                                    <li>
                                        <a class="text-white" href="#"><i class="flaticon-people"></i>by
                                            <span>Admin</span></a>
                                    </li>
                                    <li>
                                        <a href="{{$data->news_url}}"><i class="flaticon-tag"></i>
                                            <button class="newsurl_button">News Url</button>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <p>
                            <?php
                            $description = $data->news_description;
                            $description = preg_replace("/\r\n|\r|\n/", '<br/>', $description);
                            echo $description;
                            ?>
                        </p>
                    </div>

                </div>
            </div>
            <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12">
                <div class="widget widget-recent mr-0 mr-md-5">
                    <h3 class="section-title title-bar-primary">Related Posts</h3>
                    <?php $random_news = DB::table('news')
                        ->where('publication_status', 1)
                        ->inRandomOrder()
                        ->limit(10)
                        ->get();
                    ?>
                    @foreach($random_news as $data)
                        <div class="media">
                            <a href="{{url('/news/'.$data->id)}}">
                                <img src="{{asset(''.$data->news_image)}}" alt="news" class="img-fluid">
                            </a>
                            <div class="media-body space-sm">
                                <div class="post-date-short">
                                    @if($data->created_at){{
                                            Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d')}}
                                    <span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format(' F, Y')}}</span>
                                    @else
                                        20<span>June, 2018</span>
                                    @endif
                                </div>
                                <h4 class="post-title">
                                    <a href="{{url('/news/'.$data->id)}}">Achieving Better Health Cancer treatment for
                                        Achieving Better Health Achieving Better Health .</a>
                                </h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <!-- All Doctors End Here -->

    <style type="text/css">
        .template-main-menu a {
            color: black !important;
        }

        .blog-detail-wrap {
            margin: 0;
            /*padding: 20px;*/
            padding-top: 78px;
        }


        .media {

        }

        .media img {
            width: 120px;
            height: 89px;
            padding-bottom: 20px;
            padding-right: 5px;
        }

        .post-title {
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            -webkit-box-orient: vertical;
            font-size: 15px;
        }

        .post-date {
            background-color: #CAA65B !important;
        }

        .newsurl_button {
            color: #CAA65B;
            border: #CAA65B 1px solid;
            background: white;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 10px;
        }

        .newsurl_button:hover {
            color: white;
            border: #CAA65B 1px solid;
            background: #CAA65B;
        }

    </style>

@endsection