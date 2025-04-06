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
        <button class="filter-all btn rounded-full active border-none">
          Semua
        </button>
        @foreach ($tags as $item)
          <button
            class="filter btn rounded-full deactivate border-none"
            data-filter="{{ $item->id }}"
          >
            {{ $item->name }}
          </button>  
        @endforeach
      </div>
    </div>
  </section>
  <!-- filter section end -->

  <!-- galery section start -->
  <section class="py-30">
    <div class="container mx-auto px-5 lg:px-0">
      <div id="gallery_image_section" class="w-full grid grid-flow-row grid-cols-1 lg:grid-cols-4 gap-2 lg:gap-4">
        @include('components.gallery-image')
      </div>
      <span class="w-full flex justify-center mt-8">
        <button id="load-more" class="btn bg-green-600 text-white rounded-xl" data-next-page="{{ $galleries->currentPage() + 1 }}" >
          Muat Lebih banyak <i data-feather="arrow-down" width="18px"></i>
        </button>
      </span>
    </div>
  </section>
  <!-- galery section end -->

@endsection