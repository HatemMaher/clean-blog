<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SamplePostController extends Controller
{
    public function samplePosts(){
        return view('front.samplePosts');
    }
}
