<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('musiques', function (Blueprint $table) {
            if (!Schema::hasColumn('musiques', 'video_url')) {
                $table->string('video_url')->nullable()->after('audio_file');
            }
        });
    }

    public function down(): void
    {
        Schema::table('musiques', function (Blueprint $table) {
            if (Schema::hasColumn('musiques', 'video_url')) {
                $table->dropColumn('video_url');
            }
        });
    }
};
