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
        Schema::create('contrat_gestions', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('proprietaire_id')->constrained();
            $table->foreignId('bien_id')->constrained(); 
            $table->string('date_debut'); 
            $table->string('date_fin')->nullable();
            $table->string('taux_commission')->nullable();   
            $table->text('note')->nullbale(); 
            $table->integer('statut'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrat_gestions');
    }
};
