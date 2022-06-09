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
            'defense' => '40',
            'vitesse' => '40',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Zemmour',
            'prenom' => 'Eric',
            'imgUrl' => 'https://yt3.ggpht.com/43-m8EJ5hr-zruFUXWZI6uOZiKRYLsS_JGOFTLy5PNVwcANrzKar4zRtwCa4uLY6yp2iC6UqeQ=s900-c-k-c0x00ffffff-no-rj',
            'vie' => '400',
            'attaque' => '95',
            'defense' => '50',
            'attaque' => '150',
            'defense' => '100',
            'vitesse' => '100',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Melenchon',
            'prenom' => 'Jean-Luc',
            'imgUrl' => 'https://fr.wikipedia.org/wiki/Jean-Luc_M%C3%A9lenchon#/media/Fichier:Jean_Luc_MELENCHON_in_the_European_Parliament_in_Strasbourg,_2016_(cropped).jpg',
            'vie' => '800',
            'attaque' => '150',
            'defense' => '50',
            'vitesse' => '70',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Strauss-Kahn',
            'prenom' => 'Dominique',
            'imgUrl' => 'http://www.slate.fr/sites/default/files/styles/1060x523/public/dsk_12.jpg',
            'vie' => '800',
            'attaque' => '150',
            'defense' => '30',
            'vitesse' => '30',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Zidane',
            'prenom' => 'Zinedine',
            'imgUrl' => 'https://resize-parismatch.lanmedia.fr/rcrop/250,250/img/var/news/storage/images/paris-match/people-a-z/zinedine-zidane/6084284-8-fre-FR/Zinedine-Zidane.jpg',
            'vie' => '400',
            'attaque' => '150',
            'defense' => '50',
            'vitesse' => '100',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Cristiano',
            'prenom' => 'Ronaldo',
            'imgUrl' => 'https://resize-parismatch.lanmedia.fr/rcrop/250,250/img/var/news/storage/images/paris-match/people-a-z/cristiano-ronaldo/5974922-5-fre-FR/Cristiano-Ronaldo.jpg',
            'vie' => '400',
            'attaque' => '150',
            'defense' => '50',
            'vitesse' => '100',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Gims',
            'prenom' => 'Maitre',
            'imgUrl' => 'https://upload.wikimedia.org/wikipedia/commons/4/4e/Ma%C3%AEtre_Gims_Cannes_2016_2.jpg',
            'vie' => '400',
            'attaque' => '150',
            'defense' => '50',
            'vitesse' => '100',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Gaël',
            'prenom' => 'GOAT',
            'imgUrl' => 'https://image-uniservice.linternaute.com/image/450/3/1337721664/3498492.jpg',
            'vie' => '800',
            'attaque' => '150',
            'defense' => '100',
            'vitesse' => '100',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Alois',
            'prenom' => 'Marcellin',
            'imgUrl' => 'https://image-uniservice.linternaute.com/image/450/3/1337721664/3498492.jpg',
            'vie' => '800',
            'attaque' => '150',
            'defense' => '100',
            'vitesse' => '100',
            'sexe' => 'homme',
            ]);

        Personnage::create([
            'nom' => 'Web',
            'prenom' => 'Developpeur',
            'imgUrl' => 'https://static.hitek.fr/img/actualite/2013/09/23/w_nolife.jpg',
            'vie' => '800',
            'attaque' => '150',
            'defense' => '100',
            'vitesse' => '100',
            'sexe' => 'homme',
            ]);

        Personnage::create([
                'nom' => 'Macron',
                'prenom' => 'Manu',
                'imgUrl' => 'https://static.hitek.fr/img/actualite/2013/09/23/w_nolife.jpg',
                'vie' => '800',
                'attaque' => '150',
                'defense' => '100',
                'vitesse' => '100',
                'sexe' => 'homme',
                ]);

    }
}
