<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamMedikController;

use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.master');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    //Manajemen Rekam-Medik
    Route::get('/rekam-medik', [RekamMedikController::class, 'index']);
    Route::get('/rekam-medik/form', [RekamMedikController::class, 'create']);
    Route::post('/rekam-medik', [RekamMedikController::class, 'store']);



    Route::get('/Pasien', [PasienController::class, 'index'])->name('psn');
    Route::get('/Pasien/form', [PasienController::class, 'create'])->name('tmb_psn');
});