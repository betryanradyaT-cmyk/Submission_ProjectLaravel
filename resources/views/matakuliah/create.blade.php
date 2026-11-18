<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header"><h4 class="mb-0">Tambah Data Mata Kuliah</h4></div>
        <div class="card-body">
            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode Mata Kuliah</label>
                    <input type="text" name="kode_matakuliah" class="form-control @error('kode_matakuliah') is-invalid @enderror" value="{{ old('kode_matakuliah') }}">
                    @error('kode_matakuliah')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Mata Kuliah</label>
                    <input type="text" name="nama_matakuliah" class="form-control @error('nama_matakuliah') is-invalid @enderror" value="{{ old('nama_matakuliah') }}">
                    @error('nama_matakuliah')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah SKS (1 - 6)</label>
                    <input type="number" name="sks" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks') }}" min="1" max="6">
                    @error('sks')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan Data</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>