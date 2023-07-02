<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RawatController;
use App\Http\Controllers\PegawaizController;

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





Route::get('/', [LoginController::class, "index"]);

Route::get('/HOME', [LoginController::class, "index"]);


Route::get('/login', [LoginController::class, "index"])->middleware("guest");
Route::post('/login', [LoginController::class, "authenticate"]);

Route::get('/register', [RegisterController::class, "index"]);
Route::post('/register', [RegisterController::class, "store"]);

Route::get('/dokter', [DokterController::class, "index"]);
Route::post('/dokter', [DokterController::class, "store"]);
Route::get('/dokter', [DokterController::class, "index2"]);
Route::delete('/dokter/{id}', [DokterController::class, "destroy"]);
Route::get('/dokter/{id}/edit', [DokterController::class, "edit"]);
Route::put('/dokter/{id}', [DokterController::class, "update"]);


Route::get('/pasien', [PasienController::class, "index"]);
Route::post('/pasien', [PasienController::class, "store"]);
Route::get('/pasien', [PasienController::class, "index2"]);
Route::delete('/pasien/{id}', [PasienController::class, "destroy"]);
Route::get('/pasien/{id}/edit', [PasienController::class, "edit"]);
Route::put('/pasien/{id}', [PasienController::class, "update"]);


Route::get('/ruang', [RuangController::class, "index"]);
Route::post('/ruang', [RuangController::class, "store"]);
Route::get('/ruang', [RuangController::class, "index2"]);
Route::delete('/ruang/{id}', [RuangController::class, "destroy"]);
Route::get('/ruang/{id}/edit', [RuangController::class, "edit"]);
Route::put('/ruang/{id}', [RuangController::class, "update"]);


Route::get('/pembayaran', [PembayaranController::class, "index"]);
Route::post('/pembayaran', [PembayaranController::class, "store"]);
Route::get('/pembayaran', [PembayaranController::class, "index2"]);
Route::delete('/pembayaran/{id}', [PembayaranController::class, "destroy"]);
Route::get('/pembayaran/{id}/edit', [PembayaranController::class, "edit"]);
Route::put('/pembayaran/{id}', [PembayaranController::class, "update"]);

Route::get('/rawat-inap', [RawatController::class, "index"]);
Route::post('/rawat-inap', [RawatController::class, "store"]);
Route::get('/rawat-inap', [RawatController::class, "index2"]);
Route::delete('/rawat-inap/{id}', [RawatController::class, "destroy"]);
Route::get('/rawat-inap/{id}/edit', [RawatController::class, "edit"]);
Route::put('/rawat-inap/{id}', [RawatController::class, "update"]);

Route::get('/petugas', [PegawaizController::class, "index"]);
Route::post('/petugas', [PegawaizController::class, "store"]);
Route::get('/petugas', [PegawaizController::class, "index2"]);
Route::delete('/petugas/{id}', [PegawaizController::class, "destroy"]);
Route::get('/petugas/{id}/edit', [PegawaizController::class, "edit"]);
Route::put('/petugas/{id}', [PegawaizController::class, "update"]);






// Route::get('/dev', function () {
//     return view('dashboard');
// });