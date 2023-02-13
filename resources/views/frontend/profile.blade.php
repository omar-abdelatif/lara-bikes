@extends('frontend.layouts.profile')
@section('content')
    <section class="profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="breadcrumbs" dir="rtl">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="main">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">الملف الشخصي</li>
                        </ol>
                    </div>
                    <div class="personal-data">
                        <div class="img">
                            <img id="profile" src="{{ asset('frontend_assets/imgs/profile.svg') }}" alt="profile photo">
                        </div>
                        <div class="profile-txt">
                            <p class="username">
                                الإسم:
                                <span id="username"></span>
                            </p>
                            <p class="tel">
                                التلفون:
                                <span id="usertel"></span>
                            </p>
                            <p class="bike-kind">
                                نوع العجلة:
                                <span id="bikekind"></span>
                            </p>
                            <p class="bike-model">
                                الموديل:
                                <span id="bikemodel"></span>
                            </p>
                            <p class="bike-hrm">
                                النوع:
                                <span id="bikehrm"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery">
                        <div class="imgs-title">
                            <p>معرض الصور</p>
                        </div>
                        <div class="imgs-container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="bike-img"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="bike-img"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="bike-img"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="bike-img"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="status">
                        <div class="bike-status">
                            <p>الحالة:</p>
                            <div class="selector">
                                <div id="selectFiled">
                                    <p id="selectText">أختر حالة الدراجة</p>
                                    <i id="arrowIcon" class="far fa-chevron-down"></i>
                                </div>
                                <ul id="list" class="hide">
                                    <li id="options" class="options">
                                        <p>Owned</p>
                                    </li>
                                    <li id="options" class="options">
                                        <p>Stolen</p>
                                    </li>
                                    <li id="options" class="options">
                                        <p>Sold</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bike-qrcode">
                        <div class="qrcode">
                            <img src="{{ asset('frontend_assets/imgs/download.png') }}" alt="scan qrcode">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
