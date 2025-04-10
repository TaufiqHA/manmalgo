<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentRegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    /** @test */
    public function user_dapat_mendaftarkan_diri_dengan_data_yang_valid()
    {
        Storage::fake('public');

        $data = [
            'nama_lengkap' => 'Budi Santoso',
            'tempat_lahir' => 'Jakarta',
            'nisn' => '1234567890',
            'tanggal_lahir' => '2005-06-15',
            'jenis_kelamin' => 'laki-laki',
            'email' => 'budi@example.com',
            'nomor_telepon' => '081234567890',
            'alamat_lengkap' => 'Jl. Merdeka No.1',
            'asal_sekolah' => 'SMP Negeri 1 Jakarta',
            'nilai_bahasa_indonesia' => 85,
            'nilai_bahasa_inggris' => 90,
            'nilai_matematika' => 88,
            'nama_ayah' => 'Pak Santoso',
            'nama_ibu' => 'Bu Santi',
            'pekerjaan_ayah' => 'PNS',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'nomor_telepon_orang_tua' => '081298765432',
            'foto' => UploadedFile::fake()->image('foto.jpg'),
            'ijazah_surat_keterangan_lulus' => UploadedFile::fake()->create('ijazah.pdf', 100),
            'kartu_keluarga' => UploadedFile::fake()->create('kk.pdf', 100),
        ];

        $response = $this->post(route('pendaftaran.store'), $data);

        $response->assertStatus(302); // Redirect setelah berhasil insert
        $this->assertDatabaseHas('pendaftarans', [
            'nama_lengkap' => 'Budi Santoso',
            'email' => 'budi@example.com',
        ]);
    }

    /** @test */
    public function pendaftaran_gagal_dengan_data_tidak_lengkap()
    {
        $response = $this->post(route('pendaftaran.store'), []);

        $response->assertSessionHasErrors([
            'nama_lengkap',
            'nisn',
            'email',
            'foto',
            'ijazah_surat_keterangan_lulus',
            'kartu_keluarga',
        ]);
    }
}
