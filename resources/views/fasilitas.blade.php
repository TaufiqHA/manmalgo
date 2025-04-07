@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-2xl lg:text-5xl font-bold">Fasilitas Sekolah</h1>
        <p class="py-6 text-sm lg:text-base">
          Fasilitas modern untuk mendukung kegiatan belajar mengajar
        </p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- gedung section start -->
  <section class="py-30">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between gap-10">
        <div class="card bg-base-100 w-full shadow-md">
          <figure>
            <img src="img/fasilitas/lab.jpg" alt="lab" class="rounded-xl" />
          </figure>
          <div class="card-body items-start text-start">
            <h2 class="card-title text-start text-green-800">
              laboratorium Sains
            </h2>
            <p>
              Dilengkapi dengan peralatan modern untuk praktikum Fisika,
              Kimia, dan Biologi
            </p>
          </div>
        </div>
        <div class="card bg-base-100 w-full shadow-md">
          <figure>
            <img
              src="img/fasilitas/library.jpg"
              alt="library"
              class="rounded-xl"
            />
          </figure>
          <div class="card-body items-start text-start">
            <h2 class="card-title text-start text-green-800">
              Perpustakaan Digital
            </h2>
            <p>
              Perpustakaan modern dengan koleksi digital dan area membaca yang
              nyaman
            </p>
          </div>
        </div>
        <div class="card bg-base-100 w-full shadow-md">
          <figure>
            <img
              src="img/fasilitas/mosque.jpg"
              alt="mosque"
              class="rounded-xl"
            />
          </figure>
          <div class="card-body items-start text-start">
            <h2 class="card-title text-start text-green-800">
              Masjid Sekolah
            </h2>
            <p>Tempat ibadah yang nyaman untuk kegiatan keagamaan</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- gedung section end -->

  <!-- fasilitas utama section start -->
  <section class="py-30 bg-green-200">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="w-full flex flex-col lg:flex-row justify-between gap-10">
        <div
          class="w-full flex flex-col gap-5 bg-white p-5 shadow-xl rounded-xl"
        >
          <figure>
            <img src="logo/skill.png" alt="skill" class="w-10 h-10" />
          </figure>
          <h2 class="text-lg font-bold">Lab Komputer</h2>
          <p class="text-md">30 unit komputer dengan internet cepat</p>
        </div>
        <div
          class="w-full flex flex-col gap-5 bg-white p-5 shadow-xl rounded-xl"
        >
          <figure>
            <img src="logo/football.png" alt="football" class="w-10 h-10" />
          </figure>
          <h2 class="text-lg font-bold">Lapangan Olahraga</h2>
          <p class="text-md">Fasilitas olahraga lengkap</p>
        </div>
        <div
          class="w-full flex flex-col gap-5 bg-white p-5 shadow-xl rounded-xl"
        >
          <figure>
            <img src="logo/hospital.png" alt="hospital" class="w-10 h-10" />
          </figure>
          <h2 class="text-lg font-bold">UKS</h2>
          <p class="text-md">Layanan kesehatan siswa</p>
        </div>
        <div
          class="w-full flex flex-col gap-5 bg-white p-5 shadow-xl rounded-xl"
        >
          <figure>
            <img src="logo/cutlery.png" alt="cutlery" class="w-10 h-10" />
          </figure>
          <h2 class="text-lg font-bold">Kantin Sehat</h2>
          <p class="text-md">Makanan sehat dan higenis</p>
        </div>
      </div>
    </div>
  </section>
  <!-- fasilitas utama section end -->

  <!-- fasilitas pendukung section start -->
  <section class="py-30">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="flex justify-between items-center gap-10">
        <div class="w-full flex flex-col gap-5">
          <header>
            <h2 class="text-xl font-bold text-green-800">
              Fasilitas Pendukung Lainnya
            </h2>
          </header>
          <ul
            class="list-image-[url('{{ url('logo/check-mark.png') }}')] text-md list-inside lg:list-outside leading-10"
          >
            <li>
              <h2 class="text-md font-bold text-green-800">WIFI Coverage</h2>
              <p>Akses internet cepat di seluruh area sekolah</p>
            </li>
            <li>
              <h2 class="text-md font-bold text-green-800">CCTV Security</h2>
              <p>Sistem keamanan 24 jam</p>
            </li>
            <li>
              <h2 class="text-md font-bold text-green-800">Area Parkir</h2>
              <p>Parkir yang luas dan nyaman</p>
            </li>
          </ul>
        </div>
        <div class="hidden lg:grid grid-flow-col grid-rows-2 gap-2">
          <figure>
            <img
              src="img/fasilitas/corridor.jpeg"
              alt="corridor"
              class="rounded-xl"
            />
          </figure>
          <figure>
            <img
              src="img/fasilitas/parking.jpeg"
              alt="parking"
              class="rounded-xl"
            />
          </figure>
          <figure>
            <img
              src="img/fasilitas/cafetaria.jpeg"
              alt="cafetaria"
              class="rounded-xl"
            />
          </figure>
          <figure>
            <img
              src="img/fasilitas/security.jpeg"
              alt="security"
              class="rounded-xl"
            />
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- fasilitas pendukung section end -->

@endsection