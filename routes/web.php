<?php

use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\TentangKami;

Route::get('/', function () {
    return view('web.homepage');
});

Route::get('/psikolog', [PsikologController::class, 'index'])->name('psikolog.index');
Route::get('/psikolog/tentang/{id}', [PsikologController::class, 'tentang'])->name(name: 'psikolog.tentang');
Route::get('/psikolog/konsultasi/{id}', [PsikologController::class, 'jadwalPsikolog'])->name('psikolog.jadwal');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/tentangkami', [TentangKami::class, 'index'])->name('tentangkami.index');
Route::get('/peraturan', function () {
    return view('web.others.peraturan');
})->name('peraturankonseling.index');
Route::get('/lokasi', function () {
    return view('web.others.lokasi');
})->name('lokasi.index');
Route::get('/panduan', function () {
    return view('web.others.panduan');
})->name('panduan.index');

Route::get('/login', function () {
    return view('web.auth.login');
})->name('login');
Route::get('/register', function () {
    return view('web.auth.register');
})->name('register');



//login-admin
Route::get('/login-admin', action: [AdminAuthController::class, 'showLoginForm'])->name('dashboard.loginForm');
Route::post('/auth/login-load', action: [AdminAuthController::class, 'login'])->name('dashboard.login');
Route::get('/auth/logout', action: [AdminAuthController::class, 'logout'])->name('dashboard.logout');
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
        Route::get('/edit-psikolog/{id}', [PsikologController::class, 'edit'])->name('psikolog.edit');
        Route::post('/update-psikolog/{id}', [PsikologController::class, 'update'])->name('psikolog.update');
        Route::delete('/delete-psikolog/{id}', [PsikologController::class, 'destroy'])->name('psikolog.destroy');
    });
});
