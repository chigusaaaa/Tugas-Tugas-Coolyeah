<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['IF101', 'Pemrograman Web', 3],
            ['IF102', 'Basis Data', 3],
            ['IF103', 'Algoritma dan Pemrograman', 4],
            ['IF104', 'Jaringan Komputer', 3],
            ['IF105', 'Rekayasa Perangkat Lunak', 3],
        ];

        foreach ($data as [$kode, $nama, $sks]) {
            Matakuliah::create([
                'kode_mk' => $kode,
                'nama_mk' => $nama,
                'sks'     => $sks,
            ]);
        }
    }
}