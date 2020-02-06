<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'ID:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

  <!-- Day Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_id', 'Day:') !!}
    {!! Form::select('day_id', $days,$timetable->day_id ?? null,['class' => 'form-control']) !!}
</div>  

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
