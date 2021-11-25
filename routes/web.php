<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProfilesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Rute umum yang terdaftar dengan middleware "web".
*/

Route::get('/',  fn () => Redirect::route('login'));

Route::view('/help', 'help')
    ->name('help');


Auth::routes([
    'verify' => true
]);



Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', [ProfilesController::class, 'edit'])
        ->name('profile');

    Route::put('/user', [ProfilesController::class, 'update'])
        ->name('profile.update');

    Route::post('/attachments', [AttachmentUploadersController::class, 'store'])
        ->name('attachments.store');
    Route::delete('/attachments', [AttachmentUploadersController::class, 'destroy'])
        ->name('attachments.destroy');
});
