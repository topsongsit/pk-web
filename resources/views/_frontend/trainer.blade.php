@extends('_frontend.layout');
@section('content');
<div class="container mt-5" style="color:white !important">
    
    <h3 class=" mt-5">เทรนเนอร์</h3>
    <div class="row">
        {{-- @for ($i = 0; $i < 4; $i++) --}}
        @foreach($trainers as $trainer)
        <div class="col-md-3 ">
            <div class="card">
                <img class="card-img-top d-flex" src="{{ $trainer->timg }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="color:black">{{ $trainer->tname }}</h5>
                    @if (request()->has(['course'])) 
                    <a href="/check?course={{ request()->course }}&trainer={{ $trainer->id }}" class="btn btn-primary">จ้าง</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        {{-- @endfor --}}
    </div>

        {{-- เทรนเนอร์ --}}

</div>


@endsection