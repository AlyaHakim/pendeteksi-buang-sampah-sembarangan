<h1>Upload Data Deteksi</h1>

<a href="{{ route('dashboard.index') }}">Kembali ke Dashboard</a>

@if ($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Lokasi</label><br>
    <input type="text" name="lokasi" value="{{ old('lokasi') }}"><br><br>

    <label>Waktu Kejadian</label><br>
    <input type="datetime-local" name="waktu_kejadian" value="{{ old('waktu_kejadian') }}"><br><br>

    <label>Gambar Bukti</label><br>
    <input type="file" name="gambar_bukti"><br><br>

    <label>Jenis Bukti</label><br>
    <input type="text" name="jenis_bukti" value="{{ old('jenis_bukti') }}"><br><br>

    <label>Status Indikasi</label><br>
    <select name="status_indikasi">
        <option value="Terindikasi">Terindikasi</option>
        <option value="Tidak Terindikasi">Tidak Terindikasi</option>
    </select><br><br>

    <label>Status Validasi</label><br>
    <select name="status_validasi">
        <option value="Belum divalidasi">Belum divalidasi</option>
        <option value="Valid">Valid</option>
        <option value="Tidak valid">Tidak valid</option>
    </select><br><br>

    <label>Keterangan</label><br>
    <textarea name="keterangan">{{ old('keterangan') }}</textarea><br><br>

    <label>Tindak Lanjut</label><br>
    <textarea name="tindak_lanjut">{{ old('tindak_lanjut') }}</textarea><br><br>

    <button type="submit">Simpan</button>
</form>