
@extends('_backoffice.layout')
@section('content')
    <a class="btn btn-dark mb-2" href="/office" >กลับหน้า home</a>
    <h3 class="mt-3 ">สร้างแบบฟอร์มฝึกงาน</h3>

    @if(!empty($infos))
        @foreach($infos as $info)
    <form action="/store" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label for="text" class="control-label">บริษัท</label>
                <p>{{$info->com_name}}</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label for="body" class="control-label">หน่วยงาน</label>
                <p>{{$info->com_division}}</p>
                {{--<textarea class="form-control" name="description"  cols="50" rows="5"></textarea>--}}
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label for="text" class="control-label">ผู้ดูแลโครงการ</label>
                <select name="carlist" form="carform">
            @if(!empty($staffs))
                @foreach($staffs as $staff)
                    <option value="{{$staff->com_staff_id}}">{{$staff->com_staff_name}}</option>

                @endforeach
            @endif
                </select>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group mt-3">
                <label for="due" class="control-label mt-3">File</label>
                <input  name="cover_image" type="file">
                {{--<input type="hidden" name="postUser" value={{ \Auth::user()->name }}>--}}
            </div>
        </div>

        @endforeach
        @endif

        <div class="col-md8 offset-2 mt-3 mb-3">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </form>

@endsection