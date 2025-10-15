<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('beranda');
Route::get('/profil', [UserController::class, 'profilIndex'])->name('profil');
Route::get('/jurusan', [UserController::class, 'jurusanIndex'])->name('jurusan');
Route::get('/sarpras', [UserController::class, 'sarprasIndex'])->name('sarpras');
Route::get('/eskul', [UserController::class, 'eskulIndex'])->name('eskul');
Route::get('/rombel', [UserController::class, 'rombelIndex'])->name('rombel');
Route::get('/guru', [UserController::class, 'guruIndex'])->name('guru');
Route::get('/galeri', [UserController::class, 'galeriIndex'])->name('galeri');
