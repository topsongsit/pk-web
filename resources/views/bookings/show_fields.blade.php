<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User:') !!}
    <p>{{ $booking->user->name }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Course:') !!}
    <p>{{ $booking->course->cname }}</p>
</div>

<!-- Trainer Id Field -->
<div class="form-group">
    {!! Form::label('trainer_id', 'Trainer:') !!}
    <p>{{ $booking->trainer->tname  }}</p>
</div>

<!-- Status Id Field -->
<div class="form-group">
    {!! Form::label('status_id', 'Status:') !!}
    <p>{{ $booking->status->sname }}</p>
</div>

<!-- Bmoney Img Field -->
<div class="form-group">
    {!! Form::label('bmoney_img', 'Money Image:') !!}
    <p>{{ $booking->bmoney_img }}</p>
</div>

<!-- Bmoney Img Field -->
<div class="form-group">
    {!! Form::label('summary', 'Money Image:') !!}
    <p>{{ $booking->summary }}</p>
</div>
