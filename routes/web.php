<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PelangganController;

// Route untuk Halaman Utama
Route::get('/', [HomeController::class, 'index']);

// Route untuk Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route untuk Store Question
Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');

// Route untuk Pelanggan
Route::resource('pelanggan', PelangganController::class);