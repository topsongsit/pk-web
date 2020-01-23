<!-- Tname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tname', 'Name:') !!}
    {!! Form::text('tname', null, ['class' => 'form-control']) !!}
</div>

<!-- Tdetail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tdetail', 'Detail:') !!}
    {!! Form::textarea('tdetail', null, ['class' => 'form-control']) !!}
</div>

<!-- Timg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timg', 'Img:') !!}
    {!! Form::file('timg',['class' => 'form-control']) !!}
</div>

<!-- Tcategory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tcategory', 'Category:') !!}
    {!! Form::text('tcategory', null, ['class' => 'form-control']) !!}
</div>

<!-- Tprice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tprice', 'Price:') !!}
    {!! Form::number('tprice', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('trainers.index') }}" class="btn btn-default">Cancel</a>
</div>
