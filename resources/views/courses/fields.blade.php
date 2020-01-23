<!-- Cname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cname', 'Name:') !!}
    {!! Form::text('cname', null, ['class' => 'form-control']) !!}
</div>

<!-- Cdetail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cdetail', 'Detail:') !!}
    {!! Form::textarea('cdetail', null, ['class' => 'form-control']) !!}
</div>

<!-- Cimg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cimg', 'Img:') !!}
    {!! Form::file('cimg',['class' => 'form-control']) !!}
</div>

<!-- Cprice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cprice', 'Price:') !!}
    {!! Form::number('cprice', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
</div>
