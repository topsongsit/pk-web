@extends('_frontend.layout')
@section('content')
    <a class="btn btn-dark mb-2" href="/" >กลับหน้า home</a>
        <div class="text-center">
            <div class="d-block mx-auto mb-4"></div>
        </div>
    <div class="row">
        <div class="col-md-4 order-12 mb-4" >
            <div class="col-md-4" >
                <p class="mb-3">by: {{$event->postUser}}</p>
                <p class="mb-3">#{{$event->tag}}</p>
                <h5 class="d-flex justify-content-between align-items-center mb-3">
                    <span >LOVE : {{$count}}</span>
                </h5>
                <form class="ajax-form" action="/detail/{{$event->id}}" method="post">
                    <button type="submit" class="btn btn-secondary btn-block">LOVE</button>
                </form>
            </div>
        </div>
        <div class="col-md-8 order-md-1">
            <div class="col-md-8" >
                <h3 class="mb-3">{{$event->title}}</h3>
                <p class="mb-3">&nbsp;&nbsp;&nbsp;{{$event->description}}</p>

            </div>

        </div>
    </div>


@endsection
