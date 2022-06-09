<?php
namespace App\Http\Controllers\Personnage;

use App\Models\Personnage;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attaque;
use Validator;

class PersonnageController extends Controller
{
    // Create Form
    public function createUserForm(Request $request) {
        return view('ajout-personnage', [
            'attaques' => Attaque::all(),
            'types' => Type::all(),
        ]);
    }

    public function userForm(Request $request) {

        // Form validation
        $validator = Validator::make($request->all(), [
            'prenom' => 'required',
            'nom' => 'required',
            'sexe'=> 'required',
            'type_id'=>'required',
            'imrUrl'=>'required',
            'vie'=>'required',
            'attaque'=>'required',
            'defense'=>'required',
            'vitesse'=>'required',
            'attaque_nbr1'=>'required',
            'attaque_nbr2'=>'required',
            'attaque_nbr3'=>'required',
            'attaque_nbr4'=>'required',
        ]);

        //  Store data in database
        Personnage::create($request->all());
      //
      return back()->with('success', 'Votre formulaire a été soumis.');
  }
}
