<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Antrian;
use App\Models\RekamMedis;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

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
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
            'nomer_izin_praktik' => 'required|string|max:255',
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

    public function store_cari(Request $request)
    {
        $keyword = $request->input('keyword');
    
        $pasien = Pasien::where('nama', 'like', '%' . $keyword . '%')
            ->orWhere('nik', 'like', '%' . $keyword . '%')
            ->get();
    
        return view('cariPasien', ['pasien' => $pasien, 'keyword' => $keyword]);
    }

    public function cariRekamMedisPasien($id_pasien)
    {
        // Ambil data pasien berdasarkan $id_pasien
        $pasien = Pasien::find($id_pasien);

        if (!$pasien) {
            return redirect()->route('cari.pasien')->with('error', 'Pasien tidak ditemukan');
        }

        // Ambil semua rekam medis yang dimiliki pasien
        $rekamMedis = RekamMedis::where('pasien_id', $pasien->id_pasien)->get();


        return view('rekamMedisPasien', compact('pasien', 'rekamMedis'));
    }
    
    public function creatRekamMedisPasien($id)
    {   
        return view('formRekamMedis', ['id_pasien' => $id]);
    }


    public function storeRekamMedis(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required|date',
            'gejala' => 'required',
            'diagnosis' => 'required',
            'penangan' => 'required',
            'resep_obat' => 'required',
            'pasien_id' => 'required', // Validasi pasien_id
        ]);
    
        // Ambil ID user yang sedang login
        $user = Auth::user();
        
    
        // Periksa apakah user memiliki peran dokter dan memiliki ID dokter
        $dokter = $user->dokter; // Pastikan relasi `dokter` sudah ada di model `User`
        if (!$dokter) {
            return redirect()->back()->withErrors('User tidak memiliki peran dokter.');
        }

        // Simpan rekam medis baru ke database
        RekamMedis::create([
            'pasien_id' => $request->input('pasien_id'),
            'dokter_id' => $dokter->id_dokter, // Mengambil `dokter_id`
            'nama' => $request->input('nama'),
            'tanggal' => $request->input('tanggal'),
            'gejala' => $request->input('gejala'),
            'diagnosis' => $request->input('diagnosis'),
            'penangan' => $request->input('penangan'),
            'resep_obat' => $request->input('resep_obat'),
        ]);
    
        // Ambil data rekam medis terbaru setelah disimpan
        $rekamMedis = RekamMedis::latest()->first();
        // Redirect dengan pesan sukses
        return redirect()->route('lihat.rekamMedisPasien', ['id_pasien' => $request->input('pasien_id')])
            ->with(['success' => 'Rekam Medis berhasil ditambahkan', 'rekamMedis' => $rekamMedis]);
    }
            

public function detailRekamMedisForm($id)
{
    $rekamMedis = RekamMedis::find($id);

    return view('detailRekamMedis', compact('rekamMedis'));
}

public function updateRekamMedis(Request $request)
{
    // Validasi data input sesuai kebutuhan

    // Ambil rekam medis berdasarkan ID
    $rekamMedis = RekamMedis::find($request->input('id'));
    $id_pasien = $rekamMedis->id_pasien;

    // Update data rekam medis
    $rekamMedis->update([
        'nama' => $request->input('nama'),
        'tanggal' => $request->input('tanggal'),
        'gejala' => $request->input('gejala'),
        'diagnosis' => $request->input('diagnosis'),
        'penangan' => $request->input('penangan'),
        'resep_obat' => $request->input('resep_obat'),
    ]);

    // Redirect ke halaman pencarian rekam medis pasien
    return redirect()->route('cari_rekam_medis_pasien', ['id_pasien' => $id_pasien])
        ->with(['success' => 'Rekam Medis berhasil diupdate', 'rekamMedis' => $rekamMedis]);
}

public function updateStatus($id_pasien)
{
    // Temukan antrian yang sesuai dengan id_pasien
    $antrian = Antrian::where('id_pasien', $id_pasien)->first();

    // Perbarui status menjadi "Telah Diperiksa" atau sesuai dengan kebutuhan
    $antrian->update(['status' => 'Telah Diperiksa']);

    // Redirect ke route 'cari.dokter' atau sesuai dengan nama rute yang Anda gunakan
    return redirect()->route('cari.dokter')->with('success', 'Status Antrian berhasil diperbarui');
}

    
    
    
    
    
}
