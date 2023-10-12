<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bien; 

class Proprietaire extends Model
{
    use HasFactory;

    protected $fillable = ['nom_complet', 'adressse', 'telephone', 'email',  'banque', 'compte_banquaire', 'ninea', 'rc', 'note', 'statut', 'created_at', 'updated_at'];
    

    public function biens()
    {
        return $this->hasMany(Bien::class); 
    }
}
