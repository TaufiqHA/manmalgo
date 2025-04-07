<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\GalleryController;
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

// galeri
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/galeri/filter', [GalleryController::class, 'filter'])->name('gallery.filter');
Route::get('/galeri/all', [GalleryController::class, 'all'])->name('gallery.all');
Route::get('/gallery/load-more-image', [GalleryController::class, 'loadMore'])->name('load.more');

// alumni
Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/alumni/search', [AlumniController::class, 'search'])->name('alumni.search');
Route::get('/alumni/filter', [AlumniController::class, 'filter'])->name('alumni.filter');

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