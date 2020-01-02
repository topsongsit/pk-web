@extends('_frontend.layout');
@section('content');


<div class="container mt-5">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class=" mt-5 text-white">ผู้สอน</h3>
    <div class="row">
        {{-- @for ($i = 0; $i < 4; $i++) --}}
        @foreach($trainers as $trainer)
        <div class="col-md-3 ">
            <div class="card">
                <img class="card-img-top d-flex" src="{{ $trainer->timg }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title" style="color:black">{{ $trainer->tname }}</h4>
                    @if (request()->has(['course'])) 
                    <a href="/check?course={{ request()->course }}&trainer={{ $trainer->id }}" class="btn btn-primary">จ้าง</a>
                    @endif
                    <a href="{{ route('trainer.detail', $trainer->id) }}" class="text-center">รายละเอียด</a>
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
                    <h4 class="card-title" style="color:black">{{ $boxer->tname }}</h4>
                    @if (request()->has(['course'])) 
                    <a href="/check?course={{ request()->course }}&trainer={{ $boxer->id }}" class="btn btn-primary">จ้าง</a>
                    @endif
                    <a href="{{ route('trainer.detail', $boxer->id) }}" class="text-center">รายละเอียด</a>
                </div>
            </div>
        </div>
        @endforeach
        {{-- @endfor --}}
    </div>
</header>
        {{-- เทรนเนอร์ --}}

</div>

@endsection