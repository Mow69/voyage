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


Route::get('/', [StaticController::class, 'home'])->name('home');

Route::get('trips', [StaticController::class, 'trips'])->name('trips');

Route::get('trip/{id}', [StaticController::class, 'trip'])->name('trip');

Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
})->name('aboutus');

Route::get('/contact', function () {
    return view('contact.contact')->name('contact');
});

Route::fallback(function() {
    return '404 : cette page n\'existe pas ou n\'existe plus.';
})->name('404');
