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
        if (!Schema::hasColumn('web_profiles', 'social_links')) {
            Schema::table('web_profiles', function (Blueprint $table) {
                $table->json('social_links')->nullable()->after('copyright_text_en');
            });
        }

        // Seed default social links structure into existing profile
        $defaultSocialLinks = json_encode([
            'twitter' => [
                'name' => 'Twitter / X',
                'icon' => 'fab fa-twitter',
                'url' => 'https://twitter.com',
                'is_active' => true,
            ],
            'facebook' => [
                'name' => 'Facebook',
                'icon' => 'fab fa-facebook-f',
                'url' => 'https://facebook.com',
                'is_active' => true,
            ],
            'instagram' => [
                'name' => 'Instagram',
                'icon' => 'fab fa-instagram',
                'url' => 'https://instagram.com',
                'is_active' => true,
            ],
            'youtube' => [
                'name' => 'YouTube',
                'icon' => 'fab fa-youtube',
                'url' => 'https://youtube.com',
                'is_active' => true,
            ],
            'linkedin' => [
                'name' => 'LinkedIn',
                'icon' => 'fab fa-linkedin-in',
                'url' => 'https://linkedin.com',
                'is_active' => true,
            ],
        ]);

        DB::table('web_profiles')
            ->whereNull('social_links')
            ->orWhere('social_links', '')
            ->update(['social_links' => $defaultSocialLinks]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('web_profiles', 'social_links')) {
            Schema::table('web_profiles', function (Blueprint $table) {
                $table->dropColumn('social_links');
            });
        }
    }
};
