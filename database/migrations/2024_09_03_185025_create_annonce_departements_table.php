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
        Schema::create('annonce_departements', function (Blueprint $table) {
            $table->id();
            $table->string('annonceJepcma')->nullable();
            $table->string('annonceAfecmaci')->nullable();
            $table->string('annonceFeci')->nullable();
            $table->string('annonceRecmaci')->nullable();
            $table->string('annonceNational')->nullable();
            $table->string('annonceecoleDimanche')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce_departements');
    }
};
