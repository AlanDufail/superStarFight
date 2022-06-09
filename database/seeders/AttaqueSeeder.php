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
    }
}
