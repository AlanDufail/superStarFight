<?php

namespace Database\Seeders;

use App\Models\Personnage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonnageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personnage::create([
            'nom' => 'Cena',
            'prenom' => 'John',
            'imgUrl' => 'https://parlersport.com/wp-content/uploads/2021/09/John-Cena-montre-une-transformation-corporelle-insensee-pour-la-serie-1200x900.png',
            'vie' => '600',
            'attaque' => '100',
            'defense' => '200',
            'vitesse' => '40',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Zemmour',
            'prenom' => 'Eric',
            'imgUrl' => 'https://yt3.ggpht.com/43-m8EJ5hr-zruFUXWZI6uOZiKRYLsS_JGOFTLy5PNVwcANrzKar4zRtwCa4uLY6yp2iC6UqeQ=s900-c-k-c0x00ffffff-no-rj',
            'vie' => '400',
            'attaque' => '95',
            'defense' => '140',
            'vitesse' => '70',
            'sexe' => 'homme',
            ]);
    }
}
