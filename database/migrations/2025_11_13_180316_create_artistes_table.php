<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
{
    Schema::create('artistes', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('genres')->nullable(); // Afro, Rap, RnB, etc.
        $table->string('ville')->nullable();
        $table->string('photo_profil')->nullable();
        $table->string('photo_couverture')->nullable();
        $table->text('biographie')->nullable();
        $table->timestamps();
    });
}

};
