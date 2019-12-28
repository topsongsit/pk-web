@extends('_backoffice.layout')
@section('content')
    <h3 class="text-center">Edit Content</h3>

    <a class="btn btn-dark mb-2" href="/office" >กลับหน้า BACKOFFICE</a>
    <div class="card mt-2">
        <div class="card-body">

            <form method="post" action="/office/update/{{$events->id}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="text" class="control-label">Title</label>
                        <input class="form-control" style="height: 7rem;" value="{{$events->title}}" name="title" type="text" >
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" >
                    <div class="form-group">
                        <label for="body" class="control-label">Description</label>

                        <textarea class="form-control" name="description"  cols="50" rows="5">{{$events->description}}</textarea>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="text" class="control-label">tag</label>
                        <input class="form-control" value="{{$events->tag}}" name="tag" type="text" >
                    </div>
                </div>
                <div>
                    <input class="btn btn-outline-warning" type="submit" value="แก้ไข">
                </div>
            </form>
        </div>
    </div>
@endsection