<?php

namespace App\Http\Controllers\Selection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Models\CombatPersonnage;

class SelectionController extends Controller
{

    public function selectionPerso()
        {
            $data = Personnage::all();

            return view('selectionPersonnages',['personnages' => $data]);
        }

    public function sendPerso(Request $request) {

        $personnage_id = $request->id;

        $personnage = New CombatPersonnage;

        $personnage->personnage_id = $personnage_id;

        $personnage->save();

        return view('selectionPersonnages2');
    }

    public function selectionPerso2()
    {
        $data = Personnage::all();

        return view('selectionPersonnages',['personnages' => $data]);
    }

    public function sendPerso2(Request $request) {

        $personnage2_id = $request->id;

        $personnage = New CombatPersonnage;

        $personnage->personnage2_id = $personnage2_id;

        $personnage->save();

    }

}
