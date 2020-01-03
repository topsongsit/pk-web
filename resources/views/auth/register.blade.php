@extends('_frontend.layout_login')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>P.K.SaenchaiMuayThai</title>

    <header style="font-family: 'Prompt', sans-serif;">
        <ul class="navbar-nav">
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #C30F28"> <a class="navbar-brand" href="/home">P.K.SaenchaiMuayThaiGym</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a class="nav-link" href="/home">หน้าหลัก</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/course">คอร์สเรียน</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/trainer">ผู้สอน</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/stage">สนามมวย</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/contact">ติดต่อเรา</a>
                    </li>
                    
                    @if(\Auth::check())
                    <li class="nav-link">
                        <a class="">คุณ: {{ \Auth::user()->name }}</a>
                            <a  href="/logout">logout</a>
                        </div>
                    </li>
                    @else
                    <li>
                        <a class="nav-link" href="/register">สมัครสมาชิก</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/login">เข้าสู่ระบบ</a>
                    </li>
                    @endif
                </ul>        
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        @yield('content')
    </div>


</head>
<body class="hold-transition login-page " style="font-family: 'Prompt', sans-serif; "> 
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <br><br><br><br><br><div class="card">
                    <div class="card-body text-center ">
                        <h3 class="mb-4">สมัครสมาชิกใหม่</h3>

        <form method="post" action="{{ url('/register') }}">
            @csrf

            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="ชื่อจริง">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('surname') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}" placeholder="นามสกุล">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('surname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                @endif
            </div>
            

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="อีเมล">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="พาสเวิร์ด">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="ยืนยันพาสเวิร์ด">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            <h6 class="text-left">วันเกิด</h6>
            <div class="form-group has-feedback{{ $errors->has('age') ? ' has-error' : '' }}">
                <input type="date" class="form-control" name="age" value="{{ old('age') }}" placeholder="วันเกิด">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('age'))
                    <span class="help-block">
                        <strong>{{ $errors->first('age') }}</strong>
                    </span>
                @endif
            </div>
            

            <div class="form-group has-feedback{{ $errors->has('tel') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="tel" value="{{ old('tel') }}" placeholder="เบอร์โทร">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('tel'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tel') }}</strong>
                    </span>
                @endif
            </div>
            <div class="text-left">
            <div class="form-group has-feedback{{ $errors->has('gender_id') ? ' has-error' : '' }}">
                <input type="radio" name="gender_id" value="1"> ผู้ชาย
                <input type="radio" name="gender_id" value="2"> ผู้หญิง
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('gender_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('gender_id') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="form-group has-feedback{{ $errors->has('history') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="history" value="{{ old('history') }}" placeholder="ประวัติการรักษา,โรคประจำตัว">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('history'))
                    <span class="help-block">
                        <strong>{{ $errors->first('history') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="checkbox icheck text-left">
                        <label>
                            {{-- <input type="checkbox"> ฉันยอมรับ<a href="#">เงื่อนไข</a> --}}
                            มีบัญชีอยู่แล้ว?
                            <a href="{{ url('/login') }}" class="text-center">เข้าสู่ระบบ</a>

                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block btn-danger">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

{{-- <script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });

   
</script> --}}

</body>
</html>
@endsection