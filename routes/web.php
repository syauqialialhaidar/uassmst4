<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PageController;
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

Route::get('/hitung', [HitungController::class, 'index'])->name('hitung.index');

Route::get('/daftarakun', [AuthController::class, 'showRegistrationForm'])->name('daftarakun');
Route::post('/daftarakun', [AuthController::class, 'daftarakun'])->name('daftarakun.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/forgot-password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/forgot-password', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');


Route::get('/reset-password', function () {
    return view('lupapass');
})->name('lupapass');

Route::post('/reset-password', [
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail',
    'as' => 'password.email'
]);


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/alternatif/{id}/edit', [AlternatifController::class, 'edit'])->name('alternatif.edit');
Route::put('/alternatif/{id}', [AlternatifController::class, 'update'])->name('alternatif.update');

Route::resource('/nilai', NilaiController::class)->parameters(['nilai' => 'nilai']);
Route::resource('/kriteria', KriteriaController::class)->parameters(['kriteria' => 'kriteria']);
Route::get('/kriteria/tambah', [KriteriaController::class, 'tambah'])->name('kriteria.tambah');

Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::post('/kriteria/store', [KriteriaController::class, 'store'])->name('kriteria.store');


Route::resource('/alternatif', AlternatifController::class)->parameters(['alternatif' => 'alternatif']);
Route::get('/',  [PageController::class, 'home'])->name('home');