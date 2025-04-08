<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\Information;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $tags = Gallery::all();
        $galleries = GalleryImage::paginate(6);

        return view('galeri', [
            'tags' => $tags,
            'galleries' => $galleries
        ]);
    }

    public function loadMore(Request $request)
    {
        $filter = $request->input('filter', 'all');

        if($filter != 'all') {
            $galleries = GalleryImage::where('gallery_id', $filter)->orderBy('created_at')->paginate(6, ['*'], 'page' , $request->page);    
        } else {
            $galleries = GalleryImage::orderBy('created_at')->paginate(6, ['*'], 'page' , $request->page);
        }

        return response()->json([
            'html' => view('components.gallery-image', ['galleries' => $galleries])->render(),
            'next_page' => $galleries->hasMorePages() ? $galleries->currentPage() + 1 : null
        ]);
    }

    public function all()
    {
        $tags = Gallery::all();
        $galleries = GalleryImage::paginate(6);

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

        $query = GalleryImage::paginate(6);

        if($query != 'all') {
            $query = GalleryImage::where('gallery_id', $filter)->paginate(6);
        }

        $galleries = $query;

        return response()->json([
            'html' => view('components.gallery-image', ['galleries' => $galleries])->render(),
            'next_page' => $galleries->hasMorePages() ? $galleries->currentPage() + 1 : null
        ]);

    }
}
