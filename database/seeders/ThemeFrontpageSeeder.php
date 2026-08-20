<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppSupport\ThemeFrontpage;

class ThemeFrontpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ThemeFrontpage::updateOrCreate(
            ['slug' => 'default'],
            [
                'name' => 'Metronic 8 Landing (Standard Default)',
                'thumbnail' => 'theme/default/images/thumbnail/default.png',
                'view_path' => 'theme.default',
                'is_active' => true,
            ]
        );
    }
}
