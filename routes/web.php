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

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kontak', function() {
    return view('kontak');
});

Route::get('/beritaDetail', function() {
    return view('beritaDetail');
});

Route::get('/detailInformasi', function() {
    return view('detailInformasi');
});

Route::get('/info', function() {
    return view("info");
});

Route::get('/pendaftaran', function() {
    return view('pendaftaran');
});