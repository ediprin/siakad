<?php

namespace App\Models\Akademik\DataMaster;

use App\Enums\JenjangStudi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramStudi extends Model
{
    /** @use HasFactory<\Database\Factories\Akademik\DataMaster\ProgramStudiFactory> */
    use HasFactory;

    protected $table = 'program_studis';

    protected $fillable = [
        'fakultas_id',
        'kode',
        'nama',
        'singkatan',
        'jenjang',
        'aktif',
    ];

    protected $casts = [
        'aktif' => 'boolean',
        'jenjang' => JenjangStudi::class,
    ];

    // Relasi ke Fakultas
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    // Relasi-relasi lain (nantinya):
    // public function kurikulums() { ... }
    // public function mahasiswa() { ... }
    // public function semesterProdi() { ... }
    // public function akreditasis() { ... }
}
