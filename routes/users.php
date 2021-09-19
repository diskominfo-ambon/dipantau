<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Users\ProfilesController;
use App\Http\Controllers\Users\TodosController;
use App\Http\Controllers\Users\ReportsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Rute role:users yang terdaftar dengan middleware ["web", "verified", "auth"].
*/

Route::prefix('u')->name('users.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');


    Route::resource('todos', TodosController::class);
    Route::resource('reports', ReportsController::class)
        ->except(['index']);

    Route::resource('me', ProfilesController::class);


    // TODO: followings & followers, feed dashboard, fork reports.

});
