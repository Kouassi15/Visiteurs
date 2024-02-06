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
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->id();
            $table->integer('responsable_id')->nullable();
            $table->integer('type_visiteur_id')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('contact');
            $table->string('sexe');
            // $table->string('statuts')->nullable();
            $table->string('activite')->nullable();
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visiteurs');
    }
};
