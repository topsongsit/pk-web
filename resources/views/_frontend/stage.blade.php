@extends('_frontend.layout');
@section('content');
<div class="container mt-5">
    
    <header style="font-family: 'Prompt', sans-serif;">
    <h3 class=" col-12 text-white">สนามมวย</h3>
    <h6 class=" col-12 text-white">เป็นสนามกีฬาสำหรับใช้การแข่งขันกีฬามวย ไม่ว่าจะเป็นมวยไทยหรือมวยสากล โดยมากแล้วสังเวียนมวยมักจะเป็นสนามกีฬาในร่ม เว้นแต่สังเวียนมวยชั่วคราว โดยสนามมวยของค่าพีเคแสนชัยมวยไทยยิมผ่านการออกแบบและเลือกใช้เทคโนโลยีในการก่อสร้างที่ทันสมัย ใส่ใจธรรมชาติและสิ่งแวดล้อม ตอบสนองความสะดวกสบายแก่ผู้เรียนได้เป็นอย่างดี</h6><br>
    <div class="card">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @foreach($stages as $stage)
                <div class="col-md-12">
                    <img class="card-img-top d-flex" src="{{ $stage->stimg }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $stage->stname }} </h5>
                    </div>
                </div>
                @endforeach
                {{-- {{ --@endfor-- }} --}}
            </div>        
        </div>
    </div>
</div>
    </header>
    <div>
       
    </div>


    {{-- สนามมวย --}}
    
</div>
@endsection