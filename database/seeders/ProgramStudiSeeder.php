<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akademik\DataMaster\Fakultas;
use App\Models\Akademik\DataMaster\ProgramStudi;
use App\Enums\JenjangStudi; // <- TAMBAH INI

class ProgramStudiSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan fakultas sudah ada
        $fikes = Fakultas::where('kode', 'FIKES')->firstOrFail();
        $fbpt = Fakultas::where('kode', 'FBPT')->firstOrFail();

        // ============================
        // Fakultas Ilmu Kesehatan
        // ============================

        ProgramStudi::updateOrCreate(
            ['kode' => 'S1-KEP'],
            [
                'fakultas_id' => $fikes->id,
                'nama' => 'Ilmu Keperawatan',
                'singkatan' => 'KEP',
                'jenjang' => JenjangStudi::S1,
                'aktif' => true,
            ]
        );

        ProgramStudi::updateOrCreate(
            ['kode' => 'S1-IKM'],
            [
                'fakultas_id' => $fikes->id,
                'nama' => 'Ilmu Kesehatan Masyarakat',
                'singkatan' => 'IKM',
                'jenjang' => JenjangStudi::S1,
                'aktif' => true,
            ]
        );

        ProgramStudi::updateOrCreate(
            ['kode' => 'S1-KB'],
            [
                'fakultas_id' => $fikes->id,
                'nama' => 'Kebidanan',
                'singkatan' => 'Kebidanan S1',
                'jenjang' => JenjangStudi::S1,
                'aktif' => true,
            ]
        );

        ProgramStudi::updateOrCreate(
            ['kode' => 'D3-KB'],
            [
                'fakultas_id' => $fikes->id,
                'nama' => 'Kebidanan',
                'singkatan' => 'Kebidanan D3',
                'jenjang' => JenjangStudi::D3,
                'aktif' => true,
            ]
        );

        ProgramStudi::updateOrCreate(
            ['kode' => 'PROF-NERS'],
            [
                'fakultas_id' => $fikes->id,
                'nama' => 'Profesi Ners',
                'singkatan' => 'Ners',
                'jenjang' => JenjangStudi::PROFESI,
                'aktif' => true,
            ]
        );

        // ============================
        // Fakultas Bisnis, Pendidikan dan Teknologi
        // ============================

        ProgramStudi::updateOrCreate(
            ['kode' => 'S1-PTI'],
            [
                'fakultas_id' => $fbpt->id,
                'nama' => 'Pendidikan Teknologi Informasi',
                'singkatan' => 'PTI',
                'jenjang' => JenjangStudi::S1,
                'aktif' => true,
            ]
        );

        ProgramStudi::updateOrCreate(
            ['kode' => 'S1-SI'],
            [
                'fakultas_id' => $fbpt->id,
                'nama' => 'Sistem Informasi',
                'singkatan' => 'SI',
                'jenjang' => JenjangStudi::S1,
                'aktif' => true,
            ]
        );

        ProgramStudi::updateOrCreate(
            ['kode' => 'S1-IM'],
            [
                'fakultas_id' => $fbpt->id,
                'nama' => 'Informatika Medis',
                'singkatan' => 'IM',
                'jenjang' => JenjangStudi::S1,
                'aktif' => true,
            ]
        );

        ProgramStudi::updateOrCreate(
            ['kode' => 'S1-KWU'],
            [
                'fakultas_id' => $fbpt->id,
                'nama' => 'Kewirausahaan',
                'singkatan' => 'KWU',
                'jenjang' => JenjangStudi::S1,
                'aktif' => true,
            ]
        );
    }
}
