<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Walter Maximiliano Ramos',
            'email' => 'licenciadowalterramos@gmail.com',
            'password' => bcrypt('Nicolas2020')
        ])->assignRole('Admin');
        
        User::create([
            'name' => 'DR Jorge Argerich',
            'email' => 'drjorgeargerich@gmail.com',
            'password' => bcrypt('Morena2010')
        ])->assignRole('Admin');
        
        User::create([
            'name' => 'Dolores Gerez',
            'email' => 'estudiodrargerich@gmail.com',
            'password' => bcrypt('Morena2010')
        ])->assignRole('Admin');
    }
}
