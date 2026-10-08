<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $prodi = ['Teknik Informatika', 'Sistem Informasi', 'Teknik Elektro'];

        for ($i = 1; $i <= 25; $i++) {
            Mahasiswa::create([
                'nim'      => '20240100' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'nama'     => 'Mahasiswa ' . $i,
                'email'    => $i % 4 === 0 ? null : "mhs{$i}@example.com",
                'prodi'    => $prodi[$i % 3],
                'semester' => ($i % 8) + 1,
            ]);
        }
    }
}