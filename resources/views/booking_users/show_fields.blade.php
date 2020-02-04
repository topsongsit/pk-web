<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User:') !!}
    <p>{{ $bookingUser->user_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Course:') !!}
    <p>{{ $bookingUser->course_id }}</p>
</div>

<!-- Tabletime Id Field -->
<div class="form-group">
    {!! Form::label('tabletime_id', 'Tabletime:') !!}
    <p>{{ $bookingUser->tabletime_id }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $bookingUser->status }}</p>
</div>

<!-- Booking Id Field -->
<div class="form-group">
    {!! Form::label('booking_id', 'Booking:') !!}
    <p>{{ $bookingUser->booking_id }}</p>
</div>

