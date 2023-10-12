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
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();

            $table->string('nom_complet'); 
            $table->string('adresse')->nullable(); 
            $table->string('telephone'); 
            $table->string('email')->nullable();
            //$table->float('taux_commission_gerance')->nullable(); 
            $table->string('banque')->nullable(); 
            $table->string('compte_banquaire')->nullable(); 
            $table->string('ninea')->nullable(); 
            /*$table->string('rc')->nullable();*/
            $table->string('type')->nullable();
            $table->text('note')->nullable();   
            $table->string('statut'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietaires');
    }
};
