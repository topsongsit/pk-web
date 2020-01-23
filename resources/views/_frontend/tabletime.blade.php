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
               <p class="text-center"> @include('flash::message')</p>
                @empty(!$timetable)
                <div class="row">
                    <div class="col-sm-3 text-left">
                        <strong>วัน</strong>
                    </div>
                    <div class="col-sm-4 text-left">
                        <strong>เวลา</strong>
                    </div>
                    <div class="col-sm-3 text-left">
                        <strong>ผู้สอน</strong>
                    </div>

                </div>
                    @foreach ($timetable as $timetable)
                        <div class="row">
                            <div class="col-sm-3 text-left">
                                {{  \Carbon\Carbon::parse($timetable->date)->format('Y-m-d') }}
                            </div>
                            <div class="col-sm-4 text-left">
                                {{ $timetable->day->dname }}
                            </div>
                            <div class="col-sm-3 text-left">
                                {{  $timetable->trainer->tname}}
                            </div>
                            <div class="col-sm-2 text-left">
                                <a href="{{ route('booking.reserve' , ['id' => $timetable->id , 'bookingId' => $booking->id ]) }}">จอง</a>
                            </div>
                        </div>
                    @endforeach
                @endempty


                <br><div class="text-right">
                    <a href="/transfer">ย้อนกลับ</a>
                </div>
            </div>       
        </div>
    </div>
    </div>
    </header>
@endsection
