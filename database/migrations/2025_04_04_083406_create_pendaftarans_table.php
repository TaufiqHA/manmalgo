<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('nisn');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->text('alamat_lengkap');
            $table->string('asal_sekolah');
            $table->decimal('nilai_bahasa_indonesia', 5, 2);
            $table->decimal('nilai_bahasa_inggris', 5, 2);
            $table->decimal('nilai_matematika', 5, 2);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('nomor_telepon_orang_tua');
            $table->string('foto');
            $table->string('ijazah_surat_keterangan_lulus');
            $table->string('kartu_keluarga');
            $table->enum('status_pendaftaran', [
                'Menunggu Verifikasi',
                'Sedang Diproses',
                'Lolos Seleksi',
                'Tidak Lolos',
                'Verifikasi Dokumen Gagal',
                'Dibatalkan',
                'Selesai'
            ])->default('Menunggu Verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
