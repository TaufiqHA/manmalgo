<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $headline = News::latest()->first();
        $news = News::orderBy('created_at', 'desc')->offset(1)->limit(3)->get();
        // informasi
        $informations = Information::orderBy('created_at', 'desc')->limit(3)->get();

        return view('berita', ['headline' => $headline, 'news' => $news, 'informations' => $informations]);
    }

    public function show(News $news)
    {
        return view('beritaDetail', ['news' => $news]);
    }
}
