<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\ApplyLokerController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/kosongan', function () {
    return view('kosongan');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::middleware(['auth', 'checkrole:petugas'])->group(function () {
    // Show all
    Route::get('/daftar-loker', [LokerController::class, 'index'])->name('daftar-loker');

    // Tambah loker
    Route::get('/daftar-loker/tambah-loker', [LokerController::class, 'create'])->name('tambah-loker');
    Route::post('/daftar-loker', [LokerController::class, 'store'])->name('simpan-loker');

    // Show individual
    Route::get('/daftar-loker/{id}', [LokerController::class, 'show'])->name('loker');


    // Ubah loker
    Route::get('/daftar-loker/{id}/edit-loker', [LokerController::class, 'edit'])->name('edit-loker');
    Route::put('/daftar-loker/{id}', [LokerController::class, 'update'])->name('ubah-loker');

    // Hapus loker
    Route::get('/daftar-loker/{id}/konfirmasi-hapus-loker', [LokerController::class, 'confirmDelete'])->name('konfirmasi-hapus-loker');
    Route::delete('/daftar-loker/{id}', [LokerController::class, 'destroy'])->name('hapus-loker');

    //Lihat apply loker
    Route::get('/apply-loker', [ApplyLokerController::class, 'index'])->name('apply-loker.index');
});
