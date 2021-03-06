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

                @empty(!$bookings)
                <table class="table table-borderless table-sm">
                    <thead>
                      <tr>
                        <th scope="col">รหัส</th>
                        <th scope="col">คอร์ส</th>
                        <th scope="col">ผู้สอน</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($bookings as $booking)
                      <tr>
                        <td >{{ $booking->booking_number }}</td>
                        <td >{{ $booking->course->cname }}</td>
                        <td>{{ $booking->trainer->tname }}</td>
                        <td>@if ($booking->status_id == 1)
                            <a href="{{ route('booking.show' , ['id' => $booking->id]) }}">อัปโหลด</a> 
                            <a href="javascript:CancelBooking({{ $booking->id }})" >ยกเลิก</a> 
                            @elseif ($booking->status_id == 3)
                            <a href="{{ route('booking.timetable' , ['id' => $booking->id]) }}">เลือกเวลาเรียน</a>
                            @else 
                            <strong><a>รอดำเนินการ</a></strong>
                            </td>
                      </tr>
                      @endif
                      @endforeach
                      @endempty
                    </tbody>
                  </table>

                {{-- @empty(!$bookings)
                <div class="row">
                    <div class="col-sm-4 text-left">
                        <strong>รหัส</strong>
                    </div>
                    <div class="col-sm-3 text-left">
                        <strong>คอร์ส</strong>
                    </div>
                    <div class="col-sm-3 text-left">
                        <strong>ผู้สอน</strong>
                    </div>

                </div>
                    @foreach ($bookings as $booking)
                        <div class="row">
                            <div class="col-sm-4 text-left">
                                {{ $booking->booking_number }}
                            </div>
                            <div class="col-sm-3 text-left">
                                {{ $booking->course->cname }}
                            </div>
                            <div class="col-sm-2 text-left">
                                {{ $booking->trainer->tname }}
                            </div>
                            <div class="col-sm-3 text-left">
                                @if ($booking->status_id == 1)
                            <a href="{{ route('booking.show' , ['id' => $booking->id]) }}">อัปโหลด</a> 
                            <a href="javascript:CancelBooking({{ $booking->id }})" >ยกเลิก</a> 
                            @elseif ($booking->status_id == 3)
                            <a href="{{ route('booking.timetable' , ['id' => $booking->id]) }}">เลือกเวลาเรียน</a>
                            @else 
                            <strong><a>รอดำเนินการ</a></strong>
                                @endif                                
                            </div>
                        </div>
                    @endforeach
                @endempty --}}
            </div>       
        </div>       
            </div>       
        </div>
    </header>
    
@endsection



@section('scripts')
<script type="text/javascript">
    function CancelBooking(id) {
        if(confirm('คุณต้องการยกเลิกใช่ไหม?')){
            window.location = '/booking/cancel/'+id
        }
    }
</script>
@endsection