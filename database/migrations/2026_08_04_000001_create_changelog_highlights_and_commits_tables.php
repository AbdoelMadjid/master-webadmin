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
        Schema::create('changelog_highlights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('changelog_id')->constrained('changelogs')->onDelete('cascade');
            $table->string('type')->default('feat');
            $table->string('label');
            $table->text('desc')->nullable();
            $table->timestamps();
        });

        Schema::create('changelog_commits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('changelog_id')->constrained('changelogs')->onDelete('cascade');
            $table->string('hash', 50)->default('HEAD');
            $table->string('date', 50)->nullable();
            $table->text('msg');
            $table->timestamps();
        });

        if (Schema::hasTable('changelogs')) {
            Schema::table('changelogs', function (Blueprint $table) {
                if (Schema::hasColumn('changelogs', 'highlights')) {
                    $table->dropColumn('highlights');
                }
                if (Schema::hasColumn('changelogs', 'commits')) {
                    $table->dropColumn('commits');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changelog_commits');
        Schema::dropIfExists('changelog_highlights');

        if (Schema::hasTable('changelogs')) {
            Schema::table('changelogs', function (Blueprint $table) {
                $table->json('highlights')->nullable();
                $table->json('commits')->nullable();
            });
        }
    }
};
