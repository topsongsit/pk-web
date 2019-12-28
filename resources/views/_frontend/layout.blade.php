<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>P.K.SaenchaiMuayThaiGym</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">

</head>
<body>
<header style="font-family: 'Prompt', sans-serif;">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #C30F28">        <a class="navbar-brand" href="/home">P.K.SaenchaiMuayThaiGym</a>
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
                    <a class="nav-link" href="/trainer">เทรนเนอร์</a>
                </li>
                <li>
                    <a class="nav-link" href="/boxer">นักมวย</a>
                </li>
                <li>
                    <a class="nav-link" href="/stage">สนามมวย</a>
                </li>
                <li>
                    <a class="nav-link" href="/contact">ติดต่อเรา</a>
                </li>
                @if(\Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">username: {{ \Auth::user()->std_name }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="{{\Auth::user()->id}}/edit" >Edit Profile</a>
                        <a class="dropdown-item" href="/logout">logout</a>
                    </div>
                </li>
                @endif
            </ul>
            
        </div>
    </nav>
</header>
<div class="container-fluid">
    @yield('content')
</div>




<div id="myModal" class="modal fade" role="dialog"></div>


<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/sweetalert.min.js"></script>
<script src="/js/messagebox.js"></script>
<script src="/js/app.js"></script>

</body>
</html>