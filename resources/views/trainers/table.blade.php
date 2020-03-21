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
            <td> <img src="{{ asset($trainer->timg) }}" width="100"> </td>
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
@section('scripts')
<script type="text/javascript">
      $(document).ready( function () {
       $('#trainers-table').DataTable( {

    } );
} );
</script>
@endsection
