<?php

namespace App\Http\Controllers;
use App\Models\Antrian;
use Illuminate\Http\Request;

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

}
