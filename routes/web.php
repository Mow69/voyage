<?php

use App\Http\Controllers\AdminController;
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

// USER:  /posts
Route::get('/', [StaticController::class, 'home'])->name('home');

Route::get('trips', [StaticController::class, 'trips'])->name('trips');


Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
})->name('aboutus');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::get('trip/{id}', [StaticController::class, 'trip'])->whereNumber('id')->name('trip');

// ADMIN:  /admin
Route::get('/admin/trips', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/trips/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/trips/store', [AdminController::class, 'store'])->name('admin.store');

Route::get('/admin/trips/{id}/delete', [AdminController::class, 'destroy'])->whereNumber('id')->name('admin.delete');
Route::get('/admin/trips/{id}/edit', [AdminController::class, 'edit'])->whereNumber('id')->name('admin.edit');
Route::put('/admin/trips/{id}/update', [AdminController::class, 'update'])->whereNumber('id')->name('admin.update');
Route::get('/admin/trips/{id}', [AdminController::class, 'show'])->whereNumber('id')->name('admin.show');


Route::fallback(function() {
    return '404 : cette page n\'existe pas ou n\'existe plus.';
})->name('404');
