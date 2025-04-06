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
        $galleries = GalleryImage::paginate(5);

        return view('galeri', [
            'tags' => $tags,
            'galleries' => $galleries
        ]);
    }

    public function loadMore(Request $request)
    {
        $filter = $request->input('filter', 'all');

        if($filter != 'all') {
            $galleries = GalleryImage::where('gallery_id', $filter)->orderBy('created_at')->paginate(5, ['*'], 'page' , $request->page);    
        } else {
            $galleries = GalleryImage::orderBy('created_at')->paginate(5, ['*'], 'page' , $request->page);
        }

        return response()->json([
            'html' => view('components.gallery-image', ['galleries' => $galleries])->render(),
            'next_page' => $galleries->hasMorePages() ? $galleries->currentPage() + 1 : null
        ]);
    }

    public function all()
    {
        $tags = Gallery::all();
        $galleries = GalleryImage::paginate(5);

        return response()->json([
            'html' => view('galeri', [
                'tags' => $tags,
                'galleries' => $galleries
            ])->render(),
        ]);
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filter', 'all');

        $query = GalleryImage::paginate(5);

        if($query != 'all') {
            $query = GalleryImage::where('gallery_id', $filter)->paginate(5);
        }

        $galleries = $query;

        return response()->json([
            'html' => view('components.gallery-image', ['galleries' => $galleries])->render(),
            'next_page' => $galleries->hasMorePages() ? $galleries->currentPage() + 1 : null
        ]);

    }
}
