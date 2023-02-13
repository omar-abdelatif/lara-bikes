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
    <title>Pirates Bikes | Login</title>
</head>

<body>
    <main>
        <div class="preloader">
            <img src="{{asset('frontend_assets/imgs/logo.png')}}" alt="">
        </div>
        <!-- BACKGROUND SECTION -->
        <div class="main-bg"></div>
        <!-- HEADER -->
        @include('frontend.inc.header')
        <section class="form-bg login-form">
            @yield('content')
        </section>
        <!-- FOOTER -->
    @include('frontend.inc.footer')
