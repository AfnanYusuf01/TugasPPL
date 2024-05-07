<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Antrian;
use App\Models\Pasien;
use App\Models\RekamMedis;

class PasienController extends Controller
{

    public function showForm()
    {
        return view('formPasien');
    }

    public function storeForm(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'nik' => 'required|string',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string',
            'email' => 'required|email',
            'pekerjaan' => 'required|string',
            'nomor_kk' => 'required|string',
            'agama' => 'required|string',
            'status_kawin' => 'required|string',
            'file_ktp' => 'required|mimes:jpeg,png,pdf|max:2048', // Maksimum 2 MB
            'file_kk' => 'required|mimes:jpeg,png,pdf|max:2048', // Maksimum 2 MB
        ]);

        // Set user_id dari pengguna yang sedang login
        $user = Auth::user();
        $validatedData['user_id'] = $user->id_user;

        // Upload file KTP
        $fileKtp = $request->file('file_ktp');
        $fileKtpName = 'ktp_' . $validatedData['user_id'] . '.' . $fileKtp->getClientOriginalExtension();
        $fileKtpPath = $fileKtp->storeAs('ktp_files', $fileKtpName, 'public');

        $fileKk = $request->file('file_kk');
        $fileKkName = 'kk_' . $validatedData['user_id'] . '.' . $fileKk->getClientOriginalExtension();
        $fileKkPath = $fileKk->storeAs('kk_files', $fileKkName, 'public');

        // Tambahkan nama file KTP ke dalam data yang akan disimpan
        $validatedData['file_ktp'] = $fileKtpPath;
        $validatedData['file_kk'] = $fileKkPath;

        // Simpan data ke database
        Pasien::create($validatedData);

        return redirect('/')->with('success', 'Biodata berhasil disimpan.');
    }
     
     

        public function showCekReferal()
    {
        return view('cek_kode_referal');
    }

    public function cekReferal(Request $request)
    {
        // Validasi data
        $request->validate([
            'referal_code' => 'required',
        ]);
    
        // Ambil referal dari input form
        $referal = $request->input('referal_code');
    
        // Cari antrian berdasarkan referal di database
        $antrian = Antrian::where('token', $referal)->first();
    
        // Jika antrian ditemukan, update status menjadi 'diproses'
        if ($antrian) {
            // Cek apakah antrian sudah diproses sebelumnya
            if ($antrian->status === 'diproses') {
                return redirect()->route('showCekReferal')->with('error', 'Referal sudah diproses sebelumnya.');
            }
    
            // Mendapatkan nomor urut terakhir dari antrian yang sama
            $noUrutTerakhir = Antrian::where('status', 'diproses')->max('no_urut');
    
            // Update status menjadi 'diproses'
            $antrian->update(['status' => 'diproses']);
    
            // Update nomor urut menjadi nomor urut terakhir + 1
            $antrian->update(['no_urut' => $noUrutTerakhir + 1]);
    
            return redirect()->route('showCekReferal')->with('success', 'Referal benar. Antrian berhasil diproses!');
        } else {
            // Jika referal tidak ditemukan, berikan pesan kesalahan
            return redirect()->route('showCekReferal')->with('error', 'Referal salah. Coba lagi.');
        }
    }


    public function showRekamMedis()
    {
        if (Auth::check()) {
            // Ambil data pasien terkait dari user yang sedang login
            $pasien = Auth::user()->pasien()->first(); // Menggunakan first() karena relasi adalah one-to-one

            // Pastikan data pasien tersedia
            if ($pasien) {
                // Ambil ID pasien dari data pasien
                $pasien_id = $pasien->id_pasien;

                // Ambil rekam medis pasien
                $rekamMedis = RekamMedis::where('pasien_id', $pasien_id)->get();

                // Kirim data pasien dan rekam medis ke halaman rekamMedisPasien.blade.php
                return view('rekamMedisPasien', compact('pasien', 'rekamMedis'));
            } else {
                // Jika data pasien tidak tersedia, kembalikan dengan pesan error
                return back()->with('error', 'Data pasien tidak ditemukan.');
            }
        } else {
            // Jika pengguna tidak login atau perannya bukan 'pasien', kembalikan ke halaman login
            return redirect()->route('login')->with('error', 'Anda belum login');
        }
    }




    
    }
