@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-2xl lg:text-5xl font-bold">Informasi PPDB</h1>
        <p class="py-6 text-sm lg:text-base">
          Temukan berita terbaru, pengumuman dan informasi penting seputar
          penerimaan peserta didik baru
        </p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- about section start -->
  <section class="py-30">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="w-full flex flex-col lg:flex-row justify-between gap-10">
        <article class="w-full p-10 bg-green-100 rounded-xl shadow-xl">
          <p class="text-justify">
            Melakukan PPDB secara daring/online sehingga diharapkan proses
            PPDB dapat berjalan cepat dan bisa dilakukan dimanapun dan
            kapanpun selama sesi PPDB dibuka. Proses pendaftaran calon siswa
            baru tidak menggunakan formulir konvensional dengan mengakses
            website PPDB.
          </p>
        </article>
        <article class="w-full p-10 bg-green-100 rounded-xl shadow-xl">
          <p class="text-justify">
            Saat pengisian form PPDB mohon diperhatikan data yang dibutuhkan
            yang nantinya akan dipakai dalam proses PPDB. Setelah proses
            pengisian form PPDB secara online berhasil dilakukan, calon
            peserta didik baru akan mendapat bukti daftar dengan nomor
            pendaftaran dan harus disimpan yang akan digunakan untuk proses
            selanjutnya.
          </p>
        </article>
      </div>
    </div>
  </section>
  <!-- about section end -->

  <!-- timeline section start -->
  <section class="py-10 lg:py-30 bg-green-200">
    <header class="w-full text-center mb-10">
      <h2 class="text-xl lg:text-3xl font-bold">Penjelasan Prosedur</h2>
    </header>
    <div class="container mx-auto px-5 lg:px-0">
      <div>
        <ul
          class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical"
        >
          <li>
            <div class="timeline-middle">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="h-5 w-5"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="timeline-start mb-10 md:text-end">
              <time class="font-mono italic">1</time>
              <div class="text-lg font-black">Pendaftaran</div>
              Calon peserta didik baru mendaftarkan diri atau melakukan
              Pendaftaran PPDB melalui website PPDB.
            </div>
            <hr />
          </li>
          <li>
            <hr />
            <div class="timeline-middle">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="h-5 w-5"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="timeline-end md:mb-10">
              <time class="font-mono italic">2</time>
              <div class="text-lg font-black">Input Data</div>
              Setelah mengisi semua data diri, data orang tua/wali dan data
              lainnya yang disyaratkan, selanjutnya calon peserta didik baru
              dapat melakukan print out formulir pendaftaran sebagai
              dokumentasi atau bukti pendaftaran dan kemudian menghubungi
              panitia PPDB untuk proses selanjutnya.
            </div>
            <hr />
          </li>
          <li>
            <hr />
            <div class="timeline-middle">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="h-5 w-5"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="timeline-start mb-10 md:text-end">
              <time class="font-mono italic">3</time>
              <div class="text-lg font-black">Login</div>
              Calon peserta didik baru yang sudah melakukan pendaftaran dan
              ingin login ke Sistem PPDB dapat menggunakan No. Pendaftaran
              sebagai user (sesuaikan dengan Formulir No. Pendaftaran) & NISN
              calon peserta didik sebagai PASSWORD-nya.
            </div>
            <hr />
          </li>
        </ul>
        <div class="w-full flex justify-center mt-10">
          <a
            href="/pendaftaran"
            class="px-3 py-5 bg-white text-green-700 w-fit rounded-xl mt-10"
          >
            Mulai Pendaftaran
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- timeline section end -->

@endsection