<?php

namespace App\Http\Controllers;
use App\Models\Topic;
use App\Models\News;
use Illuminate\Http\Request;

class displayinfo extends Controller
{
    public function displayda()
    {
        $topic = Topic::orderBy('created_at', 'DESC')->get();
        $news = News::orderBy('created_at', 'DESC')->get();

        return view('welcome', compact('topic' , 'news'));
    }
   
  
}
