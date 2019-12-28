@extends('_backoffice.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>COMPANY</h2>
                <div class="col-md-2 mb-4">
                    <a class="btn btn-success"
                       href="office/create">+ ADD</a>
                </div>
            </div>
        </div>
    </div>


    {{--<table class="table table-bordered" style="margin-bottom: 5rem;">--}}
    {{--<tr>--}}
    {{--<th style="text-align: center" >No</th>--}}
    {{--<th>Tag</th>--}}
    {{--<th >Image</th>--}}
    {{--<th>Title</th>--}}

    {{--<th>Description</th>--}}
    {{--<th style="width:12rem">Action</th>--}}
    {{--</tr>--}}
    {{--@foreach ($events as $indexKey => $event)--}}

    {{--@foreach ($events as $event)--}}
    {{--<tr>--}}
    {{--<td style="text-align: center" >{{$indexKey+1}}</td>--}}
    {{--<td>{{$event->tag}}</td>--}}
    {{--<td> <img style="width:  10rem" src="uploads/{{$event->cover_image}} "></td>--}}
    {{--<td>{{ $event->title }}</td>--}}
    {{--<td>{{str_limit($event->description, 150)}}</td>--}}
    {{--<td>--}}

    {{--<a href="/office/{{$event->id}}/edit" class="mt-4" style="float: left">--}}
    {{--<button  style="width: 5rem;"  class="btn btn-warning">edit</button>--}}
    {{--</a>--}}
    {{--<form class="mt-4 pl-1" action="/office/destroy/{{$event->id}}" method="post" style="float: left;">--}}
    {{--{{csrf_field()}}--}}
    {{--<input type="hidden" name="_method" value="DELETE">--}}
    {{--<button style="width: 5rem;" class="btn btn-danger">delete</button>--}}
    {{--</form>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--@endforeach--}}
    {{--</table >--}}
@endsection
