<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\BerandaController;
use App\Http\Controllers\Backend\BeritaController as BackendBeritaController;
use App\Http\Controllers\Backend\KegiatanController;
use App\Http\Controllers\Backend\KontakController;
use App\Http\Controllers\Backend\TentangKamiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Frontend\BerandaController as FrontendBerandaController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\FrontendController;
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



    Route::prefix('admin')->middleware('auth')->group(function(){
        Route::resource('/', BerandaController::class);
        Route::resource('kegiatan', KegiatanController::class);
        Route::resource('tentang-kami', TentangKamiController::class);
        Route::resource('kontak', KontakController::class);
        Route::resource('berita', BackendBeritaController::class);
    });





Route::get('/', [DashboardController::class, 'index']);
Route::get('/detail-berita/{id}', [DashboardController::class, 'showBerita']);
Route::get('/detail-kegiatan/{id}', [DashboardController::class, 'showKegiatan']);


Route::get('/admin-add', [AuthController::class, 'test']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);
