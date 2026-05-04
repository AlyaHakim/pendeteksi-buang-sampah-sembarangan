<!DOCTYPE html>
<html>
<head>
    <title>Detail Deteksi</title>
</head>
<body>
    <h1>Detail Data Deteksi</h1>

    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>

    <hr>

    <p><strong>Lokasi:</strong> {{ $detection->lokasi }}</p>
    <p><strong>Waktu Kejadian:</strong> {{ $detection->waktu_kejadian }}</p>
    <p><strong>Jenis Bukti:</strong> {{ $detection->jenis_bukti }}</p>
    <p><strong>Status Indikasi:</strong> {{ $detection->status_indikasi }}</p>
    <p><strong>Status Validasi:</strong> {{ $detection->status_validasi }}</p>
    <p><strong>Keterangan:</strong> {{ $detection->keterangan }}</p>
    <p><strong>Tindak Lanjut:</strong> {{ $detection->tindak_lanjut }}</p>

    @if($detection->gambar_bukti)
        <p><strong>Gambar Bukti:</strong></p>
        <img src="{{ asset('storage/' . $detection->gambar_bukti) }}" width="300">
    @endif
</body>
</html>