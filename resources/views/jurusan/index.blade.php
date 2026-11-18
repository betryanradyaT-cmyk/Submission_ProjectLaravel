<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Data Mata Kuliah</h4>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-primary btn-sm">+ Tambah Mata Kuliah</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nomor</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($matakuliah as $index => $mk)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $mk->kode_matakuliah }}</td>
                            <td>{{ $mk->nama_matakuliah }}</td>
                            <td>{{ $mk->sks }}</td>
                            <td>
                                <a href="{{ route('matakuliah.show', $mk->id) }}" class="btn btn-info btn-sm text-white">Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data mata kuliah.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>