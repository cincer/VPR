@extends('layouts.out')

@section('content')
<!-- email send icon with text-->
<div class="text-center m-auto">
    <img src="assets/images/mail_sent.svg" alt="mail sent image" height="64" />
    <h4 class="text-dark-50 text-center mt-4 font-weight-bold">{{ __('Verify Your Email Address') }}</h4>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    <p class="text-muted mb-4">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
    <p class="text-muted mb-4">{{ __('If you did not receive the email') }},</p>
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
    </form>
</div>
<!-- form -->
<form action="/">
    @csrf
    <div class="form-group mb-0 text-center">
        <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-home mr-1"></i> Vissza a főoldalra </button>
    </div>
</form><!-- end form-->
<!-- Footer-->
<footer class="footer footer-alt">
    <p class="text-muted"><script>document.write(new Date().getFullYear())</script> © {{ config('app.name', 'Laravel') }} - valami.com</p>
</footer>
@endsection