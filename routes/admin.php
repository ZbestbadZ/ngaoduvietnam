<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

//Route::get('/admin/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
//Route::post('/admin/login', [AdminAuthController::class, 'loginCheck'])->name('login.check');
//Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');


Route::group(['middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
});
