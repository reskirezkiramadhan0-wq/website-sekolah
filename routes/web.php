
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AuthController;


// ===============================
// HALAMAN UTAMA
// ===============================

Route::get('/', function () {
    return view('template');
});


// ===============================
// LOGIN ADMIN
// ===============================

Route::get('/admin/login', [AuthController::class, 'index'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.process');


// ===============================
// LOGOUT
// ===============================

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');


// ===============================
// CRUD USER
// ===============================

Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('users', UserController::class);

});
