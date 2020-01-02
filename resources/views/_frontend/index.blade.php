@extends('_frontend.layout')
@section('content')

<div class="container mt-5 text-white ">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <br><h3 class=" mt-5">คอร์สเรียน</h3>
    <div class="row">
        {{-- @for ($i = 0; $i < 3; $i++) --}}
        @foreach($courses as $course)
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
    <a href="/trainer" class="text-center">ดูทั้งหมด</a>
        {{-- คอร์สเรียน --}}
        
    <h3 class=" mt-5">ผู้สอน</h3>
    <div class="row">
        {{-- @for ($i = 0; $i < 4; $i++) --}}
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
    <a href="/trainer" class="text-center">ดูทั้งหมด</a>

        {{-- เทรนเนอร์ --}}

        {{-- <h3 class=" mt-5">นักมวย</h3>นักมวย</h3>
        <div class="row">
            @foreach($trainers as $trainer)
            <div class="col-md-3 ">
                <div class="card">
                    <img class="card-img-top d-flex" src="{{ $trainer->timg }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $trainer->tname }}</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- {{ --@endfor-- }} --}}
        {{-- </div> --}} 

         {{-- นักมวย --}}
            
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

    </div>
</div>
          

    </div>
</div>
</header>
@endsection

<style>
.card{
    color: black !important;
}
</style>


