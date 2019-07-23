<!doctype html>
<html class="no-js " lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

<body class="{{ config('app.theme','theme-blue') }}">
    <div class="authentication">
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <div class="company_detail">
                            <h4 class="logo"><img src="{{ asset('images/logo.svg') }}" alt=""> {{ config('app.name') }}</h4>

                            @yield('content')
                            @include('layouts.auth.footer')

                        </div>
                    </div>                        
                    <div class="col-lg-5 col-md-12 offset-lg-1">
                        <div class="card-plain">
                            
                            @yield('card-content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>

    @include('layouts.auth.js')

</body>
</html>