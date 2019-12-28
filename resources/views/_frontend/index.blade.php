@extends('_frontend.layout')
@section('content')

<div class="container mt-5" style="color:white !important">
    <br><h3 class=" mt-5">คอร์สเรียน</h3>
    <div class="row">
        @for ($i = 0; $i < 3; $i++)
        <div class="col-md-4 ">
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
       
        {{-- คอร์สเรียน --}}
        
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

        <h3 class=" mt-5">นักมวย</h3>นักมวย</h3>
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

         {{-- นักมวย --}}
            
        <h3 class=" mt-5">สนามมวย</h3>
        <div class="row">
            <div class="col-md-12">
                <img class="card-img-top d-flex" src="https://picsum.photos/200/50" alt="Card image cap">
            </div>
        </div>


        {{-- สนามมวย --}}

    </div>
</div>
          

    </div>
</div>
@endsection

<style>
.card{
    color: black !important;
}
</style>


