<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Antrian;
use App\Models\Pasien;

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

    public function cekData($id)
    {
        // Ambil data Antrian berdasarkan id_pasien
        $antrian = Antrian::where('id', $id)->first();

        if (!$antrian) {
            // Handle jika Antrian tidak ditemukan
            return redirect()->route('index')->with('error', 'Data Antrian tidak ditemukan.');
        }

        // Kirim data Antrian ke halaman cek_data.blade.php
        return view('cek_data', ['antrian' => $antrian]);
    }
    
    public function updateStatus($id)
    {
        $antrian = Antrian::findOrFail($id);
        
        // Lakukan validasi atau logika lain sesuai kebutuhan

        // Update status menjadi "diperiksa"
        $antrian->update(['status' => 'diperiksa']);

        return redirect()->route('showDataAntrian')->with('success', 'Status berhasil diperbarui.');
    }

    // app/Http/Controllers/DokterController.php



    
    }
