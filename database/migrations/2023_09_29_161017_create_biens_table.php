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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('proprietaire_id')->constrained();
            $table->string('type_bien'); 
            $table->string('numero'); 
            $table->string('nom_bien'); 
            $table->string('date_contruction'); 
            $table->string('adresse'); 
            $table->string('date_prise_en_charge'); 
            $table->text('caracteristiques'); 
            $table->string('lot')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
