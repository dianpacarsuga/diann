<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioDianController;

Route::get('/', [PortofolioDianController::class, 'index'])->name('cv');
Route::get('/admin', [PortofolioDianController::class, 'admin'])->name('admin');
Route::post('/admin/save', [PortofolioDianController::class, 'storeOrUpdate'])->name('admin.save');
Route::delete('/admin/delete/{id}', [PortofolioDianController::class, 'destroy'])->name('admin.delete');