@extends('_frontend.layout');
@section('content');
<div class="container mt-5" style="color:white !important">
    
    <h3 class=" mt-5">นักมวย</h3>
    <div class="row">
        {{-- @for ($i = 0; $i < 4; $i++) --}}
        @foreach($trainers as $trainer)
        <div class="col-md-3 ">
            <div class="card">
                <img class="card-img-top d-flex" src="{{ $trainer->timg }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="color:black">{{ $trainer->tname }}</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
        {{-- @endfor --}}
    </div>

        {{-- นักมวย--}}

</div>


@endsection