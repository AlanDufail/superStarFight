<?php
namespace App\Http\Controllers\Type;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view('admin.type.index', compact('types'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Type::create($validated);

        return to_route('admin.type.index')->with('message', 'Personnage Created successfully.');
    }

    public function edit(Type $type)
    {
        $type = Type::all();
        return view('admin.type.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $type->update($validated);

        return to_route('admin.type.index')->with('message', 'Personnage Updated successfully.');
    }

    public function destroy(Type $type)
    {
        $type->delete();

        return back()->with('message', 'Personnage deleted.');
    }

    // Create Form
    public function createUserForm(Request $request) {
        return view('player.ajout-type', [
            'types' => Type::all()
        ]);
    }
    // Store Form data in database
    public function userForm(Request $request) {
        // Form validation
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'faibleContre' => 'required',
            'resistantContre'=>'required',
        ]);
        //  Store data in database
        Type::create($request->all());

        return back()->with('success', 'Votre formulaire a été soumis.');
    }
}
