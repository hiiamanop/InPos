<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\InposController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OutgoingController;
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

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::post('/auth', [AuthController::class, 'login']);



Route::group(['middleware' => ['auth']], function () {
});

// routing logout
Route::get('/logout', [AuthController::class, 'logout']);

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


 // Routing konfirmasi
 Route::get('/konfirmasi-post', [KonfirmasiController::class, 'post']); 
 Route::get('/konfirmasi-get', [KonfirmasiController::class, 'get']); 
 Route::get('/konfirmasi-staff', [KonfirmasiController::class, 'staff']); 

 // Routing Outgoing
 Route::get('/outgoing', [OutgoingController::class, 'index']);
 Route::get('/outgoing-preview', [OutgoingController::class, 'preview']);
 Route::get('/outgoing-hasil', [OutgoingController::class, 'hasil']);

// // routing ke halaman landing
Route::get('/landing', [LandingController::class, 'landing']);


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
