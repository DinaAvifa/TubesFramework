<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $pageTitle }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="icon" href="{{ Vite::asset('resources/images/logo.png') }}" type="image/icon type">
    <!-- Scripts -->
    @vite('resources/sass/app.scss')
</head>

<body
    style="
    background-image: url('{{ Vite::asset('resources/images/background.png') }}');
    background-size: cover;
    background-position: center;
    color:#000">
    @section('content')
        <div class="container-sm my-5" style="">
            <div class="row justify-content-center">
                <div class="p-5  rounded-3 col-lg-4 bg-app">
                    <div class="mb-3 text-center">
                        <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}"alt="image"
                            style="width: 100px;">
                        <h5 class="text-white">login dulu yuk!</h5>
                    </div>
                    <div class="row">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <input id="email" type="email" for="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Your Email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <input id="password" type="password" for='password'
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Enter Your Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 d-grid">
                                    <a href="{{ route('home') }}" class="btn btn-outline-light btn-lg mt-3 bg-danger"><i
                                            class="bi-arrow-left-circle me-2"></i>
                                        Cancel</a>
                                </div>
                                <div class="col-md-6 d-grid">
                                    <button type="submit" class="btn btn-outline-light btn-lg mt-3 bg-success"><i
                                            class="bi bi-box-arrow-in-right"></i>
                                        {{ __('Login') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>