@extends('_frontend.layout');
@section('content');
<div class="container mt-5" style="color:white !important">
    
    <h3 class=" mt-5">เทรนเนอร์</h3>
    <div class="row">
        @for ($i = 0; $i < 4; $i++)
        <div class="col-md-3 ">
            <div class="card">
                <img class="card-img-top d-flex" src="https://picsum.photos/150/150" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title {{$i}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endfor
    </div>

        {{-- เทรนเนอร์ --}}

</div>


@endsection