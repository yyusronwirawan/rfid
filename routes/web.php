<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ScanController;

Route::get('/', [PagesController::class, 'dashboard']);
// DATA KARYAWAN
Route::get('/karyawan', [KaryawanController::class,'index']);
Route::get('/tambah-karyawan', [KaryawanController::class,'create']);
Route::get('/edit-karyawan/{id}', [KaryawanController::class,'edit']);
Route::post('/postkaryawan', [KaryawanController::class,'store']);
Route::post('/editkaryawan', [KaryawanController::class,'update']);
Route::get('/hapus-karyawan/{id}', [KaryawanController::class,'destroy']);

// DATA ABSEN 
Route::get('/absensi', [PagesController::class, 'absensi']);

// PRESENSI
Route::get('/scan', [PagesController::class,'scan_absen']);

// FUNGSI REALTIME
Route::get('/reader', [PagesController::class,'reader']);
Route::get('/nokartu', [PagesController::class,'nokartu']);


// FUNGSI GET LINK ARDUINO
Route::get('/postkartu/{id}', [PagesController::class,'temp']);
Route::get('/mode', [PagesController::class,'mode']);




