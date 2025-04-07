<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::all();
        
        return view('alumni', ['alumnis' => $alumnis]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Alumni::where('name', 'like', "%$query%")->get();

        return response()->json([
            'html' => view('components.card-alumni', ['alumnis' => $results])->render(),
        ]);
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filter');

        $query = Alumni::where('angkatan', $filter)->get();

        return response()->json([
            'html' => view('components.card-alumni', ['alumnis' => $query])->render(),
        ]);
    }
}
