<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\EktrakurikulerController;




// HALAMAN UTAMA
Route::get('/', function () {
    return view('landing');
});


// LOGIN
Route::get('/admin/login', [AuthController::class, 'index'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.process');


// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');


// LOGOUT
Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');


// ADMIN
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::resource('users', UserController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('galeri', GaleriController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('berita', BeritaController::class)
        ->parameters(['berita' => 'berita'])
        ->except(['show']);

    Route::resource('ekstrakurikuler', EktrakurikulerController::class)
    ->except(['show']);

    
    
});