@extends('_frontend.layout')
@section('content')
    <h3 class="text-center">Edit Profile</h3>

    <a class="btn btn-dark mb-2" href="/">กลับหน้า home</a>
    <div class="card mt-2">
        <div class="card-body">
            <form method="post" action="/updateProfile/{{$user->id}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="text" class="control-label">แก้ไขชื่อ - Name</label>
                            <input class="form-control" name="name" type="text" id="name" value="{{$user->name}}">
                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="text" class="control-label">แก้ไข - Email</label>
                            <input class="form-control" name="email" type="text" id="email" value="{{$user->email}}">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="text" class="control-label">Password</label>
                        <input class="form-control" disabled value="{{$user->password}}">
                    </div>

                    <div>
                        <input class="btn btn-outline-warning"type="submit" value="แก้ไข">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection