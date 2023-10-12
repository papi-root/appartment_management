<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bien;

class Piece extends Model
{
    use HasFactory;

    protected $fillable = ['bien_id', 'numero', 'type_locatif', 'description', 'niveau_etage', 'salle_eau', 'salle_de_bain', 'salon', 'chambre', 'montant', 'tom', 'statut']; 

    public function bien()
    {
        return $this->belongsTo(Bien::class); 
    }
}
