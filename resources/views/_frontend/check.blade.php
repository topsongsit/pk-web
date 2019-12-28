@extends('_frontend.layout');
@section('content');
<div class="container mt-5 text-white">
    
    <h3 class=" mt-5">ตรวจสอบรายการ รหัส</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="card text-dark p-3">                      
            <h5 class="card-title">รายการ</h5> 
            {{ $course->cname }}    <br>  
            {{ $course->cdetail }}                  
            </div>            
        </div>
        <div class="col-md-6 ">
            <div class="card text-dark p-3">                      
            <h5 class="card-title">ราคา</h5>   
            {{ $course->cprice }}                      
            </div>            
        </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-dark p-3">                      
                <h5 class="card-title">รายการ</h5> 
                {{ $trainer }}                      

                </div>            
            </div>
            <div class="col-md-6 ">
                <div class="card text-dark p-3">                      
                <h5 class="card-title">ราคา</h5>   
                </div>            
            </div>
            </div>

            <div class="clearfix">
                <div class="float-right">
                    @if (request()->has(['course','trainer'])) 
                    <a href="/finalbooking?course={{ request()->course }}&trainer={{ request()->trainer  }}" class="btn btn-primary">จ้าง</a>
                    @endif
                </div>
            </div>
    </div>

        {{-- เช็ครายการ --}}

@endsection
