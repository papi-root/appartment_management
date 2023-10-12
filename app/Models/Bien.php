<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proprietaire; 

class Bien extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'proprietaire_id', 'type_bien', 'numero', 'nom_bien', 'date_construction', 'adresse', 'date_prise_en_charge', 'caracterisque', 'lot' ]; 

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class); 
    }
}
