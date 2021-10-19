<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


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

