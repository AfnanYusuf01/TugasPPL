<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\frontend\PoliController;
use App\Http\Controllers\frontend\DoktersController;
use App\Http\Controllers\frontend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Models\Poli;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');
Route::get('/data-Antrian', function () {
    return view('cek_kode_referal');
})->name('dataAntrian');
Route::get('/cobalihat', function () {
    return view('rekamMedisPasien');
})->name('dataAntrian');








//Poli
Route::get('/schedule',[PoliController::class, 'index'] )->name('schedule');
Route::get('/dokters',[DoktersController::class, 'index'] )->name('dokters');
Route::get('/about',[AboutController::class, 'index'] )->name('about');
Route::post('/store-berkas', [AntrianController::class, 'store_berkas'])->name('store_berkas');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/form-biodata', [PasienController::class, 'showForm'])->name('show.biodata');
    Route::post('/store-biodata', [PasienController::class, 'storeForm'])->name('store.biodata');
});

// Rute untuk Pasien
Route::middleware(['role.access:Pasien'])->group(function () {
    
    Route::get('/addAntrian', [AntrianController::class, 'create_antrian'])->name('create_antrian');
    Route::post('/store-antrian', [AntrianController::class, 'store_antrian'])->name('store_antrian');
    
    Route::get('/form-biodata', [PasienController::class, 'showForm'])->name('show.biodata');
    Route::post('/store-biodata', [PasienController::class, 'storeForm'])->name('store.biodata');

    Route::post('/store-berkas', [AntrianController::class, 'storeBerkas'])->name('storeBerkas');
    Route::get('/form-berkas', [AntrianController::class, 'create_berkas'])->name('berkasForm');

    Route::get('/laporan-rekam-medis', [PasienController::class, 'showRekamMedis'])->name('show_rekam_medis');




});

// Rute untuk Staff
Route::middleware(['role.access:Staff'])->group(function () {
    Route::get('/cek-referal', [StaffController::class, 'showCekReferal'])->name('showCekReferal');
    Route::post('/cek-referal/cek', [StaffController::class, 'cekReferal'])->name('cekReferal');

    Route::get('/cek_data/{id}', [PasienController::class, 'cekData'])->name('cek_dataa');
    Route::put('/update-status/{id}', [StaffController::class, 'updateStatus'])->name('update-status');

    Route::get('/select-poli', [StaffController::class, 'showselectPoli'])->name('showSelectPoli');

    Route::get('/lihat-antrian/{poli_id}',  [StaffController::class, 'showDataAntrian'])->name('lihatDataAntrian');

    Route::get('/app/{filename}', [StaffController::class,'lihatSuratRujukan'])->name('lihat_surat_rujukan');
    Route::get('/lihat-bpjs/{filename}', [StaffController::class, 'lihatBpjs'])->name('lihat.bpjs');

    Route::delete('/antrian/{id}', [StaffController::class, 'delete_antrian'])->name('delete_antrian');
    
});

// Rute untuk Dokter
Route::middleware(['role.access:Dokter'])->group(function () {
    Route::get('/form-dokter', [DokterController::class, 'showForm'])->name('form.dokter');
    Route::post('/form-dokter', [DokterController::class, 'submitForm'])->name('store.dokter');
    
    Route::get('/cari-pasien', [DokterController::class, 'show_pasien'])->name('cari.pasien');
    Route::post('/store_cari_pasien', [DokterController::class, 'store_cari'])->name('store.cari');

    Route::get('/lihat-rekam-medis/{id_pasien}', [DokterController::class, 'cariRekamMedisPasien'])->name('lihat.rekamMedisPasien');
    

    Route::get('/create-rekam-medis/{id}', [DokterController::class, 'creatRekamMedisPasien'])->name('create.rekamMedisPasien');
    Route::post('/tambah-rekam-medis', [DokterController::class, 'storeRekamMedis'])->name('tambah.rekamMedis');


    Route::get('/detail-rekam-medis/{id}', [DokterController::class, 'detailRekamMedisForm'])->name('detail_rekam_medis_form');
    Route::post('/update-rekam-medis', [DokterController::class, 'updateRekamMedis'])->name('update_rekam_medis');

    Route::post('/update-status-antrian/{id_pasien}', [DokterController::class, 'updateStatus'])->name('update_status_antrian');




    });
require __DIR__.'/auth.php';
