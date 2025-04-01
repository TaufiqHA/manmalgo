<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/program', function() {
    return view('program');
});

Route::get('/fasilitas', function() {
    return view('fasilitas');
});

Route::get('/galeri', function() {
    return view('galeri');
});

Route::get('/alumni', function() {
    return view('alumni');
});