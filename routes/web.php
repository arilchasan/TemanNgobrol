<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PsikologController;

Route::get('/', function () {
    return view('web.homepage');
});
Route::get('/psikolog', [PsikologController::class, 'index'])->name('psikolog.index');

//dashboard route
Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/users', [DashboardController::class, 'users']);
    Route::get('/users/data', [DashboardController::class, 'getUsers'])->name('dashboard.users.data');

});
