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
        Schema::create('web_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('name_en', 150)->nullable();
            $table->string('established_year', 10)->default('1978');
            $table->string('logo', 255)->nullable();
            $table->string('logo_mini', 255)->nullable();
            $table->string('favicon', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('address_en', 255)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('copyright_text', 255)->nullable();
            $table->string('copyright_text_en', 255)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Seed initial default website profile
        DB::table('web_profiles')->insert([
            'name' => 'Universitas Unify',
            'name_en' => 'University of Unify',
            'established_year' => '1978',
            'logo' => 'assets/img/logo/logo.png',
            'logo_mini' => 'assets/img/logo/logo-mini.png',
            'favicon' => 'assets/img/logo/logo-mini.png',
            'address' => 'Kingston, Ontario, Kanada',
            'address_en' => 'Kingston, Ontario, Canada',
            'phone' => '+1 (613) 533-2000',
            'email' => 'info@unify.edu',
            'copyright_text' => 'Universitas Unify - Sejak 1978',
            'copyright_text_en' => 'University of Unify since 1978',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_profiles');
    }
};
