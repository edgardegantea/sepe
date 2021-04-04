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
            'name' => 'Eliseo',
            'lastName' => 'Guanico Loma',
            'email' => 'L18TE0011@teziutlan.tecnm.mx',
            'controlNumber' => '18TE0011',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Agustin',
            'lastName' => 'R. Jimenez',
            'email' => 'jefecarrera@correo.com',
            'controlNumber' => '00TE0000',
            'password' => bcrypt('password')
        ])->assignRole('JefeCarrera');

        User::create([
            'name' => 'Edgar',
            'lastName' => 'Degante',
            'email' => 'edgardegante@correo.com',
            'controlNumber' => '01TE0000',
            'password' => bcrypt('password')
        ])->assignRole('Teacher');

        User::create([
            'name' => 'Guadalupe',
            'lastName' => 'Garcia Toribio',
            'email' => 'guadalupe@correo.com',
            'controlNumber' => '02TE0000',
            'password' => bcrypt('password')
        ])->assignRole('Teacher');

        User::create([
            'name' => 'Jaqueline',
            'lastName' => 'R. Jimenez',
            'email' => 'jaqueline@correo.com',
            'controlNumber' => '03TE0000',
            'password' => bcrypt('password')
        ])->assignRole('Student');

    }
}
