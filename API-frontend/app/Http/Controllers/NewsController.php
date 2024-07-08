<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function display()
    {
        $display = News::all();
        return view('news', compact('display'));
    }
    public function getNews()
    {
        $news = News::all();
        return response()->json($news);
    }
    public function getNewsById($id)
    {
        $news = News::findOrFail($id);
        return response()->json($news);
    }
}
