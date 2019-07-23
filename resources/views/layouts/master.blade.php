<!doctype html>
<html class="no-js " lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>{{config('app.name')}}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color_skins.css') }}">

    @yield('css')

</head>
<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="zmdi-hc-spin" src="{{ asset('images/logo.svg') }}" width="48" height="48" alt="{{config('app.name')}}">
            </div>
            <p>Please wait...</p>        
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    @include('layouts.content.top_navbar')
    @include('layouts.content.leftsidebar')
    @include('layouts.content.rightsidebar')
    @include('layouts.content.content')
    @include('layouts.content.js')

</body>
</html>