<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductsController;
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
Route::get('/products', [productsController::class, 'index']);
Route::get('/products/{id}', function ($id) {
    return 'Produk #' . $id;
});


// Route mahasiswa (parameter diteruskan ke controller)
Route::get('/profil', [MahasiswaController::class, 'profil'])->name('mahasiswa.profil');
Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])->name('mahasiswa.daftar');
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');