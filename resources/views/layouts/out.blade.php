<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
</head>
<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>
<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">
                <!-- Logo -->
                <div class="auth-brand text-center text-lg-left">
                    <a href="/" class="logo-dark">
                        <span><img src="images/logo-dark.png" alt="Logo helye" height="18"></span>
                    </a>
                    <a href="/" class="logo-light">
                        <span><img src="images/logo.png" alt="Logo helye" height="18"></span>
                    </a>
                </div>
                <main>
                    @yield('content')
                </main>
            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div><!-- end auth-fluid-form-box-->
</div><!-- end auth-fluid-->
<!-- bundle -->
<script src="js/vendor.min.js"></script>
<script src="js/app.min.js"></script>
</body>
</html>
