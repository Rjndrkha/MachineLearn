<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function storeImage(Request $request) {        
        $request->validate([
            'images' => 'required',
            'images.*' => 'jpg,jpeg,png|max:2000'
        ]);
        $image_name = $request->file('images')->store('images', 'public');    
        return $this->result($image_name);
    }
    
    public function result($image_name) {                
        return view('result', ['image_name' => $image_name]);
    }
}
