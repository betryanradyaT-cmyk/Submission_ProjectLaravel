<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController; // <-- Tambahan untuk Matakuliah

Route::get('/', function () {
    return view('welcome', [
        'name' => 'Betryan Radya T',
        'age'  => 20,
    ]);
});

Route::get('/hello', function () {
    return 'Hello Laravel!';
});

// Contoh parameter route (dari slide)
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/{id}', function ($id) {
    return 'Produk #' . $id;
});


// Route mahasiswa (parameter diteruskan ke controller)
Route::get('/profil', [MahasiswaController::class, 'profil'])->name('mahasiswa.profil');
Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])->name('mahasiswa.daftar');
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');


// Route Praktikum Jurusan (Create & Read)
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');


// Route Praktikum Mata Kuliah (Create & Read)
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');
Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show'])->name('matakuliah.show');