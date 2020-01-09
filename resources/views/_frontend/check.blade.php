@extends('_frontend.layout');
@section('content');
<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class="text-center">ตรวจสอบรายการ </h3>
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
            <h6 class="card-title">ราคา</h6>   
            <h6 class="text-right"> {{ $course->cprice }} บาท </h6>
            <h6 class="text-right"> {{ $trainer->tprice }} บาท </h6>     
            <h6 class="text-right">ราคาก่อน Vat 7%    {{ $summary['totalBeforeVat'] }} บาท</h6>     
            <h6 class="text-right">ราคาเต็ม           {{ $summary['total'] }} บาท</h6>                    
            <h6 class="text-right">มัดจำจำนวน         {{ $summary['deposit'] }} บาท</h6>                                  
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
                    @empty(!$summary) 
                    <a href="/cancel">ยกเลิก</a>
                    <form method="POST" action="{{ url('/booking/store') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-danger">ถัดไป</button>
                    </form>                   
                    @endempty
                </div>
            </div>
    </div>
    </header>
        {{-- เช็ครายการ --}}

@endsection
