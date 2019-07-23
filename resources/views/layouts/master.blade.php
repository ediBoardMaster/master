<!doctype html>
<html class="no-js " lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

<body class="{{ config('app.theme','theme-blue') }}">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="zmdi-hc-spin" src="{{ asset('images/logo.svg') }}" width="48" height="48" alt="{{ config('app.name') }}">
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