<?php

use App\Http\Controllers\Admin\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
});

Route::group(['prefix' => '/admin'], function () {
    Route::get('/create_tour', [TourController::class, 'create'])->name('tour.create');
    Route::post('/', [TourController::class, 'store'])->name('tour.store');
});

