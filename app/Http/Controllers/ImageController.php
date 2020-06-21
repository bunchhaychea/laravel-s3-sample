<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $path = $request->file('image')->store('images', 's3');
        $url = Storage::disk('s3')->url($path);
        $image = Image::create([
            'filename' => basename($path),
            'url' => $url
        ]);
        return redirect('/'.$image->filename);
    }

    public function show($image){
        $image = Image::where('filename', $image)->first();
        return Storage::disk('s3')->response('images/' . $image->filename);
    }
}
