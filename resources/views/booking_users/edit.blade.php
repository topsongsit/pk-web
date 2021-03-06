@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Booking User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bookingUser, ['route' => ['bookingUsers.update', $bookingUser->id], 'method' => 'patch']) !!}

                        @include('booking_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection