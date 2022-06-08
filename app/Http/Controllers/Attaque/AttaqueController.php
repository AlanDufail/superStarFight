<?php

namespace App\Http\Controllers\Attaque;

use App\Models\Attaque;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;
class AttaqueController extends Controller
{
    // Create Form
    public function createUserForm(Request $request) {
        return view('ajout-attaques', [
            'types' => Type::all(),
        ]);
    }

    public function userForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'nom' => 'required',
            'type' => 'required',
            'degats'=>'required',
            'precision'=>'required',
            'critique'=>'required',
        ]);

        //  Store data in database
        Attaque::create($request->all());
        //
        return back()->with('success', 'Votre formulaire a été soumis.');
    }
}
