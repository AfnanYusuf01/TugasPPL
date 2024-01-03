<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Booking;
use App\Models\Pesan;
Use Alert;



class TugasController extends Controller
{
    //
    public function about()
        {

            return view('about');
        }
    
    public function layanan(){

        return view('layanan');
    }


    public function contact(){

        return view('contact');
    }

    public function index(){
        return view('index');
    }
    
    public function schedule(){

        return view('schedule');
    }
    public function dokters(){

        return view('dokters');
    }
    public function testimoni(){

        return view('testimoni');
    }




 
}
