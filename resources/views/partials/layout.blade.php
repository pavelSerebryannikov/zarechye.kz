<!DOCTYPE html>
<html lang="ru">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="icon" href="https://zarechye.kz/public/favicon.ico" type="image/x-icon">
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css?v=1">
    <link rel="stylesheet" href="/fonts/fonts.css">
    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{ \Storage::disk('public')->url(setting('site.logo')) }}">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <link href="https://zarechye.kz/public/css/misc/adaptive.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/be-style.css?v=1">
</head>

<body class="d-flex flex-column vh-100">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.modals')
    @include('partials.scripts')

    <script type="text/javascript">
        !function(e,n){
            var t="bookingengine",o="integration",i=e[t]=e[t]||{},a=i[o]=i[o]||{},r="__cq",c="__loader",d="getElementsByTagName";
            if(n=n||[],a[r]=a[r]?a[r].concat(n):n,!a[c]){a[c]=!0;var l=e.document,g=l[d]("head")[0]||l[d]("body")[0];
                !function n(i){if(0!==i.length){var a=l.createElement("script");a.type="text/javascript",a.async=!0,a.src="https://"+i[0]+"/integration/loader.js",
                    a.onerror=a.onload=function(n,i){return function(){e[t]&&e[t][o]&&e[t][o].loaded||(g.removeChild(n),i())}}(a,(function(){n(i.slice(1,i.length))})),g.appendChild(a)}}(
                    ["kz-ibe.hopenapi.com", "ibe.hopenapi.com", "ibe.behopenapi.com"])}
        }(window, [
            ["setContext", "BE-INT-zarechye.new", "{{app()->getLocale()}}"],
            ["embed", "booking-form", {
                container: "be-booking-form"
            }],
            ["embed", "search-form", {
                container: "be-search-form"
            }],
            ["embed", "search-form", {
                container: "be-search-form-2"
            }],
            ["setContext", "BE-INT-zarechye.certificates", "{{app()->getLocale()}}"],
            ["embed", "booking-form", {
                container: "be-booking-form-certificates"
            }]
        ]);
    </script>

</body>

</html>