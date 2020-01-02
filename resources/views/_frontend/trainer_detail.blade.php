@extends('_frontend.layout')
@section ("content")

<header style="font-family: 'Prompt', sans-serif ;"> 

    @foreach($trainers as $trainer)
    <div class="col-12 ">
        <div class="card">
            <a href="{{ route('trainer.detail', $trainer->id) }}" class="text-center">รายละเอียด</a>
            <a href="{{ route('trainer.detail', $trainer->tdetail) }}" class="text-center">รายละเอียด</a>            
            
        </div>
        </div>
    </div>
    @endforeach




</header>

@endsection