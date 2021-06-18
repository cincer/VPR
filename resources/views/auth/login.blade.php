@extends('layouts.out')

@section('content')
<!-- title-->
<h4 class="mt-0">{{ __('Login') }}</h4>
<p class="text-muted mb-4">Add meg email címedet és jelszavadat a belépéshez.</p>
<!-- form -->
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label for="emailaddress">{{ __('E-Mail Address') }}</label>
        <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" type="email" required autofocus autocomplete="email" value="{{ old('email') }}">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        @if (Route::has('password.request'))
            <a class="text-muted float-right" href="{{ route('password.request') }}">
                <small>{{ __('Forgot Your Password?') }}</small>
            </a>
        @endif
        <label for="password">{{ __('Password') }}</label>
        <div class="input-group input-group-merge">
            <input id="password" name="password" class="form-control @error('password') is-invalid @enderror" type="password" required autocomplete="current-password">
            <div class="input-group-append" data-password="false">
                <div class="input-group-text">
                    <span class="password-eye"></span>
                </div>
            </div>
        </div>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group mb-3">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
        </div>
    </div>
    <div class="form-group mb-0 text-center">
        <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> {{ __('Login') }}</button>
    </div>
</form>
<!-- end form-->
<!-- Footer-->
@if (Route::has('register'))
    <footer class="footer footer-alt">
        <p class="text-muted">Nincs még profilod? <a href="{{ route('register') }}" class="text-muted ml-1"><b>{{ __('Register') }}</b></a></p>
    </footer>
@endif  
@endsection
