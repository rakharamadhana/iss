<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Tingkat</th>
            <th>Organisasi</th>
            <th>Tahun</th>
            <th>Posisi</th>
        </tr>
        @foreach($organizations as $organization)
        <tr>
            <td>{{ $organization->level }}</td>
            <td>{{ $organization->name }}</td>
            <td>{{ $organization->year }}</td>
            <td>{{ $organization->position }}</td>
        </tr>
        @endforeach
    </table>
</div>
