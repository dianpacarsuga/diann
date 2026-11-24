<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('auth.logout');
Route::get('/',[HomeController::class,'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store')
		->middleware('checkislogin');

Route::get('dashboard', [DashboardController::class, 'index'])
		->name('dashboard');
		
Route::resource('pelanggan', PelangganController::class);

Route::resource('portofolio', PortofolioController::class);

Route::resource('user', UserController::class);

Route::group(['middleware' => ['checkrole:admin']], function () {
	Route::get('user',[UserController::class, 'index'])->name('user.index');

});