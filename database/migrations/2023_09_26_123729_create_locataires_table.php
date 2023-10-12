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
        Schema::create('locataires', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet'); 
            $table->string('telephone'); 
            $table->string('fonction'); 
            $table->string('societe')->nullable(); 
            $table->string('email')->nullable(); 
            $table->string('nci')->nullable(); 
            $table->string('nom_complet_conjoint')->nullable(); 
            $table->string('profession_conjoint')->nullable(); 
            $table->string('telephone_conjoint')->nullable(); 
            $table->string('adresse_conjoint')->nullable(); 
            $table->string('date_entree'); 
            $table->string('date_sortie')->nullable(); 
            $table->text('note'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locataires');
    }
};
