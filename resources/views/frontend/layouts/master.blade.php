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
    <link rel="shortcut icon" href="{{asset('frontend_assets/imgs/logo.png')}}" />
    @include('frontend.inc.styles')

    <!-- TITLE -->
    <title>Pirates Bikes | Landing Page</title>
</head>

<body>
    <main>
        <!-- PRELOADER -->
        <div class="preloader">
            <img src="{{asset('frontend_assets/imgs/logo.png')}}" alt="logo" />
        </div>
        <!-- BACKGROUND IMAGE -->
        <div class="land-bg" style="background-image: url({{asset("frontend_assets/imgs/audi.jpg")}}) !important;"></div>
        <!-- HEADER -->
        @include('frontend.inc.header')
        <!-- ENTER -->
        <section class="slogan">
            @yield('content')
        </section>
        @include('frontend.inc.footer')
