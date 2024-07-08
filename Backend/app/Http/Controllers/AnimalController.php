<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    public function create()
    {
        $users = User::all();

        return view('animals.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'categories' => 'required',
            'date_found' => 'required|date',
            'date_adoption' => 'required|date',
            'service_cost' => 'required',
            'picture' => 'required',
            'pet_name' => 'required',
            'user_id' => 'required',
        ]);

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->picture;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        $animal = new Animal;
        $animal->categories = $request->categories;
        $animal->date_found = $request->date_found;
        $animal->date_adoption = $request->date_adoption;
        $animal->service_cost = $request->service_cost;

        // store filename
        $animal->picture = $fileName;

        $animal->pet_name = $request->pet_name;
        //$animal->user_id = 1;
        $animal->user_id = $request->user_id;
        $animal->updated_at = now();
        $animal->save();

        return redirect()->route('animals.index')->with('success', 'Animal created successfully.');
    }

    public function edit($id)
    {
        $animal = Animal::where('animal_id', $id)->firstOrFail();
        $users = User::all();
        return view('animals.edit', compact('animal', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categories' => 'required',
            'date_found' => 'required|date',
            'date_adoption' => 'required|date',
            'service_cost' => 'required',
            'picture' => 'required',
            'pet_name' => 'required',
            'user_id' => 'required',
        ]);

        $animal = Animal::where('animal_id', $id)->firstOrFail();

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->picture;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        $animal->picture = $fileName;
        $animal->save();
        return redirect()->route('animals.index')->with('success', 'Animal updated successfully.');
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index')->with('success', 'Animal deleted successfully.');
    }
}
