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
        Schema::table('data_logins', function (Blueprint $table) {
            $table->unsignedInteger('login_count')->default(1)->after('point_awarded');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_logins', function (Blueprint $table) {
            $table->dropColumn('login_count');
        });
    }
};
