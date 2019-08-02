@extends('layouts.auth')

@section('content')
<h3>The ultimate <strong>Bootstrap 4</strong> Admin Dashboard</h3>
<p>InfiniO is fully based on HTML5 + CSS3 Standards. Is fully responsive and clean on every device and every browser</p>
@endsection

@section('card-content')
<div class="header">
    <h5>Log in</h5>
</div>
<form class="form" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="input-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" />
        <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
    <div class="input-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
    <div class="footer">
        <button class="btn btn-primary btn-round btn-block" type="submit">SIGN IN</button>
        <a href="{{ route('register') }}" class="btn btn-primary btn-simple btn-round btn-block">SIGN UP</a>
    </div>
</form>

@if (Route::has('password.request'))
<a href="{{ route('password.request') }}" class="link">Forgot Password?</a>
@endif

@endsection