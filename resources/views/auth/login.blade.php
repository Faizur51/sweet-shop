{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}


    <!doctype html>
<html lang="en" class="fixed accounts sign-in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/backend/user')}}/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/backend/user')}}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/backend/user')}}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/backend/user')}}/favicon/favicon-16x16.png">
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('assets/backend/user')}}/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets/backend/user')}}/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('assets/backend/user')}}/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('assets/backend/user')}}/stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <img alt="logo" src="{{asset('assets/backend/user')}}/images/logo-dark.png" />
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" class="form-control" id="email"  name="email" :value="old('email')" required  placeholder="Email">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" id="password" name="password" :value="old('password')" required  placeholder="Password">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="remember-me" value="option1" checked>
                                <label class="check" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <input type="submit" value="Login" class="btn btn-primary btn-block">

                        </div>
                        <div class="form-group text-center">
                            <a href="pages_forgot-password.html">Forgot password?</a>
                            <hr/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="{{asset('assets/backend/user')}}/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="{{asset('assets/backend/user')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets/backend/user')}}/vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="{{asset('assets/backend/user')}}/javascripts/template-script.min.js"></script>
<script src="{{asset('assets/backend/user')}}/javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>

</html>

