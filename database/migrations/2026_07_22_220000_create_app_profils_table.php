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
        Schema::create('app_profils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aplikasi');
            $table->string('singkatan_aplikasi')->nullable();
            $table->string('tahun')->default(date('Y'));
            $table->string('pembuat')->default('Master Admin Team');
            $table->string('logo')->nullable();
            $table->text('deskripsi')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_profils');
    }
};
