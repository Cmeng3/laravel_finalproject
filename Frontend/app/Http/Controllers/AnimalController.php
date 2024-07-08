<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\animal1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    public function display()
    {
        $display = animal::all();
        return view('pet-random' , compact('display'));
    }
    
    public function show()
    {
        $show = animal1::all();
        return view('animal' , compact('show'));
    }
    
}
