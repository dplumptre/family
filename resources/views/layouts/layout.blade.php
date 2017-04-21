<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>@yield('page_title', config('app.name'))</title>

    <meta name="description"
          content="Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="_token" value="{{ csrf_token() }}">

   <link rel="shortcut icon" href="{{ secure_asset('/assets/img/favicons/favicon.png') }}">

    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-160x160.png') }}" sizes="160x160">
    <link rel="icon" type="image/png" href="{{ secure_asset('/assets/img/favicons/favicon-192x192.png') }}" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('/assets/img/favicons/apple-touch-icon-180x180.png') }}">

    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" id="css-main" href="/assets/css/oneui.css">
    {{--<link rel="stylesheet" id="css-theme" href="/assets/css/themes/flat.min.css">--}}
    <link rel="stylesheet" id="css-theme" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    {{--<link rel="stylesheet" id="css-main" href="{{ secure_asset('assets/css/custom.css') }}">--}}
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
    @yield('head')
</head>
<body>

<div id="page-container" class="side-scroll header-navbar-fixed header-navbar-transparent">

    @include('layouts.partials.header')
    @include('modals.login')
    @yield('content')
    @include('layouts.partials.footer')
</div>
<!-- END Page Container -->

<script src="{{ secure_asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.slimscroll.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.scrollLock.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.appear.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.countTo.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/jquery.placeholder.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/core/js.cookie.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/app.js') }}"></script>
@include('includes.notify')

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo']);
    });
</script>
@yield('js')
</body>
</html>
