<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Users\ProfilesController;
use App\Http\Controllers\Users\TodosController;
use App\Http\Controllers\Users\TimelineController;
use App\Http\Controllers\Users\ProfileReportController;
use App\Http\Livewire\Report\CreatedPage;
use App\Http\Livewire\Report\EditedPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Rute role:users yang terdaftar dengan middleware ["web", "verified", "auth"].
*/

Route::prefix('u')->name('users.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/{name}-{id}/laporan', [ProfileReportController::class, 'index'])
        ->name('profiles.report');

    Route::resource('todos', TodosController::class);
    Route::get('linimasa', [TimelineController::class, 'index'])
        ->name('timeline');

    Route::prefix('/laporan')->name('reports.')->group(function () {
        Route::get('/buat', CreatedPage::class)
            ->name('create');
        Route::get('/ubah', EditedPage::class)
            ->name('edit');
    });


    // TODO: Feed dashboard, Fork reports.
});
