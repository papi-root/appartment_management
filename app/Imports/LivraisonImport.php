<?php

namespace App\Imports;

use App\Models\Livraison;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;


class LivraisonImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    /*
    public function model(array $row)
    {
        return new Livraison([
            //
        ]);
    }*/

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            //dd($rows);
            // First Check if rows is not a date 

            // else 
            // check if its a debt or not 

            Livraison::create([
                'date' =>  '01-05-2023', 
                'client' => $row[1],
                'produit' => $row[2],
                'zone' => $row[3],
                'nbre' => $row[4],
                'commercial' => $row[5],
                'frais' => $row[6],
                'statut' => 0
            ]);
        }
    }

}
