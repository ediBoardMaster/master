@extends('layouts.auth')

@section('content')

<h3>FORGOT PASSWORD?</h3>
<p>Lets get a new want and continue our journey <strong>:D</strong></p>

@endsection

@section('card-content')

<div class="header">
    <h5>Reset Password</h5>
    <span>Enter your new password below.</span>
</div>
<form class="form" method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="input-group">

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
    <div class="input-group">

        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="New Password">
        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>

    </div>
    <div class="input-group">

        <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm New Password">
        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>                           

    <div class="footer">
        <button class="btn btn-primary btn-round btn-block" type="submit">RESET PASSWORD</button>
    </div>
</form>

@endsection