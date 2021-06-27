<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ScanController;

Route::get('/', [PagesController::class, 'dashboard']);
// MASTER KARYAWAN
Route::get('/karyawan', [KaryawanController::class,'index']);
Route::get('/tambah-karyawan', [KaryawanController::class,'create']);
Route::get('/edit-karyawan/{id}', [KaryawanController::class,'edit']);
Route::post('/postkaryawan', [KaryawanController::class,'store']);
Route::post('/editkaryawan', [KaryawanController::class,'update']);
Route::get('/hapus-karyawan/{id}', [KaryawanController::class,'destroy']);

// RFID
Route::get('/scan', [PagesController::class,'scan_absen']);

// fungsi realtime
Route::get('/reader', [PagesController::class,'reader']);
Route::get('/nokartu', [PagesController::class,'nokartu']);


// fungsi dari coding arduino
Route::get('/postkartu/{id}', [PagesController::class,'temp']);

Route::get('/absensi', [PagesController::class, 'absensi']);


