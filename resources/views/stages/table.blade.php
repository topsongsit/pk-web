<div class="table-responsive">
    <table class="table" id="stages-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Detail</th>
        <th>Img</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stages as $stage)
            <tr>
                <td>{{ $stage->stname }}</td>
            <td>{{ $stage->stdetail }}</td>
            <td> <img src="{{ asset($stage->stimg)  }}" width="100" /> </td>
                <td>
                    {!! Form::open(['route' => ['stages.destroy', $stage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stages.show', [$stage->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('stages.edit', [$stage->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
        $('#stages-table').DataTable();
    } );
    </script>
@endsection
