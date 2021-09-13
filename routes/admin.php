<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\TourController;

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

// Auth::routes();

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('adminLogin');
Route::post('/login', [LoginController::class, 'loginCheck'])->name('login.check');
Route::post('/logout', [LoginController::class, 'logout'])->name('adminLogout');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

Route::get('tours/getDataTour', [TourController::class, 'getDataTour'])->name('tours.getDataTour');
Route::resource('tours', TourController::class);
Route::resource('categories', CategoryController::class);
