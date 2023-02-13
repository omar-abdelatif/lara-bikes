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
    <!-- TITLE -->
    <title>Pirates Bikes | Request Password</title>
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
                <a href="home.html">
                    <img src="{{ asset('frontend_assets/imgs/logo.png') }}" alt="" />
                </a>
                <span>LOST IT - GET IT BACK</span>
            </div>
        </header>
        <!-- Request Password -->
        <section class="form-bg request">
            <div class="form-title">
                <h3>طلب إستعادة كلمة السر</h3>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <ul class="m-0">
                        <li class="nav-item">
                            <p class="m-0">{{$error}}</p>
                        </li>
                    </ul>
                @endforeach
            @endif
            <form action="{{'email'}}" method="post">
                @csrf
                <div class="papa">
                    <input class="email" type="email" name="email" placeholder="البريد الإلكتروني" required />
                </div>
                <input type="submit" name="submit" class="btn submit mb-5" value="إرسال">
            </form>
        </section>
        <!-- FOOTER -->
        @include('frontend.inc.footer')
    </main>
</body>

</html>
