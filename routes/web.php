<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'ppdb.beranda')->name('beranda');

Route::view('/masuk', 'auth.login-siswa')->name('login.siswa');
Route::view('/masuk-admin', 'auth.login-admin')->name('login.admin');

Route::middleware(['auth'])->prefix('siswa')->name('siswa.')->group(function () {
    Route::view('/dashboard', 'ppdb.siswa.dashboard')->name('dashboard');
    Route::view('/pendaftaran', 'ppdb.siswa.formulir')->name('pendaftaran');
});

Route::middleware(['auth'])->prefix('panitia')->name('panitia.')->group(function () {
    Route::view('/dashboard', 'ppdb.panitia.dashboard')->name('dashboard');
});
