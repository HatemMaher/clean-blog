<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class SamplePostController extends Controller
{
    public function samplePosts(){
        $posts = Post::with('user')->paginate(15);
        return view('front.posts.index', compact('posts'));
    }

    public function show(Post $post){
            return view('front.posts.show', compact('post'));
        
    }
}
