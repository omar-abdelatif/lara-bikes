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
    @include('frontend.dashboard.inc.styles')
    <!-- TITLE -->
    <title>Pirates Bikes | User Dashboard</title>
</head>

<body>
    <main>
        <!-- PRELOADER -->
        <div class="preloader">
            <img src="{{ asset('frontend_assets/imgs/logo.png') }}" alt="logo" />
        </div>
        @include('frontend.dashboard.inc.header')
        <section class="content">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    @include('frontend.dashboard.inc.aside')
                    <div class="col-lg-10 statistics">
                        <div class="statistics-count">
                            <div class="row g-0">
                                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                    <div class="box box-green">
                                        <p>عدد الأعضاء</p>
                                        <span>0</span>
                                        <i class="fad fa-users"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                    <div class="box box-orange">
                                        <p>عدد الدراجات</p>
                                        <span>0</span>
                                        <i class="fad fa-biking"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                    <div class="box box-purple">
                                        <p>الأعضاء الجدد</p>
                                        <span>0</span>
                                        <i class="fad fa-user-plus"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                    <div class="box box-blue">
                                        <p>عدد الدراجات الجديدة</p>
                                        <span>0</span>
                                        <i class="fad fa-biking"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
        @extends('frontend.dashboard.inc.footer')
