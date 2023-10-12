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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('locataire_id')->constrained(); 
            $table->foreignId('piece_id')->constrained(); 
            $table->string('debut_contrat'); 
            $table->string('fin_contrat'); 
            $table->float('montant_caution'); 
            $table->integer('modalite_contrat'); 
            $table->string('statut'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
