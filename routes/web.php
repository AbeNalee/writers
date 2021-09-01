<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact');
Route::get('/terms-and-conditions', [\App\Http\Controllers\HomeController::class, 'terms'])->name('tacs');
Route::resource('file', \App\Http\Controllers\Admin\FileController::class);
