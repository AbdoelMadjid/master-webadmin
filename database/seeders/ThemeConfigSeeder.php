<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppSupport\ThemeFrontpage;
use App\Models\AppSupport\ThemeConfig;

class ThemeConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultTheme = ThemeFrontpage::where('slug', 'default')->first();

        if ($defaultTheme) {
            ThemeConfig::updateOrCreate(
                ['theme_frontpage_id' => $defaultTheme->id],
                [
                    'logo_default' => null,
                    'logo_sticky' => null,
                    'logo_footer' => null,
                    'header_menu' => [
                        ['title' => 'Home', 'url' => '#kt_body', 'target' => '_self'],
                        ['title' => 'How it Works', 'url' => '#how-it-works', 'target' => '_self'],
                        ['title' => 'Achievements', 'url' => '#achievements', 'target' => '_self'],
                        ['title' => 'Team', 'url' => '#team', 'target' => '_self'],
                        ['title' => 'Portfolio', 'url' => '#portfolio', 'target' => '_self'],
                        ['title' => 'Pricing', 'url' => '#pricing', 'target' => '_self'],
                    ],
                    'footer_menu' => [
                        ['title' => 'About', 'url' => '#how-it-works', 'target' => '_self'],
                        ['title' => 'Support', 'url' => '#team', 'target' => '_self'],
                        ['title' => 'Purchase', 'url' => '#pricing', 'target' => '_self'],
                    ],
                ]
            );
        }
    }
}
