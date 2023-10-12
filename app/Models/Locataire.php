<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Piece; 

class Locataire extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'nom_complet', 'telephone','fonction', 'societe', 'email', 'nci', 
        'nom_complet_conjoint', 'profession_conjoint', 'telephone_conjoint', 'adresse_conjoint',
        'note'
    ]; 

    public function piece()
    {
        return $this->hasMany(Piece::class); 
    }
}

