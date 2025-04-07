@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="container hero-content text-start">
      <div class="w-full">
        <h1 class="text-2xl lg:text-5xl font-bold">
          {{ $information->title }}
        </h1>
        <div class="flex gap-5 mt-10">
          <div class="flex items-center gap-3">
            <i data-feather="calendar" class="w-5"></i>
            <p class="text-sm">{{ $information->created_at->format('d M Y') }}</p>
          </div>
          <div class="flex items-center gap-3">
            <i data-feather="user" class="w-5"></i>
            <p class="text-sm">{{ $information->user->name }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- informasi section start -->
  <section class="py-10" id="information">
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row justify-between gap-10">
        <div class="w-full lg:w-5xl">
          <div class="p-5 lg:p-10 rounded-xl shadow-xl text-justify">
            {!! $information->content !!}
            <br />
            <div>
              <h2 class="text-xl font-bold">Bagikan Informasi</h2>
              <div class="flex flex-col lg:flex-row gap-3 mt-5">
                <!-- facebok -->
                <button class="btn bg-[#1A77F2] text-white border-[#005fd8]">
                  <svg
                    aria-label="Facebook logo"
                    width="16"
                    height="16"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                  >
                    <path
                      fill="white"
                      d="M8 12h5V8c0-6 4-7 11-6v5c-4 0-5 0-5 3v2h5l-1 6h-4v12h-6V18H8z"
                    ></path>
                  </svg>
                  Facebook
                </button>

                <!-- x -->
                <button class="btn bg-black text-white border-black">
                  <svg
                    aria-label="X logo"
                    width="16"
                    height="12"
                    viewBox="0 0 300 271"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill="currentColor"
                      d="m236 0h46l-101 115 118 156h-92.6l-72.5-94.8-83 94.8h-46l107-123-113-148h94.9l65.5 86.6zm-16.1 244h25.5l-165-218h-27.4z"
                    />
                  </svg>
                  Twitter / X
                </button>

                <!-- line -->
                <button class="btn bg-[#03C755] text-white border-[#00b544]">
                  <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                  <svg
                    height="15"
                    width="15"
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 512 512"
                    xml:space="preserve"
                  >
                    <path
                      style="fill: #ededed"
                      d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
                              S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"
                    />
                    <path
                      style="fill: #55cd6c"
                      d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
                              c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
                              c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"
                    />
                    <path
                      style="fill: #fefefe"
                      d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
                              c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
                              c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
                              c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
                              c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
                              l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"
                    />
                  </svg>
                  Whatsapp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col gap-5">
          <div class="p-10 rounded-xl shadow-xl h-fit">
            <h2 class="text-xl font-bold">Kontak Informasi</h2>
            <div class="mt-5 flex flex-col gap-4">
              <div class="flex gap-3 items-center">
                <figure>
                  <i data-feather="phone" class="text-green-700"></i>
                </figure>
                <span>
                  <h2 class="font-semibold text-md">Telepon</h2>
                  <p>+62 411-234-5678</p>
                </span>
              </div>
              <div class="flex gap-3 items-center">
                <figure>
                  <i data-feather="mail" class="text-green-700"></i>
                </figure>
                <span>
                  <h2 class="text-md font-semibold">Email</h2>
                  <p>info@man1gowa.sch.id</p>
                </span>
              </div>
              <div class="flex gap-3 items-center">
                <figure>
                  <i data-feather="map-pin" class="text-green-700"></i>
                </figure>
                <span>
                  <h2 class="text-md font-semibold">Lokasi</h2>
                  <p>Jl. Pendidikan No. 123, Gowa, Sulawesi Selatan</p>
                </span>
              </div>
            </div>
          </div>
          <div class="p-10 h-fit rounded-xl shadow-xl mt-10">
            <h2 class="text-lg font-bold">Pengumuman Terbaru</h2>
            <div class="mt-5 flex flex-col gap-3">
              <div>
                <p class="text-sm text-green-700">10 Jan 2025</p>
                <h2 class="text-md font-semibold">
                  Jadwal Ujian Semester Genap
                </h2>
              </div>
              <div>
                <p class="text-xm text-green-700">10 Jan 2025</p>
                <h2 class="text-md font-semibold">
                  Jadwal Ujian Semester Genap
                </h2>
              </div>
              <div>
                <p class="text-sm text-green-700">10 Jan 2025</p>
                <h2 class="text-md font-semibold">
                  Jadwal Ujian Semester Genap
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- informasi section end -->

@endsection