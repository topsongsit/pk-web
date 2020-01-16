<div class="table-responsive">
    <table class="table" id="timetables-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Booking Id</th>
        <th>Day Id</th>
        {{-- <th>Stages Id</th> --}}
        <th>Trainer Id</th>
        <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($timetables as $timetable)
            <tr>
                <td>{{ $timetable->user_id }}</td>
            <td>{{ $timetable->booking_id }}</td>
            <td>{{ $timetable->day->dname }}</td>
            {{-- <td>{{ $timetable->stages_id }}</td> --}}
            <td>{{ $timetable->trainer->tname }}</td>
            <td>{{ $timetable->date }}</td>
                <td>
                    {!! Form::open(['route' => ['timetables.destroy', $timetable->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('timetables.show', [$timetable->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('timetables.edit', [$timetable->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
