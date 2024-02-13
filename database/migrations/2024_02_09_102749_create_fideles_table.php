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
        Schema::create('fideles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_enfants')->nullable();
            $table->string('nombre_femmes')->nullable();
            $table->string('nombre_hommes')->nullable();
            $table->string('nombre_visiteurs')->nullable();
            $table->string('total_fidele')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fideles');
    }
};