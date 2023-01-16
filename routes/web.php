<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified'])->group(function () {
	Route::controller(DashboardController::class)->group(function () {
		Route::get('/', 'index')->name('home');
		Route::get('/bycountry', 'show')->name('bycountry');
	});

	Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
	Route::prefix('/register')->group(function () {
		Route::view('', 'register.create')->name('register.page');
		Route::post('', [RegisterController::class, 'register'])->name('register');
	});

	Route::prefix('/login')->group(function () {
		Route::view('', 'login.create')->name('login');
		Route::post('', [LoginController::class, 'login'])->name('auth');
	});

	Route::prefix('/email/verify')->group(function () {
		Route::view('', 'register.email-sent')->name('verification.notice');
		Route::get('/{id}/{hash}', [RegisterController::class, 'verify'])->name('verification.verify');
	});

	Route::prefix('/forgot-password')->group(function () {
		Route::view('', 'password.reset-password')->name('password.request');
		Route::post('', [PasswordController::class, 'recover'])->name('password.email');
	});

	Route::controller(PasswordController::class)->group(function () {
		Route::prefix('/reset-password')->group(function () {
			Route::get('/{token}', 'reset')->name('password.reset');
			Route::post('', 'update')->name('password.update');
		});
	});

	Route::view('/password/recover', 'password.email-sent')->name('password.notice');
});

Route::get('/change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');
