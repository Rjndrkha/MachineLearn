<?php

namespace App\Http\Controllers;

use App\Models\Uploads;
use Illuminate\Http\Request;

class UploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasfile('filename')) {
            $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('images'), $filename);
            Uploads::create(
                [
                    'data_file' => $filename
                ]
            );
            echo 'Success';
        } else {
            echo 'Gagal';
        }
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uploads  $uploads
     * @return \Illuminate\Http\Response
     */
    public function show(Uploads $uploads)
    {
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uploads  $uploads
     * @return \Illuminate\Http\Response
     */
    public function edit(Uploads $uploads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uploads  $uploads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uploads $uploads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uploads  $uploads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uploads $uploads)
    {
        //
    }
}
