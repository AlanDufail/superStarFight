<?php

namespace Database\Seeders;

use App\Models\Attaque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attaque::create([
            'nom' => 'charge',
            'degats' => '30',
            'precision' => '40',
            'critique' => '10',
        ]);

        Attaque::create([
            'nom' => 'griffe',
            'degats' => '20',
            'precision' => '80',
            'critique' => '15',
        ]);

        Attaque::create([
            'nom' => 'La république c MOI !!',
            'degats' => '80',
            'precision' => '50',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Diallo ? C qui?',
            'degats' => '80',
            'precision' => '50',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Diallo ? C qui?',
            'degats' => '80',
            'precision' => '10',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Grand remplacement',
            'degats' => '80',
            'precision' => '10',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Coup de boule',
            'degats' => '80',
            'precision' => '10',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Suuuu !!!',
            'degats' => '80',
            'precision' => '10',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Bella !!!',
            'degats' => '80',
            'precision' => '10',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Rubis, c etais pas si mal :/',
            'degats' => '80',
            'precision' => '10',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Semaine A, c est costume !',
            'degats' => '80',
            'precision' => '10',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Fais attention, j ai paladin level 80 sur World of Warcraft',
            'degats' => '80',
            'precision' => '10',
            'critique' => '150',
        ]);

        Attaque::create([
            'nom' => 'Perlinpinpin',
            'degats' => '80',
            'precision' => '10',
            'critique' => '150',
        ]);
    }
}
