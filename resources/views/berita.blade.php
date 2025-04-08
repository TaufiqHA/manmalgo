@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-2xl lg:text-5xl font-bold">Berita & Informasi</h1>
        <p class="py-6 text-sm lg:text-base">
          Temukan berita terbaru, pengumuman dan informasi penting seputar
          kegiatan akademik dan non-akademik di MAN 1 Gowa
        </p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- filter section start -->
  {{-- <section class="py-10 border-b border-b-gray-200">
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
          Pengumuman
        </button>
      </div>
    </div>
  </section> --}}
  <!-- filter section end -->

  <!-- utama section start -->
  <section class="py-10">
    <div class="container mx-auto px-5 lg:px-0">
      <div
        class="flex flex-col lg:flex-row justify-between w-full p-0 lg:p-10 bg-green-100 rounded-xl gap-10"
      >
        <figure>
          <img
            src="{{ asset('storage/' . $headline->image) }}"
            alt="lab"
            class="rounded-xl w-5xl"
          />
        </figure>
        <div class="flex flex-col gap-10 justify-center p-10 lg:p-0">
          <span class="badge bg-green-700 text-white">{{ $headline->NewsKategory->name }}</span>
          <a href="/berita/{{ $headline->id }}" class="text-lg lg:text-3xl font-bold text-green-800">
            {{ $headline->title }}
          </a>
          <p class="text-sm lg:text-md">
            {!! Str::limit($headline->content, 100) !!}
          </p>
          <div class="flex gap-3">
            <div class="flex items-center gap-2">
              <i data-feather="calendar" class="w-5 lg:w-10"></i>
              <p class="text-sm lg:text-base">{{ $headline->created_at->format('d M Y') }}</p>
            </div>
            <div class="flex items-center gap-2">
              <i data-feather="user" class="w-5 lg:w-10"></i>
              <p class="text-sm lg:text-base">{{ $headline->user->name }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- utama section end -->

  <!-- pagination section start -->
  <section class="py-30">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between gap-10">
        @foreach ($news as $item)
          <div class="card bg-base-100 w-full shadow-sm">
            <figure>
              <img
                src="{{ asset('storage/' . $item->image) }}"
                alt="acitivity"
                class="w-full h-58 object-cover object-top"
              />
            </figure>
            <div class="card-body">
              <span class="badge bg-green-100 text-green-700">{{ $item->NewsKategory->name }}</span>
              <h2 class="card-title text-green-900">{{ $item->title }}</h2>
              <p class="mb-3">
                {!! Str::limit($item->content, 100) !!}
              </p>
              <div class="card-actions justify-between">
                <div class="flex items-center gap-2">
                  <i data-feather="calendar"></i>
                  <p>{{ $item->created_at->format('d M Y') }}</p>
                </div>
                <div class="flex gap-2 items-center">
                  <a href="/berita/{{ $item->id }}" class="font-semibold text-green-700"
                  >Selengkapnya</span
                ></a>
                <i data-feather="arrow-right" class="text-green-700"></i>
                </div>
              </div>
            </div>
          </div>  
        @endforeach
      </div>
      <span class="w-full flex justify-center mt-8">
        <a href="{{ route('berita.all') }}" id="load-more" class="btn bg-green-600 text-white rounded-xl mt-10" >
          Muat Lebih banyak <i data-feather="arrow-right" width="18px"></i>
        </a>
      </span>
    </div>
  </section>
  <!-- pagination section end -->

  <!-- informasi section start -->
  <section class="py-10">
    <header class="container mx-auto mb-5 px-5 lg:px-0">
      <h2 class="text-2xl font-bold text-green-700 lg:text-start text-center">Informasi Penting</h2>
    </header>
    <div class="container mx-auto px-5 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between gap-10">
        <!-- pengumuman section start -->
         <div class="w-full">
          <header>
            <h2 class="text-lg font-semibold">
              Pengumuman Terbaru
            </h2>
            
          </header>
          <div id="information-container" class="flex flex-col gap-5">
            @foreach ($informations as $item)
              <div class="p-5 rounded-xl shadow-xl flex flex-col gap-3">
                <p class="text-green-500">{{ $item->created_at->format('d M Y') }}</p>
                <a href="/informasi/{{ $item->id }}" class="text-md font-semibold">{{ $item->title }}</a>
                <p>{!! Str::limit($item->content, 100) !!}</p>
              </div>
            @endforeach
          </div>
         </div>
        <!-- pengumuman section end -->

        <!-- kalender akademik section start -->
        <div class="w-full">
          <header>
            <h2 class="text-lg font-semibold">
               Kalender Akademik
            </h2>
            <div class="p-5 rounded-xl shadow-xl flex flex-col gap-4">
              <div class="flex gap-4 items-center">
                <figure class="p-2 bg-green-200 rounded-lg">
                  <i data-feather="calendar" class="text-green-700"></i>
                </figure>
                <div>
                  <h2 class="font-semibold">Ujian Tengah Semester</h2>
                  <p>1-12 Februari 2025</p>
                </div>
              </div>
              <div class="flex gap-4 items-center">
                <figure class="p-2 bg-green-200 rounded-lg">
                  <i data-feather="calendar" class="text-green-700"></i>
                </figure>
                <div>
                  <h2 class="font-semibold">Ujian Tengah Semester</h2>
                  <p>1-12 Februari 2025</p>
                </div>
              </div>
            </div>
          </header>
        </div>
        <!-- kalender akademik section end -->
      </div>
    </div>
  </section>
  <!-- informasi section end -->

@endsection