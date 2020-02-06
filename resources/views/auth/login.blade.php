@extends('_frontend.layout_login')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>P.K.SaenchaiMuayThai</title>

    <div class="container-fluid">
        @yield('content')
    </div>



</head>
<body class="hold-transition login-page" style="font-family: 'Prompt', sans-serif;"> 
    <div class="container">
        <!-- /.login-logo -->
        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <br><br><br><br><br><div class="card">
                    <div class="card-body text-center ">
            <h3 class="mb-4">เข้าสู่ระบบ</h3>

        <form method="post" action="{{ url('/login') }}">
            @csrf
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="checkbox icheck text-left">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me<br>
                            <a href="{{ url('/password/reset') }}">ฉันลืมรหัสผ่าน</a><br>
                            <a href="{{ url('/register') }}">สมัครเป็นสมาชิกใหม่</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block btn-danger">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->



<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
@endsection