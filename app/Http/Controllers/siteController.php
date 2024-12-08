<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class siteController extends Controller
{
    
    public function home(){
        $posts = Post::all();
        return view('front.home', ['posts' => $posts]);
    }
}
