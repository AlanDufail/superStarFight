<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'nom' => 'Sportif',
            'faibleContre' => 'Politique',
            'resistantContre' => 'Comedien',
        ]);
        Type::create([
            'nom' => 'Comedien',
            'faibleContre' => 'Sportif',
            'resistantContre' => 'Politique',
        ]);
        Type::create([
            'nom' => 'Politique',
            'faibleContre' => 'Comedien',
            'resistantContre' => 'Sportif',
        ]);
        Type::create([
            'nom' => 'Developpeur',
            'faibleContre' => 'Sportif',
            'resistantContre' => 'Politque',
        ]);
        Type::create([
            'nom' => 'Musicien',
            'faibleContre' => 'Comedien',
            'resistantContre' => 'Sportif',
        ]);
    }
}
