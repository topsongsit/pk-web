@extends('_frontend.layout');
@section('content');
<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;">   
    <h3 class="text-center">การจองสำเร็จ รหัส</h3><br>
    <img src="/images/1.png" class="rounded mx-auto d-block" width="200">
    <div class="col-12">
       <br><h4>- ชำระโดยโอนเงินเข้าบัญชี</h4> 
       <h5> ธนาคาร ธ.กสิกรไทย </h5>
       <h5> เลขบัญชี xxx-x-xxxxx-x ชื่อบัญชี นายทรงสิทธิ์ เทศรุ่งเรือง</h5>
       <h5> สาขา เอ็มโซไซตี้ เมืองทองธานี</h5><br><br><br>

       <h5> และทำการแจ้งการโอนเงินได้ที่เมนู "บัญชีของคุณ > การจอง"</h5><br>
       <div  class="text-danger">
       <h5> หมายเหตุ</h5>
       <h5> *** ลูกค้าจะต้องแจ้งยืนยันการโอนเงินให้ทางค่าย ภายใน 3 วัน จึงจะถือว่าเป็นการชำระค่าสินค้าที่เสร็จสิ้นสมบูรณ์ ***</h5>
       <h5> ***สามารถยกเลิกการจองคอร์สเรียนได้ก่อน 3 วันก่อนวันมาเรียน หากไม่มีการยกเลิก ทางค่ายของสงวนสิทธิ์เก็บค่ามัดจำ***</h5>
        </div><br><br>
    </div>

    <div>
        <h5>อัพโหลดใบโอนเงิน</h5>
        <form action="bookings" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" name="image">
                <input type="hidden" name="course_id" value="{{ request()->course }}">
                <input type="hidden" name="trainer_id" value="{{ request()->trainer }}">
                <button type="submit" class="btn btn-primary btn-danger">อัพโหลด</button>
            </div>
        </form>
    </div>
    </div>
    </header>

        {{-- สำเร็จการจอง --}}

@endsection
