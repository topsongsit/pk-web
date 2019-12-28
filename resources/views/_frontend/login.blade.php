@extends('_frontend.layout_login')
@section('content')

<header style="font-family: 'Prompt', sans-serif;">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #C30F28">
        <a class="navbar-brand" href="/">P.K.SaenchaiMuayThaiGym</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            @if(\Auth::check())
            <br><br><ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="/">หน้าหลัก</a>
                </li>
                <li>
                    <a class="nav-link" href="#">คอร์สเรียน</a>
                </li>
                <li>
                    <a class="nav-link" href="#">เทรนเนอร์</a>
                </li>
                <li>
                    <a class="nav-link" href="#">นักมวย</a>
                </li>
                <li>
                    <a class="nav-link" href="#">สนามมวย</a>
                </li>
                <li>
                    <a class="nav-link" href="#">ติดต่อเรา</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">username: {{ \Auth::user()->std_name }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="{{\Auth::user()->id}}/edit" >Edit Profile</a>
                        <a class="dropdown-item" href="/logout">logout</a>
                    </div>
                </li>

            </ul>
            @endif
        </div>
    </nav>
</header>


    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <br><br><br><div class="card">
                    <div class="card-body ">
                        <h4 class="mb-4 text-center">Log in</h4>
                       
                        <form action="/login" class="ajax-form " method="post">
                            <div class="form-group">
                                E-mail
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                Password
                                <input type="password" class="form-control"  placeholder="Password"  name="password">
                            </div>
                            <button class="btn btn-primary">Log in</button>

                        </form>
                    </div>
                    <a href="/register">Don't have account ? Sign in</a>
                </div>
            </div>
        </div>
    </div>
@endsection