<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
class ReportController extends Controller
{
    public function display1()
    {
        $display1 = report::all();
        return view('report', compact('display1'));
    }
}
