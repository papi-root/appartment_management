<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Piece; 

class Contrat extends Model
{
    use HasFactory;

    public function piece()
    {
        return $this->hasMany(Piece::class); 
    }
}
