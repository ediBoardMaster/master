@extends('layouts.auth')

@section('content')

<h3>The ultimate <strong>Bootstrap 4</strong> Admin Dashboard</h3>
<p>InfiniO is fully based on HTML5 + CSS3 Standards. Is fully responsive and clean on every device and every browser</p>

@endsection

@section('card-content')

<div class="header">
    <h5>Sign Up</h5>
    <span>Register a new membership</span>
</div>
<form class="form" method="POST" action="{{ route('register') }}">
    @csrf                          
    <div class="input-group">

        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter User Name">
        <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="input-group">

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
    <div class="input-group">

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"/>
        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>

    </div>
    <div class="input-group">

        <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password"/>
        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
    <div class="checkbox">
        <input id="terms" type="checkbox" class="form-check-input" name="agreement">
        <label for="terms" class="form-check-label">I read and Agree to the <a href="javascript:void(0);">Terms of Usage</a></label>
    </div>                            

    <div class="footer">
        <button class="btn btn-primary btn-round btn-block" type="submit">SIGN UP</button>
    </div>
</form>
<a class="link" href="{{ route('login') }}">You already have a membership?</a>

@endsection