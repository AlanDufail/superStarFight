<?php

namespace App\Http\Controllers\Selection;
use App\Http\Controllers\Controller;
use App\Models\ViePersonnage;
use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Models\CombatPersonnage;

class SelectionController extends Controller
{

    public function selectionPersonnages()
        {
            $personnages = Personnage::all();

            return view('selectionPersonnages', [
                'personnages' => $personnages,
                ]);
        }

    public function sendPerso(Request $request) {

        $personnage_id = $request->id;
        if (isset($request->combatPersonnageId)){
            $personnage = CombatPersonnage::find($request->combatPersonnageId);
            $personnage->personnage2_id = $personnage_id;
        } else {
            $personnage = New CombatPersonnage;
            $personnage->personnage_id = $personnage_id;
            $personnage->personnage2_id = $personnage_id;
        }

        $personnage->save();

        $personnages = Personnage::all();

        return view('selectionPersonnages', [
            'personnages' => $personnages,
            'combatPersonnageId' => $personnage->id,
            ]
        );
    }
    public function bataille(Request $request){
        $viePersonnage = new ViePersonnage;
        $viePersonnage->combat_id = $request->combatPersonnageId;
        $personnage1_id = CombatPersonnage::find($request->combatPersonnageId)->personnage_id;
        $personnage2_id = CombatPersonnage::find($request->combatPersonnageId)->personnage2_id;
        $viePersonnage->vie_personnage1 = Personnage::find($personnage1_id)->vie;
        $viePersonnage->vie_personnage2 = Personnage::find($personnage2_id)->vie;

        return view('player.arena', [
                'id' => $viePersonnage->id,
            ]
        );
    }

}
