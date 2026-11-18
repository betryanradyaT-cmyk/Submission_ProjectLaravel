<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_matakuliah' => 'required|max:20|unique:matakuliah,kode_matakuliah',
            'nama_matakuliah' => 'required|max:100',
            'sks'             => 'required|integer|min:1|max:6',
        ], [
            'kode_matakuliah.required' => 'Kode mata kuliah wajib diisi.',
            'kode_matakuliah.unique'   => 'Kode mata kuliah sudah terdaftar.',
            'nama_matakuliah.required' => 'Nama mata kuliah wajib diisi.',
            'sks.required'             => 'Jumlah SKS wajib diisi.',
            'sks.min'                  => 'SKS minimal 1.',
            'sks.max'                  => 'SKS maksimal 6.',
        ]);

        Matakuliah::create($validated);

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Data mata kuliah berhasil ditambahkan!');
    }

    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }
}