@extends('_frontend.layout');
@section('content');

<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;">   
    <h3 class="text-center">การจองสำเร็จ รหัส {{$booking->booking_number}}
    </h3><br>
    <img src="/images/1.png" class="rounded mx-auto d-block" width="200">
    <div class="col-12">

        
        <br><h3>มัดจำ {{ $summary['deposit'] }} บาท</h3>                                  
       <br><h4>- ชำระโดยโอนเงินเข้าบัญชี</h4> 
       <h5> ธนาคาร ธ.กสิกรไทย </h5>
       <h5> เลขบัญชี xxx-x-xxxxx-x ชื่อบัญชี นายทรงสิทธิ์ เทศรุ่งเรือง</h5>
       <h5> สาขา เอ็มโซไซตี้ เมืองทองธานี</h5><br><br>

       <h5> และทำการแจ้งการโอนเงินได้ที่เมนู "ประวัติส่วนตัว > การจอง"</h5><br>
       <div  class="text-danger">
       <h5> หมายเหตุ</h5>
       <h5> *** ลูกค้าจะต้องแจ้งยืนยันการโอนเงินให้ทางค่าย ภายใน 3 วัน จึงจะถือว่าเป็นการชำระค่าสินค้าที่เสร็จสิ้นสมบูรณ์ ***</h5>
       <h5> ***สามารถยกเลิกการจองคอร์สเรียนได้ก่อน 3 วันก่อนวันมาเรียน หากไม่มีการยกเลิก ทางค่ายของสงวนสิทธิ์เก็บค่ามัดจำ***</h5>
        </div><br><br>
    </div>
    @if(request()->has('status') && request()->status == 'success')
    <h1> อัปโหลดใบโอนเงินเรียบร้อบแล้ว </h1>
@endif
{{-- {{ dd($booking->user->email , $booking->course->cname) }} --}}
@if($booking->status_id == 1)
<div>
        <h5>อัปโหลดใบโอนเงิน</h5>
        <form action="/booking/upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" name="image">
                <input type="hidden" name="booking_number" value="{{$booking->booking_number}}">
                <button type="submit" class="btn btn-primary btn-danger">อัพโหลด</button>
            </div>
        </form>
    </div>

@endif
    <a href="/" class="btn float-right">กลับหน้าหลัก</a>

    </div>
    </header>

        {{-- สำเร็จการจอง --}}

@endsection
