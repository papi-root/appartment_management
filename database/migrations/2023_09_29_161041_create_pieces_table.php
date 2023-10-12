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
        Schema::create('pieces', function (Blueprint $table) {
            $table->id();

            $table->foreignId('bien_id')->constrained();
            $table->string('numero'); 
            $table->string('type_locatif'); 
            $table->string('description'); 
            $table->integer('niveau_etage'); 
            $table->float('montant'); 
            $table->integer('lb')->nullable(); 
            $table->integer('tlv')->nullable(); 
            $table->integer('tva_com')->nullable(); 
            $table->integer('tva')->nullable(); 
            $table->float('tom')->nullable(); 
            $table->float('charge_diverse')->nullable(); 
            $table->float('montant_autorise')->nullable();
            $table->integer('statut'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pieces');
    }
};
