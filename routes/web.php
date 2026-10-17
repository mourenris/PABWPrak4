<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/laporan/buat', [LaporanController::class, 'create']);
Route::post('/laporan/simpan', [LaporanController::class, 'store']);
Route::get('/laporan', [LaporanController::class, 'index']);