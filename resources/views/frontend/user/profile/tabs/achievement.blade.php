<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Tahun</th>
            <th>Deskripsi</th>
            <th>Tingkat</th>
        </tr>
        @foreach($achievements as $achievement)
        <tr>
            <td>{{ $achievement->year }}</td>
            <td>{{ $achievement->description }}</td>
            <td>{{ $achievement->level }}</td>
        </tr>
        @endforeach
    </table>
</div>
