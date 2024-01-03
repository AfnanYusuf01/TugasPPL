<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\RekamMedis;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    public function showForm()
    {
        return view('formDokter');
    }

    public function submitForm(Request $request)
    {
        // Validasi form
        $validatedData = $request->validate([
            'Nama' => 'required|string|max:255',
            'Spesialisasi' => 'required|string|max:255',
            'Nomer_izin_praktik' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Ambil ID user yang sedang login
        $user_id = Auth::id();

        // Simpan data ke database dengan menambahkan user_id
        $dokter = new Dokter($validatedData);
        $dokter->user_id = $user_id;
        $dokter->save();

        return redirect()->route('index')->with('success', 'Pendaftaran dokter berhasil!');
    }

    public function show_pasien()
    {
        return view('cariPasien');
    }

    public function cari(Request $request)
    {
        $keyword = $request->input('keyword');
    
        $pasien = Pasien::where('nama', 'like', '%' . $keyword . '%')
            ->orWhere('nik', 'like', '%' . $keyword . '%')
            ->get();
    
        return view('cariPasien', ['pasien' => $pasien, 'keyword' => $keyword]);
    }

    public function showRekamMedis($id)
{
    $pasien = Pasien::findOrFail($id);


    if (!$pasien) {
        return redirect()->route('cari.dokter')->with('error', 'Pasien tidak ditemukan.');
    }

    $rekamMedis = RekamMedis::where('id_pasien', $pasien->id)->get();

    return view('daftarRekamMedis ', compact('pasien', 'rekamMedis'));
}
    
    
}
