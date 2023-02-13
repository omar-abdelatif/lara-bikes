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
    <link rel="shortcut icon" href="{{ asset('frontend_assets/imgs/logo.png') }}">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.rtl.css') }}">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <style>
        .papa input {
            width: auto;
        }
    </style>
    <!-- TITLE -->
    <title>Pirates Bikes | SIGNUP</title>
</head>

<body>
    <main>
        <!-- PRELOADER -->
        <div class="preloader">
            <img src="{{ asset('frontend_assets/imgs/logo.png') }}" alt="" />
        </div>
        <!-- BACKGROUND SECTION -->
        <div class="main-bg"></div>
        <!-- HEADER -->
        <header>
            <!-- LOGO -->
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('frontend_assets/imgs/logo.png') }}" alt="" />
                </a>
                <span>LOST IT - GET IT BACK</span>
            </div>
        </header>
        <!-- SIGNUP FORM -->
        <section class="form-bg">
            <div class="form-title">
                <h3>تسجيل لأول مرة</h3>
            </div>
            <div class="social-buttons" dir="ltr">
                <div class="facebook">
                    <button type="button" class="btn btn-primary">
                        FACEBOOK
                    </button>
                </div>
                <div class="google">
                    <button type="button" class="btn btn-light">
                        GOOGLE
                    </button>
                </div>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mt-4">
                        <ul class="m-0">
                            <li>
                                <p class="m-0">{{ $error }}</p>
                            </li>
                        </ul>
                    </div>
                @endforeach
            @endif
            <form action="{{ 'store' }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="papa">
                                <input class="fname" type="text" name="name" placeholder="الإسم" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="papa">
                                <input class="email" type="email" name="email" placeholder="البريد الإلكتروني"
                                    required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="papa">
                                <input class="pass" type="password" name="password" placeholder="كلمة السر"
                                    required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="papa">
                                <input class="repeat-password" type="password" name="password_confirmation"
                                    placeholder="أعد كتابة كلمة السر" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="papa">
                                <input class="phone" type="number" name="phone" placeholder="التلفون" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="papa">
                                <input class="address" type="text" name="address" placeholder="العنوان" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="papa">
                                <input type="file" name="user_img" class="form-control" style="height: 44px; display: inline-block; border-right: 1px solid #000;">
                            </div>
                            <div class="gender">
                                <div class="sex">
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" id="male" value="male">
                                </div>
                                <div class="sex">
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" id="female" value="female">
                                </div>
                            </div>
                        </div>
                    </div>

                    <input class="btn submit" type="submit" value="تسجيل" />
                </div>
            </form>
            <div class="account">
                <p class="have-acc">
                    <a href="{{ 'signin' }}" class="signin">لديك حساب</a>
                </p>
            </div>
        </section>
        <!-- FOOTER -->
        <footer>
            <div class="footer">
                <div class="left-side">
                    <p>
                        تم التصميم و البرمجة بواسطة
                        <a href="https://www.facebook.com/omar.elmalek.5/">Omar Abdelatif</a>
                    </p>
                </div>
                <div class="right-side">
                    <p>
                        All Copyrights Reserved <span> &copy;</span> Pirates
                        Bikes
                    </p>
                </div>
            </div>
        </footer>
        @include('frontend.inc.scripts')
    </main>
</body>

</html>
