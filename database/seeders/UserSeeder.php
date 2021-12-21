<?php
namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Loginmodel;
class UserSeeder extends Seeder
{

public function run()
{
    DB::table('admins')->insert([
        'name'     => 'Harshit Maheshwari',
        'email'    => 'admin@gmail.com',
        'phone'    => '0911658980',
        'password' => Hash::make('qwertyuiop'),
    ]);
    
}

}