@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-5xl font-bold">Formulir Pendaftaran</h1>
        <p class="py-6">
          Lengkapi Formulir dibawah ini untuk mendaftar di MAN 1 Gowa
        </p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- ketentuan section start -->
  <section class="py-30">
    <header class="container mx-auto mb-3">
      <h2 class="text-2xl font-bold text-green-700">Ketentuan</h2>
    </header>
    <div class="container mx-auto">
      <div class="max-w-5xl">
        <ol class="list-decimal list-inside leading-7">
          <li>
            Setiap calon peserta didik baru wajib mengisi form pendaftaran
            dengan lengkap.
          </li>
          <li>
            Data-data yang diisikan pada form PPDB harus sesuai dengan data
            asli dan benar adanya.
          </li>
          <li>
            Calon peserta didik baru yang sudah mndaftarakan diri melalui PPDB
            akan mendapatkan Nomor Pendaftaran dan Password yang nantinya akan
            digunakan untuk akses informasi yang berkaitan dengan PPDB.
          </li>
          <li>
            Pastikan untuk menyimpan dan mencetak form pendaftaran online tuk
            keperluan dokumentasi PPDB.
          </li>
          <li>
            Silahkan mnghubungi PPDB jika sudah melakukan pendaftaran untuk
            proses selanjutnya.
          </li>
          <li>
            Data ang sudah diberikan hanya digunakan untuk keperluan
            penerimaan siswa baru dan data tidak akan dipublikasikan serta
            dijaga kerahasiaannya oleh Panitia PPDB.
          </li>
        </ol>
      </div>
    </div>
  </section>
  <!-- ketentuan section end -->

  <!-- form section start -->
  <section class="py-10">
    <div class="container mx-auto">
      <div>
        <!-- data pribadi -->
        <div class="w-full mb-4">
          <header class="mb-3">
            <h2 class="text-lg font-bold text-green-700">Data Pribadi</h2>
          </header>
          <div class="grid grid-flow-col grid-rows-2 gap-4">
            <input
              type="text"
              placeholder="Nama Lengkap"
              class="input w-full"
            />
            <input
              type="text"
              placeholder="Tempat Lahir"
              class="input w-full"
            />
            <input type="text" placeholder="NISN" class="input w-full" />
            <input type="date" class="input w-full" />
          </div>
          <select class="select mt-4 w-full">
            <option disabled selected>Jenis Kelamin</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
      </div>

      <!-- informasi kontak -->
      <div>
        <div class="w-full mb-4">
          <header class="mb-3">
            <h2 class="text-lg font-bold text-green-700">Informasi Kontak</h2>
          </header>
          <div class="grid grid-flow-row grid-cols-1 gap-4">
            <input type="text" placeholder="Email" class="input w-full" />
            <input
              type="text"
              placeholder="Nomor Telepon"
              class="input w-full"
            />
            <textarea
              class="textarea w-full h-40"
              placeholder="Alamat Lengkap"
            ></textarea>
          </div>
        </div>
      </div>

      <!-- informasi akademik -->
      <div class="w-full mb-4">
        <header class="mb-3">
          <h2 class="text-lg font-bold text-green-700">Informasi Akademik</h2>
        </header>
        <div class="grid grid-flow-row grid-cols-1 gap-4">
          <input
            type="text"
            placeholder="Asal Sekolah"
            class="input w-full"
          />
          <div class="flex justify-between gap-4">
            <input
              type="text"
              placeholder="Nilai B.Indonesia"
              class="input w-full"
            />
            <input
              type="text"
              placeholder="Nilai Matematika"
              class="input w-full"
            />
            <input
              type="text"
              placeholder="Nilai B.Inggris"
              class="input w-full"
            />
          </div>
        </div>
      </div>

      <!-- data orang tua -->
      <div>
        <div class="w-full mb-4">
          <header class="mb-3">
            <h2 class="text-lg font-bold text-green-700">Data Orang Tua</h2>
          </header>
          <div class="grid grid-flow-col grid-rows-2 gap-4">
            <input type="text" placeholder="Nama Ayah" class="input w-full" />
            <input type="text" placeholder="Nama Ibu" class="input w-full" />
            <input
              type="text"
              placeholder="Pekerjaan Ayah"
              class="input w-full"
            />
            <input
              type="text"
              placeholder="Pekerjaan Ibu"
              class="input w-full"
            />
          </div>
          <input
            type="text"
            placeholder="Nomor Telepon Orang Tua"
            class="input w-full mt-4"
          />
        </div>
      </div>

      <!-- unggah dokumen -->
      <div class="w-full mb-4">
        <header class="mb-3">
          <h2 class="text-lg font-bold text-green-700">Unggah Dokumen</h2>
        </header>
        <fieldset class="fieldset">
          <legend class="fieldset-legend">Foto (3x4)</legend>
          <input type="file" class="file-input" />
          <label class="fieldset-label">Max size 2MB</label>
        </fieldset>
        <fieldset class="fieldset">
          <legend class="fieldset-legend">
            Ijazah / Surat Keterangan Lulus
          </legend>
          <input type="file" class="file-input" />
          <label class="fieldset-label">Max size 2MB</label>
        </fieldset>
        <fieldset class="fieldset">
          <legend class="fieldset-legend">Kartu Keluarga</legend>
          <input type="file" class="file-input" />
          <label class="fieldset-label">Max size 2MB</label>
        </fieldset>
      </div>

      <span class="flex gap-4 mt-4">
        <input type="checkbox" class="checkbox" />
        <p>Saya menyatakan bahwa data yang diisi adalah benar</p>
      </span>

      <button
        class="py-5 w-full bg-green-600 text-white mt-4 text-lg font-semibold rounded-xl"
      >
        Kirim Pendaftaran
      </button>
    </div>
  </section>
  <!-- form section end -->

@endsection