<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\DataFileController;
use App\Http\Controllers\DataSelectController;
use App\Http\Controllers\DataTextController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');

Route::get('/teks', [DataTextController::class, 'index'])->name('teks');
Route::post('/teks/store', [DataTextController::class, 'store'])->name('teks.store');
Route::put('/teks/update/{id_text}', [DataTextController::class, 'update'])->name('teks.update');
Route::delete('/teks/delete/{id_text}', [DataTextController::class, 'delete'])->name('teks.delete');

Route::get('/file', [DataFileController::class, 'index'])->name('file');

Route::get('/select', [DataSelectController::class, 'index'])->name('select');
Route::post('/select/store', [DataSelectController::class, 'store'])->name('select.store');
Route::put('/select/update/{id_select}', [DataSelectController::class, 'update'])->name('select.update');
Route::delete('/select/delete/{id_select}', [DataSelectController::class, 'delete'])->name('select.delete');
