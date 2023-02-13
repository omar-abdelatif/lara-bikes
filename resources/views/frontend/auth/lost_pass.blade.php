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
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/all.css') }}" />
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.rtl.css') }}">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <style>
        .form-bg {
            padding: 25px;
        }
    </style>
    <!-- TITLE -->
    <title>Pirates Bikes | Lost Password</title>
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
        <!-- FORM -->
        <section class="form-bg lost-form">
            <div class="form-title">
                <h3>نسيت كلمة السر</h3>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mt-3">
                        <p class="text-center">{{$error}}</p>
                    </div>
                @endforeach
            @endif
            <form action="{{route('updatePassword')}}" method="post">
                @csrf
                <div class="inputs">
                    <div class="papa">
                        <input class="pass" type="password" name="password" placeholder="كلمة السر" required />
                    </div>
                    <div class="papa">
                        <input class="repeat-password" type="password" name="password_confirmation"
                            placeholder="أعد كتابة كلمة السر" required />
                    </div>
                </div>
                <input class="btn btn-submit" type="submit" value="SUBMIT" />
            </form>
            <div class="new-login">
                <p class="login">
                    <a href="{{ 'signin' }}" class="signin">تسجيل دخول</a>
                </p>
                <p class="new-acc">
                    <a href="{{ 'signup' }}">ليس لديك حساب</a>
                </p>
            </div>
        </section>
        <!-- FOOTER -->
        @include('frontend.inc.footer')
</body>

</html>
