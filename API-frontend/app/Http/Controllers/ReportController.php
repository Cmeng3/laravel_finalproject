<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function display1()
    {
        $display1 = Report::all();
        return view('report', compact('display1'));
    }
    public function getReports()
    {
        $reports = Report::all();
        return response()->json($reports);
    }
}
