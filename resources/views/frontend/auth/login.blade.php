@extends('frontend.layouts.login')
@section('content')
    <div class="form-title mt-2 mb-2">
        <h3>تسجيل الدخول</h3>
    </div>
    <div class="social-buttons" dir="ltr">
        <div class="facebook">
            <button type="button" class="btn btn-primary">FACEBOOK</button>
        </div>
        <div class="google">
            <button type="button" class="btn btn-light">GOOGLE</button>
        </div>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <ul class="m-0">
                <li class="nav-item">
                    <p class="text-center">{{ $error }}</p>
                </li>
            </ul>
        @endforeach
    @endif
    <form action="{{ route('loginRequest') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input">
            <div class="papa">
                <input class="email" type="email" name="email" placeholder="البريد الإلكتروني" required />
            </div>
            <div class="papa">
                <input class="pass" type="password" name="password" placeholder="كلمة السر" required />
            </div>
        </div>
        <div class="checkbox">
            <span>
                <label class="remember" for="check">تذكرني</label>
            </span>
            <span class="check">
                <input type="checkbox" id="check">
            </span>
        </div>
        <input type="submit" class="btn submit btn-submit" value="SUBMIT">
    </form>
    <div class="lost-new mt-2 mb-2">
        <p class="lost-pass">
            <a href="{{ 'request' }}">نسيت كلمة السر</a>
        </p>
        <p class="new-acc">
            <a href="{{ 'signup' }}" class="sign-up">ليس لديك حساب</a>
        </p>
    </div>
@endsection
