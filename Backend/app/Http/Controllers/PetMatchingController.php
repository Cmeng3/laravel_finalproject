<?php


namespace App\Http\Controllers;

use App\Models\Petmatching;
use Illuminate\Http\Request;

class PetMatchingController extends Controller
{
    public function index()
    {
        $pets = Petmatching::all();
        return view('backend.petmatching', compact('pets'));
    }

    public function create() {
        return view('petmatching.create');
    }

    public function store(Request $request) {
        // Validate the request...
        $request->validate([
            'human_trait' => 'required|string|max:255',
            'Animal_traits' => 'required|string|max:255',
            'meet_ivy' => 'required|string|max:255',
            'img' => 'required',
        ]);

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->img;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        Petmatching::create([
            'human_trait' => $request->human_trait,
            'Animal_traits' => $request->Animal_traits,
            'meet_ivy' => $request->meet_ivy,
            'img' => $fileName,
        ]);
        return redirect()->route('petmatching.index')->with('success', 'PetMatch created successfully');
    }

    public function edit($id)
    {
        $pet = Petmatching::where('animal1_id', $id)->firstOrFail();
        return view('petmatching.edit', compact('pet'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'human_trait' => 'required|string|max:255',
            'Animal_traits' => 'required|string|max:255',
            'meet_ivy' => 'required|string|max:255',
            'img' => 'required',
        ]);

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->img;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        $pet = Petmatching::findOrFail($id);
        $pet->img = $fileName;
        $pet->save();

        return redirect()->route('petmatching.index')->with('success', 'PetMatch message updated successfully.');
    }

    public function destroy($id) {
        // Find the contact by ID and delete it
        $pets = Petmatching::where('animal1_id', $id)->firstOrFail();

        // Delete the contact
        $pets->delete();

        // Redirect back with a success message
        return redirect()->route('petmatching.index')->with('success', 'PetMatch deleted successfully');
    }
}
