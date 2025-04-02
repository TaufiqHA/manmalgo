@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-2xl lg:text-5xl font-bold">Galeri Foto</h1>
        <p class="py-6 text-sm lg:text-base">Dokumentasi kegiatan dan momen berkesan MAN 1 Gowa</p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- filter section start -->
  <section class="py-10 border-b border-b-gray-200">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="flex flex-wrap justify-center gap-3">
        <button class="btn rounded-full bg-green-500 border-none text-white">
          Semua
        </button>
        <button
          class="btn rounded-full bg-green-200 border-none text-green-800"
        >
          Akademik
        </button>
        <button
          class="btn rounded-full bg-green-200 border-none text-green-800"
        >
          Prestasi
        </button>
        <button
          class="btn rounded-full bg-green-200 border-none text-green-800"
        >
          Kegiatan Siswa
        </button>
        <button
          class="btn rounded-full bg-green-200 border-none text-green-800"
        >
          Ekstrakurikuler
        </button>
      </div>
    </div>
  </section>
  <!-- filter section end -->

  <!-- galery section start -->
  <section class="py-30">
    <div class="container mx-auto px-5 lg:px-0">
      <div id="album" class="w-full grid grid-flow-row grid-cols-1 lg:grid-cols-4 gap-2 lg:gap-4">
        <img src="img/album/1.jpeg" alt="1" />
        <img src="img/album/2.jpeg" alt="2" />
        <img src="img/album/3.jpeg" alt="3" />
        <img src="img/album/4.jpeg" alt="4" />
        <img src="img/album/5.jpeg" alt="5" />
        <img src="img/album/6.jpeg" alt="6" />
        <img src="img/album/7.jpeg" alt="7" />
        <img src="img/album/8.jpeg" alt="8" />
      </div>
      <span class="w-full flex justify-center mt-8">
        <button class="btn bg-green-600 text-white rounded-xl">
          Muat Lebih banyak <i data-feather="arrow-down" width="18px"></i>
        </button>
      </span>
    </div>
  </section>
  <!-- galery section end -->

@endsection