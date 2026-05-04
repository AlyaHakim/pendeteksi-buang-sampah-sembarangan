<h1>Dashboard Deteksi</h1>

<a href="{{ route('dashboard.create') }}">Upload Data</a>
<a href="{{ route('dashboard.export') }}">Export CSV</a>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No</th>
            <th>Lokasi</th>
            <th>Waktu Kejadian</th>
            <th>Status Indikasi</th>
            <th>Status Validasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($detections as $detection)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $detection->lokasi }}</td>
                <td>{{ $detection->waktu_kejadian }}</td>
                <td>{{ $detection->status_indikasi }}</td>
                <td>{{ $detection->status_validasi }}</td>
                <td>
                    <a href="{{ route('dashboard.show', $detection->id) }}">Detail</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data deteksi.</td>
            </tr>
        @endforelse
    </tbody>
</table>