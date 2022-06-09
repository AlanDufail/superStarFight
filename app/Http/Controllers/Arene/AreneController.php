<?php

namespace App\Http\Controllers\Arene;

use App\Http\Controllers\Controller;
use App\Models\Attaque;
use App\Models\Personnage;
use App\Models\ViePersonnage;
use Illuminate\Http\Request;

class AreneController extends Controller
{
//    public function arena($id)
//    {
//        $viePersonnage = ViePersonnage::find($id);
//        if ($viePersonnage->combatPersonnages->personnage1->vitesse > $viePersonnage->combatPersonnages->personnage2->vitesse){
//            $premierJoueur = 'N°1' ;
//        }
//        else {
//            $premierJoueur = 'N°2' ;//a transformer en fonction
//        }
//
//        return view('arena', [
//            'combat' => ViePersonnage::where('id', $id)->first(),
//            'premierJoueur' => $premierJoueur,
//        ]);
//    }

    public function attaque($idCombat, $idAttaque, $numeroAttaquant)
    {
        $viePersonnage = ViePersonnage::find($idCombat);

        $nomAttaque = Attaque::find($idAttaque)->nom;

        if ($numeroAttaquant == 2) {
            $degats = Attaque::find($idAttaque)->degats + $viePersonnage->combatPersonnages->personnage2->attaque - $viePersonnage->combatPersonnages->personnage2->defense;
            if($degats < 0) {
                $degats = 1;
            }
            $viePersonnage->vie_personnage1 = $viePersonnage->vie_personnage1 - $degats;
        }

        if ($numeroAttaquant == 1) {
            $degats = Attaque::find($idAttaque)->degats + $viePersonnage->combatPersonnages->personnage1->attaque - $viePersonnage->combatPersonnages->personnage1->defense;
            if($degats < 0) {
                $degats = 1;
            }
            $viePersonnage->vie_personnage2 = $viePersonnage->vie_personnage2 - $degats;
        }
        $viePersonnage->save();

        return view('arena', [
            'combat' => ViePersonnage::where('id', $viePersonnage->id)->first(),
            'degats' => $degats,
            'nomAttaque' => $nomAttaque,
        ]);
    }

}
