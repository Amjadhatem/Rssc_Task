<?php

namespace App\Http\Controllers;
use App\Models\Topic;
use Illuminate\Http\Request;

class displayinfo extends Controller
{
    public function displayda()
    {
        $topic = Topic::orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('topic'));

    }
  
}
