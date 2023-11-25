<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::orderBy('created_at', 'DESC')->get();
  
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'bio' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules for image uploads
        ]);
    
        $imagePath = null; // Initialize the image path variable
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        
        $news = News::create([
            'image' => $imagePath,
            'title' => $data['title'],
            'bio' => $data['bio'],
        ]);
    
        return redirect(route('News'))->with('success', 'News added successfully');
    }

    public function show(News $news)
    {  
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {  
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        if ($request->hasFile('image')) {
            // dd($request->all());

            $imagePath = $request->file('image')->store('images', 'public');
            
            $news->image = $imagePath;
        }else {
            $imagePath = null;
        }

        $news->title = $request->input('title');   
        $news->bio = $request->input('bio');
    
    
        // Save the changes to the database
        $news->update();
    
        return redirect()->route('News')->with('success', 'News updated successfully');

    }

    public function destroy(News $news)
    {
  

         $news->delete();
  
         return redirect(route('News'))->with('success', 'News deleted successfully');
    }
}
