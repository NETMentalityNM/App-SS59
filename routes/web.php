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
    Route::get('/rekam-medik/edit/{id}', [RekamMedikController::class, 'edit']);
    Route::put('/rekam-medik/{id}', [RekamMedikController::class, 'update']);
    Route::delete('/rekam-medik/{id}', [RekamMedikController::class, 'destroy']);
    
    Route::get('/pasien', [PasienController::class, 'index']);
    Route::get('/pasien/form', [PasienController::class, 'create']);
    Route::post('/pasien', [PasienController::class, 'store']);
    Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
    Route::put('/pasien/{id}', [PasienController::class, 'update']);
    Route::delete('/pasien/{id}', [PasienController::class, 'destroy']);
});