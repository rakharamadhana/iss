<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Institusi</th>
            <th>Posisi</th>
            <th>Tahun Mulai</th>
            <th>Tahun Selesai</th>
            <th>Pendapatan (per bulan)</th>
        </tr>
        @foreach($employments as $employment)
        <tr>
            <td>{{ $employment->institution }}</td>
            <td>{{ $employment->position }}</td>
            <td>{{ $employment->year_start }}</td>
            <td>{{ $employment->year_end }}</td>
            <td>Rp {{number_format( $employment->monthly_income )}}</td>
        </tr>
        @endforeach
    </table>
</div>
