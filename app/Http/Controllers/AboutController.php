<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $site_data = Settings::first();
        return view('front.about', compact('site_data'));
    }
}
