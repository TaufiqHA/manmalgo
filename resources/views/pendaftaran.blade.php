@extends('layouts.main')

@section('main')

<!-- hero section start -->
  <div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900 relative">
    @if ($message = Session::get('success'))
      <div role="alert" class="absolute right-5 -top-30 alert alert-success transition duration-300 origin-right">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>{{ $message }}</span>
      </div>
    @endif
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-2xl lg:text-5xl font-bold">Formulir Pendaftaran</h1>
        <p class="py-6 text-sm lg:text-base">
          Lengkapi Formulir dibawah ini untuk mendaftar di MAN 1 Gowa
        </p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- ketentuan section start -->
  <section class="py-30">
    <header class="container mx-auto mb-3 px-5 lg:px-0">
      <h2 class="text-2xl font-bold text-green-700">Ketentuan</h2>
    </header>
    <div class="container mx-auto px-5 lg:px-0">
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
    <form class="container mx-auto px-5 lg:px-0" action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div>
        <!-- data pribadi -->
        <div class="w-full mb-4">
          <header class="mb-3">
            <h2 class="text-lg font-bold text-green-700">Data Pribadi</h2>
          </header>
          <div class="grid grid-flow-rows grid-col-1 lg:grid-flow-col lg:grid-rows-2 gap-4">
            <div>
              <input
                name="nama_lengkap"
                type="text"
                placeholder="Nama Lengkap"
                class="input w-full @error('nama_lengkap') border-red-500 @enderror"
                value="{{ old('nama_lengkap') }}"
              />
              @error('nama_lengkap')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <input
                name="tempat_lahir"
                type="text"
                placeholder="Tempat Lahir"
                class="input w-full @error('tempat_lahir') border-red-500 @enderror"
                value="{{ old('tempat_lahir') }}"
              />
              @error('tempat_lahir')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <input 
                name="nisn" 
                type="text" 
                placeholder="NISN" 
                class="input w-full @error('nisn') border-red-500 @enderror"
                value="{{ old('nisn') }}"
              />
              @error('nisn')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <input 
                name="tanggal_lahir" 
                type="date" 
                class="input w-full @error('tanggal_lahir') border-red-500 @enderror"
                value="{{ old('tanggal_lahir') }}"
              />
              @error('tanggal_lahir')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="mt-4">
            <select class="select w-full @error('jenis_kelamin') border-red-500 @enderror" name="jenis_kelamin">
              <option disabled selected>Jenis Kelamin</option>
              <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
              <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jenis_kelamin')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>
      </div>

      <!-- informasi kontak -->
      <div>
        <div class="w-full mb-4">
          <header class="mb-3">
            <h2 class="text-lg font-bold text-green-700">Informasi Kontak</h2>
          </header>
          <div class="grid grid-flow-row grid-cols-1 gap-4">
            <div>
              <input 
                name="email" 
                type="text" 
                placeholder="Email" 
                class="input w-full @error('email') border-red-500 @enderror"
                value="{{ old('email') }}"
              />
              @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <input
                name="nomor_telepon"
                type="text"
                placeholder="Nomor Telepon"
                class="input w-full @error('nomor_telepon') border-red-500 @enderror"
                value="{{ old('nomor_telepon') }}"
              />
              @error('nomor_telepon')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <textarea
                name="alamat_lengkap"
                class="textarea w-full h-40 @error('alamat_lengkap') border-red-500 @enderror"
                placeholder="Alamat Lengkap"
              >{{ old('alamat_lengkap') }}</textarea>
              @error('alamat_lengkap')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>
      </div>

      <!-- informasi akademik -->
      <div class="w-full mb-4">
        <header class="mb-3">
          <h2 class="text-lg font-bold text-green-700">Informasi Akademik</h2>
        </header>
        <div class="grid grid-flow-row grid-cols-1 gap-4">
          <div>
            <input
              name="asal_sekolah"
              type="text"
              placeholder="Asal Sekolah"
              class="input w-full @error('asal_sekolah') border-red-500 @enderror"
              value="{{ old('asal_sekolah') }}"
            />
            @error('asal_sekolah')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="flex justify-between gap-4">
            <div class="flex-1">
              <input
                name="nilai_bahasa_indonesia"
                type="text"
                placeholder="Nilai B.Indonesia"
                class="input w-full @error('nilai_bahasa_indonesia') border-red-500 @enderror"
                value="{{ old('nilai_bahasa_indonesia') }}"
              />
              @error('nilai_bahasa_indonesia')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div class="flex-1">
              <input
                name="nilai_matematika"
                type="text"
                placeholder="Nilai Matematika"
                class="input w-full @error('nilai_matematika') border-red-500 @enderror"
                value="{{ old('nilai_matematika') }}"
              />
              @error('nilai_matematika')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div class="flex-1">
              <input
                name="nilai_bahasa_inggris"
                type="text"
                placeholder="Nilai B.Inggris"
                class="input w-full @error('nilai_bahasa_inggris') border-red-500 @enderror"
                value="{{ old('nilai_bahasa_inggris') }}"
              />
              @error('nilai_bahasa_inggris')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
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
            <div>
              <input 
                name="nama_ayah" 
                type="text" 
                placeholder="Nama Ayah" 
                class="input w-full @error('nama_ayah') border-red-500 @enderror"
                value="{{ old('nama_ayah') }}"
              />
              @error('nama_ayah')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <input 
                name="nama_ibu" 
                type="text" 
                placeholder="Nama Ibu" 
                class="input w-full @error('nama_ibu') border-red-500 @enderror"
                value="{{ old('nama_ibu') }}"
              />
              @error('nama_ibu')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <input
                name="pekerjaan_ayah"
                type="text"
                placeholder="Pekerjaan Ayah"
                class="input w-full @error('pekerjaan_ayah') border-red-500 @enderror"
                value="{{ old('pekerjaan_ayah') }}"
              />
              @error('pekerjaan_ayah')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <input
                name="pekerjaan_ibu"
                type="text"
                placeholder="Pekerjaan Ibu"
                class="input w-full @error('pekerjaan_ibu') border-red-500 @enderror"
                value="{{ old('pekerjaan_ibu') }}"
              />
              @error('pekerjaan_ibu')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="mt-4">
            <input
              name="nomor_telepon_orang_tua"
              type="text"
              placeholder="Nomor Telepon Orang Tua"
              class="input w-full @error('nomor_telepon_orang_tua') border-red-500 @enderror"
              value="{{ old('nomor_telepon_orang_tua') }}"
            />
            @error('nomor_telepon_orang_tua')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>
      </div>

      <!-- unggah dokumen -->
      <div class="w-full mb-4">
        <header class="mb-3">
          <h2 class="text-lg font-bold text-green-700">Unggah Dokumen</h2>
        </header>
        <div class="space-y-4">
          <fieldset class="fieldset @error('foto') border-red-500 @enderror">
            <legend class="fieldset-legend">Foto (3x4)</legend>
            <input name="foto" type="file" class="file-input" />
            <label class="fieldset-label">Max size 2MB</label>
            @error('foto')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </fieldset>
          <fieldset class="fieldset @error('ijazah_surat_keterangan_lulus') border-red-500 @enderror">
            <legend class="fieldset-legend">
              Ijazah / Surat Keterangan Lulus
            </legend>
            <input name="ijazah_surat_keterangan_lulus" type="file" class="file-input" />
            <label class="fieldset-label">Max size 2MB</label>
            @error('ijazah_surat_keterangan_lulus')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </fieldset>
          <fieldset class="fieldset @error('kartu_keluarga') border-red-500 @enderror">
            <legend class="fieldset-legend">Kartu Keluarga</legend>
            <input name="kartu_keluarga" type="file" class="file-input" />
            <label class="fieldset-label">Max size 2MB</label>
            @error('kartu_keluarga')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </fieldset>
        </div>
      </div>

      <span class="flex items-center gap-4 mt-4">
        <input 
          type="checkbox" 
          class="checkbox @error('persetujuan') border-red-500 @enderror" 
          name="persetujuan"
          {{ old('persetujuan') ? 'checked' : '' }}
        />
        <p>Saya menyatakan bahwa data yang diisi adalah benar</p>
      </span>
      @error('persetujuan')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror

      <button
        type="submit"
        class="py-5 w-full bg-green-600 text-white mt-4 text-lg font-semibold rounded-xl"
      >
        Kirim Pendaftaran
      </button>
    </form>
  </section>
  <!-- form section end -->

@endsection