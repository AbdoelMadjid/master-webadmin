<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('web_features', function (Blueprint $table) {
            $table->id();
            $table->string('feature_key', 50)->unique();
            $table->string('name', 150);
            $table->string('name_en', 150)->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->string('location', 50)->default('topbar'); // topbar, footer, navbar
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Seed initial 5 default website features
        $now = now();
        $seedFeatures = [
            [
                'feature_key' => 'intake_button',
                'name' => 'Tombol Apply Intake',
                'name_en' => 'Apply for Intake Button',
                'description' => 'Tombol pendaftaran/intake musim gugur di bagian paling kiri topbar header.',
                'description_en' => 'Fall intake application button on the topbar header.',
                'location' => 'topbar',
                'is_active' => true,
                'order' => 1,
            ],
            [
                'feature_key' => 'language_switcher',
                'name' => 'Pengubah Bahasa (Language Switcher)',
                'name_en' => 'Language Switcher Dropdown',
                'description' => 'Dropdown pemilih bahasa (Indonesia & English) pada topbar header.',
                'description_en' => 'Language selector dropdown (Indonesian & English) on the topbar header.',
                'location' => 'topbar',
                'is_active' => true,
                'order' => 2,
            ],
            [
                'feature_key' => 'login_button',
                'name' => 'Tombol Login / Masuk',
                'name_en' => 'Login / Sign In Button',
                'description' => 'Tombol akses masuk ke dashboard admin/portal pada topbar.',
                'description_en' => 'Portal/dashboard login access button on the topbar.',
                'location' => 'topbar',
                'is_active' => true,
                'order' => 3,
            ],
            [
                'feature_key' => 'search_bar',
                'name' => 'Form Pencarian Header',
                'name_en' => 'Header Search Bar',
                'description' => 'Form pencarian popover di sebelah kanan tombol login topbar.',
                'description_en' => 'Popover search form to the right of the login button on topbar.',
                'location' => 'topbar',
                'is_active' => true,
                'order' => 4,
            ],
            [
                'feature_key' => 'social_media',
                'name' => 'Sosial Media Footer',
                'name_en' => 'Footer Social Media Icons',
                'description' => 'Daftar ikon tautan media sosial (Twitter, Facebook, Instagram, YouTube, LinkedIn) di bagian footer.',
                'description_en' => 'Social media icon links (Twitter, Facebook, Instagram, YouTube, LinkedIn) in the footer.',
                'location' => 'footer',
                'is_active' => true,
                'order' => 5,
            ],
        ];

        foreach ($seedFeatures as $feat) {
            DB::table('web_features')->insert(array_merge($feat, [
                'created_at' => $now,
                'updated_at' => $now,
            ]));
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_features');
    }
};
