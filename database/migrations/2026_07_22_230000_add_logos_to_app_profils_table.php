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
        Schema::table('app_profils', function (Blueprint $table) {
            if (!Schema::hasColumn('app_profils', 'logo_small')) {
                $table->string('logo_small')->nullable()->after('logo');
            }
            if (!Schema::hasColumn('app_profils', 'favicon')) {
                $table->string('favicon')->nullable()->after('logo_small');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('app_profils', function (Blueprint $table) {
            $table->dropColumn(['logo_small', 'favicon']);
        });
    }
};
