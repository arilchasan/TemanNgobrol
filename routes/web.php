<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PsikologController;

Route::get('/', function () {
    return view('web.homepage');
});
Route::get('/psikolog', [PsikologController::class, 'index'])->name('psikolog.index');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');

//dashboard route
Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/users', [DashboardController::class, 'users']);
    Route::get('/users/data', [DashboardController::class, 'getUsers'])->name('dashboard.users.data');
    Route::prefix(('/psikolog'))->group(function () {
        Route::get('/', [PsikologController::class, 'psikolog'])->name('psikolog.index');
        Route::get('/create', [PsikologController::class, 'create'])->name('psikolog.create');
        Route::post('/add-psikolog', [PsikologController::class, 'store'])->name('psikolog.store');
        Route::get('/detail/{id}', [PsikologController::class, 'show'])->name('psikolog.show');
    });

});
