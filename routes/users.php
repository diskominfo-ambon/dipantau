<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Users\ProfilesController;
use App\Http\Controllers\Users\TodosController;
use App\Http\Controllers\Users\ReportsController;
use App\Http\Controllers\Users\TimelineController;
use App\Http\Controllers\Users\ProfileReportController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Rute role:users yang terdaftar dengan middleware ["web", "verified", "auth"].
*/

Route::prefix('u')->name('users.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/profile/reports', [ProfileReportController::class, 'index'])
        ->name('profiles.report');

    Route::resource('todos', TodosController::class);
    Route::get('linimasa', [TimelineController::class, 'index'])
        ->name('timeline');

    Route::resource('reports', ReportsController::class)
        ->except(['index']);

    // TODO: Feed dashboard, Fork reports.
});
