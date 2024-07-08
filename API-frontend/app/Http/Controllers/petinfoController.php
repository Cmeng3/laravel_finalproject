<?php

namespace App\Http\Controllers;

use App\Models\pet_info;
use App\Models\animal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class petinfoController extends Controller
{
    public function display()
    {
        $display = pet_info::all();
        return view('pet-info', compact('display'));
    }

    public function show($animal_id)
    {
        $animal = Animal::with('petInfo')->findOrFail($animal_id);
        return view('pet-info', compact('animal'));
    }

    public function getPetInfo()
    {
        $petInfo = pet_info::all();
        return response()->json($petInfo);
    }

    public function getPetInfoByAnimal($animal_id)
    {
        $animal = Animal::with('petInfo')->findOrFail($animal_id);
        return response()->json($animal);
    }
}
