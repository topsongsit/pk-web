<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>P.K.SaenchaiMuayThaiGym</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="/css/sweetalert.css"> -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

</head>

<body>

    <header style="font-family: 'Prompt', sans-serif;">
        <ul class="navbar-nav">
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #C30F28"> <a
                    class="navbar-brand" href="/home">P.K.SaenchaiMuayThaiGym</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li>
                            <a class="nav-link" href="/editprofile">ประวัติส่วนตัว</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/logout">ออกจากระบบ</a>
                        </li>
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
        
        <div class="container-fluid">
            @yield('content')
        </div>

        {{-- --footer-- --}}
        {{-- <div class="footer text-white" >P.K.SAENCHAIMUAYTHAIGYM <strong>โดย : นายทรงสิทธิ์ เทศรุ่งเรือง 13590036</strong>.</div> --}}

    
    </header>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('scripts')
    <script src="/js/popper.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/messagebox.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>
