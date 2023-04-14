<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\tindakanController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/surat',[App\Http\Controllers\HomeController::class,'surat']);
Route::get('/nodin',[App\Http\Controllers\HomeController::class,'nodin']);


Route::get('/pegawai',[pegawaiController::class,'index'])->name('pegawai.index');
Route::get('/pegawai/create',[pegawaiController::class,'create'])->name('pegawai.create');

Route::prefix('pasien')->group(function(){
    Route::get('',[pasienController::class,'index'])->name('pasien.index');
    Route::get('/create',[pasienController::class,'create'])->name('pasien.create');
});


Route::prefix('tindakan')->group(function(){
    Route::get('',[tindakanController::class,'index'])->name('tindakan.index');
    Route::get('/create',[tindakanController::class,'create'])->name('tindakan.create');
});

Route::prefix('pembayaran')->group(function(){
    Route::get('',[pembayaranController::class,'index'])->name('pembayaran.index');
    Route::get('/create',[pembayaranController::class,'create'])->name('pembayaran.create');
});
