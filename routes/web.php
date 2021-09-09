<?php

use App\Http\Controllers\Admin\TourController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/admin'], function () {
    Route::get('/create_tour', [TourController::class, 'create'])->name('tour.create');
    Route::post('/', [TourController::class, 'store'])->name('tour.store');
});

