<div class="table-responsive">
    <table class="table" id="trainers-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Detail</th>
        <th>Img</th>
        <th>Category</th>
        <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trainers as $trainer)
            <tr>
                <td>{{ $trainer->tname }}</td>
            <td>{{ $trainer->tdetail }}</td>
            <td> <img src="{{ $trainer->timg }}" width="100"> </td>
            <td>{{ $trainer->tcategory }}</td>
            <td>{{ $trainer->tprice }}</td>
                <td>
                    {!! Form::open(['route' => ['trainers.destroy', $trainer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trainers.show', [$trainer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('trainers.edit', [$trainer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{-- @section('scripts')
<script type="text/javascript">
    $(document).ready( function () {
        $('#trainers-table').DataTable();
    } );
    </script>
@stop --}}

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
