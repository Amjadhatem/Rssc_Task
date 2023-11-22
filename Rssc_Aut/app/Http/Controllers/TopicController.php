<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topic = Topic::orderBy('created_at', 'DESC')->get();
  
        return view('topics.index', compact('topic'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('topics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'bio' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules for image uploads
        ]);
    
        $imagePath = null; // Initialize the image path variable
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        
        $topic = Topic::create([
            'image' => $imagePath,
            'title' => $data['title'],
            'bio' => $data['bio'],
            'description' => $data['description'],
        ]);
    
        return redirect(route('Topic'))->with('success', 'topic added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        // $topic = Topic::findOrFail($topic);
  
        return view('topics.show', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        // $topic = Topic::findOrFail($topic);
  
        return view('topics.edit', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {

        // $topic = Topic::findOrFail($request->id);
        

        if ($request->hasFile('image')) {
            // dd($request->all());

            $imagePath = $request->file('image')->store('images', 'public');
            
            $topic->image = $imagePath;
        }else {
            $imagePath = null;
        }
        // $service->update($request->all());
  
        // return redirect(route('services'))->with('success', 'service updated successfully');
        $topic->title = $request->input('title');   
        $topic->bio = $request->input('bio');
        $topic->description = $request->input('description');
    
        // Optional: You can add validation for the date here if needed
    
        // Save the changes to the database
        $topic->update();
    
        return redirect()->route('Topic')->with('success', 'Topic updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        // $topic = Topic::findOrFail($topic);
  
        $topic->delete();
  
        return redirect(route('Topic'))->with('success', 'Topic deleted successfully');
    }
}
