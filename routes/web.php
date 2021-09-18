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

Auth::routes([
    'verify' => true
]);
