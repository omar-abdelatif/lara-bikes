<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- REQUIRED META -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('frontend_assets/imgs/logo.png') }}" />
    @include('frontend.inc.styles')

    <!-- TITLE -->
    <title>Pirates Bikes | Home Page</title>
</head>

<body>
    <main>
        <!-- PRELOADER -->
        <div class="preloader">
            <img src="{{ asset('frontend_assets/imgs/logo.png') }}" alt="logo" />
        </div>
        <!-- BACKGROUND IMAGE -->
        <div class="land-bg" style="background-image: url({{ asset('frontend_assets/imgs/audi.jpg') }}) !important;">
        </div>
        <!-- HEADER -->
        <div class="logo">
            <button class="offcanvas-nav btn btn-primary" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <i class="fal fa-bars"></i>
                <p>MENU</p>
            </button>
            <div class="loslo">
                <a href="{{ url('main') }}">
                    <img src="{{ asset('frontend_assets/imgs/logo.png') }}" alt="logo" />
                </a>
                <span>LOST IT - GET IT BACK</span>
            </div>
        </div>
        @yield('content')
    @extends('frontend.inc.footer')
