<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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

Route::get('/datatamu', [TamuController::class, 'tambahTamu'])->name('datatamu');
Route::get('/tamu', [TamuController::class, 'tambahTamu'])->name('tambah.tamu');
Route::post('/simpan_tamu', [TamuController::class, 'simpanTamu'])->name('simpan.tamu');
Route::get('/welcome', [TamuController::class, 'welcome'])->name('welcome');
Route::get('/Dashboard', [TamuController::class, 'Dashboard'])->name('Dashboard');
Route::post('/Dashboard', [TamuController::class,'Dashboard'])->name('Dashboard');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/daftar_tamu', [TamuController::class, 'daftar_tamu'])->name('daftar_tamu');
Route::post('/daftar_tamu', [TamuController::class, 'daftar_tamu'])->name('daftar_tamu');

Route::put('/daftar_tamu/{id}', [TamuController::class, 'update'])->name('daftar_tamu.update');

Route::delete('/daftar_tamu/{id}', [TamuController::class, 'destroy'])->name('hapus_tamu');

Route::get('/edit-tamu/{id}', [TamuController::class, 'edit'])->name('edit_tamu');
Route::put('/update-tamu/{id}', [TamuController::class, 'update'])->name('update_tamu');
Route::delete('/hapus-tamu/{id}', [TamuController::class, 'destroy'])->name('hapus_tamu');
