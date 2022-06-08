<?php
namespace App\Http\Controllers\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Personnage;
class TypeController extends Controller
{
    // Create Form
    public function createUserForm(Request $request) {
        return view('ajout-type', [
            'types' => Type::all()
        ]);
    }
    // Store Form data in database
    public function userForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'nom' => 'required',
            'faibleContre' => 'required',
            'resistantContre'=>'required',
        ]);
        //  Store data in database
        Type::create($request->all());
        return back()->with('success', 'Votre formulaire a été soumis.');
    }
}
