<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Users\ProfilesController;
use App\Http\Controllers\Users\TodosController;
use App\Http\Controllers\Users\TimelineController;
use App\Http\Controllers\Users\ProfileReportController;
use App\Http\Controllers\Users\ReportsController;
use App\Http\Livewire\Report\CreatedPage;
use App\Http\Livewire\Report\EditedPage;
use App\Http\Livewire\Report\GraphFormPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Rute role:users yang terdaftar dengan middleware ["web", "verified", "auth"].
*/

Route::prefix('u')->name('users.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Route::get('/{user:name}-{user:id}/laporan', [ProfileReportController::class, 'index'])
    //     ->name('profiles.report');

    Route::resource('todos', TodosController::class);
    Route::get('linimasa', [TimelineController::class, 'index'])
        ->name('timeline');

    Route::prefix('/laporan')->name('reports.')->group(function () {
        Route::get('/buat', [ReportsController::class, 'create'])
            ->name('create');
        Route::post('/buat', [ReportsController::class, 'store'])
            ->name('store');

        Route::get('/ubah', [ReportsController::class, 'edit'])
            ->name('edit');
        Route::put('/ubah', [ReportsController::class, 'update'])
            ->name('update');

        Route::delete('/hapus', [ReportsController::class, 'destroy'])
            ->name('destroy');

        Route::get('/{report:slug}/grafik', GraphFormPage::class)
            ->name('graph');
    });
});
