<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header"><h4 class="mb-0">Detail Mata Kuliah</h4></div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr><th width="30%">Kode Mata Kuliah</th><td>{{ $matakuliah->kode_matakuliah }}</td></tr>
                <tr><th>Nama Mata Kuliah</th><td>{{ $matakuliah->nama_matakuliah }}</td></tr>
                <tr><th>Jumlah SKS</th><td>{{ $matakuliah->sks }}</td></tr>
                <tr><th>Tanggal Dibuat (created_at)</th><td>{{ $matakuliah->created_at->format('d-m-Y H:i:s') }}</td></tr>
                <tr><th>Tanggal Diperbarui (updated_at)</th><td>{{ $matakuliah->updated_at->format('d-m-Y H:i:s') }}</td></tr>
            </table>
            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
</body>
</html>