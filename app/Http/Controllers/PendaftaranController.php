<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function index()
    {
        $result = (object)[
            'nama_lengkap' => '-',
            'nisn' => '-',
            'status_pendaftaran' => '-'
        ];

        return view('info', ['result'=> $result]);
    }

    public function create()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'nisn' => 'required|string|max:20|unique:pendaftarans,nisn',            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|in:laki-laki,perempuan',
            'email' => 'required|email|max:255|unique:pendaftarans,email',            
            'nomor_telepon' => 'required|string|max:20',
            'alamat_lengkap' => 'required|string',
            'asal_sekolah' => 'required|string|max:255',
            'nilai_bahasa_indonesia' => 'required|numeric|min:0|max:100',
            'nilai_bahasa_inggris' => 'required|numeric|min:0|max:100',
            'nilai_matematika' => 'required|numeric|min:0|max:100',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'nomor_telepon_orang_tua' => 'required|string|max:20',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'ijazah_surat_keterangan_lulus' => 'required|file|mimes:pdf,jpeg,png,jpg|max:5120',
            'kartu_keluarga' => 'required|file|mimes:pdf,jpeg,png,jpg|max:5120',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'email' => 'Format email tidak valid.',
            'numeric' => ':attribute harus berupa angka.',
            'min' => ':attribute minimal :min.',
            'max' => ':attribute maksimal :max.',
            'image' => 'File :attribute harus berupa gambar.',
            'file' => 'File :attribute harus berupa dokumen.',
            'mimes' => 'Format file :attribute harus :values.',
            'in' => ':attribute harus salah satu dari: :values',
        ]);

        // upload foto
        if(!empty($request->foto))
        {
            $filename = 'foto-'.uniqid().'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(storage_path('app/public/foto'), $filename);
            $validated['foto'] = $filename;
        }

        // upload ijazah
        if(!empty($request->ijazah_surat_keterangan_lulus))
        {
            $filename = 'ijazah-'.uniqid().'.'.$request->ijazah_surat_keterangan_lulus->getClientOriginalExtension();

            $request->ijazah_surat_keterangan_lulus->move(storage_path('app/public/file'), $filename);
            $validated['ijazah_surat_keterangan_lulus'] = $filename;

        }

        // upload kartu keluarga
        if(!empty($request->kartu_keluarga))
        {
            $filename = 'kartu_keluarga-'.uniqid().'.'.$request->kartu_keluarga->getClientOriginalExtension();

            $request->kartu_keluarga->move(storage_path('app/public/file'), $filename);
            $validated['kartu_keluarga'] = $filename;
        }

        DB::table('pendaftarans')->insert($validated);

        return redirect()->route('pendaftaran.create')->with(['success' => 'Pendaftaran Berhasil']);
    }

    public function cek(Request $request)
    {
        $result = Pendaftaran::where('nama_lengkap', $request->nama)->where('nisn', $request->nisn)->first();

        return response()->json([
            'html' => view('components.status-pendaftaran', ['result'=> $result])->render()
        ]);
    }
}
