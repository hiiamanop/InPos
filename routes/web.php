<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\InposController;
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

// routing login
Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('login');
    Route::post('/auth', [AuthController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/arsip');
});

Route::middleware(['auth'])->group(function () {
    // routing ke halaman dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // routing ke halaman arsip
    Route::get('/arsip', [ArsipController::class, 'showarsip']);

    // routing ke halaman unggah
    Route::get('/unggah', [UnggahController::class, 'index']);

    // routing ke halaman disposisi
    Route::get('/disposisi', [DisposisiController::class, 'index']);
    Route::get('/disposisi-kirim', [DisposisiController::class, 'disposisi']);

    //routing ke halaman disposisi-manajer
    Route::get('/disposisi-manajer', [ManajerController::class, 'index']);

    //routing ke halaman preview-file
    Route::get('/preview-file', [PreviewController::class, 'index']);

    //Routing unggah
    Route::post('/unggah/file', [InposController::class, 'storefile']);

    Route::delete('/arsip/delete/{file_pdf}', [InposController::class, 'delete']);
});


// // routing ke halaman dashboard
// Route::get('/dashboard', [DashboardController::class, 'index']);

// // routing ke halaman arsip
// Route::get('/arsip', [ArsipController::class, 'showarsip']);

// // routing ke halaman unggah
// Route::get('/unggah', [UnggahController::class, 'index']);

// // routing ke halaman disposisi
// Route::get('/disposisi', [DisposisiController::class, 'index']);
// Route::get('/disposisi-kirim', [DisposisiController::class, 'disposisi']);

// //routing ke halaman disposisi-manajer
// Route::get('/disposisi-manajer', [ManajerController::class, 'index']);

// //routing ke halaman preview-file
// Route::get('/preview-file', [PreviewController::class, 'index']);

// //Routing unggah
// Route::post('/unggah/file',[InposController::class,'storefile']);

