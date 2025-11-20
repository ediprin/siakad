<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FakultasSeeder::class,
            ProgramStudiSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Admin Akademik',
            'email' => 'akademik@siakad.test',
            'password' => bcrypt('1234'),
            'panel_id' => 'akademik'
        ]);
    }
}
