<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pirates Bikes | Admin Login</title>
    @include('inc.style')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{'adminlogin'}}" class="h1"><b>Pirates</b>Bikes</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger text-center">
                            <p class="m-0">{{$error}}</p>
                        </div>
                    @endforeach
                @endif
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        <p>{{session('success')}}</p>
                    </div>
                @endif
                <form action="{{route('adminlogin')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->
                <p class="mb-1">
                    <a href="{{url('admin/password')}}">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{url('admin/regist')}}" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    @include('inc.scripts')
</body>

</html>
