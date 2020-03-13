@extends('_frontend.layout');
@section('content');
<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class="text-center">ข้อมูลส่วนตัวของคุณ {{ \Auth::user()->name }} </h3>
    <br><div class="row">
        <div class="col-md-4">
            
            <div class="card text-dark p-3" >                      
                <a class="nav-link" href="/editprofile">ข้อมูลส่วนตัว</a>
                <a class="nav-link" href="/transfer">การจอง</a>
                <a class="nav-link" href="/mytabletime">ตารางเรียน</a>        
            </div>            
        </div>

        
        <div class="col-md-8">
            <div class="card text-dark p-3">    
                
                @empty(!$bookingusers)
                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">วัน</th>
                        <th scope="col">เวลา</th>
                        <th scope="col">ผู้สอน</th>
                        <th scope="col">หมายเหตุ</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($bookingusers as $bookinguser)
                        @if(\Carbon\Carbon::parse($bookinguser->timetable->date)->gte(\Carbon\Carbon::now()))
                      <tr>
                        <td>{{  \Carbon\Carbon::parse($bookinguser->timetable->date)->format('Y-m-d') }}</td>
                        <td>{{ $bookinguser->timetable->day->dname }}</td>
                        <td>{{  $bookinguser->timetable->trainer->tname}}</td>
                        @if($bookinguser->cancel)
                        <td><a href="javascript:CancelTimeTable({{ $bookinguser->id }})">ยกเลิก</a></td>
                        @endif
                      </tr>
                      @endif
                      @endforeach
                      @endempty
                    </tbody>
                  </table>

                <div>
                    <a>เหลือเวลาเรียน</a> {{ $remain }} <a>ครั้ง</a>
                    <div>
                        <br><strong>คอร์สที่เรียนแล้ว</strong>
                        <table class="table table-borderless">
                            <tbody>                    
                                @foreach ($bookingusers as $bookinguser)
                                @if(\Carbon\Carbon::parse($bookinguser->timetable->date)->lt(\Carbon\Carbon::now()))
                                <tr>
                                <td>{{  \Carbon\Carbon::parse($bookinguser->timetable->date)->format('Y-m-d') }}</td>
                                <td>{{ $bookinguser->timetable->day->dname }}</td>
                                <td>{{  $bookinguser->timetable->trainer->tname}}</td>
                                @if($bookinguser->cancel)
                                <td><a href="javascript:CancelTimeTable({{ $bookinguser->id }})">ยกเลิก</a></td>
                                @endif
                              </tr>
                              @endif
                              @endforeach
                            </tbody>
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