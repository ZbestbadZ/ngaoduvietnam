<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');

Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {

    // Route::get('dashboard','AdminController@dashboard')->name('dashboard');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
