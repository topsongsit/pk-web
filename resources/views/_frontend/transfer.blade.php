@extends('_frontend.layout');
@section('content');
<div class="container mt-5 text-white">
    <header style="font-family: 'Prompt', sans-serif ;"> 
    <h3 class="text-center">ข้อมูลส่วนตัวของคุณ ... </h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-dark p-3">                      
                <a class="nav-link" href="/editprofile">ข้อมูลส่วนตัว</a>
                <a class="nav-link" href="/transfer">การจอง</a>
                <a class="nav-link" href="/tabletime">ตารางเรียน</a>        
            </div>            
        </div>
        <div class="col-md-8 text-right">
            <div class="card text-dark p-3">                      
                @empty(!$bookings)
                <div class="row">
                    <div class="col-sm-4 text-left">
                        Booking Number
                    </div>
                    <div class="col-sm-3 text-left">
                       Course Name
                    </div>
                    <div class="col-sm-3 text-left">
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
                            <div class="col-sm-3 text-left">
                                {{ $booking->trainer->tname }}
                            </div>
                            <div class="col-sm-2 text-left">
                                @if ($booking->status_id == 1)
                            <a href="{{ route('booking.show' , ['id' => $booking->id]) }}">Upload</a>
                            @else 
                            <a>Uploaded</a>
                                @endif
                                
                            </div>
                        </div>
                    @endforeach
                @endempty
            </div>       
        </div>
    </div>
    </div>
    </header>
@endsection
