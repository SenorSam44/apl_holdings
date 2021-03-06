<!DOCTYPE html>
<html class="projectstypelist no-js theme-white" data-pageclassname="projectstypelist" data-pagetheme="theme-white" lang="en">
<head>

    <!-- 3 -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>{{$title?? 'APL Holdings'}}</title>

    <meta name="description" content="View all of the practices project types, read about each individually and view the galleries." />
    <meta name="keywords" content="" />
    <meta name="author" content="APL Holdings / www.aplholdings.com.bd" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="p:domain_verify" content="169c78a888f17c613fa69ba180e2e872" />
    <meta name="google-site-verification" content="cM9PcZ7R8ewsq20WCvVq1iIA-pwxAYzWHKkBp7upWtM" />
    <meta name="theme-color" content="#ffffff" />
    <meta property="twitter:title" content="Search projects by type | APL Holdings" />
    <meta property="twitter:description" content="View all of the practices project types, read about each individually and view the galleries." />
    <meta property="fb:app_id" content="1491038140958228" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Search projects by type | APL Holdings" />
    <meta property="og:description" content="View all of the practices project types, read about each individually and view the galleries." />
    <link rel="apple-touch-icon" href="/static/assets/images/ico/apple-touch-icon-114-precomposed.png?v=3" />
    <link rel="apple-touch-icon" sizes="152x152" href="/static/assets/images/ico/apple-touch-icon-144-precomposed.png?v=3" />

    <link rel="icon" type="image/png" sizes="16x16" href="/static/assets/images/ico/favicon-16x16.png?v=3" />
    <link rel="icon" type="image/png" sizes="32x32" href="/static/assets/images/ico/favicon-32x32.png?v=3" />
    <link rel="icon" type="image/png" sizes="192x192" href="/static/assets/images/ico/favicon-192x192.png?v=3" />
    <link rel="icon" type="image/png" sizes="128x128" href="/static/assets/images/ico/favicon-128x128.png?v=3" />
    <link rel="shortcut icon" href="/favicon.ico?v=3" />


    <link href="https://fonts.googleapis.com/css?family=Cairo|Open+Sans:300,400,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('/static/css/main.css')}}"/>
    <link href="/static/css/main2.css" rel="stylesheet">

    <script type="text/javascript" src="/"></script>
    <script>


        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5VKDJST');

    </script>
    <style>
        body{
            background: black!important;
            overflow: visible!important;
            color: #CAA65B;
        }l
        a{
            color: #CAA65B!important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
    @stack('head-script')
    <script src="{{ asset('frontend')}}/assets/js/core.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/script.js"></script>
</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VKDJST"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>



<script type="text/javascript">
    (function(doc) {
        if (/webkit/i.test(navigator.appVersion)) {
            var scrollDiv = document.createElement('div');
            scrollDiv.className = 'fp-scrollbar-measure';
            doc.body.appendChild(scrollDiv);

            var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;

            if (scrollbarWidth > 0) {
                var html = doc.documentElement;
                html.className += ' fp-custom-scrollbar';
            }

            doc.body.removeChild(scrollDiv);
        }
    })(document);
</script>
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

<div class="fp-sprite-svg">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <symbol viewBox="0 0 188 16" id="source--logo">
            <g transform="translate(-48 -40)">
                <path d="m129.48 40.123h1.5758c0.01336 0.5755 0.00411 1.1448 0.005823 1.7128v1.7368 3.4506h6.9745v1.6042h-6.9611c-0.025349 0.48232-0.008906 0.94306-0.011989 1.4045-0.003084 0.46142 0 0.91257 0 1.3702v4.1556h-1.5521c-0.003425-0.0037681-0.008221-0.0082214-0.012332-0.013702-0.004796-0.0047958-0.008564-0.010277-0.011304-0.016443-0.003083-0.013017-0.005481-0.026719-0.006509-0.040079v-0.061318l-0.003083-6.7223c-6.85e-4 -0.0068511-0.002055-0.01336-0.004453-0.019868 0-0.0065085-0.003768-0.013017-0.01473-0.049328-0.24698-0.0017128-0.50424-0.0041107-0.76116-0.0051384-0.25692-0.0010276-0.52069 0-0.78137 0h-5.4405v-1.596h7.0046v-6.9104zm91.413 5.1226c0.93107-0.79816 2.103-1.2603 3.3279-1.313v2.9936c-0.19663 0.032543-0.39771 0.062003-0.59673 0.099684-0.49088 0.092833-0.98142 0.18601-1.4706 0.28672-0.11955 0.029802-0.23602 0.069882-0.34872 0.11989-0.43059 0.15312-0.7341 0.54055-0.78034 0.99513-0.032543 0.24287-0.0483 0.48746-0.047272 0.73239-0.003769 2.0437-0.004454 4.0877-0.002056 6.1318v0.23979c-0.15244 0.049671-3.0272 0.068511-3.3882 0.024664-0.039736-0.14764-0.051726-11.236-0.010276-11.504h3.3067c0.014387 0.37544-0.003426 0.75431 0.009592 1.1935zm-107.04 10.316h-3.4064v-11.51h3.3132v1.1839c0.19115-0.14148 0.34256-0.2624 0.50356-0.3703 0.1634-0.11202 0.33296-0.21513 0.50767-0.3083 0.18224-0.094546 0.36962-0.17779 0.56179-0.24972 0.18601-0.068511 0.37578-0.12709 0.5683-0.17505 0.19183-0.049328 0.38709-0.088037 0.58235-0.12161 0.19526-0.03357 0.39257-0.054466 0.57995-0.079473 0.008907 0.0051383 0.017813 0.010962 0.026035 0.017128 0.005823 0.0037681 0.010276 0.009249 0.013017 0.015758 0.007536 0.039737 0.011989 0.080158 0.014045 0.12058 0 0.92593-0.001028 1.8522-0.003426 2.7781-0.005138 0.024664-0.01336 0.048643-0.025007 0.070909-0.36551 0.057892-0.73684 0.10962-1.1058 0.1771-0.31618 0.05755-0.62962 0.12983-0.94272 0.20211-0.10585 0.027405-0.20964 0.06166-0.31104 0.10277-0.46759 0.15552-0.7961 0.57687-0.83241 1.0684-0.025692 0.20245-0.039052 0.40627-0.04008 0.61044-0.00274 2.0701-0.00274 4.1401 0 6.2102v0.25692h-0.003083zm62.604 0h-3.406v-11.511h3.3067v1.1887c0.19183-0.14148 0.34256-0.26171 0.50253-0.36893 0.16922-0.11578 0.34461-0.22266 0.52514-0.31995 0.17607-0.09112 0.35797-0.17128 0.54398-0.23979 0.18601-0.068854 0.37578-0.12812 0.56796-0.17676 0.19868-0.051041 0.40079-0.090778 0.6029-0.12538 0.19492-0.034256 0.39188-0.053781 0.58543-0.079473 0.048986 0.15004 0.064744 2.6719 0.019526 3.0008-0.28192 0.045218-0.57173 0.084954-0.85879 0.13874-0.40353 0.075705-0.80535 0.16032-1.2068 0.24424-0.072965 0.018841-0.14456 0.041792-0.21513 0.068511-0.54672 0.15072-0.92867 0.64401-0.93792 1.2113-0.016785 0.20348-0.027747 0.40798-0.02809 0.61215-0.002055 2.0235-0.002055 4.0466 0 6.0701v0.28843l-0.00137-0.0020553zm5.9324-9.1877h-1.6748v-2.0666h1.6679c0.013702-0.31104 0.004796-0.60084 0.006509-0.89065v-0.89887-1.7511c0.15552-0.046245 3.1029-0.058235 3.3893-0.01473v3.5605c0.26274 0.024664 0.50733 0.0095916 0.75088 0.012332 0.24356 0.0027404 0.49328 0 0.73992 0h0.74814v2.0612c-0.17984 0.016785-0.36037 0.021238-0.54055 0.013017-0.19183 0.003083-0.38366 0-0.5755 0h-1.1359v0.25383 4.7615c0 0.18361-0.004796 0.36756-0.004453 0.55117 0 0.068511 0.007536 0.13702 0.014387 0.20382-0.006509 0.38298 0.29905 0.69882 0.68203 0.70498 0.022609 3.426e-4 0.044875-3.425e-4 0.067141-0.0020553 0.32132 0.0089065 0.64332-0.01336 0.96532-0.020211 0.11613-0.0023979 0.23225 0 0.34941 0 0.0483 0.87763 0.052754 1.7573 0.012674 2.6356-0.23671 0.034256-0.47958 0.077418-0.72142 0.10585-0.83002 0.10585-1.671 0.096944-2.4986-0.026034-0.18258-0.029117-0.36242-0.073992-0.53713-0.13428-0.93004-0.28843-1.584-1.1229-1.6419-2.0947-0.041792-0.37887-0.062003-0.75979-0.059947-1.1411-0.005824-1.8522-0.002741-3.7048-0.002741-5.5573v-0.26617h-6.85e-4zm-93.407-5.634h3.4016v3.577h2.2026c0.057207 0.68546 0.065086 1.3743 0.024322 2.0612-0.17916 0.027062-0.36105 0.034256-0.54192 0.020896-0.19183 0.0051383-0.38366 0-0.5755 0h-1.1304v0.28329 4.6786c0 0.26514-0.0095915 0.53165 0.01336 0.79542-0.015758 0.38229 0.28158 0.70498 0.66422 0.72074 0.037339 0.0017128 0.074677 0 0.11167-0.0044532 0.34907 0.0054809 0.69847-0.018498 1.0475-0.02809 0.081186-0.0023979 0.16237 0 0.25897 0v2.6377c-0.13394 0.021924-0.27405 0.046588-0.41107 0.068511-0.92799 0.14867-1.8734 0.15518-2.8035 0.019183-0.18943-0.028775-0.37578-0.074677-0.557-0.13702-0.83036-0.25658-1.4459-0.95882-1.5915-1.8156-0.083926-0.46314-0.12024-0.93381-0.10791-1.4045-0.0037681-1.8457-0.0037681-3.6914 0-5.5367v-0.29631c-0.19628 0-0.37681-0.0034256-0.56008-0.0041107-0.18327-6.851e-4 -0.36996 0-0.55494 0h-0.56179v-2.0656c0.27713-0.019183 0.55528-0.006166 0.83276-0.0085639s0.54467 0 0.84063 0v-3.5616h-0.0020553zm-3.2176 4.6711l-2.1002 1.933c-0.07776-0.054809-0.14387-0.10105-0.20964-0.14764-0.59947-0.44841-1.288-0.76356-2.019-0.9249-0.49773-0.10345-1.0123-0.096944-1.5072 0.018841-0.20177 0.042477-0.39086 0.13154-0.5522 0.26034-0.28912 0.20553-0.3566 0.60667-0.15107 0.89579 0.06029 0.084612 0.14011 0.15347 0.23294 0.2004 0.25966 0.14045 0.54124 0.23465 0.8331 0.27884 0.68511 0.13942 1.3702 0.26514 2.0553 0.41278 0.55631 0.11818 1.0979 0.297 1.6152 0.53268 0.35694 0.1586 0.69025 0.36517 0.99136 0.6142 0.60427 0.49602 0.97526 1.2212 1.0239 2.0016 0.14045 1.2887-0.45252 2.5473-1.5353 3.2598-0.70395 0.49294-1.5093 0.82179-2.3571 0.96258-1.6107 0.31858-3.2793 0.15758-4.7992-0.46348-0.85879-0.36414-1.6426-0.88482-2.3109-1.5357-0.023979-0.022951-0.043505-0.050698-0.073992-0.086324l2.1417-1.9303c0.10482 0.09386 0.19491 0.17573 0.28672 0.25589 0.557 0.51007 1.2133 0.89921 1.9279 1.1431 0.7341 0.24322 1.5254 0.25281 2.2653 0.02809 0.16957-0.052754 0.33297-0.12435 0.48643-0.21341 0.11202-0.065771 0.21136-0.15072 0.29426-0.25075 0.26754-0.29768 0.24322-0.75602-0.054466-1.0236-0.042134-0.038024-0.089065-0.071252-0.13908-0.098314-0.27644-0.1521-0.57824-0.25246-0.89065-0.29631-0.49876-0.087694-1.001-0.15895-1.4994-0.24904-0.61386-0.10859-1.2171-0.26993-1.8029-0.48232-0.15449-0.055837-0.3059-0.11989-0.45354-0.19183-1.1383-0.5015-1.8347-1.6679-1.7364-2.9076 0.03357-1.0345 0.53233-1.9985 1.3576-2.6233 0.64024-0.52069 1.4086-0.86016 2.2246-0.98314 1.9372-0.33399 3.9302 0.039737 5.6145 1.053 0.25349 0.14833 0.49465 0.31755 0.74129 0.47958 0.02809 0.016785 0.052754 0.040079 0.10037 0.077418zm150.03 0l-2.0968 1.932c-0.064743-0.044532-0.12572-0.085297-0.18498-0.12777-0.60872-0.46005-1.3099-0.7824-2.0553-0.94511-0.49808-0.10277-1.0126-0.094888-1.5072 0.022951-0.19492 0.042134-0.3775 0.12777-0.53473 0.25041-0.29289 0.20211-0.36619 0.6029-0.16443 0.89579 0.062345 0.090092 0.14627 0.16271 0.24424 0.21136 0.26068 0.13771 0.54295 0.23054 0.83447 0.27405 0.62414 0.12503 1.251 0.23808 1.8738 0.3703 0.57789 0.11236 1.1411 0.29049 1.6785 0.53096 0.29802 0.13634 0.5844 0.29665 0.85639 0.47958 0.80946 0.53439 1.2914 1.4432 1.2798 2.413 0.049328 1.1345-0.46656 2.2198-1.3778 2.8973-0.68614 0.52959-1.4874 0.88962-2.3386 1.0513-1.7731 0.39908-3.628 0.20519-5.2802-0.55186-0.75568-0.35866-1.4459-0.84098-2.0427-1.4271-0.018498-0.021238-0.035968-0.043162-0.052069-0.066113l2.1413-1.931c0.085982 0.07776 0.15621 0.14216 0.22712 0.20553 0.6053 0.57001 1.3332 0.99307 2.128 1.2366 0.70224 0.20416 1.449 0.19663 2.1471-0.021238 0.17573-0.056179 0.34393-0.13394 0.50013-0.23191 0.11544-0.072965 0.21547-0.16717 0.29494-0.27816 0.24116-0.31412 0.18156-0.76424-0.13257-1.0054-0.027062-0.020896-0.055837-0.039736-0.085982-0.056522-0.28124-0.1586-0.58954-0.2624-0.90949-0.3059-0.49191-0.087009-0.98725-0.15723-1.4788-0.24596-0.66867-0.11476-1.3243-0.2946-1.9577-0.53713-0.56179-0.18943-1.0558-0.53918-1.4209-1.0061-0.77521-1.0092-0.86941-2.3845-0.23979-3.4903 0.4443-0.84509 1.1842-1.497 2.0783-1.8313 0.89613-0.35215 1.8594-0.50048 2.8199-0.43436 1.6672 0.071252 3.2755 0.6351 4.6225 1.62 0.043162 0.029802 0.079473 0.059947 0.1336 0.10208zm-45.351-1.3158h3.4153v0.95471c0.036653-0.016443 0.071251-0.037339 0.10277-0.062003 0.52069-0.58132 1.226-0.96567 1.9971-1.088 0.88688-0.2004 1.8104-0.16545 2.6798 0.10071 0.13017 0.04282 0.2576 0.092833 0.38195 0.1497 0.87694 0.36859 1.4888 1.1794 1.6025 2.1239 0.072965 0.48506 0.10654 0.9756 0.099684 1.4661 0.002055 2.5277 0.002055 5.0551 0 7.5828v0.23499h-3.3913c-0.002055-0.081186-0.006166-0.16648-0.006166-0.25178 0-2.1663 0.002398-4.333-0.00274-6.4993 0.004453-0.36105-0.015758-0.72177-0.060975-1.0797-0.065429-0.58509-0.5039-1.0599-1.0818-1.1722-0.40079-0.10311-0.82179-0.095916-1.2188 0.021238-0.39702 0.10516-0.72245 0.38983-0.879 0.76938-0.11339 0.26343-0.18121 0.54432-0.2004 0.8307-0.024321 0.29837-0.040079 0.59845-0.040421 0.89784-0.003426 2.0783-0.004111 4.1562-0.002056 6.2345v0.25212h-3.3848c-0.041107-0.14456-0.053439-11.193-0.010619-11.466zm-24.063 5.9821c-0.078788 0.020553-0.1312 0.031173-0.18156 0.047958-0.65497 0.2165-1.3116 0.42854-1.9639 0.65326-0.23774 0.085639-0.47033 0.1843-0.6971 0.29528-0.20485 0.095916-0.38743 0.23362-0.53576 0.40456-0.33468 0.37407-0.3703 0.92867-0.085982 1.3425 0.25589 0.39565 0.71183 0.61386 1.1805 0.56522 0.97183-0.081528 1.8005-0.73684 2.104-1.6635 0.1401-0.53679 0.20074-1.091 0.17984-1.6453zm3.689 5.4871h-3.3204c-0.032201-0.16511-0.040764-0.33399-0.025349-0.5015-0.006166-0.16203 0-0.32474 0-0.52822l-0.18704 0.11921c-0.34564 0.24459-0.70361 0.47136-1.0725 0.67963-1.2305 0.66867-2.6952 0.75191-3.9935 0.22712-1.1298-0.42888-1.9238-1.4548-2.0553-2.6562-0.20793-1.338 0.31001-2.3955 1.3517-3.2248 0.52206-0.40216 1.1205-0.69333 1.7587-0.85639 0.90435-0.25075 1.8241-0.43231 2.7449-0.60941 0.36242-0.068511 0.72519-0.13702 1.1044-0.20553 0.053096-0.46896 0.004796-0.94374-0.14148-1.3922-0.13394-0.33262-0.43984-0.56419-0.7961-0.6029-0.38024-0.064401-0.77007-0.038366-1.1383 0.075705-0.45115 0.12469-0.80604 0.47341-0.93861 0.92251-0.031172 0.096601-0.057549 0.19526-0.088379 0.29974h-3.4047c0.009934-0.32851 0.058235-0.65463 0.14353-0.97218 0.16203-0.60496 0.51623-1.1407 1.0095-1.5268 0.60187-0.48163 1.3195-0.79713 2.0814-0.91497 1.2918-0.23499 2.6178-0.19903 3.8949 0.10585 0.43333 0.10277 0.85023 0.26548 1.2387 0.48369 0.95436 0.49191 1.5391 1.4905 1.5014 2.5637v6.722c0 0.1634 0 0.32714 0.005138 0.4902-0.031515 0.45766 0.083241 0.9136 0.32748 1.3017zm-99.867-5.7858c-0.0075363-0.12332-0.014045-0.32748-0.034256-0.53062-0.040079-0.5522-0.19217-1.09-0.44738-1.5812-0.33502-0.64949-0.95299-1.1065-1.6724-1.2363-0.45423-0.076048-0.91874-0.059605-1.3665 0.047958-0.55665 0.11202-1.0465 0.43984-1.3623 0.91189-0.17265 0.24527-0.31173 0.51281-0.41312 0.79542-0.23191 0.68648-0.30899 1.4158-0.22506 2.1355 0.041107 0.49739 0.17573 0.98245 0.39634 1.4302 0.49945 1.0715 1.6679 1.6614 2.8268 1.4267 0.89853-0.1127 1.6604-0.71457 1.9779-1.5627 0.23499-0.58303 0.34393-1.2089 0.31995-1.8368zm-2.8377-6.0876c0.80569-0.0065086 1.608 0.10791 2.3794 0.34016 1.5025 0.43676 2.7271 1.5299 3.3314 2.973 0.77144 1.7066 0.80706 3.6554 0.098656 5.3894-0.58817 1.5984-1.9262 2.8045-3.577 3.2238-1.5316 0.44909-3.1656 0.40353-4.6697-0.13051-1.8358-0.58885-3.1985-2.1406-3.5455-4.037-0.29186-1.2623-0.24184-2.5795 0.1449-3.8157 0.54706-1.9241 2.1304-3.3766 4.0942-3.7561 0.57241-0.12812 1.1572-0.1908 1.7436-0.18704zm32.342 4.6786h4.6965c-0.022608-0.49568-0.17916-0.97594-0.45252-1.3901-0.10722-0.1497-0.23636-0.28261-0.38298-0.39428-0.53884-0.40661-1.2253-0.56385-1.8875-0.43231-1.0856 0.20382-1.8967 1.115-1.9735 2.2167zm8.2248 2.1314h-8.2522c-0.025007 0.17265-0.019868 0.34838 0.015072 0.51932 0.039052 0.35318 0.14285 0.69573 0.30625 1.0112 0.38469 0.78 1.164 1.2884 2.0327 1.3267 0.38298 0.034598 0.76938 0.0037681 1.1421-0.091463 0.58372-0.14319 1.1-0.48403 1.461-0.96464 0.17676-0.2326 0.32029-0.4902 0.47718-0.73752 0.039736-0.062688 0.071937-0.13017 0.12161-0.22061 0.85947 0.42477 1.707 0.85982 2.575 1.2976-0.10551 0.15415-0.19971 0.2946-0.29631 0.43333-0.40764 0.60838-0.9064 1.1506-1.4792 1.6069-0.91702 0.70532-2.0118 1.1424-3.1625 1.262-0.95471 0.12229-1.9248 0.043505-2.8473-0.23088-1.7864-0.48403-3.1649-1.9067-3.5924-3.7075-0.48335-1.7313-0.33091-3.5783 0.43025-5.2069 0.70532-1.6241 2.2068-2.762 3.961-3.0022 1.0003-0.18841 2.0296-0.15312 3.0145 0.10277 1.6888 0.41621 3.0453 1.6713 3.591 3.3228 0.24458 0.6947 0.39531 1.4189 0.44875 2.1533 0.026034 0.29837 0.034256 0.5981 0.051384 0.89716 0.004795 0.066113 0.002055 0.13325 0.002055 0.22849zm98.9-2.1393c0.30556 0.042477 4.5437 0.027404 4.6947-0.018498-0.03357-0.46279-0.17436-0.9112-0.41107-1.3099-0.12195-0.19046-0.28055-0.35489-0.46656-0.48369-1.0989-0.77007-2.6137-0.50356-3.3838 0.59536-0.25144 0.359-0.40148 0.77966-0.43334 1.2168zm-0.028432 2.1338c-0.16306 1.413 0.84988 2.6904 2.2629 2.8538 0.091121 0.010277 0.18293 0.0161 0.27473 0.016785 0.32235 0.009249 0.64435-0.024664 0.95745-0.10071 0.57104-0.13874 1.0773-0.46862 1.4346-0.93484 0.1908-0.24733 0.34461-0.52274 0.51384-0.78788 0.039394-0.062003 0.071937-0.12812 0.11476-0.20553l2.5692 1.2983c-0.060632 0.092833-0.11099 0.17128-0.16408 0.25041-0.40456 0.62619-0.8975 1.1907-1.4634 1.6761-0.93758 0.76904-2.08 1.2472-3.2858 1.3754-0.95436 0.12538-1.9245 0.049671-2.848-0.22198-1.7189-0.45492-3.0686-1.7857-3.5475-3.4982-0.57618-1.8296-0.42648-3.8106 0.41826-5.5326 0.71697-1.5624 2.1814-2.6514 3.8842-2.8878 1.0544-0.20382 2.1417-0.15689 3.1745 0.13702 1.6761 0.46382 2.9977 1.7546 3.5009 3.4194 0.2254 0.68683 0.36345 1.399 0.41107 2.1201 0.021238 0.2648 0.031172 0.53028 0.044874 0.79542 0.003426 0.068511 0 0.13428 0 0.2254h-8.2525v0.0013703zm-154.89 5.0698h-3.8784c-0.043847-0.15175-0.054124-15.313-0.0099342-15.554h12.008v2.9768c-0.22643 0.019868-0.45389 0.025007-0.681 0.0161-0.22609 0.0037682-0.45217 0-0.6786 0h-6.7528v3.2495c0.49602 0.013017 0.99341 0.0041107 1.4894 0.0058235 0.49602 0.0017128 0.98691 0 1.4805 0h4.4875v3.022h-7.4643v6.2835zm96.846-7.9809c0.073992 0.0034256 0.12126 0.0075363 0.1682 0.0071937 0.84954 0 1.6987 0.0099342 2.5479-0.0082213 0.39668-0.0054809 0.79268-0.04419 1.1828-0.11613 0.85297-0.11202 1.5206-0.78959 1.62-1.6443 0.062688-0.34187 0.07639-0.69094 0.041449-1.0366-0.034598-0.86564-0.65531-1.5963-1.5042-1.7703-0.4258-0.10448-0.86324-0.15381-1.3017-0.14627-0.8492-0.0054809-1.6987 0-2.5479 0h-0.20553v4.7146h-0.001028zm-0.012675 2.8929v5.0808h-3.9226v-15.545c0.064401-0.0047958 0.12366-0.01336 0.18292-0.013017 2.3777 0 4.7554-0.0037682 7.1331 0.0051383 0.85023-0.013702 1.6994 0.065428 2.5322 0.23636 0.98382 0.18704 1.8717 0.71218 2.5096 1.4843 0.40113 0.51966 0.68785 1.1184 0.84098 1.757 0.30385 1.0609 0.3083 2.1852 0.013359 3.2488-0.4282 1.6854-1.7563 2.9943-3.4478 3.3982-0.82282 0.21547-1.6693 0.32543-2.5198 0.32748-1.014 0.018156-2.0279 0.014387-3.0419 0.019868-0.081528 0-0.16271-3.425e-4 -0.27987-3.425e-4z" />
            </g>
        </symbol>
    </svg>
</div>

@include('common.topbar')


<script type="text/javascript">
    !function(T,l,y){var S=T.location,u="script",k="instrumentationKey",D="ingestionendpoint",C="disableExceptionTracking",E="ai.device.",I="toLowerCase",b="crossOrigin",w="POST",e="appInsightsSDK",t=y.name||"appInsights";(y.name||T[e])&&(T[e]=t);var n=T[t]||function(d){var g=!1,f=!1,m={initialize:!0,queue:[],sv:"4",version:2,config:d};function v(e,t){var n={},a="Browser";return n[E+"id"]=a[I](),n[E+"type"]=a,n["ai.operation.name"]=S&&S.pathname||"_unknown_",n["ai.internal.sdkVersion"]="javascript:snippet_"+(m.sv||m.version),{time:function(){var e=new Date;function t(e){var t=""+e;return 1===t.length&&(t="0"+t),t}return e.getUTCFullYear()+"-"+t(1+e.getUTCMonth())+"-"+t(e.getUTCDate())+"T"+t(e.getUTCHours())+":"+t(e.getUTCMinutes())+":"+t(e.getUTCSeconds())+"."+((e.getUTCMilliseconds()/1e3).toFixed(3)+"").slice(2,5)+"Z"}(),iKey:e,name:"Microsoft.ApplicationInsights."+e.replace(/-/g,"")+"."+t,sampleRate:100,tags:n,data:{baseData:{ver:2}}}}var h=d.url||y.src;if(h){function a(e){var t,n,a,i,r,o,s,c,p,l,u;g=!0,m.queue=[],f||(f=!0,t=h,s=function(){var e={},t=d.connectionString;if(t)for(var n=t.split(";"),a=0;a<n.length;a++){var i=n[a].split("=");2===i.length&&(e[i[0][I]()]=i[1])}if(!e[D]){var r=e.endpointsuffix,o=r?e.location:null;e[D]="https://"+(o?o+".":"")+"dc."+(r||"services.visualstudio.com")}return e}(),c=s[k]||d[k]||"",p=s[D],l=p?p+"/v2/track":config.endpointUrl,(u=[]).push((n="SDK LOAD Failure: Failed to load Application Insights SDK script (See stack for details)",a=t,i=l,(o=(r=v(c,"Exception")).data).baseType="ExceptionData",o.baseData.exceptions=[{typeName:"SDKLoadFailed",message:n.replace(/\./g,"-"),hasFullStack:!1,stack:n+"\nSnippet failed to load ["+a+"] -- Telemetry is disabled\nHelp Link: https://go.microsoft.com/fwlink/?linkid=2128109\nHost: "+(S&&S.pathname||"_unknown_")+"\nEndpoint: "+i,parsedStack:[]}],r)),u.push(function(e,t,n,a){var i=v(c,"Message"),r=i.data;r.baseType="MessageData";var o=r.baseData;return o.message='AI (Internal): 99 message:"'+("SDK LOAD Failure: Failed to load Application Insights SDK script (See stack for details) ("+n+")").replace(/\"/g,"")+'"',o.properties={endpoint:a},i}(0,0,t,l)),function(e,t){if(JSON){var n=T.fetch;if(n&&!y.useXhr)n(t,{method:w,body:JSON.stringify(e),mode:"cors"});else if(XMLHttpRequest){var a=new XMLHttpRequest;a.open(w,t),a.setRequestHeader("Content-type","application/json"),a.send(JSON.stringify(e))}}}(u,l))}function i(e,t){f||setTimeout(function(){!t&&m.core||a()},500)}var e=function(){var n=l.createElement(u);n.src=h;var e=y[b];return!e&&""!==e||"undefined"==n[b]||(n[b]=e),n.onload=i,n.onerror=a,n.onreadystatechange=function(e,t){"loaded"!==n.readyState&&"complete"!==n.readyState||i(0,t)},n}();y.ld<0?l.getElementsByTagName("head")[0].appendChild(e):setTimeout(function(){l.getElementsByTagName(u)[0].parentNode.appendChild(e)},y.ld||0)}try{m.cookie=l.cookie}catch(p){}function t(e){for(;e.length;)!function(t){m[t]=function(){var e=arguments;g||m.queue.push(function(){m[t].apply(m,e)})}}(e.pop())}var n="track",r="TrackPage",o="TrackEvent";t([n+"Event",n+"PageView",n+"Exception",n+"Trace",n+"DependencyData",n+"Metric",n+"PageViewPerformance","start"+r,"stop"+r,"start"+o,"stop"+o,"addTelemetryInitializer","setAuthenticatedUserContext","clearAuthenticatedUserContext","flush"]),m.SeverityLevel={Verbose:0,Information:1,Warning:2,Error:3,Critical:4};var s=(d.extensionConfig||{}).ApplicationInsightsAnalytics||{};if(!0!==d[C]&&!0!==s[C]){method="onerror",t(["_"+method]);var c=T[method];T[method]=function(e,t,n,a,i){var r=c&&c(e,t,n,a,i);return!0!==r&&m["_"+method]({message:e,url:t,lineNumber:n,columnNumber:a,error:i}),r},d.autoExceptionInstrumented=!0}return m}(y.cfg);(T[t]=n).queue&&0===n.queue.length&&n.trackPageView({})}(window,document,{
        src: "https://az416426.vo.msecnd.net/scripts/b/ai.2.min.js", // The SDK URL Source
//name: "appInsights", // Global SDK Instance name defaults to "appInsights" when not supplied
//ld: 0, // Defines the load delay (in ms) before attempting to load the sdk. -1 = block page load and add to head. (default) = 0ms load after timeout,
//useXhr: 1, // Use XHR instead of fetch to report failures (if available),
//crossOrigin: "anonymous", // When supplied this will add the provided value as the cross origin attribute on the script tag
        cfg: { // Application Insights Configuration
            instrumentationKey: "72d0820b-fdd8-44e4-9d47-a9e3dd938f4a"
            /* ...Other Configuration Options... */
        }});
</script>

<div id="container-fluid">
    <div class="page" style="background: black">
        @yield('content')
    </div>
</div>
<script>
    var fpLocale = "en";
</script>


<div id="fb-root" data-locale="en_GB"></div>

<script src="{{asset('/static/js/modernizr.min.js')}}"></script>
<script src="{{asset('/static/js/lib.js')}}"></script>
<script src="{{asset('/static/js/main.js')}}"></script>


<script>
    (function (h, o, t, j, a, r) {
        h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
        h._hjSettings = { hjid: 623806, hjsv: 5 };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script'); r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
</script>

</body>
</html>
