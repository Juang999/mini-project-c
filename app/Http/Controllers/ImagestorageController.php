<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagestorageController extends Controller
{
    public function create()
    {
        $images = Image::all();
        return view('create', compact('images'));
    }

    public function store(Request $request)
    {
        $extension = $request->file('imgupload')->extension();
        $imgname = date('dmyHis'). '.' . $extension;
        $this->validate($request, [ 'imgupload' => 'required|file|max:5000']);
        $path = Storage::putFileAs('public/images', $request->file('imgupload'), $imgname);
        Image::create([ 'path' => $imgname ]);
        return redirect()->back()->withSuccess("image sucess uploaded in " . $path);
    }
}
