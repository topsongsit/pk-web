@extends('_frontend.layout');
@section('content');
<div class="container mt-5" style="color:white !important">

    <h3 class=" mt-5">คอร์สเรียน</h3>
    @foreach($courses as $course)
    <div class="row mt-3">
        <div class="col-md-6">
            <img class="card-img-top d-flex" src="{{ $course->cimg }}" alt="Card image cap">
        </div>
        <div class="col-md-6">
            <h3>{{ $course->cname }}</h3>
            <p>{{ $course->cdetail }}</p>
            <p>{{ $course->cprice }}</p>
            <button>จอง</button>
        </div>
    </div>

    @endforeach
    

    {{-- สนามมวย --}}

</div>

@endsection