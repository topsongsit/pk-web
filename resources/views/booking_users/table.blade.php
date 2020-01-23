<div class="table-responsive">
    <table class="table" id="bookingUsers-table">
        <thead>
            <tr>
                <th>User</th>
        <th>Course</th>
        <th>Status</th>
        <th>Booking</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookingUsers as $bookingUser)
            <tr>
                <td>{{ $bookingUser->user->name }}</td>
            <td>{{ $bookingUser->course->cname }}</td>
            <td>{{ $bookingUser->status }}</td>
            <td>{{ $bookingUser->booking->booking_number }}</td>
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
