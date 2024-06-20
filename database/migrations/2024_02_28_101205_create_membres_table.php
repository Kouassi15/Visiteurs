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
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('contact')->nullable();
            $table->string('poste')->nullable();
            $table->string('sexe')->nullable();
            $table->string('domicile')->nullable();
            $table->string('image')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('lieu')->nullable();
            $table->string('personne_contacte')->nullable();
            $table->string('numero_urgent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres');
    }
};
