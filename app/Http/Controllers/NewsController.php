<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\News;
use App\Models\NewsKategory;
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

    public function all()
    {
        $headline = News::latest()->first();
        $news = News::where('id', '!=', $headline->id)->orderBy('created_at', 'desc')->paginate(6);
        $categories = NewsKategory::all();

        return view('News', ['news' => $news, 'headline' => $headline, 'categories' => $categories]);
    }

    public function loadMore(Request $request)
    {
        $filter = $request->input('filter', 'all');

        if($filter != 'all')
        {
            $result = News::where('news_kategory_id', $filter)->orderBy('created_at')->paginate(6, ['*'], 'page', $request->page);
        } else {
            $result = News::orderBy('created_at')->paginate(6, ['*'], 'page', $request->page);
        }

        $news = $result;

        return response()->json([
            'html' => view('components.latest-news', ['news' => $news])->render(),
            'next_page' => $news->hasMorePages() ? $news->currentPage() + 1 : null,
        ]);
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filter', 'all');

        if($filter != 'all') {
            $news = News::where('news_kategory_id', $filter)->paginate(6);
        }

        return response()->json([
            'html' => view('components.latest-news', ['news' => $news])->render(),
        ]);
    }
}
