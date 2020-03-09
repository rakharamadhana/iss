<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Jenis Pelatihan</th>
            <th>Nama</th>
            <th>Institusi</th>
            <th>Bidang</th>
            <th>Tahun</th>
        </tr>
        @foreach($trainings as $training)
        <tr>
            <td>{{ $training->type }}</td>
            <td>{{ $training->name }}</td>
            <td>{{ $training->institution }}</td>
            <td>{{ $training->field }}</td>
            <td>{{ $training->year }}</td>
        </tr>
        @endforeach
    </table>
</div>
