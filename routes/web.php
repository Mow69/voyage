<?php

use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', [StaticController::class, 'home']);

Route::get('trips', [StaticController::class, 'trips']);

Route::get('trip', [StaticController::class, 'trip']);

Route::fallback(function() {
    return '404 : cette page n\'existe pas ou n\'existe plus.';
});
