<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LoginController;

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


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Dashboard
Route::get('/dashboard', function () {
    if (!session('username')) {
        return redirect('/login');
    }
    return view('dashboard');
})->name('dashboard');

// Kelola Barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');


// Kelola Penjualan
Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
Route::post('/penjualan', [PenjualanController::class, 'store'])->name('penjualan.store');
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');
Route::put('/penjualan/{id}/cancel', [PenjualanController::class, 'cancel'])->name('penjualan.cancel');

// Update Akun
Route::get('/update-akun', [LoginController::class, 'updateAkunForm'])->name('update-akun');
Route::post('/update-akun', [LoginController::class, 'updateAkun']);


