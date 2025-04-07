<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InformasiController;

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

// berita
Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
Route::get('/berita/{news:id}', [NewsController::class, 'show'])->name('berita.show');

// informasi
Route::get('/informasi/{information:id}', [InformasiController::class, 'show'])->name('informasi.show');

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