<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KriteriaController;   
use Illuminate\Support\Facades\Route;
//127.0.0.1:8000/ ==> view welcome

// Route::get('/', [LoginController::class, 'login'])->name('login');
// // routes/web.php


Route::post('/', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login_proses'])->name('login.proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::post('/login', [LoginController::class, 'login'])->name('login');



use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;

Route::get('/forgot-password', [PasswordController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [PasswordController::class, 'forgot_password_act'])->name('forgot-password-act');

Route::get('/validasi-forgot-password/{token}', [PasswordController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [PasswordController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register-proses', [RegisterController::class, 'register'])->name('register-proses');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

route::get('/sidebar',[SidebarController::class, 'halamansidebar']);

Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria.index');
Route::get('/kriteria/create', [KriteriaController::class, 'create'])->name('kriteria.create');
Route::post('/kriteria/store', [KriteriaController::class, 'store'])->name('kriteria.store');
Route::get('/kriteria/edit/{id}', [KriteriaController::class, 'edit'])->name('kriteria.edit');
Route::put('/kriteria/update/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
Route::delete('kriteria/delete/{id}', [KriteriaController::class, 'destroy']);

use App\Http\Controllers\AlternatifController; 
use App\Http\Controllers\DataHotelController; 
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\AdminController;
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/datahotel', [DataHotelController::class, 'index'])->name('admin.datahotel');
Route::get('/alternatif', [AlternatifController::class, 'alternatif'])->name('admin.alternatif');
Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria.index');
Route::get('/perhitungan', [PerhitunganController::class, 'hitung'])->name('perhitungan');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/datahotel', [DataHotelController::class, 'index'])->name('admin.datahotel');
Route::post('/alternatif/store', [AlternatifController::class, 'store'])->name('alternatif.store');
Route::get('/adddataalternatif', [AlternatifController::class, 'create'])->name('alternatif.create');
Route::put('/alternatif/update/{id}', [DataHotelController::class, 'update']);
Route::get('/alternatif/{id}/edit', 'AlternatifController@edit')->name('alternatif.edit');

Route::delete('/alternatif/hotel/{id}', [DataHotelController::class, 'destroy']);

Route::get('/datahotel/create', [DataHotelController::class, 'create'])->name('datahotel.create');
Route::post('/datahotel/save', [DataHotelController::class, 'save']);
Route::post('/datahotel/store', [DataHotelController::class, 'store'])->name('datahotel.store');
Route::put('/datahotel/update/{id}', [DataHotelController::class, 'update'])->name('datahotel.update');
Route::delete('/datahotel/{id}', [DataHotelController::class, 'delete'])->name('datahotel.delete');
Route::delete('datahotel/delete/{id}', [DataHotelController::class, 'destroy'])->name('datahotel.delete');

// Route::get('/datahotel/edit/{id}', [DataHotelController::class, 'edit'])->name('datahotel.edit');
// Route::get('/datahotel/delete/{id}', [DataHotelController::class, 'delete'])->name('datahotel.delete');
Route::put('/datahotel/edit/{id}', [DataHotelController::class, 'update'])->name('datahotel.update');



Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif.index');
Route::post('/alternatif/hotel', [AlternatifController::class, 'hotel'])->name('alternatif.hotel');
Route::put('/alternatif/update/{alternatif}', [AlternatifController::class, 'update'])->name('alternatif.update');
Route::delete('alternatif/delete/{id}', [AlternatifController::class, 'destroy'])->name('alternatif.delete');

Route::get('/adddatahotel', [DataHotelController::class, 'index'])->name('admin.datahotel');
Route::get('/adddatahotel', [DataHotelController::class, 'create'])->name('adddatahotel');

Route::get('/hitung', [HitungController::class, 'hitung'])->name('hitung');