<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function display()
    {
        $display = news::all();
        return view('news' , compact('display'));
    }
}
