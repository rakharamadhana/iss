<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Tingkat</th>
            <th>Tahun Mulai</th>
            <th>Tahun Berakhir</th>
            <th>Institusi</th>
            <th>Bidang</th>
            <th>Nilai Rerata / IPK</th>
        </tr>
        @foreach($educations as $education)
        <tr>
            <td>{{ $education->level }}</td>
            <td>{{ $education->year_start }}</td>
            <td>{{ $education->year_end }}</td>
            <td>{{ $education->institution }}</td>
            <td>{{ $education->field }}</td>
            <td>{{ number_format( $education->average_score, 2) }}</td>
        </tr>
        @endforeach
    </table>
</div>
