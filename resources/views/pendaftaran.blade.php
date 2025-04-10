@extends('layouts.main')

@section('main')

<!-- hero section start -->
  <div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
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
    <form id="form-pendaftaran" class="container mx-auto px-5 lg:px-0" enctype="multipart/form-data">
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
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-nama_lengkap">
                @error('nama_lengkap') {{ $message }} @enderror
              </div>
            </div>
            <div>
              <input
                name="tempat_lahir"
                type="text"
                placeholder="Tempat Lahir"
                class="input w-full @error('tempat_lahir') border-red-500 @enderror"
                value="{{ old('tempat_lahir') }}"
              />
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-tempat_lahir">
                @error('tempat_lahir') {{ $message }} @enderror
              </div>
            </div>
            <div>
              <input 
                name="nisn" 
                type="text" 
                placeholder="NISN" 
                class="input w-full @error('nisn') border-red-500 @enderror"
                value="{{ old('nisn') }}"
              />
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-nisn">
                @error('nisn') {{ $message }} @enderror
              </div>
            </div>
            <div>
              <input 
                name="tanggal_lahir" 
                type="date" 
                class="input w-full @error('tanggal_lahir') border-red-500 @enderror"
                value="{{ old('tanggal_lahir') }}"
              />
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-tanggal_lahir">
                @error('tanggal_lahir') {{ $message }} @enderror
              </div>
            </div>
          </div>
          <div class="mt-4">
            <select class="select w-full @error('jenis_kelamin') border-red-500 @enderror" name="jenis_kelamin">
              <option disabled selected>Jenis Kelamin</option>
              <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
              <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-jenis_kelamin">
              @error('jenis_kelamin') {{ $message }} @enderror
            </div>
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
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-email">
                @error('email') {{ $message }} @enderror
              </div>
            </div>
            <div>
              <input
                name="nomor_telepon"
                type="text"
                placeholder="Nomor Telepon"
                class="input w-full @error('nomor_telepon') border-red-500 @enderror"
                value="{{ old('nomor_telepon') }}"
              />
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-nomor_telepon">
                @error('nomor_telepon') {{ $message }} @enderror
              </div>
            </div>
            <div>
              <textarea
                name="alamat_lengkap"
                class="textarea w-full h-40 @error('alamat_lengkap') border-red-500 @enderror"
                placeholder="Alamat Lengkap"
              >{{ old('alamat_lengkap') }}</textarea>
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-alamat_lengkap">
                @error('alamat_lengkap') {{ $message }} @enderror
              </div>
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
            <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-asal_sekolah">
              @error('asal_sekolah') {{ $message }} @enderror
            </div>
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
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-nilai_bahasa_indonesia">
                @error('nilai_bahasa_indonesia') {{ $message }} @enderror
              </div>
            </div>
            <div class="flex-1">
              <input
                name="nilai_matematika"
                type="text"
                placeholder="Nilai Matematika"
                class="input w-full @error('nilai_matematika') border-red-500 @enderror"
                value="{{ old('nilai_matematika') }}"
              />
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-nilai_matematika">
                @error('nilai_matematika') {{ $message }} @enderror
              </div>
            </div>
            <div class="flex-1">
              <input
                name="nilai_bahasa_inggris"
                type="text"
                placeholder="Nilai B.Inggris"
                class="input w-full @error('nilai_bahasa_inggris') border-red-500 @enderror"
                value="{{ old('nilai_bahasa_inggris') }}"
              />
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-nilai_bahasa_inggris">
                @error('nilai_bahasa_inggris') {{ $message }} @enderror
              </div>
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
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-nama_ayah">
                @error('nama_ayah') {{ $message }} @enderror
              </div>
            </div>
            <div>
              <input 
                name="nama_ibu" 
                type="text" 
                placeholder="Nama Ibu" 
                class="input w-full @error('nama_ibu') border-red-500 @enderror"
                value="{{ old('nama_ibu') }}"
              />
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-nama_ibu">
                @error('nama_ibu') {{ $message }} @enderror
              </div>
            </div>
            <div>
              <input
                name="pekerjaan_ayah"
                type="text"
                placeholder="Pekerjaan Ayah"
                class="input w-full @error('pekerjaan_ayah') border-red-500 @enderror"
                value="{{ old('pekerjaan_ayah') }}"
              />
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-pekerjaan_ayah">
                @error('pekerjaan_ayah') {{ $message }} @enderror
              </div>
            </div>
            <div>
              <input
                name="pekerjaan_ibu"
                type="text"
                placeholder="Pekerjaan Ibu"
                class="input w-full @error('pekerjaan_ibu') border-red-500 @enderror"
                value="{{ old('pekerjaan_ibu') }}"
              />
              <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-pekerjaan_ibu">
                @error('pekerjaan_ibu') {{ $message }} @enderror
              </div>
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
            <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-nomor_telepon_orang_tua">
              @error('nomor_telepon_orang_tua') {{ $message }} @enderror
            </div>
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
            <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-foto">
              @error('foto') {{ $message }} @enderror
            </div>
          </fieldset>
          <fieldset class="fieldset @error('ijazah_surat_keterangan_lulus') border-red-500 @enderror">
            <legend class="fieldset-legend">
              Ijazah / Surat Keterangan Lulus
            </legend>
            <input name="ijazah_surat_keterangan_lulus" type="file" class="file-input" />
            <label class="fieldset-label">Max size 2MB</label>
            <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-ijazah_surat_keterangan_lulus">
              @error('ijazah_surat_keterangan_lulus') {{ $message }} @enderror
            </div>
          </fieldset>
          <fieldset class="fieldset @error('kartu_keluarga') border-red-500 @enderror">
            <legend class="fieldset-legend">Kartu Keluarga</legend>
            <input name="kartu_keluarga" type="file" class="file-input" />
            <label class="fieldset-label">Max size 2MB</label>
            <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-kartu_keluarga">
              @error('kartu_keluarga') {{ $message }} @enderror
            </div>
          </fieldset>
        </div>
      </div>

      <span class="flex items-center gap-4 mt-4">
        <input
          id="confirm"
          type="checkbox" 
          class="checkbox @error('persetujuan') border-red-500 @enderror" 
          name="persetujuan"
          {{ old('persetujuan') ? 'checked' : '' }}
        />
        <p id="confirm-text">Saya menyatakan bahwa data yang diisi adalah benar</p>
      </span>
      <div class="hidden text-red-500 text-sm mt-1 error-message" id="error-persetujuan">
        @error('persetujuan') {{ $message }} @enderror
      </div>

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

@push('script')
  <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
      $('#form-pendaftaran').submit(function (e) { 
        e.preventDefault();
        let data = new FormData(this);

        if($('#confirm').is(':checked')) {
          $.ajax({
            type: "POST",
            url: "{{ route('pendaftaran.store') }}",
            data: data,
            processData: false,  // Penting!
            contentType: false,  // Penting!

            success: function (response) {
              $('#alert').removeClass('alert-hidden').fadeIn();
              setTimeout(() => {
                $('#alert').fadeOut();
              }, 3000);
            },

            error: function (xhr) {
              let errors = xhr.responseJSON.errors;
              $.each(errors, function(key, value) {
                  $('#error-' + key).removeClass('hidden')
                  $('#error-' + key).html(
                      '<p class="text-red-500 text-sm mt-1">' + value[0] + '</p>'
                  );
              });
            }
          });
        } else {
          $('#confirm').addClass('border-red-500');
          $('#confirm-text').addClass('text-red-500');
        }
      });
    });
  </script>
@endpush