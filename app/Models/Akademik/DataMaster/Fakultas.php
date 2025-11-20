<?php

namespace App\Models\Akademik\DataMaster;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    /** @use HasFactory<\Database\Factories\Akademik\DataMaster\FakultasFactory> */
    use HasFactory;
    protected $table = 'fakultas';

    protected $fillable = [
        'kode',
        'nama',
        'singkatan',
        'aktif',
    ];

    protected $casts = [
        'aktif' => 'boolean',
    ];

    // Relasi ke Program Studi
    public function programStudis()
    {
        return $this->hasMany(ProgramStudi::class);
    }
}
