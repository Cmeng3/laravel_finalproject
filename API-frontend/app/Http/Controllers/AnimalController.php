<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\animal1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    // Method for web view
    public function display()
    {
        $display = animal::all();
        return view('pet-random', compact('display'));
    }
    
    // Method for web view
    public function show()
    {
        $show = animal1::all();
        return view('animal', compact('show'));
    }

    // API method to get all animals
    public function getAnimals()
    {
        $animals = animal::all();
        return response()->json($animals);
    }

    // API method to get all animals from animal1 table
    public function getAnimals1()
    {
        $animals1 = animal1::all();
        return response()->json($animals1);
    }

    // API method to get a single animal by ID
    public function getAnimal($id)
    {
        $animal = animal::find($id);

        if (!$animal) {
            return response()->json(['message' => 'Animal not found'], 404);
        }

        return response()->json($animal);
    }
}
