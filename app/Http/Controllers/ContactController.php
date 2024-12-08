<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class ContactController extends Controller
{
    public function contact(){
        return view('front.contact');
    }

    public function sendMessage(Request $request){

        $request->validate(
            rules:[
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|numeric',
                'content' => 'required|string|max:1000'
            ]
        );
        
        
        $data = request()->all();
        // dd($data);
        $message = new message();
        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->content = $data['content'];
        $message->phone = $data['phone'];
        $message->save();
        return back()->with('success', 'data inserted successfully');
    }
}


