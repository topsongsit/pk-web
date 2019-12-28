@extends('_frontend.layout_login')
@section('content')
    <div class="container " >
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                <div class="card-body text-center">
                    <h4 class="mb-4">Admin Login</h4>
                    <form action="/office/login" class="ajax-form " method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="Password"  name="password">
                        </div>
                        <button class="btn btn-primary">Login ADMIN</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


