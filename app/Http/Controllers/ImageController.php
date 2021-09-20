<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $path  = $request->file('image')->store('upload', 'public');
        return view('review', ['path' => $path ]);
    }
}
