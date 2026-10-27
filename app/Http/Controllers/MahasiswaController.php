<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    private function data(): array
    {
        return [
            ['nama' => 'Betryan Radya T', 'nim' => '242520072', 'ipk' => 3.60],
            ['nama' => 'Andi Pratama',    'nim' => '242520001', 'ipk' => 3.20],
            ['nama' => 'Siti Aisyah',     'nim' => '242520002', 'ipk' => 3.85],
            ['nama' => 'Budi Santoso',    'nim' => '242520003', 'ipk' => 2.75],
            ['nama' => 'Dewi Lestari',    'nim' => '242520004', 'ipk' => 1.90],
        ];
    }

    public function profil()
    {
        return view('mahasiswa.profil', [
            'nama'  => 'Betryan Radya T',
            'nim'   => '242520072',
            'prodi' => 'Teknologi Informasi',
        ]);
    }

    public function daftar()
    {
        $mahasiswa = $this->data();
        $adaIpkRendah = collect($mahasiswa)->contains(fn ($m) => $m['ipk'] < 2.0);

        return view('mahasiswa.daftar', compact('mahasiswa', 'adaIpkRendah'));
    }

    public function detail($nim)
    {
        $mhs = collect($this->data())->firstWhere('nim', $nim);
        abort_if(! $mhs, 404);

        return view('mahasiswa.detail', compact('mhs'));
    }
}