<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('web_profiles', function (Blueprint $table) {
            if (!Schema::hasColumn('web_profiles', 'template_slug')) {
                $table->string('template_slug', 100)->default('default')->after('social_links');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('web_profiles', function (Blueprint $table) {
            if (Schema::hasColumn('web_profiles', 'template_slug')) {
                $table->dropColumn('template_slug');
            }
        });
    }
};
