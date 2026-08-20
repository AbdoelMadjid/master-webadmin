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
                'name_en' => 'Metronic 8 Landing (Standard Default)',
                'description' => 'Tampilan landing page standar Metronic 8 dengan banner hero modern, navigasi bilingual, dan kontrol responsif.',
                'description_en' => 'Metronic 8 default landing page theme featuring rich dark/light hero banners, bilingual navigation, and responsive controls.',
                'author' => 'KeenThemes / Master WebAdmin Team',
                'version' => '8.2.5',
                'thumbnail' => 'assets/media/logos/landing.svg',
                'view_path' => 'theme.default',
                'is_active' => true,
                'supports' => [
                    'top_navigation',
                    'main_navigation',
                    'footer_navigation',
                    'slide_banner',
                    'call_to_action',
                    'bilingual_support',
                ],
            ]
        );
    }
}