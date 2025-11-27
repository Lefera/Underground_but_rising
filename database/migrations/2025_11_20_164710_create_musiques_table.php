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
         Schema::create('musiques', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('album_id');
        $table->unsignedBigInteger('artiste_id');
        $table->string('titre');
        $table->string('duree')->nullable(); // "3:45"
        $table->string('audio_file')->nullable(); // chemin mp3
        $table->timestamps();

        // relations
        $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
        $table->foreign('artiste_id')->references('id')->on('artistes')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musiques');
    }
};
