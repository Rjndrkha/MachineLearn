<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        return view('home');
    }

    public function storeImage(Request $request) {        
        $request->validate([
            'images' => 'required',
            'images.*' => 'jpg,jpeg,png|max:2000'
        ]);
        $image_name = $request->file('images')->store('images', 'public');    
        return $image_name;
    }
    
    public function result(Request $request) {     
        $image_name = $this->storeImage($request);
        return view('result', ['image_name' => $image_name]);
    }
}
