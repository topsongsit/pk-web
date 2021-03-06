        <table class="table" id="bookings-table">
    
        <thead>
            <tr>
                <th>User</th>
        <th>Course</th>
        <th>Trainer</th>
        <th>Status</th>
        <th>Money Image</th>
        <th>Money</th>
        <th>Time</th>
        <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->user->name }}</td>
            <td>{{ $booking->course->cname }}</td>
            <td>{{ $booking->trainer->tname }}</td>
            <td>{{ $booking->status->sname }}</td>
            <td> <img src="{{url($booking->bmoney_img) }}" width="100"> </td>
            <td>{{ $booking->summary }}</td>
            <td>{{ $booking->created_at }}</td>

            {{-- <td>{{ $booking->bmoney_img }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bookings.show', [$booking->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bookings.edit', [$booking->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
       $('#bookings-table').DataTable( {
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','pageLength'
        ]
    } );
} );
</script>

@endsection

