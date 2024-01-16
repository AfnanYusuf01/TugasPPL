<?php

namespace App\Http\Controllers;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class StaffController extends Controller
{
    //
    public function showDataAntrian()
    {
        $antrians = Antrian::all();
        return view('dataAntrian', ['Antrians' => $antrians]);
    }

    public function delete_antrian($id)
{
    // Temukan antrian berdasarkan ID
    $antrian = Antrian::findOrFail($id);

    // Hapus antrian
    $antrian->delete();

    return redirect()->route('showDataAntrian')->with('success', 'Antrian berhasil dihapus.');
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
