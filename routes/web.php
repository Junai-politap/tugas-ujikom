<?php

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


Route::prefix('admin')->group(function(){

    Route::resource('/', BerandaController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('tentang-kami', TentangKamiController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('berita', BackendBeritaController::class);

});



Route::get('/', [DashboardController::class, 'index']);
