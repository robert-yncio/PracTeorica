<?php

use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ReporteController::class, 'index'])->name('reportes.index');
Route::get('/reportes/export', [ReporteController::class, 'export'])->name('reportes.export');
