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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->integer('id_fidele')->nullable();
            $table->integer('id_programme')->nullable();
            $table->integer('id_annonceDepartement')->nullable();
            $table->string('dirigeant')->nullable();
            $table->string('orateur')->nullable();
            $table->string('texte')->nullable();
            $table->string('theme')->nullable();
            $table->string('description')->nullable();
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
