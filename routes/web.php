<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PendudukController;

use App\Http\Controllers\Admin\DomisiliController;

Route::prefix('admin')
    ->name('admin.')
    // ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/penduduk/search', [PendudukController::class, 'search'])->name('penduduk.search');
        Route::get('/penduduk/export-pdf', [PendudukController::class, 'exportPdf'])->name('penduduk.export-pdf');
        Route::get('/penduduk/export-excel', [PendudukController::class, 'exportExcel'])->name('penduduk.export-excel');
        Route::resource('penduduk', PendudukController::class)->parameters(['penduduk' => 'uuid']);

        Route::get('/domisili/search', [DomisiliController::class, 'search'])->name('domisili.search');
        Route::get('/domisili/export-pdf', [DomisiliController::class, 'exportPdf'])->name('domisili.export-pdf');
        Route::get('/domisili/export-excel', [DomisiliController::class, 'exportExcel'])->name('domisili.export-excel');

        Route::resource('domisili', DomisiliController::class)->parameters(['domisili' => 'uuid']);
});