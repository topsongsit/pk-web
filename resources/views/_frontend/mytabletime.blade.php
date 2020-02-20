@extends('_frontend.layout');
@section('content');
<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class="text-center">ข้อมูลส่วนตัวของคุณ {{ \Auth::user()->name }} </h3>
    <br><div class="row">
        <div class="col-md-4">
            <div class="card text-dark p-3">                      
                <a class="nav-link" href="/editprofile">ข้อมูลส่วนตัว</a>
                <a class="nav-link" href="/transfer">การจอง</a>
                <a class="nav-link" href="/mytabletime">ตารางเรียน</a>        
            </div>            
        </div>
        <div class="col-md-8">
            <div class="card text-dark p-3">         
                @empty(!$bookingusers)
                <div class="row">
                    <div class="col-sm-3 text-left">
                        <strong>วัน</strong>
                    </div>
                    <div class="col-sm-4 text-left">
                        <strong>เวลา</strong>
                    </div>
                    <div class="col-sm-2 text-left">
                        <strong>ผู้สอน</strong>
                    </div>

                </div>
                    @foreach ($bookingusers as $bookinguser)
                        @if(\Carbon\Carbon::parse($bookinguser->timetable->date)->gte(\Carbon\Carbon::now()))
                        <div class="row">
                            <div class="col-sm-3 text-left">
                                {{  \Carbon\Carbon::parse($bookinguser->timetable->date)->format('Y-m-d') }}
                            </div>
                            <div class="col-sm-4 text-left">
                                {{ $bookinguser->timetable->day->dname }}
                            </div>
                            <div class="col-sm-2 text-left">
                                {{  $bookinguser->timetable->trainer->tname}}
                            </div>
                            @if($bookinguser->cancel)
                            <div class="col-sm-3 text-left">
                               <a href="javascript:CancelTimeTable({{ $bookinguser->id }})">ยกเลิก</a> 
                            </div>
                            @endif
                        </div>
                        @endif
                    @endforeach
                @endempty
                <br><div>
                    <a>เหลือเวลาเรียน</a> {{ $remain }} <a>ครั้ง</a>

                    <hr>

                    <div>
                        <strong>เรียนที่แล้ว</strong>
                        @foreach ($bookingusers as $bookinguser)
                        @if(\Carbon\Carbon::parse($bookinguser->timetable->date)->lt(\Carbon\Carbon::now()))
                        <div class="row">
                            <div class="col-sm-3 text-left">
                                {{  \Carbon\Carbon::parse($bookinguser->timetable->date)->format('Y-m-d') }}
                            </div>
                            <div class="col-sm-4 text-left">
                                {{ $bookinguser->timetable->day->dname }}
                            </div>
                            <div class="col-sm-2 text-left">
                                {{  $bookinguser->timetable->trainer->tname}}
                            </div>
                            @if($bookinguser->cancel)
                            <div class="col-sm-3 text-left">
                               <a href="javascript:CancelTimeTable({{ $bookinguser->id }})">ยกเลิก</a> 
                            </div>
                            @endif
                        </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>  

        </div>
        
    </div>
    </div>
    </header>
@endsection
@section('scripts')
<script type="text/javascript">
    function CancelTimeTable(id) {
        if(confirm('คุณต้องการยกเลิกใช่ไหม?')){
            window.location = '/mytabletime/cancel/'+id
        }
    }
</script>
@endsection