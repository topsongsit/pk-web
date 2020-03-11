<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>P.K.Saenchai muaythaigym</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

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
    </header>

@yield('content')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/sweetalert.min.js"></script>
<script src="/js/messagebox.js"></script>
<script src="/js/app.js"></script>


</html>