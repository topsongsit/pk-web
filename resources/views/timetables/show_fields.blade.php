{{-- <!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $timetable->user_id }}</p>
</div>

<!-- Booking Id Field -->
<div class="form-group">
    {!! Form::label('booking_id', 'Booking Id:') !!}
    <p>{{ $timetable->booking_id }}</p>
</div> --}}

<!-- Day Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{{ $timetable->id }}</p>
</div>

<!-- Day Id Field -->
<div class="form-group">
    {!! Form::label('day_id', 'Day:') !!}
    <p>{{ $timetable->day->dname }}</p>
</div>
{{-- 
<!-- Stages Id Field -->
<div class="form-group">
    {!! Form::label('stages_id', 'Stages Id:') !!}
    <p>{{ $timetable->stages_id }}</p>
</div> --}}

<!-- Trainer Id Field -->
<div class="form-group">
    {!! Form::label('trainer_id', 'Trainer:') !!}
    <p>{{ $timetable->trainer->tname }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $timetable->date }}</p>
</div>

