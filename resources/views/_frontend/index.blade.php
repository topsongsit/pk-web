@extends('_frontend.layout')
@section('content')
<div class="container mt-5 text-white ">
    <header style="font-family: 'Prompt', sans-serif ;"> 

    <br><div class="row">
        <h3 class="col-sm-8">โปรโมชัน</h3>
        <h3 class="col-sm-4">ข่าวสาร</h3>
        <div class="col-md-8">
            <img class="rounded float-left" src="/images/promotion.png" alt="Responsive image" style="width:100%">
        </div>
        <div class="col-md-4">
            <img class="rounded float-left" src="/images/555.jpg" alt="Responsive image" style="width:90%">
        </div>
    </div>

    <h3 class=" mt-5">คอร์สเรียน</h3>
    <div class="row">
        @foreach($courses as $course)
        {{-- เงื่อนไขดึงมาจาก controller --}}
        {{-- {{ $course }} --}}
        <div class="col-md-4 ">
            <div class="card">
                <img class="card-img-top d-flex" src="{{ $course->cimg }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $course->cname }} </h4>
                    <h5 class="card-text">ราคา {{ $course->cprice }} บาท </h5>
                </div>
            </div>
        </div>
        @endforeach
        {{-- {{ --@endfor-- }} --}}
    </div>
    <div class="text-right">
        <a href="/course">ดูทั้งหมด</a>
    </div>
    {{-- คอร์สเรียน --}}

    <h3 class=" mt-5">ผู้สอน</h3>
    <div class="row">

        @foreach($trainers as $trainer)
        <div class="col-md-3 ">
            <div class="card">
                <img class="card-img-top d-flex" src="{{ $trainer->timg }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $trainer->tname }}</h5>
                </div>
            </div>
        </div>
        @endforeach
        {{-- @endfor --}}

    </div>
    <div class="text-right">
        <a href="/trainer">ดูทั้งหมด</a>
    </div>
    {{-- เทรนเนอร์ --}}

    <h3 class="mt-5">สนามมวย</h3>
    <div class="row">
        @foreach($stages as $stage)
        <div class="col-md-12">
            <div class="card-body">
                <img class="card-img-top d-flex" src="{{ $stage->stimg }}" width="100" alt="Card image cap">
            </div>
        </div>
        @endforeach
        {{-- {{ --@endfor-- }} --}}
    </div>
    {{-- สนามมวย --}}

    </header>
</div>

@endsection

<style>
    .card {
        color: black !important;
    }

</style>
