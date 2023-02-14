@extends('frontend.layouts.mainbody')
@section('content')
    {{-- ! Navbar ! --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">PIRATES BIKES</h5>
                </div>
                <div class="offcanvas-body">
                    <nav>
                        <ul class="nav flex-column m-auto mb-2 mb-lg-0 text-center">
                            <li class="nav-item">
                                <a class="nav-link" href="/">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ 'bikesignup' }}">سجل العجلة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ 'blog' }}">المدونة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ 'contact' }}">تواصل معنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ 'about' }}">من نحن</a>
                            </li>
                        </ul>
                        <div class="social-login">
                            <a class="social" href="https://www.facebook.com/groups/PIRATES.BIKES/">
                                <i class="fab fa-facebook fa-3x"></i>
                            </a>
                            <a class="login-icon" href="profile">
                                <i class="fad fa-user-circle fa-3x"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{'main'}}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'bikesignup' }}">سجل العجلة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'blog' }}">المدونة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'contact' }}">تواصل معنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'about' }}">من نحن</a>
                    </li>
                </ul>
                <ul class="left-nav">
                    <li>
                        <a class="social" href="https://www.facebook.com/groups/PIRATES.BIKES/">
                            <i class="fab fa-facebook fa-3x"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="login-icon pl-100" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            <i class="fad fa-user-circle fa-3x"></i>
                            {{-- <img src="" alt=""> --}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <h4 class="text-center text-white text-decoration-underline">إزيك يا </h4>
                            <li class="dropdown-item">
                                <a href="{{ url('user-dashboard') }}">لوحة التحكم</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ url('profile') }}">الصفحة الشخصية</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ url('setting') }}">الإعدادات</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ url('logout') }}">تسجيل خروج</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- ! Search Section ! --}}
    <section class="search mb-180">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{ 'search' }}" class="search-form d-flex">
                        <button class="button btn-search" type="submit" name="submit">بحث</button>
                        <input class="form-control" type="search" name="search" placeholder="إبحث برقم الكادر أو النوع"
                            aria-label="Search" />
                    </form>
                    {{-- <ul class="result m-0 bg-primary p-3 mt-3 rounded border border-2 border-dark d-none">
                        @foreach ($data as $result)
                            <li class="nav-item">
                                {{$result->content}}
                            </li>
                        @endforeach
                    </ul> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
