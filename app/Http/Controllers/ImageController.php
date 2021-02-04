<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Storage;

class ImageController extends Controller
{
    //
    public function index()
    {
        return 'Hi, Welcome to Example AWS S3';
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('images', 's3');

        Storage::disk('s3')->setVisibility($path, 'private');

        $image = Image::create([
            'filename' => basename($path),
            'url' => Storage::disk('s3')->url($path)
        ]);

        return $image;
    }

    public function show(Image $image)
    {
        return Storage::disk('s3')->response('images/' . $image->filename);
    }

    public function showImage($fileName)
    {
        return Storage::disk('s3')->response('images/' . $fileName);
    }
}
