<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UktController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visi-misi-tujuan', function () {
    return view('visi');
});

Route::get('/tenaga-pendidik', function () {
    return view('pendidik');
});

Route::get('/tenaga-kependidikan', function () {
    return view('kependidikan');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/profil', [ProfilController::class, 'index'])->middleware('auth');

Route::post('/dashboard/profil', [ProfilController::class, 'changePassword'])->middleware('auth');

Route::get('/dashboard/profil/edit', [ProfilController::class, 'changeProfil'])->middleware('auth');
Route::post('/dashboard/profil/edit', [ProfilController::class, 'prosesChangeProfil'])->middleware('auth');

Route::resource('/dashboard/ukt', UktController::class)->except('show')->middleware('admin');
