@extends('layouts.app')
@section('content')
    <div class="body">
        <div role="main" class="main">

            <section class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Pages</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Login</h1>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">

                <div class="row">
                    <div class="col-md-12">

                        <div class="row featured-boxes login">
                            <div class="col-sm-6">
                                <div class="featured-box featured-box-secundary default info-content">
                                    <div class="box-content">
                                              <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                        <h4>I'm a Returning Customer</h4>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>Username or E-mail Address</label>
                                                        <input type="text" value="{{ old('email') }}" name="email" class="form-control input-lg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        {{-- <a class="pull-right" href="#">(Lost Password?)</a> --}}
                                                        <label>Password</label>
                                                        <input type="password" value="{{ old('password') }}" name="password" class="form-control input-lg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="remember-box checkbox">
                                                        <label for="remember_me">
                                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">remember me
                                                        </label>
                                                    </span>
                                                </div>
                                                <div class="mt-4">
                                                    @if (Route::has('password.request'))
                                                        <a class="" href="{{ route('password.request') }}">
                                                            {{ __('Forgot your password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="featured-box featured-box-secundary default info-content">
                                    <div class="box-content">
                                        @if ($errors->any())
                                            <div {{ $attributes }}>
                                                <div class="font-medium text-red-600">
                                                    {{ __('Whoops! Something went wrong.') }}
                                                </div>

                                                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <h4>Register An Account</h4>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control input-lg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>E-mail Address</label>
                                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control input-lg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" id="password" value="" class="form-control input-lg">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="password_confirmation">Re-enter Password</label>
                                                        <input type="password" id="password_confirmation" name="password_confirmation" value="" class="form-control input-lg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" value="Register" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>





    {{-- <x-auth-card>
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
    </x-auth-card> --}}
@endsection

