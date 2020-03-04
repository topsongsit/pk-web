<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User:') !!}
    {!! Form::select('user_id', $users,  $bookings->user_id ?? null, ['class' => 'form-control']) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course:') !!}
    {!! Form::select('course_id', $courses,  $bookings->course_id ?? null, ['class' => 'form-control']) !!}
</div>

<!-- Trainer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trainer_id', 'Trainer:') !!}
    {!! Form::select('trainer_id', $trainers,  $bookings->trainer_id ?? null, ['class' => 'form-control']) !!}
</div>

@if(!empty($booking))
    <!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status:') !!}
    {!! Form::select('status_id', $status, $booking->status_id, ['class' => 'form-control']) !!}
</div>
@else
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status:') !!}
    {!! Form::select('status_id', $status, null, ['class' => 'form-control']) !!}
</div>
@endif


<!-- Bmoney Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bmoney_img', 'Money Image:') !!}
    {!! Form::text('bmoney_img', null, ['class' => 'form-control']) !!}
</div>

<!-- Bmoney Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('summary', 'Money:') !!}
    {!! Form::text('summary', null, ['class' => 'form-control']) !!}
</div>

{{-- 
<!-- Time Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'time:') !!}
    {!! Form::select('created_at', $trainers,  $bookings->created_at ?? null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bookings.index') }}" class="btn btn-default">Cancel</a>
</div>
