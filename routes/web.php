<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\AttachmentUploadersController;

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

    Route::resource('attachments', AttachmentUploadersController::class)
        ->only(['store', 'destroy']);

});
