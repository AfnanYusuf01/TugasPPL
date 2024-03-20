<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poli;

class PoliController extends Controller
{
    //
    public function index()
    {
        $polies = Poli::with('dokter')->get();
        return view('schedule', compact('polies'));
    }
}
