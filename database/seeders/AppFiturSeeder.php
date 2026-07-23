<?php

namespace Database\Seeders;

use App\Models\AppSupport\AppFitur;
use Illuminate\Database\Seeder;

class AppFiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppFitur::query()->delete();

        $features = [
            // 1. Sidebar Menu Groups
            [
                'feature_key' => 'group_pages',
                'feature_name' => 'Grup Menu PAGES',
                'category' => 'Sidebar Group',
                'description' => 'Grup menu PAGES di sidebar.',
                'active' => false,
            ],
            [
                'feature_key' => 'group_apps',
                'feature_name' => 'Grup Menu APPS',
                'category' => 'Sidebar Group',
                'description' => 'Grup menu APPS di sidebar.',
                'active' => false,
            ],
            [
                'feature_key' => 'group_layouts',
                'feature_name' => 'Grup Menu LAYOUTS',
                'category' => 'Sidebar Group',
                'description' => 'Grup menu LAYOUTS di sidebar.',
                'active' => false,
            ],
            [
                'feature_key' => 'group_help',
                'feature_name' => 'Grup Menu HELP',
                'category' => 'Sidebar Group',
                'description' => 'Grup menu HELP di sidebar.',
                'active' => true,
            ],

            // 2. Topbar Header Menu Groups (_menu.blade.php)
            [
                'feature_key' => 'topbar_group_dashboards',
                'feature_name' => 'Grup Menu DASHBOARDS',
                'category' => 'Topbar Menu Group',
                'description' => 'Grup menu Dashboards di topbar header menu.',
                'active' => false,
            ],
            [
                'feature_key' => 'topbar_group_pages',
                'feature_name' => 'Grup Menu PAGES',
                'category' => 'Topbar Menu Group',
                'description' => 'Grup menu PAGES di topbar header menu.',
                'active' => false,
            ],
            [
                'feature_key' => 'topbar_group_apps',
                'feature_name' => 'Grup Menu APPS',
                'category' => 'Topbar Menu Group',
                'description' => 'Grup menu APPS di topbar header menu.',
                'active' => false,
            ],
            [
                'feature_key' => 'topbar_group_layouts',
                'feature_name' => 'Grup Menu LAYOUTS',
                'category' => 'Topbar Menu Group',
                'description' => 'Grup menu LAYOUTS di topbar header menu.',
                'active' => false,
            ],
            [
                'feature_key' => 'topbar_group_help',
                'feature_name' => 'Grup Menu HELP',
                'category' => 'Topbar Menu Group',
                'description' => 'Grup menu HELP di topbar header menu.',
                'active' => false,
            ],

            // 3. Topbar Navbar & Widgets
            [
                'feature_key' => 'topbar_time',
                'feature_name' => 'Waktu / Jam Digital Topbar',
                'category' => 'Topbar Navbar',
                'description' => 'Widget jam digital di topbar navigasi.',
                'active' => true,
            ],
            [
                'feature_key' => 'topbar_activities',
                'feature_name' => 'Icon Activities',
                'category' => 'Topbar Navbar',
                'description' => 'Icon & drawer Activities di topbar.',
                'active' => false,
            ],
            [
                'feature_key' => 'topbar_notifications',
                'feature_name' => 'Icon Notifications',
                'category' => 'Topbar Navbar',
                'description' => 'Icon & popup Notifications di topbar.',
                'active' => true,
            ],
            [
                'feature_key' => 'topbar_chat',
                'feature_name' => 'Icon Quick Chat',
                'category' => 'Topbar Navbar',
                'description' => 'Icon & drawer Quick Chat di topbar.',
                'active' => false,
            ],
            [
                'feature_key' => 'topbar_my_apps',
                'feature_name' => 'Icon My Apps Links',
                'category' => 'Topbar Navbar',
                'description' => 'Icon My Apps Links di topbar.',
                'active' => false,
            ],

            // 4. Floating Drawers (Samping Kanan Layar)
            [
                'feature_key' => 'drawer_demos',
                'feature_name' => 'Tombol Demos Floating',
                'category' => 'Floating Drawer',
                'description' => 'Tombol Demos melayang di samping kanan layar.',
                'active' => false,
            ],
            [
                'feature_key' => 'drawer_help',
                'feature_name' => 'Tombol Help Floating',
                'category' => 'Floating Drawer',
                'description' => 'Tombol Help melayang di samping kanan layar.',
                'active' => false,
            ],
        ];

        foreach ($features as $feat) {
            AppFitur::updateOrCreate(
                ['feature_key' => $feat['feature_key']],
                $feat
            );
        }
    }
}
