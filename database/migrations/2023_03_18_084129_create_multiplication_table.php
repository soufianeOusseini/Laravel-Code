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
        Schema::create('multiplication', function (Blueprint $table) {
            $table->id();
            $table->integer('nombre1');
            $table->integer('nombre2');
            $table->integer('produit');
            $table->string('commentaire');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiplication');
    }
};
