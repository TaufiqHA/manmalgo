<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $tags = Gallery::all();
        $galleries = GalleryImage::all();

        return view('galeri', [
            'tags' => $tags,
            'galleries' => $galleries
        ]);
    }

    public function all()
    {
        $galleries = GalleryImage::all();

        return view('components.gallery-image', ['galleries' => $galleries]);
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filter', 'all');

        $galleries = GalleryImage::where('gallery_id', $filter)->get();

        return view('components.gallery-image', ['galleries' => $galleries]);
    }
}
