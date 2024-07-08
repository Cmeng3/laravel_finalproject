<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('backend.new&article', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required',
            'title' => 'required|string|max:255',
            'details' => 'required|string|max:255',

        ]);

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->img;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        News::create([
            'img' => $fileName,
            'title' => $request->title,
            'details' => $request->details,
        ]);
        return redirect()->route('news.index')->with('success', 'News created successfully');


    }

    public function edit($id)
    {
        $news = News::where('news_id', $id)->firstOrFail();
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'img' => 'required',
            'title' => 'required|string|max:255',
            'details' => 'required|string|max:255',

        ]);

        $destinationPath = storage_path( 'app/public/thumbnails' );
        $file = $request->img;
        $fileName = time() . '.'.$file->clientExtension();
        $file->move($destinationPath, $fileName);

        $news = News::findOrFail($id);
        $news->img = $fileName;
        $news->save();

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy($id) {
        // Find the contact by ID and delete it
        $new = News::where('news_id', $id)->firstOrFail();

        // Delete the contact
        $new->delete();

        // Redirect back with a success message
        return redirect()->route('news.index')->with('success', 'News deleted successfully');
    }
}
