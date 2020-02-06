<!-- Stname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stname', 'Name:') !!}
    {!! Form::text('stname', null, ['class' => 'form-control']) !!}
</div>

<!-- Stdetail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stdetail', 'Detail:') !!}
    {!! Form::text('stdetail', null, ['class' => 'form-control']) !!}
</div>



<!-- Stimg Field -->
@isset($stage)
<div class="form-group col-sm-6">
    {!! Form::label('stimg', 'Img:') !!}
    <input type="hidden" name="stimg" value="{{ $stage->stimg }}">
    {!! Form::file('stimg_new',['class' => 'form-control']) !!}
    <img src="{{ asset($stage->stimg) }}" width="100">

@endisset

@empty($stage)
<div class="form-group col-sm-6">
    {!! Form::label('stimg', 'Img:') !!}
    {!! Form::file('stimg',['class' => 'form-control']) !!}
@endempty

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('stages.index') }}" class="btn btn-default">Cancel</a>
</div>
