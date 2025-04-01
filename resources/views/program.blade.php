@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-5xl font-bold">Program Akademik</h1>
        <p class="py-6">
          Kami menamwarkan berbagai program unggulan yang dirancang untuk
          mengembangkan potensi siswa secara optimal
        </p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

<!-- unggulan section start -->
<section class="py-30">
    <div class="container mx-auto">
      <div class="flex gap-10">
        <div class="w-full p-10 bg-green-200 rounded-xl shadow-lg">
          <header class="flex gap-3 items-center mb-10">
            <img
              src="logo/microscope.png"
              alt="microscope"
              class="w-10 h-10"
            />
            <h2 class="text-xl font-bold">Program IPA Unggulan</h2>
          </header>
          <article class="mb-10 w-full">
            <p class="text-md">
              Program unggulan dengan fokus pada ilmu pengetahuan alam,
              matematika, dan penelitian ilmiah. Siswa akan dibekali dengan:
            </p>
          </article>
          <ul
            class="list-image-[url(/logo/check-mark.png)] text-md list-inside leading-10"
          >
            <li>Praktikum di laboratorium modern</li>
            <li>Penelitian ilmiah terapan</li>
            <li>Persiapan olimpiade sains</li>
          </ul>
        </div>
        <div class="w-full p-10 bg-green-200 rounded-xl shadow-lg">
          <header class="flex gap-3 items-center mb-10">
            <img
              src="logo/calculator.png"
              alt="calculator"
              class="w-10 h-10"
            />
            <h2 class="text-xl font-bold">Program IPS Terpadu</h2>
          </header>
          <article class="mb-10 w-full">
            <p class="text-md">
              Program dengan penekanan pada ilmu sosial, ekonomi, dan
              kemasyarakatan. Siswa akan mendapatkan:
            </p>
          </article>
          <ul
            class="list-image-[url(/logo/check-mark.png)] text-md list-inside leading-10"
          >
            <li>Studi kasus ekonomi dan sosial</li>
            <li>Praktik akuntansi modern</li>
            <li>Proyek penelitian sosial</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- unggulan section end -->

  <!-- keagamaan section start -->
  <section class="py-30 bg-green-200">
    <header class="w-full flex flex-col items-center gap-2 mb-10">
      <img src="logo/quran.png" alt="quran" class="w-15 h-15" />
      <h2 class="text-xl font-bold">Program Tahfidz Quran</h2>
    </header>
    <div class="container mx-auto">
      <div class="flex justify-between gap-10">
        <div
          class="w-full flex flex-col items-center gap-5 p-10 bg-white rounded-xl shadow-xl"
        >
          <figure>
            <img src="logo/toga-caps.png" alt="toga caps" class="w-15 h-15" />
          </figure>
          <h2 class="text-lg font-bold">Pembimbing Profesional</h2>
          <p class="text-md">Dibimbing oleh hafidz/hafidzah berpengalaman</p>
        </div>
        <div
          class="w-full flex flex-col items-center gap-5 p-10 bg-white rounded-xl shadow-xl"
        >
          <figure>
            <img src="logo/wall-clocks.png" alt="clocks" class="w-15 h-15" />
          </figure>
          <h2 class="text-lg font-bold">Jadwal Terstruktur</h2>
          <p class="text-md">Program pembelajaran yang sistematis</p>
        </div>
        <div
          class="w-full flex flex-col items-center gap-5 p-10 bg-white rounded-xl shadow-xl"
        >
          <figure>
            <img src="logo/quality.png" alt="quality" class="w-15 h-15" />
          </figure>
          <h2 class="text-lg font-bold">Sertifikasi</h2>
          <p class="text-md">Sertifikat tahfidz yang diakui</p>
        </div>
      </div>
    </div>
  </section>
  <!-- keagamaan section end -->

  <!-- ekstrakurikuler section start -->
  <section class="py-30">
    <header class="w-full text-center mb-10">
      <h2 class="text-xl font-bold">Progam Ekstrakurikuler</h2>
    </header>
    <div class="container mx-auto">
      <div class="flex justify-between gap-10">
        <div
          class="p-10 w-full flex flex-col items-center gap-5 bg-green-200 rounded-xl shadow-xl"
        >
          <figure>
            <img src="logo/football.png" alt="football" class="w-10 h-10" />
          </figure>
          <h2 class="text-lg font-bold">Olahraga</h2>
          <p class="text-md">Futsal, Basket, Voli</p>
        </div>
        <div
          class="p-10 w-full flex flex-col items-center gap-5 bg-green-200 rounded-xl shadow-xl"
        >
          <figure>
            <img
              src="logo/color-palette.png"
              alt="color palette"
              class="w-10 h-10"
            />
          </figure>
          <h2 class="text-lg font-bold">Seni</h2>
          <p class="text-md">Musik, Tari, Drama</p>
        </div>
        <div
          class="p-10 w-full flex flex-col items-center gap-5 bg-green-200 rounded-xl shadow-xl"
        >
          <figure>
            <img src="logo/group.png" alt="group" class="w-10 h-10" />
          </figure>
          <h2 class="text-lg font-bold">Oganisasi</h2>
          <p class="text-md">OSIS, Pramuka, PMR</p>
        </div>
        <div
          class="p-10 w-full flex flex-col items-center gap-5 bg-green-200 rounded-xl shadow-xl"
        >
          <figure>
            <img src="logo/skill.png" alt="skill" class="w-10 h-10" />
          </figure>
          <h2 class="text-lg font-bold">Teknologi</h2>
          <p class="text-md">Robotik, Coding</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ekstrakurikuler section end -->
@endsection