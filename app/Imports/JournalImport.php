<?php

namespace App\Imports;

use App\Models\Journal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Carbon\Carbon; 
use PhpOffice\PhpSpreadsheet\Shared\Date;

class JournalImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
   /* public function model(array $row)
    {
        return new Journal([
            //
        ]);
    }
*/
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            dd(Date::excelTodateTimeObject($row[0]), $row[0], Carbon::parse($row[0]));
            // First Check if rows is not a date 

            // else 
            // check if its a debt or not 

            Journal::create([
                'date_importation' =>  Carbon::now(), 
                'date' => $row[0],
                'compte' => $row[1],
                'libelle' => $row[2],
                'debit' => $row[3],
                'credit' => $row[4],
                'sens' => ($row[3] > 0) ? 'D' : 'C'
            ]);
        }
    }
}
