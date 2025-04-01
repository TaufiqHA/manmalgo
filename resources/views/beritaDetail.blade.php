@extends('layouts.main')

@section('main')

<!-- berita section start -->
<section class="py-30">
    <div class="container mx-auto">
      <div class="flex flex-col justify-between gap-5">
        <header class="w-full flex flex-col gap-10">
          <!-- badge section start -->
          <div class="flex gap-3 items-center">
            <span class="badge bg-green-200 text-green-700">Prestasi</span>
            <p>12 Jan 2025</p>
          </div>
          <!-- badge section end -->

          <!-- title section start -->
          <h2 class="text-5xl text-green-700 font-bold">
            Tim MAN 1 Gowa Raih Juara Umum Olimpiade Sains Nasional 2025
          </h2>
          <!-- title section end -->

          <!-- author section start -->
          <div class="flex gap-3 items-center">
            <div class="avatar">
              <div class="w-12 rounded-full">
                <img
                  src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                />
              </div>
            </div>
            <span class="flex flex-col justify-center gap">
              <h2 class="text-sm font-semibold">Ahmad Fauzi</h2>
              <p class="text-xs">Kepala Bidang Kesiswaan</p>
            </span>
          </div>
          <!-- author section end -->
        </header>

        <div class="w-full flex justify-between gap-10">
          <div class="w-2/3">
            <article class="mt-20">
              <div class="flex flex-col gap-10 justify-center items-center">
                <figure>
                  <img
                    src="img/activity/Schools’ ‘land lab’ lives up to billing.jpeg"
                    alt="activity"
                    class="w-2xl rounded-2xl"
                  />
                </figure>
                <div class="flex flex-col gap-5 text-justify">
                  <p>
                    Tim Olimpieade Sains MAN 1 Gowa berhasil meraih prestasi
                    membanggakan dengna manyabet gelar jaura umum dalam ajang
                    Olimpieade Sains Nasional (OSN) yang diselenggarakan di
                    Jakarta. Prestasi ini merupakan hasil dari kerja keras dan
                    dedikasi para siswa serta bimbingan intensif dari para
                    guru pembimbing
                  </p>
                  <h2 class="text-lg font-bold">Persiapan Intensif</h2>
                  <p>
                    Persiapan tim OSN MAN 1 Gowa dimulai sejak 6 bulan sebelum
                    kompetisi. Para siswa menjalani program pembinaan intensif
                    yang meliputi:
                  </p>
                  <ul class="list-disc list-inside">
                    <li>Pelatihan olimpieade setiap akhir pekan</li>
                    <li>Simulasi kompetisi tingkat provinsi</li>
                    <li>Mentoring dengan alumni berprestasi</li>
                    <li>Studi literatur dan praktikum laboratorium</li>
                  </ul>
                  <h2 class="text-lg font-bold">Pencapaian Membanggakan</h2>
                  <p>
                    Dalam kompetisi ini, tim MAN 1 Gowa berhasil meraih total
                    5 medali emas, 3 medali perak, dan 4 medali perunggu dari
                    berbagai cabang lomba sains. Prestasi ini menjadi MAN 1
                    Gowa sebagai sekoah dengan perolehan medali terbanyak dan
                    berhak atas gelar juara umum.
                  </p>
                </div>
              </div>
            </article>

            <!-- social media section start -->
            <div class="mt-10 flex gap-2 items-center">
              <p class="font-semibold">Bagikan :</p>
              <div class="flex gap-3">
                <a class="link link-hover"
                  ><i data-feather="facebook" class="w-5 h-5"></i
                ></a>
                <a class="link link-hover"
                  ><i data-feather="instagram" class="w-5 h-5"></i
                ></a>
                <a class="link link-hover"
                  ><i data-feather="twitter" class="w-5 h-5"></i
                ></a>
              </div>
            </div>
            <!-- social media section end -->
          </div>
          <div>
            <!-- berita terkait section start -->
            <div class="mt-20 grow-5 p-5 rounded-lg shadow-lg">
              <header>
                <h2 class="text-lg font-bold">Berita Terkait</h2>
              </header>
              <div class="p-5 flex gap-3 items-center mt-4">
                <figure>
                  <img
                    src="img/activity/STC Continues to Host Free Summer Camps.jpeg"
                    alt="acitivity"
                    class="w-24 rounded-lg"
                  />
                </figure>
                <div>
                  <p class="text-sm text-gray-500">5 Jan 2025</p>
                  <h2>Festival Budaya Tahunan MAN 1 Gowa</h2>
                </div>
              </div>
              <div class="p-5 flex gap-3 items-center mt-4">
                <figure>
                  <img
                    src="img/activity/STC Continues to Host Free Summer Camps.jpeg"
                    alt="acitivity"
                    class="w-24 rounded-lg"
                  />
                </figure>
                <div>
                  <p class="text-sm text-gray-500">5 Jan 2025</p>
                  <h2>Festival Budaya Tahunan MAN 1 Gowa</h2>
                </div>
              </div>
            </div>
            <!-- berita terkait section end -->

            <!-- pengumuman section start -->
            <div class="mt-20 p-5 rounded-lg shadow-lg">
              <header>
                <h2 class="text-lg font-bold">Pengumuman Terbaru</h2>
              </header>
              <div class="mt-3 px-3 border-s-3 border-s-green-500">
                <p>5 Jan 2025</p>
                <p>Pendaftaran Siswa baru 2025</p>
              </div>
              <div class="mt-3 px-3 border-s-3 border-s-green-500">
                <p>5 Jan 2025</p>
                <p>Pendaftaran Siswa baru 2025</p>
              </div>
            </div>
            <!-- pengumuman section end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- berita section end -->

@endsection