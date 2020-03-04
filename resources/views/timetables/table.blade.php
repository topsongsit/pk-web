<div class="table-responsive">
    <table class="table" id="timetables-table">
        <thead>
            <tr>
                {{-- <th>User Id</th>
        <th>Booking Id</th> --}}
        <th>Id</th>
        <th>Day</th>
        {{-- <th>Stages Id</th> --}}
        <th>Trainer</th>
        <th>Date</th>
        <th>Time</th>
        <th >Action</th>
     </tr>
        </thead>
        <tbody>
        @foreach($timetables as $timetable)
            <tr>
                {{-- <td>{{ $timetable->user_id }}</td>
            <td>{{ $timetable->booking_id }}</td> --}}
            <td>{{ $timetable->id }}</td>
            <td>{{ $timetable->day->dname }}</td>
            {{-- <td>{{ $timetable->stages_id }}</td> --}}
            <td>{{ $timetable->trainer->tname }}</td>
            <td>{{ $timetable->created_at }}</td>
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

@section('scripts')
<script type="text/javascript">
    $(document).ready( function () {
        $('#timetables-table').DataTable();
    } );
    </script>
@endsection