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
                        <a class="login-icon" href="login.html">
                            <i class="fad fa-user-circle fa-3x"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav m-auto">
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
                        <h5 class="text-white text-center text-decoration-underline">إزيك يا{{$user->name}}</h5>
                        <li class="dropdown-item">
                            <a href="{{ url('dashboard') }}">لوحة التحكم</a>
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
