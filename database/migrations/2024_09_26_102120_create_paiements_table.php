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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->decimal('montant_verse', 8, 2);
            $table->date('date_paiement');
            $table->string('mois');
            $table->enum('mode_paiement', ['espece', 'mobile'])->default('mobile');
            $table->unsignedBigInteger('cotisation_id');
            $table->foreign('cotisation_id')->references('id')->on('cotisations')->onDelete('cascade'); // Clé étrangère
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
