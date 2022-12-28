<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SiswaMiddleware;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\OperatorMiddleware;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/operator/login', [AuthController::class, 'operatorLogin'])->name('operator.login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('loginProcess');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register/{tahun}', [AuthController::class, 'register'])->name('register');
Route::post('/register/{tahun}', [AuthController::class, 'registerProcess'])->name('registerProcess');

// Operator Route
Route::middleware([OperatorMiddleware::class])->group(function () {
    Route::prefix('/operator')->group(function () {
        Route::get('/', [OperatorController::class, 'index'])->name('operator.dashboard');
//        Route::get('/kelola-siswa', [OperatorController::class, 'kelolaSiswa'])->name('operator.kelola_siswa');
//        Route::get('/kelola-alumni', [OperatorController::class, 'kelolaAlumni'])->name('operator.kelola_alumni');

        Route::get('/kelola-siswa/{tahun}',[OperatorController::class,'kelolaSiswa'])->name('operator.kelola_siswa');
        Route::get('/hapus-data/{id}', [OperatorController::class, 'hapusData'])->name('operator.hapus_data');
        Route::get('/siswa/{id}', [OperatorController::class, 'detailSiswa'])->name('operator.detail_siswa');
        Route::get('/siswa/edit/{id}', [OperatorController::class, 'editSiswa'])->name('operator.edit_siswa');
        Route::post('/siswa/edit/{id}', [OperatorController::class, 'updateSiswa']);
        Route::get('/tambah-siswa/{tahun}', [OperatorController::class, 'tambahSiswa'])->name('operator.tambah_siswa');
        Route::post('/tambah-siswa/{tahun}', [OperatorController::class, 'tambahSiswaProcess']);

        Route::get('profile',[OperatorController::class,'profile'])->name('operator.profile');
        Route::post('/profile',[OperatorController::class,'updateProfile']);
    });
});

// Siswa Route
Route::middleware([SiswaMiddleware::class])->group(function () {
    Route::prefix('/siswa')->group(function () {
        Route::get('/', [SiswaController::class, 'index'])->name('siswa.dashboard');
        Route::get('/edit', [SiswaController::class, 'editSiswa'])->name('siswa.edit_siswa');
        Route::post('/edit', [SiswaController::class, 'updateSiswa']);
    });
});
