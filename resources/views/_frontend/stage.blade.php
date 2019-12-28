@extends('_frontend.layout');
@section('content');
<div class="container mt-5" style="color:white !important">

    <h3 class=" mt-5">สนามมวย</h3>
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
            </div>        </div>
    </div>
    <div>
       
    </div>


    {{-- สนามมวย --}}
    
</div>
@endsection