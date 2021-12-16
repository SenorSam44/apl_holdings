@extends('layouts.userapp')
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
            <section class="component fp-mega-filter fp-mega-filter-sticky" data-component-name="mega-filter">
                <div class="fp-filter-bar">
                    <div class="fp-bar-item fp-bar-elm-animate">
                        <button class="fp-bar-button fp-trigger" data-controls="s" type="button">
                            <span class="fp-bar-button__text">All project types</span><span class="arrow-down"></span>
                        </button>
                    </div>
                    {{--                    <div class="fp-bar-item fp-bar-elm-animate">--}}
                    {{--                        <button class="fp-bar-button fp-trigger" data-controls="location" type="button">--}}
                    {{--                            <span class="fp-bar-button__text">All locations</span><span class="arrow-down"></span>--}}
                    {{--                        </button>--}}
                    {{--                    </div>--}}
                    <div class="fp-bar-total fp-bar-elm-animate">{{count($projects)}} projects</div>
                </div>
                <div class="fp-filter-selects">
                    <div class="fp-filter-wrapper">
                        <select class="fp-filter-select" data-controls="s">
                            <option value="/projects/">All project types</option>
                            <option value="/projects/?isnew=true">Recently Completed</option>
                            <option value="/projects/?onsite=true">Under Construction</option>
                            @foreach($categories as $category){
                            <option value="/projects/?projecttype={{$category->name}}">{{$category->category_name}}</option>
                            @endforeach
                            {{--                            <option value="/projects/?projecttype=culture">Culture</option>--}}
                            {{--                            <option value="/projects/?projecttype=civic">Civic</option>--}}
                            {{--                            <option value="/projects/?projecttype=offices-and-headquarters">Offices and--}}
                            {{--                                Headquarters--}}
                            {{--                            </option>--}}
                            {{--                            <option value="/projects/type/?projecttype=transport-and-infrastructure">Transport and--}}
                            {{--                                Infrastructure--}}
                            {{--                            </option>--}}
                            {{--                            <option value="/projects/type/?projecttype=health-and-education">Health and Education--}}
                            {{--                            </option>--}}
                            {{--                            <option value="/projects/type/?projecttype=industrial-and-research">Industrial and--}}
                            {{--                                Research--}}
                            {{--                            </option>--}}
                            {{--                            <option value="/projects/type/?projecttype=industrial-design">Industrial Design</option>--}}
                            {{--                            <option value="/projects/type/?projecttype=hospitality-and-leisure">Hospitality and--}}
                            {{--                                Leisure--}}
                            {{--                            </option>--}}
                            {{--                            <option value="/projects/type/?projecttype=mixed-use">Mixed Use</option>--}}
                            {{--                            <option value="/projects/type/?projecttype=residential">Residential</option>--}}
                            {{--                            <option value="/projects/type/?projecttype=retail">Retail</option>--}}
                            {{--                            <option value="/projects/type/?projecttype=urban-design">Urban Design</option>--}}
                        </select><span class="arrow-down"></span>
                    </div>
                    {{--                    <div class="fp-filter-wrapper">--}}
                    {{--                        <select class="fp-filter-select" data-controls="location">--}}

                    {{--                            <option selected value="/projects/type/">All locations</option>--}}
                    {{--                            <option value="/projects/type/?location=argentina">Argentina</option>--}}
                    {{--                            <option value="/projects/type/?location=australia">Australia</option>--}}
                    {{--                        </select><span class="arrow-down"></span>--}}
                    {{--                    </div>--}}
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
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?isnew=true">Recently
                                        Completed</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?onsite=true">Under
                                        Construction</a></li>
{{--                                <li class="fp-filter-option "><a class="fp-filter-link"--}}
{{--                                                                 href="/projects/type/?projecttype=culture">Culture</a>--}}
{{--                                </li>--}}
                            </ul>
                        </li>
                        <li class="fp-filter-set">
                            <ul>
                                @foreach($categories as $category)
                                    <li class="fp-filter-option "><a class="fp-filter-link"
                                                                     href="/projects/type/?projecttype={{$category->category_name}}">{{$category->category_name}}</a>
                                    </li>
                                @endforeach
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
                                                                 href="/projects/type/?location=argentina">Argentina</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=australia">Australia</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=brazil">Brazil</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=canada">Canada</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=central-african-republic">Central
                                        African Republic</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=china">China</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=denmark">Denmark</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=egypt">Egypt</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=france">France</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=germany">Germany</a>
                                </li>
                                <li class="fp-filter-option disabled">Hong Kong</li>
                            </ul>
                        </li>
                        <li class="fp-filter-set">
                            <ul>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=india">India</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=israel">Israel</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=italy">Italy</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=japan">Japan</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=jordan">Jordan</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=kazakhstan">Kazakhstan</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=kuwait">Kuwait</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=lebanon">Lebanon</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=luxembourg">Luxembourg</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=malaysia">Malaysia</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=mauritius">Mauritius</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=mexico">Mexico</a></li>
                            </ul>
                        </li>
                        <li class="fp-filter-set">
                            <ul>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=monaco">Monaco</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=morocco">Morocco</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=panama">Panama</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=poland">Poland</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=russia">Russia</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=san-marino">San
                                        Marino</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=saudi-arabia">Saudi
                                        Arabia</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=singapore">Singapore</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=south-korea">South
                                        Korea</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=space">Space</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=spain">Spain</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=sweden">Sweden</a></li>
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
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=turkey">Turkey</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=uae">UAE</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=uk">UK</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=usa">USA</a></li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=various">Various</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=vietnam">Vietnam</a>
                                </li>
                                <li class="fp-filter-option "><a class="fp-filter-link"
                                                                 href="/projects/type/?location=hungary">Hungary</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </section>

            <div class="component fp-filter-loader" data-component-name="filter-loader"></div>

            <script>
                document.querySelectorAll('.fp-trigger[data-controls="s"]').forEach((trigger) => {
                    trigger.addEventListener('click', () => {
                        document.querySelector('.fp-filter-loader').classList.toggle('open');

                        if (document.querySelector('.fp-filter-loader').classList.contains('open')) {
                            document.querySelector('.fp-filter-drawer[data-source="type"]').classList.add('is-active');
                            trigger.querySelector('.arrow-down').style.transform = 'rotate(180deg)';
                        } else {
                            document.querySelector('.fp-filter-drawer[data-source="type"]').classList.remove('is-active');
                            trigger.querySelector('.arrow-down').style.transform = 'rotate(0deg)';

                        }
                    });
                });
            </script>

            <div class="fp-project-types">
                <div class="component fp-universal-grid" data-component-name="universal-grid">
                    <ul class="fp-grid">
                        @foreach($projects as $key => $project)
                            <li class="fp-grid__item is-hidden {{$key>4? 'is-collapsed': ''}}"
                                data-width="2732"
                                data-height="1360">
                                <div class="fp-dominant-colour" style="background-color: #9F9D88;"></div>
                                <div data-target="/projects/{{$project->id}}" class="fp-content nav-link">
                            <span class="fp-lazy-load-image fp-content__img is-blurred"
                                  sizes="(min-width: 768px) 50vw, 100vw"
                                  {{--                                  srcset="/media/2637191/hero_2612_fp641289.jpg?width=768&quality=85  768w,--}}
                                  {{--                                          /media/2637191/hero_2612_fp641289.jpg?width=960&quality=85  960w,--}}
                                  {{--                                          /media/2637191/hero_2612_fp641289.jpg?width=1350&quality=85 1350w,--}}
                                  {{--                                          /media/2637191/hero_2612_fp641289.jpg?width=1920&quality=85 1920w"--}}
                                  srcset="{{$project->project_image1}}"
                                  alt="Amaravati masterplan"></span>
                                    <div class="fp-content-header">
                                        <div class="fp-content-header__wrapper">

                                            <span class="fp-content-header__subtitle">{{$project->land_area}}</span>

                                            <span class="fp-content-header__title">{{$project->project_title}}</span>

                                        </div>

                                    </div>

                                </div>

                                <div class="fp-spacer"></div>

                            </li>
                        @endforeach


                    </ul>
                    <div class="fp-grid-loader" data-total="{{count($projects)}}">
                        <div class="fp-grid-loader__label">
                            <span class="fp-gl-count">{{count($projects)}}</span> <span class="fp-gl-title">more Search projects by type projects</span>
                        </div>
                    </div>
                </div>


                @include('common.footer')
                {{--                <div class="component fp-footer" data-component-name="footer">--}}
                {{--                    <div class="fp-footer-columns">--}}

                {{--                        <div class="fp-footer-column" data-index="0">--}}
                {{--                            <div class="fp-footer-header">--}}
                {{--                                <h4 class="fp-fh-title">Projects</h4>--}}
                {{--                                <span class="fp-fh-chevron"></span>--}}
                {{--                            </div>--}}
                {{--                            <div class="fp-footer-links">--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/projects/type/?isnew=true">--}}

                {{--                                        Recently Completed--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/projects/type/?onsite=true">--}}

                {{--                                        Under Construction--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=culture">--}}

                {{--                                        Culture--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=civic">--}}

                {{--                                        Civic--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=offices-and-headquarters">--}}

                {{--                                        Offices and Headquarters--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=transport-and-infrastructure">--}}

                {{--                                        Transport and Infrastructure--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=health-and-education">--}}

                {{--                                        Health and Education--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=industrial-and-research">--}}

                {{--                                        Industrial and Research--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=industrial-design">--}}

                {{--                                        Industrial Design--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=hospitality-and-leisure">--}}

                {{--                                        Hospitality and Leisure--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=mixed-use">--}}

                {{--                                        Mixed Use--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=residential">--}}

                {{--                                        Residential--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=retail">--}}

                {{--                                        Retail--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/projects/type/?projecttype=urban-design">--}}

                {{--                                        Urban Design--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="fp-footer-column" data-index="1">--}}
                {{--                            <div class="fp-footer-header">--}}
                {{--                                <h4 class="fp-fh-title">Expertise</h4>--}}
                {{--                                <span class="fp-fh-chevron"></span>--}}
                {{--                            </div>--}}
                {{--                            <div class="fp-footer-links">--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/expertise/architecture/">--}}

                {{--                                        Architecture--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/expertise/environmental-engineering/">--}}

                {{--                                        Environmental Engineering--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/expertise/structural-engineering/">--}}

                {{--                                        Structural Engineering--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/expertise/sustainability/">--}}

                {{--                                        Sustainability--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/expertise/urban-design-and-landscape/">--}}

                {{--                                        Urban Design and Landscape--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/expertise/industrial-design/">--}}

                {{--                                        Industrial Design--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/expertise/workplace-consultancy/">--}}

                {{--                                        Workplace Consultancy--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/expertise/interiors/">--}}

                {{--                                        Interiors--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/expertise/applied-research-development/">--}}

                {{--                                        Applied Research &amp; Development--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/expertise/specialist-modelling-group/">--}}

                {{--                                        Specialist Modelling Group--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/expertise/materials-research-centre/">--}}

                {{--                                        Materials Research Centre--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/expertise/design-communications/">--}}

                {{--                                        Design Communications--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="/expertise/visualisation-and-film/">--}}

                {{--                                        Visualisation and Film--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/expertise/communications/">--}}

                {{--                                        Communications--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/expertise/modelmaking/">--}}

                {{--                                        Modelmaking--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/expertise/project-management/">--}}

                {{--                                        Project Management--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/expertise/construction-review/">--}}

                {{--                                        Construction Review--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/expertise/retrofit/">--}}

                {{--                                        Retrofit--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="fp-footer-column" data-index="2">--}}
                {{--                            <div class="fp-footer-header">--}}
                {{--                                <h4 class="fp-fh-title">News</h4>--}}
                {{--                                <span class="fp-fh-chevron"></span>--}}
                {{--                            </div>--}}
                {{--                            <div class="fp-footer-links">--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/news/">--}}

                {{--                                        News--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/news/videos/">--}}

                {{--                                        Videos--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="fp-footer-column" data-index="3">--}}
                {{--                            <div class="fp-footer-header">--}}
                {{--                                <h4 class="fp-fh-title">About us</h4>--}}
                {{--                                <span class="fp-fh-chevron"></span>--}}
                {{--                            </div>--}}
                {{--                            <div class="fp-footer-links">--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/studio/">--}}

                {{--                                        Studio--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/studio/people/">--}}

                {{--                                        People--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection"--}}
                {{--                                       href="https://www.fosterandpartnerscareers.com/">--}}

                {{--                                        Careers--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="fp-footer-link-container">--}}
                {{--                                    <a class="fp-footer-link no-auto-detection" href="/contact/">--}}

                {{--                                        Contact--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="fp-footer-lower">--}}
                {{--                        <div class="fp-footer-hygine">--}}
                {{--                            <span class="fp-footer-copyright">&#169; Copyright 2021 Foster + Partners. All Rights Reserved.</span>--}}
                {{--                            <a class="fp-hygine-link" href="/privacy-notice/">Privacy Notice</a>--}}
                {{--                            <a class="fp-hygine-link" href="/cookies-policy/">Cookies Policy</a>--}}
                {{--                            <a class="fp-hygine-link" href="/anti-slavery-and-human-trafficking-policy/">Anti-Slavery--}}
                {{--                                and Human Trafficking Policy</a>--}}
                {{--                        </div>--}}
                {{--                        <div class="fp-footer-social">--}}
                {{--                            <a href="https://twitter.com/FosterPartners"--}}
                {{--                               class="fp-ftr-social-link fp-button-icon icon-twitter track-on-click"--}}
                {{--                               target="_blank"--}}
                {{--                               data-track-click-sub-type="share_twitter_click"--}}
                {{--                               data-track-click-section="footer"--}}
                {{--                               data-track-click-detail="channel_link">--}}
                {{--                                <span class="icon__i"></span>--}}
                {{--                            </a>--}}
                {{--                            <a href="https://www.linkedin.com/company/foster-&amp;-partners/"--}}
                {{--                               class="fp-ftr-social-link fp-button-icon icon-linkedin track-on-click"--}}
                {{--                               target="_blank"--}}
                {{--                               data-track-click-sub-type="share_linkedin_click"--}}
                {{--                               data-track-click-section="footer"--}}
                {{--                               data-track-click-detail="channel_link">--}}
                {{--                                <span class="icon__i"></span>--}}
                {{--                            </a>--}}
                {{--                            <a href="https://www.instagram.com/fosterandpartners"--}}
                {{--                               class="fp-ftr-social-link fp-button-icon icon-instagram track-on-click"--}}
                {{--                               target="_blank"--}}
                {{--                               data-track-click-sub-type="share_instagram_click"--}}
                {{--                               data-track-click-section="footer"--}}
                {{--                               data-track-click-detail="channel_link">--}}
                {{--                                <span class="icon__i"></span>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            </div>

        </div>
    </div>
    <script>
        var fpLocale = "en";
    </script>


    <div id="fb-root" data-locale="en_GB"></div>

    <script src="https://www.fosterandpartners.com/static/js/vendor/modernizr.min.js?v=3"></script>

    <script src="https://www.fosterandpartners.com/static/js/libs.js?v=3"></script>
    <script src="https://www.fosterandpartners.com/static/js/main.js?v=3"></script>


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