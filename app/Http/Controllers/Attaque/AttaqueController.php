<?php

namespace App\Http\Controllers\Attaque;

use App\Models\Attaque;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Validation\ValidationException;
use Validator;

class AttaqueController extends Controller
{
    // Create Form
    public function createUserForm(Request $request) {
        return view('player.ajout-attaques', [
            'types' => Type::all(),
        ]);
    }

    /**
     * @throws ValidationException
     */
    public function userForm(Request $request) {

        // Form validation
        $validator = Validator::make($request->all(), [
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
