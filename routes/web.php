<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\UnggahController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// routing login
Route::get('/login', [AuthController::class, 'login'])->name('login');

// routing logout
Route::get('/logout', [AuthController::class, 'login'])->name('logout');

// routing ke halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// routing ke halaman arsip
Route::get('/arsip', [ArsipController::class, 'index']);

// routing ke halaman unggah
Route::get('/unggah', [UnggahController::class, 'index']);

// routing ke halaman disposisi
Route::get('/disposisi', [DisposisiController::class, 'index']);
Route::get('/disposisi-kirim', [DisposisiController::class, 'disposisi']);