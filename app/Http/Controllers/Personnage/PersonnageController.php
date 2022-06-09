<?php
namespace App\Http\Controllers\Personnage;

use App\Models\Personnage;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attaque;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Validator;

class PersonnageController extends Controller
{
    public function index()
    {
        $personnages = Personnage::all();

        return view('admin.personnages.index', compact('personnages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Personnage::create($validated);

        return to_route('admin.personnages.index')->with('message', 'Personnage Created successfully.');
    }

    public function edit(Personnage $personnage)
    {
        $personnages = Personnage::all();
        return view('admin.personnages.edit', compact('personnage'));
    }

    public function update(Request $request, Personnage $personnage)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $personnage->update($validated);

        return to_route('admin.personnage.index')->with('message', 'Personnage Updated successfully.');
    }

    public function destroy(Personnage $personnage)
    {
        $personnage->delete();

        return back()->with('message', 'Personnage deleted.');
    }

    // Create Form
    public function createUserForm(Request $request) {
        return view('player.ajout-personnage', [
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
      return back()->with('message', 'Votre formulaire a été soumis.');
  }
}
