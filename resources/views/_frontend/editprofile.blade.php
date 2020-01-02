@extends('_frontend.layout')
@section('content')

<header style="font-family: 'Prompt', sans-serif ;"> 
<h3 class="text-center">Edit Profile</h3>

    <br><br>
    <div class="col-6">

    </div>
    <div class="card mt-2">
        <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="_method" value="put">
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="text" class="control-label">แก้ไขชื่อ - Name</label>
                            <input class="form-control" name="name" type="text" id="name" value="">
                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="text" class="control-label">แก้ไข - Email</label>
                            <input class="form-control" name="email" type="text" id="email" value="">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="text" class="control-label">Password</label>
                        <input class="form-control" disabled value="">
                    </div>

                    <div>
                        <input class="btn btn-outline-warning" style="width: 100%; border-radius: 2rem; color: black" type="submit" value="แก้ไข">
                        <br><br><a class="btn btn-dark mb-2" href="/" style="width: 20% ; border-radius: 2rem; color:black;background-color: #FFE100 ;border: none;  box-shadow:none">กลับหน้า home</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>









@endsection