@extends('layouts.userapp')

@section('oldcontent')
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.min.css">
    <style>
        .nav-link{
            padding: 0;
        }

        .blog-wrap-layout2.bg-light-primary100{
            background: black;
        }

        .contact.section-padding a, h2, .contact-info .contact-info-title, p, .breadcrumb-item, .breadcrumb-item a{
            color: white!important;
        }
        p a, .breadcrumb-item, .breadcrumb-item a{
            opacity: 1;
        }

        @media screen and (min-width: 1024px){
            .fp-navigation .fp-nav-list-wrap {
                top: 25px;
            }
        }

        /*extra*/

        .line-of-3-texts{
            color: #707070!important;
        }

    </style>

    <!-- Inne Page Banner Area Start Here -->
        <section class="pagehead bg-1">
            <div class="container">
                <nav aria-label="breadcrumb" class="pagehead-breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->

<!-- Blog Grid Area Start Here -->
        <section class="blog-wrap-layout2 bg-light-primary100">
            <div class="container news-start">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-12">
                        <div class="row">
                            @foreach($news as $data)
                            <div class="single-item col-md-4 col-sm-12 col-12">
                                <div class="blog-box-layout4">
                                    <div class="item-img">
                                        <a href="{{url('/news/'.$data->id)}}">
                                            <img src="{{$data->news_image}}" class="img-fluid" alt="blog">
                                        </a>
                                        <div class="post-date">
                                            @if($data->created_at){{
                                                Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d')}}<span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('F')}}</span>
                                            @else
                                                20<span>June</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">
                                            <a href="{{url('/news/'.$data->id)}}">{{$data->news_title}}</a>
                                        </h3>
                                        <p class="line-of-3-texts">{{$data->news_description}}.
                                        </p>
                                        <div class="post-actions-wrapper">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="#">
                                                        <i class="flaticon-people"></i>By
                                                        <span style="color: #0d6aad">admin</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="{{$data->news_url}}">
                                                        <i class="flaticon-interface"></i>News URL</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                         <div class="pagination">
                            <center>{{ $news->render() }}  </center>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Blog Grid Area End Here -->

    <style type="text/css">
        .line-of-3-texts {
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            -webkit-box-orient: vertical;
        }


        .template-main-menu a{
            color: black !important;
        }

        .pagination {
            float: right;
        }

        .news-start{
            margin-top: -50px;
        }

        .item-img img{
            height: 250px;
        }

        .post-date{
            background-color: #f5b316 !important;
        }
    </style>
@endsection

@section('content')

    <!-- 3 -->
    <link rel="apple-touch-icon"
          href="https://www.fosterandpartners.com/static/assets/images/ico/apple-touch-icon-114-precomposed.png?v=3"/>
    <link rel="apple-touch-icon" sizes="152x152"
          href="https://www.fosterandpartners.com/static/assets/images/ico/apple-touch-icon-144-precomposed.png?v=3"/>

    <link rel="icon" type="image/png" sizes="16x16"
          href="https://www.fosterandpartners.com/static/assets/images/ico/favicon-16x16.png?v=3"/>
    <link rel="icon" type="image/png" sizes="32x32"
          href="https://www.fosterandpartners.com/static/assets/images/ico/favicon-32x32.png?v=3"/>
    <link rel="icon" type="image/png" sizes="192x192"
          href="https://www.fosterandpartners.com/static/assets/images/ico/favicon-192x192.png?v=3"/>
    <link rel="icon" type="image/png" sizes="128x128"
          href="https://www.fosterandpartners.com/static/assets/images/ico/favicon-128x128.png?v=3"/>
    <link rel="shortcut icon" href="/favicon.ico?v=3"/>

    <link href="https://fonts.googleapis.com/css?family=Cairo|Open+Sans:300,400,600" rel="stylesheet">

    <script>


        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5VKDJST');

    </script>

    {{--    override--}}

    <style>
        .fp-filter-drawer {
            transition: height 1s;
            background: black;
        }

        .fp-filter-drawer.is-active {
            height: 300px;
        }

        .fp-bar-item .fp-bar-button > .arrow-down {
            background: url(https://www.fosterandpartners.com/static/assets/images/icons/chevron-down-white.svg?v=2) no-repeat;
            background-size: 100%;
        }

        .fp-filter-bar {
            background: black;
            border-bottom: none;
        }

        .fp-bar-item .fp-bar-button, .fp-bar-total {
            color: white;
        }

        .fp-bar-button .fp-trigger {
            color: white;
        }


    </style>
    {{--    override end--}}


    <script type="text/javascript">
        !function (T, l, y) {
            var S = T.location, u = "script", k = "instrumentationKey", D = "ingestionendpoint",
                C = "disableExceptionTracking", E = "ai.device.", I = "toLowerCase", b = "crossOrigin", w = "POST",
                e = "appInsightsSDK", t = y.name || "appInsights";
            (y.name || T[e]) && (T[e] = t);
            var n = T[t] || function (d) {
                var g = !1, f = !1, m = {initialize: !0, queue: [], sv: "4", version: 2, config: d};

                function v(e, t) {
                    var n = {}, a = "Browser";
                    return n[E + "id"] = a[I](), n[E + "type"] = a, n["ai.operation.name"] = S && S.pathname || "_unknown_", n["ai.internal.sdkVersion"] = "javascript:snippet_" + (m.sv || m.version), {
                        time: function () {
                            var e = new Date;

                            function t(e) {
                                var t = "" + e;
                                return 1 === t.length && (t = "0" + t), t
                            }

                            return e.getUTCFullYear() + "-" + t(1 + e.getUTCMonth()) + "-" + t(e.getUTCDate()) + "T" + t(e.getUTCHours()) + ":" + t(e.getUTCMinutes()) + ":" + t(e.getUTCSeconds()) + "." + ((e.getUTCMilliseconds() / 1e3).toFixed(3) + "").slice(2, 5) + "Z"
                        }(),
                        iKey: e,
                        name: "Microsoft.ApplicationInsights." + e.replace(/-/g, "") + "." + t,
                        sampleRate: 100,
                        tags: n,
                        data: {baseData: {ver: 2}}
                    }
                }

                var h = d.url || y.src;
                if (h) {
                    function a(e) {
                        var t, n, a, i, r, o, s, c, p, l, u;
                        g = !0, m.queue = [], f || (f = !0, t = h, s = function () {
                            var e = {}, t = d.connectionString;
                            if (t) for (var n = t.split(";"), a = 0; a < n.length; a++) {
                                var i = n[a].split("=");
                                2 === i.length && (e[i[0][I]()] = i[1])
                            }
                            if (!e[D]) {
                                var r = e.endpointsuffix, o = r ? e.location : null;
                                e[D] = "https://" + (o ? o + "." : "") + "dc." + (r || "services.visualstudio.com")
                            }
                            return e
                        }(), c = s[k] || d[k] || "", p = s[D], l = p ? p + "/v2/track" : config.endpointUrl, (u = []).push((n = "SDK LOAD Failure: Failed to load Application Insights SDK script (See stack for details)", a = t, i = l, (o = (r = v(c, "Exception")).data).baseType = "ExceptionData", o.baseData.exceptions = [{
                            typeName: "SDKLoadFailed",
                            message: n.replace(/\./g, "-"),
                            hasFullStack: !1,
                            stack: n + "\nSnippet failed to load [" + a + "] -- Telemetry is disabled\nHelp Link: https://go.microsoft.com/fwlink/?linkid=2128109\nHost: " + (S && S.pathname || "_unknown_") + "\nEndpoint: " + i,
                            parsedStack: []
                        }], r)), u.push(function (e, t, n, a) {
                            var i = v(c, "Message"), r = i.data;
                            r.baseType = "MessageData";
                            var o = r.baseData;
                            return o.message = 'AI (Internal): 99 message:"' + ("SDK LOAD Failure: Failed to load Application Insights SDK script (See stack for details) (" + n + ")").replace(/\"/g, "") + '"', o.properties = {endpoint: a}, i
                        }(0, 0, t, l)), function (e, t) {
                            if (JSON) {
                                var n = T.fetch;
                                if (n && !y.useXhr) n(t, {
                                    method: w,
                                    body: JSON.stringify(e),
                                    mode: "cors"
                                }); else if (XMLHttpRequest) {
                                    var a = new XMLHttpRequest;
                                    a.open(w, t), a.setRequestHeader("Content-type", "application/json"), a.send(JSON.stringify(e))
                                }
                            }
                        }(u, l))
                    }

                    function i(e, t) {
                        f || setTimeout(function () {
                            !t && m.core || a()
                        }, 500)
                    }

                    var e = function () {
                        var n = l.createElement(u);
                        n.src = h;
                        var e = y[b];
                        return !e && "" !== e || "undefined" == n[b] || (n[b] = e), n.onload = i, n.onerror = a, n.onreadystatechange = function (e, t) {
                            "loaded" !== n.readyState && "complete" !== n.readyState || i(0, t)
                        }, n
                    }();
                    y.ld < 0 ? l.getElementsByTagName("head")[0].appendChild(e) : setTimeout(function () {
                        l.getElementsByTagName(u)[0].parentNode.appendChild(e)
                    }, y.ld || 0)
                }
                try {
                    m.cookie = l.cookie
                } catch (p) {
                }

                function t(e) {
                    for (; e.length;) !function (t) {
                        m[t] = function () {
                            var e = arguments;
                            g || m.queue.push(function () {
                                m[t].apply(m, e)
                            })
                        }
                    }(e.pop())
                }

                var n = "track", r = "TrackPage", o = "TrackEvent";
                t([n + "Event", n + "PageView", n + "Exception", n + "Trace", n + "DependencyData", n + "Metric", n + "PageViewPerformance", "start" + r, "stop" + r, "start" + o, "stop" + o, "addTelemetryInitializer", "setAuthenticatedUserContext", "clearAuthenticatedUserContext", "flush"]), m.SeverityLevel = {
                    Verbose: 0,
                    Information: 1,
                    Warning: 2,
                    Error: 3,
                    Critical: 4
                };
                var s = (d.extensionConfig || {}).ApplicationInsightsAnalytics || {};
                if (!0 !== d[C] && !0 !== s[C]) {
                    method = "onerror", t(["_" + method]);
                    var c = T[method];
                    T[method] = function (e, t, n, a, i) {
                        var r = c && c(e, t, n, a, i);
                        return !0 !== r && m["_" + method]({
                            message: e,
                            url: t,
                            lineNumber: n,
                            columnNumber: a,
                            error: i
                        }), r
                    }, d.autoExceptionInstrumented = !0
                }
                return m
            }(y.cfg);
            (T[t] = n).queue && 0 === n.queue.length && n.trackPageView({})
        }(window, document, {
            src: "https://az416426.vo.msecnd.net/scripts/b/ai.2.min.js", // The SDK URL Source
//name: "appInsights", // Global SDK Instance name defaults to "appInsights" when not supplied
//ld: 0, // Defines the load delay (in ms) before attempting to load the sdk. -1 = block page load and add to head. (default) = 0ms load after timeout,
//useXhr: 1, // Use XHR instead of fetch to report failures (if available),
//crossOrigin: "anonymous", // When supplied this will add the provided value as the cross origin attribute on the script tag
            cfg: { // Application Insights Configuration
                instrumentationKey: "72d0820b-fdd8-44e4-9d47-a9e3dd938f4a"
                /* ...Other Configuration Options... */
            }
        });
    </script>

    <div id="container-fluid">
        <div class="page">



            <link
                    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap"
                    rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.min.css">
            <style>
                .nav-link{
                    padding: 0;
                }

                .blog-wrap-layout2.bg-light-primary100{
                    background: black;
                }

                .contact.section-padding a, h2, .contact-info .contact-info-title, p, .breadcrumb-item, .breadcrumb-item a{
                    color: white!important;
                }
                p a, .breadcrumb-item, .breadcrumb-item a{
                    opacity: 1;
                }

                @media screen and (min-width: 1024px){
                    .fp-navigation .fp-nav-list-wrap {
                        top: 25px;
                    }
                }

                /*extra*/

                .line-of-3-texts{
                    color: #707070!important;
                }

            </style>

            <!-- Inne Page Banner Area Start Here -->
            <section class="pagehead bg-1">
                <div class="container">
                    <nav aria-label="breadcrumb" class="pagehead-breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">News</li>
                        </ol>
                    </nav>
                </div>
            </section>
            <!-- Inne Page Banner Area End Here -->

            <!-- Blog Grid Area Start Here -->
            <section class="blog-wrap-layout2 bg-light-primary100">
                <div class="container news-start">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12">
                            <div class="row">
                                @foreach($news as $data)
                                    <div class="single-item col-md-4 col-sm-12 col-12">
                                        <div class="blog-box-layout4">
                                            <div class="item-img">
                                                <a href="{{url('/news/'.$data->id)}}">
                                                    <img src="{{asset($data->news_image)}}" class="img-fluid" alt="blog">
                                                </a>
                                                <div class="post-date">
                                                    @if($data->created_at){{
                                                Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d')}}<span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('F')}}</span>
                                                    @else
                                                        20<span>June</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="item-title">
                                                    <a href="{{url('/news/'.$data->id)}}">{{$data->news_title}}</a>
                                                </h3>
                                                <p class="line-of-3-texts">{{$data->news_description}}.
                                                </p>
                                                <div class="post-actions-wrapper">
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="#">
                                                                <i class="flaticon-people"></i>By
                                                                <span style="color: #0d6aad">admin</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a href="{{$data->news_url}}">
                                                                <i class="flaticon-interface"></i>News URL</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="pagination">
                                <center>{{ $news->render() }}  </center>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <!-- Blog Grid Area End Here -->

            <style type="text/css">
                .line-of-3-texts {
                    overflow: hidden !important;
                    text-overflow: ellipsis !important;
                    display: -webkit-box;
                    -webkit-line-clamp: 2; /* number of lines to show */
                    -webkit-box-orient: vertical;
                }


                .template-main-menu a{
                    color: black !important;
                }

                .pagination {
                    float: right;
                }

                .news-start{
                    margin-top: -50px;
                }

                .item-img img{
                    height: 250px;
                }

                .post-date{
                    background-color: #CAA65B!important;
                }
            </style>
        </div>
    </div>

    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 623806, hjsv: 5};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <script>
        document.querySelectorAll('.nav-link').forEach((link) => {
            link.addEventListener('click', () => {
                window.location.assign(link.getAttribute('data-target'));
            });
        });
    </script>

@endsection



