<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Showcontroller extends Controller
{
    public function showpost(){
        $posts=Post::all();

        return view('welcome')->with('posts',$posts);
    }
}
