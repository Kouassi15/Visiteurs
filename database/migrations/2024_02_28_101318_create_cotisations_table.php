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
        Schema::create('cotisations', function (Blueprint $table) {
            $table->id();
            $table->integer('membre_id')->nullable();
            $table->string('no_cotisation')->nullable();
            $table->string('montant_mensuel')->nullable();
            $table->string('montant_total')->nullable();
            $table->string('mois')->nullable();
            $table->string('annee')->nullable();
            $table->enum('status', ['en cours', 'soldé']);
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotisations');
    }
};
