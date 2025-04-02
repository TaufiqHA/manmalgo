@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-2xl lg:text-5xl font-bold">Hubungi Kami</h1>
        <p class="py-6 text-sm lg:text-base">
          Kami siap membantu anda. Silahkan hubungi kami melalui form di bawah
          ini atau kunjungi lokasi kami.
        </p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- kontak section start -->
  <section class="py-30">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between gap-10">
        <div
          class="flex flex-col gap-3 items-center p-10 rounded-xl shadow-xl w-full"
        >
          <figure class="p-5 w-fit rounded-full bg-green-200">
            <i data-feather="map-pin" class="text-green-800"></i>
          </figure>
          <h2 class="text-lg font-bold">Alamat</h2>
          <p class="text-md w-1/2 text-center">
            Jl. Pendidikan No. 123 Gowa, Sulawesi Selatan
          </p>
        </div>
        <div
          class="flex flex-col gap-3 items-center p-10 rounded-xl shadow-xl w-full"
        >
          <figure class="p-5 w-fit rounded-full bg-green-200">
            <i data-feather="phone" class="text-green-800"></i>
          </figure>
          <h2 class="text-lg font-bold">Telepon</h2>
          <p class="text-md w-1/2 text-center">+62 411 123456</p>
          <p class="text-md w-1/2 text-center">+62 411 654321</p>
        </div>
        <div
          class="flex flex-col gap-3 items-center p-10 rounded-xl shadow-xl w-full"
        >
          <figure class="p-5 w-fit rounded-full bg-green-200">
            <i data-feather="mail" class="text-green-800"></i>
          </figure>
          <h2 class="text-lg font-bold">Email</h2>
          <p class="text-md w-1/2 text-center">info@man1gowa.sch.id</p>
          <p class="text-md w-1/2 text-center">admin@man1gowa.sch.id</p>
        </div>
      </div>
    </div>
  </section>
  <!-- kontak section end -->

  <!-- form section start -->
  <section class="py-30 bg-green-200">
    <div class="container mx-auto px-5 lg:px-0">
      <div
        class="flex flex-col lg:flex-row justify-around gap-20 bg-white p-10 rounded-xl shadow-xl"
      >
        <div class="w-full">
          <header class="mb-5">
            <h2 class="text-lg font-bold text-green-800">Kirim Pesan</h2>
          </header>
          <form action="#">
            <fieldset class="fieldset">
              <legend class="fieldset-legend">Nama</legend>
              <input
                type="text"
                class="input w-full"
                placeholder="Type here"
              />
            </fieldset>
            <fieldset class="fieldset">
              <legend class="fieldset-legend">Email</legend>
              <input
                type="text"
                class="input w-full"
                placeholder="Type here"
              />
            </fieldset>
            <fieldset class="fieldset">
              <legend class="fieldset-legend">Subjek</legend>
              <input
                type="text"
                class="input w-full"
                placeholder="Type here"
              />
            </fieldset>
            <fieldset class="fieldset">
              <legend class="fieldset-legend">Pesan</legend>
              <textarea
                class="textarea w-full h-24"
                placeholder=""
              ></textarea>
            </fieldset>
            <button class="btn bg-green-500 text-white mt-5">
              Kirim Pesan
            </button>
          </form>
        </div>
        <div class="w-full flex flex-col gap-5">
          <div>
            <header class="mb-5">
              <h2 class="text-lg font-bold text-green-800">
                Jam Operasional
              </h2>
            </header>
            <div class="overflow-x-auto">
              <table class="table">
                <tbody>
                  <!-- row 1 -->
                  <tr>
                    <td>Senin - Kamis</td>
                    <td>07:00 - 15:30</td>
                  </tr>
                  <!-- row 2 -->
                  <tr>
                    <td>Jumat</td>
                    <td>07:00 - 14:00</td>
                  </tr>
                  <!-- row 3 -->
                  <tr>
                    <td>Sabtu</td>
                    <td>07:00 - 14:00</td>
                  </tr>
                  <!-- row 4 -->
                  <tr>
                    <td>Minggu</td>
                    <td>Tutup</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div>
            <header class="mb-5">
              <h2 class="text-lg font-bold text-green-800">Ikut Kami</h2>
            </header>
            <div class="flex gap-3">
              <a class="link link-hover"
                ><i
                  data-feather="facebook"
                  class="w-5 h-5 hover:text-green-500"
                ></i
              ></a>
              <a class="link link-hover"
                ><i
                  data-feather="instagram"
                  class="w-5 h-5 hover:text-green-500"
                ></i
              ></a>
              <a class="link link-hover"
                ><i
                  data-feather="twitter"
                  class="w-5 h-5 hover:text-green-500"
                ></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- form section end -->

@endsection