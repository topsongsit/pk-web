<!-- Stname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stname', 'Stname:') !!}
    {!! Form::text('stname', null, ['class' => 'form-control']) !!}
</div>

<!-- Stdetail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stdetail', 'Stdetail:') !!}
    {!! Form::text('stdetail', null, ['class' => 'form-control']) !!}
</div>

<!-- Stimg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stimg', 'Stimg:') !!}
    {!! Form::file('stimg', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('stages.index') }}" class="btn btn-default">Cancel</a>
</div>
