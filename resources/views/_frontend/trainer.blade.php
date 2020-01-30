@extends('_frontend.layout');
@section('content');


<div class="container mt-5">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class=" mt-5 text-white">เทรนเนอร์</h3>
    <div class="row">
        {{-- @for ($i = 0; $i < 4; $i++) --}}
        @foreach($trainers as $trainer)
        <div class="col-md-3 ">
            <div class="card">
                <img class="card-img-top d-flex" src="{{ $trainer->timg }}" alt="Card image cap">
                <div class="card-body">
                    <b><h5 class="card-title" style="color:black">{{ $trainer->tname }}</h5></b>
                    <h6 class="card-title" style="color:black">{{ $trainer->tdetail }}</h6>
                    @if (request()->has(['course'])) 
                    <h6 class="card-title" style="color:black">*ไม่เสียค่าใช้จ่ายเพิ่มเติม</h6>
                    <a href="/check?course={{ request()->course }}&trainer={{ $trainer->id }}" class="btn btn-primary btn-danger">จ้าง</a>
                    @endif
                    {{-- <a href="{{ route('trainer.detail', $trainer->id) }}" class="text-center">รายละเอียด</a> --}}
                </div>
            </div>
        </div>
        @endforeach
        {{-- @endfor --}}
    </div>
</header>
        {{-- เทรนเนอร์ --}}

</div>



<div class="container mt-5">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class=" mt-5 text-white">นักมวย</h3>
    <div class="row">
        {{-- @for ($i = 0; $i < 4; $i++) --}}
        @foreach($boxers as $boxer)
        <div class="col-md-3 ">
            <div class="card">
                <img class="card-img-top d-flex" src="{{ $boxer->timg }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="color:black">{{ $boxer->tname }}</h5>
                    <h6 class="card-title" style="color:black">{{ $boxer->tdetail}}</h6>
                    @if (request()->has(['course'])) 
                    <h6 class="card-title" style="color:black">*ราคา {{ $boxer->tprice }} บาท</h6>
                    <a href="/check?course={{ request()->course }}&trainer={{ $boxer->id }}" class="btn btn-primary btn-danger">จ้าง</a>
                    @endif
                    {{-- <a href="{{ route('trainer.detail', $boxer->id) }}" class="text-center">รายละเอียด</a> --}}
                </div>
            </div>
        </div>
        @endforeach
        {{-- @endfor --}}
    </div>
</header>
        {{-- เทรนเนอร์--}}

</div>

@endsection