<div class="table-responsive">
    <table class="table" id="bookingUsers-table">
        <thead>
            <tr>
                <th>User</th>
        <th>Course</th>
        <th>Status</th>
        <th>Timetable</th>
        <th>Booking</th>
        <th>Time</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookingUsers as $bookingUser)
            <tr>
                <td>{{ $bookingUser->user->name }}</td>
            <td>{{ $bookingUser->course->cname }}</td>
            <td>{{ $bookingUser->status }}</td>
            <td >{{ $bookingUser->tabletime_id }}</td>
            <td>{{ $bookingUser->booking->booking_number }}</td>
            <td >{{ $bookingUser->created_at }}</td>

                <td>
                    {!! Form::open(['route' => ['bookingUsers.destroy', $bookingUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bookingUsers.show', [$bookingUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bookingUsers.edit', [$bookingUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
       $('#bookingUsers-table').DataTable( {
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