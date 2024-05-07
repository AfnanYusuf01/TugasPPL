<?php

namespace App\Http\Controllers;
use App\Models\Antrian;
use App\Models\Poli;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class StaffController extends Controller
{
    //
    public function showselectPoli()
    {
        $poli = Poli::all();
        return view('selectPoli', ['poli'=> $poli]);
    }
    public function showDataAntrian($poli_id)
    {
        $antrians = Antrian::where('poli_id', $poli_id)->get();

        return view('dataAntrian', ['Antrians' => $antrians]);
    }

    public function delete_antrian($id)
        {
            // Temukan antrian berdasarkan ID
            $antrian = Antrian::findOrFail($id);

            $poli_id = $antrian->poli_id;


            // Hapus antrian
            $antrian->delete();

            return redirect()->route('lihatDataAntrian', ['poli_id' => $poli_id])
            ->with('success', 'Antrian berhasil dihapus.');
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

    public function updateStatus($id)
    {
        $antrian = Antrian::findOrFail($id);
        $poli_id = $antrian->poli_id;
        
        // Lakukan validasi atau logika lain sesuai kebutuhan

        // Update status menjadi "diperiksa"
        $antrian->update(['status' => 'diperiksa']);
        return redirect()->route('lihatDataAntrian', ['poli_id' => $poli_id])
        ->with('success', 'Antrian berhasil dihapus.');
    
    }

    public function lihatSuratRujukan($filename)
    {
        $pathToFile = storage_path('app/' . $filename);
        return response()->file($pathToFile);
    }

    public function lihatBpjs($filename)
    {
        // Dapatkan path ke file BPJS dari database
        $pathToFile = Antrian::where('BPJS', $filename)->value('bpjs');

        // Tampilkan file BPJS sebagai response
        return response()->file(storage_path('app/' . $pathToFile));
    }



}
