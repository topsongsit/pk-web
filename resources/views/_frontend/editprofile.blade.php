@extends('_frontend.layout');
@section('content');


<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class="text-center">ข้อมูลส่วนตัวของคุณ {{ \Auth::user()->name }} </h3>
    <br><div class="row">
        <div class="col-md-4">
            <div class="card text-dark p-3">              
            <a class="nav-link" href="/editprofile">ข้อมูลส่วนตัว</a>
            <a class="nav-link" href="/transfer">การจอง</a>
            <a class="nav-link" href="/mytabletime">ตารางเรียน</a>        
            </div>            
        </div>
        {{-- <form method="post" action="/editprofile"> --}}
        <div class="col-md-8 text-left">
            <div class="card text-dark p-3">                      
        <h5>ชื่อ</h5>
        <input class="form-control" name="name" type="text" id="name" value="">     
        <h5>นามสกุล</h5>
        <input class="form-control" name="surname" type="text" id="surname" value="">
        <h5>เบอร์โทร</h5>
        <input class="form-control" name="tel" type="text" id="tel" value="">
        <h5>ประวัติการรักษาโรค</h5>
        <input class="form-control" name="history" type="text" id="history" value="">

            <br><input class="btn btn-primary btn-block btn-danger" type="submit" value="แก้ไข">
        </div>
            </div>          
        </div>
    </div>
    </div>
    </header>
@endsection
