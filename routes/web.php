<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\EktrakurikulerController;

// HALAMAN UTAMA
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Ekstrakurikuler;
use App\Models\Berita;
use App\Models\Galery;
use App\Models\ProfileSekolah;

Route::get('/', function () {
    $totalSiswa = Siswa::count();
    $totalGuru = Guru::count();
    $totalEskul = Ekstrakurikuler::count();
    $totalBerita = Berita::count();
    $totalGaleri = Galery::count();

    $gurus = Guru::all();
    $ekstrakurikulers = Ekstrakurikuler::all(); // Mengambil seluruh data ekstrakurikuler
    $beritas = Berita::latest('tanggal')->take(3)->get();
    $galeries = Galery::latest()->get();
    $profil = ProfileSekolah::first();

    return view('landing', compact(
        'totalSiswa', 
        'totalGuru', 
        'totalEskul', 
        'totalBerita', 
        'totalGaleri', 
        'gurus', 
        'ekstrakurikulers', 
        'beritas', 
        'galeries', 
        'profil'
    ));
})->name('landing');


// LOGIN
Route::get('/login', [AuthController::class, 'index'])
    ->name('admin.login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('admin.login.process');

Route::post('/logout', [AuthController::class, 'logout'])
        ->name('admin.logout');

// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');


// LOGOUT


Route::get('/ekstrakurikuler', function () {
    $ekstrakurikulers = Ekstrakurikuler::latest()->get();

    $totalSiswa = Siswa::count();
    $totalGuru = Guru::count();
    $totalEskul = Ekstrakurikuler::count();

    $profil = ProfileSekolah::first();

    return view('menu.semua-ekstrakurikuler', compact(
        'ekstrakurikulers',
        'totalSiswa',
        'totalGuru',
        'totalEskul',
        'profil'
    ));


});

Route::get('/guru', function () {
    $gurus = Guru::latest()->get();

    $totalSiswa = Siswa::count();
    $totalGuru = Guru::count();
    $totalEskul = Ekstrakurikuler::count();

    $profil = ProfileSekolah::first();

    return view('menu.semua-guru', compact(
        'gurus',
        'totalSiswa',
        'totalGuru',
        'totalEskul',
        'profil'
    ));
})->name('guru.semua');


Route::get('/berita', function () {
    $beritas = Berita::latest('tanggal')->get();

    $totalSiswa = Siswa::count();
    $totalGuru = Guru::count();
    $totalEskul = Ekstrakurikuler::count();

    $profil = ProfileSekolah::first();

    return view('menu.semua-berita', compact(
        'beritas',
        'totalSiswa',
        'totalGuru',
        'totalEskul',
        'profil'
    ));
})->name('berita.semua');

Route::get('/galeri', function () {
    $galeris = Galery::latest()->get();

    return view('menu.semua-galeri', compact('galeris'));
})->name('galeri.semua');


// ADMIN
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('galeri', GaleriController::class);
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    
    Route::resource('berita', BeritaController::class)
        ->parameters(['berita' => 'berita'])
        ->except(['show']);

    Route::resource('ekstrakurikuler', EktrakurikulerController::class)
        ->except(['show']);

});

