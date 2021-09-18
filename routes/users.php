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

Route::group(['prefix' => 'u'], function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('users.dashboard');


    Route::resource('/{username}', ProfilesController::class);
    Route::resource('/todos', TodosController::class);

    Route::resource('/reports', ReportsController::class)
        ->except(['index']);

    // TODO: followings & followers, feed dashboard, fork reports.

});
