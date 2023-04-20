<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\obatController;
use App\Http\Controllers\exportController;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\tindakanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\pembayaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/surat',[App\Http\Controllers\HomeController::class,'surat']);
Route::get('/nodin',[App\Http\Controllers\HomeController::class,'nodin']);


route::post('/pegawai',[pegawaiController::class,'store'])->name('pegawai.store');
Route::get('/pegawai',[pegawaiController::class,'index'])->name('pegawai.index');
Route::get('/pegawai/create',[pegawaiController::class,'create'])->name('pegawai.create');

Route::prefix('pasien')->group(function(){
    Route::get('',[pasienController::class,'index'])->name('pasien.index');
    Route::post('',[pasienController::class,'store'])->name('pasien.store');
    Route::get('/create',[pasienController::class,'create'])->name('pasien.create');
});

Route::prefix('obat')->group(function(){
    Route::get('',[obatController::class,'index'])->name('obat.index');
    Route::post('',[obatController::class,'store'])->name('obat.store');
    Route::get('/create',[obatController::class,'create'])->name('obat.create');
});

Route::prefix('/tindakan')->group(function(){
    Route::get('',[tindakanController::class,'index'])->name('tindakan.index');
    Route::post('',[tindakanController::class,'store'])->name('tindakan.store');
    Route::get('/create',[tindakanController::class,'create'])->name('tindakan.create');
});

Route::prefix('/transaksi')->group(function(){
    Route::get('',[TransaksiController::class,'index'])->name('transaksi.index');
    Route::post('',[TransaksiController::class,'store'])->name('transaksi.store');
    Route::get('/create',[TransaksiController::class,'create'])->name('transaksi.create');
});


Route::prefix('/laporan')->group(function(){

    Route::get('/laporan/pasien',function(){
        return view('bpom.laporan.laporan-pasien');
    });
    Route::get('/laporan/karyawan',function(){
        return view('bpom.laporan.laporan-karyawan');
    });
});

Route::prefix('/export')->group(function(){
    Route::get('/previewPDF',[exportController::class,'previewPDF']);
    Route::get('/pdf',[exportController::class,'pegawaiPDF']);
});

