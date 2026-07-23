<?php

namespace Database\Seeders;

use App\Models\AppSupport\AppProfil;
use Illuminate\Database\Seeder;

class AppProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (AppProfil::count() === 0) {
            AppProfil::create([
                'nama_aplikasi' => 'Master WebAdmin',
                'singkatan_aplikasi' => 'MWA',
                'tahun' => date('Y'),
                'pembuat' => 'Master Admin Team',
                'deskripsi' => 'Sistem Informasi Master WebAdmin',
                'active' => 1,
            ]);
        }
    }
}
