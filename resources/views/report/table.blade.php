<div class="table-responsive">
    <div class="col-md-12">
        <h3>Table</h3>
        <table class="table">
            <thead>
                <tr>
                    @foreach($trainerReport as $t)
                    <th>{{ $t->name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($trainerReport as $t)

                    <td>{{ $t->total }} คน</td>
                    @endforeach

                </tr>
            </tbody>
        </table>
    </div>
</div>