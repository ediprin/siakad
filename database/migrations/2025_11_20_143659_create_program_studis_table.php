<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('program_studis', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fakultas_id')
                ->constrained('fakultas')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->string('kode', 20)->unique();      // Kode Prodi resmi
            $table->string('nama');                    // Nama lengkap prodi
            $table->string('singkatan')->nullable();   // "TI", "SI", dll.
            $table->string('jenjang', 20);             // D3 / S1 / S2 / S3

            $table->boolean('aktif')->default(true);   // Status aktif / nonaktif

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_studis');
    }
};
