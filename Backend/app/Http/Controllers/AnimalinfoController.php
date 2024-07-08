<?php

namespace App\Http\Controllers;

use App\Models\Animalinfo;
use App\Models\News;
use Illuminate\Http\Request;

class AnimalinfoController extends Controller
{
    public function index()
    {
        $animalinfo = Animalinfo::all();
        return view('backend.animalinformation', compact('animalinfo'));
    }

    public function create()
    {
        return view('animalinformation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_name' => 'required|string|max:255',
            'img' => 'required',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->img;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        Animalinfo::create([
            'animal_name' => $request->animal_name,
            'img' => $fileName,
            'description' => $request->description,
            'price' => $request->price
        ]);
        return redirect()->route('animalinformation.index')->with('success', 'Information created successfully');

    }

    public function edit($id)
    {
        $animalinfo = Animalinfo::where('animal_id', $id)->firstOrFail();
        return view('animalinformation.edit', compact('animalinfo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'animal_name' => 'required|string|max:255',
            'img' => 'required',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->img;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        $animalinfo = Animalinfo::findOrFail($id);
        $animalinfo->img = $fileName;
        $animalinfo->save();

        return redirect()->route('animalinformation.index')->with('success', 'Information updated successfully.');
    }

    public function destroy($id) {
        // Find the contact by ID and delete it
        $animalinfo = Animalinfo::where('animal_id', $id)->firstOrFail();

        // Delete the contact
        $animalinfo->delete();

        // Redirect back with a success message
        return redirect()->route('animalinformation.index')->with('success', 'Information deleted successfully');
    }
}
