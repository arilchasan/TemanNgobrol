<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('web.homepage');
});


//dashboard route
Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/users', [DashboardController::class, 'users']);
    Route::get('/users/data', [DashboardController::class, 'getUsers'])->name('dashboard.users.data');

});
