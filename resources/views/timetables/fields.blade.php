{{-- @if (!empty($timetable))
<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $users,$timetable->user_id, ['class' => 'form-control']) !!}
</div>
@else
<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $users,null, ['class' => 'form-control']) !!}
</div> 
@endif

@if (!empty($timetable))
<!-- Booking Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('booking_id', 'Booking:') !!}
    {!! Form::select('booking_id', $bookings,$timetables->booking_id, ['class' => 'form-control']) !!}
</div>
@else
<!-- Booking Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('booking_id', 'Booking:') !!}
    {!! Form::select('booking_id', $bookings,null, ['class' => 'form-control']) !!}
</div> 
@endif --}}


@if (!empty($timetable))
  <!-- Day Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_id', 'Day:') !!}
    {!! Form::select('day_id', $days,$timetable->day_id ,['class' => 'form-control']) !!}
</div>  
@else
  <!-- Day Id Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('day_id', 'Day:') !!}
    {!! Form::select('day_id', $days, null,['class' => 'form-control']) !!}
</div>  
@endif

{{-- 
<!-- Stages Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stages_id', 'Stages Id:') !!}
    {!! Form::number('stages_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Trainer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trainer_id', 'Trainer:') !!}
    {!! Form::select('trainer_id', $trainers,  $timetable->trainer_id ?? null, ['class' => 'form-control']) !!}
</div>


<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', $timetable->date ?? null , ['class' => 'form-control','id'=>'date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('timetables.index') }}" class="btn btn-default">Cancel</a>
</div>
