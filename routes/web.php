<?php

use App\Http\Controllers\LaporanController;

Route::get('/lapor', [LaporanController::class, 'form']);
Route::post('/simpan-laporan', [LaporanController::class, 'simpan']);
Route::get('/daftar-laporan', [LaporanController::class, 'daftar']);