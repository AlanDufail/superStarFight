<?php

namespace App\Http\Controllers\Arene;

use App\Http\Controllers\Controller;
use App\Models\Attaque;
use App\Models\Personnage;
use App\Models\ViePersonnage;
use Illuminate\Http\Request;

class AreneController extends Controller
{
    public function arena($id)
    {
        return view('arena', [
            'combat' => ViePersonnage::where('id', $id)->first()
        ]);
    }

    public function attaque($idCombat, $idAttaque, $idAttaquant)
    {
        $viePersonnage = new ViePersonnage();
        $viePersonnage->combat_id = $idCombat;
        //condition qui verifie quelle perso à attaquer
        $viePersonnage->vie_personnage1 = ViePersonnage::find($idCombat)->vie_personnage1 - Attaque::find($idAttaque)->degats;
        $viePersonnage->vie_personnage2 = 100;
        $viePersonnage->save();

        return view('arena', [
            'combat' => ViePersonnage::where('id', $viePersonnage->id)->first()
        ]);
    }

}
