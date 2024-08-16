<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\viewtestController;
use App\Http\Controllers\absensiController;
use App\Http\Controllers\ResponController;



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

//Route::get('/', function () {return view('kerangka.master');});

Route::get('/dashboard' , [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/' , [loginController::class, 'index'])->name('login');
Route::get('/register' , [registerController::class, 'index'])->name('register');
Route::post('/regist' , [registerController::class, 'store'])->name('register.store');
Route::post('/log' , [loginController::class, 'login'])->name('login.store');
Route::post('/logout' , [loginController::class, 'logout'])->name('logout');

// Definisikan rute resource untuk Pegawai

// Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
// Route::get('/pegawai/absensi', [PegawaiController::class, 'getAbsensi'])->name('pegawai.absen');

Route::prefix('pegawai')->group(function(){
    Route::get('/', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::resource('pegawai', PegawaiController::class);
    Route::get('/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::get('/absensi', [PegawaiController::class, 'getAbsensi'])->name('pegawai.absen');
});

// Definisikan rute resource untuk Pelatihan
Route::resource('pelatihan', PelatihanController::class);
Route::get('/pelatihan/{pelatihan}', [PelatihanController::class, 'show'])->name('pelatihan.show');
Route::get('/pelatihan/create', [PelatihanController::class, 'create'])->name('pelatihan.create');
Route::get('/pelatihan/{id}', [PelatihanController::class, 'show'])->name('pelatihan.show');
Route::get('/pelatihan/{id}/edit', [PelatihanController::class, 'edit'])->name('pelatihan.edit');
Route::put('/pelatihan/{id}', [PelatihanController::class, 'update'])->name('pelatihan.update');
Route::delete('/pelatihan/{id}', [PelatihanController::class, 'destroy'])->name('pelatihan.destroy');


// Definisikan rute resource untuk Materi
Route::resource('materi', MateriController::class);

// Route::get('/addpelatihan' , [addpelatihanController::class, 'index'])->name('addpelatihan');
// Route::get('/viewpelatihan' , [viewpelatihanController::class, 'index'])->name('viewpelatihan');
// Route::get('/viewdetailpelatihan' , [viewpelatihanController::class, 'show'])->name('viewdetailpelatihan');
// Route::get('/viewtest' , [viewpelatihanController::class, 'viewtest'])->name('viewtest');

Route::get('/respon', [ResponController::class, 'index'])->name('respon.index');



Route::get('/viewtestquestion' , [viewtestController::class, 'index'])->name('viewtest2');
Route::get('/addtest' , [viewtestController::class, 'create'])->name('addtest');
Route::post('/storetest', [viewtestController::class, 'store'])->name('test.store');
Route::post('/store-test', [viewtestController::class, 'store'])->name('storetest');
Route::get('/showtest/{id}', [viewtestController::class, 'show'])->name('viewtest2');
// Route for editing a test
Route::get('test/{id}/edit', [viewtestController::class, 'edit'])->name('test.edit');

// Route for updating a test
Route::put('test/{id}', [viewtestController::class, 'update'])->name('test.update');

// Route for deleting a test
Route::delete('test/{id}', [viewtestController::class, 'destroy'])->name('test.destroy');

Route::post('/test/{testId}/respon', [viewtestController::class, 'storerespons'])->name('test.respon.store');
// Route for storing the test response
Route::post('test/{id}/respon', [viewtestController::class, 'store'])->name('test.respon.store');

Route::get('/showtest' , [viewtestController::class, 'index'])->name('showtest');

Route::get('/absensi' , [absensiController::class, 'index'])->name('absensi');
Route::post('/absensi/create', [absensiController::class, 'create'])->name('absensi.create');


