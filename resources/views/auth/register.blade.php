@extends('layouts.out')

@section('content')
    <!-- title-->
    <h4 class="mt-0">{{ __('Register') }}</h4>
    <p class="text-muted mb-4">Nincs még prolfod? Készítsd el magadnak, nem tart soká!</p>
    <!-- form -->
    <form method="POST" action="{{ route('register') }}">
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" name="password_confirmation" type="password" class="form-control" required autocomplete="new-password">
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                <label class="custom-control-label" for="checkbox-signup">Elfogadom a <a href="javascript: void(0);" class="text-muted">Felhasználási feltételeket</a></label>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-account-circle"></i> {{ __('Register') }}</button>
        </div>
    </form>
    <!-- end form-->
    <!-- Footer-->
    <footer class="footer footer-alt">
        <p class="text-muted">Van már profilod? <a href="{{ route('login') }}" class="text-muted ml-1"><b>{{ __('Login') }}</b></a></p>
    </footer>
@endsection
