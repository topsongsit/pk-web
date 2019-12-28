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
<header>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" >
        <a class="navbar-brand" href="/office">Company Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            @if(Auth::guard('admin')->check())

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{Auth::guard('admin')->user()->name}}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <a class="dropdown-item" href="/office/logout">logout</a>
                        </div>
                    </li>

                </ul>
            @endif
        </div>
    </nav>
</header>
<div class="container-fluid">
    @yield('content')
</div>
<!-- Footer -->
<footer class="page-footer fixed-bottom bg-dark pt-2 pb-2" >


    <div class="text-center">
        <label >ADMIN</label>
        <p>FOR SNP PK_saenchai muaithai gym</p>

    </div>


</footer>
<!-- Footer -->



<div id="myModal" class="modal fade" role="dialog"></div>


<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/sweetalert.min.js"></script>
<script src="/js/messagebox.js"></script>
<script src="/js/app.js"></script>

</body>
</html>


