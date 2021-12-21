<?php

namespace App\Imports;
   
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Redirect;
use App\Models\School;
use App\Models\Roletype;
use App\Models\Language;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        
      
        if(isset($row['school_name']) && isset($row['role_type']) && isset($row['first_name']) && isset($row['last_name']) && isset($row['email']) && isset($row['password']) &&  isset($row['grade'])){

            $language = str_replace(' ', '', $row['language']);
            $school = str_replace(' ', '', $row['school_name']);
            $role = str_replace(' ', '', $row['role_type']);

            $school_id = School::where('school_name', $school)->first();
            $role_id = Roletype::where('role_name', $role)->first();
            $lang = Language::where('language_name', $language)->first();
            // print_r($lang->id); die;
            if(isset($lang)){
                $lang = $lang->id;
            }else{
                $lang = null;
            }
            $randomNumber = random_int(10, 99);

            $fisrtdigit = substr($row['first_name'], 0, 2);
            $lastdigit = substr($row['last_name'], 0, 2);
            $username = $fisrtdigit.$lastdigit.$randomNumber;
      
            $obj = [

                'first_name' => $row['first_name'],
                'last_name' => $row['last_name'],
                'username' => $username,
                'email' => $row['email'],
                'password' => \Hash::make($row['password']),
                'grade' => $row['grade'],
                'school_id' => $school_id->id,
                'role_type' => $role_id->id,
                'language_id' => $lang,
            ];
           
            User::insert($obj);
            
        }
    }
}
