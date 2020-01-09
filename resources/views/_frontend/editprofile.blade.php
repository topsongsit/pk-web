@extends('_frontend.layout');
@section('content');
<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class="text-center">ข้อมูลส่วนตัวของคุณ ... </h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-dark p-3">              
            <a class="nav-link" href="/editprofile">ข้อมูลส่วนตัว</a>
            <a class="nav-link" href="/transfer">การจอง</a>
            <a class="nav-link" href="/tabletime">ตารางเรียน</a>        
            </div>            
        </div>
        <div class="col-md-8 text-left">
            <div class="card text-dark p-3">                      
        <h5>ชื่อ</h5>
        <input type="text" class="form-control" name="name" value="" placeholder="ชื่อ">
        <h5>นามสกุล</h5>
        <h5>เบอร์โทร</h5>
        <h5>ประวัติ</h5>
        <h5>อีเมล</h5>
        <h5>พาสเวิร์ด</h5>
            </div>          
        </div>
    </div>
    </div>
    </header>
@endsection
