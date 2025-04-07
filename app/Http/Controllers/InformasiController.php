<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function show(Information $information)
    {
        return view('detailInformasi', ['information' => $information]);
    }
}
