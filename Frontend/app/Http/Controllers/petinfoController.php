<?php

namespace App\Http\Controllers;

use App\Models\pet_info;

use App\Models\animal;
use App\Http\Controllers\pet_infoController;
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
    

}
