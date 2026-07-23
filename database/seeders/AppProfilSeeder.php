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
                'nama_aplikasi' => 'Repalogic WebAdmin',
                'singkatan_aplikasi' => 'RPW',
                'tahun' => date('Y'),
                'pembuat' => 'Repalogic Team',
                'deskripsi' => 'Sistem Informasi Manajemen Repalogic',
                'active' => 1,
            ]);
        }
    }
}
