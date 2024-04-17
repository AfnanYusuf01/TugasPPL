<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use App\Models\Poli;
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
    try {
        // Validasi inputan
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'penjamin' => 'required|string|in:BPJS,Jasa Raharja,Umum',
            'poli' => 'required|exists:polies,id_poli', // Memeriksa keberadaan id_poli dalam tabel polies
            'dokter' => 'required|exists:dokters,id_dokter', // Memeriksa keberadaan id_dokter dalam tabel dokters
        ]);

        // Periksa apakah pengguna sedang login dan peran nya adalah 'pasien'
        if (Auth::check() && Auth::user()->role === 'pasien') {
            $pasien_id = Auth::user()->id; // Ambil ID pasien dari data pengguna yang sedang login
        } else {
            // Jika pengguna tidak login atau perannya bukan 'pasien', berikan nilai null ke pasien_id
            $pasien_id = null;
        }

        // Lakukan penyimpanan data antrian ke dalam database
        $antrian = new Antrian();
        $antrian->nama = $request->nama;
        $antrian->email = $request->email;
        $antrian->penjamin = $request->penjamin;
        $antrian->poli_id = $request->poli;
        $antrian->dokter = $request->dokter;
        $antrian->pasien_id = $pasien_id; // Mengisi kolom pasien_id dengan ID pasien
        $antrian->save();

        // Kembalikan view formBerkas dengan menyertakan data antrian sebagai variabel
        return view('formBerkas', compact('antrian'))->with('success', 'Antrian berhasil disimpan.');
    } catch (QueryException $e) {
        // Tangkap kesalahan database dan tampilkan pesan kesalahan
        return back()->with('error', 'Terjadi kesalahan database: ' . $e->getMessage());
    } catch (\Exception $e) {
        // Tangkap kesalahan umum dan tampilkan pesan kesalahan
        return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}
}
