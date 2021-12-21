<?php

namespace App\Imports;
   
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\School;
use App\Models\Roletype;

class SchoolImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        
            if(isset($row['name'])){
           
                $obj = [
                    'school_name' => $row['name'],
                ];
               
                School::insert($obj);
            }
        

       
    }
}
