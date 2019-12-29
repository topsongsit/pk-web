<!-- Tname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tname', 'Tname:') !!}
    {!! Form::text('tname', null, ['class' => 'form-control']) !!}
</div>

<!-- Tdetail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tdetail', 'Tdetail:') !!}
    {!! Form::textarea('tdetail', null, ['class' => 'form-control']) !!}
</div>

<!-- Timg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timg', 'Timg:') !!}
    {!! Form::file('timg', null, ['class' => 'form-control']) !!}
</div>

<!-- Tcategory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tcategory', 'Tcategory:') !!}
    {!! Form::text('tcategory', null, ['class' => 'form-control']) !!}
</div>

<!-- Tprice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tprice', 'Tprice:') !!}
    {!! Form::number('tprice', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('trainers.index') }}" class="btn btn-default">Cancel</a>
</div>
