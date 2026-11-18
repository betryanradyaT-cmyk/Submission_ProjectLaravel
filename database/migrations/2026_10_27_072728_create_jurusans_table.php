<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    // Menampilkan daftar jurusan (Read)
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    // Menampilkan form tambah jurusan (Create form)
    public function create()
    {
        return view('jurusan.create');
    }

    // Menyimpan data jurusan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:20|unique:jurusans,kode',
            'nama' => 'required|string|max:100',
        ]);

        Jurusan::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil ditambahkan.');
    }
}