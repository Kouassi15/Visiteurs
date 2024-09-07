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
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('enseignementFemme')->nullable();
            $table->string('heureEnseignementFemme')->nullable();
            $table->string('heurefinEnseignementFemme')->nullable();
            $table->string('enseignementBiblique')->nullable();
            $table->string('heureEnseignementBiblique')->nullable();
            $table->string('heurefinEnseignementBiblique')->nullable();
            $table->string('premierCulte')->nullable();
            $table->string('deuxiemeCulte')->nullable();
            $table->string('culteJumele')->nullable();
            $table->string('heureCulte1')->nullable();
            $table->string('heurefinCulte1')->nullable();
            $table->string('heureCulte2')->nullable();
            $table->string('heurefinCulte2')->nullable();
            $table->string('heureCulteJumele')->nullable();
            $table->string('heurefinCulteJumele')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmes');
    }
};
