<div class="table-responsive">
    <table class="table" id="bookings-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Course Id</th>
        <th>Trainer Id</th>
        <th>Status Id</th>
        <th>Money Img</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->user_id }}</td>
            <td>{{ $booking->course_id }}</td>
            <td>{{ $booking->trainer_id }}</td>
            <td>{{ $booking->status_id }}</td>
            <td>{{ $booking->bmoney_img }}</td>
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
