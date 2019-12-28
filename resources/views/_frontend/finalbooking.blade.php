@extends('_frontend.layout');
@section('content');
<div class="container mt-5" style="color:white !important">
    
    <h3 class=" mt-5">การจองสำเร็จ รหัส</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="card">                      
            <h5 class="card-title" style="color:black">รายการ</h5>                         
            </div>            
        </div>
        <div class="col-md-6 ">
            <div class="card">                      
            <h5 class="card-title" style="color:black">ราคา</h5>                         
            </div>            
        </div>
    </div>

    <div>
        <form action="bookings" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" name="image">
                <input type="hidden" name="course_id" value="{{ request()->course }}">
                <input type="hidden" name="trainer_id" value="{{ request()->trainer }}">
                <button type="submit">อัพโหลด</button>
            </div>
        </form>
    </div>
    </div>

        {{-- สำเร็จการจอง --}}

@endsection
