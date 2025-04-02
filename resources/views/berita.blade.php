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
          Pengumuman
        </button>
      </div>
    </div>
  </section>
  <!-- filter section end -->

  <!-- utama section start -->
  <section class="py-10">
    <div class="container mx-auto px-5 lg:px-0">
      <div
        class="flex flex-col lg:flex-row justify-between w-full p-0 lg:p-10 bg-green-100 rounded-xl gap-10"
      >
        <figure>
          <img
            src="img/activity/Schools’ ‘land lab’ lives up to billing.jpeg"
            alt="lab"
            class="rounded-xl w-5xl"
          />
        </figure>
        <div class="flex flex-col gap-10 justify-center p-10 lg:p-0">
          <span class="badge bg-green-700 text-white">Prestasi</span>
          <a href="/beritaDetail" class="text-lg lg:text-3xl font-bold text-green-800">
            Tim Olimpiade MAN 1 Gowa Raih Juara Umum dalam Kompetisi Sains
            Nasional
          </a>
          <p class="text-sm lg:text-md">
            Tim Olimpieade MAN 1 Gowa berhasil meraih prestasi membanggakan
            dalam Kompetisi Sains Nasional (KSN) 2025 yang diselenggarakan di
            Jakarta ...
          </p>
          <div class="flex gap-3">
            <div class="flex items-center gap-2">
              <i data-feather="calendar" class="w-5 lg:w-10"></i>
              <p class="text-sm lg:text-base">15 Mar 2025</p>
            </div>
            <div class="flex items-center gap-2">
              <i data-feather="user" class="w-5 lg:w-10"></i>
              <p class="text-sm lg:text-base">Admin</p>
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
        <div class="card bg-base-100 w-full shadow-sm">
          <figure>
            <img
              src="img/activity/STC Continues to Host Free Summer Camps.jpeg"
              alt="acitivity"
            />
          </figure>
          <div class="card-body">
            <span class="badge bg-green-100 text-green-700">Akademik</span>
            <h2 class="card-title text-green-900">Pameran Karya Ilmiah Siswa 2025</h2>
            <p class="mb-3">
              Showcase hasil penelitian dan inovasi dari para siswa MAN 1 Gowa
              dalam bidang sains dan teknologi ...
            </p>
            <div class="card-actions justify-between">
              <div class="flex items-center gap-2">
                <i data-feather="calendar"></i>
                <p>15 Mar 2025</p>
              </div>
              <div class="flex gap-2 items-center">
                <a href="#" class="font-semibold text-green-700"
                >Selengkapnya</span
              ></a>
              <i data-feather="arrow-right" class="text-green-700"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="card bg-base-100 w-full shadow-sm">
          <figure>
            <img
              src="img/activity/Greenpoint Kids Build Vertical Garden Farm with Help from Solar One and SYSTEM Program.jpeg"
              alt="acitivity"
            />
          </figure>
          <div class="card-body">
            <span class="badge bg-green-100 text-green-700">Kegiatan Siswa</span>
            <h2 class="card-title text-green-900">Festival Budaya Tahunan MAN 1 Gowa</h2>
            <p>
              Perayaan keberagaman budaya dalam ferstival yang menampilkan berbagai pertunjukan seni dan budaya ...
            </p>
            <div class="card-actions justify-between">
              <div class="flex items-center gap-2">
                <i data-feather="calendar"></i>
                <p>15 Mar 2025</p>
              </div>
              <div class="flex gap-2 items-center">
                <a href="#" class="font-semibold text-green-700"
                >Selengkapnya</span
              ></a>
              <i data-feather="arrow-right" class="text-green-700"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="card bg-base-100 w-full shadow-sm">
          <figure>
            <img
              src="img/activity/Schools’ ‘land lab’ lives up to billing.jpeg"
              alt="acitivity"
            />
          </figure>
          <div class="card-body">
            <span class="badge bg-green-100 text-green-700">Pengumuman</span>
            <h2 class="card-title text-green-900">Pembukaan Pendaftaran Siswa Baru 2025/2026</h2>
            <p>
              Infomasi lengkap mengenai prosedur dan persyaratan pendaftaran siswa baru tahun ajaran 2025/2026 ...
            </p>
            <div class="card-actions justify-between">
              <div class="flex items-center gap-2">
                <i data-feather="calendar"></i>
                <p>15 Mar 2025</p>
              </div>
              <div class="flex gap-2 items-center">
                <a href="#" class="font-semibold text-green-700"
                >Selengkapnya</span
              ></a>
              <i data-feather="arrow-right" class="text-green-700"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="join w-full mt-10 flex justify-center">
        <input
          class="join-item btn btn-square bg-green-500 border-none"
          type="radio"
          name="options"
          aria-label="1"
          checked="checked" />
        <input class="join-item btn btn-square" type="radio" name="options" aria-label="2" />
        <input class="join-item btn btn-square" type="radio" name="options" aria-label="3" />
        <input class="join-item btn btn-square" type="radio" name="options" aria-label="4" />
      </div>
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
          <div class="flex flex-col gap-5">
            <div class="p-5 rounded-xl shadow-xl flex flex-col gap-3">
              <p class="text-green-500">15 Jan 2025</p>
              <a href="/detailInformasi" class="text-md font-semibold">Pendaftaran Siswa Baru 2025/2026</a>
              <p>Informasi lengkap mengenai prosedur dan persyaratan pendaftaran ...</p>
            </div>
            <div class="p-5 rounded-xl shadow-xl flex flex-col gap-3">
              <p class="text-green-500">15 Jan 2025</p>
              <h2 class="text-md font-semibold">Pendaftaran Siswa Baru 2025/2026</h2>
              <p>Informasi lengkap mengenai prosedur dan persyaratan pendaftaran ...</p>
            </div>
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