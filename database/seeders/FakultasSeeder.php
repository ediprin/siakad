<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akademik\DataMaster\Fakultas;

class FakultasSeeder extends Seeder
{
    public function run(): void
    {
        // Fakultas Ilmu Kesehatan
        Fakultas::updateOrCreate(
            ['kode' => 'FIKES'],
            [
                'nama' => 'Ilmu Kesehatan',
                'singkatan' => 'FIKES',
                'aktif' => true,
            ]
        );

        // Fakultas Bisnis, Pendidikan dan Teknologi
        Fakultas::updateOrCreate(
            ['kode' => 'FBPT'],
            [
                'nama' => 'Bisnis, Pendidikan dan Teknologi',
                'singkatan' => 'FBPT',
                'aktif' => true,
            ]
        );
    }
}
