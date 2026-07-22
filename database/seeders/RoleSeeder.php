<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'master']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'kepsek']);
        Role::create(['name' => 'guru']);
        Role::create(['name' => 'tatausaha']);
        Role::create(['name' => 'wakasek']);
        Role::create(['name' => 'kaprog']);
        Role::create(['name' => 'gmapel']);
        Role::create(['name' => 'walas']);
        Role::create(['name' => 'siswa']);
        Role::create(['name' => 'tamu']);
        Role::create(['name' => 'pembpkl']);
        Role::create(['name' => 'adminpkl']);
        Role::create(['name' => 'pesertapkl']);
        Role::create(['name' => 'kaprodiak']);
        Role::create(['name' => 'kaprodibd']);
        Role::create(['name' => 'kaprodimp']);
        Role::create(['name' => 'kaprodirpl']);
        Role::create(['name' => 'kaproditkj']);
        Role::create(['name' => 'bpbk']);
        Role::create(['name' => 'alumni']);
        Role::create(['name' => 'panitiapkl']);
        Role::create(['name' => 'kaprakerinak']);
        Role::create(['name' => 'kaprakerinbd']);
        Role::create(['name' => 'kaprakerinmp']);
        Role::create(['name' => 'kaprakerinrpl']);
        Role::create(['name' => 'kaprakerintkj']);
        Role::create(['name' => 'guruprakerin']);
        Role::create(['name' => 'siswaprakerin']);
        Role::create(['name' => 'guruwali']);
        Role::create(['name' => 'adminps']);
        Role::create(['name' => 'wakakurikulum']);
        Role::create(['name' => 'stafwakakurikulum']);
        Role::create(['name' => 'wakakesiswaan']);
        Role::create(['name' => 'stafwakakesiswaan']);
        Role::create(['name' => 'wakahumas']);
        Role::create(['name' => 'stafwakahumas']);
        Role::create(['name' => 'wakasarana']);
        Role::create(['name' => 'stafwakasarana']);
        Role::create(['name' => 'wakaps']);
        Role::create(['name' => 'stafwakaps']);
    }
}
