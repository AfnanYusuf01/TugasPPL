<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use App\Models\Poli;
use App\Models\Pasien;
use App\Models\Berkas;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;
use Illuminate\Database\QueryException;

class AntrianController extends Controller
{
    //
   
    /**
     * Menampilkan formulir pendaftaran antrian.
     *
     * @return \Illuminate\View\View
     */
    public function create_antrian()
    {
        
        $polies = Poli::with('dokter')->get();
        return view('formAntrian', compact('polies'));
    }


   

    public function store_antrian(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'penjamin' => 'required|string|in:BPJS,Jasa Raharja,Umum',
            'poli' => 'required', // Memeriksa keberadaan id_poli dalam tabel polies
            'dokter' => 'required', // Memeriksa keberadaan id_dokter dalam tabel dokters
        ]);

        // $pasien = Auth::user()->pasien()->first();
        // dd($pasien);
    
                // Periksa apakah pengguna sedang login dan peran nya adalah 'pasien'
        if (Auth::check()) {
            // Ambil data pasien terkait dari user yang sedang login
            $pasien = Auth::user()->pasien()->first(); // Menggunakan first() karena relasi adalah one-to-one

            // Pastikan data pasien tersedia
            if ($pasien) {
                // Ambil ID pasien dari data pasien
                $pasien_id = $pasien->id_pasien;
            } else {
                // Jika data pasien tidak tersedia, kembalikan dengan pesan error
                return back()->with('error', 'Data pasien tidak ditemukan.');
            }
        } else {
            // Jika pengguna tidak login atau perannya bukan 'pasien', kembalikan ke halaman login
            return redirect()->route('login')->with('error', 'Anda belum login');
        }

        $token = '';
        for ($i = 0; $i < 6; $i++) {
            $token .= rand(0, 9); // Menghasilkan angka acak antara 0 dan 9
        }
        // Lakukan penyimpanan data antrian ke dalam database
        $antrian = new Antrian();
        $antrian->nama = $request->nama;
        $antrian->email = $request->email;
        $antrian->penjamin = $request->penjamin;
        $antrian->poli_id = $request->poli;
        $antrian->dokter = $request->dokter;
        $antrian->pasien_id = $pasien_id; // Mengisi kolom pasien_id dengan ID pasien
        $antrian->token = $token;
        $antrian->save();
    
        // Kembalikan view formBerkas dengan menyertakan data antrian sebagai variabel
        return redirect()->route('berkasForm');
    }

    public function create_berkas()
    {
        
        return view('formBerkas');
    }
    

    public function storeBerkas(Request $request)
    {
        // Validasi input
        $request->validate([
            'bpjs' => 'nullable',
            'surat_rujukan' => 'nullable',
            'surat_jasaraharja' => 'nullable',
            'surat_klaim_asuransi' => 'nullable',
            'pasien_id' => 'nullable'
        ]);

        if (Auth::check()) {
            // Ambil data pasien terkait dari user yang sedang login
            $pasien = Auth::user()->pasien()->first(); // Menggunakan first() karena relasi adalah one-to-one

            // Pastikan data pasien tersedia
            if ($pasien) {
                // Ambil ID pasien dari data pasien
                $pasien_id = $pasien->id_pasien;
            } else {
                // Jika data pasien tidak tersedia, kembalikan dengan pesan error
                return back()->with('error', 'Data pasien tidak ditemukan.');
            }
        } else {
            // Jika pengguna tidak login atau perannya bukan 'pasien', kembalikan ke halaman login
            return redirect()->route('login')->with('error', 'Anda belum login');
        }

        // Upload file BPJS
        $filebpjs = $request->file('bpjs');
        $filebpjsName = 'bpjs_' . $pasien_id . '.' . $filebpjs->getClientOriginalExtension();
        $filebpjsPath = $filebpjs->storeAs('bpjs', $filebpjsName, 'public');

        // Upload file Surat_rujukan 
        $filesurat_rujukan = $request->file('surat_rujukan');
        $filesurat_rujukanName = 'surat_rujukan_' . $pasien_id . '.' . $filesurat_rujukan->getClientOriginalExtension();
        $filesurat_rujukanPath = $filesurat_rujukan->storeAs('surat_rujukan', $filesurat_rujukanName, 'public');

        // Upload file Surat_rujukan 
        $filesurat_klaim_asuransi = $request->file('surat_klaim_asuransi');
        $filesurat_klaim_asuransiName = 'surat_klaim_asuransi_' . $pasien_id . '.' . $filesurat_klaim_asuransi->getClientOriginalExtension();
        $filesurat_klaim_asuransiPath = $filesurat_klaim_asuransi->storeAs('surat_klaim_asuransi', $filesurat_klaim_asuransiName, 'public');

        // Upload file Surat_rujukan 
        $filesurat_jasaraharja = $request->file('surat_jasaraharja');
        $filesurat_jasaraharjaName = 'surat_jasaraharja_' . $pasien_id . '.' . $filesurat_jasaraharja->getClientOriginalExtension();
        $filesurat_jasaraharjaPath = $filesurat_jasaraharja->storeAs('surat_jasaraharja', $filesurat_jasaraharjaName, 'public');
        
        
        
        // Tambahkan nama file KTP ke dalam data yang akan disimpan
        $validated['surat_rujukan'] = $filesurat_rujukanPath;
        $validated['bpjs'] = $filebpjsPath;
        $validated['surat_klaim_asuransi'] = $filesurat_klaim_asuransiPath;
        $validated['surat_jasaraharja'] = $filesurat_jasaraharjaPath;
        $validated['pasien_id'] = $pasien_id;

        // Simpan data ke database
        Berkas::create($validated);


        $antrian = Antrian::where('pasien_id', $pasien_id)->first();

    if ($antrian) {
        $token = $antrian->token;
        // Mengirimkan token ke halaman dengan mengembalikan view dengan argumen token
        return view('kode_referal', ['token' => $token]);
    } else {
        // Atau lakukan penanganan lain sesuai kebutuhan Anda jika data tidak ditemukan
        return view('formBerkas')->with('error', 'Data token tidak ditemukan.');
    }

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


    
}
