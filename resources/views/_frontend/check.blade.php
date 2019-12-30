@extends('_frontend.layout');
@section('content');
<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class="text-center">ตรวจสอบรายการ รหัส </h3>
    <div class="row">
        <div class="col-md-6">
            <div class="card text-dark p-3">                      
            <h5 class="card-title">รายการ</h5> 
            {{ $course->cname }}    <br>  
            {{ $trainer->tname }} 
            </div>            
        </div>
        <div class="col-md-6 text-right">
            <div class="card text-dark p-3">                      
            <h5 class="card-title">ราคา</h5>   
            {{ $course->cprice }} บาท<br>
            {{ $trainer->tprice }} บาท       
            <h5 class="text-left">รวม</h5>                    
            </div>       
        </div>
        <div class="col-12">    
            <h5>เงื่อนไข : *โอนค่ามัดจำ 50% และจ่ายที่ค่าย 50%</h5>
            <input type="checkbox" name="check"> ฉันได้ตรวจสอบในซื้อการคอร์สเรียนและผู้สอนเรียบร้อยแล้ว
            </div> 
        </div>
        <hr>
            <div class="clearfix">
                <div class="float-right">
                    @if (request()->has(['course','trainer'])) 
                    <a href="/finalbooking?course={{ request()->course }}&trainer={{ request()->trainer  }}" class="btn btn-primary btn-danger">ถัดไป</a>
                    @endif
                </div>
            </div>
    </div>
    </header>
        {{-- เช็ครายการ --}}

@endsection
