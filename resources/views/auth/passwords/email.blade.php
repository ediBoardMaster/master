@extends('layouts.auth')

@section('content')
<h3>FORGOT PASSWORD?</h3>
<p>Try that again, and if it still doesn't work, let us know.</p>
@endsection

@section('card-content')
<div class="header">
    <h5>Forgot Password?</h5>
    <span>Enter your e-mail address below to reset your password.</span>
</div>
<form class="form" method="POST" action="{{ route('password.email') }}">

    @csrf

    <div class="input-group">
        <input placeholder="Enter Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
        

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="footer">
        <button class="btn btn-primary btn-round btn-block" type="submit">SUBMIT</button>
    </div>

</form>
<a href="javascript:void(0);" class="link">Need Help?</a>
@endsection