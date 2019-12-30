@extends('_frontend.layout');
@section('content');
<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class=" mt-5">คอร์สเรียน</h3>
    @foreach($courses as $course)
    <div class="row mt-3">
        <div class="col-md-6">
            <img class="card-img-top d-flex" src="{{ $course->cimg }}" alt="Card image cap">
        </div>
        <div class="col-md-6">
            <h3>{{ $course->cname }}</h3>
            <h5><strong>เหมาะสมกับ : </strong>{{ $course->cdetail }}</h5>
            <h5><strong>ราคา</strong> {{ $course->cprice }} บาท</h5>
            <a href="/trainer?course={{ $course->id }}">
                <button class="btn btn-primary btn-block btn-danger">จอง</button>
            </a>
            {{-- <a href="/trainer?boxer={{ $course->id }}">
                <button class="btn btn-primary btn-block btn-danger">จองกับนักมวย</button>
            </a> --}}
        </div>
    </div>
    @endforeach
    

    {{-- สนามมวย --}}

</div>
</header>

@endsection